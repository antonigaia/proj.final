<?php

    include_once 'crud.php';

    session_start();

    if (isset($_SESSION['user_data']) == false) {
        header("location: index.php?msg=access_denied");
    }

    $user = $_SESSION['user_data'];

    $clients = read("database.clients");
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="dist/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="dist/css/responsive.bootstrap5.css">
    <link rel="stylesheet" href="dist/css/buttons.bootstrap5.css">
    <title> Página de Clientes </title>
</head>

<body>

    <!-- Menu princ. -->
    <?php
    include_once 'menu.php';
    ?>

    <div class="container">
        <hr>
        <div>
            <table class="table table-striped nowrap" style="width:100%" id="myTable">
                <thead class="table-warning">
                    <th> Nome </th>
                    <th> Contato </th>
                    <th> Email </th>
                    <th> CPF </th>
                    <th> Endereço </th>
                    <th> Ações </th>
                </thead>
                    <!-- Dados dos Clientes -->
                <!-- <tbody>
                    <tr>
                        <td>Anthony Jefferson</td>
                        <td>(85) 999544262</td>
                        <td>anthony@email.com</td>
                        <td>123.123.123-99</td>
                        <td>Rua Bem Alí, 222, Good Gardem </td>
                        <td>
                            <button class="btn btn-sm btn-secondary" title="Editar"> <i class="fa fa-pencil" aria-hidden="true"></i> </button>

                            <button class="btn btn-sm btn-secondary" title="Excluir"> <i class="fa fa-trash" aria-hidden="true"></i> </button>

                            <button class="btn btn-sm btn-secondary" title="Visualizar"> <i class="fa fa-eye" aria-hidden="true"></i> </button>
                        </td>
                    </tr>

                    <tr>
                        <td>Antoni Vieira</td>
                        <td>(85) 999544262</td>
                        <td>antoni@email.com</td>
                        <td>123.123.123-99</td>
                        <td>Rua Bem Aculá, 453, Bad Gardem </td>
                        <td>
                            <button class="btn btn-sm btn-secondary" title="Editar"> <i class="fa fa-pencil" aria-hidden="true"></i> </button>

                            <button class="btn btn-sm btn-secondary" title="Excluir"> <i class="fa fa-trash" aria-hidden="true"></i> </button>

                            <button class="btn btn-sm btn-secondary" title="Visualizar"> <i class="fa fa-eye" aria-hidden="true"></i> </button>
                        </td>
                    </tr>

                    <tr>
                        <td>João Silva</td>
                        <td>(85) 91234-5678</td>
                        <td>joao.silva@email.com</td>
                        <td>987.654.321-00</td>
                        <td>Rua das Flores, 100, Jardim Bela Vista</td>
                        <td>
                            <button class="btn btn-sm btn-secondary" title="Editar"> <i class="fa fa-pencil" aria-hidden="true"></i> </button>
                            <button class="btn btn-sm btn-secondary" title="Excluir"> <i class="fa fa-trash" aria-hidden="true"></i> </button>
                            <button class="btn btn-sm btn-secondary" title="Visualizar"> <i class="fa fa-eye" aria-hidden="true"></i> </button>
                        </td>
                    </tr>

                    <tr>
                        <td>Maria Oliveira</td>
                        <td>(85) 91234-5678</td>
                        <td>maria.oliveira@email.com</td>
                        <td>987.654.321-00</td>
                        <td>Rua das Flores, 100, Jardim Bela Vista</td>
                        <td>
                            <button class="btn btn-sm btn-secondary" title="Editar"> <i class="fa fa-pencil" aria-hidden="true"></i> </button>
                            <button class="btn btn-sm btn-secondary" title="Excluir"> <i class="fa fa-trash" aria-hidden="true"></i> </button>
                            <button class="btn btn-sm btn-secondary" title="Visualizar"> <i class="fa fa-eye" aria-hidden="true"></i> </button>
                        </td>
                    </tr>

                    <tr>
                        <td>Carlos Andrade</td>
                        <td>(85) 91234-5678</td>
                        <td>carlos.andrade@email.com</td>
                        <td>987.654.321-00</td>
                        <td>Rua das Flores, 100, Jardim Bela Vista</td>
                        <td>
                            <button class="btn btn-sm btn-secondary" title="Editar"> <i class="fa fa-pencil" aria-hidden="true"></i> </button>
                            <button class="btn btn-sm btn-secondary" title="Excluir"> <i class="fa fa-trash" aria-hidden="true"></i> </button>
                            <button class="btn btn-sm btn-secondary" title="Visualizar"> <i class="fa fa-eye" aria-hidden="true"></i> </button>
                        </td>
                    </tr>



                    <tr>
                        <td>Kleber Walcir</td>
                        <td>(85) 984748534</td>
                        <td>klbr@email.com</td>
                        <td>123.123.123-99</td>
                        <td>Rua Bem Alí, 222, Good Gardem </td>
                        <td>
                            <button class="btn btn-sm btn-secondary" title="Editar"> <i class="fa fa-pencil" aria-hidden="true"></i> </button>

                            <button class="btn btn-sm btn-secondary" title="Excluir"> <i class="fa fa-trash" aria-hidden="true"></i> </button>

                            <button class="btn btn-sm btn-secondary" title="Visualizar"> <i class="fa fa-eye" aria-hidden="true"></i> </button>
                        </td>
                    </tr>

                    <tr>
                        <td>Anthony Jefferson</td>
                        <td>(85) 999544262</td>
                        <td>anthony@email.com</td>
                        <td>123.123.123-99</td>
                        <td>Rua Bem Alí, 222, Good Gardem </td>
                        <td>
                            <button class="btn btn-sm btn-secondary" title="Editar"> <i class="fa fa-pencil" aria-hidden="true"></i> </button>

                            <button class="btn btn-sm btn-secondary" title="Excluir"> <i class="fa fa-trash" aria-hidden="true"></i> </button>

                            <button class="btn btn-sm btn-secondary" title="Visualizar"> <i class="fa fa-eye" aria-hidden="true"></i> </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Anthony Jefferson</td>
                        <td>(85) 999544262</td>
                        <td>anthony@email.com</td>
                        <td>123.123.123-99</td>
                        <td>Rua Bem Alí, 222, Good Gardem </td>
                        <td>
                            <button class="btn btn-sm btn-secondary" title="Editar"> <i class="fa fa-pencil" aria-hidden="true"></i> </button>

                            <button class="btn btn-sm btn-secondary" title="Excluir"> <i class="fa fa-trash" aria-hidden="true"></i> </button>

                            <button class="btn btn-sm btn-secondary" title="Visualizar"> <i class="fa fa-eye" aria-hidden="true"></i> </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Anthony Jefferson</td>
                        <td>(85) 999544262</td>
                        <td>anthony@email.com</td>
                        <td>123.123.123-99</td>
                        <td>Rua Bem Alí, 222, Good Gardem </td>
                        <td>
                            <button class="btn btn-sm btn-secondary" title="Editar"> <i class="fa fa-pencil" aria-hidden="true"></i> </button>

                            <button class="btn btn-sm btn-secondary" title="Excluir"> <i class="fa fa-trash" aria-hidden="true"></i> </button>

                            <button class="btn btn-sm btn-secondary" title="Visualizar"> <i class="fa fa-eye" aria-hidden="true"></i> </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Anthony Jefferson</td>
                        <td>(85) 999544262</td>
                        <td>anthony@email.com</td>
                        <td>123.123.123-99</td>
                        <td>Rua Bem Alí, 222, Good Gardem </td>
                        <td>
                            <button class="btn btn-sm btn-secondary" title="Editar"> <i class="fa fa-pencil" aria-hidden="true"></i> </button>

                            <button class="btn btn-sm btn-secondary" title="Excluir"> <i class="fa fa-trash" aria-hidden="true"></i> </button>

                            <button class="btn btn-sm btn-secondary" title="Visualizar"> <i class="fa fa-eye" aria-hidden="true"></i> </button>
                        </td>
                    </tr>

                    
                </tbody> -->
                    <!-- fim -->

                    <tbody>
                        <?php foreach ($clients as $key => $client) : ?>
                            <tr>
                                <td><?= $client[0]; ?></td>
                                <td><?= $client[8]; ?></td>
                                <td><?= $client[1]; ?></td>
                                <td><?= $client[4]; ?></td>
                                <td><?= $client[5]; ?></td>
                                <td>
                                    <button class="btn btn-danger btn-md" title="Excluir Cliente" data-bs-toggle="modal" data-bs-target="#delete-<?=$key;?>">
                                        <i class="fa fa-trash"></i>
                                    </button>

                                    <a href="atualizar_cliente.php?id=<?=$key;?>" class="btn btn-warning btn-md" title="Editar Cliente">
                                        <i class="fa fa-pencil"></i>
                                    </a>

                                    
                                    <!-- Modal de Exclusão -->
                                    <div class="modal fade" id="delete-<?=$key;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <form action="control.clients.php" method="POST">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir Cliente?! </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Tem certeza que deseja excluir o cliente 
                                                        <strong> <?= $client[0]; ?> </strong> ? <br>
                                                        Essa operação não pode ser desfeita.
                                                        
                                                        <input type="hidden" name="action" value="delete">
                                                        <input type="hidden" name="id" value="<?=$key;?>">

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa fa-ban"></i> Não, cancelar! </button>
                                                        <button type="submit" class="btn btn-success">
                                                            <i class="fa fa-thumbs-up"></i> Sim, continuar!  
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>


                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                <tfoot>
                    <th> Nome </th>
                    <th> Contato </th>
                    <th> Email </th>
                    <th> CPF </th>
                    <th> Endereço </th>
                    <th> Ações </th>
                </tfoot>

            </table>
        </div>
    </div>
    </div>

    <script src="dist/js/jquery.min.js"></script>
    <script src="dist/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/dataTables.min.js"></script>
    <script src="dist/js/dataTables.bootstrap5.js"></script>
    <script src="dist/js/dataTables.responsive.js"></script>
    <script src="dist/js/responsive.bootstrap5.js"></script>
    <script src="dist/js/dataTables.buttons.js"></script>
    <script src="dist/js/buttons.bootstrap5.js"></script>
    <script src="dist/js/jszip.min.js"></script>
    <script src="dist/js/pdfmake.min.js"></script>
    <script src="dist/js/vfs_fonts.js"></script>
    <script src="dist/js/buttons.html5.min.js"></script>
    <script src="dist/js/buttons.print.min.js"></script>
    <script src="dist/js/buttons.colVis.min.js"></script>
    <script src="https://kit.fontawesome.com/7f377bb488.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
        let table = new DataTable('#myTable', {
            responsive: true,
            layout: {
                topStart: {
                    buttons: ['copy', 'excel', 'pdf', 'colvis']
                }
            },
            stateSave: true,
            language: {
                url: "https://cdn.datatables.net/plug-ins/1.11.3/i18n/pt_br.json"
            }
        });
    </script>

</body>

</html>