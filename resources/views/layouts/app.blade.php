<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        [x-cloak] {
            display: none;
        }

        [type="checkbox"] {
            box-sizing: border-box;
            padding: 0;
        }

        .form-checkbox {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            -webkit-print-color-adjust: exact;
            color-adjust: exact;
            display: inline-block;
            vertical-align: middle;
            background-origin: border-box;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            flex-shrink: 0;
            color: currentColor;
            background-color: #fff;
            border-color: #e2e8f0;
            border-width: 1px;
            border-radius: 0.25rem;
            height: 1.2em;
            width: 1.2em;
        }

        .form-checkbox:checked {
            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");
            border-color: transparent;
            background-color: currentColor;
            background-size: 100% 100%;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen grid sm:grid-cols-6 bg-gray-100">
        <!-- Page Sidebar -->
        <div class="px-5 py-8">
            <h3 class="font-black text-lg"><a href="/" class="">HomePage</a></h3>
            {{$sidebar}}
        </div>
        <!-- Page Content -->
        <main class="col-span-3 bg-gray-200 p-5">
        {{$slot}}
        </main>
        <div class="bg-white col-span-2 md:py-8 px-5" x-data="appointment()">
            <div class="h-60 w-full rounded-lg bg-gray-500 mb-8"></div>
            <div class="rounded-lg h-72 px-3 py-8 w-full overflow-y-auto"><template x-for="timeFrame in timeFrames">
                    <div class="flex mr-2 mb-12">
                        <p class="w-28 text-gray-400 mr-2 text-sm" x-text="timeFrame.time"></p>
                        <div class="relative w-full h-0.5 bg-gray-200 self-center">
                            <div x-show="!timeFrame.completed" style="top:-1.4rem" class="border border-indigo-400 bg-indigo-100 absolute py-1 px-5 rounded-lg left-12 flex justify-center items-center"><i class="fas fa-trophy mr-2"></i>
                                <div class="flex flex-col"><b class="font-semibold text-sm">Braides and Twist</b>
                                    <p class="text-cool-gray-500 text-xs font-black" x-text="timeFrame.date"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </template></div>
        </div>
    </div>
    @livewireScripts
    <script>
        function appointment() {
            return {
                timeFrames: [{
                        time: "00 : 00 am",
                        color: "bg-orange-300",
                        date: "02 : 00pm - 04 : 30pm",
                        completed: false
                    }

                    ,
                    {
                        time: "01 : 00 am",
                        color: "",
                        date: "02 : 00pm - 04 : 30pm",
                        completed: true
                    }

                    ,
                    {
                        time: "02 : 00 am",
                        color: "",
                        date: "02 : 00pm - 04 : 30pm",
                        completed: false
                    }

                    ,
                    {
                        time: "03 : 00 am",
                        color: "",
                        date: "02 : 00pm - 04 : 30pm",
                        completed: false
                    }

                    ,
                    {
                        time: "04 : 00 am",
                        color: "",
                        date: "02 : 00pm - 04 : 30pm",
                        completed: true
                    }

                    ,
                    {
                        time: "05 : 00 am",
                        color: "",
                        date: "02 : 00pm - 04 : 30pm",
                        completed: false
                    }

                    ,
                ]
            }
        }

        function datatables() {
            return {
                headings: [{
                        'key': 'userId',
                        'value': 'User ID'
                    }

                    ,
                    {
                        'key': 'firstName',
                        'value': 'Firstname'
                    }

                    ,
                    {
                        'key': 'lastName',
                        'value': 'Lastname'
                    }

                    ,
                    {
                        'key': 'emailAddress',
                        'value': 'Email'
                    }

                    ,
                    {
                        'key': 'gender',
                        'value': 'Gender'
                    }

                    ,
                    {
                        'key': 'phoneNumber',
                        'value': 'Phone'
                    }

                ],
                users: [{
                        "userId": 1,
                        "firstName": "Cort",
                        "lastName": "Tosh",
                        "emailAddress": "ctosh0@github.com",
                        "gender": "Male",
                        "phoneNumber": "327-626-5542"
                    }

                    ,
                    {
                        "userId": 2,
                        "firstName": "Brianne",
                        "lastName": "Dzeniskevich",
                        "emailAddress": "bdzeniskevich1@hostgator.com",
                        "gender": "Female",
                        "phoneNumber": "144-190-8956"
                    }

                    ,
                    {
                        "userId": 3,
                        "firstName": "Isadore",
                        "lastName": "Botler",
                        "emailAddress": "ibotler2@gmpg.org",
                        "gender": "Male",
                        "phoneNumber": "350-937-0792"
                    }

                    ,
                    {
                        "userId": 4,
                        "firstName": "Janaya",
                        "lastName": "Klosges",
                        "emailAddress": "jklosges3@amazon.de",
                        "gender": "Female",
                        "phoneNumber": "502-438-7799"
                    }

                ],
                selectedRows: [],

                open: false,

                toggleColumn(key) {
                    // Note: All td must have the same class name as the headings key!
                    let columns = document.querySelectorAll('.' + key);

                    if (this.$refs[key].classList.contains('hidden') && this.$refs[key].classList.contains(key)) {
                        columns.forEach(column => {
                                column.classList.remove('hidden');
                            }

                        );
                    } else {
                        columns.forEach(column => {
                                column.classList.add('hidden');
                            }

                        );
                    }
                }

                ,

                getRowDetail($event, id) {
                    let rows = this.selectedRows;

                    if (rows.includes(id)) {
                        let index = rows.indexOf(id);
                        rows.splice(index, 1);
                    } else {
                        rows.push(id);
                    }
                }

                ,

                selectAllCheckbox($event) {
                    let columns = document.querySelectorAll('.rowCheckbox');

                    this.selectedRows = [];

                    if ($event.target.checked == true) {
                        columns.forEach(column => {
                                column.checked = true, this.selectedRows.push(parseInt(column.name))
                            }

                        );
                    } else {
                        columns.forEach(column => {
                                column.checked = false
                            }

                        );
                        this.selectedRows = [];
                    }
                }
            }
        }
    </script>
</body>

</html>
