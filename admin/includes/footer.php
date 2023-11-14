<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
	<!-- add new user  -->
	<script src="js/users/add_new_user.js"></script>
	<!-- edit user -->
	<script src="js/users/edit_user.js"></script>
	<!-- add new product -->
	<script src="js/products/add_new_product.js"></script>
	<!-- edit product -->
	<script src="js/products/edit_product.js"></script>
	<!-- add new category -->
	<script src="js/category/add_new_category.js"></script>
	<!-- edit category -->
	<script src="js/category/edit_category.js"></script>	
	<!-- add new brand -->
	<script src="js/brand/add_new_brand.js"></script>
	<!-- edit brand -->
	<script src="js/brand/edit_brand.js"></script>
	<!-- update messages -->
	<script src="js/messages/update_message.js"></script>


		
</body>
</html>