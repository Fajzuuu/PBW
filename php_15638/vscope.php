<?php
    // global scope
    $kerupuk = 10;

    function bapak () {
        // Local scope
        $kerupuk_bapak = 5;
        $kerupuk_bapak = $kerupuk_bapak - 3;
        echo "Sisa kerupuk bapak = ",$kerupuk_bapak," <br> ";
    }

    $kerupuk = $kerupuk - 4;

    bapak();

    echo "jumlah sisa kerupuk = ",$kerupuk;