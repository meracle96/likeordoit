<!DOCTYPE html>
<html>

<head>
    <!-- Meta-Information -->
    <title>Admin Panel</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Vendor: Bootstrap 4 Stylesheets  -->
    <link rel="stylesheet" href="{{ asset('back/css/bootstrap.min.css') }}" type="text/css">

    <!-- Our Website CSS Styles -->
    <link rel="stylesheet" href="{{ asset('back/css/icons.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('back/css/main.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('back/css/responsive.css') }}" type="text/css">

    <!-- Color Scheme -->
    <link rel="stylesheet" href="{{ asset('back/css/color-schemes/color.css') }}" type="text/css" title="color3">
    <link rel="alternate stylesheet" href="{{ asset('back/css/color-schemes/color1.css') }}" title="color1">
    <link rel="alternate stylesheet" href="{{ asset('back/css/color-schemes/color2.css') }}" title="color2">
    <link rel="alternate stylesheet" href="{{ asset('back/css/color-schemes/color4.css') }}" title="color4">
    <link rel="alternate stylesheet" href="{{ asset('back/css/color-schemes/color5.css') }}" title="color5">
</head>

<body class="expand-data panel-data">
    <!-- Topbar -->
    <div class="topbar">
        @include('back.partials.topnav')
    </div>


    <!-- Side Header -->
    @include('back.partials.leftnav')

    @yield('content')

    @include('back.partials.footer')

    <!-- Vendor: Javascripts -->
    <script src="{{ asset('back/js/jquery.min.js') }}" type="text/javascript"></script>
    <!-- Vendor: Followed by our custom Javascripts -->
    <script src="{{ asset('back/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/select2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/slick.min.js') }}" type="text/javascript"></script>

    <!-- Our Website Javascripts -->
    <script src="{{ asset('back/js/isotope.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/isotope-int.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/jquery.counterup.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/waypoints.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/highcharts.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/exporting.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/highcharts-more.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/moment.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/jquery.circliful.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/fullcalendar.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/jquery.downCount.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/jquery.bootstrap-touchspin.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/jquery.formtowizard.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/form-validator.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/form-validator-lang-en.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/cropbox-min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/ion.rangeSlider.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/jquery.poptrox.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/styleswitcher.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/main.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            'use strict';

            $.getJSON(
                'https://cdn.rawgit.com/highcharts/highcharts/057b672172ccc6c08fe7dbb27fc17ebca3f5b770/samples/data/usdeur.json',
                function (data) {
                    Highcharts.chart('chrt1', {
                        chart: {
                            zoomType: 'x'
                        },

                        legend: {
                            enabled: false
                        },
                        title: {
                            style: {
                                display: 'none'
                            }
                        },
                        plotOptions: {
                            area: {
                                fillColor: {
                                    linearGradient: {
                                        x1: 0,
                                        y1: 0,
                                        x2: 0,
                                        y2: 1
                                    },
                                    stops: [
                                        [0, Highcharts.getOptions().colors[0]],
                                        [1, Highcharts.Color(Highcharts.getOptions().colors[
                                            0]).setOpacity(0).get('rgba')]
                                    ]
                                },
                                marker: {
                                    radius: 2
                                },
                                lineWidth: 1,
                                states: {
                                    hover: {
                                        lineWidth: 1
                                    }
                                },
                                threshold: null
                            }
                        },
                        series: [{
                            type: 'area',
                            name: 'USD to EUR',
                            data: data
                        }]
                    });
                });

            Highcharts.chart('chrt2', {
                chart: {
                    type: 'area',
                    backgroundColor: "#FFFFFF",
                    borderColor: "#335cad"
                },
                legend: {
                    enabled: false
                },
                title: {
                    style: {
                        display: 'none'
                    }
                },
                xAxis: {
                    categories: ['1', '2', '3', '4', '5', '6', '7']
                },
                credits: {
                    enabled: false
                },
                tooltip: {
                    pointFormat: '{series.name} produced <b>{point.y:,.0f}</b><br/>warheads in {point.x}'
                },
                plotOptions: {
                    area: {
                        categories: ['1', '2', '3', '4', '5', '6', '7'],
                        marker: {
                            enabled: false,
                            symbol: 'circle',
                            radius: 2,
                            states: {
                                hover: {
                                    enabled: true
                                }
                            }
                        }
                    }
                },
                series: [{
                    data: [null, null, null, null, null, 6, 11, 32, 110, 235, 369, 640, 1005,
                        1436, 2063, 3057, 4618, 6444, 9822, 15468, 20434,
                        24126, 27387, 29459, 31056, 31982, 32040, 31233, 29224, 27342,
                        26662, 26956, 27912, 28999, 28965, 27826, 25579, 25722, 24826,
                        24605, 24304, 23464, 23708, 24099, 24357, 24237, 24401, 24344,
                        23586, 22380, 21004, 17287, 14747, 13076, 12555, 12144, 11009,
                        10950, 10871, 10824, 10577, 10527, 10475, 10421, 10358, 10295,
                        10104, 9914, 9620, 9326, 5113, 5113, 4954, 4804, 4761, 4717,
                        4368, 4018
                    ]
                }, {
                    data: [null, null, null, null, null, null, null, null, null, null, 5, 25,
                        50, 120, 150, 200, 426, 660, 869, 1060, 1605,
                        2471, 3322, 4238, 5221, 6129, 7089, 8339, 9399, 10538, 11643, 13092,
                        14478, 15915, 17385, 19055, 21205, 23044, 25393, 27935,
                        30062, 32049, 33952, 35804, 37431, 39197, 45000, 43000, 41000,
                        39000, 37000, 35000, 33000, 31000, 29000, 27000, 25000, 24000,
                        23000, 22000, 21000, 20000, 19000, 18000, 18000, 17000, 16000,
                        15537, 14162, 12787, 12600, 11400, 5500, 4512, 4502, 4502,
                        4500, 4500
                    ]
                }]
            });

            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                $('#chrt3').highcharts({
                    chart: {
                        type: 'area',
                        backgroundColor: "#FFFFFF",
                        borderColor: "#335cad"
                    },
                    legend: {
                        enabled: false
                    },
                    title: {
                        style: {
                            display: 'none'
                        }
                    },
                    xAxis: {
                        categories: ['1', '2', '3', '4', '5', '6', '7']
                    },
                    credits: {
                        enabled: false
                    },
                    tooltip: {
                        pointFormat: '{series.name} produced <b>{point.y:,.0f}</b><br/>warheads in {point.x}'
                    },
                    plotOptions: {
                        area: {
                            categories: ['1', '2', '3', '4', '5', '6', '7'],
                            marker: {
                                enabled: false,
                                symbol: 'circle',
                                radius: 2,
                                states: {
                                    hover: {
                                        enabled: true
                                    }
                                }
                            }
                        }
                    },
                    series: [{
                        data: [null, null, null, null, null, null, null, null, null,
                            null, 5, 25, 50, 120, 150, 200, 426, 660, 869, 1060,
                            1605,
                            2471, 3322, 4238, 5221, 6129, 7089, 8339, 9399, 10538,
                            11643, 13092, 14478, 15915, 17385, 19055, 21205, 23044,
                            25393, 27935,
                            30062, 32049, 33952, 35804, 37431, 39197, 45000, 43000,
                            41000, 39000, 37000, 35000, 33000, 31000, 29000, 27000,
                            25000, 24000,
                            23000, 22000, 21000, 20000, 19000, 18000, 18000, 17000,
                            16000, 15537, 14162, 12787, 12600, 11400, 5500, 4512,
                            4502, 4502,
                            4500, 4500
                        ]
                    }, {
                        data: [null, null, null, null, null, 6, 11, 32, 110, 235, 369,
                            640, 1005, 1436, 2063, 3057, 4618, 6444, 9822, 15468,
                            20434,
                            24126, 27387, 29459, 31056, 31982, 32040, 31233, 29224,
                            27342, 26662, 26956, 27912, 28999, 28965, 27826, 25579,
                            25722, 24826,
                            24605, 24304, 23464, 23708, 24099, 24357, 24237, 24401,
                            24344, 23586, 22380, 21004, 17287, 14747, 13076, 12555,
                            12144, 11009,
                            10950, 10871, 10824, 10577, 10527, 10475, 10421, 10358,
                            10295, 10104, 9914, 9620, 9326, 5113, 5113, 4954, 4804,
                            4761, 4717,
                            4368, 4018
                        ]
                    }]
                });
            });

            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                $('#chrt4').highcharts({
                    chart: {
                        type: 'area',
                        backgroundColor: "#FFFFFF",
                        borderColor: "#335cad"
                    },
                    legend: {
                        enabled: false
                    },
                    title: {
                        style: {
                            display: 'none'
                        }
                    },
                    xAxis: {
                        categories: ['1', '2', '3', '4', '5', '6', '7']
                    },
                    credits: {
                        enabled: false
                    },
                    tooltip: {
                        pointFormat: '{series.name} produced <b>{point.y:,.0f}</b><br/>warheads in {point.x}'
                    },
                    plotOptions: {
                        area: {
                            categories: ['1', '2', '3', '4', '5', '6', '7'],
                            marker: {
                                enabled: false,
                                symbol: 'circle',
                                radius: 2,
                                states: {
                                    hover: {
                                        enabled: true
                                    }
                                }
                            }
                        }
                    },
                    series: [{
                        data: [null, null, null, null, null, 6, 11, 32, 110, 235, 369,
                            640, 1005, 1436, 2063, 3057, 4618, 6444, 9822, 15468,
                            20434,
                            24126, 27387, 29459, 31056, 31982, 32040, 31233, 29224,
                            27342, 26662, 26956, 27912, 28999, 28965, 27826, 25579,
                            25722, 24826,
                            24605, 24304, 23464, 23708, 24099, 24357, 24237, 24401,
                            24344, 23586, 22380, 21004, 17287, 14747, 13076, 12555,
                            12144, 11009,
                            10950, 10871, 10824, 10577, 10527, 10475, 10421, 10358,
                            10295, 10104, 9914, 9620, 9326, 5113, 5113, 4954, 4804,
                            4761, 4717,
                            4368, 4018
                        ]
                    }, {
                        data: [null, null, null, null, null, null, null, null, null,
                            null, 5, 25, 50, 120, 150, 200, 426, 660, 869, 1060,
                            1605,
                            2471, 3322, 4238, 5221, 6129, 7089, 8339, 9399, 10538,
                            11643, 13092, 14478, 15915, 17385, 19055, 21205, 23044,
                            25393, 27935,
                            30062, 32049, 33952, 35804, 37431, 39197, 45000, 43000,
                            41000, 39000, 37000, 35000, 33000, 31000, 29000, 27000,
                            25000, 24000,
                            23000, 22000, 21000, 20000, 19000, 18000, 18000, 17000,
                            16000, 15537, 14162, 12787, 12600, 11400, 5500, 4512,
                            4502, 4502,
                            4500, 4500
                        ]
                    }]
                });
            });

            Highcharts.chart('chart5', {
                title: {
                    style: {
                        display: 'none'
                    }
                },
                xAxis: {
                    categories: ['Apples', 'Oranges', 'Pears',
                        'Bananas', 'Plums'
                    ]
                },
                labels: {
                    items: [{
                        style: {
                            left: '50px',
                            top: '18px',
                            color: (Highcharts.theme &&
                                Highcharts.theme.textColor) || 'black'
                        }
                    }]
                },
                series: [{
                    type: 'column',
                    name: 'Jane',
                    data: [3, 2, 1, 3, 4]
                }, {
                    type: 'column',
                    name: 'John',
                    data: [2, 3, 5, 7, 6]
                }, {
                    type: 'column',
                    name: 'Joe',
                    data: [4, 3, 3, 9, 0]
                }, {
                    type: 'spline',
                    name: 'Average',
                    data: [3, 2.67, 3, 6.33, 3.33],
                    marker: {
                        lineWidth: 2,
                        lineColor: Highcharts.getOptions().colors[3],
                        fillColor: 'white'
                    }
                }, {
                    type: 'pie',
                    name: 'Total consumption',
                    data: [{
                        name: 'Jane',
                        y: 13,
                        color: Highcharts.getOptions().colors[0]
                    }, {
                        name: 'John',
                        y: 23,
                        color: Highcharts.getOptions().colors[1]
                    }, {
                        name: 'Joe',
                        y: 19,
                        color: Highcharts.getOptions().colors[2]
                    }],
                    center: [100, 80],
                    size: 100,
                    showInLegend: false,
                    dataLabels: {
                        enabled: false
                    }
                }]
            });

            //===== ToolTip =====//
            if ($.isFunction($.fn.tooltip)) {
                $('[data-toggle="tooltip"]').tooltip();
            }
        });
    </script>
</body>

</html>
