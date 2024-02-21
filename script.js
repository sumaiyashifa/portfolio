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
sections.forEach((current) => {
    const sectionHeight = current.offsetHeight;
    const sectionTop = current.offsetTop - 200;
    var sectionId = current.getAttribute("id");
    const skillBars = document.querySelectorAll(".skillss__bar");
    if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
      document
        .querySelector(".nav__menu a[href*=" + sectionId + "]")
        .classList.add("active");
      if (sectionId == "skillss") {
        skillBars.forEach((skillBar) => {
          skillBar.classList.add("transition");
        });
      } else {
        skillBars.forEach((skillBar) => {
          skillBar.classList.remove("transition");
        });
      }
    } else {
      document
        .querySelector(".nav__menu a[href*=" + sectionId + "]")
        .classList.remove("active");
    }
  });


  document.addEventListener('DOMContentLoaded', function () {
    const textElement = document.querySelector('.text-content');
    const text = "This section showcases some of my drawings. Each piece is a reflection of my creativity and passion for art. From intricate details to bold strokes, my drawings capture various themes and emotions. Feel free to explore and immerse yourself in the world of my artwork.";
    let index = 0;
  
    function printText() {
      if (index < text.length) {
        textElement.textContent += text.charAt(index);
        index++;
        setTimeout(printText, 50); // Adjust the delay (in milliseconds) between printing each letter
      }
    }
  
    printText();
  });
  
  