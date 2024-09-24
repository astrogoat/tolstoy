<?php

namespace Astrogoat\Tolstoy\Settings;

use Helix\Lego\Settings\AppSettings;
use Illuminate\Validation\Rule;

class TolstoySettings extends AppSettings
{
    // public string $url;

    public function rules(): array
    {
        // return [
        //     'url' => Rule::requiredIf($this->enabled === true),
        // ];
    }

    public function description(): string
    {
        return 'Interact with Tolstoy.';
    }

    public static function group(): string
    {
        return 'tolstoy';
    }
}
