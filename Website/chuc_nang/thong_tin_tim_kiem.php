<?php

	
	$data=null;
	$sm=postIndex("submit");
	$tk = postIndex("tu_khoa");
	$list=postIndex("list");
	
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


<link rel="stylesheet" href="../css/bootstrap.min.css">
 <script src="../js/jquery-3.2.1.min.js"></script>
 <script src="../js/bootstrap.min.js"></script>


<body>
<div class="table-responsive">
	<table class="table" width="726" bordercolorlight="#000000" >
       <thead>
    	<tr>
        	<th width="340">Tên tài liệu</th>
            <th width="116">Loại tài liệu</th>
            <th width="248">Nhà xuất bản</th>
        </tr>
       </thead>
        <?php
		//echo $sm;
			if($sm!=$err){
				foreach($data as $v){
					$ten=$v['TenTaiLieu'];
					$loai=$v['LoaiTaiLieu'];
					$nxb= $v['NXB'] ;
					?>
					<tr>
						<td> <?php echo "$ten" ?></td>
						<td><?php echo "$loai" ?></td>
						<td><?php echo "$nxb" ?></td>
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