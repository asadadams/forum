<?php

class Home extends Controller {
    protected $topic;

    public function __construct() {
        $this->topic = $this->model( 'Topic' );
    }

    public function index() {
        $allTopics = $this->topic->orderBy( 'id', 'desc' )->get();
        $this->view( 'home', ['topics'=>$allTopics] );
    }

    public function about() {
        $this->view( 'about' );
    }

    public function postTopic() {
        if ( isset( $_POST['userEmail'] ) && isset( $_POST['forumTopic'] ) ) {
            $user_email =  trim( strip_tags( $_POST['userEmail'] ) );
            $forum_topic =  trim( strip_tags( $_POST['forumTopic'] ) );

            if ( !empty( $user_email ) && !empty( $forum_topic ) ) {

                if ( preg_match( '/^[-a-z0-9~!$%^&*_=+}{\'?]+( \.[-a-z0-9~!$%^&*_ = +}
                {
                    \'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i', $user_email ) ) {
                        $this->topic->insert( ['user'=>$user_email, 'title'=>$forum_topic] );

                        Session::remove( 'createTopicError' );
                        Session::set( 'createTopicSuccess', 'Topic successfully created' );
                        Url::redirect( 'home' );
                    } else {
                        Session::remove( 'createTopicSuccess' );
                        Session::set( 'createTopicError', 'Invalid email entered' );
                        Url::redirect( 'home' );
                    }

                } else {
                    Session::remove( 'createTopicSuccess' );
                    Session::set( 'createTopicError', 'All fields are required' );
                    Url::redirect( 'home' );
                }
            }
        }
    }

    ?>