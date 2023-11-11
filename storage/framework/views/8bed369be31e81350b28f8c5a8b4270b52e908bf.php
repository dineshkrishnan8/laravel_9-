<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body> 
<div class="d-flex justify-content-center"> 
<div class="row">
              
            <div class="col">
            <table class="table table-bordered ">
            <thead >

            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
    <th scope="col">user id</th>
      <th scope="col">username</th>
      <th scope="col">lname</th>
      <th scope="col">email</th>
      <th scope="col">Gender</th>
      <th scope="col">password</th>
      <th scope="col">DOB</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
  
  <tr>
    <td><?php echo e($users->id); ?></td>
      <td><?php echo e($users->fname); ?></td>
      <td><?php echo e($users->lname); ?></td>
      <td><?php echo e($users->email); ?></td>
      <td><?php echo e($users->gen); ?></td>
      <td><?php echo e((decrypt($users->password))); ?></td>
      <td><?php echo e($users->date); ?></td>
      <td>
        <a href="<?php echo e(url('user-edit')); ?>/<?php echo e($users->id); ?>" class="btn btn-warning">Edit</a>
        <a href="<?php echo e(url('user-delete')); ?>/<?php echo e($users->id); ?>" class="btn btn-danger">delete</a>
      </td>
    </tr>

       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

       <script>
        (function () {
	window.onpageshow = function(event) {
		if (event.persisted) {
			window.location.reload();
		}
	};
})();
</script>
   
</body>
</html>

<?php /**PATH D:\dinesh\laravel\project\resources\views/login/view.blade.php ENDPATH**/ ?>