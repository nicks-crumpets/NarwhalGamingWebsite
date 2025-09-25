<!DOCTYPE html>
<html lang="en">
<head>
    <!-- This website uses tailwind css -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script rel = "stylesheet" src = "global.css"></script>
    <script rel = "stylesheet" src = "index.css"></script>
    <meta charset="UTF-8">
    <title>Narwhal Gaming - Store</title>
</head>

<body class = "bg-gray-800 text-white ">

<div class = "flex flex-col h-screen justify-between">
    <header>
        <?php
        include 'header.php';
        ?>
    </header>

    <main class="mb-auto">
        <div class = "grid grid-cols-1 gap-0 text-center font-bold text-2xl">
            <p>HOLLOW KNIGHT OUT NOW</p>
        </div>
        <div class = "grid grid-cols-1 gap-0">


            <!-- !!!!Add a separate small class to make the header have less height and maybe make the games smaller? -->
            <div class = "flex justify-center items-center p-4">

                <div class = "bg-white rounded-lg shadow-lg overflow-hidden w-full max-w-7xl">

                    <!-- Content -->
                    <div class = "flex space-x-4">
                        <img
                                src = "images/hollow_knight_headder.jpg"
                                class = "h-80 w-full object-cover"
                                alt = "Placeholder image"
                        />
                    </div>
                </div>



            </div>
            <div class = "grid 2xl:grid-cols-7 xl:grid-cols-6 lg:grid-cols-5 md:grid-cols-4 sm:grid-cols-3 gap-4 mx-10">
                <div class = "rounded-xl bg-black">
                    <img class = "rounded-t-xl" src = "images/max_payne_3.png" alt = "placeholder">
                    <div class = "grid grid-cols-2 m-1.5 ml-3.5">
                        <div>

                            <svg width = "25" viewBox="0 0 128 128">
                                <path fill="white" d="M67.328 67.331h60.669V128H67.328zm-67.325 0h60.669V128H.003zM67.328 0h60.669v60.669H67.328zM.003 0h60.669v60.669H.003z"></path>
                            </svg>

                        </div>
                        <div>
                            <p class = "text-right font-bold">
                                <?php
                                $PRICE = 4.20;
                                echo "£" . number_format($PRICE, !($PRICE == (int)$PRICE) * 2);
                                ?>
                            </p>
                        </div>

                    </div>
                </div>

                <div class = "rounded-xl bg-black">
                    <img class = "rounded-t-xl" src = "images/watch_dogs.png" alt = "placeholder">
                    <div class = "grid grid-cols-2 m-1.5 ml-3.5">
                        <div>

                            <svg width = "25" viewBox="0 0 128 128">
                                <path fill="white" d="M67.328 67.331h60.669V128H67.328zm-67.325 0h60.669V128H.003zM67.328 0h60.669v60.669H67.328zM.003 0h60.669v60.669H.003z"></path>
                            </svg>

                        </div>
                        <div>
                            <p class = "text-right font-bold">
                                <?php
                                $PRICE = 6.20;
                                echo "£" . number_format($PRICE, !($PRICE == (int)$PRICE) * 2);
                                ?>
                            </p>
                        </div>

                    </div>
                </div>

                <div class = "rounded-xl bg-black">
                    <img class = "rounded-t-xl" src = "images/hollow-knight-silksong.png" alt = "placeholder">
                    <div class = "grid grid-cols-2 m-1.5 ml-3.5">
                        <div>

                            <svg width = "25" viewBox="0 0 128 128">
                                <path fill="white" d="M67.328 67.331h60.669V128H67.328zm-67.325 0h60.669V128H.003zM67.328 0h60.669v60.669H67.328zM.003 0h60.669v60.669H.003z"></path>
                            </svg>

                        </div>
                        <div>
                            <p class = "text-right font-bold">
                                <?php
                                $PRICE = 16.75;
                                echo "£" . number_format($PRICE, !($PRICE == (int)$PRICE) * 2);
                                ?>
                            </p>
                        </div>

                    </div>
                </div>
                <div>05</div>
                <div>06</div>
                <div>07</div>
                <div>08</div>
                <div>09</div>
                <div>10</div>
                <div>11</div>
                <div>12</div>


            </div>
    </main>

    <footer class="">
        <?php
        include 'footer.php';
        ?>
    </footer>
</div>






</body>
</html>