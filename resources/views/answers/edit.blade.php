@extends('layouts.app')
@section('content')
<div class="row mt-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h1>Editing answer for question: <strong>{{ $question->title }}</strong></h1>
                </div>
                <hr>
                <form action="{{ route('question.answers.update', [$question->id, $answer->id] ) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <textarea name="body" id="" cols="30" rows="7" class="form-control {{ $errors->has('body')?'is-invalid':'' }}">{{ old('body', $answer->body) }}</textarea>
                        @if($errors->has('body'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('body') }}</strong>
                            </div>
                        @endif

                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-outline-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

