// Page Navigation
function showPage(pageId) {
  document.querySelectorAll(".page").forEach((page) => {
    page.classList.remove("active")
  })
  document.getElementById(pageId).classList.add("active")

  // Update navigation
  document.querySelectorAll(".nav-item").forEach((item) => {
    item.classList.remove("active")
  })
  document.querySelector(`[data-page="${pageId}"]`).classList.add("active")
}

// Initialize navigation
document.querySelectorAll(".nav-item").forEach((item) => {
  item.addEventListener("click", (e) => {
    e.preventDefault()
    const pageId = item.getAttribute("data-page")
    showPage(pageId)
  })
})

// Open invitation
function openInvitation() {
  const canvas = document.querySelector(".canvas")
  if (canvas) {
    canvas.classList.remove("not-open")
    playMusic()
  }
}

// Music Controls
const bgMusic = document.getElementById("bgMusic")
const isMusicPlaying = false

// Music controls
let isPlaying = false

function playMusic() {
  const music = document.getElementById("music")
  if (music) {
    music.play().catch((error) => {
      console.log("Audio play failed:", error)
    })
    isPlaying = true
    updateMusicButton()
  }
}

function toggleMusic() {
  const music = document.getElementById("music")
  const musicBtn = document.getElementById("btnMusic")

  if (!music) return

  if (isPlaying) {
    music.pause()
    musicBtn.classList.remove("active")
  } else {
    music.play().catch((error) => {
      console.log("Audio play failed:", error)
    })
    musicBtn.classList.add("active")
  }

  isPlaying = !isPlaying
}

function updateMusicButton() {
  const musicBtn = document.getElementById("btnMusic")
  if (musicBtn) {
    if (isPlaying) {
      musicBtn.classList.add("active")
    } else {
      musicBtn.classList.remove("active")
    }
  }
}

function toggleSound() {
  if (bgMusic.muted) {
    bgMusic.muted = false
    document.querySelector('[alt="Sound"]').src = "sound-icon.png"
  } else {
    bgMusic.muted = true
    document.querySelector('[alt="Sound"]').src = "mute-icon.png"
  }
}

// Gallery Controls
function toggleGallery() {
  // Implement gallery functionality
  console.log("Gallery toggled")
}

// Initialize
document.addEventListener("DOMContentLoaded", () => {
  // Show cover page initially
  showPage("cover")
})

// Wait for DOM to load
document.addEventListener("DOMContentLoaded", () => {
  // Hide loader after page loads
  setTimeout(() => {
    document.getElementById("loader").style.display = "none"
  }, 1500)

  // Initialize slide navigation
  initSlideNavigation()

  // Initialize countdown
  initCountdown()

  // Add click handler for open invitation button
  const openBtn = document.querySelector(".btn-open-invitation")
  if (openBtn) {
    openBtn.addEventListener("click", openInvitation)
  }

  // Add click handler for RSVP button
  const rsvpBtn = document.querySelector(".btn-rsvp")
  if (rsvpBtn) {
    rsvpBtn.addEventListener("click", () => {
      showModal("rsvpModal")
    })
  }
})

// Autoplay controls
let isAutoplay = false
let autoplayInterval

function toggleAutoplay() {
  const autoplayBtn = document.getElementById("btnAutoplay")

  if (isAutoplay) {
    clearInterval(autoplayInterval)
    if (autoplayBtn) autoplayBtn.classList.remove("active")
  } else {
    autoplayInterval = setInterval(() => {
      const nextSlide = (currentSlide + 1) % document.querySelectorAll(".satumomen_slide").length
      showSlide(nextSlide)
    }, 5000)
    if (autoplayBtn) autoplayBtn.classList.add("active")
  }

  isAutoplay = !isAutoplay
}

// Slide Navigation
let currentSlide = 0

function initSlideNavigation() {
  const menuItems = document.querySelectorAll(".satumomen_menu_item")

  menuItems.forEach((item, index) => {
    item.addEventListener("click", () => {
      showSlide(index)
    })
  })

  // Set first menu item as active
  if (menuItems.length > 0) {
    menuItems[0].classList.add("active")
  }
}

function showSlide(index) {
  const slides = document.querySelectorAll(".satumomen_slide")
  const menuItems = document.querySelectorAll(".satumomen_menu_item")

  // Update current slide
  currentSlide = index

  // Update slide position
  const slideList = document.querySelector(".satumomen_list")
  if (slideList) {
    slideList.style.transform = `translateY(-${index * 100}%)`
  }

  // Update menu items
  menuItems.forEach((item, i) => {
    if (i === index) {
      item.classList.add("active")
    } else {
      item.classList.remove("active")
    }
  })
}

// Initialize countdown
function initCountdown() {
  // Get the countdown date from the data attribute
  const countdownWrapper = document.querySelector(".countdown-wrapper")
  if (!countdownWrapper) return

  const dateTimeStr = countdownWrapper.getAttribute("data-datetime") || "2024-12-07T11:00:00"
  const weddingDate = new Date(dateTimeStr)

  function updateCountdown() {
    const now = new Date()
    const diff = weddingDate - now

    const days = document.getElementById("days")
    const hours = document.getElementById("hours")
    const minutes = document.getElementById("minutes")
    const seconds = document.getElementById("seconds")

    if (!days || !hours || !minutes || !seconds) return

    if (diff <= 0) {
      // Wedding day has arrived
      days.innerText = "00"
      hours.innerText = "00"
      minutes.innerText = "00"
      seconds.innerText = "00"
      return
    }

    const d = Math.floor(diff / (1000 * 60 * 60 * 24))
    const h = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60))
    const m = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60))
    const s = Math.floor((diff % (1000 * 60)) / 1000)

    days.innerText = d.toString().padStart(2, "0")
    hours.innerText = h.toString().padStart(2, "0")
    minutes.innerText = m.toString().padStart(2, "0")
    seconds.innerText = s.toString().padStart(2, "0")
  }

  // Update countdown every second
  updateCountdown()
  setInterval(updateCountdown, 1000)
}

// Modal functions
function showModal(modalId) {
  const modal = document.getElementById(modalId)
  if (modal) {
    modal.classList.add("show")
    document.body.style.overflow = "hidden"
  }
}

function closeModal(modalId) {
  const modal = document.getElementById(modalId)
  if (modal) {
    modal.classList.remove("show")
    document.body.style.overflow = "auto"
  }
}

// Show QR Modal
function showQrModal() {
  showModal("qrModal")
}

// Show RSVP Modal
function showRsvpModal() {
  showModal("rsvpModal")
}

// Handle RSVP Form submission
document.addEventListener("DOMContentLoaded", () => {
  const rsvpForm = document.getElementById("rsvpForm")
  if (rsvpForm) {
    rsvpForm.addEventListener("submit", (e) => {
      e.preventDefault()

      // Get form data
      const name = document.getElementById("name").value
      const attendance = document.getElementById("attendance").value
      const guestCount = document.getElementById("guest_count").value
      const message = document.getElementById("message").value

      // Here you would typically send the data to the server
      // For this example, we'll just show a success message
      alert("Terima kasih! Ucapan Anda telah dikirim.")

      // Close the modal
      closeModal("rsvpModal")
    })
  }
})

