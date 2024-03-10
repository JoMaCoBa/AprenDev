@extends('layouts.app')

@section('title', 'AprenDev - Inicio')

@section('content')

    <header id="home" class="relative overflow-hidden h-screen">
        <div class="absolute inset-0 flex items-center justify-center lg:justify-start">
            <div class="max-w-2xl text-center lg:text-left px-6 text-white">
                <p class="text-4xl lg:text-5xl font-semibold">Encuentra el curso que deseas</p>
                <a href="{{route('courses.all')}}" class="Secondary-Button mt-8 flex justify-center">Explorar</a>
            </div>
        </div>
        <img src="{{ asset('images/header.jpg') }}" class="inset-0 w-full h-full object-cover object-center z-0">
    </header>

    <main id="recommendations" class="p-6">

        <p class="text-3xl font-semibold text-primary">Cursos que te recomendamos</p>

        <div
            class="w-auto h-72 items-center {{-- mt-6 --}} overflow-x-auto overscroll-x-contain flex space-x-6 overflow-y-hidden">

            @foreach ($courses as $course)
                @if ($course->id % 2 == 0)
                    <a href="{{ route('course.index', $course->slug) }}" class="Card">
                        <img src="{{ asset($course->image_url) }}" class="w-full h-3/5 object-cover object-center">
                        <div class="w-full h-2/5 bg-secondary px-4 py-2">
                            <p class="text-white font-bold text-xl">{{ $course->name }}</p>
                            <p class="text-white text-md">{{ $course->description }}</p>
                        </div>
                    </a>
                @else
                    <a href="{{ route('course.index', $course->slug) }}" class="Card">
                        <img src="{{ asset($course->image_url) }}" class="w-full h-3/5 object-cover object-center">
                        <div class="w-full h-2/5 bg-white px-4 py-2">
                            <p class="text-terciary font-bold text-xl">{{ $course->name }}</p>
                            <p class="text-terciary text-md">{{ $course->description }}</p>
                        </div>
                    </a>
                @endif
            @endforeach

        </div>

    </main>

    <section id="featured" class="px-3 h-auto w-full">
        <p class="text-3xl text-primary font-semibold mt-6 mb-6">Cursos Destacados</p>
        <div class="w-full h-full grid grid-cols-1 lg:grid-cols-2 lg:place-items-center gap-4 lg:place-content-stretch">
            @foreach ($featuredCourses as $key => $course)
                @if ($key == 0)
                    <a href="{{ route('course.index', $course->slug) }}" class="w-full h-96 rounded-xl overflow-hidden inline-block relative lg:col-span-2 transition-all transform hover:-translate-y-4 hover:shadow-xl">
                        <img src="{{ asset($course->image_url) }}" class="w-full h-full object-cover relative">
                        <p class="Card-Secondary-Title absolute top-2 left-0 text-white pl-8">{{ $course->name }}</p>
                        <p class="text-md absolute bottom-60 left-0 text-white pl-8">{{ $course->description }}</p>
                    </a>
                @else
                    <a href="{{ route('course.index', $course->slug) }}" class="w-full h-96 rounded-xl overflow-hidden inline-block relative transition-all transform hover:-translate-y-4 hover:shadow-xl">
                        <img src="{{ asset($course->image_url) }}" class="w-full h-full object-cover relative">
                        <p class="Card-Secondary-Title absolute top-2 left-0 text-secondary pl-8">{{ $course->name }}</p>
                        <p class="text-md absolute bottom-60 left-0 text-secondary pl-8 font-semibold">{{ $course->description }}</p>
                    </a>
                @endif
            @endforeach
        </div>
    </section>
    


@endsection
