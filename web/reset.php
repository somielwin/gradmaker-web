<?php

    $file = __DIR__.'/counter.txt';

    $file = fopen($file, "w") or die("Unable to open file!");
    fwrite($file, 500);
    fclose($file);

    echo "Successfully reset to 500. Go back to <a href='/'>home page</a>.";