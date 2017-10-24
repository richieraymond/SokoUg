@extends('layouts.dashboard')

@section('content')
<a class="btn btn-outline-secondary waves-effect" href="{{ url('adverts/create') }}" ><i class="fa fa-bolt"></i>Add New Ad</a>
<a class="btn btn-outline-primary waves-effect" href="{{ url('adverts/create') }}" ><i class="fa fa-bolt"></i>Approved Ads</a>
<a class="btn btn-outline-warning waves-effect" href="{{ url('adverts/create') }}" ><i class="fa fa-bolt"></i>Pending Ads</a>
<a class="btn btn-outline-danger waves-effect" href="{{ url('adverts/create') }}" ><i class="fa fa-bolt"></i>Canceled Ads</a>

<table class="table table-responsive">
<thead>
    <tr>
      <th>#</th> 
      <th>advert Name</th> 
      <th>Descripion</th>
      <th>Running From</th>
      <th>Running To</th> 
      <th>Status</th>
      <th>Created At</th> 
      <th>Modified At</th> 
    </tr>
</thead>
<tbody>
    @php $count=1 @endphp
    @foreach($adverts as $advert)
    <tr>
        <td>{{ $count++ }}</td>
        <td>{{ $advert->name }}</td>
        <td>{{ $advert->description }}</td>
        <td>{{ $advert->start_date }}</td>
        <td>{{ $advert->end_date }}</td>
        <td>{{ $advert->status }}</td>
        <td>{{ $advert->created_at }}</td>
        <td>{{ $advert->updated_at }}</td>
    </tr>
    @endforeach
</tbody>
</table>

@endsection
