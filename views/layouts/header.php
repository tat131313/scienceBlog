<!DOCTYPE html>
<html>
<head>
    <title>Science blog</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</head>

<body style="margin: 15px">
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/mainpage">Science blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/category/sport" <?php if(isset($category)) if($category == "sport"):?>style="border-style: double"<?php endif ?>>Sport</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/category/science"<?php if(isset($category)) if($category == "science"):?>style="border-style: double"<?php endif ?>>Science</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/category/info"<?php if(isset($category)) if($category == "info"):?>style="border-style: double"<?php endif ?>>Info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/category/other"<?php if(isset($category)) if($category == "other"):?>style="border-style: double"<?php endif ?>>Other</a>
                </li>
            </ul>
        </div>
    </nav>