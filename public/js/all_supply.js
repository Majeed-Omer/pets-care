function showSection(sectionId) {
    // Hide all sections
    var sections = document.getElementsByClassName("section");
    for (var i = 0; i < sections.length; i++) {
      sections[i].style.display = "none";
    }
  
    // Show the section with the given ID
    var section = document.getElementById(sectionId);
    section.style.display = "block";
  }
  
$('.navList .buttonNavList').click(function(){
$('.navList .buttonNavList .spanNavList').toggleClass("rotate");
 });
$('.navList ul li .first').click(function(){
$('.navList ul li .first .spanNavList').toggleClass("rotate");
});
$('.navList ul li .second').click(function(){
 $('.navList ul li .second .spanNavList').toggleClass("rotate");
});
$('.navList ul li .three').click(function(){
$('.navList ul li .three .spanNavList').toggleClass("rotate");
});

$('.findSupplies').click(function(){
$(this).closest('.bottom').addClass("clicked");
});
       
$('.remove').click(function(){
$(this).closest('.bottom').removeClass("clicked");
});             