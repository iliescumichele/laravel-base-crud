@extends('layouts.main')

@section('content')
    
    <main>
        <div class="container d-flex justify-content-center align-items-center sc-container flex-column py-5">
            <h1 class="my-5">CHECK OUR COMICS</h1>
    
            <table class="table">
    
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">TITLE</th>
                    <th scope="col">TYPE</th>
                    <th scope="col">BUTTONS</th>
                  </tr>
                </thead>
    
                <tbody>
    
                    @foreach ($comics as $item)
                        <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->type }}</td>
                            <td>
                                <a class="btn btn-success" href="{{route('comics.show', $item)}}">Show</a>
                                <a class="btn btn-primary" href="{{route('comics.edit', $item)}}">Edit</a>
                            </td>
                        </tr>
                    @endforeach
    
                </tbody>
              </table>
        </div>
    </main>

@endsection