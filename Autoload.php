<?php

function CargadorClase($class)
{
    if (is_file('Controller/'.$class.'.Controller.php'))
    {
        include('Controller/'.$class.'.Controller.php');
    }
    else if (is_file('Model/'.$class.'.Controller.php'))
    {
        include('Model/'.$class.'.Controller.php');
    }
}

?>