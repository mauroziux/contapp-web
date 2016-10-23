<!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
<script src="assets/js/oneui.min.js"></script>
<script src="assets/js/typed.min.js"></script>
<script src="assets/js/gmaps.min.js"></script>
<script>
  $(function(){
      $(".element").typed({
        strings: ["mejorar tu negocio.","ahorrar tiempo y dinero", "ser mas rentable.","ser mas productivo."],
        typeSpeed: 50,
        // time before typing starts
           startDelay: 200,
           // backspacing speed
           backSpeed: 10,
            // either html or text
            contentType: 'html',
            // time before backspacing
            backDelay: 2000,
            // loop
            loop: true,
      });
  });

  url = GMaps.staticMapURL({
    size: [300, 200],
    lat: -12.043333,
    lng: -77.028333,
    markers: [
      {lat: -12.043333, lng: -77.028333}
    ]
  });

  $('<img/>').attr('src', url)
    .appendTo('#mapa');
</script>

<!-- Page JS Plugins + Page JS Code -->
