<?php

namespace srag\CustomInputGUIs\OpencastPageComponent\NumberInputGUI;

use ilNumberInputGUI;
use ilTableFilterItem;
use ilToolbarItem;
use srag\DIC\OpencastPageComponent\DICTrait;

/**
 * Class NumberInputGUI
 *
 * @package srag\CustomInputGUIs\OpencastPageComponent\NumberInputGUI
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class NumberInputGUI extends ilNumberInputGUI implements ilTableFilterItem, ilToolbarItem
{

    use DICTrait;


    /**
     * @inheritdoc
     */
    public function getTableFilterHTML()/*: string*/
    {
        return $this->render();
    }


    /**
     * @inheritdoc
     */
    public function getToolbarHTML()/*: string*/
    {
        return $this->render();
    }
}
