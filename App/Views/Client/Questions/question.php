<div class="container-xxl">
<form method="post" action="<?=$clientUrl?>group">
        <div class="groupQuestion">
            <div class="title">
                <b><?=$group['name']?></b>
            </div>
            <?php $i=1; foreach($allQuestion as $question):?>
            <div class="questionAll">
                <hr>
                <b class="question">
                    <?=$i++."."?>
                    <?= $question['content'] ?>
                </b>
                <?php 
                    $questionId=$question['id'];
                    $allAnswer = AnswerModels::AnswerAll(['*'],"question_id=$questionId");
                ?>
                <ul class="answer">
                <?php foreach($allAnswer as $answer): ?>
                    <li> 
                        <input type="radio" name="question<?=$questionId?>" id="answer<?=$answer['id']?>" value="<?=$answer['id']?>">
                        <label for="answer<?=$answer['id']?>"><?=$answer['content']?></label>
                    </li>
                <?php endforeach ?>
                </ul>
            </div>
            <?php endforeach ?>
            <input name="check" class="btn btn-primary mt-2" type="submit" value="Gửi">
        </div>
    </form>
    </div>
    <?php
    // ten_file_php_xu_ly.php

    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     // Lặp qua mảng $_POST để xử lý dữ liệu form
    //     foreach ($_POST as $key => $value) {
    //         // Kiểm tra nếu là ô radio được chọn trong form (theo tên của ô radio)
    //         if (strpos($key, 'question') !== false) {
    //             $questionId = substr($key, strlen('question'));
    //             $selectedAnswer = $value;

    //             // Xử lý kết quả ở đây
    //             echo "Câu hỏi {$questionId}: ";
    //             if ($selectedAnswer !== null) {
    //                 echo "Bạn đã chọn đáp án {$selectedAnswer}.";
    //             } else {
    //                 echo "Bạn chưa chọn đáp án.";
    //             }
    //             echo "<br>";
    //         }
    //     }
    // }
    ?>



</div>
</div>
</div>