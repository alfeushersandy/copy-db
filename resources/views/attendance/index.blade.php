@extends('layouts.master')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">SN</th>
        <th scope="col">scan_date</th>
        <th scope="col">pin</th>
        <th scope="col">verifymode</th>
        <th scope="col">inoutmode</th>
        <th scope="col">reserved</th>
        <th scope="col">work_code</th>
        <th scope="col">att_id</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($attendance as $item)
        <tr>
            <td>{{$item->sn}}</td>
            <td>{{$item->scan_date}}</td>
            <td>{{$item->pin}}</td>
            <td>{{$item->verifymode}}</td>
            <td>{{$item->inoutmode}}</td>
            <td>{{$item->reserved}}</td>
            <td>{{$item->work_code}}</td>
            <td>{{$item->att_id}}</td>
        </tr>
        @endforeach
    </tbody>
    
</table>
<form action="{{route('copy.database')}}" method="post">
  @csrf
  <button type="submit" class="btn btn-primary">Copy database to remote SQL</button>
</form>
@endsection