<?php

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

/**
 * theme helper function to gererate a dynamic title
 */

function foundation_get_title(){

    // default page title
    $defaulttile = drupal_get_title();

    // if no default page title --> get drupal site title
    if(!$defaulttile) $defaulttile = variable_get('site_name');

    // return title (string) to use in our template file
    return $defaulttile;
}