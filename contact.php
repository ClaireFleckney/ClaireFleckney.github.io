<!DOCTYPE PHP>
<html lang="en">
    <?php require 'library.php'; ?>
    <?php writeHead("Contact"); ?>
    <body>
        <?php writeTop();?>
        <div id="main" class="content">
                <h2>Contact</h2>
        </div>
        <div class="contact">
            <table class="contactTable" cellpadding='5'>
                <tr>
                    <td align="right">Phone:</td>
                    <td><a href="tel:14039291237">(403) 929-1237</a></td>
                </tr>
                <tr>
                    <td align="right">Email:</td>
                    <td><a href="mailto:claire.e.poulsen@gmail.com">claire.e.poulsen@gmail.com</a></td>
                </tr>
                <tr>
                    <td align="right">Pages:</td>
                    <td><a href="https://www.linkedin.com/in/claire-fleckney-53811a204/" target="_blank">LinkedIn</td>
                </tr>
                <tr>
                    <td></td>
                    <td><a href="https://github.com/ClairePoulsen" target="_blank">GitHub</a></td>
                </tr>
            </table>
        </div>
        <div class="contact">
            <form method="post" name="emailform" action="emailform.php">
                <table class="contactTable">
                    <tr>
                        <th colspan="2">Or you can fill out this form:</th>
                    </tr>
                    <tr>
                        <td align="right"><label for="name">Your Name:</label></td>
                        <td><input type="text" name="name" required/></td>
                    </tr>
                    <tr>
                        <td align="right"><label for="email">Your Email Address:</label></td>
                        <td><input type="text" name="email" required/></td>
                    </tr>
                    <tr>
                        <td align="right"><lable for="phone">Your Phone Number:</lable></td>
                        <td><input type="text" name="phone" /><small><em>*optional</em></small></td>
                    </tr>
                    <tr>
                        <td align="right"><label for="message">Your Message:</label></td>
                        <td><textarea name="message"></textarea></td>
                    </tr>
                    <tr>
                        <td align="center"><input type="reset" value="Clear Form" /></td>
                        <td align="center"><input type="submit" value="Send Form" /></td>
                    </tr>
                </table>
            </form>
        </div>
        <?php writeFooter("sticky"); ?>
    </body>
</html>