document.addEventListener("DOMContentLoaded", () => {
  // ========== Header Dropdown Navigation ==========
  const dropdownItems = document.querySelectorAll("li.has-dropdown");
  const langSelector = document.querySelector(".site-header__lang");

  dropdownItems.forEach((item) => {
    const button = item.querySelector('button[aria-haspopup="true"]');
    const menuId = button?.getAttribute("aria-controls");
    const menu = document.getElementById(menuId);

    item.addEventListener("mouseenter", () => {
      if (langSelector) langSelector.classList.remove("active");
      button.setAttribute("aria-expanded", "true");
      if (menu) menu.hidden = false;
    });

    item.addEventListener("mouseleave", () => {
      button.setAttribute("aria-expanded", "false");
      if (menu) menu.hidden = true;
    });
  });

  document.addEventListener("click", (event) => {
    dropdownItems.forEach((item) => {
      const button = item.querySelector('button[aria-haspopup="true"]');
      if (!button) return;

      const menuId = button.getAttribute("aria-controls");
      const menu = document.getElementById(menuId);

      if (menu && !item.contains(event.target)) {
        button.setAttribute("aria-expanded", "false");
        menu.hidden = true;
      }
    });
  });

  // ========== Language Selector Dropdown ==========
  const langBtn = document.querySelector(".site-header__lang-btn");
  const langWrapper = document.querySelector(".site-header__lang");

  if (langBtn && langWrapper) {
    langBtn.addEventListener("click", (e) => {
      e.stopPropagation();
      langWrapper.classList.toggle("active");
    });

    document.addEventListener("click", (e) => {
      if (!langWrapper.contains(e.target)) {
        langWrapper.classList.remove("active");
      }
    });

    // Change language functionality
    const langOptions = document.querySelectorAll(".site-header__lang-option");
    langOptions.forEach((option) => {
      option.addEventListener("click", () => {
        langOptions.forEach((opt) => {
          opt.classList.remove("site-header__lang-option--selected");
        });
        option.classList.add("site-header__lang-option--selected");
        const selectedLang = option.getAttribute("data-lang");
        console.log("Language selected:", selectedLang);
      });
    });
  }

  // ========== Video Popup ==========
  window._wq = window._wq || [];
  let wistiaPlayer = null;
  let pendingOpen = false;

  _wq.push({
    id: "fjcfsbutc4",
    onReady: function (video) {
      wistiaPlayer = video;
      if (pendingOpen) {
        pendingOpen = false;
        openPopup(true);
      }
    },
  });

  const openBtn = document.getElementById("openPopup");
  const overlay = document.getElementById("popupOverlay");
  const closeBtn = document.getElementById("popupClose");

  function startVideo() {
    if (wistiaPlayer) {
      wistiaPlayer.time(0);
      wistiaPlayer.play();
    }
  }

  function stopVideo() {
    if (wistiaPlayer) {
      wistiaPlayer.pause();
    }
  }

  function openPopup(fromReady = false) {
    overlay.classList.add("active");
    if (wistiaPlayer) {
      startVideo();
    } else if (!fromReady) {
      pendingOpen = true;
    }
  }

  function closePopup() {
    overlay.classList.remove("active");
    if (wistiaPlayer) stopVideo();
  }

  if (openBtn) {
    openBtn.addEventListener("click", () => openPopup());
  }
  
  if (closeBtn) {
    closeBtn.addEventListener("click", closePopup);
  }

  if (overlay) {
    overlay.addEventListener("click", (e) => {
      if (e.target === overlay) closePopup();
    });
  }

  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") closePopup();
  });

  // ========== Mobile Menu Toggle ==========
  const toggleSidebar = document.querySelector('.toggle-sidebar');
  if (toggleSidebar) {
    toggleSidebar.addEventListener('click', e => {
      e.currentTarget.classList.toggle('active');
    });
  }

  // ========== Stories Section Tabs ==========
  const tabs = [...document.querySelectorAll('.tab')];
  const panels = [...document.querySelectorAll('.panel')];

  function activateTab(id) {
    tabs.forEach(t => {
      const isActive = t.dataset.panel === id;
      t.classList.toggle('is-active', isActive);
      t.setAttribute('aria-selected', isActive ? 'true' : 'false');
    });
    
    panels.forEach(p => {
      const isActive = p.dataset.id === id;
      p.classList.toggle('is-active', isActive);
      if (isActive) {
        p.removeAttribute('hidden');
      } else {
        p.setAttribute('hidden', '');
      }
    });
  }

  tabs.forEach(btn => {
    btn.addEventListener('click', () => {
      activateTab(btn.dataset.panel);
    });
  });

  // slider
  const slides = document.querySelector(".slides");
    const navBtns = document.querySelectorAll(".nav-btn");

    navBtns.forEach(btn => {
      btn.addEventListener("click", () => {
        const index = btn.dataset.index;
        slides.style.transform = `translateX(calc(-${index * 100}% - ${index * 16}px))`;

        navBtns.forEach(b => b.classList.remove("active"));
        btn.classList.add("active");
      });
    });

});

document.addEventListener( 'wpcf7mailsent', function( event ) {
  location = 'https://clevertask.site/'; 
}, false );
