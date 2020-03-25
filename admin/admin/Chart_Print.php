<!DOCTYPE HTML>
<html>
<head>
		<script type="text/javascript">
		window.onload = window.print () {
			var chart = new CanvasJS.Chart("chartContainer", {
			
			<?php 
				
				date_default_timezone_set('Asia/Jakarta');
				$tahun = date ("Y") ; 

				?>
				
				title: {
					text: "Grafik Surat Masuk dan Surat Keluar Tahun <?php echo $tahun; ?>",
					fontSize: 35
				},
				
				
				animationEnabled: true,
				axisX: {
				
					gridColor: "Silver",
					tickColor: "silver",
					valueFormatString: "Bulan 00"
			
				},
				axisY: {
				
					gridColor: "Silver",
					tickColor: "silver"
			
				},
				
				data: [{
					type: "column",
					showInLegend: true,
					lineThickness: 2,
					name: "surat masuk",
					markerType: "square",
					color: "#03586A",
					dataPoints: [
					 
					 <?php 
					date_default_timezone_set('Asia/Jakarta');
					include "../koneksi.php";
					$tahun = date ("Y") ; 
					
					$query1 = "SELECT COUNT(id_surat_masuk) FROM surat_masuk where MONTH(tanggal_entri)='1' AND YEAR(tanggal_entri)='$tahun'";
					$sql1 = mysqli_query ($conn,$query1);
					$data1 = mysqli_fetch_row($sql1);
					$total1 = $data1[0];
					if($total1==null){
					$total1 = 0;
					}
					
					$query2 = "SELECT COUNT(id_surat_masuk) FROM surat_masuk where MONTH(tanggal_entri)='2' AND YEAR(tanggal_entri)='$tahun'";
					$sql2 = mysqli_query ($conn,$query2);
					$data2 = mysqli_fetch_row($sql2);
					$total2 = $data2[0];
					if($total2==null){
					$total2 = 0;
					}
					
					$query3 = "SELECT COUNT(id_surat_masuk) FROM surat_masuk where MONTH(tanggal_entri)='3' AND YEAR(tanggal_entri)='$tahun'";
					$sql3 = mysqli_query ($conn,$query3);
					$data3 = mysqli_fetch_row($sql3);
					$total3 = $data3[0];
					if($total3==null){
					$total3 = 0;
					}
					
					$query4 = "SELECT COUNT(id_surat_masuk) FROM surat_masuk where MONTH(tanggal_entri)='4' AND YEAR(tanggal_entri)='$tahun'";
					$sql4 = mysqli_query ($conn,$query4);
					$data4 = mysqli_fetch_row($sql4);
					$total4 = $data4[0];
					if($total4==null){
					$total4 = 0;
					}
					
					$query5 = "SELECT COUNT(id_surat_masuk) FROM surat_masuk where MONTH(tanggal_entri)='5' AND YEAR(tanggal_entri)='$tahun'";
					$sql5 = mysqli_query ($conn,$query5);
					$data5 = mysqli_fetch_row($sql5);
					$total5 = $data5[0];
					if($total5==null){
					$total5 = 0;
					}
					
					$query6 = "SELECT COUNT(id_surat_masuk) FROM surat_masuk where MONTH(tanggal_entri)='6' AND YEAR(tanggal_entri)='$tahun'";
					$sql6 = mysqli_query ($conn,$query6);
					$data6 = mysqli_fetch_row($sql6);
					$total6 = $data6[0];
					if($total6==null){
					$total6 = 0;
					}
					
					$query7 = "SELECT COUNT(id_surat_masuk) FROM surat_masuk where MONTH(tanggal_entri)='7' AND YEAR(tanggal_entri)='$tahun'";
					$sql7 = mysqli_query ($conn,$query7);
					$data7 = mysqli_fetch_row($sql7);
					$total7 = $data7[0];
					if($total7==null){
					$total7 = 0;
					}
					
					$query8 = "SELECT COUNT(id_surat_masuk) FROM surat_masuk where MONTH(tanggal_entri)='8' AND YEAR(tanggal_entri)='$tahun'";
					$sql8 = mysqli_query ($conn,$query8);
					$data8 = mysqli_fetch_row($sql8);
					$total8 = $data8[0];
					if($total8==null){
					$total8 = 0;
					}
					
					$query9 = "SELECT COUNT(id_surat_masuk) FROM surat_masuk where MONTH(tanggal_entri)='9' AND YEAR(tanggal_entri)='$tahun'";
					$sql9 = mysqli_query ($conn,$query9);
					$data9 = mysqli_fetch_row($sql9);
					$total9 = $data9[0];
					if($total9==null){
					$total9 = 0;
					}
					
					$query10 = "SELECT COUNT(id_surat_masuk) FROM surat_masuk where MONTH(tanggal_entri)='10' AND YEAR(tanggal_entri)='$tahun'";
					$sql10 = mysqli_query ($conn,$query10);
					$data10 = mysqli_fetch_row($sql10);
					$total10 = $data10[0];
					if($total10==null){
					$total10 = 0;
					}
					
					$query11 = "SELECT COUNT(id_surat_masuk) FROM surat_masuk where MONTH(tanggal_entri)='11' AND YEAR(tanggal_entri)='$tahun'";
					$sql11 = mysqli_query ($conn,$query11);
					$data11 = mysqli_fetch_row($sql11);
					$total11 = $data11[0];
					if($total11==null){
					$total11 = 0;
					}
					
					$query12 = "SELECT COUNT(id_surat_masuk) FROM surat_masuk where MONTH(tanggal_entri)='12' AND YEAR(tanggal_entri)='$tahun'";
					$sql12 = mysqli_query ($conn,$query12);
					$data12 = mysqli_fetch_row($sql12);
					$total12 = $data12[0];
					if($total12==null){
					$total12 = 0;
					}
					
					echo "{ x: 1, y: $total1 },";
					echo "{ x: 2, y: $total2 },";
					echo "{ x: 3, y: $total3 },";
					echo "{ x: 4, y: $total4 },";
					echo "{ x: 5, y: $total5 },";
					echo "{ x: 6, y: $total6 },";
					echo "{ x: 7, y: $total7 },";
					echo "{ x: 8, y: $total8 },";
					echo "{ x: 9, y: $total9 },";
					echo "{ x: 10, y: $total10 },";
					echo "{ x: 11, y: $total11 },";
					echo "{ x: 12, y: $total12 }";
					
					
					?>
					 
					]
				}, {
					type: "column",
					showInLegend: true,
					lineThickness: 2,
					name: "surat keluar",
					markerType: "square",
					color: "#20B2AA",
					dataPoints: [
					 <?php 
					date_default_timezone_set('Asia/Jakarta');
					include "../koneksi.php";
					$tahun = date ("Y") ; 
					
					$query1 = "SELECT COUNT(id_surat_keluar) FROM surat_keluar where MONTH(tanggal_entri)='1' AND YEAR(tanggal_entri)='$tahun' ";
					$sql1 = mysqli_query ($conn,$query1);
					$data1 = mysqli_fetch_row($sql1);
					$total1 = $data1[0];
					if($total1==null){
					$total1 = 0;
					}
					
					$query2 = "SELECT COUNT(id_surat_keluar) FROM surat_keluar where MONTH(tanggal_entri)='2' AND YEAR(tanggal_entri)='$tahun'";
					$sql2 = mysqli_query ($conn,$query2);
					$data2 = mysqli_fetch_row($sql2);
					$total2 = $data2[0];
					if($total2==null){
					$total2 = 0;
					}
					
					$query3 = "SELECT COUNT(id_surat_keluar) FROM surat_keluar where MONTH(tanggal_entri)='3' AND YEAR(tanggal_entri)='$tahun'";
					$sql3 = mysqli_query ($conn,$query3);
					$data3 = mysqli_fetch_row($sql3);
					$total3 = $data3[0];
					if($total3==null){
					$total3 = 0;
					}
					
					$query4 = "SELECT COUNT(id_surat_keluar) FROM surat_keluar where MONTH(tanggal_entri)='4' AND YEAR(tanggal_entri)='$tahun'";
					$sql4 = mysqli_query ($conn,$query4);
					$data4 = mysqli_fetch_row($sql4);
					$total4 = $data4[0];
					if($total4==null){
					$total4 = 0;
					}
					
					$query5 = "SELECT COUNT(id_surat_keluar) FROM surat_keluar where MONTH(tanggal_entri)='5' AND YEAR(tanggal_entri)='$tahun'";
					$sql5 = mysqli_query ($conn,$query5);
					$data5 = mysqli_fetch_row($sql5);
					$total5 = $data5[0];
					if($total5==null){
					$total5 = 0;
					}
					
					$query6 = "SELECT COUNT(id_surat_keluar) FROM surat_keluar where MONTH(tanggal_entri)='6' AND YEAR(tanggal_entri)='$tahun'";
					$sql6 = mysqli_query ($conn,$query6);
					$data6 = mysqli_fetch_row($sql6);
					$total6 = $data6[0];
					if($total6==null){
					$total6 = 0;
					}
					
					$query7 = "SELECT COUNT(id_surat_keluar) FROM surat_keluar where MONTH(tanggal_entri)='7' AND YEAR(tanggal_entri)='$tahun'";
					$sql7 = mysqli_query ($conn,$query7);
					$data7 = mysqli_fetch_row($sql7);
					$total7 = $data7[0];
					if($total7==null){
					$total7 = 0;
					}
					
					$query8 = "SELECT COUNT(id_surat_keluar) FROM surat_keluar where MONTH(tanggal_entri)='8' AND YEAR(tanggal_entri)='$tahun'";
					$sql8 = mysqli_query ($conn,$query8);
					$data8 = mysqli_fetch_row($sql8);
					$total8 = $data8[0];
					if($total8==null){
					$total8 = 0;
					}
					
					$query9 = "SELECT COUNT(id_surat_keluar) FROM surat_keluar where MONTH(tanggal_entri)='9' AND YEAR(tanggal_entri)='$tahun'";
					$sql9 = mysqli_query ($conn,$query9);
					$data9 = mysqli_fetch_row($sql9);
					$total9 = $data9[0];
					if($total9==null){
					$total9 = 0;
					}
					
					$query10 = "SELECT COUNT(id_surat_keluar) FROM surat_keluar where MONTH(tanggal_entri)='10' AND YEAR(tanggal_entri)='$tahun'";
					$sql10 = mysqli_query ($conn,$query10);
					$data10 = mysqli_fetch_row($sql10);
					$total10 = $data10[0];
					if($total10==null){
					$total10 = 0;
					}
					
					$query11 = "SELECT COUNT(id_surat_keluar) FROM surat_keluar where MONTH(tanggal_entri)='11' AND YEAR(tanggal_entri)='$tahun'";
					$sql11 = mysqli_query ($conn,$query11);
					$data11 = mysqli_fetch_row($sql11);
					$total11 = $data11[0];
					if($total11==null){
					$total11 = 0;
					}
					
					$query12 = "SELECT COUNT(id_surat_keluar) FROM surat_keluar where MONTH(tanggal_entri)='12' AND YEAR(tanggal_entri)='$tahun'";
					$sql12 = mysqli_query ($conn,$query12);
					$data12 = mysqli_fetch_row($sql12);
					$total12 = $data12[0];
					if($total12==null){
					$total12 = 0;
					}
					
					echo "{ x: 1, y: $total1 },";
					echo "{ x: 2, y: $total2 },";
					echo "{ x: 3, y: $total3 },";
					echo "{ x: 4, y: $total4 },";
					echo "{ x: 5, y: $total5 },";
					echo "{ x: 6, y: $total6 },";
					echo "{ x: 7, y: $total7 },";
					echo "{ x: 8, y: $total8 },";
					echo "{ x: 9, y: $total9 },";
					echo "{ x: 10, y: $total10 },";
					echo "{ x: 11, y: $total11 },";
					echo "{ x: 12, y: $total12 }";
					
					
					?>
					]
				}]
			});
			chart.render();
		}
	</script>
	<script src="../chart/canvasjs.min.js"></script>
	<title></title>
</head>
<body>

<div id="chartContainer" style="height: 500px; width: 100%;"></div>
					<br>
</body>
</html>