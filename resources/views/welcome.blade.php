<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

        <style>
            body, html{
                height: 100%;
            }
            #content{
                height: 100%;
            }

        </style>
    </head>
    <body>
    <div id="content" class="text-center align-middle">

    <div class="container p-3 mt-3">
        <h3>API simples para estudos com JWT</h3>
    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#exampleModal">
        Rotas CRUD produtos
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content p-3">
            <small class="lead mb-2">Todas as rotas abaixo requerem bearer token</small>
                <div class="alert alert-primary">
                    <div class="text-wrap d-flex justify-content-start" style="width: 6rem;">
                        <span> GET</span>
                    </div>
                    <span class="display-5">{{Request::url()}}/api/products</span>
                    <hr>
                    <cite>"Recupera todos os produtos do banco"</cite>
                </div>

                <div class="alert alert-primary">
                    <div class="text-wrap d-flex justify-content-start" style="width: 6rem;">
                        <span> GET</span>
                    </div>
                    <span class="display-5">{{Request::url()}}/api/products/id</span>
                    <hr>
                    <cite>"Recupera todos um produto pelo ID"</cite>
                </div>

                <div class="alert alert-success">
                    <div class="text-wrap d-flex justify-content-start" style="width: 6rem;">
                        <span> POST </span>
                    </div>
                    <span class="display-5">{{Request::url()}}/api/products/create</span>
                    <hr>
                    <span>"Cria um produto no banco de dados"</span> <br>
                    <div class="text-justify">
                        <b>Nome: </b> <small>"string"</small> <br>
                        <b>Quantidade: </b> <small>number</small> <br>
                        <b>Valor: </b> <small>number</small> <br>
                    </div>
                </div>

                <div class="alert alert-warning">
                    <div class="text-wrap d-flex justify-content-start" style="width: 6rem;">
                        <span> PUT </span>
                    </div>
                    <span class="display-5">{{Request::url()}}/api/products/update/id</span>
                    <hr>
                    <span>"Edita um produto no banco de dados pelo ID"</span> <br>
                    <div class="text-justify">
                        <b>Nome: </b> <small>"string"</small> <br>
                        <b>Quantidade: </b> <small>number</small> <br>
                        <b>Valor: </b> <small>number</small> <br>
                    </div>
                </div>

                <div class="alert alert-danger">
                    <div class="text-wrap d-flex justify-content-start" style="width: 6rem;">
                        <span> DELETE </span>
                    </div>
                    <span class="display-5">{{Request::url()}}/api/products/destroy/id</span>
                    <hr>
                    <cite>"Deleta um produto no banco de dados pelo ID"</cite>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
        </div>
        </div>
    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal2">
        Rotas AUTH
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content p-3">

                <div class="alert alert-success">
                    <div class="text-wrap d-flex justify-content-start" style="width: 6rem;">
                        <span> POST </span>
                    </div>
                    <span class="display-5">{{Request::url()}}/api/user/create</span>
                    <hr>
                    <span>"Insere um usuário novo no sistema"</span> <br>
                    <div class="text-justify">
                        <b>Name: </b> <small>"string"</small> <br>
                        <b>Email: </b> <small>"string"</small> <br>
                        <b>Password: </b> <small>"string"</small> <br>
                    </div>
                </div>

                <div class="alert alert-success">
                    <div class="text-wrap d-flex justify-content-start" style="width: 6rem;">
                        <span> POST </span>
                    </div>
                    <span class="display-5">{{Request::url()}}/api/user/login</span>
                    <hr>
                    <span>"Loga o usuário no sistema e retorna o token"</span> <br>
                    <div class="text-justify">
                        <b>Email: </b> <small>"string"</small> <br>
                        <b>Password: </b> <small>"string"</small> <br>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
        </div>
        </div>
    </div>

    </div>

    <footer class="d-flex justify-content-around">
        <p>&copy; Desenvolvido por <a href="https://lsantos--portfolio.herokuapp.com/">Lsantos - DEV</a></p>
    </footer>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </body>
</html>
