@extends('layouts.master')

@section('content')
<section class="bg-02-a">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="_head_01">
                    <h2>{{ $profile->name }}</h2>
                    <p>Home<i class="fas fa-angle-right"></i><span>Tentang Kami</span></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="se-001">
    <div class="container">
        <h1>Mengenai {{ $profile->name }}</h1>
        <div class="mt-3">
            {!! $profile->desc !!}
        </div>
        <div class="row mt-5">
            <div class="col">
                <h3 class="mb-2">Visi</h3>
                <p>{{ $profile->vision }}</p>
            </div>
            <div class="col">
                <h3 class="mb-2">Misi</h3>
                <p>{{ $profile->mission }}</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-01">
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($statusInfo as $info)
            <div class="col-lg-4">
                <div class="se-box">
                    <div class="icon">
                        <i class="fal fa-chalkboard-teacher"></i>
                    </div>
                    <div class="content">
                        <h3>{{ $info['label'] }}</h3>
                        <p class="text-uppercase">{{ $info['val'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

 <section class="_pl_rt">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <div class="_lo_we_ds">
                     <div class="row">
                         @foreach ($contacts as $contact)
                             <div class="col-md-4 col-sm-6 col-12">
                                <div class="_ol_we_as">
                                    <ol>
                                        <li>
                                            <i class="{{ $contact['icon'] }}"></i>
                                            <h3>{{ $contact['label'] }}</h3>
                                            <a href="{{ $contact['link'] }}" class="text-white">{{ $contact['val'] }}</a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                         @endforeach
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <section class="team">
    <div class="container">
        <div class="row">
            <div class="col-12">
                 <div class="heading">
                     <h2>Guru Kami</h2>
                 </div>
            </div>

             <div class="col-12">
                <div class="owl-carousel owl-stage-outer">
                    @foreach ($teachers as $teacher)
                        <div class="item">
                            <div class="team-card">
                                <div class="image-team">
                                    <img src="{{ $teacher->avatar }}">
                                </div>
                                <div class="team-content">
                                    <h3>{{ $teacher->name }}</h3>
                                    <p class="font-weight-bold">{{ $teacher->acc_number }}</p>
                                    <p class="font-weight-bold">{{ $teacher->role }}</p>
                                    <p class="text-monospace">{{ $teacher->bio }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
         </div>
    </div>
 </section>
@endsection