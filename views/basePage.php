<?php
$pageS1 = PageController::get_info_of_page($_GET['page']);
?>

<div class="container">
    <div class="child_container">
        <div class="Content_Of_Page_NotreEntrprise">
            <div class="Big_Title">
                <h1>Société <?php echo $pageS1['Title'] ?> Casablanca</h1>
            </div>

            <div class="Descriptions">
                <p>
                    <?php echo $pageS1['Description'] ?>
                </p>
            </div>

            <div class="Societies">
                <div class="societie_1">
                    <div class="Left_Side">
                        <div class="Image">
                            <img src="<?php echo $pageS1['Images'][0] ?>" alt="Société <?php echo $pageS1['Title'] ?> Casablanca Maroc" />
                        </div>
                    </div>
                    <div class="Right_Side">
                        <div class="Description">
                            <p>
                                <?php echo $pageS1['Content'][0] ?>
                            </p>
                        </div>
                        <div class="Button_Holder">
                            <button>
                                <p>DEMANDEZ UN DEVIS</p>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="Mini_Title">
                    <h2>Société <?php echo $pageS1['Title'] ?></h2>
                </div>
                <div class="societie_2">
                    <div class="Left_Side">
                        <div class="Image">
                            <img src="<?php echo $pageS1['Images'][1] ?>" alt="Société <?php echo $pageS1['Title'] ?> Casablanca." />
                        </div>
                    </div>
                    <div class="Right_Side">
                        <div class="Description">
                            <p>
                                <?php echo $pageS1['Content'][1] ?>

                            </p>
                        </div>
                        <div class="Button_Holder">
                            <button>
                                <p>DEMANDEZ UN DEVIS</p>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>