<?php

require "app/app.php";

$view_bag = [
    "title" => "Glossary List"
];

$data = json_decode(get_data());
print_r($data);



view("index", $data);



// TODO: make it so that wen an item is clicked, redirect and diplay details
// add search feature

/***
 * in detail.php
 * check if "term" is NOT set, then redirext to index ($GET)
 * if data = false die()
 * create get term function to get details for a specific term
 * create details view file
 * create 404 view
 * */