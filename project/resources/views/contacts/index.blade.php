@extends('layouts.dashboard.app')

@section('head-imports')
<link href="{{ asset('assets/assets/css/datatables.bundle.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <div class="card card-xxl-stretch mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">Contacts</span>
                <span class="text-muted mt-1 fw-bold fs-7">{{ $contacts }} Contacts</span>
            </h3>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="py-3">
            <div class="card">
                <div class="card-body">
                    <table id="contacts-laratable" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                        <thead>
                            <tr class="fw-bolder fs-6 text-gray-800 px-7">
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                            </tr>
                        </thead>
                    </table>
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div>
        <!--end::Body-->
    </div>
@endsection

@push('scripts')
<script src="{{ asset('assets/assets/js/datatables.bundle.js') }}"></script>
<script>
    $(document).ready(function(){
        $("#contacts-laratable").DataTable({
            serverSide: true,
            ajax: "{{ route('contact.index') }}",
            columns: [                
                    { name: 'name' },
                    { name: 'email' },
                    { name: 'subject' },
                    { name: 'content' }
            ],
            "language": {
            "lengthMenu": "Show _MENU_",
            },
            "dom":
            "<'row'" +
            "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
            "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
            ">" +

            "<'table-responsive'tr>" +

            "<'row'" +
            "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
            "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
            ">"
        });
    });
</script>
@endpush