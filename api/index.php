<?php

// Vercel Serverless Function for Laravel
// Set up the environment for Laravel
$_SERVER['SCRIPT_NAME'] = '/index.php';

// Include Laravel's bootstrap
require __DIR__ . '/../public/index.php';
