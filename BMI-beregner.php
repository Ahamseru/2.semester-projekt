<?php
/*
Template Name: BMI beregner
*/
?>

<?php get_header(); ?>

<div class="row">

    <div class="col-md-6" id="bmi-section">


        <title>BMI Beregner</title>
        <script type="text/javascript">
            function computeBMI() {
                //Erklærer variablerne højde og vægt
                var height = Number(document.getElementById("height").value);
                var weight = Number(document.getElementById("weight").value);


                //Beregner BMI
                var BMI = weight / Math.pow(height / 100, 2);

                //Udskriver resultatet til (med to decimaler)
                document.getElementById("output").innerText = BMI.toFixed(2);

                //Gemmer resultatet i "output" for at kunne sammenligne med følgende værdier. Herefter udskrives den korrekte BMI værdi, og den korresponderende tekst dertil.
                var output = BMI.toFixed(1);
                if (output < 18.5)
                    document.getElementById("comment").innerText = "Undervægtig";
                else if (output >= 18.5 && output <= 25)
                    document.getElementById("comment").innerText = "Normalvægtig";
                else if (output >= 25 && output <= 30)
                    document.getElementById("comment").innerText = "Overvægtig";
                else if (output > 30)
                    document.getElementById("comment").innerText = "Svært overvægtig";

            }
        </script>


        <h1>Body Mass Index Udregner</h1>
        <p>Indsæt din højde (cm): <input type="text" id="height" />
        </p>
        <br>
        <p>Indsæt din vægt (kg): <input type="text" id="weight" />
        </p>
        <br>
        <input type="submit" value="Beregn BMI" onclick="computeBMI();">
        <br>
        <br>
        <h1>Din BMI er: <span id="output">?</span></h1>

        <h2>Du er: <span id="comment"> ?</span> </h2>

    </div>




    <div class="col-md-6">

        <img src="http://ahma03242.apache.eadania.dk/wp-content/uploads/2020/06/COLOURBOX6485663-1-scaled.jpg"
            id="bmi-img" alt="">

    </div>

</div>


<?php get_footer(); ?>