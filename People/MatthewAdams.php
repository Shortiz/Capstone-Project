
<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
     
    <meta charset="utf-8">
    <link rel=stylesheet href="styleSheet.css">
    <title>PHP login system!</title>
  </head>
<body>
    <header>
        <a href="HomePage.php">
        <img class="logo" src="Image/American_Bank.png" alt="Logo of the bank">
        </a>
      </header>
  
  <br>
  <nav >
    <ol>
  <div class="menudown">
    <li><a href="#">Menu</a></li>
    <div class="menudown-content">
    <a href="DigitalBanking.php">Digital Banking</a>
    <a href="DepositRate.php">Deposit Rate</a>
    <a href="AboutUs.php">About Us</a>
    </div>
    </div>
    <li><a href="Login.php">Login</a> &nbsp; </li>
    <li><a href="logout.php">Log Out</a> &nbsp;</li>
      <div class="quickdown">
        <li><a href="#">Quick Links</a></li>
          <div class="quickdown-content">
            <a href="Loan.php">Apply for Loan</a>
            <a href="Credit.php">Credit Card</a>
      
          </div>
      </div>
      <li><a href="ContactUs.php">Contact Us</a></li> 
    </ol>
 
  </nav>
  <br><br><br><br>
  
  <hr>
  <h3><?php echo "Welcome " . $_SESSION['username']?>. You can now check your account details.</h3>

<hr>
    <h1>Matthew Adams</h1>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<table border=1 >
    <th>Date</th>
    <th>Information</th>
    <th>Total</th>
    <th>Running Total</th>
<tr>
    <td>04-27-2021</td>
    <td>Check Deposit</td>
    <td>200</td>
    <td></td>
</tr>
<tr>
    <td>05-13-2021</td>
    <td>Wendys</td>
    <td>-18</td>
    <td></td>
</tr>
<tr>
    <td>07-19-2021</td>
    <td>Dunkin Dounuts</td>
    <td>-15</td>
    <td></td>
</tr>
<tr>
    <td>07-28-2021</td>
    <td>Wendys</td>
    <td>-25</td>
    <td></td>
</tr>
</table>
    <script>
        var total = 0;
$("td:nth-child(3)").each(function( index ) {
  total = parseInt($(this).text()) + parseInt(total);
  $(this).next('td').text(total);
});
    </script>
</body>
</html>