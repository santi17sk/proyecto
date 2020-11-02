<?php

include 'vendor/autoload.php';
use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;
// Kint::dump($nombre, $trabajo);

$reader = ReaderEntityFactory::createReaderFromFile('GLB.Ts+dSST.csv');

$reader->open('GLB.Ts+dSST.csv');
?>
<table class="table container col-md-4 text-center">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Año</th>
            <th scope="col">Mes de Marzo</th>
        </tr>
    </thead>
    <?php foreach($reader->getSheetIterator() as $sheet): ?>
        <?php foreach($sheet->getRowIterator() as $row): ?>
            <?php $cells = $row->getCells(); ?>
            <?php if($cells[0] != 'Year' || $cells[3] != 'Mar'): ?>
            <tr>
                <td><?=$cells[0]?></td>
                <td><?=$cells[3]?></td>
            </tr>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endforeach; ?>
</table>
<?php $reader->close(); ?>