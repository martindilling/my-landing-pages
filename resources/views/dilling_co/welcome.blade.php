<?php
/**
 * @var string $color
 */
$color = 'teal';
?>
@extends('layouts.master')

@section('title', 'Dilling')

@section('body')
    <div id="app" class="h-screen w-screen flex justify-center items-center border-t-4 border-{{ $color }}-lighter">
        @component('_profile-card')
            @slot('color', $color)
            @slot('avatar', asset('images/avatar-dilling.jpg'))
            @slot('eyebrow', '')
            @slot('title', 'Dilling')
            @slot('text')
                So far this is just a simple site to link to our other simple
                sites. Enjoy.
            @endslot
            @slot('links', [
                'Martin' => 'http://martindilling.com',
                'Camilla' => 'http://camillagejl.com',
            ])
        @endcomponent
    </div>
@endsection
