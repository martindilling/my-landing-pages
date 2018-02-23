<?php
/**
 * @var string $color
 */
$color = 'pink';
?>
@extends('layouts.master')

@section('title', 'Camilla Gejl Olsen')

@section('body')
    <div id="app" class="h-screen w-screen flex justify-center items-center border-t-4 border-{{ $color }}-lighter">
        @component('_profile-card')
            @slot('color', $color)
            @slot('avatar', asset('images/avatar-camillagejl.jpg'))
            @slot('eyebrow', 'Wonderful mom')
            @slot('title', 'Camilla Gejl Olsen')
            @slot('text')
                Welcome to my humble place on this famous world wide web.
                Some day this might turn into a fancy pants website, but
                for now you can just look me up on some of the places
                listed below.
            @endslot
            @slot('links', [
                'LinkedIn' => 'https://www.linkedin.com/in/camilla-olsen-48444383/',
                'Facebook' => 'https://www.facebook.com/CamillaGejlOlsen',
            ])
        @endcomponent
    </div>
@endsection
