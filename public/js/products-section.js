$(document).ready(function() {
  var $columns = $('.product-card');

  var observer = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        $(entry.target).addClass('visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 });

  $columns.each(function() {
    observer.observe(this);
  });
});