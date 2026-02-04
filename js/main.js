/**
 * Animate Using GSAP
 */
if (window.innerWidth > 1090) {
  gsap.registerPlugin(ScrollTrigger);
  /**
   * Fade In & Fade Up Animate
   */
  const fadeUpBoxes = document.querySelectorAll(".fade__up");
  fadeUpBoxes.forEach((box, i) => {
    box.style.opacity = 0;
    box.style.transform = "translateY(90px)";
    const anim = gsap.to(box, { duration: 2, opacity: 1, y: 0 });
    ScrollTrigger.create({
      trigger: box,
      animation: anim,
      toggleActions: "play none none none",
      once: false,
    });
  });

  const fadeInBoxes = document.querySelectorAll(".fade__in");
  fadeInBoxes.forEach((box, i) => {
    box.style.opacity = 0;
    const anim = gsap.to(box, { duration: 1.5, opacity: 1 });
    ScrollTrigger.create({
      trigger: box,
      animation: anim,
      toggleActions: "play none none none",
      once: false,
    });
  });
}

/**
 * Slider Team
 */
if (document.body.classList.contains("home")) {
  var Swipes = new Swiper(".team .team-slider", {
    loop: true,
    slidesPerView: 4,
    spaceBetween: 38,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      900: {
        slidesPerView: 4,
      },
      600: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
      500: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
      470: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      300: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
    },
  });
}

/**
 * Slider Career
 */
