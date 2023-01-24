 <html>
<body bgcolor="linen">
<h4>Players Name:SACHIN,ROHITH,KOHLI,SANJU,RAHUL,DHONI</h4>
<?php
$name=["SACHIN","ROHITH","KOHLI","SANJU","RAHUL","DHONI"];
echo "Player Program";
echo "<br>
<table border='2px'>
<tr><th> sl no.</th>
<th>player</th>";
for ($i=0;$i<5;$i++)
{
$sl=$i+1;
echo "<tr><th>$sl</th><th>$name[$i]</th></tr>";
}
echo "</table>"
?>
</body>
</html>


