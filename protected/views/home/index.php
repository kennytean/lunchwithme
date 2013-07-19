<?php
/* @var $this HomeController */

$this->breadcrumbs=array(
	'Home',
);
?>
<!-- <h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<p>
	You may change the content of this page by modifying
	the file <tt><?php echo __FILE__; ?></tt>.
</p> -->
<style>
h1 { font-size:2em; text-align: center;}


</style>

<script type="text/javascript">
    function toggle_div() {
        var div = document.getElementById("how_it_works");
        if (div.style.display == "none") {
            div.style.display = "block";
        } else {
            div.style.display = "none";
        }
    }
</script>

<div style="width:500px; margin:50px auto;">

<h1 style="text-align: center"><b>Lunch with ME!!</b></h1>

<h5 style="text-align: center">Next Lunch Date: <span style="font-size: 2em; color: #f89406">20th July 2013</span></h5>

<!--<form id="just_one_form" action="/home/submit">
    <input type="text" id="email" value="Email">
    <input type="submit" value="I'm in!!">
    <input type="button" value="How it works" onclick="toggle_div()">
</form>-->

<div style="text-align: center">
    <?php echo CHtml::beginForm('home/submitForm','post'); ?>
    <h6 style="text-align: center">Join Us!!</h6><br/>
    <input type="text" name="email" id="email" placeholder="Email" value="" style="border: 1px solid #333; margin-top:2px;"><br/>
    <?php echo CHtml::submitButton("I'm in!!", array('name' => 'button1', 'class' => 'btn btn-success')); ?>
    <input type="button" class="btn btn-danger" value="How it works" onclick="toggle_div()" style="margin-left:10px;">
    <?php echo CHtml::endForm(); ?>

    <div id="how_it_works" style="display: none">
        <p>Test!</p>
    </div>
</div>