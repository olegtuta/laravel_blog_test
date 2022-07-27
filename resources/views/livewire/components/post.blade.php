<div wire:poll class="card-footer py-3 border-0 w-50">
    @if($isSuccess)
    <div class="alert alert-success text-center" role="alert">
        Пост отправлен.
    </div>
    @endif
    @error('title')
    <div class="alert alert-danger text-center" role="alert">
        {{ $message }}
    </div>
    @enderror
    @error('body')
    <div class="alert alert-danger text-center" role="alert">
        {{ $message }}
    </div>
    @enderror
        <div class="form-check d-flex justify-content-center w-100">
            <input wire:model="category" checked value="soc" class="form-check-input" type="radio" name="exampleRadios3"
                   id="example">
            <label class="form-check-label" for="example">
                Социум
            </label>
        </div>
        <div class="form-check d-flex justify-content-center w-100">
            <input wire:model="category" value="law" class="form-check-input" type="radio" name="exampleRadios3"
                   id="example2">
            <label class="form-check-label" for="example2">
                Право
            </label>
        </div>
        <div class="form-check d-flex justify-content-center w-100">
            <input wire:model="category" value="another" class="form-check-input" type="radio" name="exampleRadios3"
                   id="example3">
            <label class="form-check-label" for="example3">
                Другое
            </label>
        </div>
    <div class="input-group mb-3">
        <input
            wire:model="title"
            type="text"
            class="form-control"
            placeholder="Введите заголовок"
            aria-describedby="basic-addon1"
            maxlength="20"
        />
    </div>
    <div class="d-flex flex-start w-100">
        <div class="form-outline w-100">
            <textarea
                wire:model="body"
                maxlength="200"
                placeholder="Введите текст статьи..."
                class="form-control"
                id="textAreaExample"
                rows="4"
            >
            </textarea>
            <div class="form-notch">
                <div class="form-notch-leading" style="width: 9px;"></div>
                <div class="form-notch-middle" style="width: 60px;"></div>
                <div class="form-notch-trailing"></div>
            </div>
        </div>
    </div>
    <div class="float-end mt-2 pt-1">
        <button wire:click="send" type="button" class="btn btn-outline-primary btn-sm">ОПУБЛИКОВАТЬ</button>
    </div>
</div>
