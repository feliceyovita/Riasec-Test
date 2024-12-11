<?php include 'includes/header.php'; ?>

<div class="main">
    <h1 class="header">Isi formulir berikut</h1>

    <?php if (isset($_GET['message']) && $_GET['message'] == 'T') { ?>
        <p class="message">
            Anda perlu mengisi setidaknya 5-6 pernyataan untuk mendapatkan hasil.
        </p>
    <?php } ?>

    <a href="index.php">Home</a>

    <form action="result.php" method="post" id="testForm">
        <div id="questionModal" class="modal">
            <div class="modal-content">
                <table class="table">
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
                    <tbody id="questionTable">
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

                <br><br>
                <div>Apakah Anda ingin kami menggunakan data ini untuk keperluan penelitian? &nbsp;
                    Ya<input type="radio" name="can_save_data" value="true"> 
                </div>

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

    function closeModal() {
        document.getElementById('questionModal').style.display = 'none';
    }

    document.getElementById('nextButton').addEventListener('click', function() {
        document.getElementById('row' + currentQuestion).style.display = 'none';
        currentQuestion++;
        if (currentQuestion < totalQuestions) {
            document.getElementById('row' + currentQuestion).style.display = 'table-row';
        } else {
            document.querySelector('input[type="submit"]').style.display = 'inline-block';
            document.getElementById('nextButton').style.display = 'none'; 
            closeModal(); 
        }
        if (currentQuestion > 0) {
            document.getElementById('prevButton').style.display = 'inline-block';
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
