<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo base_url(); ?>"/>
    <meta name="viewport" content="user-scalable=no, width=device-width"/>
    <title>CI Form</title>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
    <link href="css/docs.css" rel="stylesheet">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>

<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="index.php/registration">soapbox.io</a>
        </div>
    </div>
</div>

<div class="container">

    <header class="jumbotron subhead">
        <h1>CI Form</h1>

        <p class="lead">CodeIgniter Form.</p>
    </header>

<div class="row">

    <?php // Change the css classes to suit your needs
    $attributes = array('class' => 'form span', 'id' => '');
    echo form_open('Registration', $attributes); ?>

    <div class="well">

    <fieldset>

        <div class="control-group">
            <label class="control-label" for="first_name">First Name <span>*</span></label>

            <div class="controls docs-input-sizes">
                <input class="input-large" id="first_name" type="text" name="first_name" maxlength="255"
                       value="<?php echo set_value('first_name'); ?>"/>
            </div>
            <?php echo form_error('first_name'); ?>
        </div>

        <div class="control-group">
            <label class="control-label" for="last_name">Last Name</label>

            <div class="controls docs-input-sizes">
                <input class="input-large" id="last_name" type="text" name="last_name" maxlength="255"
                       value="<?php echo set_value('last_name'); ?>"/>
            </div>
            <?php echo form_error('last_name'); ?>
        </div>

        <div class="controls docs-input-sizes">
            <label class="control-label" for="user_name">User Name <span>*</span></label>

            <div class="controls">
                <input class="input-large" id="user_name" type="text" name="user_name" maxlength="255"
                       value="<?php echo set_value('user_name'); ?>"/>
            </div>
            <?php echo form_error('user_name'); ?>
        </div>

        <div class="control-group">
            <label class="control-label" for="email">Email</label>

            <div class="controls docs-input-sizes">
                <input class="input-large" id="email" type="text" name="email" maxlength="40" value="<?php echo set_value('email'); ?>"/>
            </div>
            <?php echo form_error('email'); ?>
        </div>

        <div class="control-group">
            <label label class="control-label" for="phone">Phone</label>

            <div class="controls docs-input-sizes">
                <input class="input-large" id="phone" type="text" name="phone" maxlength="16" value="<?php echo set_value('phone'); ?>"/>
            </div>
            <?php echo form_error('phone'); ?>
        </div>

        <div class="row">
            <div class="span">
                <?php echo form_submit('submit', 'Submit'); ?>
            </div>
        </div>

    </fieldset>

    </div>

    <?php echo form_close(); ?>

</div>

</div>

</body>
</html>