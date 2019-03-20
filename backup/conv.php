<?php
require_once("../conexao/conexao.php");



$conn = new COM ("ADODB.Connection")
or die("Cannot start ADO");
$connStr = "PROVIDER=Microsoft.Jet.OLEDB.4.0;Data Source=/onlineadmission.mdb;Jet OLEDB:Database Password=*********;";
  $conn->open($connStr);
$result = mysqli_query($conecta,"SELECT * FROM cadastro");
$del="DELETE FROM student";
if ($conn->Execute($del) === false) {
         print 'error inserting: '.$conn->ErrorMsg().'<BR>';
}
while($row = mysqli_fetch_array($result))
  {
   $var1=$row[0];
 $sql="INSERT INTO cadastro
VALUES
('$var1')";
if ($conn->Execute($sql) === false) {

         print 'error inserting: '.$conn->ErrorMsg().'<BR>';
}
  }
echo "records inserted";
?>