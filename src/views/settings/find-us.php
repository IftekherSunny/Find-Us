<div class="wrap">
    <h2>
        {{ __('Find Us Settings', 'find_us_domain') }}
    </h2>

    <!-- Make a call to the WordPress function for rendering errors when settings are saved. -->
    <?php settings_errors(); ?>

	<h2 class="nav-tab-wrapper">
        <a href="?page=find-us&tab=facebook" class="nav-tab {{ ($active_tab === 'facebook')? 'nav-tab-active' : '' }}">Facebook</a>
        <a href="?page=find-us&tab=twitter" class="nav-tab {{ ($active_tab === 'twitter')? 'nav-tab-active' : '' }}">Twitter</a>
    </h2>
    
    <!-- start form -->
    <form action="options.php" method="post">
        <table class="form-table">
            <tbody>
                <?php if($active_tab === 'facebook') : ?>
                    {{ find_us_include_view('settings/partials/_facebook.php', compact('find_us_options_facebook')); }}
                <?php endif; ?>

                <?php if($active_tab === 'twitter') : ?>
                    {{ find_us_include_view('settings/partials/_twitter.php', compact('find_us_options_twitter')); }}
                <?php endif; ?>

            </tbody>
        </table>

        <p class="submit">
            {{ submit_button() }}
        </p>
    </form>
    <!-- end form -->

</div>