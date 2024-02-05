<?php

namespace App\Http\Livewire;

//use App\Models\Blog;
use Livewire\Component;
use Livewire\WithFileUploads;

class Blog extends Component
{
    use WithFileUploads;

    public $form = [
        'category_id' => '',
        'name' => '',
        'tags' => '',
        'description' => '',
        'photo' => '',
    ];

    protected $rules = [
        'form.category_id' => 'required',
        'form.name' => 'required',
        // Add validation rules for other form fields as needed
    ];

    public function submit(): void
    {
        $this->validate();

        $this->storePhoto();

        Blog::create($this->form);

        $this->reset('form');

        session()->flash('message', 'Blog added successfully!');
    }

    private function storePhoto(): void
    {
        if (isset($this->form['photo'])) {
            $this->form['photo'] = $this->form['photo']->store('photos', 'public');
        }
    }

    public function render()
    {
        $blogs = Blog::all(); // Fetch all blogs from the database
        return view('livewire.Blogs.list', ['blogs' => $blogs]);
    }
}
