@extends('layouts.layout')

@section('title')
    Assignment
@endsection

@section('content')
    <div class="md:mx-4 mt-12">

        <div class="shadow-dark mt-3  rounded-xl pt-8  bg-white">
            <div>
                <div class="flex justify-end sm:justify-between  items-center px-[20px] mb-3">
                    <h3 class="text-[20px] text-black hidden sm:block">Assignment List</h3>
                    <div>

                        <button data-modal-target="addAssignmentmodal" data-modal-toggle="addAssignmentmodal"
                            class="bg-primary cursor-pointer text-white h-12 px-5 rounded-[6px]  shadow-sm font-semibold ">+
                            Add Assignment</button>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table id="datatable">
                        <thead class="py-1 bg-primary text-white">
                            <tr>
                                <th class="whitespace-nowrap">@lang('lang.STN')</th>
                                <th class="whitespace-nowrap">@lang('lang.Name')</th>
                                <th class="whitespace-nowrap">@lang('lang.Email')</th>
                                <th class="whitespace-nowrap">@lang('lang.Phone_No')</th>
                                <th class="whitespace-nowrap">@lang('lang.Role')</th>
                                <th class="flex  justify-center">@lang('lang.Action')</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>




    {{-- ============ add  customer modal  =========== --}}
    <div id="addAssignmentmodal" data-modal-backdrop="static"
        class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 hidden">
        <div class="fixed inset-0 transition-opacity">
            <div id="backdrop" class="absolute inset-0 bg-slate-800 opacity-75"></div>
        </div>
        <div class="relative p-4 w-full   max-w-6xl max-h-full ">
            @if (isset($user))
                <form action="../updateUserCar/{{ $user->id }}" method="post" enctype="multipart/form-data">
                @else
                    <form id="resourceData" method="post" enctype="multipart/form-data">
            @endif
            @csrf
            <div class="relative bg-white shadow-dark rounded-lg  dark:bg-gray-700  ">
                <div class="flex items-center   justify-start  p-5  rounded-t dark:border-gray-600 bg-primary">
                    <h3 class="text-xl font-semibold text-white ">
                        Add Assignment
                    </h3>
                    <button type="button"
                        class=" absolute right-2 text-white bg-transparent rounded-lg text-sm w-8 h-8 ms-auto "
                        data-modal-hide="addAssignmentmodal">
                        <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>

                <div class="grid md:grid-cols-2 gap-6 mx-6 my-6">
                    <div>
                        <label class="text-[14px] font-normal" for="name">Assignment Name</label>
                        <input type="text" required
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="name" id="name" placeholder="Resource Name Here" value="{{ $user->email ?? '' }}">
                    </div>
                    <div>
                        <label class="text-[14px] font-normal" for="file">Assignment File</label>
                        <input type="file" required
                            class="w-full border-[#DEE2E6] border rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="file" id="file" value="{{ $user->name ?? '' }}">
                    </div>

                </div>
                <div class="grid  md:grid-cols-1 gap-6 mx-6 my-6">

                    <div>
                        <label class="text-[14px] font-normal" for="description">Assignment Description</label>
                        <textarea name="description" id="description"
                            class="w-full min-h-20 border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            placeholder="Resource Description Here"></textarea>
                    </div>


                </div>



                <div class="flex justify-end ">
                    <button class="bg-primary text-white py-2 px-6 my-4 rounded-[4px]  mx-6 uaddBtn  font-semibold "
                        id="addBtn">
                        <div class=" text-center hidden" id="spinner">
                            <svg aria-hidden="true"
                                class="w-5 h-5 mx-auto text-center text-gray-200 animate-spin fill-primary"
                                viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                    fill="currentColor" />
                                <path
                                    d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                    fill="currentFill" />
                            </svg>
                        </div>
                        <div id="text">
                            @lang('lang.Save')
                        </div>

                    </button>
                </div>
            </div>
            </form>
            <div>

            </div>

        </div>
    </div>
@endsection
@section('js')
    @if (isset($user))
        <script>
            $(document).ready(function() {
                $('#addAssignmentmodal').removeClass("hidden");

            });
        </script>
    @endif
    <script>
        $(document).ready(function() {
            console.log('helo word')
            // insert data
            $("#resourceData").submit(function(event) {
                var url = "../addRecource";
                event.preventDefault();
                var formData = new FormData(this);
                console.log(url);
                $.ajax({
                    type: "POST",
                    url: url,
                    data: formData,
                    dataType: "json",
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        $('#spinner').removeClass('hidden');
                        $('#text').addClass('hidden');
                        $('#addBtn').attr('disabled', true);
                    },
                    success: function(response) {
                        // console.log(response);
                        window.location.href = '../resources';


                    },
                    error: function(jqXHR) {
                        let response = JSON.parse(jqXHR.responseText);
                        console.log("error");
                        Swal.fire(
                            'Warning!',
                            response.message,
                            'warning'
                        );

                        $('#text').removeClass('hidden');
                        $('#spinner').addClass('hidden');
                        $('#addBtn').attr('disabled', false);
                    }
                });
            });





        });
    </script>
@endsection
