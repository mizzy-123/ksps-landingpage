<?php if (!defined('ABSPATH')) { exit; } ?>
<!doctype html>
<html <?php language_attributes(); ?> class="scroll-smooth" style="scroll-padding-top:72px">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class('antialiased bg-white'); ?> data-assets-url="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets'); ?>">
    <?php wp_body_open(); ?>
    <div id="sidebar-overlay" class="lg:hidden fixed z-10 inset-0 bg-black/40 opacity-0 transition-opacity duration-300 hidden"></div>

    <header class="bg-background fixed top-0 left-0 z-100 w-full lg:px-14 px-4 py-4 flex items-center justify-between shadow-[0_4px_6px_-1px_rgba(0,0,0,0.15)]">
      <a href="/"><img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/ksps_logo.png'); ?>" width="80" alt="<?php bloginfo('name'); ?>" /></a>

      <nav class="lg:flex hidden items-center gap-6">
        <div id="menu-nav-desktop" class="flex items-center gap-2 relative cursor-pointer group">
          <label id="menu-label-desktop" class="font-inter text-[16px] text-text-primary group-hover:text-secondary cursor-pointer">Layanan</label>
          <svg id="menu-icon-desktop" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="text-text-primary group-hover:text-secondary cursor-pointer" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5303 16.2803C12.2374 16.5732 11.7626 16.5732 11.4697 16.2803L3.96967 8.78033C3.67678 8.48744 3.67678 8.01256 3.96967 7.71967C4.26256 7.42678 4.73744 7.42678 5.03033 7.71967L12 14.6893L18.9697 7.71967C19.2626 7.42678 19.7374 7.42678 20.0303 7.71967C20.3232 8.01256 20.3232 8.48744 20.0303 8.78033L12.5303 16.2803Z" fill="currentColor" />
          </svg>
          <div id="menu-dropdown-desktop" class="bg-background lg:absolute top-full left-0 h-fit w-88.75 p-6 flex flex-col gap-6 border border-border rounded-b-xl hidden">
            <a class="text-text-primary font-inter text-[16px] hover:text-secondary" href="#">Layanan IT Outsourcing</a>
            <a class="text-text-primary font-inter text-[16px] hover:text-secondary" href="#">Solusi BPO & Contact Center</a>
            <a class="text-text-primary font-inter text-[16px] hover:text-secondary" href="#">Layanan Facility & Security Management</a>
            <a class="text-text-primary font-inter text-[16px] hover:text-secondary" href="#">Layanan Assessment Center</a>
            <a class="text-text-primary font-inter text-[16px] hover:text-secondary" href="#">Layanan Organization Development</a>
          </div>
        </div>
        <div class="flex items-center gap-2 cursor-pointer group">
          <a href="#" class="font-inter text-[16px] text-text-primary group-hover:text-secondary cursor-pointer">Resources</a>
        </div>
        <div class="flex items-center gap-2 cursor-pointer group">
          <a href="#" class="font-inter text-[16px] text-text-primary group-hover:text-secondary cursor-pointer">Referral</a>
        </div>
        <div class="flex items-center gap-2 cursor-pointer group">
          <a href="/article" class="font-inter text-[16px] text-text-primary group-hover:text-secondary cursor-pointer">Article</a>
        </div>
      </nav>

      <a class="lg:block hidden px-8 py-3 bg-secondary rounded-xl font-inter text-sm font-semibold text-background" href="https://pgp6i.app.link/e/hubungikami">Hubungi Kami</a>

      <a id="sidebar-toggle" class="lg:hidden block" href="#">
        <svg id="sidebar-close-icon" class="hidden" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
          <path d="M3.29282 2.23217C2.90229 1.84165 2.2692 1.84165 1.87868 2.23217C1.48815 2.6227 1.48815 3.25586 1.87868 3.64639L6.23217 7.99988L1.87872 12.3533C1.48819 12.7439 1.48819 13.377 1.87872 13.7676C2.26924 14.1581 2.90234 14.1581 3.29286 13.7676L7.64632 9.41413L12 13.7676C12.3905 14.1581 13.0237 14.1581 13.4142 13.7676C13.8047 13.377 13.8047 12.7439 13.4142 12.3533L9.06066 7.99988L13.4142 3.64639C13.8047 3.25586 13.8047 2.6227 13.4142 2.23217C13.0236 1.84165 12.3905 1.84165 12 2.23217L7.64632 6.58563L3.29282 2.23217Z" fill="#FA9A07" />
        </svg>
        <svg
          id="sidebar-open-icon"
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="16"
          viewBox="0 0 24 16"
          fill="none"
        >
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M0 1C0 0.447715 0.447715 0 1 0H23C23.5523 0 24 0.447715 24 1C24 1.55228 23.5523 2 23 2H1C0.447715 2 0 1.55228 0 1ZM0 8C0 7.44772 0.447715 7 1 7H23C23.5523 7 24 7.44772 24 8C24 8.55228 23.5523 9 23 9H1C0.447715 9 0 8.55228 0 8ZM11 15C11 14.4477 11.4477 14 12 14H23C23.5523 14 24 14.4477 24 15C24 15.5523 23.5523 16 23 16H12C11.4477 16 11 15.5523 11 15Z"
            fill="#FA9A07"
          />
        </svg>
      </a>

      <div id="sidebar" style="height: calc(100vh - 100%)" class="lg:hidden absolute top-full right-0 w-84.75 p-4 bg-background transform translate-x-full transition-transform duration-300 ease-out overflow-y-auto flex flex-col gap-10">
        <div class="flex flex-col gap-4">
          <div id="menu-nav-mobile" class="flex flex-col gap-4 relative cursor-pointer group py-4">
            <div class="flex items-center gap-2">
              <label id="menu-label-mobile" class="font-inter text-[16px] text-text-primary group-hover:text-secondary cursor-pointer">Layanan</label>
              <svg id="menu-icon-mobile" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="text-text-primary group-hover:text-secondary cursor-pointer" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5303 16.2803C12.2374 16.5732 11.7626 16.5732 11.4697 16.2803L3.96967 8.78033C3.67678 8.48744 3.67678 8.01256 3.96967 7.71967C4.26256 7.42678 4.73744 7.42678 5.03033 7.71967L12 14.6893L18.9697 7.71967C19.2626 7.42678 19.7374 7.42678 20.0303 7.71967C20.3232 8.01256 20.3232 8.48744 20.0303 8.78033L12.5303 16.2803Z" fill="currentColor" />
              </svg>
            </div>
            <div id="menu-dropdown-mobile" class="flex flex-col gap-6 mt-2 hidden">
              <a class="text-text-primary font-inter text-[16px] hover:text-secondary" href="#">Layanan IT Outsourcing</a>
              <a class="text-text-primary font-inter text-[16px] hover:text-secondary" href="#">Solusi BPO & Contact Center</a>
              <a class="text-text-primary font-inter text-[16px] hover:text-secondary" href="#">Layanan Facility & Security Management</a>
              <a class="text-text-primary font-inter text-[16px] hover:text-secondary" href="#">Layanan Assessment Center</a>
              <a class="text-text-primary font-inter text-[16px] hover:text-secondary" href="#">Layanan Organization Development</a>
            </div>
          </div>
          <div class="flex items-center gap-2 cursor-pointer group py-4">
            <a href="#" class="font-inter text-[16px] text-text-primary group-hover:text-secondary cursor-pointer">Resources</a>
          </div>
          <div class="flex items-center gap-2 cursor-pointer group py-4">
            <a href="#" class="font-inter text-[16px] text-text-primary group-hover:text-secondary cursor-pointer">Referral</a>
          </div>
          <div class="flex items-center gap-2 cursor-pointer group py-4">
            <a href="/article" class="font-inter text-[16px] text-text-primary group-hover:text-secondary cursor-pointer">Article</a>
          </div>
        </div>
        <a class="lg:hidden block px-8 py-3 bg-secondary rounded-xl font-inter text-sm font-semibold text-background text-center" href="https://pgp6i.app.link/e/hubungikami">Hubungi Kami</a>
      </div>
    </header>
