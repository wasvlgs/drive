<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Categories - Drive & Loc</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Header -->
    <?php require_once '../commands/headerAdmin.php'; ?>

        <!-- Main Content Area -->
        <main class="flex-1 p-6">
            <!-- Manage Categories Section -->
            <section id="manage-categories" class="mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Manage Categories</h2>

                <!-- Button to Add New Category -->
                <div class="mb-6">
                    <button onclick="showAddModal()" class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-500">+ Add New Category</button>
                </div>

                <!-- Categories Table -->
                <table class="min-w-full bg-white border-collapse shadow-lg rounded-lg">
                    <thead>
                        <tr class="bg-blue-600 text-white">
                            <th class="py-3 px-6">Category Name</th>
                            <th class="py-3 px-6">Description</th>
                            <th class="py-3 px-6">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Example Category Row (Loop through categories here) -->
                        <tr>
                            <td class="py-4 px-6">SUV</td>
                            <td class="py-4 px-6">Sport Utility Vehicles</td>
                            <td class="py-4 px-6 flex space-x-4">
                                <button onclick="showEditModal('SUV', 'Sport Utility Vehicles')" class="bg-yellow-600 text-white px-4 py-2 rounded-md hover:bg-yellow-500">Modify</button>
                                <button onclick="deleteCategory('SUV')" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-500">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-4 px-6">Sedan</td>
                            <td class="py-4 px-6">Comfortable and efficient cars</td>
                            <td class="py-4 px-6 flex space-x-4">
                                <button onclick="showEditModal('Sedan', 'Comfortable and efficient cars')" class="bg-yellow-600 text-white px-4 py-2 rounded-md hover:bg-yellow-500">Modify</button>
                                <button onclick="deleteCategory('Sedan')" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-500">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main>
    </div>

    <!-- Add Category Modal -->
    <div id="addCategoryModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50" style="display: none;">
        <div class="bg-white p-6 rounded-lg w-96">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Add New Category</h3>
            <form>
                <div class="mb-4">
                    <label for="category-name" class="block text-gray-700">Category Name</label>
                    <input type="text" id="category-name" class="w-full p-2 border border-gray-300 rounded-md" placeholder="Enter category name" required>
                </div>
                <div class="mb-4">
                    <label for="category-description" class="block text-gray-700">Description</label>
                    <input type="text" id="category-description" class="w-full p-2 border border-gray-300 rounded-md" placeholder="Enter category description" required>
                </div>
                <div class="flex justify-end">
                    <button type="button" onclick="closeAddModal()" class="px-4 py-2 mr-4 bg-gray-400 text-white rounded-md">Cancel</button>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md">Add Category</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Edit Category Modal -->
    <div id="editCategoryModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50" style="display: none;">
        <div class="bg-white p-6 rounded-lg w-96">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Edit Category</h3>
            <form>
                <div class="mb-4">
                    <label for="edit-category-name" class="block text-gray-700">Category Name</label>
                    <input type="text" id="edit-category-name" class="w-full p-2 border border-gray-300 rounded-md" required>
                </div>
                <div class="mb-4">
                    <label for="edit-category-description" class="block text-gray-700">Description</label>
                    <input type="text" id="edit-category-description" class="w-full p-2 border border-gray-300 rounded-md" required>
                </div>
                <div class="flex justify-end">
                    <button type="button" onclick="closeEditModal()" class="px-4 py-2 mr-4 bg-gray-400 text-white rounded-md">Cancel</button>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md">Update Category</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Show Add Category Modal
        function showAddModal() {
            document.getElementById("addCategoryModal").style.display = "flex";
        }

        // Close Add Category Modal
        function closeAddModal() {
            document.getElementById("addCategoryModal").style.display = "none";
        }

        // Show Edit Category Modal with prefilled data
        function showEditModal(categoryName, categoryDescription) {
            document.getElementById("edit-category-name").value = categoryName;
            document.getElementById("edit-category-description").value = categoryDescription;
            document.getElementById("editCategoryModal").style.display = "flex";
        }

        // Close Edit Category Modal
        function closeEditModal() {
            document.getElementById("editCategoryModal").style.display = "none";
        }

        // Function to delete category (just removes from the table in this case)
        function deleteCategory(categoryName) {
            if (confirm("Are you sure you want to delete the category: " + categoryName + "?")) {
                alert("Category deleted!");
                // You would actually delete the category from the database here.
                // For now, just removing the row from the table:
                let categoryRow = event.target.closest('tr');
                categoryRow.remove();
            }
        }
    </script>

</body>
</html>
