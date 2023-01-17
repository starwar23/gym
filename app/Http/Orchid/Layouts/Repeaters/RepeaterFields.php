<?php

namespace App\Http\Orchid\Layouts\Repeaters;

use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Layouts\Rows;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;

class RepeaterFields extends Rows
{
    function fields(): array
    {
        return [
            Input::make('name')
                ->type('text')
                ->title('Название'),
            Picture::make('img')
                ->src(false)
                ->title('Картинка')
                ->horizontal(),
        ];
    }
}
