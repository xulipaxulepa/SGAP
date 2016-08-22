<div class="row">
    <div class="col-md-2"></div>
    <div class="left">
        <h2 class="text-center"> Seus Periodicos Cadastrados </h2>
        <table class="table table-condensed">
            <tr>
                <th>Titulo</th>
                <th>Autores</th>
                <th>Resumo</th>
                <th>Problema</th>
                <th>Objetivo</th>
                <th>Teórico</th>
                <th>Método</th>
                <th>Desenvolvimento</th>
                <th>Resultado</th>
                <th>Analise</th>
                <th>Conclusão</th>
                <th>Pontos Fortes</th>
                <th>Pontos Fracos</th>
            </tr>
            <?php
            foreach ($periodico->result() as $periodicos) {
                echo '<tr>';
                echo '<td>';
                echo $periodicos->titulo;
                echo '</td>';
                echo '<td>';
                echo $periodicos->autores;
                echo '</td>';
                echo '<td>';
                echo $periodicos->resumo;
                echo '</td>';
                echo '<td>';
                echo $periodicos->problema;
                echo '</td>';
                echo '<td>';
                echo $periodicos->objetivo;
                echo '</td>';
                echo '<td>';
                echo $periodicos->teorico;
                echo '</td>';
                echo '<td>';
                echo $periodicos->metodo;
                echo '</td>';
                echo '<td>';
                echo $periodicos->desenvolvimento;
                echo '</td>';
                echo '<td>';
                echo $periodicos->resultado;
                echo '</td>';
                echo '<td>';
                echo $periodicos->analise;
                echo '</td>';
                echo '<td>';
                echo $periodicos->conclusao;
                echo '</td>';
                echo '<td>';
                echo $periodicos->pforte;
                echo '</td>';
                echo '<td>';
                echo $periodicos->pfraco;
                echo '</td>';
                echo '<td>';
            }
            ?>
        </table>
    </div>
    <div class="col-md-2"></div>
</div>
