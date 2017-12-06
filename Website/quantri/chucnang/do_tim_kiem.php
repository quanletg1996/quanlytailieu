<?php
	if(!isset($_SESSION)) session_start();
	if(!isset($_SESSION["admin"]))
	{
		exit;
	}
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
<script language = JavaScript>

function getMa()
{
	document.getElementById('id01').style.display='block';
	var checkbox = document.getElementsByName("radio");
	for (var i = 0; i < checkbox.length; i++){
	   if (checkbox[i].checked == true){
		   document.getElementById('btnOk').value=checkbox[i].value;
	   }
	}
}

</script>
<?php require "giaodien/xoa.php"?>    	
  <div id="id01" class="modal" align="center">
     <div class="col-xs-12 col-md-12">
        <form class="modal-content animate" action="chucnang/xoa.php" method="post" style="height:60%;width:60%">
            <div class="container" style="width:90%" align="left">
               <label><b>Bạn có chắc muốn xoá tài liệu này!!</b></label>
            </div>
            <div class="container" style="background-color:#f1f1f1;width:90%">
               <button name="btnOk" id="btnOk" type="submit" onClick="document.getElementById('id01').style.display='none'" class="btn cancelbtn">Ok</button>
               <button type="button" onClick="document.getElementById('id01').style.display='none'" class="btn cancelbtn">Cancel</button>
            </div>
         </form>
       </div>
   </div>

<!-- Bảng hiển thị-->
<div class="table-responsive" style="height:300px; margin-bottom:20px" >
	<table class="table" width="726" bordercolorlight="#000000" >
       <thead>
    	<tr>
        	<th width="300">Tên tài liệu</th>
            <th width="96">Loại tài liệu</th>
            <th width="228">Nhà xuất bản</th>
            <th width="60">Sửa</th>
            <th width="60">Xoá</th>
        </tr>
       </thead>
        <?php
		//echo $sm;
		$matl;
			if($sm!=$err){
				foreach($data as $v){
					$ma=$v['MaTaiLieu'];
					$ten=$v['TenTaiLieu'];
					$loai=$v['LoaiTaiLieu'];
					$nxb= $v['NXB'] ;
					?>
					<tr>
						<td> <?php echo "$ten" ?></td>
						<td><?php echo "$loai" ?></td>
						<td><?php echo "$nxb" ?></td>
                        <td>
                        	<form action="giaodien/sua.php" method="post">
                            	<button type="submit" name="btnSua" class="btn" value="<?php echo $ma ?>" style="width:auto;" style="border-radius:5px">
                                Sửa</button>
                        	</form>
                        </td>
                        <td>
                            <button class="btn" name="btnXoa" id="btnXoa" onClick="getMa();" style="width:50px;height:35px;border-radius:5px; padding:0 auto">
                            	<label>Xoá
  									<input type="radio" name="radio" value="<?php echo $ma ?>" hidden="hidden">
  									<span class="checkmark" style="margin:0 auto"></span>
								</label>
                            </button>
                        </td>
                    </tr>
                        	
                        
					<?php
				   // print_r($v);
				}
			}else {}
		?>
    </table>
    
<!-- Xác nhận xoá-->
   
<!-- end xác nhận xoá-->
<!-- Xoá-->


</div>
</body>
</html>