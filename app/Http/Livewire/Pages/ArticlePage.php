<?php

namespace App\Http\Livewire\Pages;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;

class ArticlePage extends Component
{
    use WithPagination;

    public $filter = [
        'fromTO' => 'DESC',
        'category' => ''
    ];
    protected string $paginationTheme = 'bootstrap';
    protected $listeners = [
        'rerenderArticlePage'
    ];

    public function rerenderArticlePage()
    {
        $this->render();
    }

    public function updated()
    {
        $this->resetPage();
    }

    public function render()
    {
        if ($this->filter['category'] == '') {
            $articles = Article::orderBy('created_at', $this->filter['fromTO'])->paginate(10);
        } else {
            $articles = Article::where('category', $this->filter['category'])->orderBy('created_at', $this->filter['fromTO'])->paginate(10);
        }
        return view('livewire.pages.article-page', [
            'articles' => $articles
        ]);
    }
}
