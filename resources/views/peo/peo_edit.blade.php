<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    </head>
    <body>
        <div>
            <form method="POST" action="{{ route('peo_update', $peo->id) }}">
                @csrf
                <div class="mb-3">
                    <label for="kurikulum_id" class="form-label">ID Kurikulum</label>
                    <input type="number" class="form-control" id="kurikulum_id" name="kurikulum_id" value="{{ $peo->kurikulum_id }}">
                </div>

                <div class="mb-3">
                    <label for="kode_peo" class="form-label">Kode PEO</label>
                    <input type="text" class="form-control" id="kode_peo" name="kode_peo" value="{{ $peo->kode_peo }}">
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ $peo->deskripsi }}">
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a href="{{ route('peo_index') }}">
                        {{ __('Cancel') }}
                    </a>
                    <button type="submit" class="btn btn-primary">
                        {{ __('Add') }}
                    </button>
                </div>
            </form>
        </div>
    </body>
</html>