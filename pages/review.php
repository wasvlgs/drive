<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Reviews - Drive & Loc</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <?php
            require_once '../commands/header.php';
         ?>

        <!-- Main Content Area -->
        <main class="flex-1 p-6">
            <!-- My Reviews Section -->
            <section id="my-reviews" class="mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">My Reviews</h2>
                
                <!-- Review List -->
                <div class="space-y-4">
                    <!-- Review Item 1 -->
                    <div class="bg-white shadow-lg rounded-lg p-6">
                        <h3 class="text-xl font-semibold text-gray-800">Luxury Sedan</h3>
                        <div class="flex items-center space-x-2">
                            <div class="text-yellow-500">★★★★★</div>
                            <span class="text-gray-600">(5/5)</span>
                        </div>
                        <p class="text-gray-600 mt-2">"Great car! Smooth ride and very comfortable. Perfect for long trips."</p>
                        <div class="mt-4 flex justify-end space-x-4">
                            <button onclick="openModifyReviewPopup('Luxury Sedan', 'Great car! Smooth ride and very comfortable. Perfect for long trips.', 5)" class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600">Modify</button>
                            <button class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">Delete</button>
                        </div>
                    </div>

                    <!-- Review Item 2 -->
                    <div class="bg-white shadow-lg rounded-lg p-6">
                        <h3 class="text-xl font-semibold text-gray-800">SUV</h3>
                        <div class="flex items-center space-x-2">
                            <div class="text-yellow-500">★★★★☆</div>
                            <span class="text-gray-600">(4/5)</span>
                        </div>
                        <p class="text-gray-600 mt-2">"Perfect for family trips. Spacious and reliable, but could be smoother on highways."</p>
                        <div class="mt-4 flex justify-end space-x-4">
                            <button onclick="openModifyReviewPopup('SUV', 'Perfect for family trips. Spacious and reliable, but could be smoother on highways.', 4)" class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600">Modify</button>
                            <button class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">Delete</button>
                        </div>
                    </div>

                    <!-- Additional Review Items... -->
                </div>
            </section>
        </main>
    </div>

    <!-- Modify Review Popup -->
    <div id="modifyReviewPopup" class="fixed inset-0 bg-gray-800 bg-opacity-50 hidden justify-center items-center">
        <div class="bg-white rounded-lg p-6 w-96">
            <h3 class="text-2xl font-semibold mb-4">Modify Review</h3>
            <form action="modify-review.php" method="POST">
                <div class="mb-4">
                    <label for="vehicle" class="block text-gray-700">Vehicle</label>
                    <input type="text" id="vehicle" name="vehicle" class="w-full px-4 py-2 border border-gray-300 rounded-lg" disabled>
                </div>
                <div class="mb-4">
                    <label for="reviewText" class="block text-gray-700">Review Text</label>
                    <textarea id="reviewText" name="reviewText" class="w-full px-4 py-2 border border-gray-300 rounded-lg" rows="4"></textarea>
                </div>
                <div class="mb-4">
                    <label for="rating" class="block text-gray-700">Rating</label>
                    <select id="rating" name="rating" class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                        <option value="5">★★★★★</option>
                        <option value="4">★★★★☆</option>
                        <option value="3">★★★☆☆</option>
                        <option value="2">★★☆☆☆</option>
                        <option value="1">★☆☆☆☆</option>
                    </select>
                </div>
                <div class="flex justify-end space-x-4">
                    <button type="button" onclick="closeModifyReviewPopup()" class="bg-gray-400 text-white px-4 py-2 rounded-lg hover:bg-gray-500">Cancel</button>
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Save Changes</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Open Modify Review Popup with Pre-filled Data
        function openModifyReviewPopup(vehicle, reviewText, rating) {
            document.getElementById("vehicle").value = vehicle;
            document.getElementById("reviewText").value = reviewText;
            document.getElementById("rating").value = rating;
            document.getElementById("modifyReviewPopup").classList.remove("hidden");
        }

        // Close Modify Review Popup
        function closeModifyReviewPopup() {
            document.getElementById("modifyReviewPopup").classList.add("hidden");
        }
    </script>
</body>
</html>
