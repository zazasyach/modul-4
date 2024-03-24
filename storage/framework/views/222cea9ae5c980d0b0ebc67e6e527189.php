<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Laravel Routing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>
<body>
    <div class="container m-5">
        <h1>Belajar Laravel Routing</h1>

        <div class="list-group list-group-numbered mt-4">
            
        </div>
        <a href="<?php echo e(url('/basic_routing')); ?>" class="list-group-item list-group-item-action">
    Basic Routing (No View, No Controller)
</a>
<a href="<?php echo e(url('/view_route')); ?>" class="list-group-item list-group-item-action">
    View Route
</a>
<a href="<?php echo e(url('/controller_route')); ?>" class="list-group-item list-group-item-action">
    Controller Route
</a>
<a href="<?php echo e(url('/')); ?>" class="list-group-item list-group-item-action">
    Redirect Route
</a>
<a href="<?php echo e(url('/user/12345')); ?>" class="list-group-item list-group-item-action">
    Route Parameter (Required Parameter) - 1
</a>
<a href="<?php echo e(url('/posts/01/comments/20')); ?>" class="list-group-item list-group-item-action">
    Route Parameter (Required Parameter) - 2
</a>
<a href="<?php echo e(url('/username')); ?>" class="list-group-item list-group-item-action">
    Route Parameter (Optional Parameter)
</a>
<a href="<?php echo e(url('/title/this-is-my-title')); ?>" class="list-group-item list-group-item-action">
    Route With Regular Expression Constraints
</a>
<a href="<?php echo e(route('profileRouteName', ['profileId' => '123'])); ?>" class="list-group-item list-group-item-action">
    Named Route
</a>

<a href="<?php echo e(url('/route_priority/user')); ?>" class="list-group-item list-group-item-action">
    Route Priority
</a>

<a href="<?php echo e(url('/asdqwezxc')); ?>" class="list-group-item list-group-item-action">
    Fallback Routes
</a>

<h6 class="mt-4">Route Groups (Route Prefixes & Route Name Prefixes)</h6>
<div class="list-group list-group-numbered mt-4">
    <a href="<?php echo e(route('admin.dashboard')); ?>" class="list-group-item list-group-item-action">
        Admin Dashboard
    </a>
    <a href="<?php echo e(route('admin.users')); ?>" class="list-group-item list-group-item-action">
        Admin Users
    </a>
    <a href="<?php echo e(route('admin.items')); ?>" class="list-group-item list-group-item-action">
        Admin Items
    </a>
</div>

<a href="<?php echo e(url('/klone')); ?>" class="list-group-item list-group-item-action mt-2">
    clone website
</a>




        
    </div>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
    
</body>
</html>
<?php /**PATH C:\xampp\htdocs\laraavel10\resources\views/routing.blade.php ENDPATH**/ ?>