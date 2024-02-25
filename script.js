var typed = new Typed(".text", {
  strings: ["an Engineer", "a Web Developer"],
  typeSpeed: 100,  
  backSpeed: 100,   
  backDelay: 1000,
  loop: true
});

function toggleMenu() {
    const menu = document.querySelector(".menu-links");
    const icon = document.querySelector(".hamburger-icon");
    menu.classList.toggle("open");
    icon.classList.toggle("open");
  }
// JavaScript for dark mode toggle
function showSlide(n) {
  var slides = document.getElementsByClassName("slide");
  if (n >= slides.length) {
    slideIndex = 0;
  }
  if (n < 0) {
    slideIndex = slides.length - 1;
  }
  for (var i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[slideIndex].style.display = "block";
}
const darkModeToggle = document.getElementById('darkModeToggle');
const body = document.body;

darkModeToggle.addEventListener('change', () => {
  if (darkModeToggle.checked) {
      enableDarkMode();
  } else {
      disableDarkMode();
  }
});

function enableDarkMode() {
  body.classList.add('dark-mode');
}

function disableDarkMode() {
  body.classList.remove('dark-mode');
}
// sections.forEach((current) => {
//     const sectionHeight = current.offsetHeight;
//     const sectionTop = current.offsetTop - 200;
//     var sectionId = current.getAttribute("id");
//     const skillBars = document.querySelectorAll(".skillss__bar");
//     if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
//       document
//         .querySelector(".nav__menu a[href*=" + sectionId + "]")
//         .classList.add("active");
//       if (sectionId == "skillss") {
//         skillBars.forEach((skillBar) => {
//           skillBar.classList.add("transition");
//         });
//       } else {
//         skillBars.forEach((skillBar) => {
//           skillBar.classList.remove("transition");
//         });
//       }
//     } else {
//       document
//         .querySelector(".nav__menu a[href*=" + sectionId + "]")
//         .classList.remove("active");
//     }
//   });

window.addEventListener("scroll", scrollActive);
function scrollActive() {
  const scrollY = window.scrollY;
  const current = document.getElementById("skill");
  const sectionHeight = current.offsetHeight;
  const sectionTop = current.offsetTop - 100; //-->ei value adjust kore nish. komay baray dekh ki hoy. minus thakbe.
  const skillNumbrs = document.querySelectorAll(".skill-level");
  const skillBars = document.querySelectorAll(".custom-skill-level");
  if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
    for (let i = 0; i < skillBars.length; i++) {
      var level = skillNumbrs[i].textContent;
      var loadedclass = "loaded" + i.toString();
      var fullyloaded = "." + loadedclass + " { width: " + level + "; }";
      var styleElement = document.createElement("style");
      styleElement.textContent = fullyloaded;
      document.body.appendChild(styleElement);
      skillBars[i].classList.add(loadedclass);
    }
  } else {
    for (let i = 0; i < skillBars.length; i++) {
      var loadedclass = "loaded" + i.toString();
      skillBars[i].classList.remove(loadedclass);
    }
  }
}
