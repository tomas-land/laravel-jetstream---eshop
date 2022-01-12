const btn = document.querySelector(".mobile-menu-button");
const menu = document.querySelector(".mobile-menu");
const mobile_links = document.querySelectorAll(".mobile-link");

btn.addEventListener("click", () => {
    menu.classList.toggle("lg:flex");
});

for(let i = 0; i < mobile_links.length; i++){
    mobile_links[i].addEventListener('click', () => {
      menu.classList.remove('lg:block');
    });
  }