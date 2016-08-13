@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('title') Events :: @parent
@endsection

{{-- Content --}}
@section('main')
<div class="page-header">
  <h3>
    Events
  </h3>
</div>

<table id="table" class="table table-striped table-hover datatables">
  <thead>
    <tr>
      <th>Name</th>
      <th>Date</th>
      <th>Address</th>
      <th>Society</th>
      <th>Price</th>
      <th>Author</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($events as $event)
      <tr>
        <td><?=$event->title?></td>
        <td><?=date('d-m-Y', strtotime($event->date_start)) . ' ' . $event->time_start?></td>
        <td><?=$event->location_address?></td>
        <td><?=$event->society?$event->society->name:'Welcome Week'?></td>
        <td><?=$event->price?></td>
        <td><?=$event->author?$event->author->name:'admin'?></td>
        <td>
          <a class="btn btn-danger"><i class="fa fa-trash"></i>&nbsp;&nbsp;Delete</a>
          <a class="btn btn-info"><i class="fa fa-eye"></i>&nbsp;&nbsp;View/Edit</a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection

{{-- Scripts --}}
@section('scripts')
@endsection
