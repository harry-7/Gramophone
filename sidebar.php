<?php
/**
 * The general siderbar
 *
 * CODEX REF
 * https://codex.wordpress.org/Customizing_Your_Sidebar
 *
 * @license GPL-2
**/
?>

<div class="col-md-offset-1 col-md-4" id="sidebar">
    <?php if ( !dynamic_sidebar( 'page' ) ): ?>
    <?php endif; ?>
</div>
