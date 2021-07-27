@extends('layouts.main')
@section('main-content')
    <section id="main-content">
        <section class="wrapper">
            <div class="agil-info-calendar">
                <!-- calendar -->
                <div class="col-md-6 agile-calendar">
                    <div class="calendar-widget">
                        <div class="panel-heading ui-sortable-handle">
                            <span class="panel-icon">
                                <i class="fa fa-calendar-o"></i>
                            </span>
                            <span class="panel-title">{{ __('messages.calendar') }}</span>
                        </div>
                        <!-- grids -->
                        <div class="agile-calendar-grid">
                            <div class="page">

                                <div class="w3l-calendar-left">
                                    <div class="calendar-heading">

                                    </div>
                                    <div class="monthly" id="mycalendar"></div>
                                </div>

                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //calendar -->
        </section>
    </section>
@endsection
