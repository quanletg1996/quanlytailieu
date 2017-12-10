<?php
	require "../config/config.php";
	function loadClass2($className){
		require "../classes/".$className.".class.php";	
	}
	spl_autoload_register("loadClass2");
	function postIndex2($index, $value="")
	{
		if (!isset($_POST[$index]))	return $value;
		return $_POST[$index];
	}
	$data=null;
	$sm=postIndex2("submit");
	$tk = postIndex2("tu_khoa");
	$list=postIndex2("list");
	
	$err = "";
	
	$TL=new TaiLieu();
	if($list=='all'){
		$data=$TL->seach($tk);
		if($tk==$err){$data=$TL->getAll();}
	}else if($list=='monhoc'){
		$data=$TL->seachMH($tk);
	}
	else if($list=='giaovien'){
		$data=$TL->seachGV($tk);
	}
	//print_r($data);
	echo "<hr>";
?>



<body>
<div class="table-responsive" style="height:300px; margin-bottom:20px" >
	<table class="table" width="726" bordercolorlight="#000000" >
       <thead>
    	<tr>
        	<th width="290">Tên tài liệu</th>
            <th width="86">Loại tài liệu</th>
            <th width="218">Nhà xuất bản</th>
            <th width="30"></th>
            <th width="60"></th>
        </tr>
       </thead>
        <?php
		//echo $sm;
			if($sm!=$err){
				foreach($data as $v){
					$ten=$v['TenTaiLieu'];
					$loai=$v['LoaiTaiLieu'];
					$nxb= $v['NXB'] ;
					$file=$v['file'];
					?>
					<tr>
						<td> <?php echo "$ten" ?></td>
						<td><?php echo "$loai" ?></td>
						<td><?php echo "$nxb" ?></td>
                        <td><a href="../file/readfile.php?file=<?php echo $file ?>">Xem</a></td>
                        <td><a href="<?php echo "../file/$file" ?>">Download</a></td>
					</tr>
					<?php
				   // print_r($v);
				}
			}else {}
		?>
    </table>
</div>
</body>
</html>