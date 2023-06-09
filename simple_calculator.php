<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/mobile.css?<?php echo mt_rand() ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Calculator</title>
</head>

<body>
    <nav class="navigation max-width-3 m-auto">
        <div class="nav-left">
            <a href="/">
                <span><img src="img/logo.png" width="94px" alt=""></span>
            </a>
            <h1>My Finance Goal</h1>
        </div>
        <div class="nav-right">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Calculators
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="calculator.php">Compound Calculator</a>
                <a class="dropdown-item" href="simplecalculator.php">Simple Calculator</a>
                <a class="dropdown-item" href="sipcalculator.php">SIP Calculator</a>
                </div>
            </li>  
            <!-- <li><a href="goal_plan.php">Goal Plan</a></li>  -->
                <li><a href="contact.php">Send Query</a></li>
            </ul>
        </div>
    </nav>
    <div class="max-width-1 m-auto">
        <hr>
    </div>
    <div class="calculator max-width-1 m-auto font2 ">
        <img src="img/payroll.svg" class="bg">
        <div class="max-width-3 m-auto mx-1">
            <h2 class="text-center mb-4">Simple Interest Calculator</h2>
            <div class="row text-center">
                <div class="col-xl-8 m-auto" style="box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.3);  padding:2rem; border-radius: 5%;">

            <div class="values">
                <div class="valueinput">
                    <input type="number" id="pa" placeholder="Starting balance" style="width: 68%;padding:6px;">
                </div>
                <div class="valueinput">
                    <input type="number" id="ir" placeholder="Interest Rate %" style="width: 68%;padding:6px;">
                    
                </div>
                <!-- <div class="valueinput">
                    <label for="" class="pt-4 font-weight:bold;">(optional)</label><br>
                    <input type="date" id="calender"style="width: 70%;padding:6px;">
                </div> -->
                <div class="valueinput" id="count">
                    <input type="number" id="years" placeholder="years" style="width: 22.5%; padding:6px;">
                    <input type="number" id="months" placeholder="months" style="width: 22.5%; padding:6px;">
                    <input type="number" id="days" placeholder="days" style="width: 22.5%;padding:6px;">
                </div>
               
                <div class="valueinput">
                    <button class="answer " onclick="calculate()" style="width: 68%; padding-top: .7rem;">Calculate</button>
                </div>
            <h2 id="text" class="text-center" style="display: none; background-color: #efecd6; width:70%; font-size:1.2rem; box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.3); 
                     padding:1rem; margin: auto; margin-top: 30px; border-radius:8%; ">Your Future investment value is ₹ <span id="value_text" style="color: #cd6c00;"></span></h2>
            </div>
            </div>
            </div>
        </div>
    </div>
    </div>

    <div class=" footer">
        <p>Copyright &copy;My Finance Goal</p>
        <a href="https://www.vecteezy.com/free-vector/typewriter">Vector Credits: Vecteezy</a>
    </div>
    <script>
    // A = P(1 + rt)
    let starting_balance = document.getElementById("pa");
    let interest_rate = document.getElementById("ir");
    let years = document.getElementById("years");
    let months = document.getElementById("months");
    let days = document.getElementById("days");
    let value_text = document.getElementById("value_text");
    let text = document.getElementById("text");
    const calculate = () => {
    let p = parseInt(starting_balance.value);
    let r = parseInt(interest_rate.value) / 100;
    let t;
    if(months.value){
        t = parseInt(years.value) + parseInt(months.value) * 0.0833334 + parseInt(days.value)  * 0.00273973;
    }else{
        t = parseInt(years.value)
    }
    let A = p * (1 + r *t);
    value_text.innerHTML = A.toFixed(2);
    text.style.display = "block"
};

    </script>
</body>

</html>

</html>
