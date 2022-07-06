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
                                    <input type="datetime-local" class="form-control" name="start_time" id="picker">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="end_time">End time</label>
                                    <input type="datetime-local" class="form-control" name="end_time" id="picker">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="invoice">Invoice</label>
                                    <input type="file" class="form-control" id="invoice" name="invoice"
                                        placeholder="Upload here" @if (Auth::user()->instansi->code == 'uns')  @endif>
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

@push('script')
    <script></script>
@endpush
