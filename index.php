<html>
    <head>
		<title> Gráfico </title>
		<meta charset="UTF-8">
        <link rel="stylesheet" href="index.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

	</head>
    <body>
		<div class="container-fluid">
			<!-- conexão com o banco para o gráfico funcionario-->
			<?php
				include "conexao.php";							
			?>
			<section>

				<!-- Div que contem o gráfico de idade -->
				<div id="idade" class="card">
					<div class="card-body">
						<div class="card-header"> <b> Grafico de idade </b> </div>
						<!-- Div que recebe o gráfico -->
						<div id="piechart_idade" class="piechart"></div>
					</div>
				</div>

				<!-- Div que contem o gráfico de sexo -->
				<div id="sexo" class="card">
					<div class="card-body">
						<div class="card-header"> <b> Grafico de Sexo </b> </div>
						<!-- Div que recebe o gráfico -->
						<div id="piechart_sexo" class="piechart"></div>
					</div>
				</div>

			</section>
		</div>
    </body>

	<!-- Script para gráfico de idade -->
	<script type="text/javascript">
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawChart);

		function drawChart() {

			var data = google.visualization.arrayToDataTable([
			['Idade', 'valores'],
			/*Select no php que transforma o gráfico em algo dinâmico */
			<?php 
				$lista = mysqli_query($conn, "SELECT idade, COUNT(idade) as contador FROM aluno GROUP BY idade");
				
				while($coluna = mysqli_fetch_array($lista)) {
					$idade = $coluna['idade'];
					$contaIdade = $coluna['contador'];
					
					/*Echo com as variaveis idade e contador para formar a linha do array que o java script irá ler
						como o vetor deveria ser feito se fosse escrito na mão -> ['18 anos', 5],
						onde o primeiro item é o titulo e o segundo o valor
					*/
					echo "['$idade', $contaIdade],";
				}?>
			]);


			/* Opções de estilização do gráfico onde o title é um item obrigatório mesmo que sem valor passado*/
			var options = {
			title: ''
			};

			/*id da div onde o gráfico irá aparecer */
			var chart = new google.visualization.PieChart(document.getElementById('piechart_idade'));

			chart.draw(data, options);
		}
	</script>

	<!-- Script para gráfico de sexo -->
	<script type="text/javascript">
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawChart);

		function drawChart() {

			var data = google.visualization.arrayToDataTable([
			['Sexo', 'valores'],
			/*Select no php que transforma o gráfico em algo dinâmico */
			<?php 
				$lista = mysqli_query($conn, "SELECT sexo, COUNT(sexo) as contador FROM aluno GROUP BY sexo");
				
				while($coluna = mysqli_fetch_array($lista)) {
					$sexo = $coluna['sexo'];
					$contasexo = $coluna['contador'];

					/*Echo com as variaveis sexo e contador para formar a linha do array que o java script irá ler
						como o vetor deveria ser feito se fosse escrito na mão -> ['M', 5],
						onde o primeiro item é o titulo e o segundo o valor
					*/
					echo "['$sexo', $contasexo],";
				}?>
			]);
			
			/* Opções de estilização do gráfico onde o title é um item obrigatório mesmo que sem valor passado*/
			var options = {
			title: ''
			};

			/*id da div onde o gráfico irá aparecer */
			var chart = new google.visualization.PieChart(document.getElementById('piechart_sexo'));

			chart.draw(data, options);
		}
	</script>

</html>