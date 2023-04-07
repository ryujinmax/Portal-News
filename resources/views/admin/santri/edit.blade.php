@extends('admin.parent')

@section('content')
    <form action="{{ route('santri.update', $santri->id) }}" method="post">
        @csrf
        @method('PUT')

        <label for="" class="form-label">Name santri</label>
        <input type="text" class="form-control" name="name" value="{{ $santri->name }}">

        <label for="" class="form-label">Phone santri</label>
        <input type="number" class="form-control" name="phone" value="{{ $santri->phone }}">

        <label for="" class="form-label">Address santri</label>
        <textarea class="form-control" id="" cols="30" rows="10" name="address">{{ $santri->address }}</textarea>

        <label for="" class="form-label">City Santri</label>
        <input type="text" class="form-control" name="city" value="{{ $santri->city }}">

        <label for="" class="form-label">Date Siswa</label>
        <input type="date" class="form-control" name="date" value="{{ $santri->date }}">

        <button type="submit" class="btn btn-primary mt-3">Update Santri</button>

    </form>
@endsection
