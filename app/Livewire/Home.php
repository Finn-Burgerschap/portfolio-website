<?php

namespace App\Livewire;

use App\Models\Project;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Home extends Component
{
    public Collection $projects;

    public Collection $social_studies;

    public string $contact_body = '';

    public function mount(): void
    {
        $this->projects = Project::projects()->get();
        $this->social_studies = Project::socialStudies()->get();
    }

    #[Computed]
    public function encodedContactBody(): string
    {
        return str_replace("\n", "%0D%0A", $this->contact_body);
    }

    public function render()
    {
        return view('livewire.home');
    }
}
