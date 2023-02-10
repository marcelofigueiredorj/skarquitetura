<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário de Contato</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col">
				<h1 class="my-5">Formulário de Contato</h1>
				<form action="enviar.php" method="POST">
					<div class="mb-3">
						<input type="text" name="nome" placeholder="Digite seu nome" class="form-control">
					</div>
					<div class="mb-3">
						<input type="email" name="email" placeholder="Digite seu e-mail" class="form-control">
					</div>
					<div class="mb-3">
						<textarea rows="3" name="mensagem" placeholder="Digite sua mensagem" class="form-control"></textarea>
					</div>
					<div class="mb-3">
						<button type="submit" class="btn btn-primary">Enviar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>