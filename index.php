<?php
include __DIR__ . "/Models/data.php";
var_dump($hotels);


if (!empty($_GET['status']) || (isset($_GET['status']) && $_GET['status'] == 0)) {
  $status = $_GET['status'];
  $newArray = array_filter($hotels, function ($hotel) use ($status) {
    return $hotel['parking'] == $status || $status == 'all';
  });
} else {
  $newArray = $hotels;
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