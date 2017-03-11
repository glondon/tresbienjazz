<?php

/*
* Template Name: Tunes
*/

$nola = array('Basin Street Blues','Big Chief','Bill Bailey','Blueberry Hill','Bourbon Street Parade','Dinah','Do You Know What It Means.',
			  'Grazin In The Grass','In The Summer Time','Iko Iko','Maple Leaf Rag','Mardis Gras In New Orleans','Oh When The Saints',
			  'On The Sunny Side of The Street','Sheik of Araby','St. James Infirmary','Summertime','Sweet Georgia Brown','Sweet Lorraine',
			  'The Entertainer','They All Asked For','What a Wonderful World','Walkin To New Orleans','When You’re Smilin’','Second Line',
			  'Tipitina');

$contemporary = array('Across The Universe','Alison','Brown Eyed Girl','Careless Whisper','Change The World','Closing Time','Don’t Know Why',
					  'Drift Away','Have a Little Faith In Me','Hello It’s Me','Hey There Delilah','Ho, Hey','Home','I’ll Be','New York State of Mind',
					  'Open Arms','One Love','Piano Man','Sara Smile','She Talks To Angels','The Long and Winding Road','You’ve Got A Friend',
					  'Your Song');

$wedding = array('Always and Forever','All of Me –John Legend','Bach’s Prelude in C','Bridal Chorus','Die a Happy Man','Endless Love','Hallelujah',
				 'Hands To Heaven','I’ll Be There','Isn’t She Lovely','Jesu, Joy Of Man’s Desiring','Just The Way You Are','Just The Two of Us',
				 'Let’s Stay Together','Makin’ Whoopee!','More','One Call Away','Over and Over Again','Pachelbel’s Canon in D','The Wedding Song',
				 'That’s What Friends Are For','Tonight, I Celebrate My Love','True Colors','Unforgettable','Up Where We Belong','Wedding March',
				 'We’ve Only Just Begun','When I Fall In Love','You Are So Beautiful','You Are The Sunshine of My Life');

$swing = array('Ain’t Miss Behavin','A Foggy Day','All of Me','All The Things You Are','Almost Like Being In Love','Autumn Leaves','A Child Is Born',
			   'A Foggy Day','Beyond the Sea','Bye Bye Blackbird','Days of Wine and Roses','Don’t Get Around Much Anymore','Dream a Little Dream of Me',
			   'Fly Me To The Moon','How High The Moon','I’m Old Fashioned','In a Mellow Tone','In The Mood','It Don’t Mean a Thing If It Ain’t Got That Swing',
			   'Mood Indigo','My Favorite Things','My Romance','New York, New York','Satin Doll','So What','St. Thomas','Stolen Moments','Take 5',
			   'Take The “A” Train','There Is No Greater Love','The Way You Look Tonight','There Will Never Be Another You','Witchcraft');


sort($nola);
sort($contemporary);
sort($wedding);
sort($swing);

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
							<?php foreach($nola as $value) echo '<li>'.$value.'</li>'; ?>
						</ul>

						<h2>CONTEMPORARY MUSIC</h2>

						<ul>
							<?php foreach($contemporary as $value) echo '<li>'.$value.'</li>'; ?>
						</ul>

					</td>
					<td valign="top">
						
						<h2>WEDDING MUSIC</h2>

						<ul>
							<?php foreach($wedding as $value) echo '<li>'.$value.'</li>'; ?>
						</ul>

						<p><strong>(Wedding selections provided upon request)</strong><p>

						<h2>SWING/STANDARDS</h2>

						<ul>
							<?php foreach($swing as $value) echo '<li>'.$value.'</li>'; ?>
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