@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('title') Users :: @parent
@endsection

{{-- Content --}}
@section('main')
    <div class="page-header">
        <h3>
            Users
        </h3>
    </div>

    <table id="table" class="table table-striped table-hover">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Active</th>
            <th>Regsitration Date</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody></tbody>
    </table>
@endsection

{{-- Scripts --}}
@section('scripts')
@endsection