if (document.body.classList.contains("page-template-carrieres")) {
  var Swipes = new Swiper(".carriersPage .career-slider", {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 88,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
}

/**
 * Animation Home Page
 */

if (document.body.classList.contains("home")) {
  const headerBx = document.querySelector("header");
  const heroTitles = document.querySelectorAll(".hero .title div");
  const heroLinkedin = document.querySelector(".hero .hero-linkedin");
  const scrollBottomBtn = document.querySelector(".scroll-bottom-icon");
  const heroBg = document.querySelector(".hero .bg canvas");

  gsap.fromTo(headerBx, { y: -40, opacity: 0 }, { y: 0, opacity: 1, duration: 2 });

  heroTitles.forEach((title, i) => {
    gsap.fromTo(
      title,
      {
        y: 400,
        opacity: 0,
      },
      {
        y: 0,
        opacity: 1,
        duration: 2,
        delay: 0.2 + 0.2 * i,
        ease: "power3.out",
      }
    );
  });

  gsap.fromTo(heroLinkedin, { y: 80, opacity: 0 }, { y: 0, opacity: 1, duration: 1 });
  gsap.fromTo(scrollBottomBtn, { y: 80, opacity: 0 }, { y: 0, opacity: 1, duration: 2 });

  gsap.fromTo(
    heroBg,
    {
      y: 600,
      x: -100,
      transform: "scale(0.3) rotateY(42deg) rotateX(-51deg)",
      opacity: 0,
    },
    {
      y: 0,
      x: 0,
      transform: "scale(1) rotateY(0) rotateX(0)",
      opacity: 1,
      duration: 2,
    }
  );
}

/**
 * Navbar Mobile
 */
const burgerBtn = document.querySelector("header .burger-btn");

burgerBtn.addEventListener("click", () => {
  document.body.classList.toggle("opened__navbar");
});

/**
 * Scroll To Bottom
 */
const scrollBottomBtn = document.querySelector(".scroll-bottom-icon");
function easeInOutQuad(t, b, c, d) {
  t /= d / 2;
  if (t < 1) return (c / 2) * t * t + b;
  t--;
  return (-c / 2) * (t * (t - 2) - 1) + b;
}

// Smooth scrolling function
function smoothScrollTo(to, duration) {
  return new Promise((resolve) => {
    const start = window.pageYOffset || document.documentElement.scrollTop;
    const change = to - start;
    const startTime = performance.now();

    function step(currentTime) {
      const elapsedTime = currentTime - startTime;
      window.scrollTo(0, easeInOutQuad(elapsedTime, start, change, duration));
      if (elapsedTime < duration) {
        requestAnimationFrame(step);
      } else {
        resolve();
      }
    }

    requestAnimationFrame(step);
  });
}
scrollBottomBtn.addEventListener("click", () => {
  const targetPosition = window.innerHeight;
  const duration = 1500;
  smoothScrollTo(targetPosition, duration);
});
function smoothScroll(target) {
  const targetElement = document.getElementById(target);
  const targetPosition = targetElement.getBoundingClientRect().top;
  const startPosition = window.pageYOffset;
  const distance = targetPosition - startPosition;
  const startTime = performance.now();

  function scrollAnimation(currentTime) {
    const elapsedTime = currentTime - startTime;
    const progress = Math.min(elapsedTime / 2500, 1);
    const ease = easeInOutCubic(progress);
    window.scrollTo(0, startPosition + distance * ease);

    if (elapsedTime < 2500) {
      requestAnimationFrame(scrollAnimation);
    }
  }

  function easeInOutCubic(t) {
    return t < 0.5 ? 4 * t * t * t : (t - 1) * (2 * t - 2) * (2 * t - 2) + 1;
  }

  requestAnimationFrame(scrollAnimation);
}
if (window.innerWidth > 1051) {
  if (document.body.classList.contains("home")) {
    const navLinks = document.querySelectorAll(".nav-link");

    navLinks.forEach(function (navLink) {
      navLink.addEventListener("click", function (event) {
        event.preventDefault();
        const targetId = navLink.getAttribute("data-target");
        smoothScroll(targetId);
        document.body.classList.remove("opened__navbar");
      });
    });
  } else {
    const btnContact = document.querySelector(".btn-contact a");
    btnContact.addEventListener("click", function (event) {
      event.preventDefault();
      const targetId = btnContact.getAttribute("data-target");
      smoothScroll(targetId);
      document.body.classList.remove("opened__navbar");
    });
  }
} else {
  if (document.body.classList.contains("home")) {
    const navLinks = document.querySelectorAll(".nav-link");

    navLinks.forEach(function (navLink) {
      navLink.addEventListener("click", function (event) {
        event.preventDefault();
        const targetId = navLink.getAttribute("data-target");
        var targetSection = document.querySelector(`#${targetId}`);
        targetSection.scrollIntoView({ behavior: "smooth" });
        setTimeout(() => {
          document.body.classList.remove("opened__navbar");
        }, 300);
      });
    });
  } else {
    const btnContact = document.querySelector(".btn-contact a");
    btnContact.addEventListener("click", function (event) {
      event.preventDefault();
      const targetId = btnContact.getAttribute("data-target");
      var targetSection = document.querySelector(`#${targetId}`);
      targetSection.scrollIntoView({ behavior: "smooth" });
      setTimeout(() => {
        document.body.classList.remove("opened__navbar");
      }, 300);
    });
  }
}

/**
 * Change Label To File Name
 */
if (document.body.classList.contains("page-template-carrieres")) {
  document.getElementById("file-btn").addEventListener("change", function () {
    const fileInput = document.getElementById("file-btn");
    const fileName = fileInput.files[0].name;
    document.querySelector(".field-file label small").textContent = fileName;
  });

  /**
   * Open Modal Carrieres Form
   */
  const btnCarreriesForm = document.querySelector(".carriersPage .offer-item");
  const btnCarreriesFormLink = document.querySelector(".carrieres .carriers-body a");

  if(btnCarreriesForm) {
	  btnCarreriesForm.addEventListener("click", () => {
		document.body.classList.add("open__modal_carrieres");
	  });
  }
  if(btnCarreriesFormLink) {
	  btnCarreriesFormLink.addEventListener("click", () => {
		document.body.classList.add("open__modal_carrieres");
	  });
  } 
	
  const btnClosebtnCarreriesForm = document.querySelector(".carrieresForm .close");

  btnClosebtnCarreriesForm.addEventListener("click", () => {
    document.body.classList.remove("open__modal_carrieres");
  });
}

/**
 * Copy Link
 */
if (document.body.classList.contains("single-post")) {
  const copyLinkBtn = document.querySelector(".copylink");
  copyLinkBtn.addEventListener("click", () => {
    let dataLink = copyLinkBtn.getAttribute("data-link");
    let tempInput = document.createElement("input");
    tempInput.value = dataLink;
    document.body.appendChild(tempInput);
    tempInput.select();
    document.execCommand("copy");
    document.body.removeChild(tempInput);
  });
}

/**
 * Hover List on Single Expertises
 */
if (document.body.classList.contains("single-expertise")) {
  var allItemsDM = document.querySelectorAll(
    ".singleExpertises .domainesIntervention-blocks .item"
  );

  allItemsDM.forEach(function (item) {
    item.addEventListener("mouseover", function () {
      var dataItem = item.getAttribute("data-item");
      var content = document.getElementById(dataItem);

      // Remove 'active' class from all item-content elements
      var allContents = document.querySelectorAll(
        ".singleExpertises .domainesIntervention-blocks .item-content"
      );
      allContents.forEach(function (itemContent) {
        itemContent.classList.remove("active");
      });

      // Add 'active' class to the corresponding item-content
      content.classList.add("active");
    });
  });
}

/*
 ** Resize Text
 */

// Get all textarea elements
const textareas = document.querySelectorAll("textarea");

// Function to adjust textarea height
function adjustTextareaHeight(event) {
  const textarea = event.target;
  textarea.style.height = "auto"; // Reset the height to auto to calculate the correct scrollHeight
  textarea.style.height = textarea.scrollHeight + "px";
}

// Loop through all textarea elements and add event listener
textareas.forEach((textarea) => {
  textarea.addEventListener("input", adjustTextareaHeight);
});

/**
 * Change Title On Single Avocat
 */
if (document.body.classList.contains("single-avocat")) {
  const associationsList = document.querySelectorAll(
    ".singleTeam .bottom .bottom-right .associations li"
  );
  const associationsTitle = document.querySelector(
    ".singleTeam .bottom .bottom-right .associations h3"
  );

  if (associationsList.length > 1) {
    associationsTitle.textContent = "Associations";
  } else {
    associationsTitle.textContent = "Association";
  }
}
