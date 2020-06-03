@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header bg-transparent">
        <h3 class="mb-0">{{ $data['title'] }}</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col">
            <div class="card bg-default shadow">
                <div class="card-header bg-transparent border-0">
                <h3 class="text-white mb-0">Brand Portfolio Table</h3>
                </div>
                <div class="table-responsive">
                <table class="table align-items-center table-dark table-flush">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col" class="sort" data-sort="id">ID</th>
                        <th scope="col" class="sort" data-sort="title">Title</th>
                        <th scope="col" class="sort" data-sort="year">Year</th>
                        <th scope="col">Team</th>
                        <th scope="col" class="sort" data-sort="status">Status</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody class="list">
                        <tr>
                            <td class="budget">
                                1
                            </td>
                            <th scope="row">
                                <div class="media align-items-center">
                                    <a href="#" class="mr-3">
                                        <img class="rounded img-fluid" alt="Image placeholder" src="https://bureusym.sirv.com/odanicola/portfolio_mnc.jpg" width="50">
                                    </a>
                                    <div class="media-body">
                                    <span class="name mb-0 text-sm">MNC Gramedia <br> <small>Kompas Gramedia</small></span>
                                    </div>
                                </div>
                            </th>
                            <td class="budget">
                                2016
                            </td>
                            <td>
                            <div class="avatar-group">
                                <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                                <img alt="Image placeholder" src="{{ asset('admin/img/theme/team-1.jpg') }}">
                                </a>
                                <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                                <img alt="Image placeholder" src="{{ asset('admin/img/theme/team-2.jpg') }}">
                                </a>
                                <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                                <img alt="Image placeholder" src="{{ asset('admin/img/theme/team-3.jpg') }}">
                                </a>
                                <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                                <img alt="Image placeholder" src="{{ asset('admin/img/theme/team-4.jpg') }}">
                                </a>
                            </div>
                            </td>
                            <td>
                            <i class="fas fa-toggle-on text-green"></i> Active
                            </td>
                            <td class="text-right">
                                <a href="" class="text-white mr-2" title="Edit"><i class="fas fa-edit"></i></a>
                                <a href="" class="text-white mr-2" title="Trash"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<script>
    $("#adminPage").html("{{ $data['title'] }}")
    $("#adminHeaderPage").html("{{ $data['title'] }}")
</script>
@endsection