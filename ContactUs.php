<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us</title>
    <meta charset="utf-8">
</head>
<style>
  
    body{
      background-color: whitesmoke;
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }
    nav{
      margin: 0;
      padding: 0px, 20px;
      text-align: center;
  }
  
  nav ol li{
      display: -webkit-inline-box;
      list-style-type: none;
  }
  nav ol{
    margin: 5px;
    padding: 5px;
    
  }
   
  li a{
    text-decoration: none;
    display: block;
    padding: 10px 45px;
    margin-right: 10px;
    background-color: lightgoldenrodyellow;
    color:black;
  }
  li a:hover{
    background-color: royalblue;
  
  }
  
    .logo{
      position: relative;
      width: 100%;
      
  }
  h2{
    text-align: center;
  }
  h3{
    text-align: center;
  }
  hr{
    
    border-bottom: 4px solid mediumblue;
  }
  .menudown {
    display: inline-block;
    
  }
  .menudown-content {
    display: none;
    position: absolute;
  }
  .menudown:hover .menudown-content {
    display: block;
  }
  .menudown-content a {
    display: block;
    color: black;
    padding: 5px;
    text-decoration: none;
  }
  .menudown-content a:hover {
    color: white;
    background-color: skyblue;
  }
  .quickdown {
    display: inline-block;
    
  }
  .quickdown-content {
    display: none;
    position: absolute;
   text-align: center;
   width: auto;
    overflow:auto;
  }
  .quickdown:hover .quickdown-content {
    display: block;
    
  }
  .quickdown-content a {
    display: block;
    color: black;
    padding: 5px;
    text-decoration: none;
  }
  .quickdown-content a:hover {
    color: white;
    background-color: skyblue;
  }
  </style>
  
  </head>
  <body>
    <header>
        <a href="HomePage.php">
        <img class="logo" src="Image/American_Bank.png" alt="Logo of the bank">
        </a>
      </header>
    <hr>
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
        <div class="quickdown">
          <li><a href="#">Quick Links</a></li>
            <div class="quickdown-content">
              <a href="Loan.php">Apply for Loan</a>
              <a href="Credit.php">Credit Card</a>
        
            </div>
        </div>
        <li><a href="contact.php">Contact Us</a></li> 
      </ol>
   
    </nav>
    </body><br><hr>
    <h1>Contact Us</h1>
    <p>
        To contact us, please reach out through one of the contacts below.<br><br>
        Visit us in-person at:<br>
        2300 Adams Ave<br>
        Scranton, PA 18509<br><br>
        Email us at:<br>
        <a href="http://www.somedomain.com/contact">
        www.somedomain.com</a>.<br><br>
        Call us at:<br>
        (570)222-2222
    </p>
</body>
</html>