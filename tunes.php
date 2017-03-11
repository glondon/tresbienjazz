<?php

/*
* Template Name: Tunes
*/

$nola_music = array('Basin Street Blues','Big Chief','Bill Bailey','Blueberry Hill','Bourbon Street Parade','Dinah','Do You Know What It Means.',
					'Grazin In The Grass','In The Summer Time','Iko Iko','Maple Leaf Rag','Mardis Gras In New Orleans','Oh When The Saints',
					'On The Sunny Side of The Street','Sheik of Araby','St. James Infirmary','Summertime','Sweet Georgia Brown','Sweet Lorraine',
					'The Entertainer','They All Asked For','What a Wonderful World','Walkin To New Orleans','When You’re Smilin’','Second Line',
					'Tipitina');
sort($nola_music);

$contemporary = array('Across The Universe','Alison','Brown Eyed Girl','Careless Whisper','Change The World','Closing Time','Don’t Know Why',
					  'Drift Away','Have a Little Faith In Me','Hello It’s Me','Hey There Delilah','Ho, Hey','Home','I’ll Be','New York State of Mind',
					  'Open Arms','One Love','Piano Man','Sara Smile','She Talks To Angels','The Long and Winding Road','You’ve Got A Friend',
					  'Your Song');
sort($contemporary);

get_header();

?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<h1>Tres Bien Song List</h1>

			<table>
				<tr>

					<td valign="top">

						<h2>NEW ORLEANS MUSIC</h2>

						<ul>
							<?php foreach($nola_music as $value) echo '<li>'.$value.'</li>'; ?>
						</ul>

						<h2>CONTEMPORARY MUSIC</h2>

						<ul>
							<?php foreach($contemporary as $value) echo '<li>'.$value.'</li>'; ?>
						</ul>
			

					</td>
					<td valign="top">
						<h2>NEW ORLEANS</h2>

						<ul>
							<li>Basin Street Blues</li>
							<li>Big Chief</li>
							<li>Bill Bailey</li>
							<li>Blueberry Hill</li>
							<li>Bourbon Street Parade</li>
							<li>Dinah</li>
							<li>Do You Know What It Means</li>
							<li>Georgia</li>
							<li>Grazin In The Grass</li>
							<li>In The Summer Time</li>
							<li>Iko Iko</li>
							<li>Oh When The Saints</li>
							<li>On The Sunny Side of The Street</li>
							<li>Sheik of Araby</li>
							<li>St. James Infirmary</li>
							<li>Summertime</li>
							<li>Sweet Georgia Brown</li>
							<li>Sweet Lorraine</li>
							<li>They All Asked For</li>
							<li>What a Wonderful World</li>
							<li>Walkin To New Orleans</li>
							<li>When Your’e Smilin</li>
							<li>Second Line</li>
							<li>Iko Iko</li>
							<li>Isn’t She Lovely</li>
							<li>It Don’t Mean a Thing..</li>
							<li>It Was a Very Good Year</li>
							<li>Just the Two of Us</li>
							<li>Killing Me Softly</li>
							<li>Let’s Stay Together</li>
							<li>Masquerade (This)</li>
							<li>Meditation</li>
							<li>Mercy,Mercy</li>
							<li>Misty</li>
							<li>More</li>
							<li>Mr. Magic</li>
							<li>Mr. PC</li>
							<li>My Foolish Heart</li>
							<li>My Funny Valentine</li>
							<li>My Favorite Things</li>
							<li>My Romance</li>
							<li>My Way</li>
							<li>New York, New York</li>
							<li>Oh When The Saints</li>
							<li>OnThe Sunny Side of The Street</li>
							<li>O Sole’ Mio</li>
							<li>Satin Doll</li>
							<li>Sheik of Araby</li>
							<li>Second Line</li>
							<li>Song For My Father</li>
							<li>Stagger Lee</li>
							<li>St. James Infirmary</li>
							<li>Summertime</li>
							<li>St. Thomas</li>
							<li>Stolen Moments</li>
							<li>Sugar</li>
							<li>Sweet Georgia Brown</li>
							<li>Sweet Lorraine</li>
							<li>Tangerine</li>
							<li>Take 5</li>
							<li>Take The “A” Train</li>
							<li>There Is No Greater Love </li>
							<li>They All Asked For You</li>
							<li>The Way You Look Tonight</li>
							<li>There Will Never B Another U</li>
							<li>Satin Doll</li>
							<li>St. Thomas</li>
							<li>Stolen Moments</li>
							<li>Take 5</li>
							<li>There Is No Greater Love You</li>
							<li>The Way You Look Tonight</li>

						</ul>

					</td>
					
					<td valign="top">

						<h2>BLUES</h2>

						<ul>

							<li>All Blues</li>
							<li>Blue Monk</li>
							<li>Freddie The Free Loader</li>
							<li>Mercy, Mercy</li>
							<li>Mr. PC</li>
							<li>Willow Weep For Me </li>

						</ul>

						<h2>BOSSA/LATIN FUNK</h2>
						<ul>
							<li>Black Orpheus</li>
							<li>Blue Bossa</li>
							<li>Feel Like Makin Love</li>
							<li>Girl From Ipanema</li>
							<li>Killing Me Softly</li>
							<li>Masquerade (This)</li>
							<li>Meditation</li>
							<li>Song For My Father</li>
							<li>Sugar</li>
							<li>Tipitina</li>
							<li>Torna Mia a Surrento</li>
							<li>Unforgettable</li>
							<li>Watermelon Man</li>
							<li>What a Wonderful World</li>
							<li>Walkin To New Orleans</li>
							<li>When I Fall In Love</li>
							<li>When Sunny Gets Blue</li>
							<li>When The Saints Go</li>
							<li>Marching In</li>
							<li>When Your’e Smilin</li>
							<li>Willow Weep For Me</li>
							<li>Witchcraft</li>
							<li>Work Song</li>
							<li>You Are The Sunshine of My..</li>
						</ul>

						<h2>BALLAD</h2>

						<ul>
							<li>As Time Goes By</li>
							<li>Do You Know What It Means</li>
							<li>Georgia</li>
							<li>God Bless The Child</li>
							<li>Hallelujah</li>
							<li>Here There, Everywhere</li>
							<li>I’ll Be There</li>
							<li>In a Sentimental Mood</li>
							<li>Misty</li>
							<li>My Foolish Heart</li>
							<li>My Funny Valentine</li>
							<li>Summertime</li>
							<li>When Sunny Gets Blue</li>
							<li>Unforgettable</li>
							<li>Mr. Magic</li>
							<li>Tangerine</li>
							<li>Watermelon Man</li>
							
						</ul>

					</td>

				</tr>
			</table>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer(); ?>