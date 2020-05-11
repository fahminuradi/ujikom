<div class="col-md-15">
<div class="form-group">
    {!! Form::label('tahun','Tahun Ajaran:') !!}
    <select class="selectpicker form-control" data-live-search="true"
            title="" name="id_spp">
        @foreach ($spps as $spp)
            <option data-subtext="{{ $spp->tahun }}" value="{{ $spp->id  }}">{{ $spp->tahun }}</option>
        @endforeach
    </select>
</div>    
<div class="form-group {{ $errors->has('nisn') ? 'has-error' : '' }}">
    {!! Form::label('NISN') !!}
    {!! Form::text('nisn', $student->nisn, ['class' => 'form-control']) !!}
    <span class="text-danger">{{ $errors->has('nisn') ? $errors->first('nisn') : '' }}</span>
</div>

<div class="form-group {{ $errors->has('nis') ? 'has-error' : '' }}">
    {!! Form::label('NIS') !!}
    {!! Form::text('nis', $student->nis, ['class' => 'form-control']) !!}
    <span class="text-danger">{{ $errors->has('nis')  ? $errors->first('nis') : ''}}</span>
</div>

<div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
    {!! Form::label('Nama Lengkap') !!}
    {!! Form::text('nama', $student->nama, ['class' => 'form-control']) !!}
    <span class="text-danger">{{ $errors->has('nama')  ? $errors->first('nama') : ''}}</span>
</div>

<div class="form-group">
    {!! Form::label('grade','Kelas:') !!}
    <select class="selectpicker form-control" data-live-search="true"
            title="" name="grade_id">
        @foreach ($grades as $grade)
            <option data-subtext="{{ $grade->nama_kelas }}" value="{{ $grade->id  }}">{{ $grade->nama_kelas }}</option>
        @endforeach
    </select>
</div>      

<div class="form-group {{ $errors->has('alamat') ? 'has-error' : '' }}">
    {!! Form::label('Alamat') !!}
    {!! Form::text('alamat', $student->alamat,['class' => 'form-control']) !!}
    <span class="text-danger">{{ $errors->has('alamat') ? $errors->first('alamat') : '' }}</span>
</div>
<div class="form-group {{ $errors->has('no_telp') ? 'has-error' : '' }}">
    {!! Form::label('Nomor Telepon') !!}
    {!! Form::text('no_telp', $student->no_telp, ['class' => 'form-control']) !!}
    <span class="text-danger">{{ $errors->has('no_telp')  ? $errors->first('no_telp') : ''}}</span>
</div>
</div>