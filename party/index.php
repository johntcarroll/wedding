<?php
$root = "../";
$title = "John and Lena's Wedding Website";
include "../layout/header.php";
include "bridesmaids.php";
include "groomsmen.php";
?>

<div class='row'>
    <div class='col-xs-12 home-bg'>
        
    </div>
</div>

<div class='row'>
    <div class='col-xs-12 col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3 col-lg-offset-3 text-center pad-top-20'>
        <div class='party-button on' id='show-groom'>
            Groomsmen
        </div>
    </div>
    <div class='col-xs-12 col-sm-5 col-md-4 col-lg-3 text-center pad-top-20 pad-bottom-20'>
        <div class='party-button' id='show-bride'>
            Bridesmaids
        </div>
    </div>
</div>

<div class='row' id='brides-party'>
    <?php
    $count = 1;
    foreach($bridesmaids as $bridesmaid){
        if($count % 2 != 0){
            echo "<div class='col-xs-12 col-sm-10 col-sm-offset-1 pad-top-20 " . ($count == count($bridesmaids) ? 'pad-bottom-5' : 'party-row') . "'>
                    <div class='row'>
                        <div class='col-xs-12 col-sm-3 vcenter'>
                            <img class='img img-responsive accomm-img img-center' src='" . $bridesmaid['img'] . "' />
                        </div><!--
                     --><div class='col-xs-12 col-sm-9 col-md-5 vcenter text-center'>
                            <h1>" . $bridesmaid['title'] . "</h1><br/><br/>
                            <h2>" . $bridesmaid['relation'] . "</h2><br/><br/>
                        </div><!--
                     --><div class='col-xs-12 col-sm-4 vcenter'>
                            <div class='row'>
                                <div class='hidden-xs col-sm-12 text-center'>
                                    <h2>Why We Love Her:</h2><br/>
                                </div>";
                                foreach($bridesmaid['attributes'] as $attribute){
                                    echo "<div class='col-xs-12 pad-top-5 text-center'>
                                        <span class='party-attribute text-center'> " . $attribute . "</span>
                                    </div>";
                                }
                            echo "</div>
                        </div>
                    </div>
                </div> ";
        }else{
            echo "<div class='col-xs-12 col-sm-10 col-sm-offset-1 pad-top-20 " . ($count == count($bridesmaids) ? 'pad-bottom-5' : 'party-row') . "'>
                    <div class='row'>
                        <div class='hidden-xs col-sm-4 vcenter'>
                            <div class='row'>
                                <div class='col-xs-12 text-center'>
                                    <h2>Why We Love Her:</h2><br/>
                                </div>";
                                foreach($bridesmaid['attributes'] as $attribute){
                                    echo "<div class='col-xs-12 pad-top-5 text-center'>
                                        <span class='party-attribute text-center'> " . $attribute . "</span>
                                    </div>";
                                }
                            echo "</div>
                        </div><!--
                     --><div class='hidden-xs col-sm-8 col-md-5 vcenter text-center'>
                            <h1>" . $bridesmaid['title'] . "</h1><br/><br/>
                            <h2>" . $bridesmaid['relation'] . "</h2><br/><br/>
                        </div><!--
                     --><div class='col-xs-12 col-sm-3 vcenter'>
                            <img class='img img-responsive accomm-img img-center' src='" . $bridesmaid['img'] . "' />
                        </div><!--
                     --><div class='visible-xs col-xs-12 vcenter text-center'>
                            <h1>" . $bridesmaid['title'] . "</h1><br/><br/>
                            <h2>" . $bridesmaid['relation'] . "</h2><br/><br/>
                        </div>
                        <div class='col-xs-12 hidden-sm hidden-md hidden-lg vcenter'>
                            <div class='row'>
                                <div class='hidden-xs col-sm-12 text-center'>
                                    <h2>Why We Love Her:</h2><br/>
                                </div>";
                                foreach($bridesmaid['attributes'] as $attribute){
                                    echo "<div class='col-xs-12 pad-top-5 text-center'>
                                        <span class='party-attribute text-center'> " . $attribute . "</span>
                                    </div>";
                                }
                            echo "</div>
                        </div>
                    </div>
                </div>";
        }
        $count++;
    }
    ?>
