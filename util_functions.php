<?php
$scoreList= array('R'=>'0','I'=>'0','A'=>'0','S'=>'0','E'=>'0','C'=>'0');
$scorePercentageList= array('R'=>'0','I'=>'0','A'=>'0','S'=>'0','E'=>'0','C'=>'0');
$result_personality="";

/* for RIASEC test result*/
function getPersonalityTestResults() {
    global $scoreList, $result_personality;

    if (isset($_POST['submit'])) {
        // Hitung jumlah pertanyaan yang diisi
        $answeredQuestions = array_filter($_POST, function($value, $key) {
            return strpos($key, 'R') === 0 || strpos($key, 'I') === 0 || 
                   strpos($key, 'A') === 0 || strpos($key, 'S') === 0 || 
                   strpos($key, 'E') === 0 || strpos($key, 'C') === 0;
        }, ARRAY_FILTER_USE_BOTH);

        $answeredCount = count($answeredQuestions);

        // Minimal 7 pertanyaan harus diisi
        if ($answeredCount < 7) {
            // Gunakan JavaScript untuk pesan di halaman test_form
            echo "<script>
                alert('Jawab minimal 7 pertanyaan untuk mendapatkan hasil.');
                window.location.href = 'test_form.php';
            </script>";
            exit;
        }

        // Peringatan jika kurang dari 15
        if ($answeredCount <= 15) {
            echo "<script> alert('To get good results, at least fill 15 statements.'); </script>";
        }

        // Proses hasil
        calculateScoreByCategory('R');
        calculateScoreByCategory('I');
        calculateScoreByCategory('A');
        calculateScoreByCategory('S');
        calculateScoreByCategory('E');
        calculateScoreByCategory('C');

        arsort($scoreList);
        calculateScoreInPercentage($scoreList);

        $iterator = 0;
        foreach ($scoreList as $key => $value) {
            $result_personality .= $key;
            $iterator++;
            if ($iterator == 3) break;
        }

        if (isset($_POST['can_save_data']) && $_POST['can_save_data'] == true) {
            insertTestResults($result_personality);
        }
    } else {
        echo "<script>
            alert('Something went wrong.');
            window.location.href = 'test_form.php';
        </script>";
        exit;
    }
}


/* to find score in each personality type*/
function calculateScoreByCategory($category){
	global $scoreList;
	$value = $scoreList[$category];
	
	for($counter=1;$counter<=5;$counter++){
		$name=$category.$counter;
		if(isset($_POST[$name])){
			$value+=intval($_POST[$name]);
		}
	}
	$scoreList[$category]=$value;
}

/*for calculating percentagewise scores of each personality*/
function calculateScoreInPercentage($scoreList){
	global $scorePercentageList;
	$sum = array_sum($scoreList);
	foreach($scoreList as $key => $value){
		$scorePercentageList[$key]=round(($value/$sum)*100,2);
	}
	 
}
 

// To insert data into database for research purposes
function insertTestResults($result){
	global $scorePercentageList,$connection;
	$query = "INSERT INTO personality_test_scores ( ";
	$query.= "realistic,investigative, artistic, "; 
	$query.= "social,enterprising,conventional,result) ";
	$query.= "VALUES({$scorePercentageList['R']},{$scorePercentageList['I']},{$scorePercentageList['A']},{$scorePercentageList['S']},";
	$query.= "{$scorePercentageList['E']},{$scorePercentageList['C']},'{$result}')";
	
	$insertIntoTestResults = mysqli_query($connection,$query);
	if(!$insertIntoTestResults){
		die("QUERY FAILED".mysqli_error($connection));
	}
}
?>
