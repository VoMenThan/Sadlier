<?php include('header.php'); ?>
<div class="wrap-page test_vocab">
    <div class="header-page clearfix">
        <p><span>Games:</span> Test Your Vocabulary</p>
    </div>
    <div class="box-score cup-time">
        <ul class="cup-time">
            <li class="cup total-score"><i class="fa fa-clock-o fa-3x" aria-hidden="true"><span class="text" id="total-score">4000</span></i></li>
            <li class="time total-times"><i class="fa fa-trophy fa-3x" aria-hidden="true"><span class="text"  id="remain-time">00:00</span></i></li>
        </ul>
    </div>
    <div class="test-vocab-content">
            <div class="box-content">
                subborn and often unreasonable in holding to one's own ideas, having a closed mind
            </div>
            <div class="answer">
                <form action="#">
                    <div><input type="radio" name="gender" id="a1"><label class="group-label" for="a1">cumbersome</label></div>
                    <div><input type="radio" name="gender" id="a2" ><label class="group-label" for="a2">opinionated</label></div>
                    <div><input type="radio" name="gender" id="a3"><label class="group-label" for="a3">circumspect</label></div>
                    <div><input type="radio" name="gender" id="a4"><label class="group-label" for="a4">unbridled</label></div>
                </form>
<!--                <form action="#">-->
<!--                    <div><input type="checkbox" name="gender" id="a1"><label for="a1">cumbersome</label></div>-->
<!--                    <div><input type="checkbox" name="gender" id="a2" ><label for="a2">opinionated</label></div>-->
<!--                    <div><input type="checkbox" name="gender" id="a3"><label for="a3">circumspect</label></div>-->
<!--                    <div><input type="checkbox" name="gender" id="a4"><label for="a4">unbridled</label></div>-->
<!--                </form>-->
            </div>

            <div class="box-submit">
                <a href="#" id="submitButton"></a>
            </div>
            <div class="pup-h40">
                <div class="right-btn text-right">Right!</div>
<!--                <div class="wrong-btn text-right">Wrong!</div>-->
            </div>
            <div class="popup-result">
                <div class="bg-submit">
                    <div class="pupup-submit">
                        <div class="game-over">Game Over</div>
                        <div class="result">
                            <span class="good">Good Job!</span>
<!--                            <span class="bad">Bad Job!</span>-->
                        </div>
                        <div class="score"> <span class="gray">Score:</span> 9400</div>
                        <div class="play-again">Play Again</div>
                    </div>
                </div>
            </div>
    </div>
    <div class="nav-tool">
        <ul class ="nav-control">
            <li class="control ctrl-prev"><a href="#" id="reloadButton"></a></li>
        </ul>
    </div>
</div>

<?php include('footer.php'); ?>