<?php

require "db_dischi.php";

header("Content-Type: application/json");

echo json_encode([
    "db" => $db
]);
