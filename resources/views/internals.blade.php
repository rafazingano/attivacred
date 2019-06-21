@extends('layouts.app')

@section('content')

<main class="main ">
    <div class="home-lead-form-steps page-with-aside">
        <div class="container">
            <div class="row">
                <section class="col-medium-3 page-with-aside__aside steps-messages">
                    <div id="" class="" style=" text-align:left; margin-left:0%;">
                    <h1  style="font-size:13px;">{{ $title }}</h1>
                        <h2 class="decorated-heading__title">Uma empresa de empréstimos</h2>
                        <p class="decorated-heading__description decorated-heading__description--mobile-visible">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Phasellus egestas vel ex quis tempor. Nunc facilisis ut
                            magna eget pretium. Aenean nisi turpis, auctor sed finibus vel,
                            scelerisque ut mi. Nulla facilisi. Phasellus aliquet dolor finibus
                            nisl gravida ultricies. Mauris non dolor sem. In dapibus imperdiet
                            luctus. Mauris bibendum vitae metus non egestas. Donec id ante dictum
                            velit egestas scelerisque a at nibh. Sed et tempor lorem. Sed pulvinar
                            enim nec nisl molestie molestie. Duis congue vulputate semper. Proin nec
                            malesuada tellus. Vestibulum sed lectus gravida, molestie nisl quis, congue diam.
                        </p>
                    </div>
                </section>
                <div class="col-medium-9 page-with-aside__content">
                    @include($page)
                </div>
            </div>
        </div>
    </div>
</main>

@endsection

@push('styles')
    <link href="{{ asset('assets/css/internals.css') }}" rel="stylesheet">
@endpush
