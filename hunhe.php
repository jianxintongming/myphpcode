<?php
echo "日期:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;得分：      <br>";
echo "<table width=600><tr><td><table width=100% border=1>";
for($i=1;$i<21;$i++)
{
	echo "<tr><td>".myrand1()."</td><td>".myrand1()."</td></tr>";
}
echo "</table></td></tr></table>";


function myrand1()
{
	$add1=mt_rand(1,100);
	$str=myrand();
	$add2=eval("return $str;");
	while($add2>=$add1)
	{
		$str=myrand();
		$add2=eval("return $str;");
	}	
	if($add1+$add2<100)
	{
		$string="$add1+(".$str.")=(&nbsp;&nbsp;)";
	}
	else
		$string="$add1-(".$str.")=(&nbsp;&nbsp;)";
	return $string;
}

function myrand()
{
	$num = 2;
	$start = 1;
	$end = 100;
	$connt = 0;
	while($connt<$num)
	{
		$a[]=rand($start,$end);//产生随机数
		$ary=array_unique($a);
		$connt++;
	}
	$add1=$ary[0];
	$add2=$ary[1];
/*防止重复
	$add1=mt_rand(1,100);
	$add2=mt_rand(1,100);
	$flag=1;
	while($flag)
	{
		if($add2==$add1)
		{
			$add2=mt_rand(1,100);
		}
		else
			$flag=0;
	}	
	*/
	if($add1+$add2>100)
	{
		if($add1>$add2)
		{
			$string="$add1-$add2";
		}
		else
		{
			$string="$add2-$add1";
		}
	}
	else
	{
		$string="$add1+$add2";
	}
	return $string;
}
?>