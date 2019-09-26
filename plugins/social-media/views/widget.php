<!-- This file is used to markup the public-facing widget. -->








<div class='social-widget'>
<?php if ( strlen ( trim ( $facebook) ) > 0 ) : ?>  
    <p>
        <a href="<?php echo $facebook; ?>">
            <i style="display: block;" class="fab fa-facebook-square"></i>
        </a>
    
</p>

<?php endif; ?>

<?php if ( strlen ( trim ( $instagram) ) > 0 ) : ?>  
    <p>
        <a href="<?php echo $instagram; ?>">
        <i class="fab fa-instagram"></i>
        </a>
    
</p>

<?php endif; ?>

<?php if ( strlen ( trim ( $linkdin) ) > 0 ) : ?>  
    <p>
        <a href="<?php echo $linkdin; ?>">
        <i class="fab fa-linkedin"></i>
        </a>
    
</p>

<?php endif; ?>

<?php if ( strlen ( trim ( $twitter) ) > 0 ) : ?>  
    <p>
        <a href="<?php echo $twitter; ?>">
        <i class="fab fa-twitter-square"></i>
        </a>
    
</p>

<?php endif; ?>

</div>