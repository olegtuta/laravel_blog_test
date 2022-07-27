<?php

namespace App\Http\Livewire\Components;

use App\Models\Article;
use Livewire\Component;

class Post extends Component
{
    public $title;
    public $body;
    public $category = 'soc';
    public $isSuccess = false;
    protected $rules = [
        'title' => 'required|min:3|max:20',
        'body' => 'required|min:5|max:200',
        'category' => 'in:law,soc,another'
    ];

    public function booted()
    {
        $this->isSuccess = false;
    }

    public function send()
    {
        $this->validate();
        Article::create([
            'user_id' => auth()->id(),
            'category' => $this->category,
            'title' => $this->title,
            'body' => $this->body,
        ]);
        $this->isSuccess = true;
        $this->emit('rerenderArticlePage');
    }

    public function render()
    {
        return view('livewire.components.post');
    }
}
