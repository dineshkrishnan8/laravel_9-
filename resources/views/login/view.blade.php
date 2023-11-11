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

            @foreach($users as $users)
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
    <td>{{$users->id}}</td>
      <td>{{$users->fname}}</td>
      <td>{{$users->lname}}</td>
      <td>{{$users->email}}</td>
      <td>{{$users->gen}}</td>
      <td>{{(decrypt($users->password)) }}</td>
      <td>{{$users->date}}</td>
      <td>
        <a href="{{url('user-edit')}}/{{$users->id}}" class="btn btn-warning">Edit</a>
        <a href="{{url('user-delete')}}/{{$users->id}}" class="btn btn-danger">delete</a>
      </td>
    </tr>

       @endforeach 

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

