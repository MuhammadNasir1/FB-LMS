@extends('layouts.layout')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="mx-4 mt-12">
        <div>
            <h1 class=" font-semibold   text-2xl ">@lang('lang.Dashboard')</h1>
        </div>
        <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-6  mt-4">
            <div class="card-1 ">
                <div class="bg-white  border border-secondary rounded-[10px] py-5 px-8">
                    <div class="flex gap-1 justify-between items-center">
                        <div>
                            <p class="text-sm text-[#808191]">@lang('lang.Total_orders')</p>
                            <h2 class="text-2xl font-semibold mt-1">1</h2>
                        </div>
                        <div>
                            <img width="60px" height="60px" src="{{ asset('images/icons/total_orders.svg') }}"
                                alt="Orders">
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-1 ">
                <div class="bg-white  border border-secondary rounded-[10px] py-5 px-8">
                    <div class="flex gap-1 justify-between items-center">
                        <div>
                            <p class="text-sm text-[#808191]">@lang('lang.Pending_orders')</p>
                            <h2 class="text-2xl font-semibold mt-1">2</h2>
                        </div>
                        <div>
                            <img width="52px" height=52px" src="{{ asset('images/icons/pending-orders.svg') }}"
                                alt="Pending Orders">
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-1 ">
                <div class="bg-white  border border-secondary rounded-[10px] py-5 px-8">
                    <div class="flex gap-1 justify-between items-center">
                        <div>
                            <p class="text-sm text-[#808191]">@lang('lang.Total_product')</p>
                            <h2 class="text-2xl font-semibold mt-1">10</h2>
                        </div>
                        <div>
                            <img width="60px" height="60px" src="{{ asset('images/icons/total-product.svg') }}"
                                alt="Product">
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-1 ">
                <div class="bg-white  border border-secondary rounded-[10px] py-5 px-8">
                    <div class="flex gap-1 justify-between items-center">
                        <div>
                            <p class="text-sm text-[#808191]">@lang('lang.Total_customers')</p>
                            <h2 class="text-2xl font-semibold mt-1">100</h2>
                        </div>
                        <div>
                            <img width="50px" height="50px" src="{{ asset('images/icons/customers.svg') }}"
                                alt="Customers">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="lg:flex gap-14 mt-16 px-3 ">
        <div class="lg:w-[60%] w-full">
            <div class=" shadow-med p-3 py-5   rounded-xl min-h-[448px]">
                <div class="flex justify-between px-6">
                    <h2 class="text-xl  font-semibold ">Recent Assignments</h2>

                </div>
                <div>
                    <div class="pt-3  mt-2 border-t  border-gray-200">

                        <div class="relative overflow-auto h-[300px] ">
                            <table class="w-full text-sm text-center ">
                                <thead class="text-sm text-gray-900  text-dblue ">
                                    <tr>
                                        <th class="px-6 py-3">
                                            STN
                                        </th>
                                        <th class="px-6 py-3">
                                            Candidates Name
                                        </th>
                                        <th class="px-6 py-3">
                                            Candidates Name
                                        </th>
                                        <th class="px-6 py-3">
                                            Date/Time
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

            </div>

        </div>
        <div class="lg:w-[40%] w-full">
            <div class=" shadow-med p-3 rounded-xl">
                <h2 class="text-xl  font-semibold ml-6">Submissions</h2>
                <div id="barChart" class="mt-4" style="height: 370px; width: 100%;"></div>
            </div>
        </div>
    </div>
    </div>

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js"
        integrity="sha512-L0Shl7nXXzIlBSUUPpxrokqq4ojqgZFQczTYlGjzONGTDAcLremjwaWv5A+EDLnxhQzY5xUZPWLOLqYRkY0Cbw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
