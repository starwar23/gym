<?php

namespace App\Orchid\Screens\Examples;

use Illuminate\Http\Request;
use Orchid\Platform\Models\User;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Layouts\Modal;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class ExampleCardsScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'user' => User::firstOrFail(),
            'quill' => 'Hello! We collected all the fields in one place',
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Cards';
    }


    /**
     * Button commands.
     *
     * @return Action[]
     */
    public function commandBar(): iterable
    {
        return [
            ModalToggle::make('Launch demo modal')
                ->modal('exampleModal')
                ->method('action')
                ->icon('full-screen'),
        ];
    }

    /**
     * Views.
     *
     * @return array
     * @throws \Throwable
     *
     */
    public function layout(): iterable
    {
        return [
            Layout::modal('exampleModal', [
                Layout::rows([
                    Quill::make('quill')
                        ->title('Quill')
                        ->popover('Quill is a free, open source WYSIWYG editor built for the modern web.'),
                ]),
            ])
                ->title('Заголовок окна')
                ->size(Modal::SIZE_LG)
                ->applyButton('Отправить33')
                ->closeButton('Закрыть')
                ->withoutCloseButton(),
        ];
    }

    /**
     * @param Request $request
     */
    public function showToast(Request $request): void
    {
        Alert::info('Your email message has been sent successfully.');
    }

    public function action(): void
    {
        Toast::info('Hello, world! This is a toast message.');
    }
}
