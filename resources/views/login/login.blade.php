<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-center">

        <form action="{{ route('check') }}" method="post">
        @csrf
      
  <div class="form-group">
    <label for="fname">username</label>
    <input type="text" class="form-control" name="name"   >
    
  </div>
  <div class="form-group">
    <label for="Password">Password</label>
    <input type="password" class="form-control"  name="Password">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



        </div>

    </div>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/logstyle.css') }}">
</head>
<body>
<div class="login-box">
  <h2>Login Form</h2>
  <form action="/check" method="post" id="sublog">
  @csrf
    <div class="user-box">
      <input type="text" name="fname" value="{{ old('fname') }}" required="fname">
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password"  name="password" required="password">
      <label>Password</label>
    </div>
    <a href="#" onclick="submitForm()">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Submit
</a>
  </form>
</div>
<!-- <div class="row">
  <div class="d-flex justify-content-center">
    <div class="col-md-12">
        @if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="{{ route('check') }}" method="POST" autocomplete="off">
            @csrf
            <div class="mb-3">
                <label>Username <span class="text-danger">*</span></label>
                <input class="form-control" type="username" name="fname" value="{{ old('fname') }}" />
            </div>
            <div class="mb-3">
                <label>Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="password" />
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Login</button>
               
            </div>
        </form>
    </div>
    </div>
</div> -->
<script>

function submitForm() {
            let form = document.getElementById("sublog");
            form.submit();
        }
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
