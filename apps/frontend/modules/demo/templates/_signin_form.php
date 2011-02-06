<?php if(!$sf_user->isAuthenticated()):?>
        <script type="text/javascript">
            $(function(){
                $("#signin_href").click(function () {
                    $(".sign_popup").toggle(); return false;
                    }); 
            });
        </script>
    <div class="sign_popup" <?if(!$form['username']->hasError()){?> style="display:none;"<?}?>>
            <?php
            $err = ""; 
            if($form['username']->hasError()):?>
            <p class="error"> We don't seem to know you yet.<br /> <a href="<?php echo url_for('/customer/new') ?>">Sign Up</a> or try another username.</p>
            <?php
             $err = " error_text"; 
             endif; ?>
            <form action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
            <?php echo $form['_csrf_token']; ?>
            <strong>User name</strong>
            <?php echo $form['username']->render(array('class'=>"text".$err)); ?>
            <strong>Password</strong>
            <?php echo $form['password']->render(array('class'=>"text".$err)); ?>
                <div class="bottom_sign_popup">
                    <input type="submit" value="" class="sign_in" />
                    <div class="memory">
                        <label><?php echo $form['remember']->render(); ?> Stay signed in</label><br />
                        <a href="<?php echo url_for('/customer/forgotpass') ?>">Forgot password?</a>
                    </div>
                </div>
            </form>
        </div>
    <div class="sign"><a href="<?php echo url_for('/customer/new') ?>">Sign Up</a>|<a href="#" id="signin_href">Sign In</a>  <div class="fb"><img src="/img/temp/fb.png" /></div> </div>
<?php else: ?>
    <div class="sign"><a href="#"><?php echo $sf_user->getUsername();?></a>|<a href="<? echo url_for('@sf_guard_signout'); ?>">Logout</a></div>
<?php endif; ?>
