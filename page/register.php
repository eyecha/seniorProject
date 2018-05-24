<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>ลงทะเบียน</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signup.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <form class="form-signup">
        <h2 class="form-signup-heading">กรุณาลงทะเบียน</h2>

        <input type="email"    id="inputEmail"    class="form-control" placeholder="อีเมล์" required autofocus>
        <input type="password" id="inputPassword" class="form-control" placeholder="รหัสผ่าน" required>
        <input type="text"     id="inputUsername" class="form-control" placeholder="ชื่อผู้ใช้" required>
        <input type="text"     id="inputAppid"    class="form-control" placeholder="Application ID" required>
        <small id="AppidHelp" class="form-text text-muted">หมายเหตุ: หากท่านจะทำการลงทะเบียน ท่านจะต้องติดตั้งอุปกรณ์ก่อนจึงจะได้รับ Application ID.</small><br>

        <center>
        <button class="btn btn-md btn-primary " type="submit">ลงทะเบียน</button>
        <button class="btn btn-md btn-primary "role="button" type="reset">ยกเลิก</button><br>
        <a class="btn btn-link " href="signin.html" role="button">สมาชิกลงชื่อเข้าใช้</a>

      </form>

    </div>
  </body>
</html>
