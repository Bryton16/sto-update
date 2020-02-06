<nav id="nav" class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <img src="assets/img/logo.png" alt="logo thermoformeuse operculeuse" width="250">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item active">
          <a class="nav-link active" href="#">Galerie</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link active" href="#">Machines d'occasions</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link active" href="#">Demande de devis</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>

    </div>
  </div>
</nav>
<script>
$(document).ready(function($){


  $(window).scroll(function(){

    if($(window).scrollTop() >= 100) {
      $('.navbar').addClass('shrink');
    } else {
      $('.navbar').removeClass('shrink');
    }

  });
});
</script>
