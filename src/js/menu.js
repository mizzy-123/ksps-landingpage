// Menu handlers: desktop header dropdown, mobile sidebar toggle and mobile dropdown
document.addEventListener("DOMContentLoaded", () => {
  const mq = window.matchMedia("(min-width: 768px)");

  // --- Desktop header dropdown ---
  const navDesktop = document.getElementById("menu-nav-desktop");
  const labelDesktop = document.getElementById("menu-label-desktop");
  const iconDesktop = document.getElementById("menu-icon-desktop");
  const dropdownDesktop = document.getElementById("menu-dropdown-desktop");

  if (navDesktop && labelDesktop && iconDesktop && dropdownDesktop) {
    const isDesktop = () => mq.matches;

    const closeDesktop = () => {
      navDesktop.classList.remove("open");
      dropdownDesktop.classList.add("hidden");
      labelDesktop.classList.remove("text-secondary");
      iconDesktop.classList.remove("text-secondary");
      iconDesktop.classList.add("text-text-primary");
    };
    const openDesktop = () => {
      navDesktop.classList.add("open");
      dropdownDesktop.classList.remove("hidden");
      labelDesktop.classList.add("text-secondary");
      iconDesktop.classList.add("text-secondary");
      iconDesktop.classList.remove("text-text-primary");
    };

    dropdownDesktop.classList.add("hidden");

    navDesktop.addEventListener("click", (e) => {
      const link = e.target.closest("a");
      if (link && dropdownDesktop.contains(link)) {
        dropdownDesktop
          .querySelectorAll("a")
          .forEach((a) =>
            a.classList.remove("text-secondary", "font-semibold"),
          );
        link.classList.add("text-secondary", "font-semibold");
        closeDesktop();
        return;
      }
      if (!isDesktop()) return;
      if (navDesktop.classList.contains("open")) closeDesktop();
      else openDesktop();
    });

    document.addEventListener("click", (e) => {
      if (!navDesktop.contains(e.target)) closeDesktop();
    });
    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape") closeDesktop();
    });

    const onChangeDesktop = (ev) => {
      if (!ev.matches) closeDesktop();
    };
    if (mq.addEventListener) mq.addEventListener("change", onChangeDesktop);
    else if (mq.addListener) mq.addListener(onChangeDesktop);
  }

  // --- Sidebar open/close (mobile) ---
  const sidebarToggle = document.getElementById("sidebar-toggle");
  const sidebar = document.getElementById("sidebar");
  const openIcon = document.getElementById("sidebar-open-icon");
  const closeIcon = document.getElementById("sidebar-close-icon");

  if (sidebar && sidebarToggle && openIcon && closeIcon) {
    const overlay = document.getElementById("sidebar-overlay");

    // ensure closed initial state: sidebar translated out to the right
    sidebar.classList.add("translate-x-full");
    openIcon.classList.remove("hidden");
    closeIcon.classList.add("hidden");
    if (overlay) overlay.classList.add("hidden", "opacity-0");

    const openSidebar = () => {
      // Reset mobile dropdown to closed state before opening sidebar
      const dropdownMobile = document.getElementById("menu-dropdown-mobile");
      const labelMobile = document.getElementById("menu-label-mobile");
      const iconMobile = document.getElementById("menu-icon-mobile");

      if (dropdownMobile && labelMobile && iconMobile) {
        dropdownMobile.classList.add("hidden");
        dropdownMobile.classList.remove("opacity-100", "scale-100");
        dropdownMobile.classList.add("opacity-0", "scale-95");
        labelMobile.classList.remove("text-secondary");
        iconMobile.classList.remove("rotate-180", "text-secondary");
        iconMobile.classList.add("text-text-primary");
      }

      // show sidebar by removing translate
      sidebar.classList.remove("translate-x-full");
      openIcon.classList.add("hidden");
      closeIcon.classList.remove("hidden");

      // show overlay with fade; remove any pending hide handler first
      if (overlay) {
        if (overlay._onOverlayEnd) {
          overlay.removeEventListener("transitionend", overlay._onOverlayEnd);
          overlay._onOverlayEnd = null;
        }
        overlay.classList.remove("hidden");
        // ensure starting state is opacity-0
        overlay.classList.remove("opacity-100");
        overlay.classList.add("opacity-0");
        // trigger fade-in on next frame
        requestAnimationFrame(() => {
          overlay.classList.remove("opacity-0");
          overlay.classList.add("opacity-100");
        });
      }
      // prevent body scroll while open
      document.body.classList.add("overflow-hidden");
    };

    const closeSidebar = () => {
      // FIRST: Reset mobile dropdown BEFORE sidebar animation starts
      const dropdownMobile = document.getElementById("menu-dropdown-mobile");
      const labelMobile = document.getElementById("menu-label-mobile");
      const iconMobile = document.getElementById("menu-icon-mobile");
      const navMobile = document.getElementById("menu-nav-mobile");

      if (dropdownMobile && labelMobile && iconMobile) {
        // Remove any transition event listeners
        if (dropdownMobile._closeHandler) {
          dropdownMobile.removeEventListener(
            "transitionend",
            dropdownMobile._closeHandler,
          );
          dropdownMobile._closeHandler = null;
        }

        // Disable transition temporarily for instant reset
        const originalTransition = dropdownMobile.style.transition;
        dropdownMobile.style.transition = "none";

        // Reset to closed state immediately
        dropdownMobile.classList.add("hidden");
        dropdownMobile.classList.remove("opacity-100", "scale-100");
        dropdownMobile.classList.add("opacity-0", "scale-95");

        labelMobile.classList.remove("text-secondary");
        iconMobile.classList.remove("rotate-180", "text-secondary");
        iconMobile.classList.add("text-text-primary");

        // Remove open class from nav container if exists
        if (navMobile) {
          navMobile.classList.remove("open");
        }

        // Restore transition after a frame
        requestAnimationFrame(() => {
          dropdownMobile.style.transition = originalTransition;
        });
      }

      // NOW slide sidebar out
      sidebar.classList.add("translate-x-full");
      openIcon.classList.remove("hidden");
      closeIcon.classList.add("hidden");

      // fade overlay out then hide. Install a dedicated handler and store it to allow
      // removal if open is triggered again before transition ends.
      if (overlay && !overlay.classList.contains("hidden")) {
        // remove any existing handler
        if (overlay._onOverlayEnd) {
          overlay.removeEventListener("transitionend", overlay._onOverlayEnd);
          overlay._onOverlayEnd = null;
        }
        const onOverlayEnd = (ev) => {
          if (ev.target !== overlay) return;
          overlay.classList.add("hidden");
          overlay.removeEventListener("transitionend", onOverlayEnd);
          overlay._onOverlayEnd = null;
        };
        overlay._onOverlayEnd = onOverlayEnd;
        overlay.addEventListener("transitionend", onOverlayEnd);
        // start fade-out
        overlay.classList.remove("opacity-100");
        overlay.classList.add("opacity-0");
      }

      // re-enable body scroll
      document.body.classList.remove("overflow-hidden");
    };

    sidebarToggle.addEventListener("click", (e) => {
      e.preventDefault();
      const isOpen = !sidebar.classList.contains("translate-x-full");
      if (isOpen) closeSidebar();
      else openSidebar();
    });

    // clicking overlay closes the sidebar
    if (overlay) {
      overlay.addEventListener("click", (e) => {
        closeSidebar();
      });
    }

    // close when clicking outside (for safety if overlay is not present)
    document.addEventListener("click", (e) => {
      if (
        !sidebar.contains(e.target) &&
        !sidebarToggle.contains(e.target) &&
        !sidebar.classList.contains("translate-x-full")
      ) {
        closeSidebar();
      }
    });

    document.addEventListener("keydown", (e) => {
      if (
        e.key === "Escape" &&
        !sidebar.classList.contains("translate-x-full")
      ) {
        closeSidebar();
      }
    });
  }

  // --- Mobile sidebar dropdown ---
  const navMobile = document.getElementById("menu-nav-mobile");
  const labelMobile = document.getElementById("menu-label-mobile");
  const iconMobile = document.getElementById("menu-icon-mobile");
  const dropdownMobile = document.getElementById("menu-dropdown-mobile");

  if (navMobile && labelMobile && iconMobile && dropdownMobile) {
    // start closed (kept hidden + initial transform/opacity classes set in markup)

    const openMobileDropdown = () => {
      // make visible then animate to full
      dropdownMobile.classList.remove("hidden");
      // ensure starting from closed state
      dropdownMobile.classList.remove("opacity-100", "scale-100");
      dropdownMobile.classList.add("opacity-0", "scale-95");
      // trigger animation frame then toggle to open state
      requestAnimationFrame(() => {
        dropdownMobile.classList.remove("opacity-0", "scale-95");
        dropdownMobile.classList.add("opacity-100", "scale-100");
      });
      iconMobile.classList.add("rotate-180");
      labelMobile.classList.add("text-secondary");
      iconMobile.classList.add("text-secondary");
      iconMobile.classList.remove("text-text-primary");
    };

    const closeMobileDropdown = () => {
      // animate to closed state
      dropdownMobile.classList.remove("opacity-100", "scale-100");
      dropdownMobile.classList.add("opacity-0", "scale-95");
      iconMobile.classList.remove("rotate-180");
      labelMobile.classList.remove("text-secondary");
      iconMobile.classList.remove("text-secondary");
      iconMobile.classList.add("text-text-primary");

      // Remove previous handler if exists
      if (dropdownMobile._closeHandler) {
        dropdownMobile.removeEventListener(
          "transitionend",
          dropdownMobile._closeHandler,
        );
      }

      // hide after transition
      const onTransitionEnd = (ev) => {
        if (ev.target !== dropdownMobile) return;
        dropdownMobile.classList.add("hidden");
        dropdownMobile.removeEventListener("transitionend", onTransitionEnd);
        dropdownMobile._closeHandler = null;
      };

      dropdownMobile._closeHandler = onTransitionEnd;
      dropdownMobile.addEventListener("transitionend", onTransitionEnd);
    };

    navMobile.addEventListener("click", (e) => {
      const link = e.target.closest("a");
      if (link && dropdownMobile.contains(link)) {
        dropdownMobile
          .querySelectorAll("a")
          .forEach((a) =>
            a.classList.remove("text-secondary", "font-semibold"),
          );
        link.classList.add("text-secondary", "font-semibold");
        closeMobileDropdown();
        return;
      }
      const isOpen = !dropdownMobile.classList.contains("hidden");
      if (isOpen) closeMobileDropdown();
      else openMobileDropdown();
    });

    document.addEventListener("click", (e) => {
      if (!navMobile.contains(e.target)) {
        if (!dropdownMobile.classList.contains("hidden")) closeMobileDropdown();
      }
    });

    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape") {
        if (!dropdownMobile.classList.contains("hidden")) closeMobileDropdown();
      }
    });
  }
});
