<?php
/*
<!--
        o o     o     +   *    *       o
+   +     +      * *     o     +       +
            +
o  +    +        o  +  *     *    +        +
     ___   _   _____   _____   _____
    /   | | | |  _  \ |  _  \ /  ___/
   / /| | | | | | | | | |_| | | |___
  / / | | | | | | | | |  _  { \___  \
 / /  | | | | | |_| | | |_| |  ___| |
/_/   |_| |_| |_____/ |_____/ /_____/

o o     o     +  *    *     o
+   +     +       *      o     +       +

     ***  BY :- AIDBS  *** 

o o     o     +              o
+   +     +        *     o     +       +
            +
o  +    +        o  +  o *   +  *  O  )
-->
*/
?>

<?php
$connection = mysql_connect('127.0.0.1', 'aidbsdbu', 'WY3EM2Fz6SyMwfA8');
if (!$connection){
    die("<script>location.href = '500/'</script>");
}
$clouddb = mysql_select_db('aidbs_data');
if (!$clouddb){
    die("<script>location.href = '500/'</script>");
}
?>
