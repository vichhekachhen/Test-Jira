<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Jira</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Login</h3>
                    </div>
                    <div class="card-body">
                        <form action="result.php" method="post">
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="username" name="username">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" placeholder="password" name="pass">
                            </div>
                            <div class="mb-3 d-grid gap-2">
                                <button class="btn btn-primary btn-block" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>
</html>