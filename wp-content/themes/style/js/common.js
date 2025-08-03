// Custom scripts

// Scroll animation
AOS.init();

// Мобильное меню бургер
function burgerMenu() {
  const burger = document.querySelector(".burger");
  const menu = document.querySelector(".menu");
  const body = document.querySelector("body");
  burger.addEventListener("click", () => {
    if (!menu.classList.contains("active")) {
      menu.classList.add("active");
      burger.classList.add("active-burger");
      body.classList.add("locked");
    } else {
      menu.classList.remove("active");
      burger.classList.remove("active-burger");
      body.classList.remove("locked");
    }
  });
  menu.addEventListener("click", (event) => {
    if (event.target) {
      menu.classList.remove("active");
      burger.classList.remove("active-burger");
      body.classList.remove("locked");
    }
  });
  // Вот тут мы ставим брейкпоинт навбара
  window.addEventListener("resize", () => {
    if (window.innerWidth > 991.98) {
      menu.classList.remove("active");
      burger.classList.remove("active-burger");
      body.classList.remove("locked");
    }
  });
}
burgerMenu();

// Вызываем эту функцию, если нам нужно зафиксировать меню при скролле.

// SWIPER

const swiper = new Swiper(".swiper-testimonials", {
  // Optional parameters
  // direction: 'vertical',
  slidesPerView: 2,
  spaceBetween: 30,
  autoHeight: true,
  loop: true,
  grabCursor: true,

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-next",
    prevEl: ".swiper-prev",
  },

  breakpoints: {
    // when window width is >= 320px
    320: {
      // autoHeight: true,
      slidesPerView: 1,
      spaceBetween: 20,

      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      // navigation: false,
    },
    992: {
      slidesPerView: 2,
    },
  },
});

// Модальное окно заказа

document.addEventListener("DOMContentLoaded", function () {
  const modalBtn = document.getElementById("modal-btn");
  const modalBtn2 = document.getElementById("modal-btn2");
  const modal = document.getElementById("modal");
  const overlay = document.querySelector(".overlay");
  const closeBtn = document.querySelector(".modal__close");
  const navWrapper = document.querySelector(".navbar-wrapper");

  if (modalBtn && modal && overlay) {
    modalBtn.addEventListener("click", (e) => {
      e.preventDefault();
      modal.style.right = "0";
      overlay.style.display = "block";
      overlay.style.zIndex = "10";
    });
  }

  if (modalBtn2 && modal && overlay) {
    modalBtn2.addEventListener("click", (e) => {
      e.preventDefault();
      modal.style.right = "0";
      overlay.style.display = "block";
      overlay.style.zIndex = "10";
    });
  }

  if (overlay && modal) {
    overlay.addEventListener("click", () => {
      modal.style.right = "-110vw";
      overlay.style.display = "none";
    });
  }

  if (closeBtn && modal && overlay) {
    closeBtn.addEventListener("click", () => {
      modal.style.right = "-110vw";
      overlay.style.display = "none";
    });
  }

  if (navWrapper) {
    window.addEventListener("scroll", () => {
      if (window.scrollY < 10) {
        navWrapper.classList.remove("--visible");
      } else {
        navWrapper.classList.add("--visible");
      }
    });
  }
});

// Модалка для заказа

var tagsContainer = document.getElementById("TagsContainer");

var modalTag = tagsContainer.getElementsByClassName("modal__tag");

for (var i = 0; i < modalTag.length; i++) {
  modalTag[i].addEventListener("click", function () {
    var current = document.getElementsByClassName(
      "modal__tag modal__tag--active"
    );

    current[0].className = current[0].className.replace(
      "modal__tag--active",
      ""
    );

    this.className = "modal__tag modal__tag--active";
  });
}

// обработка формы
document.querySelector("#callback_form").addEventListener("submit", (event) => {
  event.preventDefault();

  const contact = document.querySelector("#clientContact").value;
  const message = document.querySelector("#clientMessage").value;
  const type = document.querySelector(
    ".modal__wrapper-tags > .modal__tag--active"
  )?.textContent;

  fetch(`${window.location.origin}/send.php`, {
    method: "POST",

    headers: { "Content-Type": "application/json" },

    body: JSON.stringify({ contact, message, type }),
  })
    .then((response) => response.json())
    .then((result) => {
      if (result) {
        alert("Заявка отправлена!");
      } else {
        alert("Ошибка отправки!");
      }
    })
    .catch(() => {
      alert("Ошибка отправки!");
    });
});

//Current Year Footer

var currentYear = new Date().getFullYear();
var yearElement = document.getElementById("currentYear");
yearElement.textContent = currentYear;

////////////////////////
///////////////////////////
/////////////////////////
