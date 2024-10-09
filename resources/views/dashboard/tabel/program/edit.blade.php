@extends('dashboard.layouts.app')

@section('title', 'Dashboard Admin')

@section('contents')
    
<form action="{{ route('dashboard.tabel.program.update', $data->id) }}" method="post">
    @csrf
    @method('PUT')
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="bidang_id">Bidang Program</label>
                <select class="form-control" id="bidang_id" name="bidang_id">
                @foreach ($bidangs as $bidang)
                @if (old('bidang_id') === $bidang->id)
                <option value="{{ $bidang->id }}" selected>{{ $bidang->bidang_program }}</option>  
                @else
                <option value="{{ $bidang->id }}">{{ $bidang->bidang_program }}</option>
                @endif
                @endforeach
            </select>
            </div>
            <div class="form-group col-md-4">
                <label for="program" class="form_control">Program</label>
                <input type="text" name="program" class="form-control @error('program') is-invalid @enderror" id="program" value="{{ $data->program }}">
                @error('program')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <fieldset class="form-group row">
                    <label for="status" class="col-form-label col-sm-3 float-sm-left pt-4">Status</label>
                    @error('status')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                    {{-- <legend class="col-form-label col-sm-3 float-sm-left pt-4">Status</legend> --}}
                    <div class="col-sm-10">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="status" value="Rencana">
                        <label class="form-check-label" for="status">
                            Rencana
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="status" value="Sedang Berjalan">
                        <label class="form-check-label" for="status">
                            Sedang Berjalan
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="status" value="Selesai">
                        <label class="form-check-label" for="status">
                            Selesai
                        </label>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="dimulai" class="form-label">Dimulai</label>
                <div class="input-group date col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <input type="date" name="dimulai" class="form-control" id="dimulai" value="{{  $data->dimulai }}"
                    name="dimulai"required>
                </div>
            </div>
            <div class="form-group col-md-4">
                <label for="selesai" class="form-label">Selesai</label>
                <div class="input-group date col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <input type="date" class="form-control" id="selesai" value="{{  $data->selesai }}"
                            name="selesai" required>
                </div>
            </div>
        </div>


        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="lokasi" class="form-label">Lokasi</label>
                <input type="text" name="lokasi" class="form-control @error('program') is-invalid @enderror" id="lokasi" value="{{ $data->lokasi }}">
                @error('lokasi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="luas_area" class="form-label">Luas area</label><br/>
                <input type="text" name="luas_area" class="form-control" id="luas_area" value="{{ $data->luas_area }}">
                <div id="passwordHelpBlock" class="form-text">
                    <small class="col-md-4">Luas area bisa dikosongi</small>
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="jumlah_anggaran" class="form-label">Jumlah Anggaran</label>
                <input type="text" name="jumlah_anggaran" class="form-control @error('jumlah_anggaran') is-invalid @enderror" id="jumlah_anggaran" value="{{ $data->jumlah_anggaran }}">
                @error('jumlah_anaggaran')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-7">
                <label for="keterangan" class="form-label">Keterangan</label>
                @error('keterangan')
                <p class="text-danger">{{ $message }}</p>
                @enderror
                    <input id="keterangan" type="hidden" name="keterangan"  value="{{ old('keterangan', $data->keterangan) }}">
                    <trix-editor input="keterangan"></trix-editor>
            </div>
        </div>
    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
</form>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr("input[type=datetime-local]");
</script>
@endpush

@endsection