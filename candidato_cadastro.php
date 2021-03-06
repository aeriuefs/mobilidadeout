<!DOCTYPE html>
<?php
require_once('funcoes_banco_de_dados.php');
require_once('funcoes_uteis.php');
?>
<html lang="pt-br">

    <?php
    include("topo_pagina.php");
    ?>

    <body>

        <header>
            <?php
            include("navbar_login.php");
            ?>
        </header>

        <!--Main-->
        <main>

            <?php
            include("parallax_home.php");
            ?>

            <section class="section container">

                <h4 class="center-align uppercase">Cadastro de Candidato</h4>
                
                <p>Nesta sessão vocês devem informar alguns dados pessoais para cadastro. Nos dados numéricos como CPF e telefone, <b>utilize apenas números</b>. </p>

                <form class="col s12" action="bd_candidato_cadastro.php" method="POST">

                    <b class="orange-text">Dados Pessoais</b>

                    <div class="row">

                        <div class="input-field col l6 m6 s12">
                            <input  id="nome" type="text" placeholder="Seu nome completo" name="nome" class="validate" required pattern="[a-zA-ZÀ-ú\s]+">
                            <label for="nome">Nome Completo</label>
                        </div>

                        <div class="input-field col l6 m6 s12">

                            <SELECT NAME = "sexo" SIZE=1 required>

                                <option disabled selected>Selecione seu sexo</option>
                                <option value="Feminino">Feminino</option>
                                <option value="Masculino">Masculino</option>


                            </SELECT>
                        </div>

                    </div>

                    <div class="row">

                        <div class="input-field col l6 m6 s12">
                            <input  id="matricula" type="number" name="matricula" class="validate" required >
                            <label for="matricula">Matrícula</label>
                        </div>

                        <div class="input-field col l6 m6 s12">
                            <input  id="cpf" type="number" name="cpf" class="validate" required>
                            <label for="cpf">CPF</label>
                        </div>

                    </div>

                    <div class="row">

                        <div class="input-field col l6 m6 s12 ">
                            <input  id="rg" type="number" name="rg" class="validate" placeholder="Somente números"required>
                            <label for="rg">Registro geral (RG)</label>
                        </div>

                        <div class="input-field col l6 m6 s12">
                            <input  id="orgao_expedidor" type="text" name="orgao_expedidor" class="validate" placeholder="Exemplo: SSP" required>
                            <label for="orgao_expedidor">Orgão expedidor</label>
                        </div>

                    </div>

                    <label>Data de nascimento</label>

                    <div class="row">

                        <div class="input-field col l6 m6 s12">

                            <input type="date"  class="validate" name="data_nascimento" required >

                        </div>

                        <div class="input-field col l6 m6 s12">

                            <SELECT NAME = "curso" SIZE=1 required>

                                <?php
                                $query = "SELECT * FROM cursos";
                                $resultado_cursos = conecta_seleciona($query);

                                if ($res['curso'] == '') {
                                    echo '<option value="" disabled selected>Selecione seu curso</option>';
                                }

                                while ($lista_cursos = mysqli_fetch_assoc($resultado_cursos)) {

                                    echo ('<OPTION value = "' . $lista_cursos['nome'] . '">' . $lista_cursos['nome']);
                                }
                                ?>

                            </SELECT>

                        </div>

                    </div>

                    <b class="orange-text">Contato</b>

                    <div class="row">

                        <div class="input-field col l6 m6 s12 ">
                            <input  id="telefone_fixo" type="number" class="validate" name="telefone_fixo">
                            <label for="telefone_fixo">Telefone Fixo</label>
                        </div>

                        <div class="input-field col l6 m6 s12 ">
                            <input  id="celular" type="number" class="validate" name="celular" required>
                            <label for="celular">Celular</label>
                        </div>

                    </div>

                    <div class="row">

                        <div class="input-field col l6 m6 s12">
                            <input id="email" type="email" name="email" class="validate" required>
                            <label for="email">E-mail</label>
                        </div>

                    </div>

                    <b class="orange-text">Segurança</b>

                    <div class="row">

                        <div class="input-field col l6 m6 s12">
                            <input id="senha" type="password" name="senha" class="validate" placeholder="Apenas letras e números." pattern="^\w+$" required>
                            <label for="senha">Senha</label>
                        </div>

                        <div class="input-field col l6 m6 s12">
                            <input id="confirmacao_senha" type="password" pattern="^\w+$" name="confirmacao_senha" class="validate" oninput="validaSenha(this)" required>
                            <label for="confirmacao_senha">Confirmar senha</label>
                        </div>

                    </div>

                    <b class="orange-text">Pesquisa de indicadores socioeconômicos</b>

                    <div class="row">

                        <p>Forma de ingresso </p>

                        <p>
                            <input name="forma_ingresso" type="radio" id="cotista" value="1" required />
                            <label for="cotista">Cotista</label>

                        </p>

                        <p>

                            <input name="forma_ingresso" type="radio" id="quilombola" value="2" />
                            <label for="quilombola">Quilombola</label>

                        </p>

                        <p>

                            <input name="forma_ingresso" type="radio" id="indigena" value="3" />
                            <label for="indigena">Indígena</label>

                        </p>

                        <p>

                            <input name="forma_ingresso" type="radio" id="nao_cotista" value="4" />
                            <label for="nao_cotista">Não cotistista</label>

                        </p>

                        <p>

                            <input name="forma_ingresso" type="radio" id="nao_informado" value="0" />
                            <label for="nao_informado">Não informado</label>

                        </p>

                        <p>Aluno residente</p>

                        <p>
                            <input type="checkbox" id="aluno_residente" name="aluno_residente" value="1"/>
                            <label for="aluno_residente">Sim. Sou morador da residência universitária.</label>
                        </p>

                    </div>

                    <div class="row">

                        <button class="btn waves-effect waves-light indigo lighten-2 " type="submit" name="Cadastrar">Finalizar Cadastro
                        </button>

                    </div>

                </form>

            </section>

        </main>

        <?php
        include("rodape_pagina.php");
        include("scripts.php");
        ?>

        <script>

            function validaSenha(input) {
                if (input.value != document.getElementById('senha').value) {
                    input.setCustomValidity('Repita a senha corretamente');
                } else {
                    input.setCustomValidity('');
                }
            }

        </script>

    </body>
</html>