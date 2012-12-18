<?php

namespace Qafoo\Graph;

require __DIR__ . '/../src/php/Qafoo/Graph/bootstrap.php';

$chart = new LineChart('Example');
$chart->data['foo'] = new \ezcGraphArrayDataSet(array(
    1 => 2,
    2 => 2,
    3 => 2,
    4 => 2,
));

$chart->render(400, 200, __FILE__ . '.svg');

