<style>
.section{
    margin-left: -20px;
    margin-right: -20px;
    font-family: "Raleway",san-serif;
}
.section h1{
    text-align: center;
    text-transform: uppercase;
    color: #808a97;
    font-size: 35px;
    font-weight: 700;
    line-height: normal;
    display: inline-block;
    width: 100%;
    margin: 50px 0 0;
}
.section ul{
    list-style-type: disc;
    padding-left: 15px;
}
.section:nth-child(even){
    background-color: #fff;
}
.section:nth-child(odd){
    background-color: #f1f1f1;
}
.section .section-title img{
    display: table-cell;
    vertical-align: middle;
    width: auto;
    margin-right: 15px;
}
.section h2,
.section h3 {
    display: inline-block;
    vertical-align: middle;
    padding: 0;
    font-size: 24px;
    font-weight: 700;
    color: #808a97;
    text-transform: uppercase;
}

.section .section-title h2{
    display: table-cell;
    vertical-align: middle;
    line-height: 25px;
}

.section-title{
    display: table;
}

.section h3 {
    font-size: 14px;
    line-height: 28px;
    margin-bottom: 0;
    display: block;
}

.section p{
    font-size: 13px;
    margin: 25px 0;
}
.section ul li{
    margin-bottom: 4px;
}
.landing-container{
    max-width: 750px;
    margin-left: auto;
    margin-right: auto;
    padding: 50px 0 30px;
}
.landing-container:after{
    display: block;
    clear: both;
    content: '';
}
.landing-container .col-1,
.landing-container .col-2{
    float: left;
    box-sizing: border-box;
    padding: 0 15px;
}
.landing-container .col-1 img{
    width: 100%;
}
.landing-container .col-1{
    width: 55%;
}
.landing-container .col-2{
    width: 45%;
}
.premium-cta{
    background-color: #808a97;
    color: #fff;
    border-radius: 6px;
    padding: 20px 15px;
}
.premium-cta:after{
    content: '';
    display: block;
    clear: both;
}
.premium-cta p{
    margin: 7px 0;
    font-size: 14px;
    font-weight: 500;
    display: inline-block;
    width: 60%;
}
.premium-cta a.button{
    border-radius: 6px;
    height: 60px;
    float: right;
    background: url(<?php echo YITH_WCDP_URL . '/assets'?>/images/upgrade.png) #ff643f no-repeat 13px 13px;
    border-color: #ff643f;
    box-shadow: none;
    outline: none;
    color: #fff;
    position: relative;
    padding: 9px 50px 9px 70px;
}
.premium-cta a.button:hover,
.premium-cta a.button:active,
.premium-cta a.button:focus{
    color: #fff;
    background: url(<?php echo YITH_WCDP_URL . '/assets'?>/images/upgrade.png) #971d00 no-repeat 13px 13px;
    border-color: #971d00;
    box-shadow: none;
    outline: none;
}
.premium-cta a.button:focus{
    top: 1px;
}
.premium-cta a.button span{
    line-height: 13px;
}
.premium-cta a.button .highlight{
    display: block;
    font-size: 20px;
    font-weight: 700;
    line-height: 20px;
}
.premium-cta .highlight{
    text-transform: uppercase;
    background: none;
    font-weight: 800;
    color: #fff;
}

.section.one{
    background: url(<?php echo YITH_YWSBS_ASSETS_URL ?>/images/01-bg.png) no-repeat #fff; background-position: 85% 75%
}
.section.two{
    background: url(<?php echo YITH_YWSBS_ASSETS_URL ?>/images/02-bg.png) no-repeat #fff; background-position: 15% 100%;
}
.section.three{
    background: url(<?php echo YITH_YWSBS_ASSETS_URL ?>/images/03-bg.png) no-repeat #fff; background-position: 85% 75%
}
.section.four{
    background: url(<?php echo YITH_YWSBS_ASSETS_URL ?>/images/04-bg.png) no-repeat #fff; background-position: 15% 100%;
}
.section.five{
    background: url(<?php echo YITH_YWSBS_ASSETS_URL ?>/images/05-bg.png) no-repeat #fff; background-position: 85% 75%
}
.section.six{
    background: url(<?php echo YITH_YWSBS_ASSETS_URL ?>/images/06-bg.png) no-repeat #fff; background-position: 15% 100%;
}
.section.seven{
    background: url(<?php echo YITH_YWSBS_ASSETS_URL ?>/images/07-bg.png) no-repeat #fff; background-position: 85% 75%;
}
.section.eight{
    background: url(<?php echo YITH_YWSBS_ASSETS_URL ?>/images/08-bg.png) no-repeat #fff; background-position: 15% 100%;
}


