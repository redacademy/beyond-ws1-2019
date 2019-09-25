<!-- This file is used to markup the public-facing widget. -->

<?php if ( strlen ( trim ( $tel ) ) > 0 ) : ?>  
<p><i class="fas fa-phone"></i> <?php echo $tel; ?>
</p>

<?php endif; ?>

<?php if ( strlen ( trim ( $address ) ) > 0 ) : ?>  
<p><i class="fas fa-map-marker-alt"></i> <?php echo $address; ?>
</p>

<?php endif; ?>

<?php if ( strlen ( trim ( $email ) ) > 0 ) : ?>  
<p><i class="fas fa-envelope"></i> <?php echo $email; ?>
</p>

<?php endif; ?>


<div class='social-widget'>
<?php if ( strlen ( trim ( $facebook) ) > 0 ) : ?>  
    <p>
        <a href="<?php echo $facebook; ?>">
            <i style="display: block;" class="fab fa-facebook-square"></i>
        </a>
    
</p>

<?php endif; ?>

</div>