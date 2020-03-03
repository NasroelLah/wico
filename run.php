<?php
include('function.php');

function survey($androidid, $device){
	$data = 'idTmoney=195260754415&id_question=1&answer=10&androidID='.$androidid.'&deviceUID='.$device;
	$answer1 = request("/api/feedback_answer", $data);
	print_r($answer1);
	if ($answer1['error'] == 0) {
		$data = 'idTmoney=195260754415&id_question=2&answer=Lainnya&androidID='.$androidid.'&deviceUID='.$device;
		$answer2 = request("/api/feedback_answer", $data);
		print_r($answer2);
		if ($answer2['error'] == 0) {
			$data = 'idTmoney=195260754415&id_question=3&answer=pengen%20aja&androidID='.$androidid.'&deviceUID='.$device;
			$answer3 = request("/api/feedback_answer", $data);
			print_r($answer3);
		}
	}
	
}
for ($i=0; $i < 99999999999999; $i++) { 
	$androidid = "ac7c9a".rand(1000000000,9999999999);
	$device = "edb89449-dbee-43b1-be4e-a4".rand(1000000000,9999999999);
	$gas = survey($androidid, $device);
}
?>
