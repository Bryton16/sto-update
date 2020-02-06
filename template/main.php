
<div class="clearfix">

</div>
<div id="biographie" class="clearfix">

</div>
<main>
  <div class="container">
    <div class="row">

        <div class="bio text-center col-md-12 col-lg-12 col-xs-12 col-sm-12">
          <h2>Biographie</h2>
        </div>

          <div style="padding-top:70px;" class="clearfix">

          </div>
          <div class="imgMichel col-md-6 col-ld-6 col-sm-12 col-xs-12">
            <img src="assets/img/unnamed.png" width="300" alt="Bernard Michel">
          </div>

          <div class="bioMichel col-md-6 col-lg-6 col-xs-12 col-sm-12">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div id="devis" class="clearfix">

          </div>
          <div style="padding-top:70px;" class="bio text-center col-md-12 col-lg-12 col-xs-12 col-sm-12">
            <h2>Demande de Devis</h2>
          </div>

          <div style="padding-top:130px;" class="textDevis col-md-6 col-lg-6 col-sm-12 col-xs-12">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>

          <div style="padding-top:60px;padding-right:130px;" class="devisMichel col-md-6 col-lg-6 col-xs-12 col-sm-12">
            <img width="500" src="assets/img/devis.jpg" alt="Demande de devis">
          </div>

          <div style="padding-top:70px;" class="bio text-center col-md-12 col-lg-12 col-xs-12 col-sm-12">
            <h2>Services</h2>
          </div>




    </div>
  </div>

</main>

<script>
$(document).ready(function($){


  $(window).scroll(function(){
    $scroll = $(window).scrollTop();
    console.log($scroll);

    if($scroll <= 159) {
      $('.imgMichel').addClass('animated bounceInLeft');
      $('.bioMichel').addClass('animated bounceInRight');
    } else if($scroll >= 637) {
      $('.devisMichel').addClass('animated bounceInLeft');
      $('.textDevis').addClass('animated bounceInRight');
    }

  });
});
</script>
