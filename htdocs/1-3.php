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
   color:#8A008A;
  font-size: 35px;
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
	 border:8px #fab4c9 groove;
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
  font-size: 30px;
}
li{text-align:center;

}
#t{margin:50px;
        padding:50px;
        height:250px;
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
Google搜尋:&nbsp;&nbsp; </b><input type="text"name="q"placeholder="請輸入關鍵字">&nbsp;&nbsp;
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
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div id="t">
<h3>付款成功</h3>
<p>本次交易已付款成功</p><br>

   <?php
   error_reporting(0);
   date_default_timezone_set('Asia/Taipei');
   $DateAndTime = date('Y-m-d h:i:s a', time());
   echo "廟宇名稱：七天玄女宮<br><br>";
    echo "交易時間：$DateAndTime";
   ?>
   <br><br>
</div>
</body>
</html>
