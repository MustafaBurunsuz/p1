<?php


$countA=0;
$countB=0;
$draw=0;


$a = array("Rock","Paper","Scissors");


	for($i=1; $i<=10; $i++){


		$player1 = array_rand($a,1);
		$player2= array_rand($a,1);
		


	
		
		echo "Raund $i:";
		echo "<pre>";
		echo "player A: ".$a[$player1];
		echo "<pre>";
		
		echo "player B: ".$a[$player2];
		echo "<pre>";




		 if($a[$player1]=="Paper" && $a[$player2]=="Rock"){
			echo "Paper covers Rock: Player A wins...";
			$countA++;
			echo "<pre>";
		}
		 if($a[$player1]=="Paper" && $a[$player2]=="Scissors"){
			echo "Scissors cut paper : Player B wins... ";
			$countB++;
			echo "<pre>";
		} if($a[$player1]=="Paper" && $a[$player2]=="Paper"){
			echo "Same choice: It is a draw...";
				$draw++;
			echo "<pre>";
		}if($a[$player1]=="Scissors" && $a[$player2]=="Rock"){
			echo "Rock crushes Scissors Player B wins..";
			$countB++;
			echo "<pre>";
		} if($a[$player1]=="Scissors" && $a[$player2]=="Paper"){
			echo "Scissors cut paper : Player A wins...";
			$countA++;

			echo "<pre>";
		}if($a[$player1]=="Scissors" && $a[$player2]=="Scissors"){
			echo "Same choice: It is a draw...";
			$draw++;
			echo "<pre>";
		}

		if($a[$player1]=="Rock" && $a[$player2]=="Paper"){
			
			echo "Paper covers Rock: Player B wins...";
			$countB++;
			echo "<pre>";
		}if($a[$player1]=="Rock" && $a[$player2] == "Scissors"){
		echo "Rock crushes Scissors Player A wins..";
		$countA++;
		echo "<pre>";
		} 
		

		 if($a[$player1]=="Rock" && $a[$player2]=="Rock"){
			echo "Same choice: It is a draw...";
				$draw++;
			echo "<pre>";
		}
		echo " ";
		echo "<pre>";
	}


		echo "player A: ".$countA." wins";
		echo "<pre>";
		echo "Player B: ".$countB." wins";
		echo "<pre>";
		echo  $draw. ' Games were A draw';
	




?>
