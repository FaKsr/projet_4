<title>Mon histoire</title> 

<?php ob_start(); ?>
  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">Jean Forteroche</br><span class="text-muted">écrivain et acteur</span></h2>
        <p class="lead"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sagittis sed ante quis tincidunt. Etiam eu lorem imperdiet orci fermentum iaculis. Donec fringilla dui sit amet neque convallis pharetra id sed ante. Quisque mollis, velit eget lacinia pretium, purus augue semper mauris, nec vulputate elit nunc quis purus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed vel viverra mauris, vitae commodo ligula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus elementum, dolor quis luctus rutrum, mi ligula ornare ligula, eu consequat nisi nibh a odio. Fusce venenatis, enim a auctor varius, libero tortor placerat dui, sed imperdiet nunc neque et sem. Quisque lacinia consectetur cursus. Pellentesque in erat vitae turpis pellentesque pulvinar. Suspendisse potenti. Vivamus in tincidunt lorem. </p>
    </div>

    <div class="col-md-5">
      <img class="featurette-image img-fluid mx-auto" src="./public/images/jean.jpg" alt="Jean Forteroche image">
    </div>
  </div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>