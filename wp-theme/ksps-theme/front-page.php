<?php
/**
 * Front Page Template
 */
get_header();
?>
<main class="bg-background">
  <!-- Hero section -->
      <section
        id="hero-section"
        class="w-full lg:h-screen h-[100dvh] relative z-5 flex lg:flex-row flex-col lg:justify-between items-center lg:gap-44 gap-10 lg:px-14 px-4 lg:pt-0 pt-24 pb-4 overflow-hidden"
      >
        <img
          class="absolute bottom-0 lg:block hidden"
          src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/line_bg.png'); ?>"
          alt=""
        />
        <img
          class="absolute bottom-0 lg:hidden md:hidden sm:hidden block"
          src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/line_bg3.png'); ?>"
          alt=""
        />

        <div class="lg:flex-1 relative flex flex-col gap-2 lg:gap-6">
          <div
            class="w-full p-4 lg:p-6 flex flex-col gap-3 lg:gap-6 border border-border rounded-xl bg-[linear-gradient(90deg,#FFF_0%,#DFE1F2_100%)]"
          >
            <h1
              class="font-manrope font-bold lg:text-[40px] text-[24px] lg:leading-11 leading-8"
            >
              Solusi
              <label class="text-secondary"
                >Outsourcing <br />
                IT & BPO</label
              >
              Terintegrasi
            </h1>

            <p
              class="font-inter lg:text-[20px] text-[16px] text-text-secondary"
            >
              Kami menyediakan 1.800+ talenta Engineer, Helpdesk, hingga
              Security yang valid, terlatih, dan siap ditempatkan secara
              nasional tanpa drama rekrutmen
            </p>

            <div class="flex items-center lg:gap-6 gap-4">
              <a
                class="text-text-primary text-xs underline leading-5"
                href="#partner-section"
                >Pelajari Lebih Lanjut</a
              >

              <a
                class="lg:px-8 px-4 py-3 bg-secondary rounded-xl text-background md:text-sm text-sm"
                href="https://pgp6i.app.link/e/konsultasi"
                >Konsultasi Sekarang</a
              >
            </div>
          </div>

          <div
            class="w-full p-4 flex justify-start items-stretch gap-3 border border-border rounded-xl bg-[linear-gradient(90deg,#FFF_0%,#DFE1F2_100%)]"
          >
            <div class="flex-2 flex flex-col justify-between">
              <p
                class="lg:text-xl text-[16px] font-manrope font-bold text-center text-secondary"
              >
                <span class="count" data-target="50" data-duration="1500"
                  >0</span
                ><span class="count-suffix">+</span>
                Kota
              </p>
              <p
                class="text-text-primary md:text-[12px] text-[10px] font-inter text-center"
              >
                di Indonesia
              </p>
            </div>

            <div class="w-px self-stretch bg-black"></div>

            <div class="flex-2 flex flex-col justify-between">
              <div
                class="flex items-center justify-center gap-0.75 text-center"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="20"
                  viewBox="0 0 20 20"
                  fill="none"
                >
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M8.99013 2.67555C9.36375 1.77726 10.6363 1.77726 11.0099 2.67555L12.7449 6.84698L17.2483 7.20801C18.2181 7.28576 18.6113 8.496 17.8724 9.12892L14.4413 12.068L15.4896 16.4626C15.7153 17.4089 14.6858 18.1569 13.8556 17.6498L10 15.2948L6.14447 17.6498C5.3142 18.1569 4.28471 17.4089 4.51044 16.4626L5.55871 12.068L2.12759 9.12892C1.38872 8.496 1.78195 7.28576 2.75173 7.20801L7.25514 6.84698L8.99013 2.67555Z"
                    fill="#FA9A07"
                  />
                </svg>

                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="20"
                  viewBox="0 0 20 20"
                  fill="none"
                >
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M8.99013 2.67555C9.36375 1.77726 10.6363 1.77726 11.0099 2.67555L12.7449 6.84698L17.2483 7.20801C18.2181 7.28576 18.6113 8.496 17.8724 9.12892L14.4413 12.068L15.4896 16.4626C15.7153 17.4089 14.6858 18.1569 13.8556 17.6498L10 15.2948L6.14447 17.6498C5.3142 18.1569 4.28471 17.4089 4.51044 16.4626L5.55871 12.068L2.12759 9.12892C1.38872 8.496 1.78195 7.28576 2.75173 7.20801L7.25514 6.84698L8.99013 2.67555Z"
                    fill="#FA9A07"
                  />
                </svg>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="20"
                  viewBox="0 0 20 20"
                  fill="none"
                >
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M8.99013 2.67555C9.36375 1.77726 10.6363 1.77726 11.0099 2.67555L12.7449 6.84698L17.2483 7.20801C18.2181 7.28576 18.6113 8.496 17.8724 9.12892L14.4413 12.068L15.4896 16.4626C15.7153 17.4089 14.6858 18.1569 13.8556 17.6498L10 15.2948L6.14447 17.6498C5.3142 18.1569 4.28471 17.4089 4.51044 16.4626L5.55871 12.068L2.12759 9.12892C1.38872 8.496 1.78195 7.28576 2.75173 7.20801L7.25514 6.84698L8.99013 2.67555Z"
                    fill="#FA9A07"
                  />
                </svg>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="20"
                  viewBox="0 0 20 20"
                  fill="none"
                >
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M8.99013 2.67555C9.36375 1.77726 10.6363 1.77726 11.0099 2.67555L12.7449 6.84698L17.2483 7.20801C18.2181 7.28576 18.6113 8.496 17.8724 9.12892L14.4413 12.068L15.4896 16.4626C15.7153 17.4089 14.6858 18.1569 13.8556 17.6498L10 15.2948L6.14447 17.6498C5.3142 18.1569 4.28471 17.4089 4.51044 16.4626L5.55871 12.068L2.12759 9.12892C1.38872 8.496 1.78195 7.28576 2.75173 7.20801L7.25514 6.84698L8.99013 2.67555Z"
                    fill="#FA9A07"
                  />
                </svg>
                <svg
                  width="20"
                  height="20"
                  viewBox="0 0 20 20"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g clip-path="url(#clip0_257_3253)">
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M8.99013 2.67555C9.36375 1.77726 10.6363 1.77726 11.0099 2.67555L12.7449 6.84698L17.2483 7.20801C18.2181 7.28576 18.6113 8.496 17.8724 9.12892L14.4413 12.068L15.4896 16.4626C15.7153 17.4089 14.6858 18.1569 13.8556 17.6498L10 15.2948L6.14447 17.6498C5.3142 18.1569 4.28471 17.4089 4.51044 16.4626L5.55871 12.068L2.12759 9.12892C1.38872 8.496 1.78195 7.28576 2.75173 7.20801L7.25514 6.84698L8.99013 2.67555Z"
                      fill="#FA9A07"
                      stroke="#FA9A07"
                      stroke-width="2"
                      stroke-linejoin="round"
                    />
                  </g>
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M8.99013 2.67555C9.36375 1.77726 10.6363 1.77726 11.0099 2.67555L12.7449 6.84698L17.2483 7.20801C18.2181 7.28576 18.6113 8.496 17.8724 9.12892L14.4413 12.068L15.4896 16.4626C15.7153 17.4089 14.6858 18.1569 13.8556 17.6498L10 15.2948L6.14447 17.6498C5.3142 18.1569 4.28471 17.4089 4.51044 16.4626L5.55871 12.068L2.12759 9.12892C1.38872 8.496 1.78195 7.28576 2.75173 7.20801L7.25514 6.84698L8.99013 2.67555Z"
                    stroke="#FA9A07"
                    stroke-width="2"
                    stroke-linejoin="round"
                  />
                  <defs>
                    <clipPath id="clip0_257_3253">
                      <rect width="10" height="20" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </div>
              <div class="flex items-center justify-center gap-2">
                <p
                  class="text-secondary md:text-[12px] text-[10px] font-inter font-semibold"
                >
                  4.5/5.0
                </p>
                <p
                  class="text-text-primary md:text-[12px] text-[10px] font-inter"
                >
                  Satisfaction Score
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- Image -->
        <div
          class="lg:flex-1 relative inline-flex justify-start items-center gap-6"
        >
          <div class="pb-6 flex justify-start items-center gap-2.5">
            <img
              class="w-40 lg:h-96 h-32 rounded-xl object-cover"
              src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/orang_server.png'); ?>"
              alt=""
            />
          </div>
          <div class="pt-6 flex justify-start items-center gap-2.5">
            <img
              class="w-40 lg:h-96 h-32 rounded-xl object-cover"
              src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/orang_coding.png'); ?>"
              alt=""
            />
          </div>
          <div class="pb-6 flex justify-start items-center gap-2.5">
            <img
              class="w-40 lg:h-96 h-32 rounded-xl object-cover"
              src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/orang_customer.png'); ?>"
              alt=""
            />
          </div>
        </div>
      </section>

  <!-- Partner section -->
  <section id="partner-section" class="lg:px-14 px-4 py-20 bg-primary w-full h-fit flex flex-col justify-center">
    <h1 class="font-manrope lg:text-4xl text-[24px] font-bold text-center text-background mb-8">
      Dipercaya Mengelola
      <label class="text-secondary">
        <span class="count" data-target="500" data-duration="2000">0</span><span class="count-suffix">+</span>
        Project
      </label>
      di Perusahaan High Tech
    </h1>

    <!-- Parner -->
    <?php $img_url = get_stylesheet_directory_uri() . '/assets/images/'; ?>
    <div class="max-w-5xl mx-auto h-fit bg-white rounded-xl border-[3px] border-secondary px-8 py-8 grid lg:grid-cols-5 grid-cols-4 gap-4 place-content-stretch">
      <div class="h-[33.77px]">
        <img src="<?php echo esc_url($img_url . 'lintasarta2.png'); ?>" class="size-full object-contain" alt="" />
      </div>
      <div class="h-[33.77px]">
        <img src="<?php echo esc_url($img_url . 'bank_danamon.png'); ?>" class="size-full object-contain" alt="" />
      </div>
      <div class="h-[33.77px]">
        <img src="<?php echo esc_url($img_url . 'kemendikbud.png'); ?>" class="size-full object-contain" alt="" />
      </div>
      <div class="h-[33.77px]">
        <img src="<?php echo esc_url($img_url . 'artajasa.png'); ?>" class="size-full object-contain" alt="" />
      </div>
      <div class="h-[33.77px]">
        <img src="<?php echo esc_url($img_url . 'sojatek.png'); ?>" class="size-full object-contain" alt="" />
      </div>
      <div class="h-[33.77px]">
        <img src="<?php echo esc_url($img_url . 'bdx.png'); ?>" class="size-full object-contain" alt="" />
      </div>
      <div class="h-[33.77px]">
        <img src="<?php echo esc_url($img_url . 'sarimah.png'); ?>" class="size-full object-contain" alt="" />
      </div>
      <div class="h-[33.77px]">
        <img src="<?php echo esc_url($img_url . 'kementrian_pendidikan_dasar.png'); ?>" class="size-full object-contain" alt="" />
      </div>
      <div class="h-[33.77px]">
        <img src="<?php echo esc_url($img_url . 'banpt.png'); ?>" class="size-full object-contain" alt="" />
      </div>
      <div class="h-[33.77px]">
        <img src="<?php echo esc_url($img_url . 'jubelio.png'); ?>" class="size-full object-contain" alt="" />
      </div>
      <div class="h-[33.77px]">
        <img src="<?php echo esc_url($img_url . 'kopkarla.png'); ?>" class="size-full object-contain" alt="" />
      </div>
      <div class="h-[33.77px]">
        <img src="<?php echo esc_url($img_url . 'owlexa.png'); ?>" class="size-full object-contain" alt="" />
      </div>
      <div class="h-[33.77px]">
        <img src="<?php echo esc_url($img_url . 'kemenristekdikti2.png'); ?>" class="size-full object-contain" alt="" />
      </div>
      <div class="h-[33.77px]">
        <img src="<?php echo esc_url($img_url . 'steradian.png'); ?>" class="size-full object-contain" alt="" />
      </div>
      <div class="h-[33.77px]">
        <img src="<?php echo esc_url($img_url . 'biotrop.png'); ?>" class="size-full object-contain" alt="" />
      </div>
      <div class="h-[33.77px]">
        <img src="<?php echo esc_url($img_url . 'bni.png'); ?>" class="size-full object-contain" alt="" />
      </div>
      <div class="h-[33.77px]">
        <img src="<?php echo esc_url($img_url . 'mandiri.png'); ?>" class="size-full object-contain" alt="" />
      </div>
      <div class="h-[33.77px]">
        <img src="<?php echo esc_url($img_url . 'bi.png'); ?>" class="size-full object-contain" alt="" />
      </div>
      <div class="h-[33.77px]">
        <img src="<?php echo esc_url($img_url . 'axa_mandiri.png'); ?>" class="size-full object-contain" alt="" />
      </div>
      <div class="h-[33.77px]">
        <img src="<?php echo esc_url($img_url . 'kemnaker.png'); ?>" class="size-full object-contain" alt="" />
      </div>
      <div class="h-[33.77px]">
        <img src="<?php echo esc_url($img_url . 'telkom_indonesia.png'); ?>" class="size-full object-contain" alt="" />
      </div>
      <div class="h-[33.77px]">
        <img src="<?php echo esc_url($img_url . 'indosat.png'); ?>" class="size-full object-contain" alt="" />
      </div>
      <div class="h-[33.77px]">
        <img src="<?php echo esc_url($img_url . 'linknet.png'); ?>" class="size-full object-contain" alt="" />
      </div>
      <div class="h-[33.77px]">
        <img src="<?php echo esc_url($img_url . 'petrocina.png'); ?>" class="size-full object-contain" alt="" />
      </div>
      <div class="h-[33.77px]">
        <img src="<?php echo esc_url($img_url . 'pertamina.png'); ?>" class="size-full object-contain" alt="" />
      </div>
      <div class="h-[33.77px] lg:hidden">
        <img src="<?php echo esc_url($img_url . 'transon_group2.png'); ?>" class="size-full object-contain" alt="" />
      </div>
      <div class="h-[33.77px] lg:hidden">
        <img src="<?php echo esc_url($img_url . 'pelindo.png'); ?>" class="size-full object-contain" alt="" />
      </div>
      <div class="h-[33.77px] lg:hidden">
        <img src="<?php echo esc_url($img_url . 'apl.png'); ?>" class="size-full object-contain" alt="" />
      </div>

      <div class="col-span-4 lg:hidden flex items-center justify-center gap-4">
        <div class="h-[33.77px] lg:hidden">
          <img src="<?php echo esc_url($img_url . 'unilever.png'); ?>" class="size-full object-contain" alt="" />
        </div>
        <div class="w-px self-stretch bg-black"></div>
        <p class="font-inter text-[12px] font-semibold text-center">
          40+ <br />
          Lainnya
        </p>
      </div>

      <div class="h-[33.77px] hidden lg:block">
        <img src="<?php echo esc_url($img_url . 'transon_group.png'); ?>" class="size-full object-contain" alt="" />
      </div>
      <div class="h-[33.77px] hidden lg:block">
        <img src="<?php echo esc_url($img_url . 'pelindo.png'); ?>" class="size-full object-contain" alt="" />
      </div>
      <div class="h-[33.77px] hidden lg:block">
        <img src="<?php echo esc_url($img_url . 'apl.png'); ?>" class="size-full object-contain" alt="" />
      </div>
      <div class="h-[33.77px] hidden lg:block">
        <img src="<?php echo esc_url($img_url . 'unilever.png'); ?>" class="size-full object-contain" alt="" />
      </div>
      <div class="hidden lg:flex items-center justify-center lg:h-[33.77px]">
        <p class="font-inter text-[14px] font-bold text-text-primary text-center leading-tight">
          40+ <br />
          Perusahaan Lainnya
        </p>
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
