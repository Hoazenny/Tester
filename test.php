<?php
	function gptb1($a, $b)
	{
		if($a == 0)
		{
			if($b == 0)
			{
				echo "Phuong trinh vo nghiem";
			}else{
				echo "Phuong trinh vo so nghiem";
			}
		}else
		{
			return -$b/$a;
		}
	}

	$c = gptb1(1,1);
	echo $c;
	


?>