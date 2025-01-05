<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Reviews - Drive & Loc</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Header -->
    <header class="bg-blue-600 text-white p-4 shadow-md">
        <div class="flex justify-between items-center">
            <!-- Greeting -->
            <div class="text-xl font-semibold">Welcome, Admin</div>
            <!-- Logout Link -->
            <a href="logout.html" class="text-white hover:text-blue-300">🚪 Logout</a>
        </div>
    </header>

    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-blue-600 text-white min-h-screen p-6">
            <h1 class="text-2xl font-bold mb-6">Drive & Loc</h1>
            <nav>
                <ul class="space-y-4">
                    <li><a href="dashboard.html" class="block hover:text-blue-300">🏠 Dashboard</a></li>
                    <li><a href="manage-vehicles.html" class="block hover:text-blue-300">🚗 Manage Vehicles</a></li>
                    <li><a href="manage-reservations.html" class="block hover:text-blue-300">🛣️ Manage Reservations</a></li>
                    <li><a href="manage-reviews.html" class="block hover:text-blue-300">📝 Manage Reviews</a></li>
                    <li><a href="manage-categories.html" class="block hover:text-blue-300">📂 Manage Categories</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content Area -->
        <main class="flex-1 p-6">
            <!-- Manage Reviews Section -->
            <section id="manage-reviews" class="mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Manage Reviews</h2>

                <!-- Reviews Table -->
                <table class="min-w-full bg-white border-collapse shadow-lg rounded-lg">
                    <thead>
                        <tr class="bg-blue-600 text-white">
                            <th class="py-3 px-6">Customer Name</th>
                            <th class="py-3 px-6">Vehicle</th>
                            <th class="py-3 px-6">Rating</th>
                            <th class="py-3 px-6">Review</th>
                            <th class="py-3 px-6">Status</th>
                            <th class="py-3 px-6">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Example Review Row (Loop through reviews here) -->
                        <tr>
                            <td class="py-4 px-6">John Doe</td>
                            <td class="py-4 px-6">Luxury Sedan</td>
                            <td class="py-4 px-6">5 Stars</td>
                            <td class="py-4 px-6">Great vehicle! Loved the comfort.</td>
                            <td class="py-4 px-6" id="status-1">Pending</td>
                            <td class="py-4 px-6 flex space-x-4">
                                <button onclick="approveReview(1)" class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-500">Approve</button>
                                <button onclick="deleteReview(1)" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-500">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-4 px-6">Jane Smith</td>
                            <td class="py-4 px-6">Sports Car</td>
                            <td class="py-4 px-6">4 Stars</td>
                            <td class="py-4 px-6">Really fast and fun to drive!</td>
                            <td class="py-4 px-6" id="status-2">Pending</td>
                            <td class="py-4 px-6 flex space-x-4">
                                <button onclick="approveReview(2)" class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-500">Approve</button>
                                <button onclick="deleteReview(2)" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-500">Delete</button>
                            </td>
                        </tr>
                        <!-- More review rows would be added here -->
                    </tbody>
                </table>
            </section>
        </main>
    </div>

    <script>
        // Function to handle approving a review
        function approveReview(reviewId) {
            let statusCell = document.getElementById('status-' + reviewId);
            statusCell.textContent = 'Approved';
            statusCell.classList.add('text-green-600');
            statusCell.classList.remove('text-red-600');
            
            // Disable approve button and change color after approval
            let approveButton = statusCell.closest('tr').querySelector('.bg-green-600');
            approveButton.classList.add('bg-gray-600', 'hover:bg-gray-500');
            approveButton.disabled = true;
        }

        // Function to handle deleting a review
        function deleteReview(reviewId) {
            let reviewRow = document.getElementById('status-' + reviewId).closest('tr');
            reviewRow.remove(); // Removes the review row from the table
            
            alert('Review deleted!');
        }
    </script>
</body>
</html>
