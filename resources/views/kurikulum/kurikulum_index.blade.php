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
        <div class="flex justify-between">
            <h2>
                {{ __('List Kurikulum') }}
            </h2>
            <a href="{{ route('kurikulum_create') }}">
                <button class="btn btn-primary">Add</button>
            </a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>ID Kurikulum</th>
                    <th>Tahun Kurikulum</th>
                    <th><center>Action</center></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kurikulums as $kurikulum)
                    <tr>
                        <td>{{ $kurikulum->id }}</td>
                        <td>{{ $kurikulum->tahun }}</td>
                        <td>
                            <a href="{{ route('kurikulum_edit', $kurikulum->id) }}">
                                <center>
                                    <button class="btn btn-primary">Edit</button>
                                </center>
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('kurikulum_destroy', $kurikulum->id) }}">
                                <center>
                                    <button class="btn btn-secondary">Delete</button>
                                </center>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>