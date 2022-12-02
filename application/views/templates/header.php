<html>

<head>
    <title>ciBlog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <a href="<?php echo base_url(); ?>" class="navbar-brand text-light">ciBlog</a>
            <div class="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link text-light" aria-current="page" href="<?php echo base_url(); ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="<?php echo base_url(); ?>about">About</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="<?php echo base_url(); ?>posts">Blog</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="<?php echo base_url(); ?>posts/create">Create Post</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">