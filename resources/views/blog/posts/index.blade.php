@extends('layouts.app')

@section('content')
<table>
    @if(isset($items))
        @foreach($items as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->created_at }}</td>
            </tr>
        @endforeach
    @endif
</table>
@endsection