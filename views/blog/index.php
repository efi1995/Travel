<?php $blog = $viewmodel; ?>
<div class="blog_section_1">
    <h1>Blog</h1>
</div>


<div class="container blog_section_2">
        <?php foreach($blog as $blogs) :?>
        
            <div class="blog_inner_section_2 ">

                <div class="img">      
                    <img src="images/<?php echo $blogs['img'] ?>" alt="">
                </div>

                <div class="details">
                    <h2><?php echo $blogs['name']?></h2>
                    <p><?php echo $blogs['create_date'] ?></p>
                </div>

            </div>
        <?php endforeach;?>	
    </div>