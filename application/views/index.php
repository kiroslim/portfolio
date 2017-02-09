<?php
/**
 * Created by PhpStorm.
 * User: Kiril
 * Date: 12.11.2016 г.
 * Time: 11:53 ч.
 */

$this->load->view('header');
?>

    <section id="intro_section" class="container text-center">
        <h1 class="hello"><span>Hello</span></h1>
        <h3 class="my-name">I'm Kiril Iliev</h3>
        <h2 class="my-work">A Front-end developer/Web designer</h2>
        <p class="my-firm">currently working for Dialog LTD Bulgaria</p>
    </section>

    <section id="device_section" class="container text-center">
        <div id="device">
            <div class="item big-screen">Big screen</div>
            <div class="item normal-screen">Normal screen</div>
            <div class="item laptop">Laptop</div>
            <div class="item tablet">Tablet</div>
            <div class="item phone">Phone</div>
        </div>
    </section>

    <section id="about-section" class="container">
        <div class="row">
            <div class="col-sm-4 html-bg text-center">
                <img src="<?php echo $this->config->item('img_url'); ?>html.png" width="100" />
                <h3>Html5</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
            <div class="col-sm-4 css-bg text-center">
                <img src="<?php echo $this->config->item('img_url'); ?>css.png" width="100" />
                <h3>Css3</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
            <div class="col-sm-4 js-bg text-center">
                <img src="<?php echo $this->config->item('img_url'); ?>js.png" width="100" />
                <h3>JavaScript</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
        </div>
    </section>

<?php $this->load->view('footer'); ?>