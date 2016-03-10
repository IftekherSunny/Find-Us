<div class="wrap">
    <h2>
        {{ __('Find Us Settings', 'find_us_domain') }}
    </h2>

    <!-- start form -->
    <form action="options.php" method="post">
        {{ settings_fields('find_us_settings_group') }}

        <table class="form-table">
            <tbody>
                <!-- start of facebook enable -->
                <tr>
                   <th scope="row">
                       <label for="find_us_settings[facebook_enable]">{{ __('Enable Facebook', 'find_us_domain') }}</label>
                   </th>
                   <td>
                       <input type="checkbox" name="find_us_settings[facebook_enable]" id="find_us_settings[facebook_enable]" value="1"
                           <?php
                            checked('1', isset($find_us_options['facebook_enable'])? $find_us_options['facebook_enable'] : '');
                           ?>
                           />
                   </td>
                </tr>
                <!-- end of facebook enable -->

                <!-- start of facebook username -->
                <tr>
                    <th scope="row">
                        <label for="find_us_settings[facebook_username]">{{ __('Facebook Username', 'find_us_domain') }}</label>
                    </th>
                    <td>
                        <input type="text" name="find_us_settings[facebook_username]" id="find_us_settings[facebook_username]" value="{{ $find_us_options['facebook_username'] }}" class="regular-text" />
                        <p class="description">Enter your facebook username.</p>
                    </td>
                </tr>
                <!-- end of facebook username -->

                <!-- start of twitter enable -->
                <tr>
                    <th scope="row">
                        <label for="find_us_settings[twitter_enable]">{{ __('Enable Twitter', 'find_us_domain') }}</label>
                    </th>
                    <td>
                        <input type="checkbox" name="find_us_settings[twitter_enable]" id="find_us_settings[twitter_enable]" value="1"
                            <?php
                            checked('1', isset($find_us_options['twitter_enable'])? $find_us_options['twitter_enable'] : '');
                            ?>
                            />
                    </td>
                </tr>
                <!-- end of twitter enable -->

                <!-- start of twitter username -->
                <tr>
                    <th scope="row">
                        <label for="find_us_settings[twitter_username]">{{ __('Twitter Username', 'find_us_domain') }}</label>
                    </th>
                    <td>
                        <input type="text" name="find_us_settings[twitter_username]" id="find_us_settings[twitter_username]" value="{{ $find_us_options['twitter_username'] }}" class="regular-text" />
                        <p class="description">Enter your twitter username.</p>
                    </td>
                </tr>
                <!-- end of twitter username -->

            </tbody>
        </table>

        <p class="submit">
            <input type="submit" name="submit" id="submit" class="button button-primary" value="{{ _e('Save', 'find_us_domain') }}"/>
        </p>
    </form>
    <!-- end form -->

</div>