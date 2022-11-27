<?php

    // I'll have that tyvm
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        require_once Path::root("database/Pot.php");
        (new PotDB())->yoink();
    }

?>
<style><?= Page::css("pages/index") ?></style>
<section>
    <div id="title" class="container">
        <h1>Sign In to mydlink</h1>
    </div>
</section>
<section>
    <div id="login" class="content container">
        <form method="POST">
            <?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
                <p class="error">Invalid username or password. Please try again.</p>
            <?php endif; ?>
            <div>
                <label>Username</label>
                <input type="text" name="username">
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="password">
            </div>
            <input type="submit" value="Log in">
        </form>
        <aside>
            <h2>Not Registered yet?</h2>
            <p>To get started with mydlink cloud services, you need to have a mydlink-enabled product. Learn more about supported products <a href="https://se.mydlink.com/content/productfamily">here</a>.</p>
            <p>Please follow the steps in order to register your mydlink-enabled product and get access to both mydlink.com and our mobile apps. Learn more details <a href="https://se.mydlink.com/content/notreg">here</a>.</p>
        </aside>
    </div>
</section>