@media (max-width: 768px) {
    .section{margin: 0}
    .premium-cta p{
        width: 100%;
    }
    .premium-cta{
        text-align: center;
    }
    .premium-cta a.button{
        float: none;
    }
}

@media (max-width: 480px){
    .wrap{
        margin-right: 0;
    }
    .section{
        margin: 0;
    }
    .landing-container .col-1,
    .landing-container .col-2{
        width: 100%;
        padding: 0 15px;
    }
    .section-odd .col-1 {
        float: left;
        margin-right: -100%;
    }
    .section-odd .col-2 {
        float: right;
        margin-top: 65%;
    }
}

@media (max-width: 320px){
    .premium-cta a.button{
        padding: 9px 20px 9px 70px;
    }

    .section .section-title img{
        display: none;
    }
}
</style>
<div class="landing">
    <div class="section section-cta section-odd">
        <div class="landing-container">
            <div class="premium-cta">
                <p>
                    <?php echo sprintf( __('Upgrade to %1$spremium version%2$s of %1$sYITH WooCommerce Deposits and Down Payments%2$s to benefit from all features!','yith-woocommerce-deposits-and-down-payments'),'<span class="highlight">','</span>' );?>
                </p>
                <a href="<?php echo $this->get_premium_landing_uri() ?>" target="_blank" class="premium-cta-button button btn">
                    <span class="highlight"><?php _e('UPGRADE','yith-woocommerce-deposits-and-down-payments');?></span>
                    <span><?php _e('to the premium version','yith-woocommerce-deposits-and-down-payments');?></span>
                </a>
            </div>
        </div>
    </div>
    <div class="one section section-even clear">
        <h1><?php _e('Premium Features','yith-woocommerce-deposits-and-down-payments');?></h1>
        <div class="landing-container">
            <div class="col-1">
                <img src="<?php echo YITH_WCDP_URL . '/assets' ?>/images/01.png" alt="Feature 01" />
            </div>
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YITH_WCDP_URL . '/assets' ?>/images/01-icon.png" alt="icon 01"/>
                    <h2><?php _e('Fixed or percent amount?','yith-woocommerce-deposits-and-down-payments');?></h2>
                </div>
                <p>
                    <?php echo sprintf(__('More flexibility in setting the value of the deposit: it can either be a fixed amount or it can be a percent value of the product price. If you select the latter option, %1$sthe deposit will be dynamically calculated on each product.%2$s', 'yith-woocommerce-deposits-and-down-payments'), '<b>', '</b>');?>
                </p>
            </div>
        </div>
    </div>
    <div class="two section section-odd clear">
        <div class="landing-container">
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YITH_WCDP_URL . '/assets' ?>/images/02-icon.png" alt="icon 02" />
                    <h2><?php _e('Deposit expiry date','yith-woocommerce-deposits-and-down-payments');?></h2>
                </div>
                <p>
                    <?php echo sprintf(__('If you want the full payment to be completed within a specific number of days since the %1$sdeposit is paid%2$s, this is a feature that suits you!%3$sThis way, you will be able to hurry users and receive full payment within a specified date.', 'yith-woocommerce-deposits-and-down-payments'), '<b>', '</b>','<br>');?>
                </p>
            </div>
            <div class="col-1">
                <img src="<?php echo YITH_WCDP_URL . '/assets' ?>/images/02.png" alt="feature 02" />
            </div>
        </div>
    </div>
    <div class="three section section-even clear">
        <div class="landing-container">
            <div class="col-1">
                <img src="<?php echo YITH_WCDP_URL . '/assets' ?>/images/03.png" alt="Feature 03" />
            </div>
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YITH_WCDP_URL . '/assets' ?>/images/03-icon.png" alt="icon 03" />
                    <h2><?php _e( 'Email notifications','yith-woocommerce-deposits-and-down-payments');?></h2>
                </div>
                <p>
                    <?php echo sprintf(__('Email notifications help both users and admins to be updated in %1$sreal time%2$s about what happens in the shop. The plugin forwards two different types of emails:', 'yith-woocommerce-deposits-and-down-payments'), '<b>', '</b>');?>
                </p>
                <ul>
                    <li>
                        <?php _e( 'deposit paid (both admin and users are notified)','yith-woocommerce-deposits-and-down-payments') ?>
                    </li>
                    <li>
                        <?php _e( 'expiring deposit (users are notified))','yith-woocommerce-deposits-and-down-payments') ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="four section section-odd clear">
        <div class="landing-container">
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YITH_WCDP_URL . '/assets' ?>/images/04-icon.png" alt="icon 04" />
                    <h2><?php _e('Prevent online balance','yith-woocommerce-deposits-and-down-payments');?></h2>
                </div>
                <p>
                    <?php echo sprintf(__('If you want to %1$sprevent online payment for the balance%2$s, this plugin is just what you need! Users will not be able to complete their order in "My Account" page, but they will be forced to pay the rest in situ', 'yith-woocommerce-deposits-and-down-payments'), '<b>', '</b>');?>
                </p>
            </div>
            <div class="col-1">
                <img src="<?php echo YITH_WCDP_URL . '/assets' ?>/images/04.png" alt="Feature 04" />
            </div>
        </div>
    </div>
    <div class="five section section-even clear">
        <div class="landing-container">
            <div class="col-1">
                <img src="<?php echo YITH_WCDP_URL . '/assets' ?>/images/05.png" alt="Feature 05" />
            </div>
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YITH_WCDP_URL . '/assets'?>/images/05-icon.png" alt="icon 05" />
                    <h2><?php _e('Custom labels for plugin buttons','yith-woocommerce-deposits-and-down-payments');?></h2>
                </div>
                <p>
                    <?php _e( 'Use default labels available in the plugin or customize them as you prefer.','yith-woocommerce-deposits-and-down-payments' ); ?>
                </p>
            </div>
        </div>
    </div>
    <div class="six section section-odd clear">
        <div class="landing-container">
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YITH_WCDP_URL . '/assets' ?>/images/06-icon.png" alt="icon 06" />
                    <h2><?php _e('Notes on products','yith-woocommerce-deposits-and-down-payments');?></h2>
                </div>
                <p>
                    <?php echo sprintf( __('Enter a note for each product in the shop and choose where displaying it in the page that appears to users. One more opportunity to add %1$smore information%2$s that could turn out useful to buyers.','yith-woocommerce-deposits-and-down-payments'),'<b>','</b>','<br>'); ?>
                </p>
            </div>
            <div class="col-1">
                <img src="<?php echo YITH_WCDP_URL . '/assets' ?>/images/06.png" alt="Feature 06" />
            </div>
        </div>
    </div>
    <div class="seven section section-even clear">
        <div class="landing-container">
            <div class="col-1">
                <img src="<?php echo YITH_WCDP_URL . '/assets' ?>/images/07.png" alt="Feature 07" />
            </div>
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YITH_WCDP_URL . '/assets'?>/images/07-icon.png" alt="icon 07" />
                    <h2><?php _e('Different types of deposit','yith-woocommerce-deposits-and-down-payments');?></h2>
                </div>
                <p>
                    <?php echo sprintf( __('The amount of a deposit can vary. If you want that it is the same for all products in the shop, create specific rules to calculate it automatically depending on the %1$sproduct%2$s and/or on the %1$scategory%2$s it belongs. ','yith-woocommerce-deposits-and-down-payments'),'<b>','</b>'); ?>
                </p>
                <p>
                    <?php echo sprintf( __('But this is not the whole story! Assign a role to your %1$susers%2$s and calculate the deposit according to their role.','yith-woocommerce-deposits-and-down-payments'),'<b>','</b>'); ?>
                </p>
            </div>
        </div>
    </div>
    <div class="eight section section-even clear">
        <div class="landing-container">
            <div class="col-1">
                <img src="<?php echo YITH_WCDP_URL . '/assets' ?>/images/08.png" alt="Feature 08" />
            </div>
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YITH_WCDP_URL . '/assets'?>/images/08-icon.png" alt="icon 08" />
                    <h2><?php _e('Variable products','yith-woocommerce-deposits-and-down-payments');?></h2>
                </div>
                <p>
                    <?php echo sprintf( __('Now, %1$sfull support for variable products!%2$s Thanks to the premium version of the plugin you could configure a different deposit for the available product variations.%3$s This will allow managing %1$seach single variation%2$s as a simple product of your shop.','yith-woocommerce-deposits-and-down-payments'),'<b>','</b>','<br>'); ?>
                </p>
            </div>
        </div>
    </div>
    <div class="section section-cta section-odd">
        <div class="landing-container">
            <div class="premium-cta">
                <p>
                    <?php echo sprintf( __('Upgrade to %1$spremium version%2$s of %1$sYITH WooCommerce Deposits and Down Payments%2$s to benefit from all features!','yith-woocommerce-deposits-and-down-payments'),'<span class="highlight">','</span>' );?>
                </p>
                <a href="<?php echo $this->get_premium_landing_uri() ?>" target="_blank" class="premium-cta-button button btn">
                    <span class="highlight"><?php _e('UPGRADE','yith-woocommerce-deposits-and-down-payments');?></span>
                    <span><?php _e('to the premium version','yith-woocommerce-deposits-and-down-payments');?></span>
                </a>
            </div>
        </div>
    </div>
</div>