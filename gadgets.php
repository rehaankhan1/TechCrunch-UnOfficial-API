


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style class="cp-pen-styles">@charset "UTF-8";
:root {
  --var-padding: 1em;
  --highlight: hsl(230, 38%, 46%);
  --highlight-dark: hsl(230, 38%, 36%);
  --logo-width: 6em;
  --logo-offset: 1em;
  --main-column-width: 25em;
}
* {
  box-sizing: border-box;
}
*::before, *::after {
  border-box: inherit;
}
.app {
  position: relative;
  padding-left: .5em;
  max-width: 60em;
  background: #acbbd7 100% linear-gradient(#6a696d 0%, #504949 50%, #acbbd7 50%, #acbbd7 100%);
  background-size: auto 10em;
  background-repeat: repeat-x;
  background-position: center top;
}
header {
  position: relative;
  height: 8em;
  grid-row: 1 / 3;
  grid-column: 2;
 
  background-size: cover;
  background-position: center;
}
header a {
  position: absolute;
  top: var(--logo-offset);
  left: var(--logo-offset);
  display: block;
  width: var(--logo-width);
}
header img {
  display: block;
  max-width: 100%;
}
nav {
  display: flex;
  padding: 1.5em var(--var-padding);
  grid-row: 1;
  grid-column: 1;
  background: #fff;
}
nav a {
  display: block;
  color: #333;
  text-decoration: none;
  border-bottom: 1px solid #333;
}
nav a + a {
  margin-left: 2em;
}
nav a:hover,
nav a:focus {
  border-color: var(--highlight);
  border-width: 2px;
}
nav a[aria-current] {
  border-bottom: 2px solid var(--highlight);
}
main {
  padding: var(--var-padding);
  grid-row: 2;
  grid-column: 1;
  background: #fff;
}
main h1 {
  margin-top: 0;
  font-weight: normal;
}
main h1 span {
  display: block;
  color: var(--highlight);
  font-weight: bolder;
}
main h1 sub {
  font-size: .5em;
}
main a {
  color: var(--highlight);
  text-decoration: none;
}
main a::after {
  margin-left: 1.5em;
  content: '→';
  vertical-align: baseline;
}
main a:hover, main a:focus {
  color: var(--highlight-dark);
}
main a:hover::after, main a:focus::after {
  margin-left: 2em;
}
html {
  min-height: 100vh;
  font-family: sans-serif;
  line-height: 1.5;
  background-color: #e9ebee; 
}
body {
  margin: 0;
}
@media (min-width: 37.5em) {
  :root {
    --var-padding: 3em;
  }
  body {
    margin: 1em;
  }
  .app {
    display: grid;
    margin: 3em auto;
    grid-template-rows: 5em auto;
    grid-template-columns: 1.4fr 1fr;
    padding-left: 2em;
    background-size: auto;
  }
  .app::after {
    position: absolute;
    right: 1em;
    left: 1em;
    bottom: 0;
    z-index: -1;
    width: 95%;
    height: 200px;
    content: '';
    box-shadow: 0 0 5em #7d604f;
  }
  header {
    height: auto;
  }
  header a {
    right: var(--logo-offset);
    left: auto;
  }
  nav {
    justify-content: space-between;
  }
  main {
    min-width: var(--main-column-width);
  }
}
</style></head><body>

<br>

<?php
require 'simple_html_dom.php';
//if (isset($_GET["num"])){
	
	//$num = $_GET["num"];
	
	$dar = "https://techcrunch.com/gadgets/";
	
	$html = file_get_html($dar);
for($i=0;$i<20;$i++){
	//$element = $html->find('span[itemprop=headline]');
	
	$title = $html->find('h2[class=post-block__title]');
	
	$links = $html->find('a[class=post-block__title__link]');
	
	 $img = $html->find('figure[class=post-block__media] img');
	 
	//$link  = $html->find('div[class=read-more] a');
	
	$pa = $html->find('div[class=post-block__content]');
	?>
	
	<div class="app">
  <header style="background-image: url('<?php echo $img[$i]->src; ?>')">
  </header>
 
  <main>
    <h1><?php echo $title[$i]->plaintext; ?></h1>
    <p><?php echo $pa[$i]->plaintext; ?></p>
    <a href="<?php echo $links[$i]->href; ?>">Read full article</a>
  </main>
</div>
	<br>
	
	
	<?php
	
}
	
//}
?>

</body></html>
