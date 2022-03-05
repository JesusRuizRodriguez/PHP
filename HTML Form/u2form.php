<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Document html">
    <meta name="author" content="Jesús.R">
    <meta name="keywords" content="computers,programing,web design,html,html5">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="lang" content="es-ES">
    
    <title>Unit 2, project</title>
</head>
<body>

    <main id="contenido">
        <form name="miformulario" method="post" action="form.php">
            <h1>Please input your data</h1>
                <fieldset>
                    <legend>Personal information</legend>
                        <fieldset>
                            <legend>Title:</legend>                                
                                    
                                    <input type="radio" name="title" id="ms">
                                    <label for="title">Ms.</label>
                                
                                    <input type="radio" name="title" id="mrs">
                                    <label for="title">Mrs.</label>
                                
                                    <input type="radio" name="title" id="mr">
                                    <label for="title">Mr.</label>
                                
                                    <input type="radio" name="title" id="dr">
                                    <label for="title">Dr.</label>

                                    <input type="radio" name="title" id="mx">
                                    <label for="title">Mx.</label>
                                    
                                    <input type="radio" name="title" id="ind" checked>
                                    <label for="title">Ind.</label>
                                
                        </fieldset>
                                <p>
                                    <label for="fname">First Name:</label>
                                    <input type="text" name="fname" id="name" required autofocus pattern="-*[a-zA-Z]*-*[a-zA-Z]*-*">

                                    <label for="lname">Last Name:</label>
                                    <input type="text" name="lname" id="lname" required pattern="-*[a-zA-Z]*-*[a-zA-Z]*-*">
                                </p>
                                <p>
                                    <label for="bdy">Birthdate:</label>
                                    <input type="date" name="bdy" id="bdy" required>
                                </p>
                                <p>
                                    <label for="city">City:</label>
                                    <input type="text" name="city" id="city" pattern="-*[a-zA-Z]*-*[a-zA-Z]*-*">

                                    <label for="region">Region:</label>
                                    <select name="region" id="region">

                                        <option value="" disabled selected>--Please select</option>

                                        <optgroup label="North">
                                            <option value="D">Durham</option>
                                            <option value="N">Northumberland</option>
                                            <option value="L">Lancashire</opntion>
                                        </optgroup>

                                        <optgroup label="Center">
                                            <option value="Y">Yorkshire</option>
                                            <option value="CH">Chesire</option>
                                            <option value="R">Rutland</option>
                                            <option value="WM">West Midlands</option>
                                        </optgroup>

                                        <optgroup label="South">
                                            <option value="K">Kent</option>
                                            <option value="E">Essex</option>
                                            <option value="Dor">Dorset</option>
                                            <option value="Devon">Devon</option>
                                            <option value="Cornwall">Cornwall</options>
                                        </optgroup>

                                    </select>

                                    <label for="pstcode">Postcode:</label>
                                    <input type="text" name="pstcode" id="pstcode" pattern="[0-9]{5}">

                                    <label for="rcode">Regional code:</label>
                                    <input type="text" name="rcode" id="rcode" >
                                </p>                                
                </fieldset>

                <fieldset>
                    <legend>Subscription information</legend>
                    
                    <p>
                        <label for="stype">Subscription type:</label>
                        <input type="text" name="stype" id="stype" list="subtype" required>

                        <datalist id="subtype" name="stype">
                            <option value="D" spellcheck="false">Daily Subscription</option>
                            <option value="W" spellcheck="false">Weekly Subscription</option>
                            <option value="Q" spellcheck="false">Quarterly Subscription</option>
                            <option value="M" spellcheck="false">Monthnly Subscription</option>
                            <option value="Y" spellcheck="false">Yearly Subscription</option>
                            <option value="U" spellcheck="false">Unlimited Subscription</option>
                        </datalist>

                        <label for="scode">Subscription code:</label>
                        <input type="text" name="scode" id="scode">
                    </p>

                    <fieldset>
                        <legend>Areas of interest:</legend>

                        <p>
                            <input type="checkbox" name="science" id="science">
                            <label for="science">Science</label>

                            <input type="checkbox" name="art" id="art">
                            <label for="art">Arts and Crafts</label>
                            
                            <input type="checkbox" name="literature" id="literature">
                            <label for="literature">Literature</label>

                            <input type="checkbox" name="tech" id="tech">
                            <label for="tech">Technology and Gadgets</label>

                            <input type="checkbox" name="imp" id="imp">
                            <label for="imp">Sefl Improvement</label>
                            
                        </p>
                        
                        
                    </fieldset>

                    <p>
                        <label for="pass">Password:</label>
                        <input type="password" name="pass" id="pass" placeholder="password" required>
                        
                    </p>

                </fieldset>

                <fieldset>
                    <legend>Billing details</legend>

                    <p>
                        <label for="card">Credit Card Type:</label>
                        <select name="card" id="card">

                            <option value="" disabled selected>--Please select</option>
                            
                                <option value="Visa">Visa</option>
                                <option value="Master">MasterdCard</option>
                                <option value="Maestro">Maestro</opntion>
                            
                        </select>

                        <label for="cnumber">Card Number:</label>
                        <input type="text" name="cnumber" id="cnumber" required >
                    </p>
                    <p>
                        <label for="code">If you have a discount code please enter it here:</label>
                        <input type="text" name="code" id="code" placeholder="code">
                    </p>

                    <br>
                    
                    <p>
                        <label>Adittionally, you are welcome to donate an amount of your choosing to "Save the children"</label>
                    </p>
                    <p>
                        <label for="donate">Please enter your donation(from 0 to 50$):</label>
                        <input type="range" name="donate" id="donate" min="0" max="50" value="5">
                    </p>
                    
                </fieldset>
                <fieldset>
                    <legend>Feedback</legend>

                    <p>
                        <label>We would love to hear your suggestions to improve our site.</label>
                    </p>
                    <p>
                        <textarea id="txtarea" name="txtarea" rows="5" cols="40" spellcheck="true"></textarea>
                    </p>

                </fieldset>
            <p>
                <input type="submit" value="Send data">
            </p>
            
        </form>
    </main>

</body>
</html>