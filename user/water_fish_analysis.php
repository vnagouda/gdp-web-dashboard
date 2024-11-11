<?php include '../includes/header.php'; ?>

<div class="p-6">
    <h2 class="text-3xl font-bold text-center mt-8">Water & Fish Analysis</h2>

    <!-- Live Stream Section for Water Quality and Fish Counting -->
    <section class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300 mt-6">
        <h3 class="text-xl font-semibold mb-4">Live Stream for Water & Fish Analysis</h3>
        <div class="bg-black rounded-lg overflow-hidden">
            <video id="waterFishLiveStream" controls class="w-full h-64 object-cover">
                <source src="URL_OF_LIVE_STREAM" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </section>

    <!-- Water Quality Monitoring Section -->
    <section class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300 mt-6">
        <h3 class="text-xl font-semibold mb-4">Water Quality Monitoring</h3>
        <p class="text-gray-700 mb-4">View real-time water quality data and trends.</p>
        <!-- Add water quality data here -->
    </section>

    <!-- Fish Count Summary Section -->
    <section class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300 mt-6">
        <h3 class="text-xl font-semibold mb-4">Fish Count Summary</h3>
        <p class="text-gray-700 mb-4">Check the latest fish count and trends.</p>
        <!-- Add fish count data here -->
    </section>
</div>

<?php include '../includes/footer.php'; ?>
