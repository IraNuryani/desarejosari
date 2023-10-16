@extends('dashboard.layouts.app')

@section('title', 'Dashboard Admin')

@section('contents')
    
<form>
    <div class="form-row">
        <div class="form-group col-md-4">
          <label for="bidang_program">Bidang Program</label>
          <select class="form-control" id="bidang_program">
            @foreach ($bidangs as $bidang)
                <option value="{{ $bidang->id }}">{{ $bidang->bidang_program }}</option>
            @endforeach
        </select>
        </div>
        <div class="form-group col-md-4">
          <label for="program" class="form_control">Program</label>
          <input type="text" name="program" class="form-control" id="program">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label form="dimulai" class="form-label">Dimulai</label>
            <div class="input-group date col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <input type="date" class="form-control pull-right" id="datepicker" 
                        name="dimulai" required>
            </div>
        </div>
        <div class="form-group col-md-4">
            <label form="selesai" class="form-label">Selesai</label>
            <div class="input-group date col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <input type="date" class="form-control pull-right" id="datepicker" 
                        name="selesai" required>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="exampleInputPassword1">Status</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <label form="lokasi" class="form-control">Lokasi</label>
            <input type="text" name="lokasi" class="form-control" id="lokasi">
        </div>
        <div class="form-group col-md-4">
            <label form="luas_area">Luas area</label>
            <input type="text" name="luas_area" class="form-control" id="luas_area">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <label form="jumlah_anggaran">Jumlah Anggaran</label>
            <input type="text" name="jumlah_anggaran" class="form-control" id="jumlah_anggaran">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-7">
            <label form="keterangan">Keterangan</label>
            <textarea name="keterangan" class="form-control" id="keterangan" rows="7"></textarea>
        </div>
    </div>
    


    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection