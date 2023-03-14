<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <!-- Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js"></script>
</head>

<body class="antialiased">
    <div
        class="relative sm:flex sm:justify-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div class="mx-auto p-6 lg:p-8">
            <div class="justify-center">
                <h1>{{ $page }}</h1>
                <p>{{ $subpage }}</p>
                <form action="{{ route('documents.store') }}" method="post">
                    @csrf
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">Filename</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama_penulis" class="col-sm-2 col-form-label">Diterbitkan Oleh</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('nama_penulis') is-invalid @enderror" id="nama_penulis" name="nama_penulis" value="{{ old('nama_penulis') }}">
                            @error('nama_penulis')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tarikh_diterbitkan" class="col-sm-2 col-form-label">Diterbitkan Pada</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control @error('tarikh_diterbitkan') is-invalid @enderror" id="tarikh_diterbitkan"
                                name="tarikh_diterbitkan" value="{{ old('tarikh_diterbitkan') }}">
                            @error('tarikh_diterbitkan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama_pelulus" class="col-sm-2 col-form-label">Disahkan Oleh</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('nama_pelulus') is-invalid @enderror" id="nama_pelulus" name="nama_pelulus" value="{{ old('nama_pelulus') }}">
                            @error('nama_pelulus')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tarikh_disahkan" class="col-sm-2 col-form-label">Disahkan Pada</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control @error('tarikh_disahkan') is-invalid @enderror" id="tarikh_disahkan" name="tarikh_disahkan" value="{{ old('tarikh_disahkan') }}">
                            @error('tarikh_disahkan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <a href="{{ route('documents.index') }}" type="button" class="btn btn-primary btn-sm">
                        <i class="fa-solid fa-chevron-left"></i>
                        Kembali
                    </a>
                    <button type="submit" class="btn btn-success btn-sm">
                        <i class="fa-solid fa-floppy-disk"></i>
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
