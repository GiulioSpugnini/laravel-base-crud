<form class="my-3" action="{{ route('comics.store') }}" method="POST">
    @csrf
    <div class="row gy-2">
        <div class="col-6">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="col-6">
            <div class="mb-3">
                <label for="image" class="form-label">Immagine</label>
                <input type="url" class="form-control" id="image" name="thumb">
            </div>

        </div>
        <div class="col-6">
            <label for="price" class="form-label">Prezzo</label>
            <input step="0.01" type="number" class="form-control" id="price" name="price">
        </div>
        <div class="col-6">
            <label for="serie" class="form-label">Serie</label>
            <input type="text" class="form-control" id="serie" name="series">
        </div>
        <div class="col-6">
            <label for="sale_date" class="form-label">Data di vendita</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date">
        </div>
        <div class="col-6">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="type" name="type">
        </div>
        <div class="col-12 text-center">
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" rows="5" name="description"></textarea>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-end align-items-center">
        <button type="submit" class="btn btn-success">
            Conferma

        </button>
    </div>

</form>
