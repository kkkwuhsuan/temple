<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>樂捐香油錢</title>
<style type="text/css">
    body{background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%);
         font-family: DFKai-sb;
         text-align:center;
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
   color:#8A008A;
  font-size: 35px;
}
p{text-align:left;
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
table{font-size: 25px;
     table-align:center;
     border:5px #3366cc groove;
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
 #n{font-size: 20px;
 }
 #l{text-align:right;
  color:#ff0000;
  font-size: 25px;
 }
 input{font-family: DFKai-sb;
    font-size: 20px;
}
#d{text-align:center;
  font-size: 35px;
}
#m{margin:50px;
        padding:30px;
        height:500px;
        background-color:white;
        border-radius: 40px ;
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
<br><br><br><br><br><br><br><br><br><br><br>
<br><br><br>
</head>
<body>
<h2>請確認捐款總金額，確認無誤請按結帳</h2>
<h2>付款方式</h2>
<div id="m">
<h3>我們目前提供以下的付款方式：信用卡線上刷卡、銀行轉帳</h3>
<form action="4-1.html" method="post">
    <div class="pay">
<br><br>
<input type=submit value="結帳" >
</div>
<?php
error_reporting(0);
$mo = $_POST["mo"];
$mon = $_POST["mon"];
$mone = $_POST["mone"];
$coin = $_POST["coin"];

$w=$mo;
$x=$mon;
$y=$mone;
$z=$coin;
echo '<table border="1" width="600" align="center">';
echo '<caption><h2 id="d">捐款項目清單</h2></caption>';
echo '<tr bgcolor="#dddddd">';
echo '<th>項目</th><th>金額</th><th>筆</th><th>小計</th>';
echo '</tr>';
echo '<tr>';

echo '<th>隨意捐</th><th>300</th>';
echo "<th>$mo</th>";
echo "<th>";
echo ($w*300);
echo "</th>";
echo '</tr>';

echo '<tr>';
echo '<th>樂意捐</th><th>500</th>';
echo "<th>$mon</th>";
echo "<th>";
echo ($x*500);
echo "</th>";
echo '</tr>';
echo '<tr>';
echo '<th>快樂捐</th><th>1000</th>';
echo "<th>$mone</th>";
echo "<th>";
echo ($y*1000);
echo "</th>";
echo '</tr>';

echo '<tr>';
echo '<th>自訂捐款額</th>';
echo "<th>$coin</th>";
echo "<th>1</th>";
echo "<th>";
echo ($z);
echo "</th>";
echo '</tr>';

echo '<tr>';
echo '<th>捐款總額</th>';
echo "<th>";
echo ($w*300+ $x*500+ $y*1000+ $z);
echo "</th>";
echo '</tr>';
echo '</table>';

 ?>
</div>
</body>
