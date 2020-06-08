<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function question(){
        return $this->belongsTo(Question::class);
    }

    public function user(){
        return $this->belongsTo(Answer::class);
    }

    public function getBodyHtmlAttribute(){
        return \Parsedown::instance()->text('body');
    }
}
