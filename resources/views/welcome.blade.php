<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.min.css" integrity="sha256-fhWmpLsbRLY5xcogEY/DTY2aUDu5sd1Y/vxj9XtJMAQ=" crossorigin="anonymous" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic.min.css" integrity="sha256-CfN2r6i/dqkUHVRqpBzO3w21SnIWalwGfj5ScBPVzmI=" crossorigin="anonymous" />
   <title>Aplikasi Pembayaran SPP Online</title>
   <style>
      *{
         text-decoration: none;
         margin: 0;
      }
      body{
         background: linear-gradient(to right, #0044ff, #057cdd, #45c2f3);
         font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      }
      .container{
         width: 80%;
         height: 300px;
         margin: 100px auto;
         border-radius: 10px;
         background: #fff;
         text-align: center;
         font-size: 1.8em;
         box-shadow: #222 0px 4px 0px;
      }
      .tombol{
         text-align: center;
      }
      .login,
      .register{
         color: #222;
         font-size: 1.7em;
         padding: 10px 50px;
         border: 1px solid #222;
      }
      .login:hover{
         background:rgba(0,0,0,0.5);
         transition: 1s;
         color: #fff;
      }
      .register:hover{
         background:rgba(0,0,0,0.5);
         transition: 1s;
         color: #fff;
      }
      .footer{
         position: relative;
         top: 150px;
         text-align: center;
         background: #222;
         color: #fff;
         font-size: 1.4em;
         padding: 28px;
      }
   </style>
</head>
<body>
   <div class="container">
      <div class="title">
         <h1> SELAMAT DATANG</h1>
      </div>
      <div class="sub">
         <p>Ini adalah APLIKASI PEMBAYARAN SPP ONLINE. jika Anda sudah memiliki akun, silakan <b>Login</b>. Namun jika anda belum memiliki akun, silakan anda melakukan <b>Registrasi</b>. hubungi <b>(0232)123123</b> jika anda memerlukan bantuan.</p>
      </div>
   </div>
   <div class="tombol">
      <div class="button">
         <a href="/login" class="login">Login</a>
         <a href="/register" class="register">Registrasi</a>
      </div>
   </div>
   <div class="footer">&copy; FahmiFN - Rekayasa Perangkat Lunak | <b>SMK Muhammadiyah 2 Kuningan</b></div><br>
  
</body>
</html>