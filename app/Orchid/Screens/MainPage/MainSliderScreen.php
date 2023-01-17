<?php

namespace App\Orchid\Screens\MainPage;

use App\Http\Orchid\Layouts\Repeaters\RepeaterFields;
use App\Models\MainSlider;
use Illuminate\Support\Str;
use Nakukryskin\OrchidRepeaterField\Fields\Repeater;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Code;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\SimpleMDE;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Repository;
use Orchid\Screen\Screen;
use Illuminate\Http\Request;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class MainSliderScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public const TEXT_EXAMPLE = 'Lorem ipsum at sed ad fusce faucibus primis, potenti inceptos ad taciti nisi tristique
    urna etiam, primis ut lacus habitasse malesuada ut. Lectus aptent malesuada mattis ut etiam fusce nec sed viverra,
    semper mattis viverra malesuada quam metus vulputate torquent magna, lobortis nec nostra nibh sollicitudin
    erat in luctus.';
    public function query(): iterable
    {
        return [
            'sliders' => MainSlider::all(),
            'table' => [
                new Repository(['id' => 100, 'name' => self::TEXT_EXAMPLE, 'price' => 10.24, 'created_at' => '01.01.2020']),
                new Repository(['id' => 200, 'name' => self::TEXT_EXAMPLE, 'price' => 65.9, 'created_at' => '01.01.2020']),
                new Repository(['id' => 300, 'name' => self::TEXT_EXAMPLE, 'price' => 754.2, 'created_at' => '01.01.2020']),
                new Repository(['id' => 400, 'name' => self::TEXT_EXAMPLE, 'price' => 0.1, 'created_at' => '01.01.2020']),
                new Repository(['id' => 500, 'name' => self::TEXT_EXAMPLE, 'price' => 0.15, 'created_at' => '01.01.2020']),

            ],
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Главная страница.Слайдер';
    }

    /**
     * Button commands.
     *
     * @return Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Send Message')
                ->icon('paper-plane')
                ->method('sendMessage')
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]
     * @throws \Throwable
     *
     */
    public function layout(): iterable
    {
        return [
            Layout::rows([
                Repeater::make('sliders')
                    ->title('Слайдер')
                    ->buttonLabel('Добавить слайд')
                    ->layout(RepeaterFields::class)->title('Загрузить'),

            ]),
            Layout::table('table', [
                TD::make('id', 'ID')
                    ->width('150')
                    ->render(fn(Repository $model) => // Please use view('path')
                    "<img src='https://loremflickr.com/500/300?random={$model->get('id')}'
                              alt='sample'
                              class='mw-100 d-block img-fluid rounded-1 w-100'>
                            <span class='small text-muted mt-1 mb-0'># {$model->get('id')}</span>"),

                TD::make('name', 'Name')
                    ->width('450')
                    ->render(fn(Repository $model) => Str::limit($model->get('name'), 200)),

                TD::make('price', 'Price')
                    ->render(fn(Repository $model) => '$ ' . number_format($model->get('price'), 2)),

                TD::make('created_at', 'Created'),
            ]),


        ];
    }
    public function sendMessage(MainSlider $sliderMain, Request $request)
    {
        $sliders = $request->get('sliders');
        foreach ($sliders as $slide){
            MainSlider::query()->updateOrCreate(
                [ 'name' =>  $slide['name']],
                $slide
            );
        }

    }
}

