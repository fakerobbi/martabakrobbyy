<script type="text/javascript" src="{{asset('js/jquery.1.11.1.js')}}"></script> 
<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script> 
<script type="text/javascript" src="{{asset('js/SmoothScroll.js')}}"></script> 
<script type="text/javascript" src="{{asset('js/nivo-lightbox.js')}}"></script> 
<script type="text/javascript" src="{{asset('js/jquery.isotope.js')}}"></script> 
<script type="text/javascript" src="{{asset('js/jqBootstrapValidation.js')}}"></script> 
{{-- <script type="text/javascript" src="js/contact_me.js"></script>  --}}
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
<script>
$('.carousel[data-type="multi"] .item').each(function() {
  var next = $(this).next();
  if (!next.length) {
      next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));

  for (var i = 0; i < 2; i++) {
      next = next.next();
      if (!next.length) {
          next = $(this).siblings(':first');
      }

      next.children(':first-child').clone().appendTo($(this));
  }
});
</script>
<script src="https://kit.fontawesome.com/12cea8388b.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@include('sweet::alert')
</body>
</html>
