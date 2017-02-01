<div class="row">
    <div class="col-md-2"></div>
    <div class="left">
        <?php
            foreach ($periodico->result() as $periodicos) {
       echo '<div class="container" id="seusperiodicos">';
           echo '<ul class="nav nav-tabs">';
           echo '<li><a data-toggle="tab" href="#Problema">Problema</a></li>';
               echo '<li><a data-toggle="tab" href="#Objetivo">Objetivo</a></li>';
               echo '<li><a data-toggle="tab" href="#Teórico">Teórico</a></li>';
               echo '<li><a data-toggle="tab" href="#Método">Método</a></li>';
               echo '<li><a data-toggle="tab" href="#Desenvolvimento">Desenvolvimento</a></li>';
               echo '<li><a data-toggle="tab" href="#Resultado">Resultado</a></li>';
               echo '<li><a data-toggle="tab" href="#Analise">Analise</a></li>';
               echo '<li><a data-toggle="tab" href="#Conclusao">Conclusão</a></li>';
               echo '<li><a data-toggle="tab" href="#PForte">Pontos Fortes</a></li>';
               echo '<li><a data-toggle="tab" href="#PFraco">Pontos Fracos</a></li>';
           echo '</ul>';
            
                echo '<div id="tar" class="col-md-6">';
                echo '<div id="Titulo" >';
                echo '<h3>Titulo</h3>';
                echo '<p>' . $periodicos->titulo . '</p>';
                echo '</div>';
                echo '<div id="Autores">';
                echo '<h3>Autores</h3>';
                echo '<p>' . $periodicos->autores . '</p>';
                echo '</div>';
                echo '<div id="Resumo" >';
                echo '<h3>Resumo</h3>';
                echo $periodicos->resumo;
                echo '</div>';
                echo '</div>';
                
                echo '<div id="tabelaperiodicos" class="tab-content">';
                echo '<div id="Problema" class="tab-pane fade in active"><h3>Problema</h3>';
                echo '<p>' . $periodicos->problema . '</p>';
                echo '</div>';
                echo '<div id="Objetivo" class="tab-pane fade"><h3>Objetivos</h3>';
                echo '<p>' . $periodicos->objetivo . '</p>';
                echo '</div>';
                echo '<div id="Teórico" class="tab-pane fade"><h3>Teórico</h3>';
                echo $periodicos->teorico;
                echo '</div>';
                echo '<div id="Método" class="tab-pane fade"><h3>Método</h3>';
                echo '<p>' . $periodicos->metodo . '</p>';
                echo '</div>';
                echo '<div id="Desenvolvimento" class="tab-pane fade"><h3>Desenvolvimento</h3>';
                echo '<p>' . $periodicos->desenvolvimento . '</p>';
                echo '</div>';
                echo '<div id="Resultado" class="tab-pane fade"><h3>Resultado</h3>';
                echo $periodicos->resultado;
                echo '</div>';
                echo '<div id="Analise" class="tab-pane fade"><h3>Analise</h3>';
                echo '<p>' . $periodicos->analise . '</p>';
                echo '</div>';
                echo '<div id="Conclusao" class="tab-pane fade"><h3>Conclusão</h3>';
                echo '<p>' . $periodicos->conclusao . '</p>';
                echo '</div>';
                echo '<div id="PForte" class="tab-pane fade"><h3>Pontos Fortes</h3>';
                echo $periodicos->pforte;
                echo '</div>';
                echo '<div id="PFraco" class="tab-pane fade"><h3>Pontos Fracos</h3>';
                echo $periodicos->pfraco;
                echo '</div>';
                echo '</div>';
                echo '<br>';
                echo '<br>';
                echo '</div>';
                echo '<br>';
                echo '<br>';
            }
            ?>
        

    </div>
    <br>
    <br>
</div>