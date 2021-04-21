<h1>Nos légumes</h1>


<?php 
/*
let data = [];
for(let i= 0; i < data.length; i++) 
{

}
*/

$vegetables_length = count($vegetables);

for($i = 0; $i < $vegetables_length; $i++) 
{
    echo $vegetables[$i]['Name'].' '.$vegetables[$i][2].' <br>';
}

echo '<pre>';
echo var_export($vegetables, true);
?>