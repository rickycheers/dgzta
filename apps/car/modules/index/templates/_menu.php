<?php
/*
 * Abraham
 *
 *
 */
?>
<div id="menu" class="menus">
    <ul class="menu_list">
        <style type="text/css">
            li.nobk:hover{background-color: white !important;}
        </style>
        <li class="app nobk" style="border:1px black none;text-align:center;height:9px;"><span class="flip" style="padding-left:10px;padding-right:10px;background-color:#17608A;color:white;height:9px;" title="Ocultar menu">&Delta;</span></li>
    <li class="menu_role">
            <ul class="menu_sub">
                <li class ="menu_sub_header"><a class="alternate" href="<?php echo url_for('@homepage') ?>"></a>Car Management</li>
                <li class="app <?php echo in_array('car', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@car') ?>" class="alternate">Car</a></li>
                <li class="app last <?php echo in_array('user', explode('/', $sf_request->getUri())) ? "selected" : "" ?>"><a href="<?php echo url_for('@user') ?>" class="alternate">Member</a></li>
            </ul>
    </li>
    </ul>
</div>
