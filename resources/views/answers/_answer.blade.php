<div class="media post">
    @include('shared._vote', ['model' => $answer])

    <div class="media-body">
        {!! $answer->body_html !!}
        <div class="row">
            <div class="col-4">
                <div class="ml-auto">
                    @can('update', $answer)
                        <a href="{{ route('question.answers.edit', [$question->id,$answer->id]) }}" class="btn btn-sm btn-outline-info">Edit</a>
                    @endcan
                    @can('delete', $answer)
                        <form class="form-delete" action="{{ route('question.answers.destroy', [$question->id,$answer->id]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    @endcan
                </div>
            </div>
            <div class="col-4"></div>
            <div class="col-4">
                @include('shared._author', ['model' => $answer, 'label'=> 'Answered'])
            </div>
        </div>

    </div>
</div>
