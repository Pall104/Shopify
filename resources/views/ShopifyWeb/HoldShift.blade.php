<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Hold Shift to Check Multiple Checkboxes</title>
</head>
<body>
  <style>

    html {
      font-family: sans-serif;
      background:#ffc600;
    }

    .inbox {
      max-width:400px;
      margin:50px auto;
      background:white;
      border-radius:5px;
      box-shadow:10px 10px 0 rgba(0,0,0,0.1);
    }

    .item {
      display:flex;
      align-items:center;
      border-bottom: 1px solid #F1F1F1;
    }

    .item:last-child {
      border-bottom:0;
    }


    input:checked + p {
      background:#F9F9F9;
      text-decoration: line-through;
    }

    input[type="checkbox"] {
      margin:20px;
    }

    p {
      margin:0;
      padding:20px;
      transition:background 0.2s;
      flex:1;
      font-family:'helvetica neue';
      font-size: 20px;
      font-weight: 200;
      border-left: 1px solid #D1E2FF;
    }


  </style>
   <!--
   The following is a common layout you would see in an email client.

   When a user clicks a checkbox, holds Shift, and then clicks another checkbox a few rows down, all the checkboxes inbetween those two checkboxes should be checked.

  -->
  <div class="inbox">
    <div class="item">
      <input type="checkbox">
      <p>This is an inbox layout.</p>
    </div>
    <div class="item">
      <input type="checkbox">
      <p>Check one item</p>
    </div>
    <div class="item">
      <input type="checkbox">
      <p>Hold down your Shift key</p>
    </div>
    <div class="item">
      <input type="checkbox">
      <p>Check a lower item</p>
    </div>
    <div class="item">
      <input type="checkbox">
      <p>Everything inbetween should also be set to checked</p>
    </div>
    <div class="item">
      <input type="checkbox">
      <p>Try do it without any libraries</p>
    </div>
    <div class="item">
      <input type="checkbox">
      <p>Just regular JavaScript</p>
    </div>
    <div class="item">
      <input type="checkbox">
      <p>Good Luck!</p>
    </div>
    <div class="item">
      <input type="checkbox">
      <p>Don't forget to tweet your result!</p>
    </div>
  </div>

<script>
const checkboxes = document.querySelectorAll('.inbox input[type="checkbox"]');

let lastChecked;

function handleCheck(e) {
  // Check if they had the shift key down
  // AND check that they are checking it
  let inBetween = false;
  if (e.shiftKey && this.checked) {
    // go ahead and do what we please
    // loop over every single checkbox
    checkboxes.forEach(checkbox => {
      console.log(checkbox);
      if (checkbox === this || checkbox === lastChecked) {
        inBetween = !inBetween;
        console.log('Starting to check them inbetween!');
      }

      if (inBetween) {
        checkbox.checked = true;
      }
    });
  }

  lastChecked = this;
}

checkboxes.forEach(checkbox => checkbox.addEventListener('click', handleCheck));
</script>
</body>
</html>
