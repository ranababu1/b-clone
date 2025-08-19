document.addEventListener("DOMContentLoaded", () => {
  // ========== Header Dropdown Navigation ==========
  const dropdownItems = document.querySelectorAll("li.has-dropdown");
  const langSelector = document.querySelector(".site-header__lang");

  dropdownItems.forEach((item) => {
    const button = item.querySelector('button[aria-haspopup="true"]');
    if (!button) return;
    const menuId = button.getAttribute("aria-controls");
    const menu = menuId ? document.getElementById(menuId) : null;

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
        // Language selection handled client-side only
      });
    });
  }

  // ========== Video Popup ==========
  const WISTIA_VIDEO_ID = 'fjcfsbutc4';
  let wistiaPlayer = null;
  let wistiaLoaded = false;
  
  function loadWistiaScripts() {
    if (wistiaLoaded) return Promise.resolve();
    
    return new Promise((resolve) => {
      const script1 = document.createElement('script');
      script1.src = `https://fast.wistia.com/embed/medias/${WISTIA_VIDEO_ID}.jsonp`;
      script1.async = true;
      
      const script2 = document.createElement('script');
      script2.src = 'https://fast.wistia.com/assets/external/E-v1.js';
      script2.async = true;
      
      script2.onload = () => {
        wistiaLoaded = true;
        window._wq = window._wq || [];
        _wq.push({
          id: WISTIA_VIDEO_ID,
          onReady: function (video) {
            wistiaPlayer = video;
            resolve();
          },
        });
      };
      
      document.head.appendChild(script1);
      document.head.appendChild(script2);
    });
  }

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

  async function openPopup() {
    if (overlay) {
      overlay.classList.add("active");
      if (!wistiaLoaded) {
        await loadWistiaScripts();
      }
      if (wistiaPlayer) {
        startVideo();
      }
    }
  }

  function closePopup() {
    if (overlay) {
      overlay.classList.remove("active");
      if (wistiaPlayer) stopVideo();
    }
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
    if (e.key === "Escape" && overlay && overlay.classList.contains("active")) {
      closePopup();
    }
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

  if (slides && navBtns.length > 0) {
    navBtns.forEach(btn => {
      btn.addEventListener("click", () => {
        const index = btn.dataset.index;
        if (index !== undefined) {
          slides.style.transform = `translateX(calc(-${index * 100}% - ${index * 16}px))`;
          navBtns.forEach(b => b.classList.remove("active"));
          btn.classList.add("active");
        }
      });
    });
  }

});

document.addEventListener( 'wpcf7mailsent', function( event ) {
  setTimeout(function() {
    window.location.href = 'https://clevertask.site/';
  }, 3000);
}, false );

  document.addEventListener("DOMContentLoaded", function () {
    const section = document.querySelector(".resources");
    if (!section) return;
    const cards = section.querySelectorAll(".card");
    if (!cards.length) return;
    const prefersReduced = window.matchMedia && window.matchMedia("(prefers-reduced-motion: reduce)").matches;
    cards.forEach(card => {
      card.style.opacity = "0";
      card.style.transition = "opacity 600ms ease";
      card.style.willChange = "opacity";

    });
    const reveal = () => {
      if (prefersReduced) {
        cards.forEach(card => {
          card.style.opacity = "1";
        });
        return;
      }
      cards.forEach((card, i) => {
        setTimeout(() => {
          card.style.opacity = "1";
        }, i * 200); // 200ms stagger
      });
    };
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          reveal();
          observer.disconnect();
        }
      });
    }, { threshold: 0.2 });
    observer.observe(section);
  });