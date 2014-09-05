<!DOCTYPE html>
    
    <?php
        if (isset($_POST["amountMoney"]) && isset($_POST["annualAmound"]) && isset($_POST["currency"]) && isset($_POST["period"])) {
            $interest = $_POST["period"];
            $annualAmound = $_POST["annualAmound"];
            $interestPerMonth = ($annualAmound / 12) / 100;
            $money = $_POST["amountMoney"];
            $currency = $_POST["currency"];
             
            if ($interest == "6thMonths") {
                $interest = 6;
            } elseif ($interest == "1Year") {
                $interest = 12;
            } elseif ($interest == "2Years") {
                $interest = 24;
            } else {
                $interest = 60;
            }
                
            $moneyFirstMonth = ($money * $interestPerMonth) + $money;
            for ($i = 1; $i < $interest; $i++) {
            $moneyNextMonth = ($moneyFirstMonth * $interestPerMonth) + $moneyFirstMonth;
            $moneyFirstMonth = $moneyNextMonth;
            }
            $result = number_format($moneyNextMonth, 2, '.', '');
            
            if ($currency == "usa") {
                $result = "$ " . $result;
            } elseif ($currency == "eu") {
                $result = "&#128; " . $result;
            } elseif ($currency == "bgn") {
                $result = $result . " Lv.";
            }
            
            echo $result;
            
            }
    ?>
    
    <html>
        <head>
            <title></title>
        </head>
        <body>
            <form action = "CalculateInterest.php" method = "post">
                <label for = "money">Enter Amount </label><input type = "text" name = "amountMoney" id = "money" /> </br>
                <input type = "radio" name = "currency" id = "USA" value = "usa" />
                <label for = "USA">USD</label>
                <input type = "radio" name = "currency" id = "EU" value = "eu" />
                <label for = "EU">EUR</label>
                <input type = "radio" name = "currency" id = "BG" value = "bgn" />
                <label for = "BG">BGN</label></br>
                <label for = "annualAmound">Compound Interest Amound </label><input type = "text" name = "annualAmound" id = "annualAmound" /></br>
                <select name = "period">
                    <option value = "6thMonths">6 Months</option>
                    <option value = "1Year">1 Year</option>
                    <option value = "2Years">2 Years</option>
                    <option value = "5Years">5 Years</option>
                </select>
                <input type = "submit" name = "calculate" value = "Calculate" />
            </form>
            <?php
                if(isset($result)) {
                    echo $result;
                }
            ?>
        </body>
    </html>
    
    