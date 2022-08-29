<?php
const DB_HOST = 'localhost';
const DB_USER = 'brad';
const DB_PASS = '1234';
const DB_NAME = 'products';

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}



