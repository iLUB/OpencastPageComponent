<?php

/* Copyright (c) 1998-2009 ILIAS open source, Extended GPL, see https://github.com/ILIAS-eLearning/ILIAS/tree/trunk/docs/LICENSE */

namespace srag\Plugins\OpencastPageComponent\Config;

use srag\Plugins\OpencastPageComponent\Utils\OpencastPageComponentTrait;
use ilOpencastPageComponentPlugin;
use srag\ActiveRecordConfig\OpencastPageComponent\ActiveRecordConfig;

/**
 * Class Config
 *
 * Generated by srag\PluginGenerator v0.13.8
 *
 * @package srag\Plugins\OpencastPageComponent\Config
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 * @author  studer + raimann ag - Team Custom 1 <info@studer-raimann.ch>
 */
class Config extends ActiveRecordConfig
{

    use OpencastPageComponentTrait;
    const TABLE_NAME = "copg_pgcp_ocpc_config";
    const PLUGIN_CLASS_NAME = ilOpencastPageComponentPlugin::class;
    const KEY_DEFAULT_WIDTH = "default_width";
    const KEY_DEFAULT_HEIGHT = "default_height";
    const KEY_DEFAULT_AS_IFRAME = "default_as_iframe";

    /**
     * @var array
     */
    protected static $fields
        = [
            self::KEY_DEFAULT_WIDTH => self::TYPE_INTEGER,
            self::KEY_DEFAULT_HEIGHT => self::TYPE_INTEGER,
            self::KEY_DEFAULT_AS_IFRAME => self::TYPE_BOOLEAN
        ];
}