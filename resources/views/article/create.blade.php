<x-layout>
    <style>
        body{
            margin-top: 200px;
        }
        .header_navbar{
            background-color: #ffffff;
        }
        
    </style>
    <div class="container">
        <h1 class="text-center mb-5">CREA IL TUO ARTICOLO</h1>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-12 col-md-6 mt-5">
                <form action="{{ route('article.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label fw-bold">Titolo</label>
                        <input type="text" name="title" value="{{ old('title') }}" class="form-control border border-danger @error('title') is-invalid @enderror"  >
                        @error('title')
                            <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label fw-bold">Sottotitolo: </label>
                        <input type="text" name="subtitle" value="{{ old('subtitle') }}" class="form-control border border-danger  @error('subtitle') is-invalid @enderror"  >
                        @error('subtitle')
                            <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label fw-bold">Immagine :</label>
                        <input type="file" name="image" class="form-control border border-danger">
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label fw-bold">Categoria :</label>
                        <select name="category" class="form-select border border-danger">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label fw-bold">Corpo del testo: </label>
                        <textarea name="body" id="" cols="30" rows="7" class="form-control border border-danger"> {{old('body')}} </textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Salva</button>
                  </form>
            </div>
        </div>
   
    </div>
      {{-- {{ route('article.store') }} --}}
</x-layout>