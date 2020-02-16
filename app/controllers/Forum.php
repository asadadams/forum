<?php

class Forum extends Controller {
    protected $topic;
    protected $post;

    public function __construct() {
        $this->topic = $this->model( 'Topic' );
        $this->post = $this->model( 'Post' );
    }

    public function index() {
        $topic = $this->topic->find( $_GET['id'] );
        $this->view( 'forum', ['topic'=>$topic] );
    }

    public function post() {
        if ( isset( $_POST['userEmail'] ) && isset( $_POST['post'] ) ) {
            $user_email =  trim( strip_tags( $_POST['userEmail'] ) );
            $post =  trim( strip_tags( $_POST['post'] ) );

            if ( !empty( $user_email ) && !empty( $post ) ) {

                if ( preg_match( '/^[-a-z0-9~!$%^&*_=+}{\'?]+( \.[-a-z0-9~!$%^&*_ = +}
                {
                    \'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i', $user_email ) ) {

                        $this->post->insert( ['user'=>$user_email, 'description'=>$post, 'topic_id'=>$_GET['id'], 'created_at'=> date( 'Y-m-d H:i:s' )] );

                        $topic = $this->topic->find( $_GET['id'] );
                        $this->topic->where( 'id', $_GET['id'] )->increment( 'no_posts', 1 );

                        Session::remove( 'createPostError' );
                        Session::set( 'createPostSuccess', "You've successfully posted to forum topic" );
                        Url::redirect( 'forum&id='.$_GET['id'] );
                    } else {
                        Session::remove( 'createPostSuccess' );
                        Session::set( 'createPostError', 'Invalid email entered' );
                        Url::redirect( 'forum&id='.$_GET['id'] );
                    }

                } else {
                    Session::remove( 'createPostSuccess' );
                    Session::set( 'createPostError', 'All fields are required' );
                    Url::redirect( 'forum&id='.$_GET['id'] );
                }
            }
        }

    }

    ?>