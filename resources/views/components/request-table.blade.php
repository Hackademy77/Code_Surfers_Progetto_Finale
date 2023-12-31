
<table class="table table-striped table-hover border">
    <thead class="table-dark">
        <tr>
            <th scope='col'>#</th>
            <th scope='col'>Nome</th>
            <th scope='col'>Email</th>
            <th scope='col'>Candidatura</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($roleRequests as $user)
        <tr>
            <th scope='row'>{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
       
        <td>
            @switch($role)
                @case('amministratore')
                    <a href="{{route('admin.setAdmin', compact('user'))}}" class="btn btn-success text-white fw-bold text-uppercase"> {{$role}} <i class="fa-solid fa-user-check"></i></a>
                    @break
                @case('revisore')
                    <a href="{{route('admin.setRevisor', compact('user'))}}" class="btn btn-success text-white fw-bold text-uppercase"> {{$role}} <i class="fa-solid fa-user-check"></i></a>
                    @break
                @case('redattore')
                    <a href="{{route('admin.setWriter', compact('user'))}}" class="btn btn-success text-white fw-bold text-uppercase"> {{$role}} <i class="fa-solid fa-user-check"></i></a>
                    @break
            @endswitch
        </td>
    </tr>
        @endforeach
        
    </tbody>
</table>