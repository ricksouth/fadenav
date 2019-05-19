# fadenav
An infinite horizontal scrolling fading navigation.

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

For a complete example
<a href="https://github.com/natamus/fadenav/blob/master/example.php" target=_blank>example.php</a>