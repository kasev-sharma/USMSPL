@extends('layouts.app')

@section('content')

    {{-- Header Section --}}
    @include('partials.header')

    {{-- Main content of the page starts here --}}
    <main>
        {{-- Hero Section --}}
        @include('partials.hero')

        {{-- Our Products Section --}}
        <section id="ourproducts">
            @include('partials.products')
        </section>

        {{-- Our Services Section --}}
        <section id="ourservices">
            @include('partials.services')
        </section>

        {{-- About Us Section --}}
        <section id="about-us">
            @include('partials.about')
        </section>

        {{-- Contact Us Section --}}
        <section id="contactus">
            @include('partials.contact')
        </section>
        
    </main>
    
    {{-- Footer Section --}}
    @include('partials.footer')


@endsection