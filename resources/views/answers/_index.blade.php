@if($answersCount>0)
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h2>{{ $answersCount." ".Str::plural('Answer',$question->answers_count) }}</h2>
                    </div>
                    <hr>

                    @include('layouts._message')

                    @foreach ($answers as $answer)

                        @include('answers._answer')

                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endif
