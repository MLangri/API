<?php
#php inbuilt constant : absolute path of the directory

/*the below method is tedious
require_once 'CountyMix.php';
use Mixer\CountyMix;

$testObject = new CountyMix;*/

//die(__DIR__); 

# autoloading of classes

require_once 'vendor/autoload.php';

use Amenadiel\JpGraph\Graph;
use Amenadiel\JpGraph\Plot;

// Create the Pie Graph.
$graph = new Graph\PieGraph(1000, 1000);
$graph->title->Set("A Simple Pie Plot");
$graph->SetBox(true);

$data = array(40, 21, 17, 14, 23);
$p1   = new Plot\PiePlot($data);
$p1->ShowBorder();
$p1->SetColor('black');
$p1->SetSliceColors(array('#1E90FF', '#2E8B57', '#ADFF2F', '#DC143C', '#BA55D3'));

$graph->Add($p1);
$graph->Stroke();
