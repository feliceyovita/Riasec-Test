<?php include 'includes/header.php'; ?>
<?php include 'util_functions.php'; ?>
<div>
    <?php getPersonalityTestResults(); ?>
    <div class="main result">
        <p>Berdasarkan tes, kamu mendapatkan hasil kepribadian <b><?php echo $result_personality ?></b></p>
        <div id="chartContainer" style="height: 300px; width: 95%; margin-top: 20px; margin-bottom: 50px;"></div>

		<div class="categories">
			<div class="category" onclick="selectCategory('Realistic')">
				<img src="assets/realistic.png" alt="Realistic">
			</div>
			<div class="category" onclick="selectCategory('Investigative')">
				<img src="assets/investigate.png" alt="Investigative">
			</div>
			<div class="category" onclick="selectCategory('Artistic')">
				<img src="assets/artistic.png" alt="Artistic">
			</div>
			<div class="category" onclick="selectCategory('Social')">
				<img src="assets/social.png" alt="Social">
			</div>
			<div class="category" onclick="selectCategory('Enterprising')">
				<img src="assets/enterprising.png" alt="Enterprising">
			</div>
			<div class="category" onclick="selectCategory('Conventional')">
				<img src="assets/conventional.png" alt="Conventional">
			</div>
		</div>

		<div class="category-box">
			<!-- Baris 1: Kolom-kolom kategori -->
			<div class="category-row">
				<div class="category-cell" onclick="selectCategory('Realistic')">Realistic</div>
				<div class="category-cell" onclick="selectCategory('Investigative')">Investigative</div>
				<div class="category-cell" onclick="selectCategory('Artistic')">Artistic</div>
				<div class="category-cell" onclick="selectCategory('Social')">Social</div>
				<div class="category-cell" onclick="selectCategory('Enterprising')">Enterprising</div>
				<div class="category-cell" onclick="selectCategory('Conventional')">Conventional</div>
			</div>
			<!-- Baris 2: Deskripsi -->
			<div class="category-description">
				<p id="description-text">Pilih salah satu kategori untuk melihat deskripsi.</p>
			</div>
		</div>

        <p>Want to take test again? <a href="test_form.php">Click here</a></p>
    </div>
</div>
<?php include 'includes/footer.php'; ?>
<script src="result.js"></script>
