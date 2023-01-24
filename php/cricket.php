
<html>
<body bgcolor="lightblue">
<h1>Indian Cricket Team</h1>
<?php
$name=["DHONI","KOHLI(c)","KARTHIK","RAHUL","GANKULI","JADEJA","ROHITH","AKSHAY","SRIRAG","VISHNU"];
$role=["BALL BOY","WICKET KEEPER","RIGHT-HAND BATSMAN","RIGHT-HAND BATSMAN","RIGHT-HAND BATSMAN","FAST BOWLER","SPINBOWLER","ALLROUNDER","VERUTHE","ALL ROUNDER"];
echo "<u>STARTING X</u>";
echo "<br>
<table border='2px'>
<tr><th> sl no.</th>
<th>player</th>
<th>ROLE</th>";
for ($i=0;$i<10;$i++)
{
$sl=$i+1;
echo "<tr><th>$sl</th><th>$name[$i]</th><th>$role[$i]</th></tr>";
}
echo "</table>"
?>
</body>
</html>

