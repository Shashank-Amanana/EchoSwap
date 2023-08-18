document.addEventListener("DOMContentLoaded", function () {
  var navLinks = document.querySelectorAll("nav a");

  function setActiveLink() {
    var currentSection = "";
    document.querySelectorAll(".section").forEach(function (section) {
      var rect = section.getBoundingClientRect();
      if (rect.top >= 0 && rect.top <= window.innerHeight) {
        currentSection = section.getAttribute("id");
      }
    });
    navLinks.forEach(function (link) {
      link.classList.remove("active");
      if (link.getAttribute("href") === "#" + currentSection) {
        link.classList.add("active");
      }
    });
  }
  window.addEventListener("scroll", setActiveLink);
  navLinks.forEach(function (link) {
    link.addEventListener("click", function (event) {
      event.preventDefault();
      navLinks.forEach(function (navLink) {
        navLink.classList.remove("active");
      });
      link.classList.add("active");

      var targetSectionId = link.getAttribute("href").substring(1);
      var targetSection = document.getElementById(targetSectionId);
      var offsetTop = targetSection.offsetTop;
      window.scrollTo({
        top: offsetTop,
        behavior: "smooth",
      });
      setActiveLink();
    });
  });
});
