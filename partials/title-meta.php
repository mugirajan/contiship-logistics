<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contiship logistics<?= isset($title) ? $title : '' ?></title>
<!-- fav icon -->
<?php if (isset($logo2)): ?>
    <link rel="shortcut icon" href="assets/img/icon/ca-fav2.svg">
<?php elseif (isset($logo1)): ?>
    <link rel="shortcut icon" href="assets/img/icon/ca-fav1.svg">
<?php elseif (isset($logo4)): ?>
    <link rel="shortcut icon" href="assets/img/icon/ca-fac4.svg">
<?php else: ?>
    <link rel="shortcut icon" href="assets/img/icon/ca-fav-3.svg">
<?php endif; ?>