@can('accept', $model)
    <a href="" title="Mark as favourite answer (Click again to undo)" class="{{ $model->status }} mt-2 favorited"
        onclick="event.preventDefault(); document.getElementById('accept-answer-{{ $model->id }}').submit()">
            <i class="fas fa-check fa-2x"></i>
    </a>
    <form action="{{ route('answers.accept', $model->id) }}" method="post" id="accept-answer-{{ $model->id }}" style="display: none;">
        @csrf
    </form>
@else
    @if($model->is_best)
        <a href="" title="This answer was marked as best answer." class="{{ $model->status }} mt-2 favorited">
            <i class="fas fa-check fa-2x"></i>
        </a>
    @endif
@endcan
