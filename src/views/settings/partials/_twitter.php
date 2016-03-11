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