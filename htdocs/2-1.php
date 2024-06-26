<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>借發財金</title>
<style type="text/css">
    body{background-image: linear-gradient(to top, #fad0c4 0%, #ffd1ff 100%);
         font-family: DFKai-sb;
         text-align: center;
      }
    .a{
        margin:50px;
        padding:30px;
        height:380px;
        background-color:#F4F4F4;
        border-radius: 40px ;
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
   color:#267326;
  font-size: 35px;
}
p{text-align:center;
  color:#5c5c8a;
  font-size: 23px;
}

li{text-align:left;
   font-size: 20px;
   color:#171717;
}
#f{margin:30px;
   padding:50px;
   background-color:#ecd8c6;
}
#g{margin:30px;
   padding:50px;
   background-color:#ffeecc;
}
table{font-size: 23px;
     text-align:left;
     border:8px #fab4c9 groove;
     position:center;
     cellpadding="10";
    }
.td{width:500px;
    color:#994d00;
    bgcolor:##ff0066;
}
.y{text-align:left;
   color:#009999 ;
   font-size: 25px;
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
 #m{margin:50px;
        padding:50px;
        height:250px;
        background-color:#F4F4F4;
        border-radius: 40px ;
 }
 #c{margin:50px;
        padding:60px;
        height:400px;
        background-color:#F4F4F4;
        border-radius: 40px ;
 }
 #ya{text-align:center;
   color:#8080ff ;
   font-size: 25px;
 }
 #s{font-size: 23px;
       width:100px;
       background-color:#ccccff;
       padding:5px;
       border-radius:5px;
       color:#
 }
 #s:hover{
       background-color:#ffcce6;
        }
 .f{text-align:center;
   color:#ff9999 ;
   font-size: 25px;
 }
 #x{text-align:left;
   color:#993366;
  font-size: 25px;

 }
 #po{text-align:left;
  color:#476b6b;
  font-size: 23px;
 }
 #l{text-align:right;
  color:#ff0000;
  font-size: 25px;
 }
 input{font-family: DFKai-sb;
    font-size: 20px;
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
</div>
</header>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<h1>擲筊</h1>
<br>
<?php
error_reporting(0);
$num = rand( 1, 3 );
if ($num == 1){$im ="42.png";
echo "擲笅結果 :聖筊<br><br>"
;} elseif  ($num == 2){ $im ="43.png";
echo "擲笅結果 :陰筊<br><br>"
;} elseif($num == 3){$im ="44.png";
echo "擲笅結果 :笑筊<br><br>"
;}
echo " <img src=$im /><br>";
?>
<br><br>
<input type="button" name="up" id="up" value="重擲" onClick="location.reload()">
</body>
</html>

