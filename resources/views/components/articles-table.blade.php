<table class="table table-striped table-hover border table-responsive">
    <thead class="table-dark">
        <tr>
            <th scope='col'>#</th>
            <th scope='col'>Titolo</th>
            <th scope='col'>Sottotitolo</th>
            <th scope='col'>Redattore</th>
            <th scope='col'>Risposta</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
        <tr>
            <th scope='row'>{{$article->id}}</th>
            <td>{{Str::limit($article->title, 8)}}</td>
            <td>{{Str::limit($article->subtitle, 8)}}</td>
            <td>{{Str::limit($article->user->name, 5)}}</td>
        <td>
            @if (is_null($article->is_accepted))
            <a href="{{ route('article.show', compact('article'))}}" class="btn btn-info text-white">Leggi</a>
                @else
            <a href="{{ route('revisor.undoArticle', compact('article'))}}" class="btn btn-info text-white">Revisiona</a>
            @endif
        </td>
    </tr>
        @endforeach
    </tbody>
</table>
