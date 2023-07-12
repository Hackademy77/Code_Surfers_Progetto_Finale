<x-layout>
    <style>
        body{
            margin-top: 200px;
        }
        .header_navbar{
            background-color: #4b576a;
        }
        
    </style>
    <div class="container">
    <form action="{{ route('article.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" name="title" value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror"  >
            @error('title')
                <div class="alert text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Sottotitolo: </label>
            <input type="text" name="subtitle" value="{{ old('subtitle') }}" class="form-control @error('subtitle') is-invalid @enderror"  >
            @error('subtitle')
                <div class="alert text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Immagine :</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Categoria :</label>
            <select name="category" class="form-select">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Corpo del testo: </label>
            <textarea name="body" id="" cols="30" rows="7" class="form-control"> {{old('body')}} </textarea>
        </div>
        <button type="submit" class="btn btn-success">Salva</button>
      </form>
    </div>
      {{-- {{ route('article.store') }} --}}
</x-layout>