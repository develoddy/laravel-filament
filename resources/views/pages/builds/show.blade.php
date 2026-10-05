@extends('layouts.app')
@section('content')

<main>

    @php
        $isExperiment = $portfolio->category?->slug === 'experiment';
        $categoryLabel = $isExperiment ? 'EXPERIMENT' : 'PRODUCT';

        $ctaLabel = $isExperiment
            ? 'View Live Experiment'
            : 'Visit Product';
    @endphp

    @include('pages.builds.sections.hero')

    @include('pages.builds.sections.case-study')

    @include('pages.builds.sections.visuals')

    @include('pages.builds.sections.related-images')
    
    @include('pages.builds.sections.feedback')

</main>

@endsection
