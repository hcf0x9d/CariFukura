<?php
    /**
     * <link rel="stylesheet" type="text/css" media="screen, print, projection" href="/css/compressed.css.php" />
     */

    $cssFiles = array(
        'pool/base.css',
        'pool/header-footer.css',
        'pool/grid-fluid.css',
        'pool/mobile.css'
    );

    $buffer = "";
    foreach ($cssFiles as $cssFile) {
      $buffer .= file_get_contents($cssFile);
    }

    $buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
    $buffer = str_replace(': ', ':', $buffer);
    $buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);

    ob_start("ob_gzhandler");

    header('Cache-Control: public');
    header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 86400) . ' GMT');
    header("Content-type: text/css");

    echo($buffer);
?>