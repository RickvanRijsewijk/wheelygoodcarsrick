@extends('layouts.app')

@section('content')
    <style>
        .centered {
            background-image: url('images/kentekenplaat.png');
            background-position: 5px center;
            background-repeat: no-repeat;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .kentekencheck-input #kenteken {
            text-align: center;
            font-size: 28px;
            width: 225px;
        }

        input[type=text] {
            background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAvCAMAAADdAborAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAABCUExURSVX19fd9S1UsihUwSVUy////zNVpau57CRV1Edcg4N9SK+ZLGVrYHBwUvT2/VRicEVr232U49KwGZqMPNm1FcjQ8koJI5cAAACiSURBVCjPzZBJFsQgCEQrSFScMt//qq15rR1d9yIsfNSnQBT4X9hOWEhU4KaD4+CtHLqS6MAM8V+LlJZ7ipWS0Bmqk/ZYCrq1Wk351M8LS83Hh94FWOQHOBSL+oE7Jd8s5Jcy2jVQUysL57V0pFpxB8SRnG2aUsiPU8yPjTrx1phNPozBZCpI2wBMWnuA6RrAmrYeYEsDwDUPYE0ZzDle/D0fwJgE4zMjXtEAAAAASUVORK5CYII=) left no-repeat #ffce00;
            height: 50px;
            padding-left: 100px;
            width: 300px;
            border-radius: 5px;
            border: 2px solid black;
        }
    </style>
    <div class="form-group mt-5 d-flex justify-content-center align-middle">
        <form action="{{ route('cars.offer.step1.process') }}" method="POST">
            @csrf
            <div class="kenteken-holder">
                <div class="kenteken-input form-group">
                    <input type="text" id="kenteken" class="form-control"
                        style="--bs-focus-ring-color: rgba(var(--bs-success-rgb), 0)" name="kenteken" placeholder="7-ZSB-84"
                        required>
                </div>
                <div class="form-group">
                    <input type="submit" value="Volgende" class="btn btn-primary mt-2">
                </div>
            </div>
        </form>
    </div>
@endsection
