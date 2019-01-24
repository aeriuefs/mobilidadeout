<?php
require_once('funcoes_uteis.php');

verificar_sessao();

require_once('funcoes_de_arquivos.php');
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

                    <form class="col s12" action="bd_candidato_finalizar_cadastro.php" method="POST">

                        <?php
                        $query = "SELECT * FROM candidatos WHERE matricula='" . $_SESSION['matricula'] . "'";
                        $resultado = conecta_seleciona($query);
                        $res = mysqli_fetch_assoc($resultado);
                        ?>

                        <b class="orange-text">Dados Bancários</b>

                        <div class="row">

                            <div class="input-field col l6 m6 s12 ">
                                <input  id="banco" type="text" class="validate" name="banco" value="<?php echo($res['banco']); ?>">
                                <label for="banco">Banco</label>
                            </div>

                            <div class="input-field col l6 m6 s12">
                                <input  id="agencia" type="text" class="validate" name="agencia" value="<?php echo($res['agencia']); ?>">
                                <label for="agencia">Agência</label>
                            </div>

                        </div>

                        <div class="row">
                            <div class="input-field col l6 m6 s12">
                                <input  id="conta" type="text" class="validate" name="conta" value="<?php echo($res['conta']); ?>">
                                <label for="conta">Conta</label>
                            </div>
                        </div>

                        <b class="orange-text">Dados de viagem</b>
                        <div class="row">

                            <div class="input-field col l6 m6 s12 ">
                                <input  id="telefone" type="text" class="validate" name="passaporte" value="<?php echo($res['passaporte']); ?>" >
                                <label for="telefone">Passaporte</label>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col l12">
                                <b>Comprovante de dados bancários</b>
                                <div class="file-field input-field">
                                    <div class="btn">
                                        <span>Arquivo</span>
                                        <input type="file" name="arquivo" accept="application/pdf">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                    </div>
                                </div>

                                <b>Comprovante de passaporte</b>
                                <div class="file-field input-field">
                                    <div class="btn">
                                        <span>Arquivo</span>
                                        <input type="file" name="arquivo" accept="application/pdf">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                    </div>
                                </div> 
                            </div> 



                        </div>


                        <div class="row">

                            <button class="btn waves-effect waves-light" type="submit" name="enviar">Atualizar Dados
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
        include("scripts.php");
        ?>

    </body>
</html>
