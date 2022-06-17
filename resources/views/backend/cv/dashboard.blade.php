@extends('backend.index')
@section('content')
<div class="col-xl-2 col-6">
    <div class="box overflow-hidden pull-up">
        <div class="box-body">							
            <div class="icon bg-primary-light rounded w-60 h-60">
                <i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
            </div>
            <div>
                <p class="text-mute mt-20 mb-0 font-size-16">Current CV</p>
                <h3 class="text-white mb-0 font-weight-500">{{$jmlCv}} <small class="text-success"><i class="fa fa-caret-up"></i> +2.5%</small></h3>
            </div>
        </div>
    </div>
</div>
@endsection