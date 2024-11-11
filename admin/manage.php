<?php include '../includes/header.php'; ?>
<h2 class="text-3xl font-bold text-center mt-8">Admin Data Management</h2>
<?php
$section = $_GET['section'] ?? 'plant';
echo "<p class='text-center mt-4'>Managing data for: " . ucfirst($section) . "</p>";
?>
<div class="p-6 space-y-6">
    <form action="save.php" method="POST">
        <label class="block text-sm font-medium">Data for <?php echo ucfirst($section); ?></label>
        <textarea name="data" rows="4" class="w-full mt-2 border rounded p-2"></textarea>
        <button type="submit" class="mt-4 bg-blue-600 text-white px-4 py-2 rounded">Save</button>
    </form>
</div>
<?php include '../includes/footer.php'; ?>
