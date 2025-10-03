<!-- Blog Post Start -->
<?php foreach($posts as $post): ?>
<div class="col-md-12 blog-post">
    <div class="post-title">
        <a href="single.html"
        ><h1>
            <?php echo $post['title']; ?>
        </h1></a
        >
    </div>
    <div class="post-info">
        <span>
            <?php echo date('Y-m-d', strtotime($post['created_at'])); ?>
        </span> | 
        <span>
            <?php echo $post['category_name']; ?>
        </span>
    </div>
    <p>
        <?php echo substr($post['text'], 0, 150) . '...'; ?>
    </p>
    <a
        href="single.html"
        class="
        button button-style button-anim
        fa fa-long-arrow-right
        "
        ><span>Read More</span></a
    >
</div>
<?php endforeach; ?>
<!-- Blog Post End -->