<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
    espaco{
        padding: 10%;
    }
    </style>
</head>
<body>

    <div class="container">
        <div class="row espaco test-black">
            <div class="col-xl-4 col-md-6 offset-md-3"
            style="margin-top: 12%">
                <div class="card-header bg-primary border espaco white">Validação de Login</div>
                <div class="card-body border">
                    <form method="POST" action="">
                        <div class="row">
                            <div class="col-md-8 offset-md-2 col-xl-12">
                                <label>Usuário</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 offset-md-2 col-xl-12">
                                <input class="text" name="login"></input>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 offset-md-2 col-xl-12">
                                <label>Senha</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 offset-md-2 col-xl-12">
                                <input class="text" name="senha"></input>
                            </div>
                        </div>

                        <div class="row" style="margin-top: 15px;">
                            <div class="col-md-8 offset-md-2 col-xl-12">
                                <input class="btn btn-success" type="submit" name="enviar" value="Enviar"></input>
                                <input class="btn btn-light" type="reset" name="enviar" value="Cancelar"></input>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
        crossorigin="anonymous"></script>

</body>
</html>