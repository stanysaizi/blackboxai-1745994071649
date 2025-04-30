<?php
// Common header include for Kadoma Town Council website
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Kadoma Town Council</title>
    <link rel="stylesheet" href="https://cdn.tailwindcss.com" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
        /* Slider styles */
        .slider {
            position: relative;
            overflow: hidden;
            height: 70vh;
        }
        .slides {
            display: flex;
            width: 400%;
            animation: slideAnimation 20s infinite;
        }
        .slide {
            width: 100%;
            flex-shrink: 0;
            background-size: cover;
            background-position: center;
            transition: opacity 1s ease-in-out;
        }
        @keyframes slideAnimation {
            0% { transform: translateX(0%); }
            20% { transform: translateX(0%); }
            25% { transform: translateX(-100%); }
            45% { transform: translateX(-100%); }
            50% { transform: translateX(-200%); }
            70% { transform: translateX(-200%); }
            75% { transform: translateX(-300%); }
            95% { transform: translateX(-300%); }
            100% { transform: translateX(0%); }
        }
        /* Animated page fade-in */
        .fade-in {
            animation: fadeInAnimation 1s ease forwards;
            opacity: 0;
        }
        @keyframes fadeInAnimation {
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 fade-in">

<header class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto flex justify-between items-center p-4">
        <h1 class="text-2xl font-bold text-blue-700">Kadoma Town Council</h1>
        <nav class="space-x-4 text-gray-700">
            <a href="index.php" class="hover:text-blue-700 transition">Home</a>
            <a href="about.php" class="hover:text-blue-700 transition">About</a>
            <a href="services.php" class="hover:text-blue-700 transition">Services</a>
            <a href="news.php" class="hover:text-blue-700 transition">News</a>
            <a href="contact.php" class="hover:text-blue-700 transition">Contact</a>
        </nav>
    </div>
</header>

<main class="container mx-auto mt-6">
