<?php
	header("content-type:text/html;charset=utf-8"); 
	include  "./PHPExcel.php";
	
	$inputFileName = "./金文职务.xlsx";//数据表格文件
	date_default_timezone_set("PRC");
	
	
	$con = mysqli_connect("localhost","root","root");//连接数据库
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	mysqli_select_db("jsjgj", $con);//数据库
	
	
	// 读取excel文件
	try {
		$inputFileType = PHPExcel_IOFactory::identify($inputFileName);
		$objReader = PHPExcel_IOFactory::createReader($inputFileType);
		$objPHPExcel = $objReader->load($inputFileName);
	} catch(Exception $e) {
		die("加载文件发生错误");
	}

	// 确定要读取的sheet
	$sheet = $objPHPExcel->getSheet(0);
	$highestRow = $sheet->getHighestRow();
	$highestColumn = $sheet->getHighestColumn();


   // $sql = "insert into school(`name`, `level`, `created_at`, `updated_at`, `is_delete`) values('";
   //$sql = "update tadmin set LPOSITION='金文大厦食堂' ";
	//echo $sql;
	//不想读取表头就设置$row的初始值为2,从第二行开始读
	// 获取一行的数据
	for ($row = 2; $row <= $highestRow; $row++){
		// Read a row of data into an array
		$rowData = $sheet->rangeToArray('A'.$row . ':' . $highestColumn . $row, NULL, false, FALSE);
		//拼接sql
		//print_r ($rowData[0][3]);
        //$sql = "insert into school(`name`, `level`, `created_at`, `updated_at`, `is_delete`) values('";
		//$sql = $sql.$rowData[0][3]."', 1, '2020-02-07 00:00:00', '2020-02-07 00:00:00', 0);";
		   $sql = "update tadmin set LPOSITION='金文大厦食堂' ";
		   $sql = $sql."where REAL_NAME='".$rowData[0][1]."' and LPOSITION='区政府机关大院食堂';";
			echo $sql;
	//var_dump($rowData);
	echo "<br/>";
	}
	mysqli_close($con);
