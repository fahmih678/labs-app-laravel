@extends('layouts.dashboard')
@section('manajemen-lab-active', 'active')
@section('title', 'Create Lab')

@section('content')
    <div class="main-wrapper admin-laboratory">
        <div class="main-content">
            <section class="section mb-4">
                <div class="add-lab-layout">
                    <div class="add-lab-header">
                        <h2>Add Facility</h2>
                    </div>
                    <form action="{{ route('admin.manajemen-lab.facility.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="text" value="{{$lab->id}}" name="labs_id" hidden>
                        <input type="text" value="{{$lab->slug}}" name="labs_slug" hidden>
                        <div class="row add-lab-form">
                            <div class="row">
                                <div class="col-6">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Komputer" />
                                </div>
                                <div class="col-6">
                                    <label for="image" class="form-label">Add Image</label>
                                    <input type="file" class="form-control" id="image" name="image" placeholder="computers.png" />
                                </div>
                                <div class="col-6">
                                    <label for="description" class="form-label">Description</label>
                                    <input type="text" class="form-control" id="description" name="description" placeholder="masukkan deskripsi fasilitas" />
                                </div>
                                <div class="col-6">
                                    <label for="total" class="form-label">Total</label>
                                    <input type="text" class="form-control" id="total" name="total" placeholder="jumlah fasilitas : 10 buah" />
                                </div>
                            </div>
                            {{-- <div class="row mt-4">
                                <div class="col-4">
                                    <button class="btn btn-primary">+ Add Facility</button>
                                </div>
                            </div> --}}
                            <div class="row mt-4">
                                <div class="col-4">
                                    <button class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </section>
            <section class="section">
                <div class="row">
                    <div class="col">
                        <div class="laboratory-content">
                            <table class="table table-bordered laboratory-table">
                                <thead>
                                    <tr>
                                        <th scope="col">Facility Name</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($facilities == null)   
                                        <tr>Tidak ada fasilitas terdata</tr>
                                    @else
                                    {{-- {{dd($facilities)}} --}}
                                        @foreach ($facilities as $facility)

                                            <tr>
                                                <td>{{ $facility->name }}</td>
                                                <td>
                                                    {{$facility->total}}
                                                </td>
                                                <td class="laboratory-des">{{ $facility->description }}
                                                </td>
                                                
                                                {{-- <td>
                                                    <a href="{{ route('admin.manajemen-lab.facility.edit', ['slug' => $facility->slug]) }}"
                                                        class="btn btn-success">
                                                        <img src="{{ asset('img/edit.png') }}" alt="">
                                                    </a>
                                                    <form
                                                        action="{{ route('admin.manajemen-lab.facility.destroy', ['slug' => $facility->slug]) }}"
                                                        method="post">
                                                        @csrf
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit" class="btn btn-danger">
                                                            <img src="{{ asset('img/delete.png') }}" alt="">
                                                        </button>
                                                    </form>
                                                </td> --}}
                                            </tr>
                                        @endforeach 
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
