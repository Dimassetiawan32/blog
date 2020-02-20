@extends('layouts.template')

@section('content')
<div class="pt-4">
    <h4 class="font-weight-bold">
        Recommended
    </h4>
    <div class="row">
        <div class="col-md-3">
            <div class="card border-0 shadow">
            <!-- <div class="card-header border-0"> -->
                <img src="{{asset('images/downloadss.jpg')}}" class="card-img-top" alt="">
                <div class="card-body">
                    <div class="pt-2 d-flex">
                        <div class="mr-auto">
                            <img src="{{asset('images/dpLogo.jpg')}}" class="rounded-circle" width="30" height="30" alt="">   
                        </div>
                            <div>
                                <a href="{{route('watch.Water-Bottle-Flip-2-|-Dude-Perfect')}}">
                                <h6 class="font-weight-bold">Water Bottle Flip 2 | Dude Perfect</h6>
                                </a>
                                <h6 class="text-muted">Dude Perfect</h6>
                                <br>
                            <div>   
                            <small class="text-muted">263M views • 2 years ago.</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow">
            <div class="card-header border-0">
                <img src="{{asset('images/maxresdefault.jpg')}}" class="card-img-top" alt="">
            </div>
                <div class="card-body">
                    <div class="pt-2 d-flex">
                        <div class="mr-auto">
                            <img src="{{asset('images/downloadss.jpg')}}" class="rounded-circle" width="30" height="30" alt="">
                        </div>
                        <div>
                            <h6 class="font-weight-bold">Sedang Live</h6>
                            <small class="text-muted">Boruto</small>
                            <br>
                            <small class="text-muted">760K views . I Day Ago.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow">
            <div class="card-header border-0">
                <img src="{{asset('images/downloads.jpg')}}" class="card-img-top" alt="">
            </div>
                <div class="card-body">
                    <div class="pt-2 d-flex">
                        <div class="mr-auto">
                            <img src="{{asset('images/downloadss.jpg')}}" class="rounded-circle" width="30" height="30" alt="">
                    </div>
                    <div>
                        <h6 class="font-weight-bold">Sedang Live</h6>
                        <small class="text-muted">Boruto</small>
                        <br>
                        <small class="text-muted">760K views . I Day Ago.</small>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <div class="col-md-3">
            <div class="card border-0 shadow">
            <div class="card-header border-0">
                <img src="{{asset('images/Budi.jpg')}}" class="card-img-top" alt="">
            </div>
                <div class="card-body">
                    <div class="pt-2 d-flex">
                        <div class="mr-auto">
                            <img src="{{asset('images/Budi.jpg')}}" class="rounded-circle" width="30" height="30" alt="">
                        </div>
                        <div>
                            <h6 class="font-weight-bold">Sedang Live</h6>
                            <small class="text-muted">Boruto</small>
                            <br>
                            <small class="text-muted">760K views . I Day Ago.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div class="pt-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card border-0 shadow">
                <div class="card-header border-0">
                    <img src="{{asset('images/downloadss.jpg')}}" class="card-img-top" alt="">
                </div>
                    <div class="card-body">
                        
                    </div>
                </div>
            </div>
        <div class="col-md-4">
            <div class="card border-0 shadow">
                <div class="card-header border-0">
                    <img src="{{asset('images/maxresdefault.jpg')}}" class="card-img-top" alt="">
                </div>    
                    <div class="card-body">
                        
                    </div>
                </div>
            </div>
        <div class="col-md-4">
            <div class="card border-0 shadow">
                <div class="card-header border-0">
                    <img src="{{asset('images/downloads.jpg')}}" class="card-img-top" alt="">
                </div>
                    <div class="card-body">
                        
                        
                        </div>
                    </div>
                </div>
            </div>
</div>
@endsection