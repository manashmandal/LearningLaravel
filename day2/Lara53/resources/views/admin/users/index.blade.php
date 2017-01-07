@foreach($users as $user)
    <li>{!! $user['first_name'] !!} {!! $user['last_name'] !!} from {!! $user['roll'] !!}</li>
    {{ $user['first_name'] }}
@endforeach