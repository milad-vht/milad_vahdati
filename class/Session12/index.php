<?php 
/* در این جلسه به عمگلرهای مقایسه ای میپردازیم 
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
x==y => دو مقدار ایکس و وای اگر باهم برابر بودند مقدار 1 را بر میگرداند
x!=y =>اگرایکس و وای باهم برابر نبودند مقدار 1 را بر میگرداند 
x>=y => اگر مقدار  ایکس متغییر بزرگتر یا مساوی بود مقدار وای بود 1 را بر میگرداند
x>y =>  اگر مقادیر ایکس متغییر بزرگتر بود مقدار وای مقدار 1 را بر میگرداند */
$x=5;
$y=5;
echo "<br>";
echo $x==$y ? "True" : "False";
echo "<br>";
/*
-------------------------------------array----------------------------------
آرایه ها متغییری است که کلی مقادیر مختلف داده را در خود ذخیره میکند */  
$list = array('milad' => array("milad","vahdati",30),'yousef' => array("yousef","ghavidel",20));
echo $list['milad'][0];
?>