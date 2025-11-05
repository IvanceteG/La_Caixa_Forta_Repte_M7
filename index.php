<!DOCTYPE html>
<html lang="ca">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sombrero Seleccionador de Hogwarts</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center mb-4">Benvinguts a Hogwarts</h1>
    <div class="card p-4 shadow-lg">
        <form action="bienvenida.php" method="POST">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom:</label>
                <input type="text" name="nom" id="nom" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="cognoms" class="form-label">Cognoms:</label>
                <input type="text" name="cognoms" id="cognoms" class="form-control" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Deixa que el Sombrero et seleccioni!</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
