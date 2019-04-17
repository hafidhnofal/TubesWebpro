<h2><?=$title?></h2>

<?php foreach($posts as $post) : ?>
    <h3><?php echo $post['title'];?></h3>
    <small class="post-date">Posted On:<?php echo $post['create_at'];?> </small>
    <?php echo $post['body'];?>
<?php endforeach;?>