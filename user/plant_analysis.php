<?php include '../includes/header.php'; ?>

<div class="p-6">
    <h2 class="text-3xl font-bold text-center mt-8">Plant Health Analysis</h2>

    <!-- Live Stream Section for Plant Health -->
    <section class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300 mt-6">
        <h3 class="text-xl font-semibold mb-4">Live Stream for Plant Health</h3>
        <div class="bg-black rounded-lg overflow-hidden">
            <video id="plantLiveStream" controls class="w-full h-64 object-cover">
                <source src="URL_OF_LIVE_STREAM" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </section>

    <!-- Plant Health Data -->
    <section class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300 mt-6">
        <h3 class="text-xl font-semibold mb-4">Plant Health Status</h3>
        <p class="text-gray-700 mb-4">View the analysis and trends for your plant health.</p>
        <!-- Add analysis data here -->
    </section>
</div>

<?php include '../includes/footer.php'; ?>
