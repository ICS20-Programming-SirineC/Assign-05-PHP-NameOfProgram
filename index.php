<!DOCTYPE html>
<html>
   <head>
      <!-- Metadata -->
      <meta charset="utf-8" />
      <meta name="description" content="Assign-05-PHP-NumberCalculator" />
      <meta name="keywords" content="immaculata, ics2o" />
      <meta name="author" content="Sirine Cherkaoui" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />

      <!-- Title -->
      <title>Number Calculator, with PHP</title>

      <!-- Favicon -->
      <link rel="apple-touch-icon" sizes="180x180" href="./fav/apple-touch-icon.png" />
      <link rel="icon" type="image/png" sizes="32x32" href="./fav/favicon-32x32.png" />
      <link rel="icon" type="image/png" sizes="16x16" href="./fav/favicon-16x16.png" />
      <link rel="manifest" href="./fav/site.webmanifest" />

      <!-- CSS file -->
      <link rel="stylesheet" type="text/css" href="css/style.css">

      <!-- Material Design Lite -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_orange-cyan.min.css">
      <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
   </head>
   <body>

      <!-- MDL Progress Bar with Buffering -->
      <div id="p3" class="mdl-progress mdl-js-progress"></div>
      <script>
         document.querySelector('#p3').addEventListener('mdl-componentupgraded', function() {
            this.MaterialProgress.setProgress(33);
            this.MaterialProgress.setBuffer(87);
         });
      </script>

      <!-- MDL layout -->
      <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
         <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
               <span class="mdl-layout-title">Number Calculator, with PHP</span>
            </div>
         </header>

         <!-- Body text -->
         <?php echo"<h5>Welcome! This program will calculate the sum of either even or odd numbers from the minimum up to the maximum integer you enter. Have fun!</h5>" ?>

         <!-- Card for user input -->
         <main class="mdl-layout__content">
            <div class="mdl-grid">
               <div class="mdl-cell mdl-cell--6-col">
                  <div class="mdl-card mdl-shadow--2dp my-card">
                     <div class="mdl-card__title">
                        <center><h6 class="mdl-card__title-text">Enter a minimum and maximum integer and select your number type:</h6></center>
                     </div>

                     <!-- Image -->
                     <center><img src="./image/numbers.jpg" alt="Numbers" width="300" height="300"></center>

                     <!-- Form for user input of integer range -->
<form action="./results.php" method="post"    target="results">                                <!-- Textfield for minimum value -->
                        <center>
                           <div class="mdl-textfield mdl-js-textfield">
                              <input class="mdl-textfield__input" type="number" id="min-value" name= "min-value" onfocus="removePlaceholder()">
                              <label class="mdl-textfield__label" id="min-value" name="min-value"  for="min-value">Min Value</label>
                           </div>
                        </center>

                        <!-- Textfield for maximum value -->
                        <center>
                           <div class="mdl-textfield mdl-js-textfield">
                              <input class="mdl-textfield__input" type="number" id="max-value" name= "max-value" onfocus="removePlaceholder()">
                              <label class="mdl-textfield__label" id="min-value" name="max-value" for="max-value">Max Value</label>
                           </div>
                        </center>

                        <!-- Dropdown menu for number type -->
                        <center>
                           <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                              <select class="mdl-textfield__input" name="number-type">

                                 <option value="unselected" disabled selected style="color: grey;" disabled></option>
                                 <option value="even">Even</option>
                                 <option value="odd">Odd</option>
                              </select>
                              <label class="mdl-textfield__label" for="number-type">Number Type</label>
                           </div>
                        </center>

                        <!-- MDL Button -->
                        <center>
                           <input type="submit" id="button" value="Calculate" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                        </center>
                     </form>

                     <br>

                     <!-- Div to display sum back to user -->
      <iframe name="results" id="results"></iframe>

                     <br>
                     <br>
                  </div>
               </div>
            </div>
         </main>
      </div>
   </body>
</html>
