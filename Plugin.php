<?php namespace Krisawzm\Test;

use System\Classes\PluginBase;

/**
 * Test Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Test',
            'description' => 'No description provided yet...',
            'author'      => 'Krisawzm',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerComponents()
    {
        return [
            'Krisawzm\\Test\\Components\\Testy' => 'testy'
        ];
    }
}
