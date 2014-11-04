<?php

$errors = validation_errors('<div>', '</div>');
$rowStart = '<div class="small-12 columns">';
$rowEnd = '</div>';
if (!empty($errors))
{
    echo '<div class="small-12 columns">';
    echo '<div data-alert class="alert-box alert">';
    echo $errors;
    echo '</div>';
    echo '</div>';
}

echo form_open();
if ($newtmpl === TRUE)
{
    echo $rowStart;
    echo jGenerateDropdown(lang('mtmplgroup'), 'msggroup', $groupdropdown, set_value('msggroup', ''), '');
    echo $rowEnd;
    echo $rowStart;
    echo jGenerateDropdown(lang('rr_lang'), 'msglang', $langdropdown, '', '');
    echo $rowEnd;
}
else
{
    echo $rowStart;
    echo '<div class="medium-3 columns medium-text-right"><label class="inline">' . lang('mtmplgroup') . '<label></div>';
    echo '<div class="medium-8 large-7 columns end"><input type="text" readonly="readonly" value="' . $groupdropdown['' . $msggroup . ''] . '"></div>';
    echo $rowEnd;
    echo $rowStart;
     echo '<div class="medium-3 columns medium-text-right"><label class="inline">' . lang('mtmpllang') . '<label></div>';
    echo '<div class="medium-8 large-7 columns end"><input type="text" readonly="readonly" value="' . $msglang . '"></div>';
    echo $rowEnd;
}
echo $rowStart;
echo '<div class="medium-3 columns medium-text-right"><label class="" for="msgdefault">' . lang('mtmpldefault') . '<label></div>';
echo '<div class="medium-8 large-7 columns end">' . form_checkbox('msgdefault', 'yes', set_checkbox('msgdefault', 'yes', $msgdefault)) . '</div>';
echo $rowEnd;

echo $rowStart;
echo '<div class="medium-3 columns medium-text-right"><label class="" for="msgattach">' . lang('mtmplattach') . '<label></div>';
echo '<div class="medium-8 large-7 columns end">' . form_checkbox('msgattach', 'yes', set_checkbox('msgattach', 'yes', $msgattach)) . '</div>';
echo $rowEnd;


echo $rowStart;
echo '<div class="medium-3 columns medium-text-right"><label class="" for="msgenabled">' . lang('mtmplenabled') . '<label></div>';
echo '<div class="medium-8 large-7 columns end">' . form_checkbox('msgenabled', 'yes', set_checkbox('msgenabled', 'yes', $msgenabled)) . '</div>';
echo $rowEnd;

echo $rowStart;
echo jGenerateInput(lang('mtmplsbj'), 'msgsubj', set_value('msgsubj', $msgsubj), '', null);
echo $rowEnd;
echo $rowStart;
echo jGenerateTextarea(lang('mtmplbody'), 'msgbody', set_value('msgbody', $msgbody), '');

echo $rowEnd;

echo form_error('mtmplsbj');

echo '<div class="small-12 columns text-right">';
echo '<div class="medium-10 columns end"><button type="submit">Save</button>';
echo $rowEnd;

echo form_close();

