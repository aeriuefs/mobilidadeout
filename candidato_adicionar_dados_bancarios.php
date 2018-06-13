<?php
session_start();
if ((!isset($_SESSION['matricula']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['matricula']);
    unset($_SESSION['senha']);
    header('location:index.php');
}

require_once('funcoes_uteis.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php
        include("topo_pagina.php");
        ?>
    </head>
    <body>

        <header>
            <?php
            include("navbar_candidato.php");
            ?>
        </header>

        <main>

            <?php
            include("parallax.php");
            ?>

            <section class="section container">

                <h4 class="center-align uppercase">Atualização de dados </h4>                

                <div class="row">
                    
                    <form class="col s12" action="bd_candidato_adicionar_dados_bancarios.php" method="POST">

                        <b>Dados Bancários</b>
                        <div class="row">

                            <div class="input-field col l6 m6 s12 ">
                                <input  id="banco" type="text" class="validate" name="banco">
                                <label for="banco">Banco</label>
                            </div>

                            <div class="input-field col l6 m6 s12">
                                <input  id="agencia" type="text" class="validate" name="agencia">
                                <label for="agencia">Agência</label>
                            </div>

                            <div class="input-field col l6 m6 s12">
                                <input  id="conta" type="text" class="validate" name="conta">
                                <label for="conta">Conta</label>
                            </div>

                        </div>


                        <div class="row">

                            <button class="btn waves-effect waves-light" type="submit" name="enviar">Salvar Dados
                                <i class="material-icons right">send</i>
                            </button>

                        </div>

                    </form>

                </div>

            </section>

        </main>
        <!--END MAIN-->


        <?php
        include("rodape_pagina.php");
        ?>

        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>

        <script> $(".button-collapse").sideNav();</script>

        <script>

            $('.datepicker').pickadate({
                selectMonths: true, // Creates a dropdown to control month
                selectYears: 100, // Creates a dropdown of 15 years to control year,
                today: 'Hoje',
                clear: 'Limpar',
                close: 'Ok',
                closeOnSelect: false // Close upon selecting a date,
            });

        </script>

        <script>
            
            $(document).ready(function () {
                $('select').material_select();
            });

        </script>

    </body>
</html>
