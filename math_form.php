<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Math Operations Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container shadow rounded mt-5 p-3 fs-1 bg-secondary-subtle">
        <h1 class="fs-1 fw-bold">Math Operations</h1>
        <form action="process_math.php" method="post">
            <label for="number1">Number 1:</label>
            <input type="text" id="number1" name="number1" required>
            <br><br>

            <label for="number2">Number 2:</label>
            <input type="text" id="number2" name="number2" required>
            <br><br>

            <label for="operation">Select Operation:</label>
            <select id="operation" name="operation" required>
                <option value="addition">Addition</option>
                <option value="subtraction">Subtraction</option>
                <option value="multiplication">Multiplication</option>
                <option value="division">Division</option>
            </select>
            <br><br>

            <input type="submit" value="Calculate" class="btn btn-success fs-1 fw-bold">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>