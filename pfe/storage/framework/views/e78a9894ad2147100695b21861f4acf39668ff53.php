<!DOCTYPE html>
<html lang="en" class="no-js ie6 lt8">
<html lang="en" class="no-js ie7 lt8">
<html lang="en" class="no-js ie8 lt8">
<html lang="en" class="no-js ie9">
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <title>Inscription</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
    <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('utilisateur/css/demo.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('utilisateur/css/style.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('utilisateur/css/animate-custom.css')); ?>" />
</head>
<body>
<br> <br> <br> <br><br> <br>
<div class="container">
    <section>
        <div id="container_demo" >
            <a class="hiddenanchor" id="tologin"></a>
            <div id="wrapper">
                <div id="login" class="animate form">
                    <form  action="mysuperscript.php" autocomplete="on">
                        <h1> Inscription </h1>
                        <p>
                            <label for="usernamesignup" class="uname" data-icon="u">Nom et prenom</label>
                            <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="exemple exemple" />
                        </p>
                        <p>
                            <label for="emailsignup" class="youmail" data-icon="e" >Adresse Email</label>
                            <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="exemple@exemple.com"/>
                        </p>
                        <p>
                            <label for="passwordsignup" class="youpasswd" data-icon="p">Mot de passe</label>
                            <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="exemple:X8df!90EO"/>
                        </p>
                        <p>
                            <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Confirmer votre mot de passe </label>
                            <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="exemple:X8df!90EOs"/>
                        </p>
                        <p class="signin button">
                            <input type="submit" value="S'inscrire"/>
                        </p>
                    </form>
                </div>

            </div>
        </div>
    </section>
</div>
</body>
</html>