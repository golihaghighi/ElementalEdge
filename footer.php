defined( 'ABSPATH' ) || exit;
</div> <!-- #content -->

<footer id="colophon" class="site-footer">
    <div class="container">
        <div class="site-info">
            <a href="<?php echo esc_url(__('https://wordpress.org/', 'elementaledge')); ?>">
                <?php printf(esc_html__('Proudly powered by %s', 'elementaledge'), 'WordPress'); ?>
            </a>
            <span class="sep"> | </span>
            <?php
            printf(esc_html__('Theme: %1$s by %2$s.', 'elementaledge'), 'ElementalEdge', '<a href="http://example.com/">Your Name or Company</a>');
            ?>
        </div><!-- .site-info -->
    </div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>
</body>

</html>