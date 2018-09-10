<?php

    header("Content-type: text/css; charset:UTF-8");
    print "header{";
    print "text-align: center;";
    print "}";
    
    print "h1,h3{";
    print "font-weight: normal;";
    print "}";
    
    print ".centering{";
    print "text-align: center;";
    print "}";
?>

    <?php
        session_start();
        $color = $_SESSION['colorVariable'];
        $fontFamily = $_SESSION['fontFamilyVariable'];
        $fontWeight = $_SESSION['fontWeightVariable'];
        $fontSize = $_SESSION['fontSizeVariable'];
        print ".modifiable {";
        print "color: " . $color . ";";
        print "font-family: " . $fontFamily . ";";
        print "font-weight: " . $fontWeight . ";";
        print "font-size: " . $fontSize . "px;";
    print "}";
    ?>