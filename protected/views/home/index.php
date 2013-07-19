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

        <br/><br/><h5>Just sign up!</h5>

        <p style="text-align: left">We will randomly assign you a partner and e-mail the both of you on the date. You guys can then contact each other and arrange for lunch and have a good time! =) It's that simple!</p>


        <h5>Why this app?</h5>

        <p style="text-align: left">There was a time, when the company was smaller, and everyone kind of meet everyone every day. It was good times, we understood each other, knew what each other is doing, and we worked together to achieve a common goal. There was definitely more fun! Some people call this the 'kampung spirit'.</p>

        <p style="text-align: left">But then the company grew, and the office was bigger. It wasn't a bad thing, but we no longer see each one on such a regular basis. In fact, sometimes we know there are new people in the office, but never met them, sometimes until they leave.</p>

        <p style="text-align: left">Remembering the time when you first joined the company, and then there weren't many people to talk to. People wanted to help you and make you feel welcome, but at the same time, they have a gazillion of things to do. And then lunch time came, and we realize everyone have lunch with the same group of people almost all the time.</p>

        <p style="text-align: left">We believe that people are the most important asset of any company, and communication is one of the fundamental pillars of a good relationship. Hopefully with this app, we can get to know more people at a deeper level. =)</p>
    </div>
</div>