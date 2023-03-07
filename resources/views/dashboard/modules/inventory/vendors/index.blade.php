@extends('layouts.dashboard.dashboard', ['title' => 'Positions', 'module' => 'HRMS'])
@section('content')
<div class="row">
    <h2 class="mb-4 col-md-6 text-md-left text-center">Job Positions</h2>
    <div class="mb-4 col-md-6 text-right">
        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#positionsmodal">New Position</button>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="positionsmodal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add / Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="fa-light fa-close"></i></span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>
<table class="table table-bordered positions-datatable table-sm table-striped dt-responsive nowrap">
    <thead>
        <tr>
            <th>No</th>
            <th>Position</th>
            <th>Max Positions</th>
            <th>Description</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        @if($positions)
        @foreach($positions as $position)
        <tr>
            <td>{{ $position->id }}</td>
            <td>{{ $position->position }}</td>
            <td>{{ $position->max_position }}</td>
            <td>{{ $position->description }}</td>
            <td class="text-center"> 
                <div class="dropdown">
                    <button type="button" class="btn btn-outline-info btn-sm editbutton" value="{{ $position->id }}">
                        <i class="fa-regular fa-pen-to-square"></i>
                    </button>
                    <button type="button" class="btn btn-outline-danger btn-sm removebutton" value="{{ $position->id }}">
                        <i class="fa-regular fa-trash-can-xmark"></i>
                    </button>
                </div>
            </td>
        </tr>
        @endforeach
        @endif
    </tbody>
</table>

<script type="text/javascript">
    $(document).ready( function () {
        load_data();
    });
    function load_data () {
        $('.positions-datatable').DataTable({
            ordering: true,
            searching: true,
            responsive: true,
            autoWidth: true,
            columnDefs: [
                { "searchable": false, "targets": [0,3] },
            ],
        });
        $('.positions-datatable').css('width', '100%');
    }
</script>
@endsection