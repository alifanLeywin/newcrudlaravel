@extends('layouts/app')

@section('content')
    <div class="container">
        <!-- Welcome Section -->
        <div class="row my-4">
            <div class="col text-center">
                <img src="{{ asset('https://i.pinimg.com/originals/c2/ce/2d/c2ce2d82a11c90b05ad4abd796ef2fff.gif') }}" alt="Welcome Image" class="img-fluid mb-4" style="max-width: 200px;">
                <h3 class="display-4">Selamat datang, Haloo aku Alifan</h3>
                <p class="lead">Ini adalah dashboard interaktif Saya</p>
            </div>
        </div>

        <!-- Stats Row -->
        <div class="row text-center">
            <!-- Earnings Card Example -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                               
                            </div>
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('https://i.pinimg.com/originals/8e/ef/ee/8eefee29af1a06947603433fa3911c1a.gif') }}" alt="Earnings Icon" style="max-width: 200px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Projects Completed Card Example -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              
                            </div>
                            <div class="col-auto">
                                <img src="{{ asset('https://www.icegif.com/wp-content/uploads/2021/12/icegif-1513.gif') }}" alt="Projects Icon" style="max-width: 200px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- New Card Example 1: Tasks Completed -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              
                            </div>
                            <div class="col-auto">
                                <img src="{{ asset('https://steamuserimages-a.akamaihd.net/ugc/2367273575910788380/EC4FB30FCD14A8DCE6B98BF48B82A1752CDB779C/?imw=512&&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=false') }}" alt="Tasks Icon" style="max-width: 200px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- New Card Example 2: Pending Requests -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              
                            </div>
                            <div class="col-auto">
                                <img src="{{ asset('https://media.tenor.com/bDgdFlOwH0AAAAAj/fire-emblem-maid-fire-emblem.gif') }}" alt="Pending Requests Icon" style="max-width: 200px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
