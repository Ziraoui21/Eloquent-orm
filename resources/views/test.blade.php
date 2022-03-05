@foreach ($data as $prod)
    <a href="{{route("show",Crypt::encrypt($prod->id))}}">{{$prod->name}}</a>
@endforeach