<html>
	<head>
		<tittle>Calculadora<tittle>
	</head>
	<body>
		<h1>Calculadora de {{$nombre}}</h1></br>
		<form action="calController" method="get">
		<input type="hidden" value="{{$nombre}}">
		Numero 1:</br>
		<input type="number" name="num1"></br>
		Numero 2:</br>
		<input type="number" name="num2"></br>
		<input type="submit" name="opcion" value="Sumar"></br>
		<input type="submit" name="opcion" value="Restar"></br>
		<input type="submit" name="opcion" value="Multiplicar"></br>
		<input type="submit" name="opcion" value="Dividir"></br>
		</form>
		@if(isset($resultado))
			<h1>Resultado</h1>
			{{$resultado}}
		@endif
	</body>
</html>
