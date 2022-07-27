<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use App\Models\Comment as CommentModel;

class Comment extends Component
{
    public $postId;
    public $comment;
    protected $rules = [
        'comment' => 'required|min:2|max:300'
    ];

    public function sendComment()
    {
        $this->validate();
        //сюда дойдет, только если комент соответствует правилу
        CommentModel::create([
            'user_id' => auth()->id(),
            'article_id' => $this->postId,
            'text' => $this->comment
        ]);
        $this->emit('rerenderMorePage');
    }

    public function render()
    {
        return view('livewire.components.comment');
    }
}
