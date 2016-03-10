<div class="find-us">
    <p class="find-us-content">
        {{ $content }}
    </p>

    <p class="find-us-social-media">
        Find us on:
        <?php if(find_us_facebook_is_enable()) : ?>
            <a href="https://facebook.com/{{ $facebookUsername }}" class="find-us-facebook" target="_blank">
                <span class="dashicons dashicons-facebook"></span>
            </a>
        <?php endif; ?>

        <?php if(find_us_twitter_is_enable()) : ?>
            <a href="https://twitter.com/{{ $twitterUsername }}" class="find-us-twitter" target="_blank">
                <span class="dashicons dashicons-twitter"></span>
            </a>
        <?php endif; ?>
    </p>
</div>