<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<script>
	$.widget.bridge('uibutton',$.ui.button);
</script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="bower_components/jquery-knop/dist/jquery.knop.min.js"></script>
<script src="bower_components/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/demo.js"></script>
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="dist/js/pages/dashboard.js"</script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>

<script>
	$(function () {
		$("#barang").dataTable({
			'pagging'		:true,
			'lengthChange'	:false,
			'searching'		:false,
			'ordering'		:true,
			'info'			:true,
			'autoWidth'		:false
			({"placeholder":"please select"});
		})
	})
</script>
<script>

$('.select2').select2()

	//Date picker
    $('#datepicker').datepicker({
      autoclose: true,
	  format	: "yyyy/mm/dd"
    })

    $('#datepicker1').datepicker({
      autoclose: true,
	  format	: "yyyy/mm/dd"
    })

    function addbarang($frm){
		$.ajax({
			url:"lib/cart.php?aksi=add",
			type:"post",
			data:$($frm).serialize(),
			success:function(data){
				$(".data-barang").load("lib/v_cart.php");
				//alert(data);
			}
		})
	}

	function delbarang($id){
		var id="id="+$id;
		var conf = confirm("Data akan terhapus");
		if(conf==true){
			$.ajax({
				url: "lib/cart.php?aksi=dl",
				type: "post",
				data: id,
				success:function(data){
					$(".data-barang").load("lib/v_cart.php");
				}
			})
		}
	}
	
</script>