@extends('layouts.app')
@section('content')

@foreach( $daftarekstras as $daftarekstra )
<div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                    <h6 class="m-0 font-weight-bold text-primary" >
                                      {{ $daftarekstra->nama }}</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse show" id="collapseCardExample">
                                    <div class="card-body" text-align="justify">
                                    {{ $daftarekstra->deskripsi }}
                                    </div>
                                </div>
                            </div>
                            @endforeach
@endsection