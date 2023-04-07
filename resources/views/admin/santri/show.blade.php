@extends('admin.parent')

@section('content')
    <label for="" class="form-label">Name Santri</label>
    <input type="text" class="form-control" value="{{ $santri->name }}" readonly>

    <label for="" class="form-label">Phone Santri</label>
    <input type="text" class="form-control" value="{{ $santri->phone }}" readonly>

    <label for="" class="form-label mt-3" readonly>Address Santri</label>
    <textarea class="form-control" cols="30" rows="10">
    {!! $santri->address !!}
    </textarea>

    <label for="" class="form-label">City Santri</label>
    <input type="text" class="form-control" value="{{ $santri->city }}" readonly>

    <label for="" class="form-label">Date Siswa</label>
    <input type="date" class="form-control" value="{{ $santri->date }}" readonly>

    <a href="{{ route('santri.index') }}" class="btn btn-info mt-3">
        Back
    </a>
@endsection
