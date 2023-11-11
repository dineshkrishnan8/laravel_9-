<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/regstyle.css') }}">
</head>
<body>
    <div>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
            <form action="{{url('user-update')}}" method="post">
             
              @csrf
              <div class="row">
                <div class="col-md-6 mb-4">
                  
                   <input type="hidden" name="id" value="{{$users->id}}">
                  <div class="form-outline">
                    <input type="text" id="firstName" class="form-control form-control-lg" name="fname" value="{{$users->fname}}"/>
                    <label class="form-label" for="firstName">UserName</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="lastName" class="form-control form-control-lg" name="lname" value="{{$users->lname}}"/>
                    <label class="form-label" for="lastName">Name</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <input type="date" class="form-control form-control-lg" id="birthdayDate"  name="date" value="{{$users->date}}"/>
                    <label for="birthdayDate" class="form-label">Birthday</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <h6 class="mb-2 pb-1">Gender: </h6>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gen" id="femaleGender"
                      value="female"   {{ $users->gen == 'female' ? 'checked' : ''}} />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gen" id="maleGender"
                      value="male" {{ $users->gen == 'male' ? 'checked' : ''}} />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  

                </div>
              </div>

                

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="email" id="emailAddress" class="form-control form-control-lg" name="email"  value="{{$users->email}}" />
                    <label class="form-label" for="emailAddress">Email</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="password" class="form-control form-control-lg" name="password"  value="{{decrypt($users->password)}}"/>
                    <label class="form-label" for="pass">Password</label>
                  </div>

                </div>
              </div>




              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
              </div>

            </form>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
      
           </section>
</div>    
</body>
</html>