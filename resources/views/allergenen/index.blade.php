<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allergenen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container d-flex justify-content-center">
        <div class="col-md-8">

            <h2>{{ $title }}</h2>

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Sluiten"></button>
                </div>
                <meta http-equiv="refresh" content="3;url={{ route('allergeen.index') }}">
            @elseif (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Sluiten"></button>
                </div>
                <meta http-equiv="refresh" content="3;url={{ route('allergeen.index') }}">
            @endif

            <a href="{{ route('allergeen.create') }}" class="btn btn-primary my-3">Nieuwe Allergeen</a>

            <table class="table table-striped table-bordered align-middle shadow-sm">
                <thead>
                    <th>Naam</th>
                    <th>Omschrijving</th>
                    <th class="text-center">Verwijder</th>
                    <th class="text-center">Wijzig</th>
                </thead>
                <tbody>
                    @forelse ($allergenen as $allergeen)
                        <tr>
                            <td>{{ $allergeen->Naam }}</td>
                            <td>{{ $allergeen->Omschrijving }}</td>
                            <td class="text-center">
                                <form action="{{ route('allergeen.destroy', $allergeen->Id) }}" method="POST"
                                    onsubmit="return confirm('Weet je zeker dat je dit allergeen wilt verwijderen?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Verwijder</button>
                                </form>
                            </td>
                            <td class="text-center">
                                <a href="{{ route('allergeen.edit', $allergeen->Id) }}" class="btn btn-success">Wijzig</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">Geen allergenen beschikbaar</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
