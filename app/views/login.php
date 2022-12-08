<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/login.css">
</head>
<body>
  <div class="d-flex justify-content-center sign">
    <div class="sign__container">
      <div class="text-center logo">
        <img src="../assets/images/logo.png" class="img-fluid"/>
      </div>
      <div class="pt-3 pb-2 text-center text_green_dark">
        <h2 class="title">UWC 2.0</h2>
      </div>
      <div class="text-center pb-3 description">
        “Trong mỗi bước đi cùng với thiên nhiên, chúng ta nhận được nhiều hơn những gì ta tìm kiếm”
      </div>  
      <form action="../../controllers/login.php" method="GET">
        <div class="mb-3 text_green_dark" style="font-weight: bold;">
          <label class="form-label">Tài khoản</label>
          <input type="text" class="form-control" placeholder="admin_uwc" name="username">
        </div>
        <div class="mb-3 text_green_dark" style="font-weight: bold;">
          <label class="form-label">Mật khẩu</label>
          <input type="password" class="form-control" placeholder="Password" name="password">
        </div>
        <!-- <button type="submit" class="btn btn-primary w-100 mt-2 mb-3 btn__submit">Log In</button> -->
        <input type="submit" class="btn btn-primary w-100 mt-2 mb-3 btn__submit"  >
        <div class="text-center pt-1 d-flex justify-content-center">
          <div class="text__color">
            Don't have an account?
          </div>
          <a href="#" class="ps-1">Sign up</a>
        </div>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>