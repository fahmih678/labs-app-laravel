@extends('layouts.dashboard')
@section('manajemen-lab-active', 'active')

@section('title', 'Manajemen Lab')

@section('content')
    <div class="main-wrapper admin-laboratory">
        <div class="main-content">
            <section class="section">
                <div class="row">
                    <div class="col">
                        <div class="laboratory-header">
                            <h1 class="laboratory-title">Manajemen Lab</h1>
                            <a href="{{ route('admin.manajemen-lab.create') }}" class="btn btn-primary">Add New</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="laboratory-content">
                            <table class="table table-bordered laboratory-table">
                                <thead>
                                    <tr>
                                        <th scope="col">Laboratory Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Facility</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($labs as $lab)
                                        <tr>
                                            <td><b>{{ $lab->name }}</b></td>
                                            <td class="laboratory-des">{{ $lab->description }}
                                            </td>
                                            <td>
                                                {{-- {{dd($lab->facilities)}} --}}
                                                
                                                <ul>
                                                @if ($lab->facilities == null )   
                                               
                                                    Tidak ada Facilitas

                                                @else
                                                        @foreach ($lab->facilities as $facility)
                                                            
                                                        <li>{{$facility->name}} : {{$facility->total}}</li>
                                                        
                                                        @endforeach
                                                    
                                                @endif
                                                <a href="{{ route('admin.manajemen-lab.facility.create', ['slug'=>$lab->slug]) }}"
                                                    class="btn btn-success">
                                                    <img src="{{ asset('img/edit.png') }}" alt="">
                                                </a>
                                            </ul>
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.manajemen-lab.edit', ['slug' => $lab->slug]) }}"
                                                    class="btn btn-success">
                                                    <img src="{{ asset('img/edit.png') }}" alt="">
                                                </a>
                                                <form
                                                    action="{{ route('admin.manajemen-lab.destroy', ['slug' => $lab->slug]) }}"
                                                    method="post">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit" class="btn btn-danger">
                                                        <img src="{{ asset('img/delete.png') }}" alt="">
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
