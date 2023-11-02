<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="7O7KHPu72WmmWT3aWAsy0y5R0a0JWVOkLdnOzFPe">
    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
            integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>
<header>
    <nav class="navbar justify-content-between px-2">
        <button id="buttonMenu" class="btn" type="button" data-bs-toggle="offcanvass" aria-expanded="false"
                data-bs-target="#sideMenu" aria-controls="offcanvasScrolling">
            <i class="bi bi-list"></i>
        </button>
        <a class="navbar-brand" href="#">Demo App</a>
        {{--        <form class="d-flex ms-auto me-2" role="search">--}}
        {{--            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">--}}
        {{--            <button class="btn btn-outline-success" type="submit">Search</button>--}}
        {{--        </form>--}}

        <div class="btn-group">
            <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle"
               data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
            </a>
            <ul class="dropdown-menu dropdown-menu-end text-small">

                <li>
                    <hr class="dropdown-divider">
                </li>
                <!-- <li> 1</li> -->
                <li>
                    <form action="https://ctoc-estate.jp/users/logout" method="POST">
                        <input type="hidden" name="_method" value="POST"> <input type="hidden" name="_token"
                                                                                 value="7O7KHPu72WmmWT3aWAsy0y5R0a0JWVOkLdnOzFPe">
                        <button class="dropdown-item" type="submit">Sign out</button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>
</header>

<main class="d-flex">
    <div id="sideMenu" tabindex="-1"
         class="collapse collapse-horizontal show w-auto sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
        <div class="offcanvas-header d-none">
            <h5 class="offcanvas-title" id="offcanvasLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="list-group">
                <!-- <a href="https://ctoc-estate.jp" class="list-group-item list-group-item-action text-nowrap" aria-current="page">
                <i class="bi bi-house-fill me-2" width="16" height="16">
                    <use xlink:href="#home"></use>
                    </i>
                    Home
                </a> -->
                <a href="https://ctoc-estate.jp/segments" class="list-group-item list-group-item-action text-nowrap">
                    <i class="bi bi-map-fill  me-2"></i>
                    <span class="list-text"> Route</span>
                </a>
                <a href="https://ctoc-estate.jp/destinations"
                   class="list-group-item list-group-item-action text-nowrap">
                    <i class="bi bi-pin-map-fill  me-2"></i>
                    <span class="list-text"> Destinations</span>
                </a>
                <a href="https://ctoc-estate.jp/blocked_road"
                   class="list-group-item list-group-item-action text-nowrap">
                    <i class="bi bi-x-octagon-fill me-2" width="16" height="16"> </i>
                    <span class="list-text">Restrict Area</span>
                </a>
                <a href="https://ctoc-estate.jp/cars" class="list-group-item list-group-item-action text-nowrap">
                    <i class="bi bi-truck me-2" width="16" height="16"> </i>
                    <span class="list-text"> Cars Type</span>
                </a>
                <!-- <li class="nav-item">
                    <a href="https://ctoc-estate.jp/waypoint" class="list-group-item list-group-item-action text-nowrap">
                        <i class="bi bi-map-fill me-2" width="16" height="16">

                        </i>
                        Waypoint
                    </a>
                </li> -->

                <a href="https://ctoc-estate.jp/drivers" class="list-group-item list-group-item-action text-nowrap">
                    <i class="bi bi-people-fill me-2" width="16" height="16"></i>
                    <span class="list-text">Driver</span>
                </a>

                <a href="https://ctoc-estate.jp/segment_data"
                   class="list-group-item list-group-item-action text-nowrap">
                    <i class="bi bi-camera-fill me-2" width="16" height="16"></i>
                    <span class="list-text"> Photo</span>
                </a>

                <a href="https://ctoc-estate.jp/speed_violations"
                   class="list-group-item list-group-item-action text-nowrap">
                    <i class="bi bi-speedometer me-2" width="16" height="16"></i>
                    <span class="list-text">Speed Violation</span>
                </a>


                <a href="https://ctoc-estate.jp/notifications"
                   class="list-group-item list-group-item-action text-nowrap">
                    <i class="bi bi-bell-fill me-2" width="16" height="16"> </i>
                    <span class="list-text"> Notification</span>
                </a>
                <a href="https://ctoc-estate.jp/newspapers" class="list-group-item list-group-item-action text-nowrap">
                    <i class="bi bi-newspaper  me-2"></i>
                    <span class="list-text"> Newspapers</span>
                </a>
                <a href="https://ctoc-estate.jp/users" class="list-group-item list-group-item-action text-nowrap">
                    <i class="bi bi-people-fill me-2" width="16" height="16"> </i>
                    <span class="list-text">Users</span>
                </a>
            </div>
        </div>
    </div>
    <script>
        var hideMenu = false;
        $(document).ready(function () {
            if ($(window).width() < 700) {
                $("#sideMenu").removeClass('collapse collapse-horizontal show').addClass("offcanvas offcanvas-start");
                $("#sideMenu").find('.offcanvas-header').removeClass('d-none')
                $("#buttonMenu").attr('data-bs-toggle', 'offcanvas')

            } else {
                $("#buttonMenu").attr('data-bs-toggle', 'offcanvass')

                $("#sideMenu").hover(
                    function () {
                        if (hideMenu) {
                            $(".list-text").show()
                            $("#sideMenu").width('auto')
                        }
                    },
                    function () {
                        if (hideMenu) {
                            $(".list-text").hide()
                            $("#sideMenu").width('40px')
                        }
                    }
                );
                $("#buttonMenu").click(function () {

                    if (hideMenu) {
                        hideMenu = false
                        $(".list-text").show()
                        $("#sideMenu").width('auto')
                    } else {
                        hideMenu = true
                        $("#sideMenu").width('40px')
                        $(".list-text").hide()
                    }
                })
            }

        });
    </script>
    <div class="container-fluid">

        <section class="content">
            <!-- Your Page Content Here -->
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header d-flex flex-row gap-1">
                        <div class="h6 flex-fill">segments</div>
                        <form action="{{ url('operators') }}" method="GET">
                            <input name="vehicle_number"/>
                            <button type="submit" class="btn btn-secondary btn-sm">
                                <i class="bi bi-search"></i> Search
                            </button>
                        </form>
                        <div class="h6">
                            <a href="#" class="btn btn-secondary btn-sm"> <i class="bi bi-arrow-clockwise"></i></a>
                            <a href="https://ctoc-estate.jp/live-tracking" class="btn btn-primary btn-sm"
                               aria-expanded="false"> <i class="bi bi-person-lines-fill"></i> Live Tracking</a>
                            <a href="https://ctoc-estate.jp/segments/create" class="btn btn-sm btn-success float-end"><i
                                    class="bi bi-plus"></i>Add</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped small table-bordered table-hover table-responsive">
                                <thead>
                                <tr>
                                    <th>Slip_No</th>
                                    <th>Product_name</th>
                                    <th>amount</th>
                                    <th>AssignedOn</th>
                                    <th>Assign</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($data['products']))
                                    @foreach($data['products'] as $product)
                                        <tr>
                                            <td>{{ $product->id }}</td>
                                            <td>{{ $product->product_name_code }}</td>
                                            <td>{{ $product->total_weight }}</td>
                                            <td>
                                                <select data-segment="{{ $product->id }}" segment="72" name="assign_driver" class="driver_machine_val" id="assign_driver">
                                                    <option value="">SELECT DRIVER</option>
                                                    @foreach($data['drivers'] as $driver)
                                                        <option value="{{ $driver->machinery_number }}"
                                                            {{ ($driver->machinery_number == $product->assign_driver) ? "selected" : null }}>{{ $driver->machinery_number }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-secondary assign_driver">assign</button>
                                            </td>
                                            <td>
                                                @if($product->status_type == 1)
                                                    Assigned
                                                @elseif($product->status_type == 2)
                                                    Loading
                                                @elseif($product->status_type == 3)
                                                    Loaded
                                                @elseif($product->status_type == 4)
                                                    Deperted/Completed
                                                @else
                                                    {{ $product->status_type }}
                                                @endif
                                            </td>
                                            <td class="d-flex flex-row gap-1">
                                                <a href="https://ctoc-estate.jp/segments/71/edit"
                                                   class="btn btn-sm btn-primary"><i class="bi bi-pencil-square"></i></a>
                                                <form method="POST" action="https://ctoc-estate.jp/segments/71"
                                                      class="horizontal-form">
                                                    <input type="hidden" name="_method" value="delete">
                                                    <input type="hidden" name="_token" value="7O7KHPu72WmmWT3aWAsy0y5R0a0JWVOkLdnOzFPe">
                                                    <button type="submit"
                                                            onclick="return confirm('Are you sure you want to delete?')"
                                                            class="btn btn-sm btn-danger"><i class="bi bi-trash-fill"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                            <nav class="d-flex justify-items-center justify-content-between">
                                <div class="d-flex justify-content-between flex-fill d-sm-none">
                                    <ul class="pagination">

                                        <li class="page-item disabled" aria-disabled="true">
                                            <span class="page-link">« Previous</span>
                                        </li>


                                        <li class="page-item">
                                            <a class="page-link" href="https://ctoc-estate.jp/segments?page=2"
                                               rel="next">Next »</a>
                                        </li>
                                    </ul>
                                </div>

                                <div
                                    class="d-none flex-sm-fill d-sm-flex align-items-sm-center justify-content-sm-between">
                                    <div>
                                        <p class="small text-muted">
                                            Showing
                                            <span class="fw-semibold">1</span>
                                            to
                                            <span class="fw-semibold">10</span>
                                            of
                                            <span class="fw-semibold">15</span>
                                            results
                                        </p>
                                    </div>

                                    <div>
                                        <ul class="pagination">

                                            <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                                                <span class="page-link" aria-hidden="true">‹</span>
                                            </li>


                                            <li class="page-item active" aria-current="page"><span
                                                    class="page-link">1</span></li>
                                            <li class="page-item"><a class="page-link"
                                                                     href="https://ctoc-estate.jp/segments?page=2">2</a>
                                            </li>


                                            <li class="page-item">
                                                <a class="page-link" href="https://ctoc-estate.jp/segments?page=2"
                                                   rel="next" aria-label="Next »">›</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>

                    </div>
                    <div class="card-footer">

                    </div>

                </div>
            </div>
            <script>
                base_url = "https://ctoc-estate.jp"

                function onLatLongChange(Lat, Lng, AddressId) {
                    $.ajax({
                        url: base_url + "segments/update_cordinates",
                        type: "POST",
                        data: {
                            'AddressId': AddressId,
                            'Lat': Lat,
                            'Lng': Lng,
                        },
                        success: function (data) {
                            //	window.location.reload();
                        }
                    })
                }

                $(document).bind('drop dragover', function (e) {
                    e.preventDefault();
                });
                $(document.body).on('click', '.btnImport', function () {
                    var titleSet = $('input[type="text"]').val();
                    var fileSelected = $('input[type="file"]').val();
                    if (fileSelected != '' && titleSet != '') {
                        $(this).val('Importing Data ...');
                    }
                });

                $.each($(".assign_driver"), function (value, key) {
                    $(this).on('click', function (e) {

                        var Driver = $(this).parent()
                        // var DriverId = Driver.parent('tr').children('td').find('#assign_driver :selected').val()
                        // var SegmentId = Driver.parent('tr').children('td').find('#assign_driver').attr('segment')
                        var DriverId = Driver.parent('tr').children('td').find('.driver_machine_val :selected').val()
                        var SegmentId = Driver.parent('tr').children('td').find('#assign_driver').attr('data-segment')
                        var token = Driver.parent('tr').children('td').find('#assign_driver').attr('token')

                        $.ajax({
                            url: "{{ url('assign-driver') }}",
                            type: "GET",
                            data: {
                                // "_token": "7O7KHPu72WmmWT3aWAsy0y5R0a0JWVOkLdnOzFPe",
                                'DriverId': DriverId,
                                'SegmentId': SegmentId
                            },
                            success: function (data) {
                                $('.card-footer').empty()
                                $('.card-footer').append(`<div class="alert alert-success">
                        <p>Success Update Assign Route</p>
                    </div>`)
                            }
                        })
                    })

                });
                //                $(document.body).on('change','#assign_driver',function(){
                //			var DriverId = this.value;
                //			var SegmentId = $(this).data('segment');
                //			$.ajax({
                //				url: base_url + "segments/assign_driver",
                //				type: "POST",
                //				data: {
                //					'DriverId': DriverId,
                //					'SegmentId': SegmentId
                //				},
                //				success: function (data) {
                //					window.location.reload();
                //				}
                //			})
                //		});

                $(document.body).on('change', '[name="DriverSpeed"]', function () {
                    var Speed = this.value;
                    $.ajax({
                        url: base_url + "drivers/set_speed",
                        type: "POST",
                        data: {
                            'Speed': Speed
                        },
                        success: function (data) {
                            window.location.reload();
                        }
                    })
                });

                // $(document.body).on(".assign_driver", function () {
                //     alert('hi')
                    // var Speed = this.value;
                    // $.ajax({
                    //     url: base_url + "drivers/set_speed",
                    //     type: "POST",
                    //     data: {
                    //         'Speed': Speed
                    //     },
                    //     success: function (data) {
                    //         window.location.reload();
                    //     }
                    // })
                // });
            </script>
        </section><!-- /.content -->
    </div>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
<footer class="d-flex flex-wrap justify-content-between align-items-center   border-top">
    <div class="col-md-4 d-flex align-items-center">
        <a href="/" class=" me-2 md-0 text-body-secondary text-decoration-none lh-1">
            <svg class="bi" width="30" height="24">
                <use xlink:href="#bootstrap"></use>
            </svg>
        </a>
        <span class=" md-0 text-body-secondary">© 2023 Company, Inc</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-body-secondary" href="#">
                <svg class="bi" width="24" height="24">
                    <use xlink:href="#twitter"></use>
                </svg>
            </a></li>
        <li class="ms-3"><a class="text-body-secondary" href="#">
                <svg class="bi" width="24" height="24">
                    <use xlink:href="#instagram"></use>
                </svg>
            </a></li>
        <li class="ms-3"><a class="text-body-secondary" href="#">
                <svg class="bi" width="24" height="24">
                    <use xlink:href="#facebook"></use>
                </svg>
            </a></li>
    </ul>
</footer>
</body>
</html>
