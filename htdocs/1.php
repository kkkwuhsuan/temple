<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>安太歲</title>
<style type="text/css">
	body{background-image: linear-gradient(-20deg, #e9defa 0%, #fbfcdb 100%);
         font-family: DFKai-sb;
      }
	.a{
		margin:30px;
		padding:60px;
		height:200px;
		border:5px #deb887 solid;
        background-color:#f5fffa;
        border-radius: 40px 20px;
	}
	header{background-color: ivory;
		   text-align:left;
		   font-size: 45px;
           position: fixed;
		   top:0;
		   left:0;
		   width:100%;
		   padding:0px;
		   color:black;
	}

button{font-size: 10px;
	   text-align: center;
	   width:170px;
       background-color:#A43B35;
       padding:5px;
       border-radius:20px;
          }

button:hover{
       background-color:#C15E58;
        }
a{font-size: 25px;
  text-decoration:none;
  color:white;
 }
a:hover {text-decoration:underline;
         color:C15E58;
        }
a:active {
text-decoration:none;
color:blue;
}

h2{text-align:center;
  font-size: 30px;
}
p{text-align:center;
  color:#5c5c8a;
  font-size: 25px;
}
hr{
  border-top: 4px dashed #f2887e;
}
li{text-align:left;
   font-size: 20px;
   color:#171717;
}
#f{margin:30px;
   padding:50px;
   background-color:#ffccff;
}
#g{margin:30px;
   padding:50px;
   background-color:#ffeecc;
}
table{font-size: 20px;
	 text-align:left;
	 border:5px #86592d solid;
	 position:center;
	 cellpadding="10";
    }
.td{width:500px;}
.y{text-align:left;
   color:#009999 ;
   font-size: 20px;
   }
 #k{background-size: cover;
		 width:100%;
		 height:350px;
	}
 .r{color:#ff4d4d ;

 }
 #u{margin:0px;
   padding:30px;
   background-color:#A43B35;
 }
 #l{text-align:right;
  color:#ff0000;
  font-size: 25px;
 }
 input{font-family: DFKai-sb;
   font-size: 20px;
   position:center;
   text-align: center;
}
h1{text-align:center;
}
h3{text-align:center;
  font-size: 25px;
}
form{position:center;
}
}
</style>
</head>
<body>
<header>
    <img src="3.jpg" width="190"align=left>
    <br>&nbsp;&nbsp;
    七天玄女宮
</div>
<div id="l">
<form action="https://www.google.com/search" method="get" align="right" target="_blank" ><b>
Google搜尋:&nbsp;&nbsp;</b> <input type="text"name="q"placeholder="請輸入關鍵字">&nbsp;&nbsp;
<input type="submit" value="🔍" >
</form>
</div>
<div id="u">
<button><a href="index.php"><b>🏠首頁</b></a></button>
<button><a href="1.html"><b>安太歲</b></a></button>
<button><a href="2.php"><b>借發財金</b></a></button>
<button><a href="3-1.php"><b>月老求籤占卜</b></a></button>
<button><a href="4.html"><b>樂捐香油錢</b></a></button>
<button><a href="5.html"><b>關於我們</b></a></button>
</div>
</header>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br>
<h2>請確認安太歲總明細，確認無誤請按結帳</h2>
<h2>付款方式</h2>
<h3>我們目前提供以下的付款方式：信用卡線上刷卡、銀行轉帳</h3>
<?php
error_reporting(0);

$people = $_POST["people"];

$name1 = $_POST["name1"];
$name2 = $_POST["name2"];
$name3 = $_POST["name3"];
$name4 = $_POST["name4"];
$name5 = $_POST["name5"];

$sex1 = $_POST["sex1"];
$sex2 = $_POST["sex2"];
$sex3 = $_POST["sex3"];
$sex4 = $_POST["sex4"];
$sex5 = $_POST["sex5"];

$ChineseZodiac1 = $_POST["ChineseZodiac1"];
$ChineseZodiac2 = $_POST["ChineseZodiac2"];
$ChineseZodiac3 = $_POST["ChineseZodiac3"];
$ChineseZodiac4 = $_POST["ChineseZodiac4"];
$ChineseZodiac5 = $_POST["ChineseZodiac5"];

$year1 = $_POST["year1"];
$year2 = $_POST["year2"];
$year3 = $_POST["year3"];
$year4 = $_POST["year4"];
$year5 = $_POST["year5"];

$month1 = $_POST["month1"];
$month2 = $_POST["month2"];
$month3 = $_POST["month3"];
$month4 = $_POST["month4"];
$month5 = $_POST["month5"];

$day1 = $_POST["day1"];
$day2 = $_POST["day2"];
$day3 = $_POST["day3"];
$day4 = $_POST["day4"];
$day5 = $_POST["day5"];

$x=$people;

$y1=$name1;
$y2=$name2;
$y3=$name3;
$y4=$name4;
$y5=$name5;

$a1=$sex1;
$a2=$sex2;
$a3=$sex3;
$a4=$sex4;
$a5=$sex5;

$b1=$ChineseZodiac1;
$b2=$ChineseZodiac2;
$b3=$ChineseZodiac3;
$b4=$ChineseZodiac4;
$b5=$ChineseZodiac5;

$c1=$year1;
$c2=$year2;
$c3=$year3;
$c4=$year4;
$c5=$year5;

$d1=$month1;
$d2=$month2;
$d3=$month3;
$d4=$month4;
$d5=$month5;

$e1=$day1;
$e2=$day2;
$e3=$day3;
$e4=$day4;
$e5=$day5;

echo '<table border="1" width="600" align="center">';
echo '<caption><h1>安太歲明細</h1></caption>';
echo '<tr bgcolor="#dddddd">';
echo '<th>姓名</th><th>性別</th><th>生肖</th><th colspan="3">農曆生日</th>';
echo '</tr>';

echo '<tr>';
echo "<td>$y1</td>";
echo "<td>$a1</td>";
echo "<td>$b1</td>";
echo "<td>$c1</td>";
echo "<td>$d1</td>";
echo "<td>$e1</td>";
echo '</tr>';

echo '<tr>';
echo "<td>$y2</td>";
echo "<td>$a2</td>";
echo "<td>$b2</td>";
echo "<td>$c2</td>";
echo "<td>$d2</td>";
echo "<td>$e2</td>";
echo '</tr>';

echo '<tr>';
echo "<td>$y3</td>";
echo "<td>$a3</td>";
echo "<td>$b3</td>";
echo "<td>$c3</td>";
echo "<td>$d3</td>";
echo "<td>$e3</td>";
echo '</tr>';

echo '<tr>';
echo "<td>$y4</td>";
echo "<td>$a4</td>";
echo "<td>$b4</td>";
echo "<td>$c4</td>";
echo "<td>$d4</td>";
echo "<td>$e4</td>";
echo '</tr>';

echo '<tr>';
echo "<td>$y5</td>";
echo "<td>$a5</td>";
echo "<td>$b5</td>";
echo "<td>$c5</td>";
echo "<td>$d5</td>";
echo "<td>$e5</td>";
echo '</tr>';

echo '<tr>';
echo '<th colspan="2">總計</th>';
echo '<th colspan="4">';
echo ($x*500);
echo "</th>";
echo '</tr>';
echo '</table>';
 ?>
<br>
<form action="1-2.php" method="POST">
<p>
<input type=submit value="結帳" ></p>
</form>
</body>

</html>
