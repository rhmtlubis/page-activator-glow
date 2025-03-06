
// Wait for the DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
    // Initialize variables
    let autoplayEnabled = false;
    let autoplayInterval;
    const music = document.getElementById('music');
    const loader = document.getElementById('loader');
    const btnMusic = document.getElementById('btnMusic');
    const btnAutoplay = document.getElementById('btnAutoplay');
    const btnOpenInvitation = document.querySelector('.btn-open-invitation');
    const canvas = document.querySelector('.canvas');
    const satumomenSlides = document.querySelectorAll('.satumomen_slide');
    const satumomenMenuItems = document.querySelectorAll('.satumomen_menu_item');
    const btnRsvp = document.querySelector('.btn-rsvp');
    const modalRSVP = document.getElementById('rsvpModal');
    const modalQR = document.getElementById('qrModal');
    const btnQRModal = document.getElementById('btnQrModal');
    
    // Hide loader after page is loaded
    window.addEventListener('load', function() {
        setTimeout(function() {
            if (loader) {
                loader.style.display = 'none';
            }
        }, 1000);
    });
    
    // Music controls
    function toggleMusic() {
        if (music) {
            if (music.paused) {
                music.play();
                if (btnMusic) btnMusic.classList.add('active');
            } else {
                music.pause();
                if (btnMusic) btnMusic.classList.remove('active');
            }
        }
    }
    
    // Open invitation button
    if (btnOpenInvitation) {
        btnOpenInvitation.addEventListener('click', function() {
            if (canvas) {
                canvas.classList.remove('not-open');
                if (music) music.play();
                if (btnMusic) btnMusic.classList.add('active');
            }
        });
    }
    
    // Autoplay controls
    function toggleAutoplay() {
        autoplayEnabled = !autoplayEnabled;
        if (autoplayEnabled) {
            if (btnAutoplay) btnAutoplay.classList.add('active');
            autoplayInterval = setInterval(goToNextSlide, 5000);
        } else {
            if (btnAutoplay) btnAutoplay.classList.remove('active');
            clearInterval(autoplayInterval);
        }
    }
    
    function goToNextSlide() {
        const currentIndex = findActiveSlideIndex();
        if (currentIndex < satumomenSlides.length - 1) {
            activateSlide(currentIndex + 1);
        } else {
            activateSlide(0);
        }
    }
    
    function findActiveSlideIndex() {
        for (let i = 0; i < satumomenMenuItems.length; i++) {
            if (satumomenMenuItems[i].classList.contains('active')) {
                return i;
            }
        }
        return 0;
    }
    
    function activateSlide(index) {
        // Remove active class from all slides and menu items
        satumomenSlides.forEach(slide => slide.classList.remove('active'));
        satumomenMenuItems.forEach(item => item.classList.remove('active'));
        
        // Add active class to specified slide and menu item
        if (satumomenSlides[index]) satumomenSlides[index].classList.add('active');
        if (satumomenMenuItems[index]) satumomenMenuItems[index].classList.add('active');
    }
    
    // Add click event to menu items
    satumomenMenuItems.forEach((item, index) => {
        item.addEventListener('click', function() {
            activateSlide(index);
        });
    });
    
    // Modal controls
    function showModal(modalId) {
        const modal = document.getElementById(modalId);
        if (modal) {
            modal.classList.add('show');
            document.getElementById('modalOverlay').style.display = 'block';
        }
    }
    
    function closeModal(modalId) {
        const modal = document.getElementById(modalId);
        if (modal) {
            modal.classList.remove('show');
            document.getElementById('modalOverlay').style.display = 'none';
        }
    }
    
    // RSVP button
    if (btnRsvp) {
        btnRsvp.addEventListener('click', function() {
            showModal('rsvpModal');
        });
    }
    
    // QR Modal button
    if (btnQRModal) {
        btnQRModal.addEventListener('click', function() {
            showModal('qrModal');
        });
    }
    
    // Close buttons for modals
    document.querySelectorAll('.close-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const modalId = this.closest('.modal').id;
            closeModal(modalId);
        });
    });
    
    // Update countdown timer
    function updateCountdown() {
        const countdownWrapper = document.querySelector('.countdown-wrapper');
        if (!countdownWrapper) return;
        
        const targetDateStr = countdownWrapper.getAttribute('data-datetime');
        if (!targetDateStr) return;
        
        const targetDate = new Date(targetDateStr);
        const now = new Date();
        
        const difference = targetDate - now;
        
        if (difference <= 0) {
            document.getElementById('days').textContent = '00';
            document.getElementById('hours').textContent = '00';
            document.getElementById('minutes').textContent = '00';
            document.getElementById('seconds').textContent = '00';
            return;
        }
        
        const days = Math.floor(difference / (1000 * 60 * 60 * 24));
        const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((difference % (1000 * 60)) / 1000);
        
        document.getElementById('days').textContent = days.toString().padStart(2, '0');
        document.getElementById('hours').textContent = hours.toString().padStart(2, '0');
        document.getElementById('minutes').textContent = minutes.toString().padStart(2, '0');
        document.getElementById('seconds').textContent = seconds.toString().padStart(2, '0');
    }
    
    // Update countdown every second
    setInterval(updateCountdown, 1000);
    updateCountdown();
    
    // Make functions globally accessible
    window.toggleMusic = toggleMusic;
    window.toggleAutoplay = toggleAutoplay;
    window.showModal = showModal;
    window.closeModal = closeModal;
});
