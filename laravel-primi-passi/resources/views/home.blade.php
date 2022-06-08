<?php
    $links = [
        "home",
        "about",
        "shop",
        "laravel"
    ]
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        ul{
            padding: 1rem;
            margin-top: 2rem;
            list-style: none;
            display: flex;
            background-color: burlywood;
            justify-content: center;
            column-gap: 1rem;
        }

        li{
            border-left: 1px solid blueviolet;
            padding-left: 0.25rem;
        }

        h1{
            text-align: center;
            padding-top: 2rem;
        }
    </style>

</head>
<body>

    <ul>
        @foreach ($links as $link)
            <li>{{$link}}</li>
        @endforeach
    </ul>
   
    <h1>Hello Laravel</h1>

</body>
</html>