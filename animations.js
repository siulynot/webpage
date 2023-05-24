document.addEventListener("DOMContentLoaded", function() {
  let animatedElements = document.querySelectorAll('.animate-on-scroll');

  function checkPosition() {
    for (let i = 0; i < animatedElements.length; i++) {
      let element = animatedElements[i];
      let positionFromTop = animatedElements[i].getBoundingClientRect().top;

      if (positionFromTop - window.innerHeight <= 0) {
        element.classList.add('fade-in-element');
      }
    }
  }

  window.addEventListener('scroll', checkPosition);
  checkPosition();
});
