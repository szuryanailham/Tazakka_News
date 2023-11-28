@extends('dashboard.index')
@section('main-dashboard')
<table class="table">
    <thead>
      <tr>
        <th scope="col">id Catgeory</th>
        <th scope="col">nama Category</th>
        <th scope="col">Slug</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($categories as $item)
        <tr>
            <th scope="row">{{ $item->id }}</th>
            <td>{{ $item->name }}</td>
            <td>{{ $item->slug }}</td>
          </tr> 
        @endforeach
    </tbody>
  </table>
@endsection