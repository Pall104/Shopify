<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Scoped CSS Variables and JS</title>
  <link rel="stylesheet" type="text/css" href="css/variables.css">
</head>
<body>
  <h2>Update CSS Variables with <span class='hl'>JS</span></h2>

  <div class="controls">
    <label for="spacing">Spacing:</label>
    <input id="spacing" type="range" name="spacing" min="10" max="200" value="10" data-sizing="px">

    <label for="blur">Blur:</label>
    <input id="blur" type="range" name="blur" min="0" max="25" value="10" data-sizing="px">

    <label for="base">Base Color</label>
    <input id="base" type="color" name="base" value="#ffc600">
  </div>

  <img src="https://www.w3schools.com/howto/img_fjords.jpg">

  <script>
    const inputs = document.querySelectorAll('.controls input');

    function handleUpdate() {
      const suffix = this.dataset.sizing || '';
      document.documentElement.style.setProperty(`--${this.name}`, this.value + suffix);
    }

    inputs.forEach(input => input.addEventListener('change', handleUpdate));
    inputs.forEach(input => input.addEventListener('mousemove', handleUpdate));
  </script>


</body>
</html>
