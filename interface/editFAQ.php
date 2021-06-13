<?php
include "../func/connect.php";
include 'header.php';
include 'sidebar.php';

$faqID = intval($_GET['faqID']);

$sql = "SELECT * from faq WHERE faqID  = $faqID";

$result = mysqli_query($conn, $sql);
if($rows = mysqli_fetch_array($result))
  {
    $faqID  = $rows['faqID'];
    $topic = $rows['topic'];
    $subtitle1 = $rows['subtitle1'];
    $subcontent1 = $rows['subcontent1'];
   

  }
  else
  {
      echo "<script>alert('Error 404');</script>";
    //   die("<script>window.location.href='dbblog.php';</script>");
  }
 ?>




<html>


<head>
<link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="../style/sidebar.css">
    <link rel="stylesheet" href="../style/Edit.css">
    <script src="https://kit.fontawesome.com/99f2cfdce3.js" crossorigin="anonymous"></script>
</head>


<body>
<div id="main">
        <button class="open_button" onclick="openNav()">☰ open</button> 
<div class="back_btn"><a href="dbFAQ.php"><button class="subtn1">back</button></a></div>
<form action="../func/faqupdate.php" method="POST">
<br><br><br><br><br><br><br>
<p11>EDIT FAQ</p11>

<h5>faqID</h5>
<input type="text"  name="faqID" id="faqID" readonly value="<?php echo $faqID;?>">

<h5>topic</h5>
<select name="topic" id="topic">
<option value="general" <?php if($topic=="general"){echo "selected";} ?>>general</option>
<option value="shipping" <?php if($topic=="shipping"){echo "selected";} ?>>shipping</option>
<option value="refunds" <?php if($topic=="refunds"){echo "selected";} ?>>refunds</option>
</select>

<h5>subtitle1</h5>
<input type="text"  name="subtitle1" id="subtitle1" value="<?php echo $subtitle1;?>">


<h5>subcontent1</h5>
<textarea name="subcontent1" id="subcontent1" cols="100" rows="10" ><?php echo $subcontent1;?></textarea>

 



<!-- <h5>Conclusion</h5>
<textarea name="conclusion" id="conclusion" cols="30" rows="10" ></textarea> -->
<br><br>
<button class="subtn">Submit</button>
</form>



<br>



<br>



</div>



<script src="../javascript/sidebar.js"></script>

</body>








</html>