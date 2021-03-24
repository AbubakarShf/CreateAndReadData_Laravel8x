@extends('Layout')

@section('userlist')
<h1>UserList</h1>
<div class="UsersData">
    <ol>  
    @foreach($AllUsersData as $data)      
        <li>       
            <span id="NameSpan">{{$data->Name}}</span>
            <span id="EmailSpan">{{$data->Email}}</span> <br>
        </li>
        @endforeach
    </ol>
</div>
@endsection