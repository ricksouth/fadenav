# fadenav
An infinite horizontal scrolling fading navigation.

# How it works:
```html
<header>
<!-- 1. Include CSS stylesheet (fadenav.css) -->
<link rel="stylesheet" href="fadenav.css">
</header>
```
```php
<body>
<?php
// 2. Create array of navigation values.
$fadenav = array("one", "two");

// 3. Include PHP script (fadenav.php)
include 'fadenav.php';
?>
</body>
```
```html
<footer>
<!-- 4. Include JQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<!-- 5. Include Javascript script (fadenav.js) -->
<script type="text/javascript" src="fadenav.js"></script>
</footer>
```

For a complete example:
https://github.com/natamus/fadenav/blob/master/example.php