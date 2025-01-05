<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Reservations - Drive & Loc</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Header -->
    <?php require_once '../commands/headerAdmin.php'; ?>

        <!-- Main Content Area -->
        <main class="flex-1 p-6">
            <!-- Manage Reservations Section -->
            <section id="manage-reservations" class="mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Manage Reservations</h2>

                <!-- Reservation Table -->
                <table class="min-w-full bg-white border-collapse shadow-lg rounded-lg">
                    <thead>
                        <tr class="bg-blue-600 text-white">
                            <th class="py-3 px-6">Customer Name</th>
                            <th class="py-3 px-6">Vehicle</th>
                            <th class="py-3 px-6">Reservation Date</th>
                            <th class="py-3 px-6">Status</th>
                            <th class="py-3 px-6">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Example Reservation Row (Loop through reservations here) -->
                        <tr>
                            <td class="py-4 px-6">John Doe</td>
                            <td class="py-4 px-6">Luxury Sedan</td>
                            <td class="py-4 px-6">2024-01-10</td>
                            <td class="py-4 px-6">Pending</td>
                            <td class="py-4 px-6 flex space-x-4">
                                <button onclick="confirmReservation(this)" class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-500">Confirm</button>
                                <button onclick="cancelReservation(this)" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-500">Cancel</button>
                            </td>
                        </tr>
                        <!-- More reservation rows would be added here -->
                    </tbody>
                </table>
            </section>
        </main>
    </div>

    <script>
        // Function to handle confirming a reservation
        function confirmReservation(button) {
            let row = button.closest('tr');
            row.querySelector('td:nth-child(4)').textContent = 'Confirmed';
            button.classList.add('bg-gray-600', 'hover:bg-gray-500');
            button.disabled = true; // Disable the button after confirming
        }

        // Function to handle canceling a reservation
        function cancelReservation(button) {
            let row = button.closest('tr');
            row.querySelector('td:nth-child(4)').textContent = 'Cancelled';
            button.classList.add('bg-gray-600', 'hover:bg-gray-500');
            button.disabled = true; // Disable the button after canceling
        }
    </script>
</body>
</html>
