




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HomePage</title>
    <link rel="stylesheet" href="style/home.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <input type="checkbox" id="check" class="hide" />
    <div class="container">

      <label for="check">
        <i class="fas fa-angle-left" id="arrow"></i>
      </label>

      <div class="imgbox">
        <img src="pic/logotea.png" alt="" />
        <p>TEA<br />TIME</p>
      </div>
      <ol class="navbar">
        <li class="searchbox">
          <i class="fas fa-search"></i>
          <input type="text" placeholder="Search.." />
        </li>
        <li>
          <a href="#">
            <i class="fas fa-tv"></i>
            <p>Dasboard</p></a
          ><span>dashboard</span>
        </li>
        <li>
          <a href="#">
            <i class="fa-solid fa-glass-water"></i>
            <p>MilkTea</p></a
          ><span>milkTea</span>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-money-bill"></i>
            <p>Sales</p></a
          ><span>sales</span>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-chart-line"></i>
            <p>Inventory</p></a
          ><span>inventory</span>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-kitchen-set"></i>
            <p>Ingredients</p></a
          ><span>ingredients</span>
        </li>
        <li>
          <a href="#">
            <i class="fa-solid fa-users-gear"></i>
            <p>Settings</p></a
          ><span>settings</span>
        </li>
        <li>
   <a href="login.php">
     <i class="fa-solid fa-right-from-bracket" id="logout" ></i>
     <p>Logout</p></a
   ><span>settings</span>
 </li>
      </ol>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
  </body>
</html>
