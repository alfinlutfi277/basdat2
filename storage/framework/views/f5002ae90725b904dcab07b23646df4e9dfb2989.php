<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
    <div class="container mt-4">
        <?php echo $__env->yieldContent('header'); ?>
        <div class="row">
            <?php echo $__env->yieldContent('main'); ?>
            <?php echo $__env->yieldContent('sidebar'); ?>
        </div>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\bolablog\resources\views/master.blade.php ENDPATH**/ ?>