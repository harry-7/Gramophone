<?php
/**
 * The blogs sidebar.
 *
 * CODEX REF
 * https://codex.wordpress.org/Customizing_Your_Sidebar
 *
 * @license GPL-2
**/
?>

<div class="col-md-3" id="sidebar">
    <?php if ( ! dynamic_sidebar( 'blog' ) ): ?>
    <?php endif; ?>
</div>
