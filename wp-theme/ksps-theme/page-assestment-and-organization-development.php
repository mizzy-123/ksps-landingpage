<?php
/**
 * Template Name: Assessment & Organization Development
 * Template Post Type: page
 *
 * Auto-applied for pages with slug: assestment-and-organization-development
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$ksps_aod = get_stylesheet_directory_uri() . '/assets/images/assessment-od';
?>
<main class="bg-background">
      <!-- Hero section -->
      <section
        id="hero-section"
        class="w-full lg:min-h-screen h-screen relative z-5 flex lg:flex-row flex-col lg:items-center items-start lg:justify-between lg:gap-12 gap-12 lg:px-14 px-4 lg:pt-28 pt-28 lg:pb-24 pb-16 overflow-x-clip"
      >
        <!-- Left content -->
        <div
          class="lg:flex-1 flex flex-col gap-6 items-start relative shrink-0 w-full lg:w-[450px]"
        >
          <!-- Badge -->
          <div
            class="bg-[#e2dfff] flex gap-2 items-center px-3 py-1 rounded-full"
          >
            <span class="relative shrink-0 size-3.5 overflow-hidden">
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/icon-badge-star.svg"
                alt=""
                class="block size-full"
                width="14"
                height="14"
              />
            </span>
            <span
              class="font-inter font-semibold text-primary text-xs lg:text-sm leading-[18px] lg:leading-5 whitespace-nowrap"
            >
              KONSULTAN HR TERPERCAYA
            </span>
          </div>

          <!-- Heading -->
          <h1
            class="font-manrope font-bold text-text-primary text-[30px] leading-9 lg:text-[36px] lg:leading-11 w-full"
          >
            Bangun Tim Solid,<br />
            Optimalkan Potensi Bisnis Anda.
          </h1>

          <!-- Description -->
          <p
            class="font-inter font-normal text-text-secondary text-base leading-6 max-w-[576px] w-full"
          >
            Solusi untuk bangun sistem organisasi (Organization Development) dan
            pemetaan talenta yang akurat (Asesmen Karyawan), didukung oleh
            metodologi teruji.
          </p>

          <!-- CTAs -->
          <div class="flex flex-wrap gap-6 items-center content-center w-full">
            <a
              class="bg-secondary px-8 py-3 rounded-xl font-inter font-semibold text-sm leading-5 text-background whitespace-nowrap"
              href="https://pgp6i.app.link/konsultasi1"
            >
              Konsultasi Gratis Sekarang
            </a>
            <a
              class="font-inter font-normal text-sm leading-5 text-text-secondary underline"
              href="#footer"
            >
              Pelajari Lebih Lanjut
            </a>
          </div>
        </div>

        <!-- Right visual -->
        <div
          class="relative w-full max-w-[380px] mx-auto lg:max-w-none lg:flex-1 lg:aspect-[622/348] h-[323px] lg:h-auto shrink-0 mt-8 lg:mt-6"
        >
          <!-- Rounded stage (clips people + blurs) -->
          <div
            class="absolute inset-0 overflow-hidden rounded-[32px] bg-[rgba(35,35,35,0.1)]"
          >
            <div
              class="pointer-events-none absolute right-0 top-[-2px] size-72 rounded-full bg-[rgba(244,160,37,0.25)] blur-[65px]"
              aria-hidden="true"
            ></div>
            <div
              class="pointer-events-none absolute bottom-1 left-0 size-72 rounded-full bg-[rgba(33,21,145,0.25)] blur-[65px]"
              aria-hidden="true"
            ></div>

            <div
              class="relative z-10 flex items-end justify-center w-full h-full"
            >
              <div
                class="relative w-[200px] h-[226px] lg:w-[270px] lg:h-[305px] shrink-0 -mr-10 lg:-mr-14"
              >
                <img
                  src="<?php echo esc_url( $ksps_aod ); ?>/hero-woman.png"
                  alt="Konsultan HR wanita"
                  class="absolute inset-0 size-full object-contain object-bottom"
                />
              </div>
              <div
                class="relative w-[220px] h-[238px] lg:w-[298px] lg:h-[322px] shrink-0 -scale-x-100"
              >
                <img
                  src="<?php echo esc_url( $ksps_aod ); ?>/hero-man.png"
                  alt="Konsultan HR pria"
                  class="absolute inset-0 size-full object-contain object-bottom"
                />
              </div>
            </div>
          </div>

          <!-- Floating card: Client Satisfaction -->
          <div
            class="absolute z-20 left-[-10px] lg:left-[-46px] top-[42px] lg:top-10 flex gap-2.5 items-center lg:items-start bg-white p-4 rounded-2xl shadow-[0_8px_10px_rgba(0,0,0,0.1),0_20px_25px_rgba(0,0,0,0.1)]"
          >
            <div
              class="bg-primary flex items-center justify-center rounded-full size-8 lg:size-12 shrink-0 overflow-hidden"
            >
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/icon-star.svg"
                alt=""
                class="size-7 lg:size-9"
                width="36"
                height="36"
              />
            </div>
            <div class="flex flex-col items-start">
              <p
                class="font-inter font-semibold text-primary text-sm leading-5 lg:text-xl lg:leading-7"
              >
                4.7/5.0
              </p>
              <p
                class="font-inter font-normal text-[#464553] text-[10px] leading-4 lg:text-sm lg:leading-5"
              >
                Client Satisfaction
              </p>
            </div>
          </div>

          <!-- Floating card: Drive Profit & Growth -->
          <div
            class="absolute z-20 left-[46%] lg:left-auto lg:right-[-8px] top-[-34px] lg:top-[-24px] flex gap-2.5 items-center lg:items-start bg-white p-4 rounded-2xl shadow-[0_8px_10px_rgba(0,0,0,0.1),0_20px_25px_rgba(0,0,0,0.1)]"
          >
            <div
              class="bg-primary flex items-center justify-center rounded-full size-8 lg:size-12 shrink-0 overflow-hidden"
            >
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/icon-rocket.svg"
                alt=""
                class="size-[26px] rotate-45"
                width="26"
                height="26"
              />
            </div>
            <div class="flex flex-col items-start">
              <p
                class="font-inter font-semibold text-primary text-sm leading-5 lg:text-base lg:leading-6 whitespace-nowrap"
              >
                Drive Profit &amp; Growth
              </p>
              <p
                class="font-inter font-normal text-[#464553] text-[10px] leading-4 lg:text-sm lg:leading-5"
              >
                Strategic Impact
              </p>
            </div>
          </div>

          <!-- Floating card: 30+ Tahun Pengalaman -->
          <div
            class="absolute z-20 left-[-10px] lg:left-[-19px] top-[197px] lg:top-auto lg:bottom-4 flex gap-2.5 items-center lg:items-start bg-white p-4 rounded-2xl shadow-[0_8px_10px_rgba(0,0,0,0.1),0_20px_25px_rgba(0,0,0,0.1)]"
          >
            <div
              class="bg-primary flex items-center justify-center rounded-full size-8 lg:size-12 shrink-0"
            >
              <span class="relative w-5 h-3 overflow-hidden shrink-0">
                <img
                  src="<?php echo esc_url( $ksps_aod ); ?>/icon-trend.svg"
                  alt=""
                  class="block size-full"
                  width="20"
                  height="12"
                />
              </span>
            </div>
            <div class="flex flex-col items-start">
              <p
                class="font-inter font-semibold text-primary text-sm leading-5 lg:text-xl lg:leading-7"
              >
                30+
              </p>
              <p
                class="font-inter font-normal text-[#464553] text-[10px] leading-4 lg:text-sm lg:leading-5 whitespace-nowrap"
              >
                Tahun Pengalaman
              </p>
            </div>
          </div>

          <!-- Floating card: Powered By -->
          <div
            class="absolute z-20 right-0 lg:right-2 bottom-[-18px] lg:bottom-[-30px] flex gap-4 items-center bg-white p-4 rounded-2xl shadow-[0_8px_10px_rgba(0,0,0,0.1),0_20px_25px_rgba(0,0,0,0.1)]"
          >
            <p
              class="font-inter font-normal text-text-primary text-sm leading-5 whitespace-nowrap"
            >
              Powered By
            </p>
            <img
              src="<?php echo esc_url( $ksps_aod ); ?>/sintesa-logo.png"
              alt="Sintesa Resourcing"
              class="h-[26px] w-[74px] object-contain"
              width="74"
              height="26"
            />
          </div>
        </div>
      </section>

      <!-- Stats section -->
      <section
        id="stats-section"
        class="bg-primary w-full lg:px-20 px-4 lg:py-12 py-8"
      >
        <div
          class="flex flex-wrap lg:flex-nowrap items-center justify-between gap-y-10"
        >
          <div class="flex flex-col gap-2 items-start w-[173px] lg:w-[173px]">
            <p
              class="font-manrope font-bold text-background text-[28px] leading-9 lg:text-[42px] lg:leading-[48px]"
            >
              <span class="count" data-target="40000" data-duration="2000"
                >0</span
              ><span class="count-suffix">+</span>
            </p>
            <p
              class="font-inter font-semibold text-secondary text-sm leading-5 lg:text-base lg:leading-6"
            >
              Karyawan di Asesmen
            </p>
          </div>

          <div class="flex flex-col gap-2 items-start w-[173px] lg:w-[173px]">
            <p
              class="font-manrope font-bold text-background text-[28px] leading-9 lg:text-[42px] lg:leading-[48px]"
            >
              <span class="count" data-target="2500" data-duration="2000"
                >0</span
              ><span class="count-suffix">+</span>
            </p>
            <p
              class="font-inter font-semibold text-secondary text-sm leading-5 lg:text-base lg:leading-6"
            >
              Proyek Selesai
            </p>
          </div>

          <div class="flex flex-col gap-2 items-start w-[173px] lg:w-[173px]">
            <p
              class="font-manrope font-bold text-background text-[28px] leading-9 lg:text-[42px] lg:leading-[48px]"
            >
              <span class="count" data-target="30" data-duration="1500">0</span
              ><span class="count-suffix">+</span>
            </p>
            <p
              class="font-inter font-semibold text-secondary text-sm leading-5 lg:text-base lg:leading-6"
            >
              Tahun Pengalaman
            </p>
          </div>

          <div class="flex flex-col gap-2 items-start w-[173px] lg:w-[173px]">
            <p
              class="font-manrope font-bold text-background text-[28px] leading-9 lg:text-[42px] lg:leading-[48px]"
            >
              <span class="count" data-target="400" data-duration="1800">0</span
              ><span class="count-suffix">+</span>
            </p>
            <p
              class="font-inter font-semibold text-secondary text-sm leading-5 lg:text-base lg:leading-6"
            >
              Klien di 15 Industri
            </p>
          </div>
        </div>
      </section>

      <!-- Trusted by industries section -->
      <section
        id="trusted-industries-section"
        class="w-full lg:px-20 px-4 lg:py-16 py-10 flex flex-col gap-8"
      >
        <div class="flex flex-col gap-4 items-center pt-4 w-full">
          <h2
            class="font-manrope font-bold text-text-primary text-[24px] leading-8 lg:text-[36px] lg:leading-11 text-center"
          >
            Dipercaya oleh
            <span class="text-secondary">Ratusan</span>
            Perusahaan Pemimpin Industri
          </h2>
          <div class="bg-[#f4a025] h-1.5 w-24 rounded-full"></div>
        </div>

        <!-- Dekstop -->
        <div class="hidden lg:grid grid-cols-4 gap-6 w-full">
          <div
            class="industry-card flex flex-col gap-1 items-center w-full"
            data-industry="Automotive"
          >
            <p
              class="font-inter font-semibold text-primary text-xl leading-7 text-center w-full"
            >
              Automotive
            </p>
            <div class="industry-card-wrapper">
              <div class="industry-card-inner grid-cols-2 grid-rows-3">
                <div class="relative min-h-0 self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-01.png"
                    alt=""
                    class="absolute inset-0 m-auto lg:w-[100px] w-[58px] object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-02.png"
                    alt=""
                    class="absolute inset-0 m-auto lg:w-[100px] w-[58px] object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-03.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-04.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-05.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-06.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
              </div>
            </div>
          </div>

          <div
            class="industry-card flex flex-col gap-1 items-center w-full"
            data-industry="Agro/ Plantation"
          >
            <p
              class="font-inter font-semibold text-primary text-xl leading-7 text-center w-full"
            >
              Agro/ Plantation
            </p>
            <div class="industry-card-wrapper">
              <div class="industry-card-inner grid-cols-3 grid-rows-2">
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-07.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-08.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-09.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-10.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-11.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-12.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
              </div>
            </div>
          </div>

          <div
            class="industry-card flex flex-col gap-1 items-center w-full"
            data-industry="Financial"
          >
            <p
              class="font-inter font-semibold text-primary text-xl leading-7 text-center w-full"
            >
              Financial
            </p>
            <div class="industry-card-wrapper">
              <div class="industry-card-inner grid-cols-3 grid-rows-2">
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-13.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-14.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-15.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-16.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-17.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-18.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
              </div>
            </div>
          </div>

          <div
            class="industry-card flex flex-col gap-1 items-center w-full"
            data-industry="FMCG"
          >
            <p
              class="font-inter font-semibold text-primary text-xl leading-7 text-center w-full"
            >
              FMCG
            </p>
            <div class="industry-card-wrapper">
              <div class="industry-card-inner grid-cols-3 grid-rows-2">
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-19.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-20.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-21.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-22.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-23.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-24.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
              </div>
            </div>
          </div>

          <div
            class="industry-card flex flex-col gap-1 items-center w-full"
            data-industry="Manufacture"
          >
            <p
              class="font-inter font-semibold text-primary text-xl leading-7 text-center w-full"
            >
              Manufacture
            </p>
            <div class="industry-card-wrapper">
              <div class="industry-card-inner grid-cols-2 grid-rows-3">
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-25.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-26.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-27.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-28.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-29.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-30.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
              </div>
            </div>
          </div>

          <div
            class="industry-card flex flex-col gap-1 items-center w-full"
            data-industry="Logistic &amp; Transportation"
          >
            <p
              class="font-inter font-semibold text-primary text-xl leading-7 text-center w-full"
            >
              Logistic &amp; Transportation
            </p>
            <div class="industry-card-wrapper">
              <div class="industry-card-inner grid-cols-2 grid-rows-3">
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-31.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-32.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-33.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-34.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-35.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-36.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
              </div>
            </div>
          </div>

          <div
            class="industry-card flex flex-col gap-1 items-center w-full"
            data-industry="Mining, Oil &amp; Gas"
          >
            <p
              class="font-inter font-semibold text-primary text-xl leading-7 text-center w-full"
            >
              Mining, Oil &amp; Gas
            </p>
            <div class="industry-card-wrapper">
              <div class="industry-card-inner grid-cols-2 grid-rows-3">
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-37.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-38.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-39.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-40.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-41.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-42.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
              </div>
            </div>
          </div>

          <div
            class="industry-card flex flex-col gap-1 items-center w-full"
            data-industry="Media"
          >
            <p
              class="font-inter font-semibold text-primary text-xl leading-7 text-center w-full"
            >
              Media
            </p>
            <div class="industry-card-wrapper">
              <div class="industry-card-inner grid-cols-2 grid-rows-3">
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-43.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-44.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-45.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-46.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-47.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-48.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
              </div>
            </div>
          </div>

          <div
            class="industry-card flex flex-col gap-1 items-center w-full"
            data-industry="Pharmaceutical"
          >
            <p
              class="font-inter font-semibold text-primary text-xl leading-7 text-center w-full"
            >
              Pharmaceutical
            </p>
            <div class="industry-card-wrapper">
              <div class="industry-card-inner grid-cols-3 grid-rows-2">
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-49.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-50.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-51.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-52.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-53.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-54.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
              </div>
            </div>
          </div>

          <div
            class="industry-card flex flex-col gap-1 items-center w-full"
            data-industry="Property"
          >
            <p
              class="font-inter font-semibold text-primary text-xl leading-7 text-center w-full"
            >
              Property
            </p>
            <div class="industry-card-wrapper">
              <div class="industry-card-inner grid-cols-2 grid-rows-3">
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-55.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-56.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-57.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-58.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-59.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-60.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
              </div>
            </div>
          </div>

          <div
            class="industry-card flex flex-col gap-1 items-center w-full"
            data-industry="Retail &amp; Distributor"
          >
            <p
              class="font-inter font-semibold text-primary text-xl leading-7 text-center w-full"
            >
              Retail &amp; Distributor
            </p>
            <div class="industry-card-wrapper">
              <div class="industry-card-inner grid-cols-2 grid-rows-3">
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-61.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-62.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-63.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-64.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-65.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-66.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
              </div>
            </div>
          </div>

          <div
            class="industry-card flex flex-col gap-1 items-center w-full"
            data-industry="Other"
          >
            <p
              class="font-inter font-semibold text-primary text-xl leading-7 text-center w-full"
            >
              Other
            </p>
            <div class="industry-card-wrapper">
              <div class="industry-card-inner grid-cols-3 grid-rows-2">
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-67.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-68.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-69.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-70.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-71.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
                <div class="relative min-h-0 self-stretch justify-self-stretch">
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-72.png"
                    alt=""
                    class="absolute inset-0 size-full object-contain"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Mobile -->
        <div class="lg:hidden flex flex-col gap-4 items-center w-full">
          <div class="overflow-hidden w-full">
            <div
              id="industry-carousel-track"
              class="flex transition-transform duration-300 ease-out"
              style="transform: translateX(0%)"
            >
              <div
                class="industry-slide grid grid-cols-2 gap-6 min-w-full w-full shrink-0"
              >
                <div
                  class="industry-card flex flex-col gap-1 items-center w-full"
                  data-industry="Automotive"
                >
                  <p
                    class="font-inter font-semibold text-primary text-xl leading-7 text-center w-full"
                  >
                    Automotive
                  </p>
                  <div class="industry-card-wrapper">
                    <div class="industry-card-inner grid-cols-2 grid-rows-3">
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-01.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-02.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-03.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-04.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-05.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-06.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                    </div>
                  </div>
                </div>

                <div
                  class="industry-card flex flex-col gap-1 items-center w-full"
                  data-industry="Agro/ Plantation"
                >
                  <p
                    class="font-inter font-semibold text-primary text-xl leading-7 text-center w-full"
                  >
                    Agro/ Plantation
                  </p>
                  <div class="industry-card-wrapper">
                    <div class="industry-card-inner grid-cols-3 grid-rows-2">
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-07.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-08.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-09.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-10.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-11.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-12.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                    </div>
                  </div>
                </div>

                <div
                  class="industry-card flex flex-col gap-1 items-center w-full"
                  data-industry="Financial"
                >
                  <p
                    class="font-inter font-semibold text-primary text-xl leading-7 text-center w-full"
                  >
                    Financial
                  </p>
                  <div class="industry-card-wrapper">
                    <div class="industry-card-inner grid-cols-3 grid-rows-2">
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-13.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-14.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-15.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-16.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-17.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-18.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                    </div>
                  </div>
                </div>

                <div
                  class="industry-card flex flex-col gap-1 items-center w-full"
                  data-industry="FMCG"
                >
                  <p
                    class="font-inter font-semibold text-primary text-xl leading-7 text-center w-full"
                  >
                    FMCG
                  </p>
                  <div class="industry-card-wrapper">
                    <div class="industry-card-inner grid-cols-3 grid-rows-2">
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-19.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-20.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-21.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-22.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-23.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-24.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div
                class="industry-slide grid grid-cols-2 gap-6 min-w-full w-full shrink-0"
              >
                <div
                  class="industry-card flex flex-col gap-1 items-center w-full"
                  data-industry="Manufacture"
                >
                  <p
                    class="font-inter font-semibold text-primary text-xl leading-7 text-center w-full"
                  >
                    Manufacture
                  </p>
                  <div class="industry-card-wrapper">
                    <div class="industry-card-inner grid-cols-2 grid-rows-3">
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-25.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-26.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-27.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-28.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-29.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-30.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                    </div>
                  </div>
                </div>

                <div
                  class="industry-card flex flex-col gap-1 items-center w-full"
                  data-industry="Logistic &amp; Transportation"
                >
                  <p
                    class="font-inter font-semibold text-primary text-xl leading-7 text-center w-full"
                  >
                    Logistic &amp; Transportation
                  </p>
                  <div class="industry-card-wrapper">
                    <div class="industry-card-inner grid-cols-2 grid-rows-3">
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-31.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-32.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-33.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-34.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-35.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-36.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                    </div>
                  </div>
                </div>

                <div
                  class="industry-card flex flex-col gap-1 items-center w-full"
                  data-industry="Mining, Oil &amp; Gas"
                >
                  <p
                    class="font-inter font-semibold text-primary text-xl leading-7 text-center w-full"
                  >
                    Mining, Oil &amp; Gas
                  </p>
                  <div class="industry-card-wrapper">
                    <div class="industry-card-inner grid-cols-2 grid-rows-3">
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-37.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-38.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-39.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-40.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-41.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-42.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                    </div>
                  </div>
                </div>

                <div
                  class="industry-card flex flex-col gap-1 items-center w-full"
                  data-industry="Media"
                >
                  <p
                    class="font-inter font-semibold text-primary text-xl leading-7 text-center w-full"
                  >
                    Media
                  </p>
                  <div class="industry-card-wrapper">
                    <div class="industry-card-inner grid-cols-2 grid-rows-3">
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-43.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-44.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-45.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-46.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-47.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-48.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div
                class="industry-slide grid grid-cols-2 gap-6 min-w-full w-full shrink-0"
              >
                <div
                  class="industry-card flex flex-col gap-1 items-center w-full"
                  data-industry="Pharmaceutical"
                >
                  <p
                    class="font-inter font-semibold text-primary text-xl leading-7 text-center w-full"
                  >
                    Pharmaceutical
                  </p>
                  <div class="industry-card-wrapper">
                    <div class="industry-card-inner grid-cols-3 grid-rows-2">
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-49.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-50.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-51.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-52.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-53.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-54.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                    </div>
                  </div>
                </div>

                <div
                  class="industry-card flex flex-col gap-1 items-center w-full"
                  data-industry="Property"
                >
                  <p
                    class="font-inter font-semibold text-primary text-xl leading-7 text-center w-full"
                  >
                    Property
                  </p>
                  <div class="industry-card-wrapper">
                    <div class="industry-card-inner grid-cols-2 grid-rows-3">
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-55.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-56.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-57.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-58.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-59.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-60.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                    </div>
                  </div>
                </div>

                <div
                  class="industry-card flex flex-col gap-1 items-center w-full"
                  data-industry="Retail &amp; Distributor"
                >
                  <p
                    class="font-inter font-semibold text-primary text-xl leading-7 text-center w-full"
                  >
                    Retail &amp; Distributor
                  </p>
                  <div class="industry-card-wrapper">
                    <div class="industry-card-inner grid-cols-2 grid-rows-3">
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-61.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-62.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-63.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-64.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-65.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-66.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                    </div>
                  </div>
                </div>

                <div
                  class="industry-card flex flex-col gap-1 items-center w-full"
                  data-industry="Other"
                >
                  <p
                    class="font-inter font-semibold text-primary text-xl leading-7 text-center w-full"
                  >
                    Other
                  </p>
                  <div class="industry-card-wrapper">
                    <div class="industry-card-inner grid-cols-3 grid-rows-2">
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-67.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-68.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-69.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-70.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-71.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                      <div
                        class="relative min-h-0 self-stretch justify-self-stretch"
                      >
                        <img
                          src="<?php echo esc_url( $ksps_aod ); ?>/clients/logo-72.png"
                          alt=""
                          class="absolute inset-0 size-full object-contain"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="flex items-center gap-4">
            <button
              id="industry-prev"
              type="button"
              aria-label="Sebelumnya"
              class="size-10 rounded-full bg-primary flex items-center justify-center cursor-pointer"
            >
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/clients/chevron-left.svg"
                alt=""
                class="size-6"
                width="24"
                height="24"
              />
            </button>
            <button
              id="industry-next"
              type="button"
              aria-label="Berikutnya"
              class="size-10 rounded-full bg-primary flex items-center justify-center cursor-pointer"
            >
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/clients/chevron-right.svg"
                alt=""
                class="size-6"
                width="24"
                height="24"
              />
            </button>
          </div>
        </div>
      </section>

      <!-- Challenges / Pain points section -->
      <section
        id="challenges-section"
        class="w-full lg:px-20 px-4 lg:py-16 py-8 flex flex-col gap-8"
      >
        <div class="flex flex-col gap-3 items-center text-center w-full">
          <h2
            class="font-manrope font-bold text-text-primary text-[28px] leading-9 lg:text-[36px] lg:leading-11 w-full"
          >
            Apakah Perusahaan Anda menghadapi Tantangan SDM ini?
          </h2>
          <p
            class="font-inter font-normal text-[#464553] text-base leading-6 w-full max-w-3xl"
          >
            Pertumbuhan bisnis sering terhambat oleh fondasi internal yang belum
            optimal.
          </p>
        </div>

        <div
          class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 w-full"
        >
          <!-- Card 1 -->
          <div
            class="bg-white border border-border rounded-2xl flex flex-col gap-4 items-start p-6 sm:p-8 w-full h-full"
          >
            <img
              src="<?php echo esc_url( $ksps_aod ); ?>/challenges/icon-structure.svg"
              alt=""
              class="size-[60px] shrink-0"
              width="60"
              height="60"
            />
            <h3
              class="font-inter font-semibold text-text-primary text-xl leading-7 pt-2 w-full"
            >
              Struktur Tumpang Tindih
            </h3>
            <p
              class="font-inter font-normal text-[#464553] text-base leading-6 w-full"
            >
              Karyawan bingung batas tanggung jawab karena
              <span class="italic">job desc</span> yang tidak terpetakan rapi.
            </p>
          </div>

          <!-- Card 2 -->
          <div
            class="bg-white border border-border rounded-2xl flex flex-col gap-4 items-start p-6 sm:p-8 w-full h-full"
          >
            <img
              src="<?php echo esc_url( $ksps_aod ); ?>/challenges/icon-performance.svg"
              alt=""
              class="size-[60px] shrink-0"
              width="60"
              height="60"
            />
            <h3
              class="font-inter font-semibold text-text-primary text-xl leading-7 pt-2 w-full"
            >
              Kinerja Mandek
            </h3>
            <p
              class="font-inter font-normal text-[#464553] text-base leading-6 w-full"
            >
              Visi perusahaan gagal dieksekusi karena tidak diturunkan menjadi
              KPI yang jelas.
            </p>
          </div>

          <!-- Card 3 -->
          <div
            class="bg-white border border-border rounded-2xl flex flex-col gap-4 items-start p-6 sm:p-8 w-full h-full"
          >
            <img
              src="<?php echo esc_url( $ksps_aod ); ?>/challenges/icon-retention.svg"
              alt=""
              class="size-[60px] shrink-0"
              width="60"
              height="60"
            />
            <h3
              class="font-inter font-semibold text-text-primary text-xl leading-7 pt-2 w-full"
            >
              Retensi Karyawan Rendah
            </h3>
            <p
              class="font-inter font-normal text-[#464553] text-base leading-6 w-full"
            >
              Sistem upah/remunerasi dan jenjang karir yang tidak memotivasi
              talenta terbaik.
            </p>
          </div>

          <!-- Card 4 -->
          <div
            class="bg-white border border-border rounded-2xl flex flex-col gap-4 items-start p-6 sm:p-8 w-full h-full"
          >
            <img
              src="<?php echo esc_url( $ksps_aod ); ?>/challenges/icon-promotion.svg"
              alt=""
              class="size-[60px] shrink-0"
              width="60"
              height="60"
            />
            <h3
              class="font-inter font-semibold text-text-primary text-xl leading-7 pt-2 w-full"
            >
              Risiko Salah Promosi
            </h3>
            <p
              class="font-inter font-normal text-[#464553] text-base leading-6 w-full"
            >
              Kerugian akibat salah memilih kandidat untuk posisi kepemimpinan
              strategis tanpa validasi kompetensi.
            </p>
          </div>

          <!-- Card 5 -->
          <div
            class="bg-white border border-border rounded-2xl flex flex-col gap-4 items-start p-6 sm:p-8 w-full h-full"
          >
            <img
              src="<?php echo esc_url( $ksps_aod ); ?>/challenges/icon-test-bias.svg"
              alt=""
              class="size-[60px] shrink-0"
              width="60"
              height="60"
            />
            <h3
              class="font-inter font-semibold text-text-primary text-xl leading-7 pt-2 w-full"
            >
              Hasil Tes Bias (Software)
            </h3>
            <p
              class="font-inter font-normal text-[#464553] text-base leading-6 w-full"
            >
              Alat tes online otomatis sering gagal memotret sisi psikologis dan
              <span class="italic">power skills</span> asli karyawan.
            </p>
          </div>

          <!-- Card 6 -->
          <div
            class="bg-white border border-border rounded-2xl flex flex-col gap-4 items-start p-6 sm:p-8 w-full h-full"
          >
            <img
              src="<?php echo esc_url( $ksps_aod ); ?>/challenges/icon-capacity.svg"
              alt=""
              class="size-[60px] shrink-0"
              width="60"
              height="60"
            />
            <h3
              class="font-inter font-semibold text-text-primary text-xl leading-7 pt-2 w-full"
            >
              Kesulitan Peta Kapasitas
            </h3>
            <p
              class="font-inter font-normal text-[#464553] text-base leading-6 w-full"
            >
              Kesulitan mengidentifikasi mana
              <span class="italic">Star Employees</span> (unggulan) dan mana
              <span class="italic">Deadwood</span> (beban).
            </p>
          </div>
        </div>
      </section>

      <!-- Organization Development section -->
      <section
        id="od-section"
        class="bg-primary w-full lg:px-20 px-4 lg:py-16 py-8 flex flex-col gap-6"
      >
        <!-- Badge -->
        <div
          class="bg-[#e2dfff] inline-flex items-center self-start px-3 py-1 rounded-full"
        >
          <span
            class="font-inter font-semibold text-primary text-xs lg:text-sm leading-[18px] lg:leading-5 whitespace-nowrap"
          >
            Organization Development
          </span>
        </div>

        <div
          class="flex flex-col lg:flex-row items-center justify-center gap-10 lg:gap-20 w-full"
        >
          <!-- Left content -->
          <div class="flex flex-col gap-8 items-start w-full lg:flex-1 min-w-0">
            <h2
              class="font-manrope font-bold text-white text-[28px] leading-9 lg:text-[36px] lg:leading-11 w-full"
            >
              Rancang Bangun Sistem<br />
              SDM yang Efektif
            </h2>

            <p
              class="font-inter font-normal text-white/80 text-base leading-6 w-full"
            >
              Kami membantu manajemen memetakan strategi dan sistem HR yang
              sejalan dengan target Profit &amp; Growth perusahaan.
            </p>

            <div class="flex flex-col gap-8 items-start pt-4 w-full">
              <!-- Feature 1 -->
              <div class="flex gap-6 items-start w-full">
                <div
                  class="bg-white/10 flex items-center justify-center rounded-xl size-12 shrink-0"
                >
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/od/icon-org.svg"
                    alt=""
                    class="size-5"
                    width="20"
                    height="20"
                  />
                </div>
                <div class="flex flex-col gap-2 items-start min-w-0 flex-1">
                  <h3
                    class="font-inter font-semibold text-white text-xl leading-7 w-full"
                  >
                    Struktur Organisasi &amp; Job Desc
                  </h3>
                  <p
                    class="font-inter font-normal text-white/70 text-base leading-6 w-full"
                  >
                    Merapikan struktur dan analisa jabatan yang efektif.
                  </p>
                </div>
              </div>

              <!-- Feature 2 -->
              <div class="flex gap-6 items-start w-full">
                <div
                  class="bg-white/10 flex items-center justify-center rounded-xl size-12 shrink-0"
                >
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/od/icon-kpi.svg"
                    alt=""
                    class="w-[11px] h-[18px]"
                    width="11"
                    height="18"
                  />
                </div>
                <div class="flex flex-col gap-2 items-start min-w-0 flex-1">
                  <h3
                    class="font-inter font-semibold text-white text-xl leading-7 w-full"
                  >
                    Sistem KPI &amp; Penilaian Kinerja
                  </h3>
                  <p
                    class="font-inter font-normal text-white/70 text-base leading-6 w-full"
                  >
                    Mensinkronkan target bisnis dengan performa individu.
                  </p>
                </div>
              </div>

              <!-- Feature 3 -->
              <div class="flex gap-6 items-start w-full">
                <div
                  class="bg-white/10 flex items-center justify-center rounded-xl size-12 shrink-0"
                >
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/od/icon-career.svg"
                    alt=""
                    class="w-4 h-5"
                    width="16"
                    height="20"
                  />
                </div>
                <div class="flex flex-col gap-2 items-start min-w-0 flex-1">
                  <h3
                    class="font-inter font-semibold text-white text-xl leading-7 w-full"
                  >
                    Pola Karir (Career Path)
                  </h3>
                  <p
                    class="font-inter font-normal text-white/70 text-base leading-6 w-full"
                  >
                    Membangun peta perjalanan talenta untuk retensi jangka
                    panjang.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- Right chart -->
          <div
            class="flex flex-col gap-3 items-stretch w-full lg:w-[520px] shrink-0"
          >
            <div
              class="backdrop-blur-[2px] bg-white/5 border border-white/10 flex items-center justify-center px-6 sm:px-8 py-4 rounded-3xl w-full"
            >
              <p
                class="font-inter lg:font-manrope font-semibold lg:font-bold text-background text-base lg:text-2xl leading-6 lg:leading-8 text-center"
              >
                Sebelum &amp; Sesudah Optimasi Bisnis
              </p>
            </div>

            <div class="flex flex-col w-full pt-6 sm:pt-8 pb-4 px-2 sm:px-4">
              <!-- Chart area -->
              <div
                class="flex items-stretch w-full h-[260px] sm:h-[320px] lg:h-[340px]"
              >
                <!-- Y axis -->
                <div
                  class="flex flex-col justify-between items-end font-inter text-[10px] sm:text-xs text-background pr-1 sm:pr-2 shrink-0 py-1.5"
                >
                  <span>100</span>
                  <span>80</span>
                  <span>60</span>
                  <span>40</span>
                  <span>20</span>
                  <span>0</span>
                </div>

                <!-- Bars + grid -->
                <div class="relative flex-1 min-w-0 border-b border-[#e2e1e6]">
                  <!-- Horizontal grid lines -->
                  <div
                    class="absolute inset-0 flex flex-col justify-between py-1.5 pointer-events-none"
                    aria-hidden="true"
                  >
                    <div
                      class="w-full border-t border-dashed border-white/25"
                    ></div>
                    <div
                      class="w-full border-t border-dashed border-white/25"
                    ></div>
                    <div
                      class="w-full border-t border-dashed border-white/25"
                    ></div>
                    <div
                      class="w-full border-t border-dashed border-white/25"
                    ></div>
                    <div
                      class="w-full border-t border-dashed border-white/25"
                    ></div>
                    <div class="w-full border-t border-white/40"></div>
                  </div>

                  <!-- Bar groups -->
                  <div
                    class="absolute inset-0 flex items-end divide-x divide-dashed divide-white/20"
                  >
                    <!-- Retensi Talenta -->
                    <div
                      class="flex-1 h-full flex items-end justify-center gap-0.5 sm:gap-1 px-2 sm:px-6"
                    >
                      <div
                        class="relative flex-1 max-w-[36px] sm:max-w-[48px] h-[65%] bg-[#ababab]/80"
                      >
                        <span
                          class="absolute left-1/2 -translate-x-1/2 -top-4 font-inter text-[9px] sm:text-[10px] text-background whitespace-nowrap"
                          >65%</span
                        >
                      </div>
                      <div
                        class="relative flex-1 max-w-[36px] sm:max-w-[48px] h-[88%] bg-gradient-to-b from-[#f4a025] from-[30%] to-[#ffe627] opacity-90 shadow-[0_0_12px_2px_rgba(255,176,7,0.5)]"
                      >
                        <span
                          class="absolute left-1/2 -translate-x-1/2 -top-4 font-inter font-extrabold text-[9px] sm:text-[10px] text-white whitespace-nowrap"
                          >88%</span
                        >
                      </div>
                    </div>

                    <!-- Produktivitas KPI -->
                    <div
                      class="flex-1 h-full flex items-end justify-center gap-0.5 sm:gap-1 px-2 sm:px-6"
                    >
                      <div
                        class="relative flex-1 max-w-[36px] sm:max-w-[48px] h-[72%] bg-[#ababab]/80"
                      >
                        <span
                          class="absolute left-1/2 -translate-x-1/2 -top-4 font-inter text-[9px] sm:text-[10px] text-background whitespace-nowrap"
                          >72</span
                        >
                      </div>
                      <div
                        class="relative flex-1 max-w-[36px] sm:max-w-[48px] h-[94%] bg-gradient-to-b from-[#f4a025] from-[30%] to-[#ffe627] opacity-90 shadow-[0_0_12px_2px_rgba(255,176,7,0.5)]"
                      >
                        <span
                          class="absolute left-1/2 -translate-x-1/2 -top-4 font-inter font-extrabold text-[9px] sm:text-[10px] text-white whitespace-nowrap"
                          >94</span
                        >
                      </div>
                    </div>

                    <!-- Kejelasan Peran -->
                    <div
                      class="flex-1 h-full flex items-end justify-center gap-0.5 sm:gap-1 px-2 sm:px-6"
                    >
                      <div
                        class="relative flex-1 max-w-[36px] sm:max-w-[48px] h-[55%] bg-[#ababab]/80"
                      >
                        <span
                          class="absolute left-1/2 -translate-x-1/2 -top-4 font-inter text-[9px] sm:text-[10px] text-background whitespace-nowrap"
                          >55%</span
                        >
                      </div>
                      <div
                        class="relative flex-1 max-w-[36px] sm:max-w-[48px] h-[92%] bg-gradient-to-b from-[#f4a025] from-[30%] to-[#ffe627] opacity-90 shadow-[0_0_12px_2px_rgba(255,176,7,0.5)]"
                      >
                        <span
                          class="absolute left-1/2 -translate-x-1/2 -top-4 font-inter font-extrabold text-[9px] sm:text-[10px] text-white whitespace-nowrap"
                          >92%</span
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- X labels -->
              <div
                class="flex pl-6 sm:pl-8 pt-2 font-inter text-[10px] sm:text-xs text-background text-center"
              >
                <span class="flex-1 px-0.5">Retensi Talenta (%)</span>
                <span class="flex-1 px-0.5">Produktivitas KPI (Skor)</span>
                <span class="flex-1 px-0.5">Kejelasan Peran (%)</span>
              </div>

              <!-- Legend -->
              <div
                class="flex flex-wrap items-center justify-center gap-2 sm:gap-4 pt-3"
              >
                <div class="flex items-center gap-1">
                  <span
                    class="size-3 bg-[#ababab] border border-white shrink-0"
                  ></span>
                  <span class="font-inter text-xs text-background"
                    >Sebelum</span
                  >
                </div>
                <div class="flex items-center gap-1">
                  <span
                    class="size-3 bg-gradient-to-b from-[#f4a025] to-[#ffe627] border border-white shrink-0"
                  ></span>
                  <span class="font-inter text-xs text-background"
                    >Sesudah</span
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Case Study section -->
      <section
        id="case-study-section"
        class="relative w-full lg:px-20 px-4 lg:py-16 py-8 flex flex-col gap-8"
      >
        <svg
          width="427"
          height="343"
          viewBox="0 0 427 343"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
          class="absolute top-0 right-0"
        >
          <g clip-path="url(#clip0_11_9)">
            <path
              d="M0.343994 240.744C142.564 -43.6962 284.784 -43.6962 427.004 240.744"
              stroke="#E0DEF0"
              stroke-width="2.1333"
            />
            <path
              d="M0.343994 271.634C142.564 -12.8056 284.784 -12.8056 427.004 271.634"
              stroke="#E0DEF0"
              stroke-width="2.1333"
            />
          </g>
          <defs>
            <clipPath id="clip0_11_9">
              <rect width="427" height="343" fill="white" />
            </clipPath>
          </defs>
        </svg>

        <div
          class="relative flex flex-col gap-6 items-start max-w-3xl pt-0.5 w-full"
        >
          <div
            class="bg-[#e2dfff] inline-flex items-center px-3 py-1 rounded-full"
          >
            <span
              class="font-inter font-semibold text-[#3a35a8] text-xs lg:text-sm leading-[18px] lg:leading-5"
            >
              Case Study
            </span>
          </div>
          <h2
            class="font-manrope font-bold text-text-primary text-[28px] leading-9 lg:text-[36px] lg:leading-11 w-full"
          >
            Transformasi Nyata,<br class="lg:hidden" />
            Hasil Terukur
          </h2>
        </div>

        <div class="relative flex flex-col gap-4 lg:gap-8 items-center w-full">
          <div
            id="case-study-viewport"
            class="flex gap-6 lg:gap-10 overflow-x-auto scroll-smooth snap-x snap-mandatory w-full [scrollbar-width:none] [-ms-overflow-style:none] [&::-webkit-scrollbar]:hidden"
          >
            <!-- Card 1: Bank SBI Indonesia -->
            <article
              class="case-study-card snap-start flex flex-col bg-white border border-[#c7c4d5] rounded-xl overflow-hidden shrink-0 w-full lg:w-[calc((100%-2.5rem)/2)]"
            >
              <div class="relative h-[180px] lg:h-64 w-full overflow-hidden">
                <img
                  src="<?php echo esc_url( $ksps_aod ); ?>/case-studies/photo-sbi.png"
                  alt="Bank SBI Indonesia"
                  class="absolute inset-0 size-full object-cover"
                />
                <div
                  class="absolute left-4 top-[18px] backdrop-blur-[2px] bg-white/80 border border-secondary rounded-full px-3 py-[3.5px]"
                >
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/case-studies/logo-sbi.png"
                    alt="Bank SBI Indonesia"
                    class="h-8 w-[142px] object-contain"
                    width="142"
                    height="32"
                  />
                </div>
              </div>
              <div
                class="bg-white flex flex-col gap-6 lg:gap-8 items-start px-6 py-4 lg:p-6 flex-1"
              >
                <h3
                  class="font-manrope font-bold text-primary text-[24px] lg:text-[28px] leading-8 lg:leading-9 w-full"
                >
                  Bank SBI Indonesia
                </h3>
                <div class="flex flex-col gap-4 items-start w-full">
                  <div class="flex flex-col gap-1 items-start w-full">
                    <p
                      class="font-inter font-semibold text-[#f4a025] text-sm leading-5"
                    >
                      TANTANGAN
                    </p>
                    <p
                      class="font-inter font-normal text-[#464553] text-sm lg:text-base leading-5 lg:leading-6"
                    >
                      Persiapan transisi akuisisi strategis dari bank lokal
                      menuju bank asing yang menuntut standarisasi sistem SDM
                      secara menyeluruh.
                    </p>
                  </div>
                  <div class="flex flex-col gap-1 items-start w-full">
                    <p
                      class="font-inter font-semibold text-[#f4a025] text-sm leading-5"
                    >
                      SOLUSI
                    </p>
                    <p
                      class="font-inter font-normal text-[#464553] text-sm lg:text-base leading-5 lg:leading-6"
                    >
                      Melakukan review dan restrukturisasi organisasi, serta
                      merancang sistem remunerasi yang adil dan optimal.
                    </p>
                  </div>
                </div>
              </div>
              <div
                class="bg-[#f6f3f2] border-t border-[#c7c4d5] flex flex-col gap-2 items-start px-6 py-4 lg:py-6 mt-auto"
              >
                <p
                  class="font-inter font-semibold text-primary text-sm leading-5"
                >
                  DAMPAK
                </p>
                <p
                  class="font-inter font-semibold lg:font-bold text-primary text-sm lg:text-base leading-5 lg:leading-6"
                >
                  Memastikan kesiapan sistem SDM yang efektif dan
                  terstandarisasi, memuluskan proses akuisisi tanpa mengganggu
                  operasional perbankan.
                </p>
              </div>
            </article>

            <!-- Card 2: PT Astra Daihatsu Motor -->
            <article
              class="case-study-card snap-start flex flex-col bg-white border border-[#c7c4d5] rounded-xl overflow-hidden shrink-0 w-full lg:w-[calc((100%-2.5rem)/2)]"
            >
              <div class="relative h-[180px] lg:h-64 w-full overflow-hidden">
                <img
                  src="<?php echo esc_url( $ksps_aod ); ?>/case-studies/photo-daihatsu.png"
                  alt="PT Astra Daihatsu Motor"
                  class="absolute inset-0 size-full object-cover"
                />
                <div
                  class="absolute left-4 top-[18px] backdrop-blur-[2px] bg-white/80 border border-secondary rounded-full px-3 py-[3.5px]"
                >
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/case-studies/logo-daihatsu.png"
                    alt="Daihatsu"
                    class="h-8 w-[124px] object-contain"
                    width="124"
                    height="32"
                  />
                </div>
              </div>
              <div
                class="bg-white flex flex-col gap-6 lg:gap-8 items-start px-6 py-4 lg:p-6 flex-1"
              >
                <h3
                  class="font-manrope font-bold text-primary text-[24px] lg:text-[28px] leading-8 lg:leading-9 w-full"
                >
                  PT Astra Daihatsu Motor
                </h3>
                <div class="flex flex-col gap-4 items-start w-full">
                  <div class="flex flex-col gap-1 items-start w-full">
                    <p
                      class="font-inter font-semibold text-[#f4a025] text-sm leading-5"
                    >
                      TANTANGAN
                    </p>
                    <p
                      class="font-inter font-normal text-[#464553] text-sm lg:text-base leading-5 lg:leading-6"
                    >
                      Kebutuhan untuk meningkatkan efisiensi operasional dan
                      menyelaraskan strategi di area Sales, Marketing, dan
                      Supply Chain.
                    </p>
                  </div>
                  <div class="flex flex-col gap-1 items-start w-full">
                    <p
                      class="font-inter font-semibold text-[#f4a025] text-sm leading-5"
                    >
                      SOLUSI
                    </p>
                    <p
                      class="font-inter font-normal text-[#464553] text-sm lg:text-base leading-5 lg:leading-6"
                    >
                      Pembenahan struktur organisasi, perumusan ulang corporate
                      objectives, dan review operasional menggunakan pendekatan
                      Balanced Scorecard.
                    </p>
                  </div>
                </div>
              </div>
              <div
                class="bg-[#f6f3f2] border-t border-[#c7c4d5] flex flex-col gap-2 items-start px-6 py-4 lg:py-6 mt-auto"
              >
                <p
                  class="font-inter font-semibold text-primary text-sm leading-5"
                >
                  DAMPAK
                </p>
                <p
                  class="font-inter font-semibold lg:font-bold text-primary text-sm lg:text-base leading-5 lg:leading-6"
                >
                  Optimalisasi sistem manajemen rantai pasok dan terciptanya
                  strategi pemasaran yang lebih terukur dan selaras dengan
                  target korporat.
                </p>
              </div>
            </article>

            <!-- Card 3: Sharp Semiconductor -->
            <article
              class="case-study-card snap-start flex flex-col bg-white border border-[#c7c4d5] rounded-xl overflow-hidden shrink-0 w-full lg:w-[calc((100%-2.5rem)/2)]"
            >
              <div class="relative h-[180px] lg:h-64 w-full overflow-hidden">
                <img
                  src="<?php echo esc_url( $ksps_aod ); ?>/case-studies/photo-sharp.png"
                  alt="Sharp Semiconductor"
                  class="absolute inset-0 size-full object-cover"
                />
                <div
                  class="absolute left-4 top-[18px] backdrop-blur-[2px] bg-white/80 border border-secondary rounded-full px-3 py-[3.5px]"
                >
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/case-studies/logo-sharp.png"
                    alt="Sharp"
                    class="h-8 w-[124px] object-contain"
                    width="124"
                    height="32"
                  />
                </div>
              </div>
              <div
                class="bg-white flex flex-col gap-6 lg:gap-8 items-start px-6 py-4 lg:p-6 flex-1 relative"
              >
                <h3
                  class="font-manrope font-bold text-primary text-[24px] lg:text-[28px] leading-8 lg:leading-9 w-full pr-16 lg:pr-24"
                >
                  Sharp Semiconductor
                </h3>
                <div
                  class="absolute right-4 top-4 lg:right-6 lg:top-3.5 flex items-center"
                >
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/case-studies/icon-up.svg"
                    alt=""
                    class="size-8 lg:size-10"
                    width="42"
                    height="39"
                  />
                  <div class="flex flex-col items-end">
                    <span
                      class="font-manrope font-bold text-[#f4a025] text-[22px] lg:text-[28px] leading-7 lg:leading-9"
                      >40%</span
                    >
                    <span
                      class="font-inter text-[10px] leading-5 text-[#64748b]"
                      >Produktivitas</span
                    >
                  </div>
                </div>
                <div class="flex flex-col gap-4 items-start w-full">
                  <div class="flex flex-col gap-1 items-start w-full">
                    <p
                      class="font-inter font-semibold text-[#f4a025] text-sm leading-5"
                    >
                      TANTANGAN
                    </p>
                    <p
                      class="font-inter font-normal text-[#464553] text-sm lg:text-base leading-5 lg:leading-6"
                    >
                      Tuntutan manajemen untuk menaikkan produktivitas pabrik
                      secara signifikan, namun dengan keterbatasan investasi
                      (budget minimum).
                    </p>
                  </div>
                  <div class="flex flex-col gap-1 items-start w-full">
                    <p
                      class="font-inter font-semibold text-[#f4a025] text-sm leading-5"
                    >
                      SOLUSI
                    </p>
                    <p
                      class="font-inter font-normal text-[#464553] text-sm lg:text-base leading-5 lg:leading-6"
                    >
                      Penerapan process engineering, pembenahan fasilitas
                      produksi, dan integrasi sistem manajemen mutu.
                    </p>
                  </div>
                </div>
              </div>
              <div
                class="bg-[#f6f3f2] border-t border-[#c7c4d5] flex flex-col gap-2 items-start px-6 py-4 lg:py-6 mt-auto"
              >
                <p
                  class="font-inter font-semibold text-primary text-sm leading-5"
                >
                  DAMPAK
                </p>
                <p
                  class="font-inter font-semibold lg:font-bold text-primary text-sm lg:text-base leading-5 lg:leading-6"
                >
                  Sukses meningkatkan kapasitas dan produktivitas pabrik hingga
                  <span class="text-[#f4a025]">40%</span> tanpa pembengkakan
                  biaya investasi baru.
                </p>
              </div>
            </article>

            <!-- Card 4: Mandegani -->
            <article
              class="case-study-card snap-start flex flex-col bg-white border border-[#c7c4d5] rounded-xl overflow-hidden shrink-0 w-full lg:w-[calc((100%-2.5rem)/2)]"
            >
              <div class="relative h-[180px] lg:h-64 w-full overflow-hidden">
                <img
                  src="<?php echo esc_url( $ksps_aod ); ?>/case-studies/photo-mandegani.png"
                  alt="Mandegani"
                  class="absolute inset-0 size-full object-cover"
                />
                <div
                  class="absolute left-4 top-[18px] backdrop-blur-[2px] bg-white/80 border border-secondary rounded-full px-3 py-[3.5px]"
                >
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/case-studies/logo-mandegani2.png"
                    alt="Mandegani"
                    class="h-8 w-[98px] object-contain"
                    width="98"
                    height="32"
                  />
                </div>
              </div>
              <div
                class="bg-white flex flex-col gap-6 lg:gap-8 items-start px-6 py-4 lg:p-6 flex-1"
              >
                <h3
                  class="font-manrope font-bold text-primary text-[24px] lg:text-[28px] leading-8 lg:leading-9 w-full"
                >
                  Mandegani
                </h3>
                <div class="flex flex-col gap-4 items-start w-full">
                  <div class="flex flex-col gap-1 items-start w-full">
                    <p
                      class="font-inter font-semibold text-[#f4a025] text-sm leading-5"
                    >
                      TANTANGAN
                    </p>
                    <p
                      class="font-inter font-normal text-[#464553] text-sm lg:text-base leading-5 lg:leading-6"
                    >
                      Kebutuhan membangun pondasi tata kelola SDM yang solid
                      dari nol untuk mendukung skalabilitas bisnis.
                    </p>
                  </div>
                  <div class="flex flex-col gap-1 items-start w-full">
                    <p
                      class="font-inter font-semibold text-[#f4a025] text-sm leading-5"
                    >
                      SOLUSI
                    </p>
                    <p
                      class="font-inter font-normal text-[#464553] text-sm lg:text-base leading-5 lg:leading-6"
                    >
                      Layanan end-to-end mulai dari analisa jabatan, pembuatan
                      struktur organisasi &amp; SOP, penyusunan remunerasi,
                      hingga eksekusi asesmen karyawan.
                    </p>
                  </div>
                </div>
              </div>
              <div
                class="bg-[#f6f3f2] border-t border-[#c7c4d5] flex flex-col gap-2 items-start px-6 py-4 lg:py-6 mt-auto"
              >
                <p
                  class="font-inter font-semibold text-primary text-sm leading-5"
                >
                  DAMPAK
                </p>
                <p
                  class="font-inter font-semibold lg:font-bold text-primary text-sm lg:text-base leading-5 lg:leading-6"
                >
                  Klien kini memiliki standarisasi operasional dan pemetaan
                  talenta yang jelas, meminimalisir kebingungan peran, dan siap
                  untuk pertumbuhan bisnis.
                </p>
              </div>
            </article>
          </div>

          <div class="flex items-center justify-center gap-6">
            <button
              id="case-study-prev"
              type="button"
              aria-label="Sebelumnya"
              class="bg-primary rounded-full p-2.5 flex items-center justify-center cursor-pointer"
            >
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/case-studies/chevron-left.svg"
                alt=""
                class="size-4"
                width="16"
                height="16"
              />
            </button>
            <button
              id="case-study-next"
              type="button"
              aria-label="Berikutnya"
              class="bg-primary rounded-full p-2.5 flex items-center justify-center cursor-pointer"
            >
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/case-studies/chevron-right.svg"
                alt=""
                class="size-4"
                width="16"
                height="16"
              />
            </button>
          </div>
        </div>
      </section>

      <!-- Employee Assessment section -->
      <section
        id="employee-assessment-section"
        class="w-full lg:px-20 px-4 lg:py-16 py-8"
      >
        <div
          class="flex flex-col lg:flex-row items-start gap-8 lg:gap-16 w-full"
        >
          <!-- Assessment introduction -->
          <div
            class="flex flex-col gap-6 items-start w-full lg:w-[34%] lg:max-w-[380px] shrink-0"
          >
            <div
              class="bg-[#e2dfff] flex gap-2 items-center px-3 py-1 rounded-full"
            >
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/assessment/icon-badge.svg"
                alt=""
                class="w-[15px] h-3.5 shrink-0"
                width="15"
                height="14"
              />
              <span
                class="font-inter font-semibold text-primary text-xs lg:text-sm leading-[18px] lg:leading-5 whitespace-nowrap"
              >
                Employee Assessment
              </span>
            </div>

            <h2
              class="font-manrope font-bold text-text-primary text-[28px] leading-9 lg:text-[36px] lg:leading-11 w-full"
            >
              Asesmen Akurat, Humanis, &amp; Tanpa Bias
            </h2>

            <p
              class="font-inter font-normal text-[#464553] text-base leading-6 w-full"
            >
              Tidak semua aspek psikologis dapat diukur oleh algoritma. Asesor
              profesional kami memastikan pemetaan potensi dilakukan secara utuh
              dan komprehensif, dengan paket alat tes yang customable sesuai
              kebutuhan Anda.
            </p>

            <ul class="flex flex-col gap-4 items-start pt-2 w-full">
              <li class="flex gap-3 items-center w-full">
                <img
                  src="<?php echo esc_url( $ksps_aod ); ?>/assessment/icon-check.svg"
                  alt=""
                  class="size-5 shrink-0"
                  width="20"
                  height="20"
                />
                <span
                  class="font-inter font-bold text-primary text-base leading-6"
                  >Kredibel &amp; Valid</span
                >
              </li>
              <li class="flex gap-3 items-center w-full">
                <img
                  src="<?php echo esc_url( $ksps_aod ); ?>/assessment/icon-check.svg"
                  alt=""
                  class="size-5 shrink-0"
                  width="20"
                  height="20"
                />
                <span
                  class="font-inter font-bold text-primary text-base leading-6"
                  >Fleksibel &amp; Customable</span
                >
              </li>
              <li class="flex gap-3 items-center w-full">
                <img
                  src="<?php echo esc_url( $ksps_aod ); ?>/assessment/icon-check.svg"
                  alt=""
                  class="size-5 shrink-0"
                  width="20"
                  height="20"
                />
                <span
                  class="font-inter font-bold text-primary text-base leading-6"
                  >Laporan Express</span
                >
              </li>
            </ul>
          </div>

          <!-- Capacity mapping matrix -->
          <div
            class="bg-white border border-border rounded-3xl flex flex-col gap-8 items-start p-6 sm:p-8 lg:p-10 w-full min-w-0"
          >
            <h3
              class="font-inter font-bold text-primary text-[24px] leading-8 w-full"
            >
              Matriks Capacity Mapping
            </h3>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 w-full">
              <div
                class="bg-white border-l-4 border-[#f4a025] rounded-2xl shadow-[0_10px_15px_rgba(33,21,145,0.08)] flex flex-col gap-2 items-start px-6 sm:px-7 lg:px-9 py-4 lg:py-8 min-w-0"
              >
                <p
                  class="font-inter font-bold text-[#f4a025] text-[24px] leading-8"
                >
                  STAR
                </p>
                <p class="font-inter italic text-[#464553] text-sm leading-5">
                  High Performance &amp; High Potential
                </p>
              </div>

              <div
                class="bg-white border-l-4 border-[rgba(33,21,145,0.4)] rounded-2xl shadow-[0_10px_15px_rgba(33,21,145,0.08)] flex flex-col gap-2 items-start px-6 sm:px-7 lg:px-9 py-4 lg:py-8 min-w-0"
              >
                <p
                  class="font-inter font-bold text-[rgba(33,21,145,0.6)] text-[24px] leading-8"
                >
                  PROBLEM
                </p>
                <p class="font-inter italic text-[#464553] text-sm leading-5">
                  Low Performance &amp; High Potential
                </p>
              </div>

              <div
                class="bg-white border-l-4 border-[rgba(186,26,26,0.4)] rounded-2xl shadow-[0_10px_15px_rgba(33,21,145,0.08)] flex flex-col gap-2 items-start px-6 sm:px-7 lg:px-9 py-4 lg:py-8 min-w-0"
              >
                <p
                  class="font-inter font-bold text-[rgba(186,26,26,0.6)] text-[24px] leading-8"
                >
                  DEADWOOD
                </p>
                <p class="font-inter italic text-[#464553] text-sm leading-5">
                  Low Performance &amp; Low Potential
                </p>
              </div>

              <div
                class="bg-white border-l-4 border-[#ffa92f] rounded-2xl shadow-[0_10px_15px_rgba(33,21,145,0.08)] flex flex-col gap-2 items-start px-6 sm:px-7 lg:px-9 py-4 lg:py-8 min-w-0"
              >
                <p
                  class="font-inter font-bold text-[#ffa92f] text-[24px] leading-8"
                >
                  DEVELOPMENT
                </p>
                <p class="font-inter italic text-[#464553] text-sm leading-5">
                  High Performance &amp; Low Potential
                </p>
              </div>
            </div>

            <div class="bg-primary rounded-2xl p-6 w-full">
              <p
                class="font-inter italic text-white text-base leading-6 w-full"
              >
                Dapatkan pemetaan kapasitas tim yang komprehensif untuk setiap
                departemen Anda.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- Assessment packages section -->
      <section
        id="assessment-packages-section"
        class="bg-primary w-full lg:px-10 px-4 lg:py-16 py-8 flex flex-col gap-8 lg:gap-16"
      >
        <div class="flex flex-col gap-4 items-center text-center w-full">
          <h2
            class="font-manrope font-bold text-background text-[28px] leading-9 lg:text-[36px] lg:leading-11 w-full"
          >
            Solusi Asesmen yang
            <span class="text-secondary">Customable</span>
          </h2>
          <p
            class="font-inter font-normal text-background text-base leading-6 max-w-3xl w-full"
          >
            Pilih paket yang paling sesuai dengan kebutuhan strategis rekrutmen
            atau promosi Anda.
          </p>
        </div>

        <div
          class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 items-stretch w-full"
        >
          <!-- Assessment Reguler -->
          <article
            class="bg-white border border-border rounded-3xl flex flex-col gap-6 items-start p-6 sm:p-8 lg:p-10 w-full"
          >
            <div class="flex flex-col gap-2 items-start w-full">
              <h3
                class="font-manrope font-bold text-primary text-[24px] leading-8"
              >
                Assessment Reguler
              </h3>
              <p
                class="font-inter font-normal text-[#464553] text-base leading-6"
              >
                Ideal untuk rekrutmen massal level staff dan pelaksana.
              </p>
            </div>

            <ul class="flex flex-col gap-4 items-start pb-8 w-full">
              <li class="flex gap-3 items-center min-w-0">
                <img
                  src="<?php echo esc_url( $ksps_aod ); ?>/assessment/icon-list-check.svg"
                  alt=""
                  class="w-[17px] h-[13px] shrink-0"
                  width="17"
                  height="13"
                />
                <span class="font-inter text-[#1b1b1c] text-base leading-6"
                  >Tes Kognitif &amp; Personality</span
                >
              </li>
              <li class="flex gap-3 items-center min-w-0">
                <img
                  src="<?php echo esc_url( $ksps_aod ); ?>/assessment/icon-list-check.svg"
                  alt=""
                  class="w-[17px] h-[13px] shrink-0"
                  width="17"
                  height="13"
                />
                <span class="font-inter text-[#1b1b1c] text-base leading-6"
                  >Psikogram Standar</span
                >
              </li>
              <li class="flex gap-3 items-center min-w-0">
                <img
                  src="<?php echo esc_url( $ksps_aod ); ?>/assessment/icon-list-check.svg"
                  alt=""
                  class="w-[17px] h-[13px] shrink-0"
                  width="17"
                  height="13"
                />
                <span class="font-inter text-[#1b1b1c] text-base leading-6"
                  >Interview oleh Assessor</span
                >
              </li>
              <li class="flex gap-3 items-center min-w-0">
                <img
                  src="<?php echo esc_url( $ksps_aod ); ?>/assessment/icon-list-check.svg"
                  alt=""
                  class="w-[17px] h-[13px] shrink-0"
                  width="17"
                  height="13"
                />
                <span class="font-inter text-[#1b1b1c] text-base leading-6"
                  >4 - 5 Alat Psikotest</span
                >
              </li>
            </ul>

            <a
              href="https://pgp6i.app.link/asesmenreguler"
              class="border-2 border-secondary rounded-xl flex items-center justify-center px-8 py-3 mt-auto w-full font-inter font-semibold text-secondary text-sm leading-5"
            >
              Hubungi Kami
            </a>
          </article>

          <!-- Plus / Capacity Mapping -->
          <article
            class="relative bg-white border-4 border-secondary rounded-3xl flex flex-col gap-6 items-start p-6 sm:p-8 lg:p-10 w-full"
          >
            <div
              class="absolute -translate-x-1/2 left-1/2 -top-[15px] bg-[#f4a025] rounded-full px-4 py-1"
            >
              <span
                class="font-inter font-bold text-primary text-sm leading-5 whitespace-nowrap"
                >MOST POPULAR</span
              >
            </div>

            <div class="flex flex-col gap-2 items-start w-full">
              <h3
                class="font-manrope font-bold text-primary text-[24px] leading-8"
              >
                Plus / Capacity Mapping
              </h3>
              <p
                class="font-inter font-normal text-[#464553] text-base leading-6"
              >
                Pilihan terbaik untuk level Supervisor dan Manager
              </p>
            </div>

            <ul class="flex flex-col gap-4 items-start pb-8 w-full">
              <li class="flex gap-3 items-center min-w-0">
                <img
                  src="<?php echo esc_url( $ksps_aod ); ?>/assessment/icon-feature-star.svg"
                  alt=""
                  class="size-5 shrink-0"
                  width="20"
                  height="20"
                />
                <span class="font-inter text-[#1b1b1c] text-base leading-6"
                  >Semua fitur Reguler</span
                >
              </li>
              <li class="flex gap-3 items-center min-w-0">
                <img
                  src="<?php echo esc_url( $ksps_aod ); ?>/assessment/icon-list-check-plus.svg"
                  alt=""
                  class="w-[17px] h-[13px] shrink-0"
                  width="17"
                  height="13"
                />
                <span class="font-inter text-[#1b1b1c] text-base leading-6"
                  >+ 2 Alat Psikotest &amp; 2 Tes Simulasi</span
                >
              </li>
              <li class="flex gap-3 items-center min-w-0">
                <img
                  src="<?php echo esc_url( $ksps_aod ); ?>/assessment/icon-list-check-plus.svg"
                  alt=""
                  class="w-[17px] h-[13px] shrink-0"
                  width="17"
                  height="13"
                />
                <span class="font-inter text-[#1b1b1c] text-base leading-6"
                  >Matriks 9-Box Grid</span
                >
              </li>
              <li class="flex gap-3 items-center min-w-0">
                <img
                  src="<?php echo esc_url( $ksps_aod ); ?>/assessment/icon-list-check-plus.svg"
                  alt=""
                  class="w-[17px] h-[13px] shrink-0"
                  width="17"
                  height="13"
                />
                <span class="font-inter text-[#1b1b1c] text-base leading-6"
                  >Development Suggestion</span
                >
              </li>
            </ul>

            <a
              href="https://pgp6i.app.link/asesmenplus"
              class="bg-secondary rounded-xl flex items-center justify-center px-8 py-3 mt-auto w-full font-inter font-semibold text-background text-sm leading-5"
            >
              Hubungi Kami
            </a>
          </article>

          <!-- Assessment Center -->
          <article
            class="bg-white border border-border rounded-3xl flex flex-col gap-6 items-start p-6 sm:p-8 lg:p-10 w-full md:col-span-2 xl:col-span-1"
          >
            <div class="flex flex-col gap-2 items-start w-full">
              <h3
                class="font-manrope font-bold text-primary text-[24px] leading-8"
              >
                Assessment Center
              </h3>
              <p
                class="font-inter font-normal text-[#464553] text-base leading-6"
              >
                Ideal untuk posisi Strategic Manager dan C-Level
              </p>
            </div>

            <ul class="flex flex-col gap-4 items-start pb-8 w-full">
              <li class="flex gap-3 items-center min-w-0">
                <img
                  src="<?php echo esc_url( $ksps_aod ); ?>/assessment/icon-center-star.svg"
                  alt=""
                  class="size-5 shrink-0"
                  width="20"
                  height="20"
                />
                <span class="font-inter text-[#1b1b1c] text-base leading-6"
                  >Semua fitur Plus/ Capacity Mapping</span
                >
              </li>
              <li class="flex gap-3 items-center min-w-0">
                <img
                  src="<?php echo esc_url( $ksps_aod ); ?>/assessment/icon-list-check.svg"
                  alt=""
                  class="w-[17px] h-[13px] shrink-0"
                  width="17"
                  height="13"
                />
                <span class="font-inter text-[#1b1b1c] text-base leading-6"
                  >Leaderless Group Discussion</span
                >
              </li>
              <li class="flex gap-3 items-center min-w-0">
                <img
                  src="<?php echo esc_url( $ksps_aod ); ?>/assessment/icon-list-check.svg"
                  alt=""
                  class="w-[17px] h-[13px] shrink-0"
                  width="17"
                  height="13"
                />
                <span class="font-inter text-[#1b1b1c] text-base leading-6"
                  >Panel Assessor Senior</span
                >
              </li>
              <li class="flex gap-3 items-center min-w-0">
                <img
                  src="<?php echo esc_url( $ksps_aod ); ?>/assessment/icon-list-check.svg"
                  alt=""
                  class="w-[17px] h-[13px] shrink-0"
                  width="17"
                  height="13"
                />
                <span class="font-inter text-[#1b1b1c] text-base leading-6"
                  >Executive Reporting</span
                >
              </li>
            </ul>

            <a
              href="https://pgp6i.app.link/asesmencenter"
              class="border-2 border-secondary rounded-xl flex items-center justify-center px-8 py-3 mt-auto w-full font-inter font-semibold text-secondary text-sm leading-5"
            >
              Hubungi Kami
            </a>
          </article>
        </div>
      </section>

      <!-- Assessment impact section -->
      <section
        id="assessment-impact-section"
        class="relative w-full lg:px-20 px-4 lg:py-16 py-8 flex flex-col gap-8"
      >
        <div class="absolute inset-0 z-5 pointer-events-none">
          <svg
            width="1280"
            height="3375"
            viewBox="0 0 1280 3375"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
            class="w-full h-full text-[#E0DEF0]"
            preserveAspectRatio="xMidYMid slice"
          >
            <path
              d="M-965.016 2.92749C-741.103 171.674 -549.475 379.437 -399.34 616.232C-46.3084 1178.55 -148.834 1581.08 80.0582 1671.85C433.759 1812.09 777.157 889.571 1561.41 826.658C2136.62 780.441 2666.75 1219.52 2789.44 1321.23C3268.15 1717.65 3294.23 2099.62 3663.83 2151.65C3934.16 2190 4036.61 2002.18 4470.16 1966.92C4771.99 1942.38 5026.21 2008.6 5195.73 2069.36"
              stroke="currentColor"
              stroke-width="5"
              stroke-miterlimit="10"
            />
            <path
              d="M-969.853 47.6692C-745.924 216.465 -554.267 424.258 -404.084 661.073C-51.0561 1223.49 -153.578 1625.92 75.2177 1716.69C429.014 1856.93 772.412 934.412 1556.57 871.496C2131.87 825.379 2662 1264.46 2784.7 1366.08C3263.41 1762.49 3289.39 2144.45 3659.09 2196.49C3929.42 2234.84 4031.77 2047.02 4465.42 2011.76C4767.34 1987.23 5021.47 2053.44 5190.99 2114.2"
              stroke="currentColor"
              stroke-width="5"
              stroke-miterlimit="10"
            />
            <path
              d="M-974.69 92.4109C-750.735 261.179 -559.074 468.977 -408.921 705.815C-55.8932 1268.23 -158.415 1670.66 70.4768 1761.44C423.888 1901.66 767.671 979.157 1551.82 916.241C2127.04 870.12 2657.17 1309.2 2779.86 1410.82C3258.57 1807.33 3284.65 2189.2 3654.25 2241.23C3924.58 2279.58 4027.03 2091.67 4460.58 2056.41C4762.5 2031.87 5016.64 2098.09 5186.15 2158.84"
              stroke="currentColor"
              stroke-width="5"
              stroke-miterlimit="10"
            />
            <path
              d="M-979.34 137.159C-755.438 305.992 -563.815 513.816 -413.67 750.656C-60.6421 1313.07 -163.164 1715.5 65.6317 1806.28C419.428 1946.52 762.826 1024 1546.98 961.078C2122.29 914.962 2652.42 1354.04 2775.11 1455.66C3253.82 1852.17 3279.81 2234.04 3649.5 2286.07C3919.83 2324.43 4022.19 2136.51 4455.84 2101.25C4757.76 2076.72 5011.89 2142.93 5181.4 2203.69"
              stroke="currentColor"
              stroke-width="5"
              stroke-miterlimit="10"
            />
            <path
              d="M-984.275 181.896C-760.346 350.692 -568.689 558.485 -418.506 795.3C-65.3819 1357.72 -168.004 1760.24 60.8918 1850.92C414.592 1991.16 758.086 1068.64 1542.24 1005.73C2117.55 959.609 2647.58 1398.68 2770.37 1500.31C3248.99 1896.82 3275.07 2278.68 3644.66 2330.72C3914.99 2369.07 4017.45 2181.16 4451 2145.89C4752.92 2121.36 5007.05 2187.67 5176.57 2248.33"
              stroke="currentColor"
              stroke-width="5"
              stroke-miterlimit="10"
            />
            <path
              d="M-989.014 226.641C-765.107 395.462 -573.455 603.251 -423.244 840.045C-70.2166 1402.46 -172.742 1804.99 56.0571 1895.66C409.565 2035.89 753.252 1113.38 1537.51 1050.09C2112.73 1003.97 2642.86 1443.04 2765.55 1544.66C3244.26 1941.18 3270.24 2323.04 3639.94 2375.08C3910.27 2413.43 4012.63 2225.51 4446.27 2190.25C4748.2 2165.72 5002.32 2232.03 5171.94 2292.69"
              stroke="currentColor"
              stroke-width="5"
              stroke-miterlimit="10"
            />
            <path
              d="M-993.671 271.483C-769.771 440.325 -578.177 648.185 -428.101 885.073C-74.9769 1447.49 -177.599 1850.02 51.2969 1940.7C404.994 2081.03 748.488 1158.51 1532.64 1095.6C2107.95 1049.38 2637.99 1488.46 2760.78 1590.08C3239.39 1986.59 3265.47 2368.46 3635.07 2420.49C3905.4 2458.84 4007.85 2270.93 4441.4 2235.67C4743.32 2211.23 4997.45 2277.44 5166.97 2338.1"
              stroke="currentColor"
              stroke-width="5"
              stroke-miterlimit="10"
            />
            <path
              d="M-998.588 315.827C-774.633 484.595 -582.972 692.393 -432.819 929.231C-79.7878 1491.55 -182.313 1894.08 46.4825 1984.85C400.279 2125.09 743.677 1202.57 1527.93 1139.66C2103.14 1093.44 2633.27 1532.52 2755.97 1634.23C3234.68 2030.65 3260.66 2412.52 3630.35 2464.65C3900.68 2503 4003.13 2315.09 4436.68 2279.92C4738.51 2255.38 4992.64 2321.6 5162.25 2382.36"
              stroke="currentColor"
              stroke-width="5"
              stroke-miterlimit="10"
            />
            <path
              d="M-1003.44 360.945C-779.48 529.735 -587.791 737.529 -437.578 974.353C-84.5466 1536.67 -187.168 1939.2 41.7238 2029.97C395.232 2170.2 738.918 1247.69 1523.08 1184.49C2098.39 1138.27 2628.43 1577.35 2751.22 1679.07C3229.83 2075.48 3255.91 2457.44 3625.51 2509.48C3895.84 2547.83 3998.28 2360.01 4431.84 2324.75C4733.76 2300.22 4987.89 2366.43 5157.41 2427.19"
              stroke="currentColor"
              stroke-width="5"
              stroke-miterlimit="10"
            />
            <path
              d="M-1007.99 405.696C-784.104 574.624 -592.516 782.546 -442.43 1019.48C-89.4027 1581.89 -191.925 1984.33 36.9673 2075.1C390.668 2215.34 734.066 1292.82 1518.32 1229.9C2093.53 1183.69 2623.66 1622.76 2746.35 1724.48C3225.06 2120.9 3251.05 2502.86 3620.74 2554.9C3891.07 2593.25 3993.52 2405.43 4427.07 2370.17C4728.9 2345.63 4983.03 2411.85 5152.64 2472.6"
              stroke="currentColor"
              stroke-width="5"
              stroke-miterlimit="10"
            />
            <path
              d="M-1012.92 450.248C-789.012 619.069 -597.359 826.857 -447.149 1063.65C-94.1214 1626.07 -196.643 2028.5 32.1523 2119.27C385.853 2259.51 729.347 1336.99 1513.5 1274.07C2088.81 1227.96 2618.84 1667.03 2741.63 1768.65C3220.25 2165.07 3246.33 2547.03 3616.02 2599.07C3886.26 2637.42 3988.7 2449.6 4422.35 2414.34C4724.27 2389.81 4978.4 2456.02 5147.92 2516.78"
              stroke="currentColor"
              stroke-width="5"
              stroke-miterlimit="10"
            />
            <path
              d="M-1017.77 495.176C-793.842 663.972 -602.186 871.765 -452.002 1108.58C-98.9745 1671 -201.496 2073.43 27.3956 2164.2C381.096 2304.44 724.494 1381.92 1508.74 1319.01C2083.96 1272.89 2614.08 1711.96 2736.78 1813.58C3215.49 2210.1 3241.47 2591.96 3611.17 2644C3881.5 2682.35 3983.95 2494.44 4417.5 2459.18C4719.33 2434.64 4973.46 2500.85 5143.07 2561.61"
              stroke="currentColor"
              stroke-width="5"
              stroke-miterlimit="10"
            />
            <path
              d="M-1022.32 539.928C-798.434 708.774 -606.785 916.558 -456.548 1153.33C-103.521 1715.75 -206.043 2118.18 22.7531 2208.95C376.264 2349.09 719.961 1426.29 1503.91 1363.75C2079.22 1317.63 2609.25 1756.7 2732.04 1858.33C3210.65 2254.84 3236.73 2636.71 3606.43 2688.74C3876.66 2727.09 3979.12 2539.18 4412.76 2503.92C4714.69 2479.38 4968.81 2545.7 5138.33 2606.35"
              stroke="currentColor"
              stroke-width="5"
              stroke-miterlimit="10"
            />
            <path
              d="M-1027.35 584.664C-803.423 753.46 -611.766 961.252 -461.583 1198.07C-108.555 1760.48 -211.08 2163.01 17.8151 2253.69C371.515 2393.93 714.913 1471.41 1499.16 1408.49C2074.38 1362.37 2604.5 1801.45 2727.11 1903.07C3205.81 2299.58 3231.8 2681.45 3601.49 2733.48C3871.82 2771.83 3974.27 2583.92 4407.83 2548.66C4709.65 2524.12 4963.78 2590.43 5133.39 2651.09"
              stroke="currentColor"
              stroke-width="5"
              stroke-miterlimit="10"
            />
            <path
              d="M-1032.1 629.407C-808.188 798.228 -616.536 1006.02 -466.326 1242.81C-113.298 1805.23 -215.823 2207.75 12.9758 2298.43C366.58 2438.66 710.17 1516.15 1494.32 1453.33C2069.63 1407.21 2599.66 1846.29 2722.45 1947.91C3201.07 2344.42 3227.15 2726.29 3596.84 2778.32C3867.08 2816.67 3969.53 2628.76 4403.18 2593.5C4705.09 2569.06 4959.22 2635.28 5128.74 2695.94"
              stroke="currentColor"
              stroke-width="5"
              stroke-miterlimit="10"
            />
            <path
              d="M-1036.64 674.253C-812.668 842.998 -621.003 1050.8 -470.875 1287.66C-117.844 1849.98 -220.369 2252.5 8.5261 2343.18C361.934 2483.51 705.631 1560.71 1489.58 1498.07C2064.8 1451.86 2594.93 1890.93 2717.62 1992.55C3196.33 2389.07 3222.32 2770.93 3592.01 2822.97C3862.34 2861.32 3964.79 2673.41 4398.35 2638.15C4700.17 2613.7 4954.3 2679.92 5123.91 2740.58"
              stroke="currentColor"
              stroke-width="5"
              stroke-miterlimit="10"
            />
            <path
              d="M-1041.68 719.083C-817.727 887.85 -626.066 1095.65 -475.912 1332.49C-122.881 1894.81 -225.407 2297.33 3.38888 2388.11C357.089 2528.34 700.583 1605.83 1484.74 1542.91C2060.05 1496.7 2590.08 1935.77 2712.87 2037.49C3191.49 2433.9 3217.56 2815.87 3587.26 2867.9C3857.59 2906.26 3959.94 2718.44 4393.59 2683.18C4695.51 2658.64 4949.64 2724.86 5119.16 2785.61"
              stroke="currentColor"
              stroke-width="5"
              stroke-miterlimit="10"
            />
            <path
              d="M-1046.52 763.728C-822.565 932.496 -630.904 1140.29 -480.751 1377.13C-127.72 1939.45 -230.245 2341.98 -1.35334 2432.76C352.251 2572.99 695.745 1650.47 1479.99 1587.75C2055.2 1541.53 2585.33 1980.61 2708.03 2082.33C3186.74 2478.75 3212.72 2860.71 3582.41 2912.74C3852.74 2951.09 3955.19 2763.28 4388.74 2728.02C4690.57 2703.48 4944.7 2769.69 5114.31 2830.45"
              stroke="currentColor"
              stroke-width="5"
              stroke-miterlimit="10"
            />
            <path
              d="M-1050.97 808.484C-827.043 977.281 -635.387 1185.07 -485.203 1421.89C-132.176 1984.3 -234.698 2386.74 -5.90191 2477.51C347.503 2617.93 691.296 1695.13 1475.16 1632.3C2050.47 1586.18 2580.59 2025.26 2703.29 2126.88C3181.91 2523.3 3207.98 2905.26 3577.68 2957.3C3848.01 2995.65 3950.36 2807.83 4384.01 2772.57C4685.93 2748.03 4940.06 2814.25 5109.58 2875"
              stroke="currentColor"
              stroke-width="5"
              stroke-miterlimit="10"
            />
            <path
              d="M-1056.11 853.498C-832.151 1022.27 -640.49 1230.06 -490.337 1466.9C-137.309 2029.32 -239.831 2431.75 -10.939 2522.53C342.761 2662.76 686.159 1740.24 1470.41 1677.33C2045.63 1630.92 2575.76 2070 2698.46 2171.62C3177.16 2568.13 3203.15 2949.99 3572.84 3002.03C3843.17 3040.38 3945.63 2852.47 4379.18 2817.21C4681 2792.67 4935.13 2858.88 5104.75 2919.64"
              stroke="currentColor"
              stroke-width="5"
              stroke-miterlimit="10"
            />
            <path
              d="M-1060.84 897.959C-836.915 1066.76 -645.258 1274.55 -495.075 1511.36C-142.047 2073.78 -244.569 2476.21 -15.7733 2566.98C337.927 2707.22 681.421 1784.7 1465.56 1722.17C2040.87 1676.05 2571 2115.13 2693.7 2216.75C3172.31 2613.26 3198.39 2995.13 3568.08 3047.17C3838.41 3085.52 3940.77 2897.6 4374.42 2862.34C4676.34 2837.81 4930.47 2904.02 5099.98 2964.78"
              stroke="currentColor"
              stroke-width="5"
              stroke-miterlimit="10"
            />
            <path
              d="M-1065.3 942.714C-841.367 1111.51 -649.71 1319.3 -499.527 1556.12C-146.499 2118.53 -249.024 2521.06 -20.129 2611.74C333.173 2752.35 676.966 1829.55 1460.83 1766.53C2036.05 1720.41 2566.17 2159.49 2688.87 2261.11C3167.58 2657.62 3193.56 3039.49 3563.26 3091.52C3833.59 3129.87 3936.04 2941.96 4369.59 2906.7C4671.42 2882.16 4925.64 2948.48 5095.16 3009.13"
              stroke="currentColor"
              stroke-width="5"
              stroke-miterlimit="10"
            />
            <path
              d="M-1070.44 987.918C-846.53 1156.74 -654.877 1364.53 -504.667 1601.32C-151.639 2163.74 -254.165 2566.27 -25.3654 2656.94C328.335 2797.18 671.829 1874.66 1455.98 1811.74C2031.31 1765.15 2561.44 2204.22 2684.13 2305.84C3162.84 2702.36 3188.83 3084.22 3558.52 3136.26C3828.85 3174.61 3931.21 2986.69 4364.85 2951.44C4666.78 2926.9 4920.9 2993.21 5090.42 3053.87"
              stroke="currentColor"
              stroke-width="5"
              stroke-miterlimit="10"
            />
            <path
              d="M-1075.26 1032.28C-851.317 1201.02 -659.656 1408.79 -509.492 1645.59C-156.464 2208 -258.99 2610.53 -30.0942 2701.21C323.603 2841.55 667.001 1919.02 1451.25 1856.02C2026.47 1809.89 2556.59 2248.97 2679.29 2350.59C3158 2747.11 3184.08 3128.97 3553.68 3181.01C3824.01 3219.36 3926.46 3031.45 4360.01 2996.18C4661.83 2971.74 4916.06 3037.96 5085.58 3098.62"
              stroke="currentColor"
              stroke-width="5"
              stroke-miterlimit="10"
            />
            <path
              d="M-1079.62 1077.02C-855.667 1245.79 -664.006 1453.59 -513.853 1690.43C-160.822 2252.75 -263.347 2655.27 -34.5514 2746.05C318.843 2886.75 662.637 1963.96 1446.41 1900.84C2021.72 1854.62 2551.85 2293.7 2674.55 2395.41C3153.26 2791.83 3179.24 3173.7 3548.93 3225.83C3819.26 3264.18 3921.62 3076.27 4355.26 3041.1C4657.19 3016.57 4911.32 3082.78 5080.83 3143.54"
              stroke="currentColor"
              stroke-width="5"
              stroke-miterlimit="10"
            />
            <path
              d="M-1084.84 1121.75C-860.889 1290.52 -669.228 1498.32 -519.075 1735.15C-166.044 2297.47 -268.569 2700 -39.6773 2790.78C314.023 2931.01 657.517 2008.5 1441.67 1945.58C2016.89 1899.36 2547.02 2338.15 2669.81 2440.16C3148.42 2836.58 3174.5 3218.54 3544.09 3270.57C3814.43 3308.92 3916.87 3121.11 4350.43 3085.85C4652.35 3061.31 4906.48 3127.53 5075.99 3188.28"
              stroke="currentColor"
              stroke-width="5"
              stroke-miterlimit="10"
            />
            <path
              d="M-1089.59 1166.5C-865.658 1335.29 -674.002 1543.08 -523.818 1779.9C-170.79 2342.31 -273.313 2744.75 -44.5168 2835.52C309.28 2975.76 652.678 2053.24 1436.83 1990.32C2012.14 1944.11 2542.27 2383.19 2664.97 2484.9C3143.68 2881.32 3169.66 3263.28 3539.35 3315.32C3809.68 3353.67 3912.03 3165.85 4345.68 3130.59C4647.6 3106.05 4901.74 3172.27 5071.25 3233.02"
              stroke="currentColor"
              stroke-width="5"
              stroke-miterlimit="10"
            />
          </svg>
        </div>

        <div
          class="relative z-10 flex flex-col gap-6 items-center text-center w-full"
        >
          <div
            class="bg-[#e2dfff] inline-flex items-center px-3 py-1 rounded-full"
          >
            <span
              class="font-inter font-semibold text-[#3a35a8] text-xs lg:text-sm leading-[18px] lg:leading-5"
              >Our Impact</span
            >
          </div>
          <h2
            class="font-manrope font-bold text-text-primary text-[28px] leading-9 lg:text-[36px] lg:leading-11 max-w-3xl w-full"
          >
            Teruji Memetakan
            <span class="text-secondary lg:text-text-primary">Talenta</span> di
            Berbagai
            <span class="text-secondary lg:text-text-primary"
              >Skala Bisnis</span
            >
          </h2>
          <p
            class="font-inter font-normal text-[#464553] text-base leading-6 max-w-4xl w-full"
          >
            Dari site terpencil hingga manajemen holding, pendekatan asesmen
            kami dirancang untuk mengamankan suksesi dan kualitas SDM Anda.
          </p>
        </div>

        <div class="relative z-10 flex flex-col gap-8 items-center w-full">
          <div
            id="assessment-impact-viewport"
            class="flex gap-6 lg:gap-10 overflow-x-auto scroll-smooth snap-x snap-mandatory w-full [scrollbar-width:none] [-ms-overflow-style:none] [&::-webkit-scrollbar]:hidden"
          >
            <!-- Supreme Energy -->
            <article
              class="assessment-impact-card snap-start flex flex-col bg-white border border-[#c7c4d5] rounded-xl overflow-hidden shrink-0 w-full lg:w-[calc((100%-2.5rem)/2)]"
            >
              <div class="relative h-[180px] lg:h-64 overflow-hidden">
                <img
                  src="<?php echo esc_url( $ksps_aod ); ?>/impact/photo-supreme.png"
                  alt="Supreme Energy"
                  class="absolute inset-0 size-full object-cover"
                />
                <div
                  class="absolute left-4 top-[18px] bg-white/80 backdrop-blur-[2px] border border-secondary rounded-full px-3 py-[3.5px]"
                >
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/impact/logo-supreme.png"
                    alt="Supreme Energy"
                    class="h-8 w-[142px] object-contain"
                    width="142"
                    height="32"
                  />
                </div>
              </div>
              <div
                class="bg-white flex flex-col gap-6 lg:gap-8 px-6 py-4 lg:p-6 flex-1"
              >
                <h3
                  class="font-manrope font-bold text-primary text-[24px] lg:text-[28px] leading-8 lg:leading-9"
                >
                  Supreme Energy
                </h3>
                <div class="flex flex-col gap-4">
                  <div class="flex flex-col gap-1">
                    <p
                      class="font-inter font-semibold text-[#f4a025] text-sm leading-5"
                    >
                      TANTANGAN
                    </p>
                    <p
                      class="font-inter text-[#464553] text-sm lg:text-base leading-5 lg:leading-6"
                    >
                      Kebutuhan memetakan kompetensi talenta dengan profil yang
                      sangat berbeda secara geografis dan fungsi teknis.
                    </p>
                  </div>
                  <div class="flex flex-col gap-1">
                    <p
                      class="font-inter font-semibold text-[#f4a025] text-sm leading-5"
                    >
                      SOLUSI
                    </p>
                    <p
                      class="font-inter text-[#464553] text-sm lg:text-base leading-5 lg:leading-6"
                    >
                      Melakukan Assessment Plus (seleksi, promosi, dan talent
                      mapping) secara menyeluruh untuk semua unit bisnis.
                    </p>
                  </div>
                </div>
              </div>
              <div
                class="bg-[#f6f3f2] border-t border-[#c7c4d5] flex flex-col gap-2 px-6 py-4 lg:py-6 mt-auto"
              >
                <p
                  class="font-inter font-semibold text-primary text-sm leading-5"
                >
                  DAMPAK
                </p>
                <p
                  class="font-inter font-semibold lg:font-bold text-primary text-sm lg:text-base leading-5 lg:leading-6"
                >
                  Memastikan standar talenta yang objektif dan merata, mulai
                  dari Engineer di operasional site Sumatera hingga tim
                  strategis tingkat Senior Manager di Head Office Jakarta.
                </p>
              </div>
            </article>

            <!-- Prisma Advertising -->
            <article
              class="assessment-impact-card snap-start flex flex-col bg-white border border-[#c7c4d5] rounded-xl overflow-hidden shrink-0 w-full lg:w-[calc((100%-2.5rem)/2)]"
            >
              <div class="relative h-[180px] lg:h-64 overflow-hidden">
                <img
                  src="<?php echo esc_url( $ksps_aod ); ?>/impact/photo-prisma.png"
                  alt="Prisma Advertising"
                  class="absolute inset-0 size-full object-cover"
                />
                <div
                  class="absolute left-4 top-[18px] bg-white/80 backdrop-blur-[2px] border border-secondary rounded-full px-3 py-[3.5px]"
                >
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/impact/logo-prisma.png"
                    alt="Prisma Advertising"
                    class="h-8 w-[124px] object-contain"
                    width="124"
                    height="32"
                  />
                </div>
              </div>
              <div
                class="bg-white flex flex-col gap-6 lg:gap-8 px-6 py-4 lg:p-6 flex-1"
              >
                <h3
                  class="font-manrope font-bold text-primary text-[24px] lg:text-[28px] leading-8 lg:leading-9"
                >
                  Prisma Advertising
                </h3>
                <div class="flex flex-col gap-4">
                  <div class="flex flex-col gap-1">
                    <p
                      class="font-inter font-semibold text-[#f4a025] text-sm leading-5"
                    >
                      TANTANGAN
                    </p>
                    <p
                      class="font-inter text-[#464553] text-sm lg:text-base leading-5 lg:leading-6"
                    >
                      Memastikan standar kualitas kepemimpinan yang seragam di
                      tengah kompleksitas struktur perusahaan holding yang
                      memiliki banyak anak usaha.
                    </p>
                  </div>
                  <div class="flex flex-col gap-1">
                    <p
                      class="font-inter font-semibold text-[#f4a025] text-sm leading-5"
                    >
                      SOLUSI
                    </p>
                    <p
                      class="font-inter text-[#464553] text-sm lg:text-base leading-5 lg:leading-6"
                    >
                      Merancang program Assessment Plus khusus untuk
                      standarisasi seleksi dan promosi di berbagai anak
                      perusahaan dalam naungan 1 holding Prisma Group.
                    </p>
                  </div>
                </div>
              </div>
              <div
                class="bg-[#f6f3f2] border-t border-[#c7c4d5] flex flex-col gap-2 px-6 py-4 lg:py-6 mt-auto"
              >
                <p
                  class="font-inter font-semibold text-primary text-sm leading-5"
                >
                  DAMPAK
                </p>
                <p
                  class="font-inter font-semibold lg:font-bold text-primary text-sm lg:text-base leading-5 lg:leading-6"
                >
                  Terciptanya integrasi data talenta kepemimpinan yang valid,
                  memudahkan manajemen menempatkan figur terbaik dari level
                  Supervisor hingga Head of Department di seluruh anak usaha.
                </p>
              </div>
            </article>

            <!-- Asian Isuzu Casting -->
            <article
              class="assessment-impact-card snap-start flex flex-col bg-white border border-[#c7c4d5] rounded-xl overflow-hidden shrink-0 w-full lg:w-[calc((100%-2.5rem)/2)]"
            >
              <div class="relative h-[180px] lg:h-64 overflow-hidden">
                <img
                  src="<?php echo esc_url( $ksps_aod ); ?>/impact/photo-aicc.png"
                  alt="Asian Isuzu Casting"
                  class="absolute inset-0 size-full object-cover"
                />
                <div
                  class="absolute left-4 top-[18px] bg-white/80 backdrop-blur-[2px] border border-secondary rounded-full px-3 py-[3.5px]"
                >
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/impact/logo-aicc.png"
                    alt="Asian Isuzu Casting"
                    class="h-8 w-[124px] object-contain"
                    width="124"
                    height="32"
                  />
                </div>
              </div>
              <div
                class="bg-white flex flex-col gap-6 lg:gap-8 px-6 py-4 lg:p-6 flex-1"
              >
                <h3
                  class="font-manrope font-bold text-primary text-[24px] lg:text-[28px] leading-8 lg:leading-9"
                >
                  Asian Isuzu Casting (AICC)
                </h3>
                <div class="flex flex-col gap-4">
                  <div class="flex flex-col gap-1">
                    <p
                      class="font-inter font-semibold text-[#f4a025] text-sm leading-5"
                    >
                      TANTANGAN
                    </p>
                    <p
                      class="font-inter text-[#464553] text-sm lg:text-base leading-5 lg:leading-6"
                    >
                      Risiko terjadinya kekosongan kursi kepemimpinan
                      (leadership vacuum) akibat banyaknya karyawan senior dan
                      kunci yang akan memasuki masa pensiun.
                    </p>
                  </div>
                  <div class="flex flex-col gap-1">
                    <p
                      class="font-inter font-semibold text-[#f4a025] text-sm leading-5"
                    >
                      SOLUSI
                    </p>
                    <p
                      class="font-inter text-[#464553] text-sm lg:text-base leading-5 lg:leading-6"
                    >
                      Fokus pada eksekusi Assessment Plus untuk mengidentifikasi
                      potensi kandidat internal melalui promosi dan talent
                      mapping.
                    </p>
                  </div>
                </div>
              </div>
              <div
                class="bg-[#f6f3f2] border-t border-[#c7c4d5] flex flex-col gap-2 px-6 py-4 lg:py-6 mt-auto"
              >
                <p
                  class="font-inter font-semibold text-primary text-sm leading-5"
                >
                  DAMPAK
                </p>
                <p
                  class="font-inter font-semibold lg:font-bold text-primary text-sm lg:text-base leading-5 lg:leading-6"
                >
                  Klien berhasil mengamankan masa depan perusahaan dengan
                  persiapan program suksesi yang matang, menjamin transisi yang
                  mulus dari level Foreman hingga Manager.
                </p>
              </div>
            </article>

            <!-- Suzuki Finance -->
            <article
              class="assessment-impact-card snap-start flex flex-col bg-white border border-[#c7c4d5] rounded-xl overflow-hidden shrink-0 w-full lg:w-[calc((100%-2.5rem)/2)]"
            >
              <div class="relative h-[180px] lg:h-64 overflow-hidden">
                <img
                  src="<?php echo esc_url( $ksps_aod ); ?>/impact/photo-suzuki.png"
                  alt="Suzuki Finance"
                  class="absolute inset-0 size-full object-cover"
                />
                <div
                  class="absolute left-4 top-[18px] bg-white/80 backdrop-blur-[2px] border border-secondary rounded-full px-3 py-[3.5px]"
                >
                  <img
                    src="<?php echo esc_url( $ksps_aod ); ?>/impact/logo-suzuki.png"
                    alt="Suzuki Finance"
                    class="h-8 w-[98px] object-contain"
                    width="98"
                    height="32"
                  />
                </div>
              </div>
              <div
                class="bg-white flex flex-col gap-6 lg:gap-8 px-6 py-4 lg:p-6 flex-1"
              >
                <h3
                  class="font-manrope font-bold text-primary text-[24px] lg:text-[28px] leading-8 lg:leading-9"
                >
                  Suzuki Finance
                </h3>
                <div class="flex flex-col gap-4">
                  <div class="flex flex-col gap-1">
                    <p
                      class="font-inter font-semibold text-[#f4a025] text-sm leading-5"
                    >
                      TANTANGAN
                    </p>
                    <p
                      class="font-inter text-[#464553] text-sm lg:text-base leading-5 lg:leading-6"
                    >
                      Kesulitan melakukan standarisasi evaluasi dan rekrutmen
                      talenta dalam skala masif yang tersebar di seluruh wilayah
                      operasional di Indonesia.
                    </p>
                  </div>
                  <div class="flex flex-col gap-1">
                    <p
                      class="font-inter font-semibold text-[#f4a025] text-sm leading-5"
                    >
                      SOLUSI
                    </p>
                    <p
                      class="font-inter text-[#464553] text-sm lg:text-base leading-5 lg:leading-6"
                    >
                      Implementasi Assessment Plus (seleksi, promosi, dan talent
                      mapping) dengan jangkauan nasional.
                    </p>
                  </div>
                </div>
              </div>
              <div
                class="bg-[#f6f3f2] border-t border-[#c7c4d5] flex flex-col gap-2 px-6 py-4 lg:py-6 mt-auto"
              >
                <p
                  class="font-inter font-semibold text-primary text-sm leading-5"
                >
                  DAMPAK
                </p>
                <p
                  class="font-inter font-semibold lg:font-bold text-primary text-sm lg:text-base leading-5 lg:leading-6"
                >
                  Efisiensi pemetaan talenta jarak jauh dengan hasil evaluasi
                  yang konsisten &amp; akurat, mendukung kualitas SDM dari level
                  Staff cabang hingga Area Manager di seluruh penjuru negeri.
                </p>
              </div>
            </article>
          </div>

          <div class="flex items-center justify-center gap-6">
            <button
              id="assessment-impact-prev"
              type="button"
              aria-label="Studi sebelumnya"
              class="bg-primary rounded-full p-2.5 flex items-center justify-center cursor-pointer"
            >
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/impact/chevron-left.svg"
                alt=""
                class="size-4"
                width="16"
                height="16"
              />
            </button>
            <button
              id="assessment-impact-next"
              type="button"
              aria-label="Studi berikutnya"
              class="bg-primary rounded-full p-2.5 flex items-center justify-center cursor-pointer"
            >
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/impact/chevron-right.svg"
                alt=""
                class="size-4"
                width="16"
                height="16"
              />
            </button>
          </div>
        </div>
      </section>

      <!-- Client testimonials section -->
      <section
        id="client-testimonials-section"
        class="relative z-0 w-full lg:px-20 px-4 lg:py-16 py-8 flex flex-col gap-8"
      >
        <div
          class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 w-full"
        >
          <div class="flex flex-col gap-4 max-w-2xl">
            <h2
              class="font-manrope font-bold text-text-primary text-[28px] leading-9 lg:text-[36px] lg:leading-11"
            >
              Keberhasilan Klien adalah
              <span class="text-secondary lg:text-text-primary"
                >Prioritas Kami</span
              >
            </h2>
            <p class="font-inter text-[#464553] text-base leading-6">
              Kisah sukses nyata dari transformasi organisasi dan penempatan
              talenta yang tepat sasaran.
            </p>
          </div>
          <div class="flex items-center justify-end gap-6">
            <button
              id="testimonials-prev"
              type="button"
              aria-label="Testimoni sebelumnya"
              class="bg-primary rounded-full p-2.5 flex items-center justify-center cursor-pointer"
            >
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/testimonials/chevron-left.svg"
                alt=""
                class="size-4"
                width="16"
                height="16"
              />
            </button>
            <button
              id="testimonials-next"
              type="button"
              aria-label="Testimoni berikutnya"
              class="bg-primary rounded-full p-2.5 flex items-center justify-center cursor-pointer"
            >
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/testimonials/chevron-right.svg"
                alt=""
                class="size-4"
                width="16"
                height="16"
              />
            </button>
          </div>
        </div>

        <div
          id="testimonials-viewport"
          class="flex gap-8 overflow-x-auto scroll-smooth snap-x snap-mandatory pb-8 w-full [scrollbar-width:none] [-ms-overflow-style:none] [&::-webkit-scrollbar]:hidden"
        >
          <article
            class="testimonial-card snap-start bg-white border border-[#e2e1e6] rounded-3xl p-6 flex flex-col gap-6 justify-between shrink-0 w-full lg:w-[calc((100%-4rem)/3)] min-h-[284px] lg:min-h-[228px]"
          >
            <div class="flex gap-1" aria-label="5 dari 5 bintang">
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/testimonials/star.svg"
                alt=""
                class="w-5 h-[19px]"
              />
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/testimonials/star.svg"
                alt=""
                class="w-5 h-[19px]"
              />
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/testimonials/star.svg"
                alt=""
                class="w-5 h-[19px]"
              />
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/testimonials/star.svg"
                alt=""
                class="w-5 h-[19px]"
              />
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/testimonials/star.svg"
                alt=""
                class="w-5 h-[19px]"
              />
            </div>
            <blockquote
              class="font-inter text-[#2e2e2e] text-base leading-6 flex-1"
            >
              "Sangat puas dengan hasil evaluasi potensi karyawan yang selesai
              tepat waktu. Apresiasi besar untuk tim!"
            </blockquote>
            <div class="flex items-center gap-4 pt-2">
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/testimonials/christina.png"
                alt="Christina Tri Handayani"
                class="size-16 rounded-full object-cover shrink-0"
                width="64"
                height="64"
              />
              <div class="min-w-0">
                <p
                  class="font-inter font-semibold text-text-primary text-base leading-6"
                >
                  Christina Tri Handayani
                </p>
                <p class="font-inter text-[#464553] text-sm leading-5">
                  Head of Talent Management Departement
                </p>
              </div>
            </div>
          </article>

          <article
            class="testimonial-card snap-start bg-primary border border-[#e2e1e6] rounded-3xl p-6 flex flex-col gap-6 justify-between shrink-0 w-full lg:w-[calc((100%-4rem)/3)] min-h-[284px] lg:min-h-[228px]"
          >
            <div class="flex gap-1" aria-label="5 dari 5 bintang">
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/testimonials/star.svg"
                alt=""
                class="w-5 h-[19px]"
              />
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/testimonials/star.svg"
                alt=""
                class="w-5 h-[19px]"
              />
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/testimonials/star.svg"
                alt=""
                class="w-5 h-[19px]"
              />
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/testimonials/star.svg"
                alt=""
                class="w-5 h-[19px]"
              />
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/testimonials/star.svg"
                alt=""
                class="w-5 h-[19px]"
              />
            </div>
            <blockquote
              class="font-inter text-[#f5f4fa] text-base leading-6 flex-1"
            >
              "Sangat puas dengan layanan yang diberikan dalam mendampingi
              proses rekrutmen hingga asesmen karyawan kami hingga saat ini."
            </blockquote>
            <div class="flex items-center gap-4 pt-2">
              <div
                class="size-16 rounded-full bg-white flex justify-center items-center"
              >
                <img
                  src="<?php echo esc_url( $ksps_aod ); ?>/testimonials/sri-wahyuti.png"
                  alt="Sri Wahyuti"
                  class="w-[50px]"
                />
              </div>

              <div class="min-w-0">
                <p
                  class="font-inter font-semibold text-[#f5f4fa] text-base leading-6"
                >
                  Sri Wahyuti
                </p>
                <p class="font-inter text-[#e2e1e6] text-sm leading-5">
                  HRPD Manager
                </p>
              </div>
            </div>
          </article>

          <article
            class="testimonial-card snap-start bg-white border border-[#e2e1e6] rounded-3xl p-6 flex flex-col gap-6 justify-between shrink-0 w-full lg:w-[calc((100%-4rem)/3)] min-h-[284px] lg:min-h-[228px]"
          >
            <div class="flex gap-1" aria-label="5 dari 5 bintang">
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/testimonials/star.svg"
                alt=""
                class="w-5 h-[19px]"
              />
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/testimonials/star.svg"
                alt=""
                class="w-5 h-[19px]"
              />
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/testimonials/star.svg"
                alt=""
                class="w-5 h-[19px]"
              />
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/testimonials/star.svg"
                alt=""
                class="w-5 h-[19px]"
              />
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/testimonials/star.svg"
                alt=""
                class="w-5 h-[19px]"
              />
            </div>
            <blockquote
              class="font-inter text-[#2e2e2e] text-base leading-6 flex-1"
            >
              "Evaluasi dan asesmen karyawan dari tim konsultan HR ini
              berkualitas sangat baik dan hasilnya benar-benar sesuai dengan
              ekspektasi kami."
            </blockquote>
            <div class="flex items-center gap-4 pt-2">
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/testimonials/mercy-enda.png"
                alt="Mercy Enda"
                class="size-16 rounded-full object-contain shrink-0"
                width="64"
                height="64"
              />
              <div class="min-w-0">
                <p
                  class="font-inter font-semibold text-text-primary text-base leading-6"
                >
                  Mercy Enda
                </p>
                <p class="font-inter text-[#464553] text-sm leading-5">
                  Head of Human Resources and Development
                </p>
              </div>
            </div>
          </article>

          <article
            class="testimonial-card snap-start bg-primary border border-[#e2e1e6] rounded-3xl p-6 flex flex-col gap-6 justify-between shrink-0 w-full lg:w-[calc((100%-4rem)/3)] min-h-[284px] lg:min-h-[228px]"
          >
            <div class="flex gap-1" aria-label="5 dari 5 bintang">
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/testimonials/star.svg"
                alt=""
                class="w-5 h-[19px]"
              />
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/testimonials/star.svg"
                alt=""
                class="w-5 h-[19px]"
              />
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/testimonials/star.svg"
                alt=""
                class="w-5 h-[19px]"
              />
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/testimonials/star.svg"
                alt=""
                class="w-5 h-[19px]"
              />
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/testimonials/star.svg"
                alt=""
                class="w-5 h-[19px]"
              />
            </div>
            <blockquote
              class="font-inter text-[#f5f4fa] text-base leading-6 flex-1"
            >
              "Apresiasi besar atas bantuan rekrutmen serta penilaian kandidat
              di perusahaan kami. Hasil kerja yang diberikan sangat memuaskan."
            </blockquote>
            <div class="flex items-center gap-4 pt-2">
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/testimonials/monica-feifei.png"
                alt="Monica Feifei"
                class="size-16 rounded-full object-contain bg-white shrink-0"
                width="64"
                height="64"
              />
              <div class="min-w-0">
                <p
                  class="font-inter font-semibold text-[#f5f4fa] text-base leading-6"
                >
                  Monica Feifei
                </p>
                <p class="font-inter text-[#e2e1e6] text-sm leading-5">
                  Human Resources Director
                </p>
              </div>
            </div>
          </article>

          <article
            class="testimonial-card snap-start bg-white border border-[#e2e1e6] rounded-3xl p-6 flex flex-col gap-6 justify-between shrink-0 w-full lg:w-[calc((100%-4rem)/3)] min-h-[284px] lg:min-h-[228px]"
          >
            <div class="flex gap-1" aria-label="5 dari 5 bintang">
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/testimonials/star.svg"
                alt=""
                class="w-5 h-[19px]"
              />
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/testimonials/star.svg"
                alt=""
                class="w-5 h-[19px]"
              />
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/testimonials/star.svg"
                alt=""
                class="w-5 h-[19px]"
              />
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/testimonials/star.svg"
                alt=""
                class="w-5 h-[19px]"
              />
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/testimonials/star.svg"
                alt=""
                class="w-5 h-[19px]"
              />
            </div>
            <blockquote
              class="font-inter text-[#2e2e2e] text-base leading-6 flex-1"
            >
              "Kami merasa sangat puas dengan kualitas layanan rekrutmen yang
              telah kami terima."
            </blockquote>
            <div class="flex items-center gap-4 pt-2">
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/testimonials/hari-triyanta.png"
                alt="Hari Triyanta"
                class="size-16 rounded-full object-contain shrink-0"
                width="64"
                height="64"
              />
              <div class="min-w-0">
                <p
                  class="font-inter font-semibold text-text-primary text-base leading-6"
                >
                  Hari Triyanta
                </p>
                <p class="font-inter text-[#464553] text-sm leading-5">
                  Human Resources Services Manager
                </p>
              </div>
            </div>
          </article>

          <article
            class="testimonial-card snap-start bg-primary border border-[#e2e1e6] rounded-3xl p-6 flex flex-col gap-6 justify-between shrink-0 w-full lg:w-[calc((100%-4rem)/3)] min-h-[284px] lg:min-h-[228px]"
          >
            <div class="flex gap-1" aria-label="5 dari 5 bintang">
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/testimonials/star.svg"
                alt=""
                class="w-5 h-[19px]"
              />
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/testimonials/star.svg"
                alt=""
                class="w-5 h-[19px]"
              />
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/testimonials/star.svg"
                alt=""
                class="w-5 h-[19px]"
              />
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/testimonials/star.svg"
                alt=""
                class="w-5 h-[19px]"
              />
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/testimonials/star.svg"
                alt=""
                class="w-5 h-[19px]"
              />
            </div>
            <blockquote
              class="font-inter text-[#f5f4fa] text-base leading-6 flex-1"
            >
              "Sebuah pengalaman berharga dapat bekerja sama secara rutin dalam
              agenda asesmen perusahaan selama 5 tahun terakhir ini."
            </blockquote>
            <div class="flex items-center gap-4 pt-2">
              <img
                src="<?php echo esc_url( $ksps_aod ); ?>/testimonials/lukitarini.png"
                alt="Lukitarini Setyawan"
                class="size-16 rounded-full object-contain bg-white shrink-0"
                width="64"
                height="64"
              />
              <div class="min-w-0">
                <p
                  class="font-inter font-semibold text-[#f5f4fa] text-base leading-6"
                >
                  Lukitarini Setyawan
                </p>
                <p class="font-inter text-[#e2e1e6] text-sm leading-5">
                  Recruitment Development Manager
                </p>
              </div>
            </div>
          </article>
        </div>
      </section>

      <!-- Consultation CTA section -->
      <section class="w-full px-4 lg:px-20 py-8 lg:py-16">
        <div
          class="bg-linear-to-b from-primary to-[#1e13ba] rounded-xl overflow-hidden px-4 lg:px-[148px] py-8 lg:py-[38px] flex flex-col items-center gap-8 text-center"
        >
          <div class="flex flex-col items-center gap-3 w-full">
            <h2
              class="font-manrope font-bold text-white text-[28px] leading-9 lg:text-[36px] lg:leading-11 w-full"
            >
              Siap Membangun
              <span class="text-secondary">Tim Solid</span> dan
              <span class="text-secondary">Berkembang?</span>
            </h2>
            <p
              class="font-inter font-normal text-[#f5f4fa] text-base leading-6 lg:text-xl lg:leading-7 w-full"
            >
              Diskusikan tantangan organisasi Anda bersama pakar kami Gratis
              hari ini
            </p>
          </div>
          <a
            href="https://pgp6i.app.link/konsultasi3"
            class="bg-secondary rounded-xl px-8 py-3 inline-flex items-center justify-center font-inter font-semibold text-[#f5f4fa] text-sm leading-5 whitespace-nowrap"
          >
            Jadwalkan Konsultasi Gratis
          </a>
        </div>
      </section>

      <!-- Faq section -->
      <section
        id="faq-section"
        class="w-full h-fit lg:px-14 px-4 lg:py-16 py-8"
      >
        <h1
          class="font-manrope font-bold lg:text-4xl text-2xl text-center mb-6"
        >
          <label class="text-secondary"> Frequently Asked Question </label>
          (FAQ)
        </h1>

        <div class="w-full flex flex-col gap-3">
          <!-- Card faq 1 -->
          <div id="faq-list" class="w-full flex flex-col gap-3">
            <!-- FAQ cards injected by assets/js/faq-assestment-od.js using assets/data/faq-assestment-od.json -->
          </div>
        </div>
      </section>

</main>
<?php
get_footer();
