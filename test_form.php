<?php
session_start(); // Memulai sesi untuk memeriksa status login

// Jika pengguna belum login, arahkan mereka ke halaman login
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

include 'includes/header.php';
?>

<div class="logo__container">
    <img src="assets/riasec.png" alt="Logo Riasec" class="logo" />
    <span class="logo__text">Tes Riasec</span>
</div>

<div class="main" style="margin-top: 100px;">
    <h1 class="form-header">Isi formulir berikut</h1>

    <div class="home"><a href="index.php">Home</a></div>

    <form action="result.php" method="post" id="testForm">
        <div id="questionModal" class="modal">
            <div class="modal-content">
                <table class="table" id="questionTable">
                    <thead>
                        <tr>
                            <th>Pernyataan</th>
                            <th>Tidak Suka</th>
                            <th>Agak Tidak Suka</th>
                            <th>Netral</th>
                            <th>Agak Suka</th>
                            <th>Suka</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $query = "SELECT * FROM statements ORDER BY RAND()";
                        $statement_select_query = mysqli_query($connection, $query);
                        $index = 0;
                        while ($row = mysqli_fetch_assoc($statement_select_query)) { 
                            $statement_id = $row['statement_id'];
                            $statement_content = $row['statement_content'];
                            $statement_category = $row['statement_category'];
                        ?>
                            <tr class="statementRow" id="row<?php echo $index; ?>" style="display: <?php echo $index == 0 ? 'table-row' : 'none'; ?>">
                                <td><?php echo $statement_content; ?></td>
                                <td><input type="radio" name="<?php echo $statement_category . $statement_id; ?>" value="1"></td>
                                <td><input type="radio" name="<?php echo $statement_category . $statement_id; ?>" value="2"></td>
                                <td><input type="radio" name="<?php echo $statement_category . $statement_id; ?>" value="3"></td>
                                <td><input type="radio" name="<?php echo $statement_category . $statement_id; ?>" value="4"></td>
                                <td><input type="radio" name="<?php echo $statement_category . $statement_id; ?>" value="5"></td>
                            </tr>
                        <?php 
                            $index++; 
                        } 
                        ?>
                    </tbody>
                </table>

                <br>

                <div id="researchQuestion" style="display: none;">
                    Apakah Anda ingin kami menggunakan data ini untuk keperluan penelitian? &nbsp;
                    Ya <input type="radio" name="can_save_data" value="true"> 
                </div>
                <br>

                <button type="button" id="prevButton" class="form_submit test-btn" style="display: none;">Previous</button>

                <button type="button" id="nextButton" class="form_submit test-btn">Next</button>

                <input type="submit" name="submit" value="Dapatkan Hasil" class="form_submit test-btn" style="display: none;">
            </div>
        </div>
    </form>
</div>

<script>
    var currentQuestion = 0; 
    var totalQuestions = document.querySelectorAll('.statementRow').length; 

    document.getElementById('questionModal').style.display = 'flex';

    document.getElementById('nextButton').addEventListener('click', function() {
        document.getElementById('row' + currentQuestion).style.display = 'none';
        currentQuestion++;
        if (currentQuestion < totalQuestions) {
            document.getElementById('row' + currentQuestion).style.display = 'table-row';
        } else {
            document.getElementById('questionTable').style.display = 'none';
            document.querySelector('input[type="submit"]').style.display = 'inline-block';
            document.getElementById('researchQuestion').style.display = 'block';
            document.getElementById('nextButton').style.display = 'none'; 
        }
        if (currentQuestion > 0) {
            document.getElementById('prevButton').style.display = 'inline-block';
        }

        if (currentQuestion === totalQuestions) {
            document.getElementById('prevButton').style.display = 'none';
        }
    });

    document.getElementById('prevButton').addEventListener('click', function() {
        document.getElementById('row' + currentQuestion).style.display = 'none';
        currentQuestion--;
        if (currentQuestion >= 0) {
            document.getElementById('row' + currentQuestion).style.display = 'table-row';
        }
        if (currentQuestion < totalQuestions - 1) {
            document.getElementById('nextButton').style.display = 'inline-block';
        }
        if (currentQuestion === 0) {
            document.getElementById('prevButton').style.display = 'none';
        }
    });
</script>

<?php include 'includes/footer.php'; ?>
