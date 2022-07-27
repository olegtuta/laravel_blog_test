<?php

namespace App\Http\Livewire\Pages;

use App\Models\Article;
use App\Models\Comment;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class MorePage extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $userId;
    public $postId;
    public $comment;
    protected $listeners = [
        'rerenderMorePage'
    ];
    protected $rules = [
        'comment' => 'required|min:2|max:300'
    ];

    public function rerenderMorePage()
    {
        $this->render();
    }

    public function updating()
    {
        $this->resetPage();
    }

    public function sendComment()
    {
        $this->validate();
        //сюда дойдет только если комент соответствует правилу
        Comment::create([
            'user_id' => auth()->id(),
            'article_id' => $this->postId,
            'text' => $this->comment
        ]);
    }

    public function render()
    {
        $firstArticle = Article::where('user_id', $this->userId)
            ->where('id', $this->postId)
            ->get()[0];
        return view('livewire.pages.more-page', [
            'title' => $firstArticle->title,
            'body' => $firstArticle->body,
            'date' => $firstArticle->created_at,
            'author' => User::find($this->userId)->name,
            'comments' => Comment::where('article_id', $this->postId)->orderBy('created_at', 'DESC')->paginate(10),
        ]);
    }
}
