<div class="navbar-fixed transparent">

    <nav class="grey darken-4">

        <div class="nav-wrapper container">

            <a href="aeri_home.php" class="brand-logo"><i class="material-icons">home</i></a>
            <a href="#" data-activates="mobile-menu" class="button-collapse left"><i class="material-icons">menu</i></a>

            <ul id="nav-mobile" class="right hide-on-med-and-down uppercase">


                <li><a href="aeri_estudantes.php"><i class="large material-icons">search</i></a></li>
                <li><a href="aeri_notificacoes.php"><i class="large material-icons">notifications</i></a></li>
                <li><a href="aeri_configuracoes.php"><i class="large material-icons">settings</i></a></li>
                <li><a href=""><span class="new badge blue accent-1" data-badge-caption=""><?php echo($_SESSION['nome']) ?></span></a></li>
                <li><a href="bd_logout.php"><i class="large material-icons">power_settings_new</i></a></li>


            </ul>

            <ul id="mobile-menu" class="side-nav">
                <li><a href="http://aeri.uefs.br/">Portal AERI</a></li>
                <li><a href="http://aeri.uefs.br/contato.php#conteudo">Contato</a></li>                           
                <li><a href="bd_logout.php">Sair</a></li>
            </ul>

        </div>

    </nav>

</div>