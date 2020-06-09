@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header bg-transparent">
        <h3 class="mb-0">{{ $data['title'] }}</h3>
    </div>
    <div class="card-body">
        <div class="row mb-3d">
            <div class="col">
                <button class="btn btn-success"><i class="fas fa-plus"></i> New Portfolio</button>
            </div>
        </div>
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
                                @if(count($portfolio)>0)
                                @foreach($portfolio as $key => $value)
                                <tr>
                                    <td class="id">
                                        {{ $value->id }}
                                    </td>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a href="#" class="mr-3">
                                                <img class="rounded img-fluid" alt="Image placeholder" src="{{ $value->feature_image }}" width="50">
                                            </a>
                                            <div class="media-body">
                                            <span class="name mb-0 text-sm">{{ $value->title }} <br> <small>{{ $value->subtitle }}</small></span>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="year">
                                        {{ $value->year }}
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
                                        @if($value->status)
                                            <i class="fas fa-toggle-on text-green"></i> Active
                                        @else
                                        <i class="fas fa-toggle-off text-red"></i> Not Active
                                        @endif
                                    </td>
                                    <td class="text-right">
                                        <a href="{{ url('admin/portfolio/edit', ['id' => $value->id ]) }}" class="text-white mr-2" title="Edit"><i class="fas fa-edit"></i></a>
                                        <a href="" class="text-white mr-2" title="Trash"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr colspan="5"><td>Not found</td></tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row mx-auto">
                    <div class="col-md-12">
                    {{ $portfolio->appends(['sort' => 'id'])->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $("#adminPage").html("{{ $data['title'] }}")
    // $("#adminHeaderPage").html("{{ $data['title'] }}")
</script>
@endsection