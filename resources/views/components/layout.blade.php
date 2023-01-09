<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Slotmasters.de</title>
{{--    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />--}}
<!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet"/>
</head>
<body class="d-flex flex-column min-vh-100">

<x-topnavi/>

{{ $slot }}

<x-footer/>
