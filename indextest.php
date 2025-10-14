<!DOCTYPE html>
<html lang="en">
<head>
    <!-- This website uses tailwind css -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script rel = "stylesheet" src = "global.css"></script>
    <script rel = "stylesheet" src = "index.css"></script>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body class = "bg-gray-800 text-white">

<div class="flex flex-col h-screen justify-between">
    <?php
    include 'header.php';
    ?>
    <main class="mb-auto h-10 bg-green-500">Content</main>
    <?php
    include 'footer.php';
    ?>
</div>

</body>
</html>