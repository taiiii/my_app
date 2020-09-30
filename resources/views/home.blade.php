@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">今日も積み重ねよう</div>

                <div class="card-body">
                    @if (session('successMessage'))
                        <div class="alert alert-success" role="alert">
                            {{ session('successMessage') }}
                        </div>
                    @endif

                    <form action="{{ route('timer.start') }}" method="post" class="form-inline">
                        @csrf
                        <label class="mr-2">Title</label>
                        <input name="title" type="text" value="" class="form-control mr-2" />
                        <button type="submit" class="btn btn-info">Start</button>
                    </form>
                    <div class="mt-4">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Title</th>
                                    <th>Start</th>
                                    <th>Stop</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($timers as $timer)
                                    <tr>
                                        <td>{{ $timer->title }}</td>
                                        <td>{{ $timer->started_at->format('Y/m/d H:i') }}</td>
                                        <td>
                                            @if ($timer->ended_at)
                                                {{ $timer->ended_at->format('Y/m/d H:i') }}
                                            @else
                                                <form action="{{ route('timer.stop', [$timer]) }}" method="post">
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger">Stop</button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
