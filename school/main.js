// ================ NAVBAR STYLE====================
// window.addEventListener('scroll', () => {
//     doucument.querySelector('.nav').classList.toggle('window-scroll',window.scrollY > 10)
// });
const navbar = document.querySelector('.navbar');
window.addEventListener('scroll', () => {
  if (window.scrollY > 50) {
    navbar.style.backgroundColor = '#6c63ff';
    navbar.style.transition='all 400ms ease';
  } else {
    navbar.style.backgroundColor = 'transparent';
  }
});
// ======================HIDE & VIEW ===========================
  const faqs = document.querySelectorAll('.faq');

  faqs.forEach(faq => {
    faq.addEventListener('click', () => {
        faq.classList.toggle('open');

        // const icon = faq.querySelector('.faq_icon i');
        // if(icon.className === '')
    })
  })
  // nav hide / show
  const menu =document.querySelector(".nav_menu");
  const menuBtn = document.querySelector("#open-menu-btn");
  const closeBtn = document.querySelector("#close-menu-btn");

  menuBtn.addEventListener('click', () =>{
    menu.style.display = "flex";
    closeBtn.style.display = "inline-block";
    menuBtn.style.display = "none";
  })
  // ====== hide nav
  const closeNav = () =>{
    menu.style.display = "none";
    closeBtn.style.display = "none";
    menuBtn.style.display = "inline-block";
  }
  closeBtn.addEventListener('click',closeNav)