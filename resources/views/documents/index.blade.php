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
                <div class="float-end">
                    <a href="{{ route('documents.create') }}" type="button" class="btn btn-success btn-sm">
                        <i class="fa-solid fa-file-circle-plus"></i>
                    </a>
                </div>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tajuk Dokumen</th>
                            <th scope="col">Tarikh Diterbitkan</th>
                            <th scope="col">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($documents as $document)
                            <tr>
                                <th scope="row">{{ $document->id }}</th>
                                <td>{{ $document->name }}</td>
                                <td>{{ $document->tarikh_diterbitkan }}</td>
                                <td>

                                    <form action="{{ route('documents.destroy', $document) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('documents.edit', $document) }}" type="button" class="btn btn-warning btn-sm">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </a>
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fa-regular fa-trash-can"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $documents->links() }}
            </div>
        </div>
    </div>
</body>

</html>
