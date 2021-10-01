<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    {{-- bootstrap icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    {{-- my stayll --}}
    <link rel="stylesheet" href="/css/stayl.css">


    <title>Hello | {{ $title }}!</title>
  </head>
  <body style="background-image: url(/img/saiful.jpg);">

    

    <div class="container mt-4">
        
        

        <div class="row justify-content-center">
    <div class="col-sm-5">

        <main class="form-registration">
            <a href="/">
                <img class="mb-4 rounded mx-auto d-block" src="/img/favicon.png" alt="" width="72" height="57">
            </a>
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            <form action="/register" method="post">
                @csrf
                <div class="form-floating">
                <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Your Name" required value="{{ old('name') }}">
                <label for="name"><i class="bi bi-person-lines-fill"></i> Name</label>
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-floating">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Your username" required {{ old('username') }}>
                <label for="username"><i class="bi bi-person-check-fill"></i> username</label>
                @error('username')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required {{ old('email') }}>
                <label for="email"><i class="bi bi-envelope-fill"></i> Email address</label>
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-floating">
                <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                <label for="password"><i class="bi bi-file-lock-fill"></i> Password</label>
                @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
    
                {{-- <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
                </div> --}}
                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
                {{-- <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p> --}}
            </form>
            <small class="d-block text-center mt-3">Already registered?<a href="/login">Login now!</a> </small>
            </main>
    </div>
</div>


    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>


