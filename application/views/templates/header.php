<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ciBlog</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <script src="//cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url(); ?>">ciBlog</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item <?= $this->uri->segment(1) == '' ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?= base_url();  ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item <?= $this->uri->segment(1) == 'about' ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?= base_url('about'); ?>">About</a>
                    </li>
                    <li class="nav-item <?= $this->uri->segment(1) == 'posts' && empty($this->uri->segment(2)) ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?= base_url('posts'); ?>">Blog</a>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-right">
                    <li class="nav-item <?= $this->uri->segment(1) == 'posts' && $this->uri->segment(2) == 'create' ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?= base_url('posts/create'); ?>">Create Post</a>
                    </li>
                </ul>
                <!-- <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form> -->
            </div>
        </div>
    </nav>
    <br>
    <div class="container">