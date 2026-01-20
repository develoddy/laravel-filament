@extends('layouts.app')

@section('content')
<main>
    <!-- Banner area start -->
    @include("pages.welcome._banner")
    <!-- Banner area end -->

    <!-- About area start -->
    @include("pages.welcome._about")
    <!-- About area end -->
    <!-- Section divider -->
    <div class="section__divider">
        <hr>
    </div>

    <!-- Project area start -->
    @include("pages.welcome._projects")
    <!-- Project area end -->

    <!-- Section divider -->
    <div class="section__divider">
        <hr>
    </div>

    <!-- qualification start -->
    @include("pages.welcome._qualification")
    <!-- qualification end -->

    <!-- counter area start -->
    @include("pages.welcome._counter")
    <!-- counter area end -->

    <!-- testimonial area start -->
    @include("pages.welcome._testimonial")
    <!-- testimonial area end -->

    <!-- blog area start -->
    @include("pages.welcome._blog")
    <!-- blog area end -->

    <!-- Contact area start -->
    @include("pages.welcome._contact")
    <!-- Contact area end -->
</main>
@endsection