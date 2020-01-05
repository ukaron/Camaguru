<?php include('header.php');?>
    <div class="main_block">
        <div class="main">
            <div class="form">
                <h1>Sign in</h1>
                <form action="" method="GET" name="sign_in">
                    <table>
                        <tr>
                            <th><input type="text" class="form-control" name="login" id="login"
                                   placeholder="Input login"></th>
                        </tr>

                        <tr>
                            <th> <input type="text" class="form-control" name="pass" id="pass"
                                   placeholder="Input password"></th>
                        </tr>
                        <tr>
                            <th>  <input id="bottom" type="submit" name="submit" value="OK"></th>
                        </tr>
                    </table>
                </form>
                <ul id="nav">
                    <li><a href="create.php">Create an account</a></li>
                    <li><a href="#">Forgotten password?</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer">
<?php include('footer.php');?>