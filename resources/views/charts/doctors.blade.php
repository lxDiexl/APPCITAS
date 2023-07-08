@extends('layouts.panel')
<style>
    .searchbar {
        margin-bottom: auto;
        margin-top: auto;
        height: 60px;
        background-color: #353434;
        border-radius: 30px;
        padding: 10px;
    }

    .search_input {
        color: white;
        border: 0;
        outline: 0;
        background: none;
        width: 0;
        caret-color: transparent;
        line-height: 40px;
        transition: width 0.4s linear;
    }

    .searchbar:hover>.search_input {
        padding: 0 10px;
        width: 450px;

        transition: width 0.4s linear;
    }

    .searchbar:hover>.search_icon {
        background: white;

    }

    .search_icon {
        height: 40px;
        width: 40px;
        float: right;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        color: black;
        text-decoration: none;
    }

    ::placeholder {
        color: white;
    }

    .button-85 {
        padding: 0.6em 2em;
        border: none;
        outline: none;
        color: rgb(255, 255, 255);
        background: #111;
        cursor: pointer;
        position: relative;
        z-index: 0;
        border-radius: 10px;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
    }

    .button-85:before {
        content: "";
        background: linear-gradient(45deg,
                #ff0000,
                #ff7300,
                #fffb00,
                #48ff00,
                #00ffd5,
                #002bff,
                #7a00ff,
                #ff00c8,
                #ff0000);
        position: absolute;
        top: -2px;
        left: -2px;
        background-size: 400%;
        z-index: -1;
        filter: blur(5px);
        -webkit-filter: blur(5px);
        width: calc(100% + 4px);
        height: calc(100% + 4px);
        animation: glowing-button-85 20s linear infinite;
        transition: opacity 0.3s ease-in-out;
        border-radius: 10px;
    }

    @keyframes glowing-button-85 {
        0% {
            background-position: 0 0;
        }

        50% {
            background-position: 400% 0;
        }

        100% {
            background-position: 0 0;
        }
    }

    .button-85:after {
        z-index: -1;
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        background: #222;
        left: 0;
        top: 0;
        border-radius: 10px;
    }

    .shadow__btn {
        padding: 10px 20px;
        border: none;
        font-size: 17px;
        color: #fff;
        border-radius: 7px;
        letter-spacing: 4px;
        font-weight: 700;
        text-transform: uppercase;
        transition: 0.5s;
        transition-property: box-shadow;
    }

    .shadow__btn {
        background: rgb(191, 42, 42);
        box-shadow: 0 0 25px rgb(191, 42, 42);
    }

    .shadow__btn:hover {
        box-shadow: 0 0 5px rgb(191, 42, 42),
            0 0 25px rgb(191, 42, 42),
            0 0 50px rgb(191, 42, 42),
            0 0 100px rgb(191, 42, 42);
    }

    .shadow__btn2 {
        padding: 12px 20px;
        border: none;
        font-size: 17px;
        color: #fff;
        border-radius: 7px;
        letter-spacing: 4px;
        font-weight: 700;
        text-transform: uppercase;
        transition: 0.5s;
        transition-property: box-shadow;
    }

    .shadow__btn2 {
        background: rgb(76, 109, 142);
        box-shadow: 0 0 25px rgb(76, 109, 142);
    }

    .shadow__btn2:hover {
        box-shadow: 0 0 5px rgb(76, 109, 142),
            0 0 25px rgb(76, 109, 142),
            0 0 50px rgb(76, 109, 142),
            0 0 100px rgb(76, 109, 142);
    }

    [type="date"] {
        background: #fff url(https://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/calendar_2.png) 97% 50% no-repeat;
    }

    [type="date"]::-webkit-inner-spin-button {
        display: none;
    }

    [type="date"]::-webkit-calendar-picker-indicator {
        opacity: 0;
    }

    /* custom styles */

    label {
        display: block;
    }

    input {
        border: 1px solid #c4c4c4;
        border-radius: 5px;
        background-color: #fff;
        padding: 3px 5px;
        box-shadow: inset 0 3px 6px rgba(0, 0, 0, 0.1);
        width: 50%;
    }
</style>
@section('content')


    <div class="row mb-4">
        <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-lg-6 col-7">
                            <h2 style="letter-spacing: 3px;">Reporte: Desempeño Medico</h2>
                        </div>
                    </div>

                </div>

                <script>
                    $(function() {
                        $(".datepicker").datepicker();
                    });
                </script>
                <div class="card-body">


                    <div class="input-daterange datepicker row align-items-center" data-data-format="yyyy-mm-dd">
                        <div class="col">
                            <div class="form-group">
                                <div class="input-group">
                                    <h3 style="padding-right: 5%">Fecha inicio </h3>
                                    <input placeholder="Fecha de inicio" type="date" id="startDate"
                                        value="{{ $start }}" style="color:black;">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <div class="input-group">
                                    <h3 style="padding-right: 5%">Fecha fin </h3>
                                    <input placeholder="Fecha fin" type="date" id="endDate" value="{{ $end }}"
                                        style="color:black;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div id="container">

                    </div>
                </div>



            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script src="/assets-old/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="{{asset('js/charts/doctors.js')}}" ></script>
@endsection
