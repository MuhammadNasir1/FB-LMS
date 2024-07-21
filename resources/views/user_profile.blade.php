@extends('layouts.layout')

@section('title')
    User-Profile
@endsection

@section('content')
    <div class="md:mx-4 mt-12">
        <div class="shadow-dark mt-3  rounded-xl pt-8  bg-white p-10">
            <div class="grid xl:grid-cols-3 grid-cols-1 gap-5">
                <div class=" rounded-lg min-h-[400px] xl:col-span-1 px-5">
                    <div class="xl:mx-0 mx-auto">
                        <div
                            class="h-[150px]  mx-auto rounded-full w-[150px] flex justify-center border border-primary items-center">
                            {{-- <img src="{{ asset('images/icons/user.svg') }}" class="h-[50%] w-[50%]  rounded-full"
                                alt=""> --}}
                            <img src="{{ isset($userDetails->user_image) ? asset($userDetails->user_image) : asset('images/icons/user.svg') }}"
                                class="h-[50%] w-[50%]  rounded-full" alt="user">
                        </div>
                        <h2 class="text-center text-2xl font-bold">{{ $userDetails->name }}</h2>
                        <p class="text-center">{{ $userDetails->role }}</p>
                    </div>

                    <div class="mt-5">
                        <div><i class="fa-solid fa-phone text-primary"></i> <span
                                class="ms-1">{{ $userDetails->phone }}</span>
                        </div>
                        <div class="mt-2"><i class="fa-regular fa-envelope text-primary "></i>
                            <span class="ms-1">{{ $userDetails->email }}</span>
                        </div>
                        @php
                            $pedingAssignmets = $course->total_assignments - $assessments;
                            $percentage_pending = ($pedingAssignmets / $course->total_assignments) * 100;
                        @endphp
                        <div class="mt-5">
                            <div class="flex justify-between mb-1">
                                <span class="text-base font-medium text-primary dark:text-white">Pending</span>
                                <span
                                    class="text-sm font-medium text-primary dark:text-white">{{ $percentage_pending }}%</span>
                            </div>
                            <div class="w-full bg-gray rounded-full h-3 dark:bg-gray-700">
                                <div class="bg-primary h-3 rounded-full" style="width: {{ $percentage_pending }}%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" min-h-[400px]  col-span-2">
                    <div class="flex flex-col w-full">
                        <div class=" bg-gray w-full rounded-lg shadow-md">
                            <div class="py-5 bg-primary text-white rounded-t-lg px-5 text-xl">Progress</div>
                            <div class="flex items-center">
                                <div class=" w-full py-8 px-6">
                                    <div class="flex justify-between  mb-2">
                                        @php
                                            $percentage_completion = ($assessments / $course->total_assignments) * 100;
                                        @endphp
                                        <span
                                            class="text-base font-medium text-primary dark:text-white">{{ $course->name }}</span>
                                        <span
                                            class="text-sm font-medium text-primary dark:text-white">{{ $percentage_completion }}%</span>
                                    </div>
                                    <div class="w-full bg-white rounded-full h-3 dark:bg-gray-700">
                                        <div class="bg-primary h-3 rounded-full"
                                            style="width: {{ $percentage_completion }}%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grid lg:grid-cols-2 grid-cols-1 gap-5 mt-10">
                            <div class="bg-gray h-[100px] rounded-lg flex items-center px-5 ">
                                <div
                                    class="h-[70px] w-[70px] bg-white rounded-full border-primary border flex justify-center items-center">
                                    <i class="fa-solid fa-file-lines text-primary text-[30px]"></i>
                                </div>
                                <div class="px-5">
                                    <h2 class="text-2xl">{{ $feedbacks }}</h2>
                                    <p class="text-lg">Feedbacks</p>
                                </div>
                            </div>
                            <div class="bg-gray h-[100px] rounded-lg flex items-center px-5 ">
                                <div
                                    class="h-[70px] w-[70px] bg-white rounded-full border-primary border flex justify-center items-center">
                                    <i class="fa-solid fa-file-lines text-primary text-[30px]"></i>
                                </div>
                                <div class="px-5">
                                    <h2 class="text-2xl">{{ $assessments }}</h2>
                                    <p class="text-lg">Assessments</p>
                                </div>
                            </div>
                            <div class="bg-gray h-[100px] rounded-lg flex items-center px-5 ">
                                <div
                                    class="h-[70px] w-[70px] bg-white rounded-full border-primary border flex justify-center items-center">
                                    <i class="fa-solid fa-file-lines text-primary text-[30px]"></i>
                                </div>
                                <div class="px-5">
                                    <h2 class="text-2xl">{{ $totalAssignments }}</h2>
                                    <p class="text-lg">Submissions</p>
                                </div>
                            </div>
                            <div class="bg-gray h-[100px] rounded-lg flex items-center px-5 ">
                                <div
                                    class="h-[70px] w-[70px] bg-white rounded-full border-primary border flex justify-center items-center">
                                    <i class="fa-solid fa-file-lines text-primary text-[30px]"></i>
                                </div>
                                <div class="px-5">
                                    <h2 class="text-2xl">{{ $course->total_assignments }}</h2>
                                    <p class="text-lg">Total Assignments</p>
                                </div>
                            </div>
                            <div class="bg-gray h-[100px] rounded-lg flex items-center px-5 ">
                                <div
                                    class="h-[70px] w-[70px] bg-white rounded-full border-primary border flex justify-center items-center">
                                    <i class="fa-solid fa-file-lines text-primary text-[30px]"></i>
                                </div>
                                <div class="px-5">
                                    <h2 class="text-2xl">{{ $course->total_assignments - $assessments }}</h2>
                                    <p class="text-lg">Pending Assignments</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="flex justify-end mt-5">
                <div class="w-full">
                    <div class=" shadow-med p-3 rounded-xl">
                        <h2 class="text-xl  font-semibold ml-6">Submissions</h2>
                        <div id="barChart" class="mt-4" style="height: 370px; width: 100%;"></div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection

@section('js')
    <script>
        window.onload = function() {
            CanvasJS.addColorSet("colors",
                [

                    "#417dfc",
                    "#339B96",
                    "#13242C",

                ]);


            var chart2 = new CanvasJS.Chart("barChart", {
                colorSet: "colors",
                animationEnabled: true,
                theme: "light1",
                axisY: {
                    gridColor: "#00000016",
                    suffix: "-"

                },

                data: [{
                    type: "column",
                    yValueFormatString: "#,##0.0#\"\"",
                    dataPoints: [{
                            label: "Jan",

                            y: 78
                        },
                        {
                            label: "Feb",
                            y: 55
                        },
                        {
                            label: "Mar",
                            y: 80
                        },
                        {
                            label: "Apr",
                            y: 60
                        },


                    ]
                }]
            });

            chart2.render();

        }
    </script>
@endsection
