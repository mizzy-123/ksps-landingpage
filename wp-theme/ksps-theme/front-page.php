<?php
/**
 * Front Page Template
 */
get_header();
?>
<main class="bg-background">
  <!-- Hero section -->
  <section class="w-full h-screen relative z-5 flex lg:flex-row flex-col items-center lg:gap-44 gap-12 lg:px-20 px-4 lg:mt-0 mt-32 overflow-x-hidden">
    <img class="absolute lg:block hidden" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/line_bg.png'); ?>" alt="" />
    <img class="absolute lg:hidden md:hidden sm:hidden block" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/line_bg3.png'); ?>" alt="" />

    <div class="lg:flex-1 relative flex flex-col gap-6">
      <div class="w-full p-6 flex flex-col gap-6 border border-border rounded-xl bg-[linear-gradient(90deg,#FFF_0%,#DFE1F2_100%)]">
        <h1 class="font-manrope font-bold lg:text-4xl text-[28px] leading-11">
          Solusi
          <label class="text-secondary">Outsourcing <br /> IT & BPO</label>
          Terintegrasi
        </h1>
        <p class="font-inter lg:text-[20px] text-[16px] text-text-secondary">
          Kami menyediakan 1.800+ talenta Engineer, Helpdesk, hingga Security yang valid, terlatih, dan siap ditempatkan secara nasional tanpa drama rekrutmen
        </p>
        <div class="flex items-center lg:gap-6 gap-4">
          <a class="text-text-primary text-sm underline leading-5" href="#">Pelajari Lebih Lanjut</a>
          <a class="px-8 py-3 bg-secondary rounded-xl text-background text-sm" href="#">Konsultasi Sekarang</a>
        </div>
      </div>

      <div class="w-full p-6 flex justify-start items-center gap-3 border border-border rounded-xl bg-[linear-gradient(90deg,#FFF_0%,#DFE1F2_100%)]">
        <div class="flex-2 flex flex-col">
          <p class="text-2xl font-manrope font-bold text-center text-secondary">
            <span class="count" data-target="50" data-duration="1500">0</span><span class="count-suffix">+</span>
            Kota
          </p>
          <p class="text-text-primary text-sm font-inter text-center">di Indonesia</p>
        </div>
        <div class="w-px self-stretch bg-black"></div>
        <div class="flex-2 flex flex-col">
          <div class="flex items-center justify-center gap-0.75 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.69555 0.80846C9.1439 -0.269486 10.6709 -0.269487 11.1193 0.80846L13.2013 5.81417L18.6054 6.24742C19.7691 6.34071 20.241 7.793 19.3543 8.55251L15.237 12.0795L16.4949 17.3529C16.7658 18.4885 15.5304 19.3861 14.5341 18.7775L9.90741 15.9516L5.28076 18.7775C4.28444 19.3861 3.04905 18.4885 3.31993 17.3529L4.57785 12.0795L0.460502 8.55251C-0.426138 7.79301 0.045735 6.34071 1.20947 6.24742L6.61356 5.81417L8.69555 0.80846Z" fill="#FA9A07"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.69555 0.80846C9.1439 -0.269486 10.6709 -0.269487 11.1193 0.80846L13.2013 5.81417L18.6054 6.24742C19.7691 6.34071 20.241 7.793 19.3543 8.55251L15.237 12.0795L16.4949 17.3529C16.7658 18.4885 15.5304 19.3861 14.5341 18.7775L9.90741 15.9516L5.28076 18.7775C4.28444 19.3861 3.04905 18.4885 3.31993 17.3529L4.57785 12.0795L0.460502 8.55251C-0.426138 7.79301 0.045735 6.34071 1.20947 6.24742L6.61356 5.81417L8.69555 0.80846Z" fill="#FA9A07"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.69555 0.80846C9.1439 -0.269486 10.6709 -0.269487 11.1193 0.80846L13.2013 5.81417L18.6054 6.24742C19.7691 6.34071 20.241 7.793 19.3543 8.55251L15.237 12.0795L16.4949 17.3529C16.7658 18.4885 15.5304 19.3861 14.5341 18.7775L9.90741 15.9516L5.28076 18.7775C4.28444 19.3861 3.04905 18.4885 3.31993 17.3529L4.57785 12.0795L0.460502 8.55251C-0.426138 7.79301 0.045735 6.34071 1.20947 6.24742L6.61356 5.81417L8.69555 0.80846Z" fill="#FA9A07"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.69555 0.80846C9.1439 -0.269486 10.6709 -0.269487 11.1193 0.80846L13.2013 5.81417L18.6054 6.24742C19.7691 6.34071 20.241 7.793 19.3543 8.55251L15.237 12.0795L16.4949 17.3529C16.7658 18.4885 15.5304 19.3861 14.5341 18.7775L9.90741 15.9516L5.28076 18.7775C4.28444 19.3861 3.04905 18.4885 3.31993 17.3529L4.57785 12.0795L0.460502 8.55251C-0.426138 7.79301 0.045735 6.34071 1.20947 6.24742L6.61356 5.81417L8.69555 0.80846Z" fill="#FA9A07"/></svg>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_257_3253)"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.7881 3.21068C11.2365 2.13274 12.7635 2.13273 13.2119 3.21068L15.2939 8.2164L20.6979 8.64964C21.8617 8.74293 22.3336 10.1952 21.4469 10.9547L17.3296 14.4817L18.5875 19.7551C18.8584 20.8908 17.623 21.7883 16.6267 21.1798L12 18.3538L7.37335 21.1798C6.37703 21.7883 5.14164 20.8908 5.41252 19.7551L6.67044 14.4817L2.55309 10.9547C1.66645 10.1952 2.13833 8.74293 3.30206 8.64964L8.70615 8.2164L10.7881 3.21068Z" fill="#FA9A07" stroke="#FA9A07" stroke-width="2" stroke-linejoin="round"/></g><path fill-rule="evenodd" clip-rule="evenodd" d="M10.7881 3.21068C11.2365 2.13274 12.7635 2.13273 13.2119 3.21068L15.2939 8.2164L20.6979 8.64964C21.8617 8.74293 22.3336 10.1952 21.4469 10.9547L17.3296 14.4817L18.5875 19.7551C18.8584 20.8908 17.623 21.7883 16.6267 21.1798L12 18.3538L7.37335 21.1798C6.37703 21.7883 5.14164 20.8908 5.41252 19.7551L6.67044 14.4817L2.55309 10.9547C1.66645 10.1952 2.13833 8.74293 3.30206 8.64964L8.70615 8.2164L10.7881 3.21068Z" stroke="#FA9A07" stroke-width="2" stroke-linejoin="round"/><defs><clipPath id="clip0_257_3253"><rect width="12" height="24" fill="white" /></clipPath></defs></svg>
          </div>
          <div class="flex items-center justify-center gap-2">
            <p class="text-secondary text-[12px] font-inter font-semibold">4.5/5.0</p>
            <p class="text-text-primary text-[12px] font-inter">Satisfaction Score</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Image -->
    <div class="lg:flex-1 relative inline-flex justify-start items-center gap-6">
      <div class="pb-6 flex justify-start items-center gap-2.5">
        <img class="w-40 lg:h-96 h-44 rounded-xl object-cover" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/orang_server.png'); ?>" alt="" />
      </div>
      <div class="pt-6 flex justify-start items-center gap-2.5">
        <img class="w-40 lg:h-96 h-44 rounded-xl object-cover" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/orang_coding.png'); ?>" alt="" />
      </div>
      <div class="pb-6 flex justify-start items-center gap-2.5">
        <img class="w-40 lg:h-96 h-44 rounded-xl object-cover" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/orang_customer.png'); ?>" alt="" />
      </div>
    </div>
  </section>

  <!-- Partner section -->
  <section class="lg:px-20 px-4 lg:py-16 py-8 bg-primary w-full h-fit">
    <h1 class="font-manrope lg:text-4xl text-[24px] font-bold text-center text-background mb-8">
      Dipercaya Mengelola
      <label class="text-secondary">
        <span class="count" data-target="500" data-duration="2000">0</span><span class="count-suffix">+</span>
        Project
      </label>
      di Perusahaan High Tech
    </h1>
    <?php $img_url = get_stylesheet_directory_uri() . '/assets/images/'; ?>
    <div class="w-full h-fit bg-white rounded-xl border-[3px] border-secondary p-8 grid lg:grid-cols-5 grid-cols-4 gap-4 place-content-stretch">
      <div class="lg:h-25 h-[33.77px]"><img src="<?php echo esc_url($img_url . 'lintasarta.png'); ?>" class="size-full object-cover" alt="" /></div>
      <div class="lg:h-25 h-[33.77px]"><img src="<?php echo esc_url($img_url . 'bank_danamon.png'); ?>" class="size-full object-contain" alt="" /></div>
      <div class="lg:h-25 h-[33.77px]"><img src="<?php echo esc_url($img_url . 'kemendikbud.png'); ?>" class="size-full object-contain" alt="" /></div>
      <div class="lg:h-25 h-[33.77px]"><img src="<?php echo esc_url($img_url . 'artajasa.png'); ?>" class="size-full object-contain" alt="" /></div>
      <div class="lg:h-25 h-[33.77px]"><img src="<?php echo esc_url($img_url . 'sojatek.png'); ?>" class="size-full object-contain" alt="" /></div>
      <div class="lg:h-25 h-[33.77px]"><img src="<?php echo esc_url($img_url . 'bdx.png'); ?>" class="size-full object-contain" alt="" /></div>
      <div class="lg:h-25 h-[33.77px]"><img src="<?php echo esc_url($img_url . 'sarimah.png'); ?>" class="size-full object-contain" alt="" /></div>
      <div class="lg:h-25 h-[33.77px]"><img src="<?php echo esc_url($img_url . 'kementrian_pendidikan_dasar.png'); ?>" class="size-full object-contain" alt="" /></div>
      <div class="lg:h-25 h-[33.77px]"><img src="<?php echo esc_url($img_url . 'banpt.png'); ?>" class="size-full object-contain" alt="" /></div>
      <div class="lg:h-25 h-[33.77px]"><img src="<?php echo esc_url($img_url . 'jubelio.png'); ?>" class="size-full object-contain" alt="" /></div>
      <div class="lg:h-25 h-[33.77px]"><img src="<?php echo esc_url($img_url . 'kopkarla.png'); ?>" class="size-full object-contain" alt="" /></div>
      <div class="lg:h-25 h-[33.77px]"><img src="<?php echo esc_url($img_url . 'owlexa.png'); ?>" class="size-full object-contain" alt="" /></div>
      <div class="lg:h-25 h-[33.77px]"><img src="<?php echo esc_url($img_url . 'kemenristekdikti.png'); ?>" class="size-full object-cover" alt="" /></div>
      <div class="lg:h-25 h-[33.77px]"><img src="<?php echo esc_url($img_url . 'steradian.png'); ?>" class="size-full object-contain" alt="" /></div>
      <div class="lg:h-25 h-[33.77px]"><img src="<?php echo esc_url($img_url . 'biotrop.png'); ?>" class="size-full object-contain" alt="" /></div>
      <div class="lg:h-25 h-[33.77px]"><img src="<?php echo esc_url($img_url . 'bni.png'); ?>" class="size-full object-contain" alt="" /></div>
      <div class="lg:h-25 h-[33.77px]"><img src="<?php echo esc_url($img_url . 'mandiri.png'); ?>" class="size-full object-cover" alt="" /></div>
      <div class="lg:h-25 h-[33.77px]"><img src="<?php echo esc_url($img_url . 'bi.png'); ?>" class="size-full object-contain" alt="" /></div>
      <div class="lg:h-25 h-[33.77px]"><img src="<?php echo esc_url($img_url . 'axa_mandiri.png'); ?>" class="size-full object-contain" alt="" /></div>
      <div class="lg:h-25 h-[33.77px]"><img src="<?php echo esc_url($img_url . 'kemnaker.png'); ?>" class="size-full object-contain" alt="" /></div>
      <div class="lg:h-25 h-[33.77px]"><img src="<?php echo esc_url($img_url . 'telkom_indonesia.png'); ?>" class="size-full object-contain" alt="" /></div>
      <div class="lg:h-25 h-[33.77px]"><img src="<?php echo esc_url($img_url . 'indosat.png'); ?>" class="size-full object-contain" alt="" /></div>
      <div class="lg:h-25 h-[33.77px]"><img src="<?php echo esc_url($img_url . 'linknet.png'); ?>" class="size-full object-contain" alt="" /></div>
      <div class="lg:h-25 h-[33.77px]"><img src="<?php echo esc_url($img_url . 'petrocina.png'); ?>" class="size-full object-contain" alt="" /></div>
      <div class="lg:h-25 h-[33.77px]"><img src="<?php echo esc_url($img_url . 'pertamina.png'); ?>" class="size-full object-contain" alt="" /></div>
      <div class="lg:h-25 h-[33.77px] lg:hidden"><img src="<?php echo esc_url($img_url . 'transon_group.png'); ?>" class="size-full object-contain" alt="" /></div>
      <div class="lg:h-25 h-[33.77px] lg:hidden"><img src="<?php echo esc_url($img_url . 'pelindo.png'); ?>" class="size-full object-contain" alt="" /></div>
      <div class="lg:h-25 h-[33.77px] lg:hidden"><img src="<?php echo esc_url($img_url . 'apl.png'); ?>" class="size-full object-contain" alt="" /></div>
      <div class="col-span-4 lg:hidden flex items-center justify-center gap-4">
        <div class="lg:h-25 h-[33.77px] lg:hidden"><img src="<?php echo esc_url($img_url . 'unilever.png'); ?>" class="size-full object-contain" alt="" /></div>
        <div class="w-px self-stretch bg-black"></div>
        <p class="font-inter text-[12px] font-semibold text-center">40+ <br /> Lainnya</p>
      </div>
      <div class="col-span-5 lg:flex justify-center gap-4 hidden">
        <div class="w-48 lg:h-25 h-[33.77px]"><img src="<?php echo esc_url($img_url . 'transon_group.png'); ?>" class="size-full object-contain" alt="" /></div>
        <div class="w-48 lg:h-25 h-[33.77px]"><img src="<?php echo esc_url($img_url . 'pelindo.png'); ?>" class="size-full object-contain" alt="" /></div>
        <div class="w-48 lg:h-25 h-[33.77px]"><img src="<?php echo esc_url($img_url . 'apl.png'); ?>" class="size-full object-contain" alt="" /></div>
        <div class="w-48 lg:h-25 h-[33.77px]"><img src="<?php echo esc_url($img_url . 'unilever.png'); ?>" class="size-full object-contain" alt="" /></div>
      </div>
      <div class="col-span-5 lg:flex justify-center gap-4 hidden">
        <div><p class="font-inter text-[20px] font-semibold text-text-primary text-center">40+ <br /> Perusahaan Lainnya</p></div>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/section', 'problem'); ?>
  <?php get_template_part('template-parts/section', 'solution'); ?>
  <?php get_template_part('template-parts/section', 'features'); ?>
  <?php get_template_part('template-parts/section', 'testimonials'); ?>
  <?php get_template_part('template-parts/section', 'trust'); ?>
  <?php get_template_part('template-parts/section', 'standards'); ?>
  <?php get_template_part('template-parts/section', 'cta'); ?>
  <?php get_template_part('template-parts/section', 'faq'); ?>
</main>
<?php
get_footer();
