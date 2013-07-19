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

<h1 style="text-align: center">Lunch with Me!!</h1>

<h5 style="text-align: center">Next Lunch Date: </h5>

<h6>Join Us!!:</h6>

<!--<form id="just_one_form" action="/home/submit">
    <input type="text" id="email" value="Email">
    <input type="submit" value="I'm in!!">
    <input type="button" value="How it works" onclick="toggle_div()">
</form>-->


<?php echo CHtml::beginForm('home/submitForm','post'); ?>
<input type="text" name="email" id="email" value="Email" style="border: 1px solid #333; margin-top:2px;">
<?php echo CHtml::submitButton("I'm in!!", array('name' => 'button1', 'class' => 'btn btn-warning')); ?>
<input type="button" class="btn btn-danger" value="How it works" onclick="toggle_div()" style="margin-left:10px;">
<?php echo CHtml::endForm(); ?>

<div id="how_it_works" style="display: none">
<p>Test!</p>
</div>
</div>