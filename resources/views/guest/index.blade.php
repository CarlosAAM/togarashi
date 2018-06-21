@extends('guest.layouts.master')

@section('content')
    <!-- Slider -->
	@include('guest.sections.slider', ['images' => $sliderImages])

    <!-- Welcome -->
    @include('guest.sections.welcome', ['image' => $welcomeImage->first()])

    <!-- Contact -->
    @include('guest.sections.contact', ['image' => $contactImage->first()])
@endsection