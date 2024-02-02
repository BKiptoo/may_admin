<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class Blog extends Component
{
    use WithFileUploads;

    public array $form = [
        'category_id' => '',
        'name' => '',
        'tags' => '',
        'description' => '',
        'photo' => '',
    ];

    private static function create(array $array)
    {
    }

    public function submit(): void
    {
        // Validate the form data
        $this->validate([
            'form.category_id' => 'required',
            'form.name' => 'required',
            // Add validation rules for other form fields as needed
        ]);

        // Process form submission
        // For example, create a new blog entry in the database
        Blog::create([
            'category_id' => $this->form['category_id'],
            'name' => $this->form['name'],
            'tags' => $this->form['tags'],
            'description' => $this->form['description'],
            // Handle file upload
            'photo' => $this->form['photo']->store('photos', 'public'),
        ]);

        // Clear the form after successful submission
        $this->reset('form');

        // Optionally, you can add a message or redirect the user
        session()->flash('message', 'Blog added successfully!');
    }
    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.blog');
    }
}
