<?php
namespace Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Topic extends Eloquent {
    protected $fillable = array( 'user', 'topic', 'no_posts' );
    protected $table = 'topic';

    public function posts() {
        return $this->hasMany( 'Models\Post' )->orderBy( 'id', 'desc' );
    }

}
?>