<div>
    <div>
        <div class="d-flex justify-content-center w-100">
            <livewire:components.post/>
        </div>
        <div class="d-flex justify-content-center w-100">
            <hr class="w-50 mt-5">
        </div>
        <div class="d-flex justify-content-center w-100">
            <h3 class="text-primary">ФИЛЬТР ПОСТОВ:</h3>
        </div>
        <div class="form-check d-flex justify-content-center w-100">
            <input wire:model="filter.fromTO" class="form-check-input" type="radio" name="exampleRadios"
                   id="exampleRadios1"
                   value="DESC" checked>
            <label class="form-check-label" for="exampleRadios1">
                От новых к старым
            </label>
        </div>
        <div class="form-check d-flex justify-content-center w-100">
            <input wire:model="filter.fromTO" class="form-check-input" type="radio" name="exampleRadios"
                   id="exampleRadios2"
                   value="ASC">
            <label class="form-check-label" for="exampleRadios2">
                От старых к новым
            </label>
        </div>
        <div class="d-flex justify-content-center w-100">
            <hr class="w-50 mt-5">
        </div>
        <div class="form-check d-flex justify-content-center w-100">
            <input wire:model="filter.category" value="" class="form-check-input" type="radio" name="exampleRadios2"
                   id="exampleRadios3">
            <label class="form-check-label" for="exampleRadios3">
                Не выбрано
            </label>
        </div>
        <div class="form-check d-flex justify-content-center w-100">
            <input wire:model="filter.category" value="soc" class="form-check-input" type="radio" name="exampleRadios2"
                   id="exampleRadios4">
            <label class="form-check-label" for="exampleRadios4">
                Социум
            </label>
        </div>
        <div class="form-check d-flex justify-content-center w-100">
            <input wire:model="filter.category" value="law" class="form-check-input" type="radio" name="exampleRadios2"
                   id="exampleRadios4">
            <label class="form-check-label" for="exampleRadios5">
                Право
            </label>
        </div>
        <div class="form-check d-flex justify-content-center w-100">
            <input wire:model="filter.category" value="another" class="form-check-input" type="radio" name="exampleRadios2"
                   id="exampleRadios6">
            <label class="form-check-label" for="exampleRadios6">
                Другое
            </label>
        </div>
    </div>
    <div class="d-flex flex-wrap justify-content-center w-100">
        @foreach($articles as $article)
            <div class="card m-3" style="width: 18rem;">
                <img src="img/post.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $article->title }}</h5>
                    <p class="card-text">{{ mb_strimwidth($article->body, 0, 60, '...') }}</p>
                    <p class="card-text"><small class="text-muted">Категория: {{ $article->category }}</small></p>
                    <p class="card-text"><small class="text-muted">Создан: {{ $article->created_at }}</small></p>
                    <a href="more/{{ $article->user_id }}/{{ $article->id }}" class="btn btn-primary">подробнее</a>
                </div>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center width-50 ">
        {{ $articles->links() }}
    </div>
</div>

