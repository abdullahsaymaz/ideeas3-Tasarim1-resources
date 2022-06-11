<?php

$option_href = array(
    'user',
);

$option_icons = array(
    '<i class="fa-solid fa-user"></i>',
);

$option_title = array(
    'Bilgiler',
);

$option_extra = array();

$option_inline_extra = array();

for($i = 0;$i < count($option_icons);$i++)
{

    echo '

                            <a class="section-option col-sm-4 col-lg-2 p-3 d-block" href="' . URL::to('/') . '/' . $option_href[$i] . '" '
        .($option_inline_extra[$option_title[$i]] ?? ' ') . '>
                                <div class="so-icon h1 d-flex align-items-center justify-content-center mb-3">
                                    ' . $option_icons[$i] . '
                                </div>
                                <div class="so-title text-center">
                                    ' . $option_title[$i] . '
                                </div>
                                ' . ($option_extra[$option_title[$i]] ?? ' ') . '
                            </a>

                ';

}
