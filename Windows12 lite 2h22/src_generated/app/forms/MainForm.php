<?php
namespace app\forms;

use std, gui, framework, app;


class MainForm extends AbstractForm
{

    /**
     * @event button.click-Left 
     */
    function doButtonClickLeft(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->loadForm('lision');

        
    }

}
