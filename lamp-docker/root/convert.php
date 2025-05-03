<html lang="en">

<body>
    <section>
        <form action="convert.php" method="post">
            <label for="amount">Amount</label>
            <input id="amount" name="amount">
            <label for="crypto">Cryptocurrency</label>
            <select id="crypto" name="crypto">
                <option>BTC</option>
                <option>ETH</option>
            </select>
            <button type="submit">Convert</button>
        </form>
    </section>
    <?php

    require "classes.php";
    if (isset($_POST["amount"]) && isset($_POST["crypto"])) {
        $amount = $_POST["amount"];
        $crypto = $_POST["crypto"];

        $converter = new CryptoConverter($crypto);
        $result = $converter->convert($amount);

        echo "<h2>you want to convert $amount $crypto.</h2>";
        echo "<h2>You have USD $result </h2>";
    } else {
        echo ('<h2>Ops! It didn\'t work. Try again</h2>');
    }
    ?>
</body>

</html>
