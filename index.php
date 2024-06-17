<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main>
        <!-- Form Section-->
        <section class="container mt-4 m-auto col-lg-7 col-md-9 col-11">
            <h1 class="text-center mb-5 text-primary fw-bold">PHP BADWORDS</h1>
            <form action="badwords.php" method="GET">
                <!-- Word Input -->
                <div class="mb-3 ">
                    <label for="exampleFormControlInput1" class="form-label">Censored Word</label>
                    <input type="text" class="form-control" name="word" id="wordToCensor" placeholder="Word to censor">
                </div>
                <!-- Text Area -->
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Text to check</label>
                    <textarea class="form-control" name="text" id="textToCheck" rows="3"></textarea>
                </div>
                <!-- Submit Button -->
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </section>
    </main>
</body>

</html>