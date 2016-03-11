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
                    {{ settings_fields('find_us_settings_group_facebook') }}

                    <!-- start of facebook enable -->
                    <tr>
                        <th scope="row">
                            <label for="find_us_settings_facebook[enable]">{{ __('Enable', 'find_us_domain') }}</label>
                        </th>
                        <td>
                            <input type="checkbox" name="find_us_settings_facebook[enable]" id="find_us_settings_facebook[enable]" value="1"
                                <?php
                                checked('1', isset($find_us_options_facebook['enable'])? $find_us_options_facebook['enable'] : '');
                                ?>
                                />
                        </td>
                    </tr>
                    <!-- end of facebook enable -->

                    <!-- start of facebook username -->
                    <tr>
                        <th scope="row">
                            <label for="find_us_settings_facebook[username]">{{ __('Username', 'find_us_domain') }}</label>
                        </th>
                        <td>
                            <input type="text" name="find_us_settings_facebook[username]" id="find_us_settings_facebook[username]" value="{{ $find_us_options_facebook['username'] }}" class="regular-text" />
                            <p class="description">Enter your facebook username.</p>
                        </td>
                    </tr>
                    <!-- end of facebook username -->
                <?php endif; ?>

                <?php if($active_tab === 'twitter') : ?>
                    {{ settings_fields('find_us_settings_group_twitter') }}

                    <!-- start of twitter enable -->
                    <tr>
                        <th scope="row">
                            <label for="find_us_settings_twitter[enable]">{{ __('Enable', 'find_us_domain') }}</label>
                        </th>
                        <td>
                            <input type="checkbox" name="find_us_settings_twitter[enable]" id="find_us_settings_twitter[enable]" value="1"
                                <?php
                                checked('1', isset($find_us_options_twitter['enable'])? $find_us_options_twitter['enable'] : '');
                                ?>
                                />
                        </td>
                    </tr>
                    <!-- end of twitter enable -->

                    <!-- start of twitter username -->
                    <tr>
                        <th scope="row">
                            <label for="find_us_settings_twitter[username]">{{ __('Username', 'find_us_domain') }}</label>
                        </th>
                        <td>
                            <input type="text" name="find_us_settings_twitter[username]" id="find_us_settings_twitter[username]" value="{{ $find_us_options_twitter['username'] }}" class="regular-text" />
                            <p class="description">Enter your twitter username.</p>
                        </td>
                    </tr>
                    <!-- end of twitter username -->
                <?php endif; ?>

            </tbody>
        </table>

        <p class="submit">
            {{ submit_button() }}
        </p>
    </form>
    <!-- end form -->

</div>