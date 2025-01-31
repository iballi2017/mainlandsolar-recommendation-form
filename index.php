<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon"
        href="https://mainlandsolar.com/wp-content/uploads/2022/02/cropped-navbrand-logo-min.png">
    <title>Mainlandsolar | Recommendation Form</title>
    <!-- Tailwindcss -->
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <!-- Flowbite -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.1/dist/flowbite.min.css" rel="stylesheet" />
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <style>
    body {
        font-family: 'Poppins', sans-serif;
    }
    </style>

</head>

<body>
    <div class="container p-2 min-h-screen flex flex-col justify-center items-center space-y-10">
        <div>

            <img src="https://mainlandsolar.com/wp-content/uploads/2022/02/cropped-navbrand-logo-min-1.png"
                alt="Mainlandsolar Logo" class="h-20">
        </div>

        <h1 class="flex items-center w-full max-w-7xl text-nowrap gap-20 text-2xl font-bold uppercase 
            before:content[''] before:block before:bg-[#414143] before:h-[4px] before:w-full
            after:content[''] after:block after:bg-[#414143] after:h-[4px] after:w-full">
            Recommendation Form</h1>
        <div
            class="block w-full max-w-xl overflow-hidden bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 dark:border-gray-700">

            <div class="p-4 bg-[#414143] text-white uppercase">
                <h2 class="text-xl font-bold">Kindly fill in the correct information</h2>

            </div>

            <div class="p-4">

                <form>
                    <div class="mb-5">
                        <label for="type-of-house"
                            class="block cursor-pointer mb-2 text-sm font-medium text-gray-900 dark:text-white">Type of
                            House</label>

                        <select id="type-of-house"
                            class="bg-gray-50 cursor-pointer border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                            required>

                            <option value="">How many air conditioners do you intend to power?</option>
                            <option value="self contain">Self contain</option>
                            <option value="mini Flat">Mini Flat</option>
                            <option value="two bedroom apartment">Two bedroom apartment</option>
                            <option value="three bedroom apartment">Three bedroom apartment</option>
                            <option value="four bedroom apartment">Four bedroom apartment</option>
                            <option value="five bedroom apartment">Five bedroom apartment</option>
                        </select>
                    </div>
                    <div class="mb-5">
                        <label for="number-of-air-conditioners"
                            class="block cursor-pointer mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            How many air conditioners do you intend to power?
                        </label>

                        <select id="type-of-house"
                            class="bg-gray-50 cursor-pointer border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                            required>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                    </div>
                    <button type="submit"
                        class="flex justify-center cursor-pointer uppercase w-full text-white text-lg bg-[#209E02] hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg w-full sm:max-w-sm sm:mx-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        Proceed</button>
                </form>

            </div>
        </div>

    </div>


    <!-- Main modal -->
    <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-lg max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                <!-- Modal header -->
                <div
                    class="bg-[#414143] text-white flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                    <h3 class="text-xl font-semibold uppercase">
                        Result
                    </h3>

                    <button type="button"
                        class="cursor-pointer bg-red-400 text-white rounded-l-full rounded-r-full text-xs ms-auto inline-flex justify-between items-center gap-x-3 px-2 py-[4px]"
                        data-modal-hide="static-modal">
                        <span class="text-[16px] font-semibold">Close</span>
                        <span class="rounded-full bg-white text-red-400 p-1">
                            <svg class="w-2 h-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <div class="flex items-center justify-center h-53 overflow-hidden rounded-xl">
                        <!-- Product Result image -->
                        <img src="https://mainlandsolar.com/wp-content/uploads/2025/02/12KW-LITHIUM-Package-1.jpg"
                            alt="" class="w-full h-80 object-cover rounded-lg">
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <a href="#"
                        class="flex justify-center cursor-pointer uppercase w-full text-white bg-[#209E02] hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-semibold rounded-lg text-lg w-full sm:max-w-sm sm:mx-auto px-5 py-4 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        Buy Now</a>
                </div>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.1/dist/flowbite.min.js"> </script>

    <!-- Flowbite script -->
    <script>
    /**Open result modal automatically */
    function displayResult() {
        const modal = new Modal(document.getElementById('static-modal'));
        setTimeout(() => {
            modal.show();
        }, 2000);
    }

    displayResult();
    </script>
</body>

</html>