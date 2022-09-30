<?php include "header.php"; ?>

<main class="main container">

    <section>
        <article class='details'>
            <h2>Details of our menus</h2>
            <p>Choose your main course according to your menu!</p>
            <div class="toolbar">
    			<button class="button" data-filter="all">all</button>
    			<button class="button" data-filter=".meat">meat</button>
    			<button class="button" data-filter=".fish">fish</button>
    			<button class="button" data-filter=".vegan">vegan</button>
            </div>

        </article>
        <div class="mixitup">
            <img class=".meat" src="menus/meat-01.jpg"></img>
            <img class=".meat" src="menus/meat-02.jpg"></img>
            <img class=".meat" src="menus/meat-03.jpg"></img>
            <img class=".fish" src="menus/fish-01.jpg"></img>
            <img class=".fish" src="menus/fish-02.jpg"></img>
            <img class=".fish" src="menus/fish-03.jpg"></img>
            <img class=".vegan" src="menus/vegan-01.jpg"></img>
            <img class=".vegan" src="menus/vegan-02.jpg"></img>
            <img class=".vegan" src="menus/vegan-03.jpg"></img>
	    </div>
	    
	    <h3>Deserts</h3>
	    <p></p>
	    <article class="repas">
            <img class=".desert" src="menus/desert-01.jpg"></img>
            <img class=".desert" src="menus/desert-02.jpg"></img>
            <img class=".desert" src="menus/desert-03.jpg"></img>
	    </article>
	    
	    <h3>Cocktails</h3>
	    <p></p>
	    <article class="repas">
            <img class=".cocktail" src="menus/drink-01.jpg"></img>
            <img class=".cocktail" src="menus/drink-02.jpg"></img>
            <img class=".cocktail" src="menus/drink-03.jpg"></img>
	    </article>
    </section>
    
</main>
<?php include "footer.php"; ?>
