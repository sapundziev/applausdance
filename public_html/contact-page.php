<?php session_start(); ?>
<?php
    $page = 'Contact';
    include('templates/header.php');
?>

<div class="content-wrapper">

    <div class ="text-wrapper">
        <div class="main-content clearfix">
            <h1 class="page-title">Свържете се с нас!</h1>
            <div id="contact-form">
                <!--form method="post" action="#">
                    <table>
                        <tfoot>
                            <tr>
                                <td colspan="4">
                                    <input type="submit" value="Изпрати запитване" />
                                </td>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <th>
                                    <label for="lname">Име</label>
                                </th>
                                <td colspan="3">
                                    <input type="text" name="name" id="name" placeholder="Вашето име" />
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="mail">E-mail</label>
                                </th>
                                <td colspan="3">
                                    <input type="text" name="mail" id="mail" placeholder="sample@sample.com" />
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <label for="phone">Телефон</label>
                                </th>
                                <td colspan="3">
                                    <input type="text" name="phone" id="phone" placeholder="+359899000000" />
                                </td>
                            </tr>
                            
                            <tr>
                                <th>
                                    <label for="comm">Съобщение</label>
                                </th>
                                <td colspan="3">
                                    <textarea name="comm" id="comm" placeholder="Моля оставете Вашето съобщение тук"></textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form-->
				<?php include('templates/form/contact-form.php');?>
            </div><!-- end of .contact-form -->
            
            <div id="contact-box">
                <div id="contact-info">
                    <p class="primary">София, 1618<br />
                        бул. Цар Борис III, №375
                    </p>
                    <p class="secondary">тел: +359 892 958 923<br />
                        e-mail: contact@applausdance.com
                    </p>
                </div><!-- end of #contact-info -->
                
                <div id="google-map">
                    <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2934.139091461985!2d23.2398802!3d42.658407800000006!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40aa9b50c5a03093%3A0x79280f4feb3c8c54!2z0LHRg9C70LXQstCw0YDQtCDigJ7QptCw0YAg0JHQvtGA0LjRgSBJSUnigJwgMzc1LCAxNjE5IFNvZmlh!5e0!3m2!1sen!2sbg!4v1406118634714"></iframe><br /><small><a href="https://www.google.bg/maps/place/%D0%B1%D1%83%D0%BB%D0%B5%D0%B2%D0%B0%D1%80%D0%B4+%E2%80%9E%D0%A6%D0%B0%D1%80+%D0%91%D0%BE%D1%80%D0%B8%D1%81+III%E2%80%9C+375,+1619+Sofia/@42.6584078,23.2398802,17z/data=!3m1!4b1!4m2!3m1!1s0x40aa9b50c5a03093:0x79280f4feb3c8c54&amp;source=embed" style="color:#FFF;text-align:left" target="_blank">Вижте по-голяма карта</a></small>
                </div><!-- end of #google-map -->
            </div><!-- end of #contact-box -->
        </div><!-- end of .main-content -->      
            
    </div> <!-- end of .text-wrapper -->

<?php include('templates/aside.php') ?>

</div><!-- end of .content-wrapper -->

<?php include('templates/footer.php') ?>



