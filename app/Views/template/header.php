<!DOCTYPE html>
<html lang="pt-br">
<head>
    <style>
        ul li{
            list-style: none;
            display: inline;
        }
        ul li a{
            text-decoration: none;
            background-color: gray;
            padding: 5px;
        }
        ul li a:hover{
            text-decoration: none;
            background-color: yellow;
            padding: 5px;
        }
        table td a{
            text-decoration: none;
        }
        body{
            margin: 0 auto;
            width:800px;
            background-color: gainsboro;
            font-family: arial;
        }
        div{
            background-color: white;
            padding: 10px;;
        }
        table th, td {
            border:1px solid black;
            width: auto;
    }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=isset($title)? $title : ""?></title>
</head>
<body>
<div>
    
