/**
 * Fade In Append
 */
function animateFadeIn(el, time, timeOut) {
  el.style.opacity = 0;

  let last = +new Date();
  let tick = function () {
    el.style.opacity = +el.style.opacity + (new Date() - last) / time;
    last = +new Date();

    if (+el.style.opacity < 1) {
      (window.requestAnimationFrame && requestAnimationFrame(tick)) ||
        setTimeout(tick, timeOut);
    }
  };

  tick();
}

function updateGrid(elemntGrid, newContent, timeOut) {
  const grid = document.querySelector(elemntGrid);
  grid.innerHTML = newContent;

  animateFadeIn(grid, 1000, timeOut);
}

/**
 * Filters Blog
 */
let categoryBlog = "";
let langFilterBlog = document.body.className.includes("lang-en");

if (langFilterBlog) {
  langFilterBlog = "en";
} else {
  langFilterBlog = "fr";
}

let filterBlogData = { categoryBlog: "", langFilterBlog };
document.addEventListener("DOMContentLoaded", function () {
  setTimeout(() => {
    var hashBlogLink = window.location.hash;

    if (hashBlogLink) {
      var categorySlug = hashBlogLink ? hashBlogLink.substring(1) : "";
      var matchingLi = document.querySelector(
        '.actuaPage .filters li[data-category-slug="' + categorySlug + '"]'
      );
      let clickEvent = new MouseEvent("click", {
        bubbles: true,
        cancelable: true,
        view: window,
      });
      if (matchingLi) {
        matchingLi.dispatchEvent(clickEvent);
      }
    }
  }, 1000);
});

const filterBlogPosts = async (data) => {
  const response = await fetch(
    "/wp-json/hakiki-wp/v1/show-blog?" + new URLSearchParams(data).toString()
  );

  if (response.ok) {
    const { data } = await response.json();
    const result = data[0] ? data[0] : "";
    updateGrid(".actuaPage .grid-actua", result, 90);
  }
};

document.querySelectorAll(".actuaPage .filters ul li").forEach((li) => {
  li.addEventListener("click", function () {
    categoryBlog = this.getAttribute("data-category");

    document
      .querySelectorAll(".actuaPage .filters ul li")
      .forEach((elem) => elem.classList.remove("active"));
    this.classList.add("active");

    if (categoryBlog === "all") {
      categoryBlog = "";
    }

    filterBlogData = {
      ...filterBlogData,
      categoryBlog,
    };

    filterBlogPosts(filterBlogData);
  });
});

filterBlogPosts({ langFilterBlog });
