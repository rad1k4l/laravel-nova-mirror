<?php

namespace Laravel\Nova\Fields;

class Select extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'select-field';

    /**
     * Set the options for the select menu.
     *
     * @param  array  $options
     * @return $this
     */
    public function options($options)
    {
        return $this->withMeta([
            'options' => collect($options ?? [])->map(function ($label, $value) {
                return ['label' => $label, 'value' => $value];
            })->values()->all(),
        ]);
    }
}
