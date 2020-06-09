@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header bg-transparent">
        <h3 class="mb-0">{{ $data['title'] }}</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
            <form>
                <h6 class="heading-small text-muted mb-4">Portfolio information</h6>
                <div class="pl-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for="input-username">Username</label>
                        <input type="text" id="input-username" class="form-control" placeholder="Username" value="lucky.jesse">
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" id="input-email" class="form-control" placeholder="jesse@example.com">
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for="input-first-name">First name</label>
                        <input type="text" id="input-first-name" class="form-control" placeholder="First name" value="Lucky">
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Last name</label>
                        <input type="text" id="input-last-name" class="form-control" placeholder="Last name" value="Jesse">
                    </div>
                    </div>
                </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
<script>
    $("#adminPage").html("{{ $data['title'] }}")
    // $("#adminHeaderPage").html("{{ $data['title'] }}")
</script>
@endsection