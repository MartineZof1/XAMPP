<?php
include ('config.php');

if(isset($_POST['submit'])){
  $sql = "INSERT INTO koolitus (name, phone, address, email)
  VALUES ('".$_POST["name"]."','".$_POST["phone"]."','".$_POST["address"]."','".$_POST["email"]."')";
if ($connection->query($sql)) {
  echo 'Record succesfully created!';
};
};
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $_SESSION['postdata'] = $_POST;
  unset($_POST);
  header("Location: ".$_SERVER['PHP_SELF']);
  exit;
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" 
 rel="stylesheet">  

<title>Регистрация на курсы</title>
</head>
  <body>
  <div class="container-fluid">
  <h1>Регистрация на курсы</h1>
  <div class="col-md-6">
  <form class="row g-3" method="post">
    <div class="col-12">
      <label class="form-label">Name</label>
      <input type="text" name="name" class="form-control"  placeholder="Введите имя" required>
    </div>
    <div class="col-12">
      <label class="form-label">Email</label>
      <input type="email" name="email" class="form-control" placeholder="эл.почта" required>
    </div>
    <div class="col-12">
      <label class="form-label">Address</label>
      <input type="text" name="address" class="form-control" placeholder="Улица, дом, кв, город, страна" required>
    </div>
    <div class="col-12">
      <label class="form-label">Phone</label>
      <input type="text" name="phone" class="form-control" placeholder="(+372) 0000 0000" required>
    </div>
    <div class="col-12">
      <button type="submit" name="submit" class="btn btn-primary">Регистрация</button>
    </div>
  </form>
  </div>
  </div>
  

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>