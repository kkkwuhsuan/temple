<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>借發財金</title>
<style type="text/css">
    body{background-image: linear-gradient(to top, #fad0c4 0%, #ffd1ff 100%);
         font-family: DFKai-sb;
         text-align:center;
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
  font-size: 30px;
}
p{text-align:center;
  color:#5c5c8a;
  font-size: 25px;
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
h1{text-align:center;
 color:#267326;
font-size: 35px;
}
img{position:center;
}
li{font-size: 25px;
}
h3{text-align:left;
font-size: 25px;
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
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br>
<img id="k" src="45.png">
<br><br><br>
<h1>借發財金</h1>
<h2>求金處</h2>
<p id="e">
<img src="image4.jpg" width="500"align="center">
</p>
<br><br>
<b><h3>說明</h3></b>
<ol>
 <li>第一次擲筊獲得「聖筊」者，可求金陸佰元。</li>
 <li>若第一次未獲「聖筊」，可再次向土地公行禮並許下心中祈求的願望，再次「擲筊」，如獲「聖筊」者，可求金伍佰元。</li>
 <li>如此依次許願擲筊獲「聖筊」者，可求金肆佰元、參佰元、貳佰元、壹佰元。</li>
<li>若六次皆未獲土地公「聖筊」者，則請下次再來祈福許願求金。</li>
</ol>
<br><br>
<a href="2-1.php" target="_blank"><input type="button" value="擲筊"></a><br><br>
<p>
 <form action="2.php" method="get">
 掉筊次數:<input type=text name="time" placeholder="請輸入掉筊次數">
</p>
 <br>
 <input type="submit" value="提交">
 <hr>
 <br>
 輸入個人資料以領取發財金<br><br>
 領取金額:
 <?php
error_reporting(0);
  $t=$_GET["time"];
  $m=700;
  if($t>6){
   echo"已超出擲筊次數，請下次再來祈福許願求金。";
  }elseif($t<=0){
   echo"請輸入正確擲筊次數";
  }elseif($t>5){
   echo"無法求得發財金，請下次再來祈福許願求金。";
  }else{echo "台幣";echo $m-$t*100; }
  ?><br><br>
您的身份證字號:<input type="text" name="id"><br><br>
廟方銀行帳戶:（700）12345671234567<br><br>
您的銀行帳戶:<input type="text" name="bank">
<br><br><br><br>
<input type="button" value="送出" ondblclick="myalert()">
&nbsp;&nbsp;&nbsp;
<a href="2-2.php" ><input type="button" value="還金"></a>
<script>
        function myalert() {
            alert("己成功提交借金申請!將於三個工作天內匯款至您的銀行帳戶，如無匯款可聯絡我們!");
        }
    </script>
</body>
</html>

