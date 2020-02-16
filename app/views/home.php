<?php
require_once( 'inc/header.php' );
?>

<div class='jumbotron'>
    <h1>Forum heading</h1>
    <p class='lead'>Give a description about this forum. 5 lines will make the page look nice enough.Cras justo odio,
        dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum
        nibh.
    </p>
    <form style='text-align:left' action='home/postTopic' method='POST'>
        <div class='form-group'>
            <label for='userEmail'>Email address</label>
            <input type='email' class='form-control' name='userEmail' id='userEmail' aria-describedby='emailHelp'
                placeholder='Enter email'>
        </div>

        <div class='form-group'>
            <label for='forumTopic'>Topic title</label>
            <input type='text' class='form-control' name='forumTopic' id='forumTopic' placeholder='Enter in a topic'>
        </div>
        <button type='submit' class='btn btn-primary'>Create a topic</button>

        <?php
if ( Session::isSet( 'createTopicError' ) ):
?>
        <div class='alert alert-danger' role='alert' style='margin-top:21px;'>
            <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
            <span class='sr-only'>Error:</span>
            <?php
echo Session::get( 'createTopicError' );
//Showing session error message
Session::remove( 'createTopicError' );
//Removing session error message
?>
        </div>
        <?php
endif;
?>

        <?php
if ( Session::isSet( 'createTopicSuccess' ) ):
?>
        <div class='alert alert-success' role='alert' style='margin-top:21px;'>
            <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
            <span class='sr-only'>Error:</span>
            <?php
echo Session::get( 'createTopicSuccess' );
//Showing session success message
Session::remove( 'createTopicSuccess' );
//Removing session success message
?>
        </div>
        <?php
endif;
?>

    </form>
</div>

<div class='row marketing'>
    <div class='col-lg-12'>

        <?php if ( count( $data['topics'] ) ): ?>
        <table class='table table-striped table-advance table-hover' id='zctb' width='100%'>
            <thead>
                <tr>
                    <th>Topic</th>
                    <th>User</th>
                    <th>Posts</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ( $data['topics'] as $topic ):
$topic_id = $topic['id'];
$user = $topic['user'];
$topic_title = $topic['title'];
$no_posts = $topic['no_posts'];

?>
                <tr id='admin-list'>
                    <td><a href='forum&id=<?php echo $topic_id; ?>'><?php echo $topic_title;
?></a></td>

                    <td><?php echo $user;
?></td>

                    <td><?php echo $no_posts;
?></td>

                </tr>
                <?php endforeach;
?>
            </tbody>
            <?php else: ?>
            <p style='font-weight: bold;padding: 20px;background-color: #e6d3d3;'>No topic has been posted yet</p>
            <?php endif;
?>

        </table>

    </div>

</div>

<?php
require_once( 'inc/footer.php' );
?>