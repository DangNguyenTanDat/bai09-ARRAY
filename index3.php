<?php
$marks = array(
    "mohammad" => array(
        "physics" => 35,
        "maths" => 30,
        "chemisty" => 39,
    ),
    "qadir" => array(
        "physics" => 30,
        "maths" => 32,
        "chemisty" => 29,
    ),
    "zara" => array(
        "physics" => 31,
        "maths" => 22,
        "chemisty" => 39,
    )
);
/* Accessing multi-dimensional array values */
echo "Marks for mohammad in physics :";
echo $marks['mohammad']['physics'] . "<br/>";
?>