<!doctype html>
<html lang="en">
  <head>
  	<?php include 'layout_head.php';
    session_start();
   ?>
    <title>MSW SHOW CASE WOOD</title>

  </head>
  <body>
  	<?php include 'layout_header.php';?>
    
	<div class="container-fluid">
    <h1><i> Cart Page </i></h1>
		<!-- Nội dung chính của PAGE ở đây --> 
    <div class="cart-table">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Product name</th>
        <th scope="col">Product price (VNĐ)</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody id="cart-items">
      <!-- Danh sách sản phẩm trong giỏ hàng sẽ được hiển thị tại đây -->
    </tbody>
  </table>
</div>

<div class="total-price">
  <h5>Total money: <span id="total-price">0 VNĐ</span></h5>
</div>

<button id="checkout" class="btn btn-success">Payments</button>
<hr>

      <div class="row">
       <div class="col-lg-3">
        <form  method="POST">
          <div class="card">
            <img src="2.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Ốp Lưng bằng gỗ khắc tên cho Iphone </h5>
              <p class="card-text"><b>Price: 500.000</b></p>
              <p class="card-text"><b>ID: 1</b></p>
              <button type="sumbit" name="Add_To_Cart"z class="btn btn-info">Add To Cart</button>
              <input type="hidden"name="Item_Name" value="Ốp Lưng bằng gỗ khắc tên cho Iphone ">
              <input type="hidden"name="Price" value="500.000">
            </div>
          </div>
        </form>
      </div>

        <div class="col-lg-3">
        <form method="POST">
          <div class="card">
            <img src="3.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Ốp Lưng bằng gỗ điêu khắc theo yêu cầu</h5>
              <p class="card-text"><b>Price: 400.000</b></p>
              <p class="card-text"><b>ID: 2</b></p>
              <button type="sumbit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden"name="Item_Name" value="Ốp Lưng bằng gỗ điêu khắc theo yêu cầu">
              <input type="hidden"name="Price" value="400.000">
            </div>
          </div>
        </form>
        </div>

        <div class="col-lg-3">
        <form  method="POST">
          <div class="card">
            <img src="4.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Ốp Lưng Iphone bằng gỗ điêu khắc theo yêu cầu</h5>
              <p class="card-text"><b>Price: 600.000</b></p>
              <p class="card-text"><b>ID: 3</b></p>
              <button type="sumbit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden"name="Item_Name" value="Ốp Lưng Iphone bằng gỗ điêu khắc theo yêu cầu">
              <input type="hidden"name="Price" value="600.000">
            </div>
          </div>
        </form>
        </div>

        <div class="col-lg-3">
        <form  method="POST">
          <div class="card">
            <img src="5.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Ốp Lưng SamSung bằng gỗ điêu khắc theo yêu cầu</h5>
              <p class="card-text"><b>Price: 350.000</b></p>
              <p class="card-text"><b>ID: 4</b></p>
              <button type="sumbit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden"name="Item_Name" value="Ốp Lưng SamSung bằng gỗ điêu khắc theo yêu cầu">
              <input type="hidden"name="Price" value="350.000">
            </div>
          </div>
        </form>
        </div>

        <div class="col-lg-3">
        <form method="POST">
          <div class="card">
            <img src="6.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Cái mẫu Ốp lưng Iphone khác nhau</h5>
              <p class="card-text"><b>Price: 350.000</b></p>
              <p class="card-text"><b>ID: 5</b></p>
              <button type="sumbit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden"name="Item_Name" value="Cái mẫu Ốp lưng Iphone khác nhau">
              <input type="hidden"name="Price" value="350.000">
            </div>
          </div>
        </form>
        </div>
        <div class="col-lg-3">
        <form action="" method="POST">
          <div class="card">
            <img src="7.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Ốp lưng chạm khắc rồng cực kỳ uy tín</h5>
              <p class="card-text"><b>Price: 500.000</b></p>
              <p class="card-text"><b>ID: 6</b></p>
              <button type="sumbit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden"name="Item_Name" value="Cái mẫu Ốp lưng Iphone khác nhau">
              <input type="hidden"name="Price" value="500.000">
            </div>
          </div>
        </form>
        </div>
        <div class="col-lg-3">
        <form method="POST">
          <div class="card">
            <img src="8.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Ốp lưng Iphone 14 điêu khắc theo yêu cầu</h5>
              <p class="card-text"><b>Price: 600.000</b></p>
              <p class="card-text"><b>ID: 7</b></p>
              <button type="sumbit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden"name="Item_Name" value="Cái mẫu Ốp lưng Iphone khác nhau">
              <input type="hidden"name="Price" value="600.000">
            </div>
          </div>
        </form>
        </div>
  <style>
    .card{
      border-radius:1rem;
      width: 250px;
    }

  </style>
  <script src="cart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
