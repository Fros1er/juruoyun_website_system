<?php
	include_once("../tools/jry_wb_includes.php");
	try
	{
		jry_wb_print_head("",true,true,false,array('use','manage','managebigdeal'),false);	
	}
	catch(jry_wb_exception $e)
	{
		echo $e->getMessage();
		exit();
	}
	if($_GET['action']=='list')
	{
		$conn=jry_wb_connect_database();
		$st = $conn->prepare('SELECT * FROM '.constant('jry_wb_database_mainpage').'bigdeal ORDER BY time');
		$st->execute();
		$i=0;
		$json=array();
		foreach($st->fetchAll()as $bigdeal)
			$json[]=array('bigdeal_id'=>(int)$bigdeal['bigdeal_id'],'name'=>$bigdeal['name'],'time'=>$bigdeal['time'],'enable'=>$bigdeal['enable']);
		echo json_encode($json);
	}
?>