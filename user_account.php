<?php
require 'vendor/autoload.php';

$faker = Faker\Factory::create();

echo "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>";
echo "<div class='container mt-5'>";
echo "<h1 class='text-center mb-4'>Fake User Accounts</h1>";
echo "<table class='table table-bordered table-striped'>";
echo "<thead class='thead-dark'><tr><th>#</th><th>User ID</th><th>Full Name</th><th>Email</th><th>Username</th><th>Password (SHA-256)</th><th>Account Created</th></tr></thead>";
echo "<tbody>";

echo "</tbody></table></div>";
?>
