@extends('layouts.app')

@section('content')
@foreach ($mygroup as $grup)
<table class="table">
  <thead>
    <tr>
      <th scope="col">Имя</th>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>{{$grup->name}}</td>
      <td>{{$grup->group}}</td>
    </tr>
  </tbody>
</table>
    @endforeach
@endsection
