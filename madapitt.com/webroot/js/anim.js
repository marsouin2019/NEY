// SideNav Button Initialization
$(".button-collapse").sideNav();

// SideNav Scrollbar Initialization
var sideNavScrollbar = document.querySelector('.custom-scrollbar');
Ps.initialize(sideNavScrollbar);

// Material Select Initialization
$(document).ready(function () {
$('.mdb-select').material_select();
});

// Data Picker Initialization
$('.datepicker').pickadate();


$(function () {
    var selectedClass = "";
    $(".filter").click(function () {
      selectedClass = $(this).attr("data-rel");
      $("#gallery").fadeTo(100, 0.1);
      $("#gallery div").not("." + selectedClass).fadeOut().removeClass('animation');
      setTimeout(function () {
        $("." + selectedClass).fadeIn().addClass('animation');
        $("#gallery").fadeTo(300, 1);
      }, 300);
    });
  });

