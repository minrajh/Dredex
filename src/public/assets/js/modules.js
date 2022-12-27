/* Кнопка наверх НАЧАЛО */
"use strict";
let goTop = document.querySelector('.back_to_top');
window.addEventListener('scroll', trackScroll);
goTop.addEventListener('click', backToTop);
function trackScroll() {
    let scroll = window.pageYOffset;
    let coord = document.documentElement.clientHeight;

    if (scroll > coord) {
      goTop.classList.add('back_to_top-show');
    }
    if (scroll < coord) { goTop.classList.remove('back_to_top-show'); } } function backToTop() { if (window.pageYOffset > 0) {
      window.scrollBy(0, -80);
      setTimeout(backToTop, 0);
    }
}
/* Кнопка наверх КОНЕЦ */


/* Скрытие меню при прокрутке вниз и отображение при прокрутке наверх НАЧАЛО */
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("dredex_header").style.top = "0";
  } else {
    document.getElementById("dredex_header").style.top = "-80px";
  }
  prevScrollpos = currentScrollPos;
}
/* Скрытие меню при прокрутке вниз и отображение при прокрутке наверх КОНЕЦ */


/* Плавная прокрутка до якоря НАЧАЛО */
const anchors = document.querySelectorAll('a[href*="#"]')

for (let anchor of anchors) {
  anchor.addEventListener('click', function (e) {
    e.preventDefault()
    
    const blockID = anchor.getAttribute('href').substr(1)
    
    document.getElementById(blockID).scrollIntoView({
      behavior: 'smooth',
      block: 'start'
    })
  })
}
/* Плавная прокрутка до якоря КОНЕЦ */

/* Выпадающее меню НАЧАЛО */
  /* Когда пользователь нажимает на кнопку, переключаться раскрывает содержимое */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
  }

  // Закрыть раскрывающийся список, если пользователь щелкнет за его пределами.
  window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
      if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
      }
  }
  }
/* Выпадающее меню КОНЕЦ */