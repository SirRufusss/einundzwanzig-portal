<?php

namespace App\Http\Livewire\Meetup\Form;

use App\Models\Meetup;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;
use WireUi\Traits\Actions;

class MeetupForm extends Component
{
    use WithFileUploads;
    use Actions;

    public string $country;

    public ?Meetup $meetup = null;

    public ?string $fromUrl = '';

    public $image;

    protected $queryString = [
        'fromUrl' => [
            'except' => null,
        ],
    ];

    public function rules()
    {
        return [
            'image' => [Rule::requiredIf(! $this->meetup->id), 'nullable', 'mimes:jpeg,png,jpg,gif', 'max:10240'],

            'meetup.city_id'          => 'required',
            'meetup.name'             => 'required',
            'meetup.community'        => 'required',
            'meetup.telegram_link'    => 'string|nullable|required_without_all:meetup.webpage,meetup.nostr,meetup.twitter_username,meetup.matrix_group',
            'meetup.intro'            => 'string|nullable',
            'meetup.webpage'          => 'string|url|nullable|required_without_all:meetup.telegram_link,meetup.nostr,meetup.twitter_username,meetup.matrix_group',
            'meetup.nostr'            => 'string|nullable|required_without_all:meetup.webpage,meetup.telegram_link,meetup.twitter_username,meetup.matrix_group',
            'meetup.twitter_username' => 'string|nullable|required_without_all:meetup.webpage,meetup.telegram_link,meetup.nostr,meetup.matrix_group',
            'meetup.matrix_group'     => 'string|nullable|required_without_all:meetup.webpage,meetup.telegram_link,meetup.nostr,meetup.twitter_username'
        ];
    }

    public function mount()
    {
        if (!$this->meetup) {
            $this->meetup = new Meetup([
                'community' => 'einundzwanzig',
            ]);
        } elseif (
            !auth()
                ->user()
                ->can('update', $this->meetup)
        ) {
            abort(403);
        }
    }

    public function submit()
    {
        $this->validate();
        $this->meetup->save();

        if ($this->image) {
            $this->meetup->addMedia($this->image)
                              ->toMediaCollection('logo');
        }

        return redirect($this->fromUrl);
    }

    public function render()
    {
        return view('livewire.meetup.form.meetup-form');
    }
}