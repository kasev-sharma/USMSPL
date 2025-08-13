@extends('layouts.app')

@section('content')

    {{-- Main content of the page starts here --}}
    <main>
        @include('partials.hero')
        
        <section id="ourproducts">
            @include('partials.products')
        </section>

        <section id="ourservices">
            @include('partials.services')
        </section>

        <section id="about-us">
            @include('partials.about')
        </section>

        <section id="contactus">
            @include('partials.contact')
        </section>
    </main>

@endsection