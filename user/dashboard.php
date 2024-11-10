<?php include '../includes/header.php'; ?>

<div class="p-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
    <!-- Plant Health Status Section -->
    <section class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
        <h3 class="text-xl font-semibold mb-4">Plant Health Status</h3>
        <p class="text-gray-700 mb-4">View plant health data analysis and trends for your plants.</p>
        <a href="plant_analysis.php">
            <button class="w-full bg-green-600 text-white py-2 px-4 rounded-md hover:bg-green-700 transition duration-200">View Analysis</button>
        </a>
    </section>

    <!-- Water & Fish Counting Section -->
    <section class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
        <h3 class="text-xl font-semibold mb-4">Water & Fish Analysis</h3>
        <p class="text-gray-700 mb-4">Access real-time water quality data and fish counting trends.</p>
        <a href="water_fish_analysis.php">
            <button class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition duration-200">View Data</button>
        </a>
    </section>
</div>

<?php include '../includes/footer.php'; ?>
