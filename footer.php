
<?php wp_footer(); ?>



  <div class="row foot">
             <div class="col-sm-12 text-center"><p>ON s.r.l. Socio Unico - C.F. e P.IVA 13322010151<br/>Via Plinio 73 - 20129 Milano - cap.soc. €12.500 - n° registro imprese 133220101514 - R.E.A. MI-1638727</p></div>
             </div>

             <div class="row">
                <div class="socialiconbox">
                    <div class="circleicon"><i class="fa fa-vimeo"></i></div>
                    <div class="circleicon"><i class="fa fa-google-plus"></i></div>
                </div>
             </div>


         </div>


    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script  src="<?php echo get_bloginfo('template_url'); ?>/js/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo get_bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>






script src="<?php echo get_bloginfo('template_url'); ?>/lightbox/js/lightbox.js" type="text/javascript"> </script>

 <script>
    lightbox.option({
      'resizeDuration': 800,
      'wrapAround': true,
      'maxWidth':1000,
      'maxHeight':1000
    })
</script>


<script>
// JavaScript Document

$(window).scroll(function(){

  var logoclient = $('#logoclient');
  var trigger = $('#trigger');
  var startanimation= $('#greenpos');

  var wrapper=$('#wrapper');
  var wrapperheight= wrapper.height();

  var cima = $(document).scrollTop();
  var base = cima + $(window).height();

  var triggerCima = Math.round(trigger.offset().top);
  var triggerBase = triggerCima + trigger.height();

  if((triggerCima < base) && (triggerBase > cima)){
    startanimation.addClass('resizing');
    setTimeout(function(){
      logoclient.switchClass('whitelogos', 'greylogos');
    }, 570);
  }

  if(wrapperheight< $(window).height()){
    startanimation.addClass('resizing');
    setTimeout(function(){
      logoclient.switchClass('whitelogos', 'greylogos');
    }, 570);
  }


});

</script>


</body>

</html>
