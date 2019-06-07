@extends('index')

@section('title', 'ลูกค้า')

@section('content')

    @component('components.columns', [

        'navleft'=> ''
    ])

        @slot('nav')
            @component('components.navleft', [
                'title' => 'ลูกค้า',

                "items" => [

                    [
                        "name" => "สถานะ",
                        "items" => [
                            ["id"=> "", "name" => "ทั้งหมด"],
                            ["id"=> "", "name" => "ใช้งาน"],
                            ["id"=> "", "name" => "รอการตรวจสอบ"],
                            ["id"=> "", "name" => "ระงับ"],
                        ]
                    ],
                ],
            ])

            @endcomponent

        @endslot

        @component('components.datatable', [
            'title' => 'ลูกค้า',

            'options' => [
                "url" => '555'
            ]
        ])

            @slot('actions_right')
                <a class="btn btn-primary ml-2" href="javascript:void(0)"><svg class="svg-icon o__tiny o__by-text" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12"><path d="M2 5v2h3v3h2V7h3V5H7V2H5v3H2z"></path></svg> <span>เพิ่ม</span></a>
            @endslot

            @slot('nav')
                <ul class="page-datalist-tabs nav">
                    <li class="nav-item active"><a href="#" class="nav-link"><span class="nav-text">ทั้งหมด</span><span class="nav-count">(0)</span></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><span class="nav-text">ใช้งาน</span><span class="nav-count">(0)</span></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><span class="nav-text">รอการตรวจสอบ</span><span class="nav-count">(0)</span></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><span class="nav-text">ระงับ</span><span class="nav-count">(0)</span></a></li>

                </ul>
            @endslot

            {{-- <ul class="page-datalist-checkbox nav">
                <li class="nav-item active">
                    <label class="checkbox">
                        <input type="checkbox" name="" value="" checked />
                        <span class="text">ทั้งหมด</span>
                        <span class="count">(0)</span>
                    </label>

                </li>
            </ul> --}}


        @endcomponent

    @endcomponent

@endsection