</div>

<div class='row' id='grooms-party'>
    <?php
    $count = 1;
    foreach($groomsmen as $groomsman){
        if($count % 2 != 0){
            echo "<div class='col-xs-12 col-sm-10 col-sm-offset-1 pad-top-20 " . ($count == count($groomsmen) ? 'pad-bottom-5' : 'party-row') . "'>
                    <div class='row'>
                        <div class='col-xs-12 col-sm-3 vcenter'>
                            <img class='img img-responsive accomm-img img-center' src='" . $groomsman['img'] . "' />
                        </div><!--
                     --><div class='col-xs-12 col-sm-9 col-md-5 vcenter text-center'>
                            <h1>" . $groomsman['title'] . "</h1><br/><br/>
                            <h2>" . $groomsman['relation'] . "</h2><br/><br/>
                        </div><!--
                     --><div class='col-xs-12 col-sm-4 vcenter'>
                            <div class='row'>
                                <div class='hidden-xs col-sm-12 text-center'>
                                    <h2>Why We Love Him:</h2><br/>
                                </div>";
                                foreach($groomsman['attributes'] as $attribute){
                                    echo "<div class='col-xs-12 pad-top-5 text-center'>
                                        <span class='party-attribute text-center'> " . $attribute . "</span>
                                    </div>";
                                }
                            echo "</div>
                        </div>
                    </div>
                </div> ";
        }else{
            echo "<div class='col-xs-12 col-sm-10 col-sm-offset-1 pad-top-20 " . ($count == count($groomsmen) ? 'pad-bottom-5' : 'party-row') . "'>
                    <div class='row'>
                        <div class='col-xs-4 vcenter hidden-xs hidden-sm'>
                            <div class='row'>
                                <div class='col-xs-12 text-center'>
                                    <h2>Why We Love Him:</h2><br/>
                                </div>";
                                foreach($groomsman['attributes'] as $attribute){
                                    echo "<div class='col-xs-12 pad-top-5 text-center'>
                                        <span class='party-attribute text-center'> " . $attribute . "</span>
                                    </div>";
                                }
                            echo "</div>
                        </div><!--
                     --><div class='hidden-xs col-sm-8 col-md-5 vcenter text-center'>
                            <h1>" . $groomsman['title'] . "</h1><br/><br/>
                            <h2>" . $groomsman['relation'] . "</h2><br/><br/>
                        </div><!--
                     --><div class='col-xs-12 col-sm-3 vcenter'>
                            <img class='img img-responsive accomm-img img-center' src='" . $groomsman['img'] . "' />
                        </div><!--
                     --><div class='visible-xs col-xs-12 vcenter text-center'>
                            <h1>" . $groomsman['title'] . "</h1><br/><br/>
                            <h2>" . $groomsman['relation'] . "</h2><br/><br/>
                        </div>
                        <div class='col-xs-12 hidden-sm hidden-md hidden-lg vcenter'>
                            <div class='row'>
                                <div class='hidden-xs col-sm-12 text-center'>
                                    <h2>Why We Love Him:</h2><br/>
                                </div>";
                                foreach($groomsman['attributes'] as $attribute){
                                    echo "<div class='col-xs-12 pad-top-5 text-center'>
                                        <span class='party-attribute text-center'> " . $attribute . "</span>
                                    </div>";
                                }
                            echo "</div>
                        </div>
                    </div>
                </div>";
        }
        $count++;
    }
    ?>
</div>
<script type='text/javascript' src='party.js'></script>

<?php

include "../layout/footer.php";
