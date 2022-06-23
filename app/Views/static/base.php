<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title><?= isset($page_title) ? $page_title : ' '; ?></title>
</head>

<body>
    <nav class="nav navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <div class="float-left navbar-brand">
                <a href="http://" class="navbar-expand">LOGO</a>
            </div>
            <div class="float-right">
                <ul class="navbar-nav">

                    <li><a href="<?= base_url(); ?>/login" class="nav-link">Login</a></li>
                    <li><a href="<?= base_url(); ?>/sign-up" class="nav-link">Sign Up</a></li>
                    <li><a href="<?= base_url(); ?>/add-file" class="nav-link">Add Image</a></li>
                    <li><a href="<?= base_url(); ?>/all-users" class="nav-link">All Users</a></li>
                    <li><a href="<?= base_url(); ?>/add-users" class="nav-link">Add Users</a></li>
                    <li><a href="<?= base_url(); ?>/register-form" class="nav-link">Add Customer </a></li>
                    <li><a href="<?= base_url(); ?>/addpost" class="nav-link">Add Post</a></li>
                    <li><a href="<?= base_url(); ?>/addcat" class="nav-link">Add Category</a></li>
                    <li><a href="#/" class="nav-link">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- main content start -->
    <?= $this->renderSection('content'); ?>
    <!-- main content end -->
    <footer class="text-center bg-dark text-white p-2">
        <h2><i class="fas fa-copyright "></i>CodeIgniter 2022</h2>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>