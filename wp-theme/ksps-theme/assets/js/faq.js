document.addEventListener("DOMContentLoaded", () => {
  const faqList = document.getElementById("faq-list");
  if (!faqList) return;

  // Load JSON data and render
  const faqDataUrl = window.KSPS_FAQ_DATA_URL || "./data/faq.json";
  fetch(faqDataUrl)
    .then((res) => res.json())
    .then((faqs) => renderFaqs(faqs))
    .catch((err) => {
      console.error("Failed to load FAQ JSON", err);
    });

  function renderFaqs(items) {
    faqList.innerHTML = "";
    items.forEach((item) => {
      const card = document.createElement("div");
      card.className =
        "w-full h-fit rounded-lg border border-border bg-white px-8 py-6";

      // Header
      const header = document.createElement("div");
      header.className =
        "w-full flex items-center justify-between cursor-pointer";
      header.setAttribute("role", "button");
      header.setAttribute("tabindex", "0");

      const q = document.createElement("p");
      q.className = "font-inter text-text-primary text-[16px] font-semibold";
      q.textContent = item.question;

      const iconWrap = document.createElement("div");
      iconWrap.innerHTML = `
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="faq-toggle-icon transition-transform duration-300">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M6.2636 9.8637C6.61508 9.51223 7.18492 9.51223 7.5364 9.8637L12 14.3273L16.4636 9.8637C16.8151 9.51223 17.3849 9.51223 17.7364 9.8637C18.0879 10.2152 18.0879 10.785 17.7364 11.1365L12.6364 16.2365C12.4676 16.4053 12.2387 16.5001 12 16.5001C11.7613 16.5001 11.5324 16.4053 11.3636 16.2365L6.2636 11.1365C5.91213 10.785 5.91213 10.2152 6.2636 9.8637Z" fill="#FA9A07" />
        </svg>`;

      header.appendChild(q);
      header.appendChild(iconWrap);

      // Divider
      const hr = document.createElement("div");
      hr.className = "w-full h-px bg-border mb-2 mt-3";
      // hide divider when closed
      hr.style.display = "none";

      // Answer
      const ans = document.createElement("div");
      ans.className =
        "font-inter lg:text-[16px] text-[14px] text-black leading-6 overflow-hidden";
      ans.style.maxHeight = "0px";
      ans.style.transition = "max-height 300ms ease";

      const ansP = document.createElement("p");
      ansP.innerHTML = item.answer;
      ans.appendChild(ansP);

      // append
      card.appendChild(header);
      card.appendChild(hr);
      card.appendChild(ans);

      // toggle behavior
      let open = false;
      function openFaq() {
        const targetH = ans.scrollHeight;
        ans.style.maxHeight = targetH + "px";
        iconWrap.querySelector(".faq-toggle-icon").style.transform =
          "rotate(180deg)";
        hr.style.display = "";
        open = true;
      }
      function closeFaq() {
        ans.style.maxHeight = "0px";
        iconWrap.querySelector(".faq-toggle-icon").style.transform =
          "rotate(0deg)";
        hr.style.display = "none";
        open = false;
      }

      header.addEventListener("click", () => {
        if (open) closeFaq();
        else openFaq();
      });
      header.addEventListener("keydown", (e) => {
        if (e.key === "Enter" || e.key === " ") {
          e.preventDefault();
          header.click();
        }
      });

      faqList.appendChild(card);
    });
  }
});
