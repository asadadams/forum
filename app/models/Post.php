<?php
namespace Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Post extends Eloquent {
    protected $fillable = array( 'user', 'description', 'topic_id' );
    protected $table = 'post';

    public function topic() {
        return $this->belongsTo( 'Models\Topic' );
    }
}
?>