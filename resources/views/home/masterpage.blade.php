<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="path/to/your/css/file.css"> <!-- Add the path to your main CSS file -->
    <title>@yield('title')</title>
</head>
<body>

<!-- Header section -->
@extends('home.navbar') <!-- Include a header partial if needed -->

<!-- Content section --><section>
@yield('content') <!-- This is where the content for each page will go -->
</section>
<!-- Footer section -->
@extends('home.footer') <!-- Include a footer partial if needed -->

</body>
</html>
