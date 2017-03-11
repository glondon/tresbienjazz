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

$blues = array('All Blues','Blue Monk','Chameleon','Freddie The Freeloader','Gee Baby, Ain’t I Good To You','Honky Tonk Train Blues','I’m Walkin',
			   'Mercy, Mercy, Mercy','Mr. PC','Mustang Sally','Sandu','Stagger Lee','Willow Weep For Me');

$ballads = array('As Time Goes By','Bewitched','Body and Soul','Do You Know What It Means.','Georgia On My Mind','God Bless The Child','Here There, Everywhere',
				 'I Left My Heart In San Francisco','I’ll Be There','In a Sentimental Mood','Isn’t It Romantic','It Was a Very Good Year','Let’s Stay Together',
				 'Misty','Moonlight In Vermont','Moonlight Serenade','Moon River','Mona Lisa','My Foolish Heart','My Funny Valentine','My Way','O’ Sole Mio',
				 'Somewhere','Somewhere Over The Rainbow','Strangers In The Night','Summertime','Tenderly','Torna a Surriento','When Sunny Gets Blue',
				 'When You Wish Upon a Star','Unforgettable');

$bossa = array('Black Orpheus','Blue Bossa','Desifinado','Dindi','Feel Like Makin Love','Girl From Ipanema','Killing Me Softly With His Song','This Masquerade',
			   'Meditation','Mr. Magic','Song For My Father','Sugar','Tangerine','The Shadow of Your Smile','Watermelon Man');


sort($nola);
sort($contemporary);
sort($wedding);
sort($swing);
sort($blues);
sort($ballads);
sort($bossa);

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

						<h2>BLUES/FUNK</h2>

						<ul>
							<?php foreach($blues as $value) echo '<li>'.$value.'</li>'; ?>
						</ul>

						<h2>BALLADS</h2>

						<ul>
							<?php foreach($ballads as $value) echo '<li>'.$value.'</li>'; ?>
						</ul>

						<h2>BOSSA/LATIN FUNK</h2>

						<ul>
							<?php foreach($bossa as $value) echo '<li>'.$value.'</li>'; ?>
						</ul>

					</td>

				</tr>
			</table>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer(); ?>