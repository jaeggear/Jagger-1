<?php
if (!empty($error_message)) {
    echo '<div data-alert class="alert-box alert">' . $error_message . '</div>';
}
if (!empty($edit_form)) {
    if (!empty($subtitle)) {
        $link_policy = anchor(''.base_url('manage/attributepolicy/globals/'.$idp_id.'').'', '' . lang('backtodefaultlist') . '');
        $link_idp = anchor(base_url() . "providers/detail/show/" . $idp_id, $idp_name);
        echo '<br /><div id="pagetitle">' . $subtitle . ' (' . lang('perattr') . ')</div><div id="subtitle"><h3>' . lang('rr_provider') . ': ' . $link_idp . '</h3><h4>' . $provider_entity . '</h4>' . $link_policy . '</div>';
        if ($type === 'fed') {
            $encoded_fedname = $fed_url;
            $link_fed = anchor(''.base_url('federations/manage/show/'.$encoded_fedname.'').'', '<img src="'.base_url('images/icons/application-browser.png').'" />');
            echo '<h3>' . lang('fedrequester') . ': ' . $fed_name . $link_fed . '</h3>';
        }
    }
    echo $edit_form;
}
