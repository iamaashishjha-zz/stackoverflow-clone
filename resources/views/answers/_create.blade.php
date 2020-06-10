<div class="row mt-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h3>Your Answer</h3>
                </div>
                <hr>
                <form action="{{ route('question.answers.store', $question->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <textarea name="body" id="" cols="30" rows="7" class="form-control {{ $errors->has('body')?'is-invalid':'' }}"></textarea>
                        @if($errors->has('body'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('body') }}</strong>
                            </div>
                        @endif

                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-outline-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
