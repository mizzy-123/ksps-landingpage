document.addEventListener("DOMContentLoaded", () => {
  const buttons = document.querySelectorAll(".trust-detail-btn");
  const overlay = document.getElementById("trust-modal-overlay");
  const modal = document.getElementById("trust-modal");
  const img = document.getElementById("trust-modal-img");
  const imgContainer = document.getElementById("trust-modal-img-container");
  const categoryEl = document.getElementById("trust-modal-category");
  const titleEl = document.getElementById("trust-modal-title");
  const descEl = document.getElementById("trust-modal-desc");
  const logoEl = document.getElementById("trust-modal-logo");
  const serviceEl = document.getElementById("trust-modal-service");
  const industryEl = document.getElementById("trust-modal-industry");
  const sizeEl = document.getElementById("trust-modal-size");
  const closeBtns = document.querySelectorAll(".trust-modal-close");

  // Get WordPress assets URL from a data attribute or use relative path
  const assetsUrl = document.body.dataset.assetsUrl || "";

  // Default JSON-like data you can edit or replace with a fetched JSON
  const TRUST_DATA = {
    1: {
      category: "Telecommunication & Network Infrastructure",
      title:
        "Nationwide Infrastructure Support: User lebih fokus dalam pengembangan bisnis dan project",
      titleParts: [
        {
          text: "Nationwide Infrastructure Support: ",
          class: "text-secondary",
        },
        {
          text: "User lebih fokus dalam pengembangan bisnis dan project",
          class: "",
        },
      ],
      desc: `Tantangan terbesar dalam eksekusi project di bisnis Telekomunikasi adalah mengelola tenaga kerja di ratusan titik nusantara. KSPS menjawab tantangan ini dengan mendisposisikan 300+ Project Engineer On-site dan 20+ Tim Business Operation yang tersebar luas dari Aceh hingga Jayapura. 

Solusi kami mencakup spektrum penuh mulai dari tenaga ahli tingkat tinggi seperti Network & Security Engineer, tim operasional seperti Helpdesk & Call Center, hingga pendukung lapangan seperti Janitor sebagai bukti nyata kapabilitas jangkauan nasional KSPS menjadi vendor IT Outsourcing terpercaya di Indonesia.
`,
      img: "trust1.png",
      logo: "lintasarta.png",
      service:
        " IT Outsourcing, Business Process Outsourcing, Facility Management",
      industry: "Telecommunication & Network Infrastructure",
      size: ">1000 Karyawan",
    },
    2: {
      category: "Data Center",
      title:
        "Integrated Data Center Operations: Dapat ditangani dalam waktu cepat dan menyeluruh",
      titleParts: [
        {
          text: "Integrated Data Center Operations: ",
          class: "text-secondary",
        },
        { text: "Dapat ditangani dalam waktu cepat dan menyeluruh", class: "" },
      ],
      desc: `Mengelola ekosistem Hyperscale Data Center di area strategis (Jakarta, Tangerang, Jawa Barat) menuntut integrasi sempurna antara teknologi dan fasilitas fisik. KSPS sebagai vendor IT Outsourcing dipercaya menjalankan 9 Project Vital (5 Data & Security Network + 4 Business Operation). 

Kami menyediakan solusi end-to-end mulai dari Cloud Engineer dan System Analyst untuk menjaga uptime server, hingga Receptionist dan Technician untuk manajemen fasilitas, memastikan operasional Data Center berjalan mulus 24/7.`,
      img: "trust2.png",
      logo: "bdx.png",
      service:
        " IT Outsourcing, Business Process Outsourcing, Facility Management",
      industry: "Telecommunication & Network Infrastructure",
      size: ">200-500 Karyawan",
    },
    3: {
      category: "Banking & Financial Services",
      title:
        "Digital Transformation & Security: Mendukung transformasi digital perbankan",
      titleParts: [
        {
          text: "Digital Transformation & Security: ",
          class: "text-secondary",
        },
        { text: "Mendukung transformasi digital perbankan", class: "" },
      ],
      desc: `Mendukung inisiatif transformasi digital di industri perbankan melalui solusi teknologi yang inovatif dan terintegrasi. KSPS sebagai vendor IT Outsourcing menyediakan tenaga ahli untuk mendukung keamanan sistem dan pengembangan layanan digital banking.

Kami menyuplai tim yang terdiri dari Security Engineer, Software Developer, dan IT Support untuk memastikan sistem perbankan berjalan aman dan efisien.`,
      img: "trust3.png",
      logo: "bank_danamon.png",
      service: "IT Outsourcing",
      industry: "Banking & Financial Services",
      size: ">25.000 Karyawan",
    },
    4: {
      category: "Banking & Financial Services",
      title:
        "Critical Payment System Support: Pengelolaan sistem ATM Bersama dan Data Center",
      titleParts: [
        { text: "Critical Payment System Support: ", class: "text-secondary" },
        { text: "Pengelolaan sistem ATM Bersama dan Data Center", class: "" },
      ],
      desc: `Sebagai tulang punggung sistem pembayaran nasional (ATM Bersama), downtime bukanlah opsi bagi Artajasa. KSPS sebagai vendor IT Outsourcing mendukung operasional Card & Digital Payment serta pengelolaan Data Center di 4 lokasi strategis (Jabodetabek & Sumatera). 

Kami menyuplai tim teknis yang terdiri dari System Analyst, Data Analyst, hingga Helpdesk & Technician untuk memastikan setiap transaksi digital dan operasional data center berjalan tanpa hambatan.
`,
      img: "trust4.png",
      logo: "artajasa.png",
      service: "IT Outsourcing",
      industry: "Fintech & Digital Payment",
      size: ">500 Karyawan",
    },
  };

  if (!buttons || !overlay || !modal) return;

  buttons.forEach((btn) => {
    btn.addEventListener("click", (e) => {
      e.preventDefault();
      const card = btn.closest("[data-trust-card]");
      if (!card) return;

      const id = card.dataset.trustId;
      const dataFromJson = id && TRUST_DATA[id] ? TRUST_DATA[id] : null;

      if (dataFromJson) {
        if (img && imgContainer) {
          const imgSrc = assetsUrl
            ? `${assetsUrl}/images/${dataFromJson.img}`
            : dataFromJson.img;
          img.setAttribute("src", imgSrc || "");
          imgContainer.classList.remove("hidden");
        }
        if (logoEl) {
          const logoSrc = assetsUrl
            ? `${assetsUrl}/images/${dataFromJson.logo}`
            : dataFromJson.logo;
          logoEl.setAttribute("src", logoSrc || "");
        }
        if (serviceEl) serviceEl.textContent = dataFromJson.service || "";
        if (industryEl) industryEl.textContent = dataFromJson.industry || "";
        if (sizeEl) sizeEl.textContent = dataFromJson.size || "";
        if (categoryEl) categoryEl.textContent = dataFromJson.category || "";

        // support optional titleParts to color/format parts of the title
        if (titleEl) {
          if (
            Array.isArray(dataFromJson.titleParts) &&
            dataFromJson.titleParts.length
          ) {
            titleEl.textContent = "";
            dataFromJson.titleParts.forEach((part) => {
              const span = document.createElement("span");
              span.textContent = part.text || "";
              if (part.class) span.className = part.class;
              titleEl.appendChild(span);
            });
          } else {
            titleEl.textContent = dataFromJson.title || "";
          }
        }

        if (descEl) descEl.textContent = dataFromJson.desc || "";
      } else {
        // fallback to scraping the DOM if no JSON entry provided
        const category =
          card.querySelector("p.text-secondary")?.innerText || "";
        const title = card.querySelector("h2")?.innerText || "";
        const desc =
          card.querySelector("p.font-inter.text-sm.text-text-primary")
            ?.innerText ||
          card.querySelectorAll("p")[1]?.innerText ||
          "";
        const imgSrc =
          card.querySelector(".self-stretch img")?.getAttribute("src") ||
          card.querySelector("img")?.getAttribute("src") ||
          "";
        const logoSrc =
          card.querySelector(".size-12 img")?.getAttribute("src") ||
          card.querySelector(".bg-white.size-12 img")?.getAttribute("src") ||
          card.querySelector("img")?.getAttribute("src") ||
          "";
        if (img) img.setAttribute("src", imgSrc);
        if (logoEl) logoEl.setAttribute("src", logoSrc || imgSrc);
        if (serviceEl)
          serviceEl.textContent =
            card.querySelector("p.text-secondary")?.innerText || "";
        if (industryEl)
          industryEl.textContent =
            card.querySelector("p.text-secondary")?.innerText || "";
        if (sizeEl) sizeEl.textContent = "";
        if (categoryEl) categoryEl.textContent = category;
        if (titleEl) titleEl.textContent = title;
        if (descEl) descEl.textContent = desc;
      }

      // Ensure any previous transitionend handler is removed
      if (overlay._hideHandler) {
        overlay.removeEventListener("transitionend", overlay._hideHandler);
        overlay._hideHandler = null;
      }

      overlay.classList.remove("hidden", "opacity-0");
      // Force reflow so the opacity transition runs reliably
      // eslint-disable-next-line no-unused-expressions
      overlay.offsetHeight;
      overlay.classList.add("opacity-100");

      modal.classList.remove("hidden");
      modal.classList.add("flex");
      document.body.classList.add("overflow-hidden");
    });
  });

  function closeModal() {
    // hide modal immediately
    modal.classList.remove("flex");
    modal.classList.add("hidden");
    document.body.classList.remove("overflow-hidden");

    // start overlay fade-out and then hide when transition ends
    overlay.classList.remove("opacity-100");
    overlay.classList.add("opacity-0");

    // remove any previous handler
    if (overlay._hideHandler)
      overlay.removeEventListener("transitionend", overlay._hideHandler);

    overlay._hideHandler = function onHide(e) {
      if (e.propertyName === "opacity") {
        overlay.classList.add("hidden");
        overlay.removeEventListener("transitionend", onHide);
        overlay._hideHandler = null;
      }
    };

    overlay.addEventListener("transitionend", overlay._hideHandler);
  }

  overlay.addEventListener("click", closeModal);
  closeBtns.forEach((b) => b.addEventListener("click", closeModal));
  window.addEventListener("keydown", (e) => {
    if (e.key === "Escape") closeModal();
  });
});
