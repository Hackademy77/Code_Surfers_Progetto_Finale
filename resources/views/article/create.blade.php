<x-layout>
    <style>
        body{
            margin-top: 150px;
            background-color: #38445a;
        }
        .header_navbar{
            background-color: #white;
        }
        
    </style>
    <div class="container">
        <h1 class="text-center text-white">CREA IL TUO ARTICOLO</h1>
        <div class="row">
            <div class="col-md-3"></div>

            <div class="col-12 col-md-6">
                <div class="registration-form data-aos="fade-up">
                    <form  action="{{ route('article.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input class="form-control item border border-3 @error('title') is-invalid @enderror"  type="text" value="{{ old('title') }}" name="title" id="username" placeholder="Titolo" required>
                            @error('title')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <input class="form-control item border border-3 @error('subtitle') is-invalid @enderror" type="text" name="subtitle" value="{{ old('subtitle') }}" id="password" placeholder="Sottotitolo" required>
                            @error('subtitle')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="">
                            <p class="">Inserisci immagine:</p>
                            <input type="file"  name="image" class="form-control border border-3">
                        </div>
                        <div class="form-group mb-3">
                            <p>Scegli la categoria:</p>
                            <select name="category" class="form-select border border-3">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mt-4">
                            <textarea placeholder="Inserisci il corpo del testo..." name="body" cols="30" rows="7" class="form-control border border-3">{{old('body')}}</textarea>
                        </div>
                        <div class="form-group d-flex justify-content-center">
                            <button type="submit" class="btn border border-3">Salva</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
   
    </div>
      {{-- {{ route('article.store') }} --}}
</x-layout>