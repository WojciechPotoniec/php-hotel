<?php
include __DIR__ . "/Models/data.php";


if (!empty($_GET['park']) || (isset($_GET['park']) && $_GET['park'] == 0) && !empty($_GET['vote']) || (isset($_GET['vote']) && $_GET['vote'] == 0)) {
  $park = $_GET['park'];
  $vote = $_GET['vote'];
  $filt_park = array_filter($hotels, function ($hotel) use ($park) {
    return $hotel['parking'] == $park || $park == 'all';
  });
    $filt_vote = array_filter($filt_park, function ($hotel) use ($vote) {
      return $hotel['vote'] >= $vote || $vote == 'all';
    });
} else {
  $filt_park = $hotels;
  $filt_vote = $hotels;
}



include __DIR__ . "/Views/header.php";
?>
<main class="container">
  <?php
  include __DIR__ . "/Views/table.php";
  ?>
</main>
<?php
include __DIR__ . "/Views/footer.php"
  ?>