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