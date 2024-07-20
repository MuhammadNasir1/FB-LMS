@extends('layouts.layout')

@section('title')
    Resources
@endsection

@section('content')
    <div class="p-10">
        <div class="flex justify-between gap-5">
            <div class="w-[200px] pt-3">
                <select name="course" id="course" class="rounded-[5px] w-[100px] bg-gray border-0 ps-8 focus:border-0">
                    <option value="Bacholer"> Bacholer</option>
                    <option value="Masters">Masters</option>
                </select>
            </div>
            <div>
                <form action="#" method="get" class="pt-3 relative">
                    <input placeholder="Search Here..." type="text" name="search" id="search"
                        class="rounded-full w-full  border-1 border-primary ps-8 focus:border-primary">
                    <svg class="w-7 h-7 text-[#545353] dark:text-white ps-2  absolute top-5 pb-0.5 float-end"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                    </svg>
                </form>
            </div>
        </div>

        <div>
            <div class="flex gap-5 flex-wrap  mt-7">
                @for ($i = 1; $i <= 20; $i++)
                    <div class="h-[220px] w-[220px] bg-white border border-primary rounded-lg p-3">
                        <a href="#">
                            <div class="flex justify-center">
                                <img width="120" src="{{ asset('images/icons/pdf-upload-3389.svg') }}" alt="">
                            </div>
                            <div class="mt-2">
                                <h1 class="text-lg font-semibold text-[#545353] text-center">LFFICT/23/029/V1.0</h1>
                                <p class="text-[#545353c0] text-sm"> (Optional) UNIT 8 Review health and ....</p>
                            </div>
                        </a>
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection
