$.root_ = $('body');

$.root_.on('click', '[data-action="toggleMenu"]', function(e) {
  e.preventDefault();
  toggleMenu();
});

$.root_.on('click', '[data-action="minifyMenu"]', function(e) {
  e.preventDefault();
  var $this = $(this);
  minifyMenu($this);
  $this = null;
});

function toggleMenu() {
  if (!$.root_.hasClass("menu-on-top")){
    $('html').toggleClass("hidden-menu-mobile-lock");
    $.root_.toggleClass("hidden-menu");
    $.root_.removeClass("minified");
  } else if ( $.root_.hasClass("menu-on-top") && $(window).width() < 979 ) {
    $('html').toggleClass("hidden-menu-mobile-lock");
    $.root_.toggleClass("hidden-menu");
    $.root_.removeClass("minified");
  }
}

function minifyMenu($this) {
  if (!$.root_.hasClass("menu-on-top")){
    $.root_.toggleClass("minified");
    $.root_.removeClass("hidden-menu");
    $('html').removeClass("hidden-menu-mobile-lock");
  }
}
