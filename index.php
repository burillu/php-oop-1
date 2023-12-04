<?php
include __DIR__ . "/partials/header.php";
include __DIR__ . "/Model/Movie.php";

?>

<div class="container">
  <div class="row">
    <?php foreach ($movies as $movie) {
      echo $movie->printCard();
    } ?>
  </div>

</div>

<?php
include __DIR__ . "/partials/footer.php";
?>