@extends('layouts.app')


<div class="container">
    <div class="row justify-content-center">

        @include('layouts.menu')

        @yield(`content2`)

    </div>
</div>
