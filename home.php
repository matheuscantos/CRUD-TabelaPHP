<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Bare - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.22.1/dist/bootstrap-table.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Projeto</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page content-->

    <!-- Modal -->
    <div class="modal fade" id="modalAddUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Adicionar usuário</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <small for="nomeusuario" class="col-sm-3 text-sm col-form-label">Nome</small>
                                <input type="text" class="form-control" name="nomeusuario" id="nomeusuario">
                                <small id="textoErroAddNomeUsuario" class="d-none fst-italic"></small>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <small for="emailusuario" class="col-sm-3 text-sm col-form-label">Email</small>
                                <input type="email" class="form-control" name="emailusuario" id="emailusuario">
                                <small id="textoErroAddEmailUsuario" class="d-none fst-italic"></small>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <small for="dataadmissaousuario" class="col-sm-3 text-sm col-form-label">Data admissão</small>
                                <input type="date" class="form-control" name="dataadmissaousuario" id="dataadmissaousuario">
                                <small id="textoErroAddDataUsuario" class="d-none fst-italic"></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary" id="addUsuario">Salvar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalUpdateUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Atualizar usuário</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="text" class="form-control d-none" name="idUsuarioUpdate" id="idUsuarioUpdate">
                                <small for="nomeusuario" class="col-sm-3 text-sm col-form-label">Nome</small>
                                <input type="text" class="form-control" name="nomeupdateusuario" id="nomeupdateusuario">
                                <small id="textoErroAddNomeUpdateUsuario" class="d-none fst-italic"></small>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <small for="emailusuario" class="col-sm-3 text-sm col-form-label">Email</small>
                                <input type="email" class="form-control" name="emailupdateusuario" id="emailupdateusuario">
                                <small id="textoErroAddEmailUpdateUsuario" class="d-none fst-italic"></small>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <small for="dataadmissaousuario" class="col-sm-3 text-sm col-form-label">Data admissão</small>
                                <input type="date" class="form-control" name="dataadmissaoupdateusuario" id="dataadmissaoupdateusuario">
                                <small id="textoErroAddDataUpdateUsuario" class="d-none fst-italic"></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary" id="updateUsuario">Salvar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalRemoveUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Remover usuário</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control d-none" name="idUsuarioRemove" id="idUsuarioRemove">
                    <p class="mb-0">Deseja mesmo remover esse usuário?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary" id="removeUsuario">Remover</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalRetornoSistema" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Sistema</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <p id="msgModalSistema" class="text-sm mb-0"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="text-center mt-5">
            <h1>Usuários</h1>
            <p class="lead">Painel de controle</p>
        </div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAddUsuario">
            Adicionar Usuário
        </button>
        <div class="table-responsive">
            <table id="tabelausuarios" class="table mb-0" data-toolbar="#toolbar" data-show-columns="true" data-show-export="true" data-locale="pt-BR" data-show-refresh="false" data-show-toggle="true" data-show-fullscreen="false" data-show-pagination-switch="true" data-pagination="true" data-search="true">
                <thead>
                    <tr>
                        <th data-sortable="true" data-field="id">ID</th>
                        <th class="text" data-formatter="nomeFormater">NOME</th>
                        <th class="text-center" data-formatter="emailFormater">EMAIL</th>
                        <th class="text-center" data-formatter="dataadmissaoFormater">DATA DE ADMISSÃO</th>
                        <th class="text-center" data-formatter="datacadastroFormater">DATA CADASTRO</th>
                        <th class="text-center" data-formatter="dataultimaattFormater">DATA ULTIMA ATT.</th>
                        <th class="text-center" data-formatter="updateFormater">ATUALIZAR</th>
                        <th class="text-center" data-formatter="removeFormater">REMOVER</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- Jquery -->
    <script src="assets/Jquery/jquery-3.7.1.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.22.1/dist/bootstrap-table.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://unpkg.com/bootstrap-table@1.22.1/dist/bootstrap-table.min.js"></script>
    <!-- Latest compiled and minified Locales -->
    <script src="https://unpkg.com/bootstrap-table@1.22.1/dist/locale/bootstrap-table-pt-BR.min.js"></script>

