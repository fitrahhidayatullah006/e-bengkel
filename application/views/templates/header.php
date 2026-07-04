<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background:#f8f9fa;
        }

        .sidebar{
            width:250px;
            min-height:100vh;
            background:#212529;
        }

        .sidebar a{
            color:#fff;
            text-decoration:none;
            display:block;
            padding:12px 20px;
        }

        .sidebar a:hover{
            background:#0d6efd;
        }

        .content{
            width:100%;
            padding:25px;
        }

    </style>

</head>

<body>

<div class="d-flex">