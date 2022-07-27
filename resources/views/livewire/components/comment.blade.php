<div class="card-footer py-3 border-0" style="width: 40%; min-width: 300px; margin: 5px">
    <div class="d-flex flex-start w-100">
        <div class="form-outline w-100">
            <textarea
                wire:model="comment"
                maxlength="300"
                placeholder="Введите комментарий..."
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
        <button wire:click="sendComment" type="button" class="btn btn-outline-primary btn-sm">ОПУБЛИКОВАТЬ</button>
    </div>
</div>
