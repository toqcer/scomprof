@extends('layouts.master')

@section('content')
<section class="bg-02-a">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="_head_01">
                    <h2>Mengenai {{ $profile->name }}</h2>
                    <p>Home<i class="fas fa-angle-right"></i><span>About Us</span></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="se-001">
    <div class="container">
        <h1>Mengenai {{ $profile->name }}</h1>
        <div class="_Ol_er_qw">
            {{ $profile->desc }}
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
@endsection