</body>

<script>
    $(document).ready(function() {

        /* Carregamento inicial tabela */

        var tipooperacao = "getusuarios";
        var table = $('#tabelausuarios');

        $.ajax({
            type: "POST",
            url: "master/master_update.php",
            data: ({
                tipooperacao: tipooperacao
            }),
            success: function(data) {
                var $graph = data;
                var obj = $.parseJSON($graph);

                table.bootstrapTable({
                    data: obj,
                    exportDataType: obj,
                    exportTypes: ["csv", "txt", "pdf"]
                });

            }
        });

        /* Funções adição usuário */

        $("#addUsuario").on('click', function() {

            var nomeusuario = $("#nomeusuario").val();

            //Se o campo está vazio
            if (nomeusuario == "") {
                $("#nomeusuario").addClass("is-invalid");
                $("#textoErroAddNomeUsuario").removeClass("d-none");
                $("#textoErroAddNomeUsuario").text("Nome está vazio.")
                return false;
            }

            $("#nomeusuario").removeClass("is-invalid");
            $("#textoErroAddNomeUsuario").addClass("d-none");

            var emailusuario = $("#emailusuario").val();

            //Se o campo está vazio
            if (emailusuario == "") {
                $("#emailusuario").addClass("is-invalid");
                $("#textoErroAddEmailUsuario").removeClass("d-none");
                $("#textoErroAddEmailUsuario").text("Email está vazio.")
                return false;
            }

            //Se o campo não possui @
            if (!isValidEmail(emailusuario)) {
                $("#emailusuario").addClass("is-invalid");
                $("#textoErroAddEmailUsuario").removeClass("d-none");
                $("#textoErroAddEmailUsuario").text("Não é um email válido.")
                return false;
            }

            $("#emailusuario").removeClass("is-invalid");
            $("#textoErroAddEmailUsuario").addClass("d-none");

            var dataadmissaousuario = $("#dataadmissaousuario").val();

            //Se o campo está vazio
            if (dataadmissaousuario == "") {
                $("#dataadmissaousuario").addClass("is-invalid");
                $("#textoErroAddDataUsuario").removeClass("d-none");
                $("#textoErroAddDataUsuario").text("Data está vazia.")
                return false;
            }

            $("#dataadmissaousuario").removeClass("is-invalid");
            $("#textoErroAddDataUsuario").addClass("d-none");

            var tipooperacao = "addusuario";

            $.ajax({
                type: "POST",
                url: "master/master_update.php",
                data: ({
                    tipooperacao: tipooperacao,
                    nomeusuario: nomeusuario,
                    emailusuario: emailusuario,
                    dataadmissaousuario: dataadmissaousuario
                }),
                success: function(data) {

                    if (data == 1) {

                        var table = $('#tabelausuarios');
                        table.bootstrapTable('destroy');

                        var tipooperacao = "getusuarios";
                        $.ajax({
                            type: "POST",
                            url: "master/master_update.php",
                            data: ({
                                tipooperacao: tipooperacao
                            }),
                            success: function(data) {
                                var $graph = data;
                                var obj = $.parseJSON($graph);

                                table.bootstrapTable({
                                    data: obj,
                                    exportDataType: obj,
                                    exportTypes: ["csv", "txt", "pdf"]
                                });

                            }
                        });

                        $("#modalAddUsuario").modal("hide");
                        $("#msgModalSistema").text("Usuário adicionado com sucesso!");
                        $("#modalRetornoSistema").modal("show");

                    } else {

                        $("#msgModalSistema").text("Houve um erro na adição do usuário!");
                        $("#modalRetornoSistema").modal("show");

                    }

                }
            });
        });

        /* Funções atualização usuário */

        $(document).on('click', '.btnUpdate', function() {
            $("#idUsuarioUpdate").val($(this).attr("idsuario"));
            var nomeusuario = $(this).attr("nomesuario").replace(/_/g, " ");
            $("#nomeupdateusuario").val(nomeusuario);
            $("#emailupdateusuario").val($(this).attr("emailsuario"));
            $("#dataadmissaoupdateusuario").val($(this).attr("dataadmisuario"));
            $("#modalUpdateUsuario").modal("show");

        });

        $("#updateUsuario").on('click', function() {

            var nomeusuario = $("#nomeupdateusuario").val();

            //Se o campo está vazio
            if (nomeusuario == "") {
                $("#nomeupdateusuario").addClass("is-invalid");
                $("#textoErroAddNomeUpdateUsuario").removeClass("d-none");
                $("#textoErroAddNomeUpdateUsuario").text("Nome está vazio.")
                return false;
            }

            $("#nomeupdateusuario").removeClass("is-invalid");
            $("#textoErroAddNomeUsuario").addClass("d-none");

            var emailusuario = $("#emailupdateusuario").val();

            //Se o campo está vazio
            if (emailusuario == "") {
                $("#emailupdateusuario").addClass("is-invalid");
                $("#textoErroAddEmailUpdateUsuario").removeClass("d-none");
                $("#textoErroAddEmailUpdateUsuario").text("Email está vazio.")
                return false;
            }

            //Se o campo não possui @
            if (!isValidEmail(emailusuario)) {
                $("#emailupdateusuario").addClass("is-invalid");
                $("#textoErroAddEmailUpdateUsuario").removeClass("d-none");
                $("#textoErroAddEmailUpdateUsuario").text("Não é um email válido.")
                return false;
            }

            $("#emailupdateusuario").removeClass("is-invalid");
            $("#textoErroAddEmailUpdateUsuario").addClass("d-none");

            var dataadmissaousuario = $("#dataadmissaoupdateusuario").val();

            //Se o campo está vazio
            if (dataadmissaousuario == "") {
                $("#dataadmissaoupdateusuario").addClass("is-invalid");
                $("#textoErroAddDataUpdateUsuario").removeClass("d-none");
                $("#textoErroAddDataUpdateUsuario").text("Data está vazia.")
                return false;
            }

            $("#dataadmissaoupdateusuario").removeClass("is-invalid");
            $("#textoErroAddDataUpdateUsuario").addClass("d-none");

            var idusuario = $("#idUsuarioUpdate").val();

            var tipooperacao = "updateusuario";

            $.ajax({
                type: "POST",
                url: "master/master_update.php",
                data: ({
                    tipooperacao: tipooperacao,
                    idusuario: idusuario,
                    nomeusuario: nomeusuario,
                    emailusuario: emailusuario,
                    dataadmissaousuario: dataadmissaousuario
                }),
                success: function(data) {

                    if (data == 1) {

                        var table = $('#tabelausuarios');
                        table.bootstrapTable('destroy');

                        var tipooperacao = "getusuarios";
                        $.ajax({
                            type: "POST",
                            url: "master/master_update.php",
                            data: ({
                                tipooperacao: tipooperacao
                            }),
                            success: function(data) {
                                var $graph = data;
                                var obj = $.parseJSON($graph);

                                table.bootstrapTable({
                                    data: obj,
                                    exportDataType: obj,
                                    exportTypes: ["csv", "txt", "pdf"]
                                });

                            }
                        });

                        $("#modalUpdateUsuario").modal("hide");
                        $("#msgModalSistema").text("Usuário atualizado com sucesso!");
                        $("#modalRetornoSistema").modal("show");

                    } else {

                        $("#msgModalSistema").text("Houve um erro na atualização do usuário!");
                        $("#modalRetornoSistema").modal("show");

                    }

                }
            });
        });

        /* Funções remoção usuário */

        $(document).on('click', '.btnRemove', function() {
            $("#idUsuarioRemove").val($(this).attr("idsuario"));
            $("#modalRemoveUsuario").modal("show");
        });

        $("#removeUsuario").on('click', function() {

            var idusuario = $("#idUsuarioRemove").val();
            var tipooperacao = "removeusuario";

            $.ajax({
                type: "POST",
                url: "master/master_update.php",
                data: ({
                    tipooperacao: tipooperacao,
                    idusuario: idusuario
                }),
                success: function(data) {

                    if (data == 1) {

                        var table = $('#tabelausuarios');
                        table.bootstrapTable('destroy');

                        var tipooperacao = "getusuarios";
                        $.ajax({
                            type: "POST",
                            url: "master/master_update.php",
                            data: ({
                                tipooperacao: tipooperacao
                            }),
                            success: function(data) {
                                var $graph = data;
                                var obj = $.parseJSON($graph);

                                table.bootstrapTable({
                                    data: obj,
                                    exportDataType: obj,
                                    exportTypes: ["csv", "txt", "pdf"]
                                });

                            }
                        });

                        $("#modalRemoveUsuario").modal("hide");
                        $("#msgModalSistema").text("Usuário removido com sucesso!");
                        $("#modalRetornoSistema").modal("show");

                    } else {

                        $("#msgModalSistema").text("Houve um erro na remoção do usuário!");
                        $("#modalRetornoSistema").modal("show");

                    }

                }
            });
        });

    });

    /* Funções de carregamento e formatação dos campos da tabela */

    function nomeFormater(value, row, index, id) {

        var select = '';
        select = row.nome;

        return select;
    }

    function emailFormater(value, row, index, id) {

        var select = '';
        select = row.email;

        return select;
    }

    function dataadmissaoFormater(value, row, index, id) {

        var select = '';

        var data = row.dataadmissao.split(/[ -]/);
        var dataFormatada = data[2] + "/" + data[1] + "/" + data[0];

        select = dataFormatada;

        return select;
    }

    function datacadastroFormater(value, row, index, id) {

        var select = '';

        dataSeparada = row.datacadastro.split(' ');
        var partesData = dataSeparada[0].split('-');
        var partesTempo = dataSeparada[1].split(':');

        var dataFormatada = partesData[2] + "/" + partesData[1] + "/" + partesData[0];
        var tempoFormatado = partesTempo[0] + ":" + partesTempo[1] + ":" + partesTempo[2];

        select = dataFormatada + " " + tempoFormatado;

        return select;
    }

    function dataultimaattFormater(value, row, index, id) {

        var select = '';

        dataSeparada = row.dataatualizacao.split(' ');
        var partesData = dataSeparada[0].split('-');
        var partesTempo = dataSeparada[1].split(':');

        var dataFormatada = partesData[2] + "/" + partesData[1] + "/" + partesData[0];
        var tempoFormatado = partesTempo[0] + ":" + partesTempo[1] + ":" + partesTempo[2];

        select = dataFormatada + " " + tempoFormatado;

        return select;
    }

    function updateFormater(value, row, index, id) {
        var nomeUsuario = row.nome;
        var nomeUsuario = nomeUsuario.replace(/\s/g, "_");
        var select = '<button type="button" class="btn btnUpdate" idsuario= ' + row.id + ' nomesuario= ' + nomeUsuario + ' emailsuario= ' + row.email + ' dataadmisuario= ' + row.dataadmissao + '><i class="fa-solid fa-file-pen"></i></button>';

        return select;
    }

    function removeFormater(value, row, index, id) {
        var select = '<button type="button" class="btn btnRemove" idsuario= ' + row.id + '><i class="fa-solid fa-trash"></i></button>';

        return select;
    }

    function isValidEmail(email) {

        var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

        return emailRegex.test(email);
    }
</script>

</html>