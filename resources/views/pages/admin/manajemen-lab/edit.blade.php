@extends('layouts.dashboard')
@section('manajemen-lab-active', 'active')
@section('title', 'Edit Lab')

@section('content')
    <div class="main-wrapper admin-laboratory">
        <div class="main-content">
            <section class="section">
                <div class="add-lab-layout">
                    <div class="add-lab-header">
                        <h2>Edit Laboratory</h2>
                    </div>
                    <form action="{{ route('admin.manajemen-lab.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}
                        <input type="text" name="id" value="{{ $lab->id }}" hidden>
                        <div class="row add-lab-form">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Masukkan nama lab" value="{{ $lab->name }}" />
                                </div>
                                <div class="mb-3">
                                    <label for="code" class="form-label">Code</label>
                                    <input type="text" class="form-control" id="code" name="code"
                                        value="{{ $lab->code }}" placeholder="Masukkan kode lab" />
                                </div>
                                <div class="mb-3">
                                    <label for="path_file" class="form-label">Cover Image</label>
                                    <input type="file" class="form-control" id="path_file" name="path_file"
                                        value="{{ $lab->path_file }}" />
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea type="text" class="form-control" style="height: 200px" id="description" name="description"
                                        placeholder="Masukkan diskripsi lab">{{ $lab->description }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="price" class="form-label">Price</label>
                                    <input type="text" class="form-control" id="price" name="price"
                                        value="{{ $lab->price }}" placeholder="Masukkan nominal harga lab" />
                                </div>
                                <div class="mb-3">
                                    <label for="open_hour" class="form-label">Open Hour</label>
                                    <input type="time" class="form-control" id="open_hour" name="open_hour"
                                        placeholder="Masukkan waktu awal buka" />
                                </div>
                                <div class="mb-3">
                                    <label for="close_hour" class="form-label">Close Hour</label>
                                    <input type="time" class="form-control" id="close_hour" name="close_hour"
                                        placeholder="Masukkan waktu awal buka" />
                                </div>
                            </div>
                            {{-- <div class="row">
                                <div class="col-6">
                                    <label for="facility" class="form-label">Facility</label>
                                    <input type="text" class="form-control" id="facility" placeholder="10 Computers" />
                                </div>
                                <div class="col-6">
                                    <label for="img" class="form-label">Add Image</label>
                                    <input type="text" class="form-control" id="img" placeholder="computers.png" />
                                </div>
                                <div class="col-6">
                                    <label for="facility" class="form-label">Facility</label>
                                    <input type="text" class="form-control" id="facility" placeholder="5 Camera" />
                                </div>
                                <div class="col-6">
                                    <label for="img" class="form-label">Add Image</label>
                                    <input type="text" class="form-control" id="img" placeholder="camera.png" />
                                </div>
                            </div> --}}
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
        </div>
    </div>
@endsection
