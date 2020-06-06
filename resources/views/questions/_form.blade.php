@csrf
<div class="form-group">
    <label for="question-title">Question Title</label>
    <input type="text" name="title" id="question-title" class="form-control {{ $errors->has('title')?'is-invalid':'' }}" value="{{ old('title',$question->title) }}">
    @if($errors->has('title'))
        <div class="invalid-feedback">
            <strong>
                {{ $errors->first('title') }}
            </strong>
        </div>
    @endif
</div>
<div class="form-group">
    <label for="question-body">Question Body</label>
    <textarea name="body" id="queestion-body" cols="30" rows="10" class="form-control {{ $errors->has('body')?'is-invalid':'' }}">{{ old('body',$question->body) }}</textarea>
    @if($errors->has('body'))
        <div class="invalid-feedback">
            <strong>
                {{ $errors->first('body') }}
            </strong>
        </div>
    @endif
</div>
<div class="form-group">
    <button type="submit" class="btn btn-outline-primary btn-lg">{{ $buttonText }}</button>
</div>
