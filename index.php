<?php
//all your code
$myname = "Vanilstelrooy Obare";
// echo $myname
// arrays
$students = array("Purity","Annette","Obare","Jamal","Diana");
echo $students[2 ];
// associating arrays
$mymarks = array( "assesments" => 25,
                  "cats" => 15,
                  "projects" => 35,
                  "attendance" => 9,
);
echo "My Project Marks:" .$mymarks["projects"];
// Multidimentional Arrays
$webdevtechnologies = array( 
    'frontend' => array('html', 'css', 'js','bootstrap'),
    'backend' => array('PHP','Python','Java','Js'),
    'frameworks' =>array('Laravel','Django','SpringBoot','flutter'),
    'database' =>array('MySQL','PostgreSQL','MongoDB','Firebase'),
);
echo $webdevtechnologies['frontend'][1];
echo $webdevtechnologies['frameworks'][2];
echo $webdevtechnologies['database'][0];
?>