<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>epayco</title>
    <link rel="stylesheet" type="text/css" href="css/login_regist.css">
</head>
<body>

<center>
    <?php
    $precio = "10";
    $cantidad ="1";
    $descrip ="Cursos de Ingles";
     ?>
    <div>
        <h4>Implementado Pasarela de Epayco</h4>
     <img src="producto.png" alt="">
     <br>
     <span><?php echo $precio; ?>$ </span>
     <p><?php echo $descrip; ?></p>

<form>
    <script src='https://checkout.epayco.co/checkout.js'
        data-epayco-key='38f8e9cee71dd30fc10eb4b26fe30a69'
        class='epayco-button'
        data-epayco-amount='20000'
        data-epayco-tax='0'
        data-epayco-tax-base='10'
        data-epayco-name='Estrategia IPAVisual'
        data-epayco-description='Estrategia IPAVisual'
        data-epayco-currency='COP'    
        data-epayco-country='CO'
        data-epayco-test='true'
        data-epayco-external='false'
        data-epayco-response='ipavisual.com'  
        data-epayco-confirmation='ipavisual.com'
        data-epayco-button='https://369969691f476073508a-60bf0867add971908d4f26a64519c2aa.ssl.cf5.rackcdn.com/btns/boton_carro_de_compras_epayco6.png'>
    </script>
</form>

<form>
    <?php /*echo "
    <script src='https://checkout.epayco.co/checkout.js'
        data-epayco-key='38f8e9cee71dd30fc10eb4b26fe30a69'
        class='epayco-button'
        data-epayco-amount='$precio'
        data-epayco-tax='0'
        data-epayco-tax-base='10'
        data-epayco-name='$descrip'
        data-epayco-description='$descrip'
        data-epayco-currency='COP'
        data-epayco-country='CO'
        data-epayco-test='true'
        data-epayco-external='false'
        data-epayco-response='http://www.ipavisual.com'
        data-epayco-confirmation='ipavisual.com'
        data-epayco-button='https://369969691f476073508a-60bf0867add971908d4f26a64519c2aa.ssl.cf5.rackcdn.com/btns/boton_carro_de_compras_epayco6.png'>
    </script>" */ ?>
</form>
</div>
</center>

</body>
</html>
