<div style="width: 100%; display: flex;justify-content: center; align-items: center; flex-direction: column"
     xmlns:livewire="http://www.w3.org/1999/html">
    <a href="{{route('articles')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">НАЗАД</a>
    <div class="card m-2" style="width: 40%; min-width: 300px">
        <img class="card-img-top" src="/img/articleHeader.jpg"
             alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{ $title }}</h5>
            <p class="card-text">{{ $body }}</p>
            <p class="card-text"><small class="text-muted">Автор: {{ $author }}</small></p>
            <p class="card-text"><small class="text-muted">Пост создан: {{ $date }}</small></p>
        </div>
    </div>

    {{--    это форма для создания карточки коммента--}}
    <livewire:components.comment :postId="$postId"/>

    {{--    это карточки--}}
    @foreach($comments as $comment)
        <div class="card" style="width: 40%; min-width: 300px; margin: 5px">
            <div class="card-body">
                <h5 class="card-title">{{ App\Models\User::find($comment->user_id)->name }}</h5>
                <p class="card-text">{{ $comment->text }}</p>
                <p class="card-text"><small class="text-muted">Комментарий создан: {{ $comment->created_at }}</small>
                </p>
            </div>
        </div>
    @endforeach
    <div>
        {{ $comments->links() }}
    </div>
</div>

