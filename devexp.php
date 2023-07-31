<!DOCTYPE PHP>
<html lang="en">
    <?php require 'library.php'; ?>
    <?php writeHead("Developer Experience"); ?>
    <body>
        <?php writeTop();?>
        <div id="main" class="devexhead">
                <h2>Developer Experience</h2>
        </div>
        <div id="programs" class="devex">
            <h3>Programs</h3>
            <div class="workimage">
                <img src="images/tic-tac-game.png" style="max-height:35em;"/>
            </div>
            <div class="workdescrip">
                <h4>3-Player, 8x8 Tic Tac Toe</h4>
                <p>Originally written in Java as an assignment for Programming II, this small game has been re-written in C#, with some extra features added.</p>
                <p>Each player selects an identifying character, making sure that each one is unique, and then takes turns placing that character on an 8x8 board.</p>
                <p>The first player to place 4 in a row, either horizontally, vertically, or diagonally, wins the game, with the winning squares highlighted.</p>
                <p>You can <a href="files/Tic-Tac-Game.application" download>download</a> the game to try it yourself, or view the source code on <a href="https://github.com/ClairePoulsen/Tic-Tac-Game.git" target="_blank">GitHub</a>.</p>
            </div>
        </div>
        <div id="sites" class="devex">
            <h3>Web Sites</h3>
            <div class="workimage">
                <a href="ui-perfect-site/index.html" target="_blank"><img src="images/winters-night-screenshot.jpg"/></a>
            </div>
            <div class="workdescrip">
                <h4><a href="ui-perfect-site/index.html" target="_blank">Winter's Night</a></h4>
                <p>Designed and written as a showcase of technical skill and to demonstrate a thourough understanding of good UI principles. This site was submitted as a final assignment for my User-Centered Interface Design course, and earned an A+.</p>
                <p>Intended to be the promotional site for a fictional video game, the site is comprised of over 1,100 lines of code. It was written in just under two weeks, due to frustrations with the lack of versatility in web site building services.</p>
                <small>Note: Since this was submitted as an assignment, the payment processing and newsletter sign-up features are intentionally non-functional.</small></div>
        </div>
        <?php writeFooter("sticky"); ?>
    </body>
</html>