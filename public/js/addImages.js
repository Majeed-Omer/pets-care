document.getElementById("addImageButton").addEventListener("click", function(event) {
  document.getElementById("divAddAnimal").style.display = "block";
});

document.getElementById("closeButton").addEventListener("click", function(event) {
  event.preventDefault();
  document.getElementById("divAddAnimal").style.display = "none";
window.history.pushState({}, '', '/');
});


$(document).ready(function() {
  var $cards = $('.cardAnimals');
  var observer = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        $(entry.target).addClass('visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 });

  $cards.each(function(index, card) {
    setTimeout(function() {
      observer.observe(card);
    }, index * 450); // set a delay of 100ms per card
  });
});

