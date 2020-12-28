<!-- navbar -->
<nav class="navbar navbar-info bg-default">
  <div class="container">
    <ul class="nav navbar-nav">
      <li><a href="index.php"><i class="fa fa-home"></i> HOME</a></li>
          <li><a href="keranjang.php"> <i class="fa fa-shopping-cart "></i>Keranjang</a></li>
          
          <?php 
          if (isset($_SESSION["pelanggan"])) :  ?>


              <li><a href="riwayat.php"><i class="fa fa-gift"></i> Riwayat Belanja</a></li> 

              <li><a href="Logout.php"><i class="fa fa-sign-out"></i>Logout</a></li> 
              
              <?php else :  ?>
              <li><a href="Login.php "><i class="fa fa-sign-in"></i>Login Pelanggan</a></li>

              <?php endif ?>
               <li><a href="CheckOut.php"><i class="fa fa-list"></i>CheckOut</a></li>      
    </ul>    
    <form action="pencarian.php" method="get" class="navbar-form navbar-right">
    <input type="text" class="form-control" name="keyword" placeholder="Cari Ayam...">
    <button class="btn btn-primary">Cari</button>
    </form>
  </div>
</nav>