@extends('layout')

@section("title", "Home")

@section("content")

@php

@endphp
 <link rel="stylesheet" href="/css/home.css">

<div>
    AA
    <div>
    BB {{$test_var["var_A"]}}
    </div>

    @foreach($test_var as $var)
    <div>
    {{$var}}
    </div>
    @endforeach


</div>
<script type="text/javascript">

</script>


@endsection