
	
	<?php
		$imageSizes = array(100, 110, 120, 130, 120, 110, 100);
		$ideas = ft_api_get_finalized_submissions(1); ?>
	
		<?php
		for ($i = 1; $i <= 7; $i++) {
		
			$x = 1;
			$k = 0; 
			while($i+$x < 200){
				$idea[$k] = $ideas[$i*$x - 1];
				$x += 21;
				$k += 1; 
			}
			
	?> 
	<div class="personGrandparent">
	<div class="personParent<? echo $i ?>"  style="">
	<div id="person<? echo $i ?>">
            	<?php for($j = 0;$j <= $k; $j++) { ?>
            
            	
            	<?php if(isset($idea[$j]["photourl"]) == false ){
    				#$photourl = "images/anonymous.jpg";
					$photourl = $idea[$j]["usercloud"];
    			}
    			else {
	    			$photourl = $idea[$j]["photourl"];
    			}
    			
    			 if(isset($idea[$j]["username"]) == false ){
    			$fancyclass = "noclass";
    			}else {
	    			$fancyclass = "fancybox";
    			}
    			
    			?>
    		
            <a href="<?php echo $photourl; ?>" class="<?php echo $fancyclass?>" title="<?php echo $idea[$j]["username"]?>" rel="gallery"><img class= "personImage"src="<?php echo $photourl; ?>" 
            style="width: <?php echo $imageSizes[$i-1]."px"?>; height:<?php echo $imageSizes[$i-1]."px"?>;
            
            
	        
	        
            "/></a>
	            	<?php } ?>
            </div>
            </div><!--PersonParent-->
            </div><!--PersonGrandparent-->

	<?php } ?>
	