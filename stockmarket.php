<!DOCTYPE html><?php

//goes to whichever tab they clicked on
if(isset($_POST['main'])){
  header("location:dashboard.php");
}
if(isset($_POST['trade'])){
  header("location:commoditiesmarket.php");
}
if(isset($_POST['stock'])){
  header("location:stockmarket.php");
} 

?><html><body>

<div class="tab">
  <form method='post'>
    <input type='submit' name='main' value="Dashboard">
    <input type='submit' name='trade' value="Commodities Market">
    <input type='submit' name='stock' value="Stock Market">
  </form>
</div>

<br><p>Buying and selling stocks</p>
</body></html>