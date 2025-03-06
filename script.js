
document.addEventListener('DOMContentLoaded', function() {
    // Hide loader when page is loaded
    const loader = document.getElementById('loader');
    if (loader) {
        window.addEventListener('load', function() {
            loader.style.display = 'none';
        });
    }

    // Open invitation button
    const btnOpenInvitation = document.querySelector('.btn-open-invitation');
    if (btnOpenInvitation) {
        btnOpenInvitation.addEventListener('click', function() {
            const canvas = document.querySelector('.canvas');
            if (canvas) {
                canvas.classList.remove('not-open');
                
                // Play music automatically when invitation is opened
                const music = document.getElementById('music');
                if (music) {
                    music.play().catch(e => console.log('Audio autoplay prevented: ' + e));
                }
            }
        });
    }

    // Nav menu functionality
    const menuItems = document.querySelectorAll('.satumomen_menu_item');
    if (menuItems && menuItems.length > 0) {
        // Set first menu item as active initially
        menuItems[0].classList.add('active');
        
        menuItems.forEach(function(item, index) {
            item.addEventListener('click', function() {
                // Remove active class from all items
                menuItems.forEach(function(menuItem) {
                    menuItem.classList.remove('active');
                });
                
                // Add active class to clicked item
                item.classList.add('active');
                
                // Scroll to the corresponding slide
                const slideList = document.querySelector('.satumomen_list');
                if (slideList) {
                    const slideHeight = slideList.offsetHeight;
                    slideList.style.transform = 'translateY(-' + (index * slideHeight) + 'px)';
                }
            });
        });
    }

    // Modal functions
    window.showModal = function(modalId) {
        const modal = document.getElementById(modalId);
        const overlay = document.getElementById('modalOverlay');
        
        if (modal) {
            modal.classList.add('show');
            modal.style.display = 'flex';
            
            if (overlay) {
                overlay.style.display = 'block';
                setTimeout(function() {
                    overlay.classList.add('show');
                }, 10);
            }
        }
    }

    window.closeModal = function(modalId) {
        const modal = document.getElementById(modalId);
        const overlay = document.getElementById('modalOverlay');
        
        if (modal) {
            modal.classList.remove('show');
            setTimeout(function() {
                modal.style.display = 'none';
            }, 300);
            
            if (overlay) {
                overlay.classList.remove('show');
                setTimeout(function() {
                    overlay.style.display = 'none';
                }, 300);
            }
        }
    }

    // RSVP button
    const btnRsvp = document.querySelector('.btn-rsvp');
    if (btnRsvp) {
        btnRsvp.addEventListener('click', function() {
            showModal('rsvpModal');
        });
    }

    // Music toggle
    window.toggleMusic = function() {
        const music = document.getElementById('music');
        const btnMusic = document.getElementById('btnMusic');
        
        if (music && btnMusic) {
            if (music.paused) {
                music.play();
                btnMusic.classList.remove('active');
            } else {
                music.pause();
                btnMusic.classList.add('active');
            }
        }
    }

    // Autoplay toggle
    let autoplayInterval;
    window.toggleAutoplay = function() {
        const btnAutoplay = document.getElementById('btnAutoplay');
        
        if (btnAutoplay) {
            if (btnAutoplay.classList.contains('active')) {
                // Stop autoplay
                btnAutoplay.classList.remove('active');
                clearInterval(autoplayInterval);
            } else {
                // Start autoplay
                btnAutoplay.classList.add('active');
                let currentIndex = 0;
                
                autoplayInterval = setInterval(function() {
                    const menuItems = document.querySelectorAll('.satumomen_menu_item');
                    if (menuItems && menuItems.length > 0) {
                        currentIndex = (currentIndex + 1) % menuItems.length;
                        menuItems[currentIndex].click();
                    }
                }, 5000); // Change slide every 5 seconds
            }
        }
    }

    // Countdown timer
    function updateCountdown() {
        const countdownWrapper = document.querySelector('.countdown-wrapper');
        if (!countdownWrapper) return;
        
        const targetDatetime = countdownWrapper.getAttribute('data-datetime');
        if (!targetDatetime) return;
        
        const targetDate = new Date(targetDatetime).getTime();
        const now = new Date().getTime();
        const distance = targetDate - now;
        
        // Time calculations
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
        // Update elements
        const daysElement = document.getElementById('days');
        const hoursElement = document.getElementById('hours');
        const minutesElement = document.getElementById('minutes');
        const secondsElement = document.getElementById('seconds');
        
        if (daysElement) daysElement.textContent = days.toString().padStart(2, '0');
        if (hoursElement) hoursElement.textContent = hours.toString().padStart(2, '0');
        if (minutesElement) minutesElement.textContent = minutes.toString().padStart(2, '0');
        if (secondsElement) secondsElement.textContent = seconds.toString().padStart(2, '0');
    }
    
    // Update countdown every second
    setInterval(updateCountdown, 1000);
    updateCountdown(); // Initial call
});
