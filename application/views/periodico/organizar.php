<div class="row">
    <div class="col-md-2"></div>
    <div class="left">
        <div class="container" id="seusperiodicos">
            <h2 class="text-center"> Seus Periodicos Cadastrados </h2>
        
        <table class="table table-condensed">
            <tr>
                <th>Titulo</th>
                <th>Autores</th>
                <th>Atualizar</th>
                <th>Deletar</th>
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
                echo '<a href="'. base_url('Periodico/atualizar/'.$periodicos->id).'" class="btn btn-success btn-xs" role="button"> Atualizar </a>';
                echo '</td>';
                echo '<td>';
                echo '<a href="'. base_url('Periodico/deletar/'.$periodicos->id).'" class="btn btn-danger btn-xs" role="button"> Deletar </a>';
                echo '</td>';
                echo '<td>';                
            }
            ?>
        </table>
    </div>
        </div>
    <div class="col-md-2"></div>
</div>
