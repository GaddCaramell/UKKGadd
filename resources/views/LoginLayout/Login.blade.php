<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Aplikasi Kasir</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Custom CSS -->
    <link href="/css/style.min.css" rel="stylesheet">

 

</head>
<body>
    <div class="card" style="width :30%; margin-left:34%; margin-top:15%">
        <div class="card-body shadow-sm">
            <h3 class="text-center"><i class="bi bi-currency-dollar"></i> Kasir Toko ABC</h3>
            <h4 class="text-center">Login</h3>
            <form action="" class="row g-2">
            <div class="col-12">
                <label for="username" class="form-label"><i class="bi bi-person-fill"></i> Username</label>
                <input type="username" class="form-control" id="username" name="username">
              </div>
              <div class="col-12">
                <label for="password" class="form-label"><i class="bi bi-lock-fill"></i> Password</label>
                <input type="password" class="form-control" id="password" name="password">
              </div>
              <div>
              <button class="btn btn-dark" type="submit"><i class="bi bi-door-open-fill"></i> Login</button>
            </div>
            </form>
        </div>
    </div>

    <script src="/js/bootstrap.min.js"></script>
</body>
</html>