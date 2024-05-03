<?php
session_start();
if (isset($_SESSION['userId'])) {
    $name = $_SESSION['name'];
    session_destroy();
    header('location: login.php');

} else {
    header('location: login.php');
}

include __DIR__ . "/Views/header.php";
?>
<main class="container my-4">
    <div class="d-flex justify-content-between align-items-center">
        <h3 class="text-center"><?= "Goodbye " . $name ?></h3>
    </div>
</main>
<?php
include __DIR__ . "/Views/footer.php";
?>