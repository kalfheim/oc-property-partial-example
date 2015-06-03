<?php namespace Krisawzm\Test\Components;

use Cms\Classes\ComponentBase;

class Testy extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Testy Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [
            'view' => [
                'title'             => 'View',
                'description'       => 'The view (partial) to render',
                'default'           => 'default',
                'type'              => 'dropdown',
                'options'           => [
                    'default' => 'Default',
                    'foo' => 'Foo',
                    'bar' => 'Bar',
                    'baz' => 'Baz'
                ],
            ],
        ];
    }

    public function onRender()
    {
        return $this->renderPartial('@' . $this->property('view'));
    }
}
