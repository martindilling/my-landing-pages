<?php
/**
 * @var string $color
 */
$color = 'indigo';
?>
@extends('layouts.master')

@section('title', 'Martin Dilling-Hansen')

@section('body')
    <div id="app" class="h-screen w-screen flex justify-center items-center border-t-4 border-{{ $color }}-lighter">
        @component('_profile-card')
            @slot('color', $color)
            @slot('avatar', asset('images/avatar-martindilling.jpg'))
            @slot('eyebrow', 'Software Developer')
            @slot('title', 'Martin Dilling-Hansen')
            @slot('text')
                Welcome to my humble place on this famous world wide web.
                Some day this might turn into a fancy pants website, but
                for now you can just look me up on some of the places
                listed below.
            @endslot
            @slot('links', [
                'LinkedIn' => 'https://www.linkedin.com/in/martindilling',
                'GitHub' => 'https://github.com/martindilling',
                'Twitter' => 'https://twitter.com/dillinghansen',
                'Facebook' => 'https://www.facebook.com/dillinghansen',
                'Art' => 'https://art.martindilling.com',
            ])
        @endcomponent
    </div>
@endsection
