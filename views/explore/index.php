<div class="explore">
    <?php $destination = $viewmodel; ?>

    <div class="explore_section_1 container">
       <h1>Adventure is back </h1> 
       <p>Nulla tempus sollicitudin dui, ut vehicula lacus porta vel. Duis urna ligula, luctus at feugiat a lacinia ut sem. Quisque sit amet ipsum ac odio malesuada convallis. Nulla tempus sollicitudin dui, ut vehicula lacus porta vel.  Nulla tempus sollicitudin dui, ut vehicula lacus porta vel. Duis urna ligula, luctus at feugiat a lacinia ut sem.</p>
    </div>

    <div class="explore_section_2 container">
        <?php foreach($destination as $destinations) :?>
        
            <div class="explore_inner_section_2">

                <div class="details">
                    <h2><?php echo $destinations['name']?></h2>
                    <p><?php echo $destinations['content'] ?></p>
                    <div class="select_btn">
                        <input type="button" value="DETAILS">
                    </div>
                </div>

                <div class="img">      
                    <img src="images/<?php echo $destinations['img'] ?>" alt="">
                </div>

            </div>
        <?php endforeach;?>	
    </div>
</div>