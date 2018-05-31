<title>Mon histoire</title> 

<?php ob_start(); ?>

  <!-- Histoire de Jean Forteroche -->
  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">Jean Forteroche</br><span class="text-muted">écrivain et acteur</span></h2>
        <p id="story" class="lead"> Quisque ante tellus, tincidunt in erat non, placerat eleifend purus. Sed non fermentum augue. Nam sit amet purus sem. Praesent malesuada cursus dignissim. Aliquam iaculis neque libero, ullamcorper ultrices velit tincidunt vitae. Pellentesque egestas nisi diam, at consequat neque accumsan at. Etiam posuere sapien vitae placerat tempor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce vitae fringilla nisi. Aenean mattis, nunc et rhoncus lobortis, sapien nulla laoreet felis, et consequat nisl lectus ut enim. Aliquam sed sapien sit amet neque posuere dignissim. Nullam a nunc neque. Suspendisse arcu leo, faucibus eget efficitur et, vehicula nec justo. Donec et mi eget nisi vehicula dictum. Cras mi eros, ullamcorper ut nulla non, tincidunt facilisis quam. Ut vulputate lacinia risus, vitae semper est euismod lobortis. Pellentesque eget dui tincidunt, laoreet lacus ullamcorper, vehicula nisl. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla porttitor egestas enim, non vestibulum massa auctor et. Duis augue neque, iaculis a ipsum non, egestas euismod odio. Sed lectus tellus, volutpat vitae massa sed, interdum mattis leo. Maecenas hendrerit lacus id quam venenatis, a condimentum sem lobortis. Suspendisse faucibus luctus tincidunt. Nulla finibus mollis ultricies.</p>
    </div>

    <!-- Image de Jean Forteroche -->
    <div class="col-md-5">
      <img class="featurette-image img-fluid mx-auto" src="./public/images/jean.jpg" alt="Jean Forteroche image">
    </div>
  </div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>