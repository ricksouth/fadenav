# FadeNav
An infinite horizontal scrolling fading navigation using HTML, PHP, JS, JQuery and CSS. The navigation is controlled by the ***arrow keys***.

A demo (without PHP) is available [here](https://fadenav.natamus.com/demo.html).

# How it works:
Inside the header:
```html
<!-- 1. Include CSS stylesheet (fadenav.css) -->
<link rel="stylesheet" href="fadenav.css">
```
Inside the body:
```php
<?php
  // 2. Create array of navigation values.
  $fadenav = array("one", "two");

  // 3. Include PHP script (fadenav.php)
  include 'fadenav.php';
?>
```
Inside the footer:
```html
<!-- 4. Include JQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<!-- 5. Include Javascript script (fadenav.js) -->
<script type="text/javascript" src="fadenav.js"></script>
```
```html
<!-- 6. (Optional) Process the navigation change -->
<script>
  var randomized = 0;
  function processFadeNav(value) {
    var num = Math.floor((Math.random() * 100000) + 1);
    randomized = num;

    $.ajax({
      type: "POST",
      url: "/path/to/get.php",
      data: { 
        data : value
      },
      success: function(data) {
        if (num == randomized) {
          $("#id").html(data);
        }
      },
      error: function(data) {}
    });
  }
</script>
```
###### The processFadeNav(value) function is ran whenever the navigation changes, where value is the active navigation value. The randomized number makes sure only the last selected value is processed after fast switching.

Or see this [file](https://github.com/natamus/fadenav/blob/master/example.php) for a complete example.