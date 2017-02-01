<?php
if (validation_errors() != NULL):
    echo validation_errors();
endif;
?>

<div class="panel-body">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-10">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Cadastro de Periodicos</h3>
                </div>
                <div class="panel-body">
                    <?php
                    echo form_open('periodico/cadastrar');
                    echo form_label('Titulo (*)') . "<br />";
                    echo form_textarea(array('id' => 'titulo', 'name' => 'titulo', 'class' => 'form-control', 'placeholder' => 'Titulo do artigo'), set_value('titulo')) . "<br />";
                    echo form_label('Autores (*)') . "<br />";
                    echo form_textarea(array('id' => 'autores', 'name' => 'autores', 'class' => 'form-control', 'placeholder' => 'Autores do artigo'), set_value('autores')) . "<br />";
                    echo form_label('Resumo (*)') . "<br />";
                    echo form_textarea(array('id' => 'resumo', 'name' => 'resumo', 'class' => 'form-control', 'placeholder' => 'Resumo do artigo'), set_value('resumo')) . "<br />";
                    echo form_label('Problema (*)') . "<br />";
                    echo form_textarea(array('id' => 'problema', 'name' => 'problema', 'class' => 'form-control', 'placeholder' => 'Problematização do artigo'), set_value('problema')) . "<br />";
                    echo form_label('Objetivo (*)') . "<br />";
                    echo form_textarea(array('id' => 'objetivo', 'name' => 'objetivo', 'class' => 'form-control', 'placeholder' => 'Objetivo do artigo'), set_value('objetivo')) . "<br />";
                    echo form_label('Teórico (*)') . "<br />";
                    echo form_textarea(array('id' => 'teorico', 'name' => 'teorico', 'class' => 'form-control', 'placeholder' => 'Teoria proposta no artigo'), set_value('teorico')) . "<br />";
                    echo form_label('Metodologia (*)') . "<br />";
                    echo form_textarea(array('id' => 'metodo', 'name' => 'metodo', 'class' => 'form-control', 'placeholder' => 'Metodologia do artigo'), set_value('metodo')) . "<br />";
                    echo form_label('Desenvolvimento (*)') . "<br />";
                    echo form_textarea(array('id' => 'desenvolvimento', 'name' => 'desenvolvimento', 'class' => 'form-control', 'placeholder' => 'Desenvolvimento do artigo'), set_value('desenvolvimento')) . "<br />";
                    echo form_label('Resultado (*)') . "<br />";
                    echo form_textarea(array('id' => 'resultado', 'name' => 'resultado', 'class' => 'form-control', 'placeholder' => 'Resultados do artigo'), set_value('resultado')) . "<br />";
                    echo form_label('Analise (*)') . "<br />";
                    echo form_textarea(array('id' => 'analise', 'name' => 'analise', 'class' => 'form-control', 'placeholder' => 'Analise do artigo'), set_value('analise')) . "<br />";
                    echo form_label('Conclusão (*)') . "<br />";
                    echo form_textarea(array('id' => 'conclusao', 'name' => 'conclusao', 'class' => 'form-control', 'placeholder' => 'Conclusão do artigo'), set_value('conclusao')) . "<br />";
                    echo form_label('Pontos Fortes') . "<br />";
                    echo form_textarea(array('id' => 'pforte', 'name' => 'pforte', 'class' => 'form-control', 'placeholder' => 'Pontos Fortes do artigo'), set_value('pforte')) . "<br />";
                    echo form_label('Pontos Fracos') . "<br />";
                    echo form_textarea(array('id' => 'pfraco', 'name' => 'pfraco', 'class' => 'form-control', 'placeholder' => 'Pontos Fracos do artigo'), set_value('pfraco')) . "<br />";
                    
                    ?>
                    <?php
                    echo '<span id="sumit" style="display: inline;float: right;">';
                    echo form_submit(array('name' => 'cadastrar', 'class' => 'btn btn-success'), 'Cadastrar') . "<br />";
                    echo '</span>';
                    echo form_close();
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-6"></div>
    </div>
</div>
