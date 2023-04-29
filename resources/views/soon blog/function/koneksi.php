<?php

$koneksi = mysqli_connect("localhost", "root", "", "laravel_project");

$query = mysqli_query($koneksi, "SELECT * FROM blog");

?>