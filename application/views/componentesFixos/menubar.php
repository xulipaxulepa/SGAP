<?php
if (validation_errors() != NULL):
    echo validation_errors();
endif;
?>
<br>
<br>

<nav class="navbar navbar-default">
    <div class="navbar-header" id="menubar">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo base_url(""); ?>">SGAP</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <?php if (isset($this->session->email)) { ?>
        <ul class="nav navbar-nav">
            
            <div class="col-sm-12 controls text-right">
                <div class="col-sm-12 controls text-right">    
                    <li><a href="<?php echo base_url("periodico/consultar"); ?>" class="btn btn-primary" role="button">Meus periodicos</a></li>        
                </div>
        </ul>
        <ul class="nav navbar-nav">
            
            <div class="col-sm-12 controls text-right">

                <li><a href="<?php echo base_url("periodico/cadastrar"); ?>" class="btn btn-primary" role="Button">Cadastrar Periodicos</a></li>
            </div>
            </div>
        </ul>
        <ul class="nav navbar-nav">
            
            <div class="col-sm-12 controls text-right">
                <div class="col-sm-12 controls text-right">    
                    <li><a href="<?php echo base_url("periodico/organizar"); ?>" class="btn btn-primary" role="button">Organizar periodicos</a></li>        
                </div>
        </ul>


    <?php } else {
        ?>
        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
        <ul class="nav navbar-nav" >
            <br>
            <form id="loginform" class="form-horizontal" role="form" method="POST"
                  action="<?php echo base_url('usuario/login') ?>">
                <div style="margin-bottom: 25px" class="input-group" >
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <?php echo form_input(array('id' => 'inputEmail', 'type' => 'email', 'name' => 'email', 'class' => 'form-control', 'placeholder' => 'Email', 'required' => '', 'autofocus' => ''), set_value('email')); ?>
                </div>

        </ul>
        <ul class="nav navbar-nav">
            <br>
            <div style="margin-bottom: 25px" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" id="inputPassword" class="form-control" name="senha" placeholder="Senha"
                       required="">
            </div>
        </ul>
        <ul class="nav navbar-nav">
            <br>
            <div class="col-sm-12 controls text-right">
                <button type="submit" id="btn-login" href="#" class="btn btn-secondary">
                    Login
                </button>
            </div>
            </form>
        </ul>
        <ul class="nav navbar-nav">
            <br>
            <div class="col-sm-12 controls text-right">
                <a href="<?php echo base_url("usuario/cadastrar"); ?>"class="btn btn-success" role="button">Cadastrar</a></li>
            </div>
        </ul>
        <?php
    }
    ?>
    <?php if (isset($this->session->email)) { ?>
        <div class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                   aria-haspopup="true"
                   aria-expanded="false"><?php echo $this->session->nome ?> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <div class="col-sm-12 controls text-right">
                        <a href="<?php echo base_url("index.php/usuario/logout") ?>" >Sair</a>
                    </div>

                </ul>
            </li>
        </div>
    <?php }
    ?>
    <!-- /.navbar-collapse -->
    <!-- /.container-fluid -->
</nav>
