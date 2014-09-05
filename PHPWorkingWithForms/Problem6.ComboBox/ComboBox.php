<!DOCTYPE html>
<html>
<head>
    <title>Combo Box</title>
    <script>
        function getContinent() {
            var continent = document.getElementById("continents").value;
            document.getElementById("selected").setAttribute("value", continent);

            window.location.href = 'http://localhost/WorkingWithForms/Problem6.ComboBox/ComboBox.php?continent=' + continent;
            document.getElementById("continents").value = hidden.value;
        }
        function onlyOnLoad() {
            var selected = "<?php
                                if(isset($_GET['continent'])) {
                                    echo $_GET['continent'];
                                    }?>";
            document.getElementById("null").innerText = selected;
        }
    </script>
    <style>
        select {
            width:160px;
        }
    </style>
</head>
<body onload="onlyOnLoad()">
<input type="hidden" id="selected" name="selectedVal" value="null"/>
<form action="" method="get">
    <select name="continents" id="continents" onchange="getContinent()">
        <option value="empty" id="null" selected disabled></option>
           <option value="Europe">Europe</option>
          <option value="Asia">Asia</option>
          <option value="North America">North America</option>
          <option value="South America">South America</option>
          <option value="Australia">Australia</option>
          <option value="Africa">Africa</option>
          <option value="Antarctica">Antarctica</option>
    </select>
    <select name="countries" id="countries">
        <?php

        if(isset($_GET['continent'])) {
            $_SESSION['cont'] = $_GET['continent'];
            $continent = $_GET['continent'];

            if($continent == "Europe") {
                $options = '<option value="Croatia">Croatia</option>' .
                    '<option value="Germany">Germany</option>' .
                    '<option value="England">England</option>' .
                    '<option value="Bulgaria">Bulgaria</option>' .
                    '<option value="Latvia">Latvia</option>' .
                    '<option value="Russia">Russia</option>' .
                    '<option value="Ukraine">Ukraine</option>' .
                    '<option value="Italy">Italy</option>';
                echo $options;
            }
            elseif($continent == "Asia") {
                $options = '<option value="China">China</option>' .
                    '<option value="Mongolia">Mongolia</option>' .
                    '<option value="India">India</option>' .
                    '<option value="Indonezia">Indonezia</option>' .
                    '<option value="Vietnam">Vietnam</option>' .
                    '<option value="Khazakstan">Khazakstan</option>' .
                    '<option value="Uzbekistan">Uzbekistan</option>' .
                    '<option value="Iran">Iran</option>';
                echo $options;
            }
            elseif($continent == "North America") {
                $options = '<option value="Canada">Canada</option>' .
                    '<option value="America">America</option>' .
                    '<option value="Mexico">Mexico</option>';
                echo $options;
            }
            elseif($continent == "South America") {
                $options = '<option value="Venetzuela">Venetzuela</option>' .
                    '<option value="Brazil">Brazil</option>' .
                    '<option value="Argentina">Argentina</option>' .
                    '<option value="Chillie">Chillie</option>' .
                    '<option value="Lima">Lima</option>' .
                    '<option value="Caracas">Caracas</option>' .
                    '<option value="Cali">Cali</option>' .
                    '<option value="Bogota">Bogota</option>';
                echo $options;
            }
            elseif($continent == "Australia") {
                $options = '<option value="Australia">Australia</option>';
                echo $options;
            }
            elseif($continent == "Africa") {
                $options = '<option value="Nigeria">Nigeria</option>' .
                    '<option value="Cambozzia">Cambozzia</option>' .
                    '<option value="Maroco">Maroco</option>' .
                    '<option value="Egypt">Egypt</option>' .
                    '<option value="Tanzania">Tanzania</option>' .
                    '<option value="Ghana">Ghana</option>' .
                    '<option value="Algeria">Algeria</option>' .
                    '<option value="Cot di Voar">Cot di Voar</option>';
                echo $options;
            }
            elseif($continent == "Antarctica") {
                $options = '<option value="ISS">ISS</option>';
                echo $options;
            }
        }
        ?>

    </select>
</form>
</body>
</html>