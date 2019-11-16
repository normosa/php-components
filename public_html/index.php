<?php

include_once 'autoload.php';

use Devcomm\Components\Forms\FormBuilder;

$form = (new FormBuilder())->withTextField("firstname")->withTextField("lastname")->withTextField("address")->withChecboxField("city")->withTextField("phone")->build();
if($form->doPost()){
    echo "Form Submitted";
}
?>
<html>
    <head>
        <title>Create Account</title>
        <link type="text/css" rel="stylesheet" href="style.css">
    </head>
    <body>
        <form method="post">
            <div class="row">
                <label>Firstname:</label>
                <div class="input-container">
                    <input name="firstname" type="text" value="<?= $form ->getValue("firstname")?>"/>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <label>Lastname:</label>
                <div class="input-container">
                    <input name="lastname" type="text" value="<?= $form ->getValue("lastname")?>"/>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <label>Phone:</label>
                <div class="input-container">
                    <input name="phone" type="text" value="<?= $form ->getValue("phone")?>"/>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <label>Address:</label>
                <div class="input-container">
                    <input name="address" type="text" value="<?= $form ->getValue("address")?>"/>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <label>City:</label>
                <div class="input-container">
                    <input name="city" type="checkbox" <?= ($form ->getValue("city"))? "checked": ""?>/>
                </div>
                <div class="clearfix"></div>
            </div>
            <button>Submit</button>
        </form>
    </body>
</html>