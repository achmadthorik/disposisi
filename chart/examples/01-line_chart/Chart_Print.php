<!DOCTYPE HTML>
<html>
<head>
		<script type="text/javascript">
		window.onload = function () {
			var chart = new CanvasJS.Chart("chartContainer", {
			
			<?php 
				
				date_default_timezone_set('Asia/Jakarta');
				$tahun = date ("Y") ; 

				?>
				
				title: {
					text: "Grafik Penjualan Tiket Pesawat dan Kereta Api Tahun <?php echo $tahun; ?>",
					fontSize: 35
				},
				
				
				animationEnabled: false,
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
					name: "Plane",
					markerType: "square",
					color: "#F08080",
					dataPoints: [
					 
					 <?php 
					date_default_timezone_set('Asia/Jakarta');
					include "Koneksi.php";
					$tahun = date ("Y") ; 
					
					$query1 = "SELECT COUNT(ID_RESERVATION) FROM reservation where MONTH(RESERVATION_DATE)='1' AND YEAR(RESERVATION_DATE)='$tahun' AND TRANSPORTATION_TYPE='Plane' ";
					$sql1 = mysqli_query ($koneksi,$query1);
					$data1 = mysqli_fetch_row($sql1);
					$total1 = $data1[0];
					if($total1==null){
					$total1 = 0;
					}
					
					$query2 = "SELECT COUNT(ID_RESERVATION) FROM reservation where MONTH(RESERVATION_DATE)='2' AND YEAR(RESERVATION_DATE)='$tahun' AND TRANSPORTATION_TYPE='Plane' ";
					$sql2 = mysqli_query ($koneksi,$query2);
					$data2 = mysqli_fetch_row($sql2);
					$total2 = $data2[0];
					if($total2==null){
					$total2 = 0;
					}
					
					$query3 = "SELECT COUNT(ID_RESERVATION) FROM reservation where MONTH(RESERVATION_DATE)='3' AND YEAR(RESERVATION_DATE)='$tahun' AND TRANSPORTATION_TYPE='Plane' ";
					$sql3 = mysqli_query ($koneksi,$query3);
					$data3 = mysqli_fetch_row($sql3);
					$total3 = $data3[0];
					if($total3==null){
					$total3 = 0;
					}
					
					$query4 = "SELECT COUNT(ID_RESERVATION) FROM reservation where MONTH(RESERVATION_DATE)='4' AND YEAR(RESERVATION_DATE)='$tahun' AND TRANSPORTATION_TYPE='Plane' ";
					$sql4 = mysqli_query ($koneksi,$query4);
					$data4 = mysqli_fetch_row($sql4);
					$total4 = $data4[0];
					if($total4==null){
					$total4 = 0;
					}
					
					$query5 = "SELECT COUNT(ID_RESERVATION) FROM reservation where MONTH(RESERVATION_DATE)='5' AND YEAR(RESERVATION_DATE)='$tahun' AND TRANSPORTATION_TYPE='Plane' ";
					$sql5 = mysqli_query ($koneksi,$query5);
					$data5 = mysqli_fetch_row($sql5);
					$total5 = $data5[0];
					if($total5==null){
					$total5 = 0;
					}
					
					$query6 = "SELECT COUNT(ID_RESERVATION) FROM reservation where MONTH(RESERVATION_DATE)='6' AND YEAR(RESERVATION_DATE)='$tahun' AND TRANSPORTATION_TYPE='Plane' ";
					$sql6 = mysqli_query ($koneksi,$query6);
					$data6 = mysqli_fetch_row($sql6);
					$total6 = $data6[0];
					if($total6==null){
					$total6 = 0;
					}
					
					$query7 = "SELECT COUNT(ID_RESERVATION) FROM reservation where MONTH(RESERVATION_DATE)='7' AND YEAR(RESERVATION_DATE)='$tahun' AND TRANSPORTATION_TYPE='Plane' ";
					$sql7 = mysqli_query ($koneksi,$query7);
					$data7 = mysqli_fetch_row($sql7);
					$total7 = $data7[0];
					if($total7==null){
					$total7 = 0;
					}
					
					$query8 = "SELECT COUNT(ID_RESERVATION) FROM reservation where MONTH(RESERVATION_DATE)='8' AND YEAR(RESERVATION_DATE)='$tahun' AND TRANSPORTATION_TYPE='Plane' ";
					$sql8 = mysqli_query ($koneksi,$query8);
					$data8 = mysqli_fetch_row($sql8);
					$total8 = $data8[0];
					if($total8==null){
					$total8 = 0;
					}
					
					$query9 = "SELECT COUNT(ID_RESERVATION) FROM reservation where MONTH(RESERVATION_DATE)='9' AND YEAR(RESERVATION_DATE)='$tahun' AND TRANSPORTATION_TYPE='Plane' ";
					$sql9 = mysqli_query ($koneksi,$query9);
					$data9 = mysqli_fetch_row($sql9);
					$total9 = $data9[0];
					if($total9==null){
					$total9 = 0;
					}
					
					$query10 = "SELECT COUNT(ID_RESERVATION) FROM reservation where MONTH(RESERVATION_DATE)='10' AND YEAR(RESERVATION_DATE)='$tahun' AND TRANSPORTATION_TYPE='Plane' ";
					$sql10 = mysqli_query ($koneksi,$query10);
					$data10 = mysqli_fetch_row($sql10);
					$total10 = $data10[0];
					if($total10==null){
					$total10 = 0;
					}
					
					$query11 = "SELECT COUNT(ID_RESERVATION) FROM reservation where MONTH(RESERVATION_DATE)='11' AND YEAR(RESERVATION_DATE)='$tahun' AND TRANSPORTATION_TYPE='Plane' ";
					$sql11 = mysqli_query ($koneksi,$query11);
					$data11 = mysqli_fetch_row($sql11);
					$total11 = $data11[0];
					if($total11==null){
					$total11 = 0;
					}
					
					$query12 = "SELECT COUNT(ID_RESERVATION) FROM reservation where MONTH(RESERVATION_DATE)='12' AND YEAR(RESERVATION_DATE)='$tahun' AND TRANSPORTATION_TYPE='Plane' ";
					$sql12 = mysqli_query ($koneksi,$query12);
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
					name: "Train",
					markerType: "square",
					color: "#20B2AA",
					dataPoints: [
					 <?php 
					date_default_timezone_set('Asia/Jakarta');
					include "Koneksi.php";
					$tahun = date ("Y") ; 
					
					$query1 = "SELECT COUNT(ID_RESERVATION) FROM reservation where MONTH(RESERVATION_DATE)='1' AND YEAR(RESERVATION_DATE)='$tahun' AND TRANSPORTATION_TYPE='Train' ";
					$sql1 = mysqli_query ($koneksi,$query1);
					$data1 = mysqli_fetch_row($sql1);
					$total1 = $data1[0];
					if($total1==null){
					$total1 = 0;
					}
					
					$query2 = "SELECT COUNT(ID_RESERVATION) FROM reservation where MONTH(RESERVATION_DATE)='2' AND YEAR(RESERVATION_DATE)='$tahun' AND TRANSPORTATION_TYPE='Train'";
					$sql2 = mysqli_query ($koneksi,$query2);
					$data2 = mysqli_fetch_row($sql2);
					$total2 = $data2[0];
					if($total2==null){
					$total2 = 0;
					}
					
					$query3 = "SELECT COUNT(ID_RESERVATION) FROM reservation where MONTH(RESERVATION_DATE)='3' AND YEAR(RESERVATION_DATE)='$tahun' AND TRANSPORTATION_TYPE='Train'";
					$sql3 = mysqli_query ($koneksi,$query3);
					$data3 = mysqli_fetch_row($sql3);
					$total3 = $data3[0];
					if($total3==null){
					$total3 = 0;
					}
					
					$query4 = "SELECT COUNT(ID_RESERVATION) FROM reservation where MONTH(RESERVATION_DATE)='4' AND YEAR(RESERVATION_DATE)='$tahun' AND TRANSPORTATION_TYPE='Train'";
					$sql4 = mysqli_query ($koneksi,$query4);
					$data4 = mysqli_fetch_row($sql4);
					$total4 = $data4[0];
					if($total4==null){
					$total4 = 0;
					}
					
					$query5 = "SELECT COUNT(ID_RESERVATION) FROM reservation where MONTH(RESERVATION_DATE)='5' AND YEAR(RESERVATION_DATE)='$tahun' AND TRANSPORTATION_TYPE='Train'";
					$sql5 = mysqli_query ($koneksi,$query5);
					$data5 = mysqli_fetch_row($sql5);
					$total5 = $data5[0];
					if($total5==null){
					$total5 = 0;
					}
					
					$query6 = "SELECT COUNT(ID_RESERVATION) FROM reservation where MONTH(RESERVATION_DATE)='6' AND YEAR(RESERVATION_DATE)='$tahun' AND TRANSPORTATION_TYPE='Train'";
					$sql6 = mysqli_query ($koneksi,$query6);
					$data6 = mysqli_fetch_row($sql6);
					$total6 = $data6[0];
					if($total6==null){
					$total6 = 0;
					}
					
					$query7 = "SELECT COUNT(ID_RESERVATION) FROM reservation where MONTH(RESERVATION_DATE)='7' AND YEAR(RESERVATION_DATE)='$tahun' AND TRANSPORTATION_TYPE='Train'";
					$sql7 = mysqli_query ($koneksi,$query7);
					$data7 = mysqli_fetch_row($sql7);
					$total7 = $data7[0];
					if($total7==null){
					$total7 = 0;
					}
					
					$query8 = "SELECT COUNT(ID_RESERVATION) FROM reservation where MONTH(RESERVATION_DATE)='8' AND YEAR(RESERVATION_DATE)='$tahun' AND TRANSPORTATION_TYPE='Train'";
					$sql8 = mysqli_query ($koneksi,$query8);
					$data8 = mysqli_fetch_row($sql8);
					$total8 = $data8[0];
					if($total8==null){
					$total8 = 0;
					}
					
					$query9 = "SELECT COUNT(ID_RESERVATION) FROM reservation where MONTH(RESERVATION_DATE)='9' AND YEAR(RESERVATION_DATE)='$tahun' AND TRANSPORTATION_TYPE='Train'";
					$sql9 = mysqli_query ($koneksi,$query9);
					$data9 = mysqli_fetch_row($sql9);
					$total9 = $data9[0];
					if($total9==null){
					$total9 = 0;
					}
					
					$query10 = "SELECT COUNT(ID_RESERVATION) FROM reservation where MONTH(RESERVATION_DATE)='10' AND YEAR(RESERVATION_DATE)='$tahun' AND TRANSPORTATION_TYPE='Train'";
					$sql10 = mysqli_query ($koneksi,$query10);
					$data10 = mysqli_fetch_row($sql10);
					$total10 = $data10[0];
					if($total10==null){
					$total10 = 0;
					}
					
					$query11 = "SELECT COUNT(ID_RESERVATION) FROM reservation where MONTH(RESERVATION_DATE)='11' AND YEAR(RESERVATION_DATE)='$tahun' AND TRANSPORTATION_TYPE='Train'";
					$sql11 = mysqli_query ($koneksi,$query11);
					$data11 = mysqli_fetch_row($sql11);
					$total11 = $data11[0];
					if($total11==null){
					$total11 = 0;
					}
					
					$query12 = "SELECT COUNT(ID_RESERVATION) FROM reservation where MONTH(RESERVATION_DATE)='12' AND YEAR(RESERVATION_DATE)='$tahun' AND TRANSPORTATION_TYPE='Train'";
					$sql12 = mysqli_query ($koneksi,$query12);
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
	<script src="../../canvasjs.min.js"></script>
	<title>ttt</title>
</head>
<body>

	<div id="chartContainer" style="height: 500px; width: 100%;"></div>
	<br>

</body>
</html>

<script>
	// window.print();
	// setTimeout(function() {window.location.href='../index_admin.php?a=home'},15);
</script>