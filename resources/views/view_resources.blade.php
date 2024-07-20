@extends('layouts.layout')

@section('title')
    Resources
@endsection

@section('content')
    <div class="p-10">
        <div class="flex justify-between">
            <div class="w-[200px] pt-3">
                <select name="course" id="course" class="rounded-[5px] w-[100px] bg-gray border-0 ps-8 focus:border-0">
                    <option value="Bacholer"> Bacholer</option>
                    <option value="Masters">Masters</option>
                </select>
            </div>
            <div>
                <form action="#" method="get" class="pt-3 relative">
                    <input placeholder="Search Here..." type="text" name="search" id="search"
                        class="rounded-[5px] w-full bg-gray border-0 ps-8 focus:border-0">
                    <svg class="w-7 h-7 text-[#545353] dark:text-white ps-2  absolute top-5 pb-0.5" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                    </svg>
                </form>
            </div>
        </div>

        <div>
            <div class="flex gap-5 flex-wrap justify-center mt-7">
                <div class="h-[270px] w-[250px] bg-white shadow-dark rounded-lg p-3">
                    <div
                        class="h-[100px]  mx-auto rounded-full w-[100px] bg-gray flex justify-center border border-primary items-center">
                        <img src="{{ asset('images/icons/file.svg') }}" class="h-[50%] w-[50%]  rounded-full"
                            alt="">
                    </div>
                    <div class="mt-5">
                        <h1 class="text-lg font-semibold">Master</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam optio </p>
                    </div>
                </div>
                <div class="h-[270px] w-[250px] bg-white shadow-dark rounded-lg p-3">
                    <div
                        class="h-[100px]  mx-auto rounded-full w-[100px] bg-gray flex justify-center border border-primary items-center">
                        <img src="{{ asset('images/icons/file.svg') }}" class="h-[50%] w-[50%]  rounded-full"
                            alt="">
                    </div>
                    <div class="mt-5">
                        <h1 class="text-lg font-semibold">Master</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam optio </p>
                    </div>
                </div>
                <div class="h-[270px] w-[250px] bg-white shadow-dark rounded-lg p-3">
                    <div
                        class="h-[100px]  mx-auto rounded-full w-[100px] bg-gray flex justify-center border border-primary items-center">
                        <img src="{{ asset('images/icons/file.svg') }}" class="h-[50%] w-[50%]  rounded-full"
                            alt="">
                    </div>
                    <div class="mt-5">
                        <h1 class="text-lg font-semibold">Master</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam optio </p>
                    </div>
                </div>
                <div class="h-[270px] w-[250px] bg-white shadow-dark rounded-lg p-3">
                    <div
                        class="h-[100px]  mx-auto rounded-full w-[100px] bg-gray flex justify-center border border-primary items-center">
                        <img src="{{ asset('images/icons/file.svg') }}" class="h-[50%] w-[50%]  rounded-full"
                            alt="">
                    </div>
                    <div class="mt-5">
                        <h1 class="text-lg font-semibold">Master</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam optio </p>
                    </div>
                </div>
                <div class="h-[270px] w-[250px] bg-white shadow-dark rounded-lg p-3">
                    <div
                        class="h-[100px]  mx-auto rounded-full w-[100px] bg-gray flex justify-center border border-primary items-center">
                        <img src="{{ asset('images/icons/file.svg') }}" class="h-[50%] w-[50%]  rounded-full"
                            alt="">
                    </div>
                    <div class="mt-5">
                        <h1 class="text-lg font-semibold">Master</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam optio </p>
                    </div>
                </div>
                <div class="h-[270px] w-[250px] bg-white shadow-dark rounded-lg p-3">
                    <div
                        class="h-[100px]  mx-auto rounded-full w-[100px] bg-gray flex justify-center border border-primary items-center">
                        <img src="{{ asset('images/icons/file.svg') }}" class="h-[50%] w-[50%]  rounded-full"
                            alt="">
                    </div>
                    <div class="mt-5">
                        <h1 class="text-lg font-semibold">Master</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam optio </p>
                    </div>
                </div>
                <div class="h-[270px] w-[250px] bg-white shadow-dark rounded-lg p-3">
                    <div
                        class="h-[100px]  mx-auto rounded-full w-[100px] bg-gray flex justify-center border border-primary items-center">
                        <img src="{{ asset('images/icons/file.svg') }}" class="h-[50%] w-[50%]  rounded-full"
                            alt="">
                    </div>
                    <div class="mt-5">
                        <h1 class="text-lg font-semibold">Master</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam optio </p>
                    </div>
                </div>
                <div class="h-[270px] w-[250px] bg-white shadow-dark rounded-lg p-3">
                    <div
                        class="h-[100px]  mx-auto rounded-full w-[100px] bg-gray flex justify-center border border-primary items-center">
                        <img src="{{ asset('images/icons/file.svg') }}" class="h-[50%] w-[50%]  rounded-full"
                            alt="">
                    </div>
                    <div class="mt-5">
                        <h1 class="text-lg font-semibold">Master</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam optio </p>
                    </div>
                </div>
                <div class="h-[270px] w-[250px] bg-white shadow-dark rounded-lg p-3">
                    <div
                        class="h-[100px]  mx-auto rounded-full w-[100px] bg-gray flex justify-center border border-primary items-center">
                        <img src="{{ asset('images/icons/file.svg') }}" class="h-[50%] w-[50%]  rounded-full"
                            alt="">
                    </div>
                    <div class="mt-5">
                        <h1 class="text-lg font-semibold">Master</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam optio </p>
                    </div>
                </div>
                <div class="h-[270px] w-[250px] bg-white shadow-dark rounded-lg p-3">
                    <div
                        class="h-[100px]  mx-auto rounded-full w-[100px] bg-gray flex justify-center border border-primary items-center">
                        <img src="{{ asset('images/icons/file.svg') }}" class="h-[50%] w-[50%]  rounded-full"
                            alt="">
                    </div>
                    <div class="mt-5">
                        <h1 class="text-lg font-semibold">Master</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam optio </p>
                    </div>
                </div>
                <div class="h-[270px] w-[250px] bg-white shadow-dark rounded-lg p-3">
                    <div
                        class="h-[100px]  mx-auto rounded-full w-[100px] bg-gray flex justify-center border border-primary items-center">
                        <img src="{{ asset('images/icons/file.svg') }}" class="h-[50%] w-[50%]  rounded-full"
                            alt="">
                    </div>
                    <div class="mt-5">
                        <h1 class="text-lg font-semibold">Master</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam optio </p>
                    </div>
                </div>
                <div class="h-[270px] w-[250px] bg-white shadow-dark rounded-lg p-3">
                    <div
                        class="h-[100px]  mx-auto rounded-full w-[100px] bg-gray flex justify-center border border-primary items-center">
                        <img src="{{ asset('images/icons/file.svg') }}" class="h-[50%] w-[50%]  rounded-full"
                            alt="">
                    </div>
                    <div class="mt-5">
                        <h1 class="text-lg font-semibold">Master</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam optio </p>
                    </div>
                </div>
                <div class="h-[270px] w-[250px] bg-white shadow-dark rounded-lg p-3">
                    <div
                        class="h-[100px]  mx-auto rounded-full w-[100px] bg-gray flex justify-center border border-primary items-center">
                        <img src="{{ asset('images/icons/file.svg') }}" class="h-[50%] w-[50%]  rounded-full"
                            alt="">
                    </div>
                    <div class="mt-5">
                        <h1 class="text-lg font-semibold">Master</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam optio </p>
                    </div>
                </div>
                <div class="h-[270px] w-[250px] bg-white shadow-dark rounded-lg p-3">
                    <div
                        class="h-[100px]  mx-auto rounded-full w-[100px] bg-gray flex justify-center border border-primary items-center">
                        <img src="{{ asset('images/icons/file.svg') }}" class="h-[50%] w-[50%]  rounded-full"
                            alt="">
                    </div>
                    <div class="mt-5">
                        <h1 class="text-lg font-semibold">Master</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam optio </p>
                    </div>
                </div>
                <div class="h-[270px] w-[250px] bg-white shadow-dark rounded-lg p-3">
                    <div
                        class="h-[100px]  mx-auto rounded-full w-[100px] bg-gray flex justify-center border border-primary items-center">
                        <img src="{{ asset('images/icons/file.svg') }}" class="h-[50%] w-[50%]  rounded-full"
                            alt="">
                    </div>
                    <div class="mt-5">
                        <h1 class="text-lg font-semibold">Master</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam optio </p>
                    </div>
                </div>
                <div class="h-[270px] w-[250px] bg-white shadow-dark rounded-lg p-3">
                    <div
                        class="h-[100px]  mx-auto rounded-full w-[100px] bg-gray flex justify-center border border-primary items-center">
                        <img src="{{ asset('images/icons/file.svg') }}" class="h-[50%] w-[50%]  rounded-full"
                            alt="">
                    </div>
                    <div class="mt-5">
                        <h1 class="text-lg font-semibold">Master</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam optio </p>
                    </div>
                </div>
                <div class="h-[270px] w-[250px] bg-white shadow-dark rounded-lg p-3">
                    <div
                        class="h-[100px]  mx-auto rounded-full w-[100px] bg-gray flex justify-center border border-primary items-center">
                        <img src="{{ asset('images/icons/file.svg') }}" class="h-[50%] w-[50%]  rounded-full"
                            alt="">
                    </div>
                    <div class="mt-5">
                        <h1 class="text-lg font-semibold">Master</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam optio </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
