<div class="row">
    <div class="col-md-2"></div>
    <div class="left">
        <div class="container" id="seusperiodicos"><h2 class="text-center"> Seus Periodicos Cadastrados </h2>
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#Titulo">Titulo</a></li>
                <li><a data-toggle="tab" href="#Autores">Autores</a></li>
                <li><a data-toggle="tab" href="#Resumo">Resumo</a></li>
                <li><a data-toggle="tab" href="#Problema">Problema</a></li>
                <li><a data-toggle="tab" href="#Objetivo">Objetivo</a></li>
                <li><a data-toggle="tab" href="#Teórico">Teórico</a></li>
                <li><a data-toggle="tab" href="#Método">Método</a></li>
                <li><a data-toggle="tab" href="#Desenvolvimento">Desenvolvimento</a></li>
                <li><a data-toggle="tab" href="#Resultado">Resultado</a></li>
                <li><a data-toggle="tab" href="#Analise">Analise</a></li>
                <li><a data-toggle="tab" href="#Conclusao">Conclusão</a></li>
                <li><a data-toggle="tab" href="#PForte">Pontos Fortes</a></li>
                <li><a data-toggle="tab" href="#PFraco">Pontos Fracos</a></li>
            </ul>
            <?php
            foreach ($periodico->result() as $periodicos) {
                echo '<div id="tabelaperiodicos" class="tab-content">';
                echo '<div id="Titulo" class="tab-pane fade in active">';
                echo '<p>' . $periodicos->titulo . '</p>';
                echo '</div>';
                echo '<div id="Autores" class="tab-pane fade">';
                echo '<p>' . $periodicos->autores . '</p>';
                echo '</div>';
                echo '<div id="Resumo" class="tab-pane fade">';
                echo $periodicos->resumo;
                echo '</div>';                
                echo '<div id="Problema" class="tab-pane fade in active">';
                echo '<p>' . $periodicos->problema . '</p>';
                echo '</div>';
                echo '<div id="Objetivo" class="tab-pane fade">';
                echo '<p>' . $periodicos->objetivo . '</p>';
                echo '</div>';
                echo '<div id="Teórico" class="tab-pane fade">';
                echo $periodicos->teorico;
                echo '</div>';
                echo '<div id="Método" class="tab-pane fade in active">';
                echo '<p>' . $periodicos->metodo . '</p>';
                echo '</div>';
                echo '<div id="Desenvolvimento" class="tab-pane fade">';
                echo '<p>' . $periodicos->desenvolvimento . '</p>';
                echo '</div>';
                echo '<div id="Resultado" class="tab-pane fade">';
                echo $periodicos->resultado;
                echo '</div>';
                echo '<div id="Analise" class="tab-pane fade in active">';
                echo '<p>' . $periodicos->analise . '</p>';
                echo '</div>';
                echo '<div id="Conclusao" class="tab-pane fade">';
                echo '<p>' . $periodicos->conclusao . '</p>';
                echo '</div>';
                echo '<div id="PForte" class="tab-pane fade">';
                echo $periodicos->pforte;
                echo '</div>';
                echo '<div id="PFraco" class="tab-pane fade">';
                echo $periodicos->pfraco;
                echo '</div>';
                echo '</div>';
                echo '<br>';
                echo '<br>';
            }
            ?>
        </div>

    </div>
</div>