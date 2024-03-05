<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css"> 
    <title>ปัณณทัต บูรณสันติ 166321221015</title>
  </head>
  <body>
    <div class="container mt-3">
      <h1>เครื่องคำนวนหาค่าดัชนีมวลกาย (BMI)</h1>
      <form action="system_bmt.php" method="get">
        <div class="mb-3">
          <label for="weight" class="form-label">น้ำหนักตัว (kg.)</label>
          <input type="number" class="form-control" name="weight" id="weight" min="0" max="200" readfile>
        </div>
        <div class="mb-3">
          <label for="weight" class="form-label">ส่วนสูง (cm.)</label>
          <input type="number" class="form-control" name="height" id="height" min="0" max="200" readfile>
        </div>
        <button type="submit" class="btn btn-primary" onclick="calbmi()">คำนวณBMT</button>
      </form>
    </div>
  </body>
</html>