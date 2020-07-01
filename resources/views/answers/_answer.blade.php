<answer :answer="{{ $answer }}" inline-template>

    <div class="media post">
        @include('shared._vote', ['model' => $answer])

        <div class="media-body">
            <form v-if="editing" @submit.prevent="update">

                <div class="form-group">
                    <!--<input type="hidden" name="_token" :value="csrf">-->
                    <textarea rows="10" class="form-control" v-model="body" required></textarea>
                </div>

                <button class="btn btn-outline-success" :disabled="isInvalid">Update</button>
                <button class="btn btn-outline-secondary" @click="cancel" type="button">Cancel</button>

            </form>
            <div v-else>
                <div v-html="bodyHtml"></div>
                <div class="row">
                    <div class="col-4">
                        <div class="ml-auto">
                            @can('update', $answer)
                                <a @click.prevent="edit" class="btn btn-sm btn-outline-info">Edit</a>
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

                        <user-info :model="{{ $answer }}" label="Asked"></user-info>

                    </div>
                </div>
            </div>

        </div>
    </div>

</answer>
