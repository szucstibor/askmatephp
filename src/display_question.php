<html>
<head>

        <?php
            require ("Link.php");
            $id = $_GET['id'];
            $question_query = mysqli_query($link, "SELECT * FROM question WHERE question.id='$id'");
        while ($question = mysqli_fetch_assoc($question_query)) {
            Print "<h1>".$question['title']."</h1>";
            Print "<h3>".$question['description']."</h3>";
            $answers_query = mysqli_query($link, "SELECT * FROM answer WHERE answer.question_id='$id'");
            while ($answers_row = mysqli_fetch_assoc($answers_query)){
                $answers = array($answers_row);
            }
            //for ($i = 0; $i < count($answers); $i++){
            //    echo $answers[$i]['id'];
            //}
            foreach ($answers as $answer){
                Print "<p>".$answer['answer']."</p>";
                $answer_id = $answer['id'];
                $comments_query = mysqli_query($link, "SELECT * FROM comment WHERE comment.answer_id=$answer_id");
                while ($comments_row = mysqli_fetch_assoc($comments_query)){
                    Print "<p>".$comments_row['reply']."</p>";
                }
            }
        }
        ?>
</head>
<body>

</body>
</html>


