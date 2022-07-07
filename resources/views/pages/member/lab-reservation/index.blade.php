@extends('layouts.dashboard')
@section('lab-reservation-active', 'active')

@section('title', 'Lab Reservation')

@section('content')
    <div class="main-content">
        <section class="section">
            <h1 class="reservation-title">Lab Reservation</h1>
            <div class="row">
                <div class="col-12 reservation-lay">
                    <form class="reservation-data-form" action="{{ route('member.lab-reservation.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="labs_id">Laboratory</label>
                                    <select class="form-control" id="laboratory" name="labs_id" id="labs_id">
                                        @foreach ($labs as $lab)
                                            <option value="{{ $lab->id }}">{{ $lab->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="start_time">Start time</label>
                                    <input type="text" class="form-control" name="start_time" id="datepicker">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="end_time">End time</label>
                                    <input type="text" class="form-control" name="end_time" id="datepicker2">
                                </div>
                            </div>

                            <div class="col-lg-6" @if (Auth::user()->instansi?->code == 'uns') hidden @endif>
                                <div class="form-group">
                                    <label for="invoice">Invoice</label>
                                    <input type="file" class="form-control" id="invoice" name="invoice"
                                        placeholder="Upload here">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="btn-lay">
                                    <button type="submit" class="btn btn-primary">Pinjam Ruang Sekarang</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('addon/datepicker/jquery.datetimepicker.css') }}" />
@endpush

@push('script')
    <script src="{{ asset('addon/datepicker/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('addon/datepicker/jquery.datetimepicker.full.js') }}"></script>
    <script>
        jQuery.datetimepicker.setLocale('en');
        $('#datepicker').datetimepicker({
            step: 30,
            minDate: '-1969/12/31',
            minTime: '07:00' || true,
            maxTime: '21:00',
            allowTimes: [],
        });
        $('#datepicker2').datetimepicker({
            step: 30,
            minDate: '-1969/12/31',
            minTime: '07:00' || true,
            maxTime: '21:00',
        });
    </script>
@endpush
