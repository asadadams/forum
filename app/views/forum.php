<?php
require_once( 'inc/header.php' );
?>

<span>
    <h2><?php echo $data['topic']->title;
?></h2> by <b><?php echo $data['topic']->user;
?></b>
</span>

<div class='jumbotron' style='padding-top: 6px;padding-bottom: 5px;margin-top: 14px;'>
    <h3 style='text-align:left;'>Post to this topic</h3>
    <form style='text-align:left' action="forum/post&id=<?php echo $_GET['id']?>" method='POST'>
        <div class='form-group'>
            <label for='userEmail'>Email address</label>
            <input type='email' class='form-control' name='userEmail' id='userEmail' aria-describedby='emailHelp'
                placeholder='Enter email'>
        </div>

        <div class='form-group'>
            <textarea style='margin: 0px; width: 579px; height: 123px;' class='form-control' name='post' id='post'
                placeholder='Enter in your post.'></textarea>
        </div>
        <button type='submit' class='btn btn-primary'>Post</button>

        <?php
if ( Session::isSet( 'createPostError' ) ):
?>
        <div class='alert alert-danger' role='alert' style='margin-top:21px;'>
            <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
            <span class='sr-only'>Error:</span>
            <?php
echo Session::get( 'createPostError' );
//Showing session error
Session::remove( 'createPostError' );
//Removing session error
?>
        </div>
        <?php
endif;
?>

        <?php
if ( Session::isSet( 'createPostSuccess' ) ):
?>
        <div class='alert alert-success' role='alert' style='margin-top:21px;'>
            <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
            <span class='sr-only'>Error:</span>
            <?php
echo Session::get( 'createPostSuccess' );
//Showing session success message
Session::remove( 'createPostSuccess' );
//Removing session success message
?>
        </div>
        <?php
endif;
?>

    </form>
</div>

<h2>Posts</h2>

<div class='row'>
    <?php if ( count( $data['topic']->posts ) ):
foreach ( $data['topic']->posts as $topic_posts ):
$posted_user = $topic_posts['user'];
$post_desciption = $topic_posts['description'];
$created_at_date = $topic_posts['created_at'];
?>
    <div class='col-lg-12'
        style='background-color:#eee;margin-top: 14px;border: 1px solid #d6cece;padding-top:10px;padding-bottom:10px;'>
        <h4>Post by <b><?php echo $posted_user;
?></b></h4>
        <p><?php echo $post_desciption;
?></p>
        <small style='float:right;'>
            <?php echo time_ago( $created_at_date );
?>
        </small>
    </div>
    <?php endforeach;
?>
    <?php else: ?>
    <p style='font-weight: bold;padding: 20px;background-color: #e6d3d3;'>No one has posted anything about this topic
    </p>
    <?php endif;
?>

</div>

<?php
require_once( 'inc/footer.php' );
?>