<?php

set_time_limit(0);

global  $wpdb,$one_time_insert;

//require_once (TEMPLATEPATH . '/delete_data.php');

$dummy_image_path = get_template_directory_uri().'/images/dummy/';





/*echo "<pre>";

print_r(get_option('sidebars_widgets'));

print_r(get_option('widget_pages'));

print_r(get_option('widget_widget_subscribe'));

exit;

*/





//====================================================================================//

/////////////// TERMS START ///////////////

//=============================CUSTOM TAXONOMY=======================================================//

$category_array = array

(array('Arts - Entertainment','Art','Movies - TV','Music','Performing Arts,Poetry'),

array('Business - Career','Career','Management','Sales - Marketing','Starting a Business','Sales'),

array('Computing','Hardware','Operating Systems','Networks','Software','Games'),

array('Health - Fitness','Alternative Treatments','Dental Health','Dieting','Fitness','Medical'),array('Places - Travelling Articles','Asia','North America','Europe','Travel Tips','Destinations'));

insert_taxonomy_category($category_array);

function insert_taxonomy_category($category_array)

{

	global $wpdb;

	for($i=0;$i<count($category_array);$i++)

	{

		$parent_catid = 0;

		if(is_array($category_array[$i]))

		{

			$cat_name_arr = $category_array[$i];

			for($j=0;$j<count($cat_name_arr);$j++)

			{

				$catname = $cat_name_arr[$j];

				if($j>1)

				{

					$catid = $wpdb->get_var("select term_id from $wpdb->terms where name=\"$catname\"");

					if(!$catid)

					{

					$last_catid = wp_insert_term( $catname, 'category' );

					}					

				}else

				{

					$catid = $wpdb->get_var("select term_id from $wpdb->terms where name=\"$catname\"");

					if(!$catid)

					{

						$last_catid = wp_insert_term( $catname, 'category');

					}

				}

			}

			

		}else

		{

			$catname = $category_array[$i];

			$catid = $wpdb->get_var("select term_id from $wpdb->terms where name=\"$catname\"");

			if(!$catid)

			{

				wp_insert_term( $catname, 'category');

			}

		}

	}

	

	for($i=0;$i<count($category_array);$i++)

	{

		$parent_catid = 0;

		if(is_array($category_array[$i]))

		{

			$cat_name_arr = $category_array[$i];

			for($j=0;$j<count($cat_name_arr);$j++)

			{

				$catname = $cat_name_arr[$j];

				if($j>0)

				{

					$parentcatname = $cat_name_arr[0];

					$parent_catid = $wpdb->get_var("select term_id from $wpdb->terms where name=\"$parentcatname\"");

					$last_catid = $wpdb->get_var("select term_id from $wpdb->terms where name=\"$catname\"");

					wp_update_term( $last_catid, 'category', $args = array('parent'=>$parent_catid) );

				}

			}

			

		}

	}

}



/////////////// TERMS END ///////////////

$post_info = array();

//////////// Arts - Entertainment /////////////



////post start 1///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img1.jpg" ;

$post_meta = array(

				   "templ_seo_page_title" =>'Works From the True Masters of Fear and Anxiety',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Works From the True Masters of Fear and Anxiety',

					"post_content" =>	'Fear is part of the fundamental core of human existence, as connected to the basic functions of survival and the psyche as the survival instinct or the need to mate. Fear and anxiety, therefore, are among the staples of any genre that deems itself fit to entertain the masses, an art form to be mastered in the hands of a true artiste. Fear, dread, and anxiety are all integral components of any successful horror story, for example, but not everyone who writes horror manages to get the mix of the important elements - -- pacing, plot, and characterization - -- all of which must be just right to create a classic that will frighten generations long after the first copy was printed. There are a few that manage to accomplish the difficult feat of being eternal in their horror and long-lasting in their ability to turn anxiety into outright terror.

					

Edgar Allan Poe, author of "Annabel Lee" and "The Fall of the House of Usher" , is easily recognized as one of the foremost masters of horror and the macabre. His works have inspired terror and anxiety in many individuals, primarily through the use of heavy psychological tones, as opposed to the gore and blood themes used and abused by writers of his time. Poes collected works easily counts as some of the most frightening material ever written, especially now, in an age where horror movies are relegated to two hours of bloodshed and senseless violence, lacking any true horror and relying solely on shock value to appear "scary." Poe also stands out as being among the few who can make even the most mundane things seem utterly terrifying, a feat emulated by Stephen King and several Japanese horror authors, but never truly duplicated.



In a completely different vein of horror from his predecessors, and arguably creating a sub-genre of horror through his works, H. P. Lovecraft also stands out. His works, while lacking in humanity, are difficult to see as anything but terrifying, particularly because of the apparent lack of humanity in them. In contrast to writers of previous generations, Lovecraft focused more on the truly monstrous, ignoring the human element that most horror writers tended to insert into their works since the days of the Gothic era. His stories were littered with monsters that knew neither morality nor mercy, seeing humanity as insignificant insects and, in Lovecrafts malignant world of ancient races and Elder Gods, humanity was insignificant. He also brought back something from the Gothic horror era, showing his readers that knowledge, even just a little knowledge, can lead to the most terrifying of discoveries. This is perhaps best exemplified by the so-called "Cthulhu Mythos," a collection of stories that centered around Lovecrafts anti-mythological beings.



<h3>Frankenstein</h3>

<ol>

	<li>Among the most enduring horror classics in the world is that of Shelleys "Frankenstein," which combines the elements of horror with the intrinsic questions that plagued morality and philosophy at the time. </li>

	<li>In some ways, the story is one that puts a new spin on the old ghost story, in that the "ghost" is inevitably caused by the actions of mortal men who meddled in things they were not meant to. </li>

	<li>The story, aside from being a genuine tale of terror, also took on the role of a lesson in morality and the limits to just how far medical science could go.</li>

	<li>Prolonging life is one thing, but bringing back the dead is another thing entirely, which is one of the subtle messages of the novel.</li>

	<li>The underlying question of whether or not Frankensteins creature is the monster, or if it is Frankenstein himself, also contributes to making the story a memorable, chilling tale.</li>

</ol> 



However, very few stories can truly stand up against the pure terror and the subtle anxiety and dread caused by Bram Stokers infamous novel, "Dracula." The novel is a hallmark of the Gothic horror era, presenting a villain of potentially epic scope in the guise of a remarkable gentleman and nobleman. It deviated from other vampire stories of the time in that the vampire, Dracula, was not monstrous in appearance. He looked every inch a master and nobleman, establishing the "lord of the night" archetype that would be a stock image of vampire characters in literature for centuries to come. It also had all the elements necessary to both frighten readers and keep them coming back for more, marking it as the most enduring horror novel in history.



',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Art'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 2///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img2.jpg" ;

$post_meta = array(

				   "templ_seo_page_title" =>'Display Your Strength With Eagle Tattoos',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Display Your Strength With Eagle Tattoos',

					"post_content" =>	'There are great deals of important factors that go into getting a tattoo, including where your tattoo belongs on your body. Different tattoos have different story and importance behind it. Eagle tattoos are one of them that reflect strength and are the common choices for men and women who serve as police officers, firefighters, soldiers, or other service members. Emphasizing articulates such as freedom, strength, and liberty are popular choices added to banners or underneath a tattoo of an eagle particularly if the tattoo is done as a memorial or tribute to someone to make the whole image impressive.

					

Eagles are counted among the birds of strength with strong talon that soars high in the sky and possess keen eyesight. The images of eagles hold an important position in history also. They appeared in various emblems of the past history in many different lands and their importance have been mentioned in different historical events of the past. For instance in Native American cultures, the free-spirited eagle are deeply profoundly honored and their feathers were also given importance. They were often given as a sign of pride, security or friendship. Even in ancient Greece eagle was worshiped as it was thought to have some association with the god Sun. You can also find the name of the eagle has been mentioned in the Norse mythology. It had some association with the god Odin, who represented wisdom.



<h3>Feature</h3>

<ol>

	<li>Eagle tattoos are unique in themselves and it can be also done in many different creative ways and just about anywhere on the body but still the most common area for this type of tattoo is the upper arm, followed by the shoulders, and the upper and lower back areas.</li>

	<li>Eagle tattoos whether it is with spread wings or roosting position are really eye-catching.</li>

	<li>The most important feature of eagle tattoo is its feather. </li>

	<li>So if the tattoo is done on a large area with spread wings where every details of the wing are clearly visible provides the eagle tattoo with a realistic appearance. </li>

	<li>The back is a great location for eagle tattoo with their wings fully spread as if in flight. </li>

	<li>You can also ink your back with another popular swooping pose of an eagle. </li>

	<li>This swooping poses of the eagle targeting its prey with sharp talons is really mind blowing, and of course the internet and many tattoo shops are full of images of the majestic eagle in varying poses.</li>

</ol> 



Small eagle tattoos featuring only the head of the bird can be inked on the leg or armbands, or can be incorporated into another design. There are many tattoo shops and websites that will provide you with varying poses of eagle.



',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Art'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 3///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img3.jpg" ;

$post_meta = array(

				   

				   "templ_seo_page_title" =>'Introduction to Chinese Painting',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Introduction to Chinese Painting',

					"post_content" =>	'Calligraphy and painting were two of the most prized art forms in antediluvian China. Calligraphy was thought to be the highest and purest form of painting. The annals of painting in China dates back to the 2nd century BCE. In the earliest era, painting and writing were made out on silk, until paper was subsequently developed during the 1st century CE.

					

Chinese art, and in particular, Chinese painting is greatly treasured around the globe. Chinese painting can be retraced to as far back as six thousand years ago in the Neolithic Age when the Chinese have started using brushes in their paintings. Chinese art dates back even sooner than that.



According to subject matter, Chinese paintings can be classified as landscapes, character paintings and flower-and-bird paintings. In traditional Chinese painting, Chinese landscape painting embodies a major category, depicting nature, especially mountains and bodies of water. Landscapes have customarily been the choice of the Chinese because they manifest the poetry characteristic in nature. Accordingly, many esteemed paintings are landscapes.



The most popularly known form of Chinese painting is "Water-ink" painting, where water-ink is the medium. Some of the basic things required for the Chinese painting include: paper, brush, ink or ink stick, ink stone, and color.



<ol>

	<li>Brush: The Chinese brush is a mandatory tool for Chinese painting. The brush should be sturdy and pliable. Two types of brushes are used. The more delicate brush is created from white sheep hair. This brush should be soaked first, and then dried to prevent curling. The second one is made from fox or deer sable fibers, which are very durable, and is inclined to paint better. The procedure the brush is used depends on the varied features of brush strokes one wants to obtain, such as weight, lightness, gracefulness, ruggedness, firmness, and fullness. Various forms of shades are applied to impart space, texture, or depth.</li>

	<li>Ink Stick: There are three types of Ink Stick: resin soot, lacquer soot, and tung-oil soot. Of the three, tung-oil soot is the most commonly used. Otherwise, Chinese ink is best if ink stick or ink stone are ineffectual.</li>

	<li>Paper: The most generally used paper is Xuan paper, which is fabricated of sandalwood bark. This is exceptionally water retentive, so the color or ink disperses the moment the brush stroke is put down. The second most well-known is Mian paper.</li>

	<li>Color: The most former Chinese paintings used Mo, a type of natural ink, to produce monochromatic representations of nature or day-to-day life. Made of pine soot, mo is combined with water to get unique shades for conveying appropriate layers or color in a painting.</li>

</ol> 



Chinese painting is called shui-mo-hua. Shui-mo is the combination of shui (water) and mo. There are two styles of Chinese painting. They are gong-bi or detailed style, and xie-yi or freehand style. The second is the most common, not only since the objects are depicted with just a few strokes, but likewise because shapes and sprites are drawn by uncomplicated curves and natural ink. Many ancient poets and students used xie-yi paintings to give tongue to their religious anguish.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Art'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 4///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img4.jpg" ;

$post_meta = array(

				   

				   "templ_seo_page_title" =>'Famous Paintings',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Famous Paintings',



					"post_content" =>	'Famous Paintings have been greatly admired in art history. Famous art paintings are invaluable and of great historic importance. Famous artists have been successful in creating famous artwork paintings. Canvas oil paintings make the most the popular form of the most famous Oil paintings. Famous Oil Paintings are of various styles. These include famous landscape paintings, famous still life paintings, famous fruit paintings, famous seascape paintings, famous contemporary paintings.

					

Famous artists paintings have earned world wide recognition in different periods of times. Famous painters paintings truly an asset for fine arts. There have been a great number of famous painters in different parts of the world in different periods of times. These include Marc Chagall, Salvador Dali, Leonardo Da Vinci, Paul Klee, Henri Matisse,Claude Monet, Pablo Picasso,Pierre Auguste Renoir,Henri Rousseau,Henri de Toulouse-Lautrec,Vincent Van Gogh,Andy Warhol.



<h3>Yo Picasso</h3>

<ol>

	<li>Famous abstract paintings present the fine art at the highest level. </li>

	<li>Famous abstract artists have been gratly greatly appreciated for their famous abstract oil paintings. </li>

	<li>Picasso is one of the most famous abstract painter. Picasso became very famous because he work in multiple styles.</li>

	<li>Famous paintings of Picasso are Guernica ,Three Musicians,The Three Dancers and Self Portrait: Yo Picasso.</li>

	<li>Picasso famous paintings have earned him worldwide recognition.</li>

</ol> 



Many famous flower paintings have been created by the outstanding flower painters. Famous Floral Oil Paintings are in wide range of styles. Famous floral fine art paintings are exquisite. Famous landscape paintings are the master pieces of fine art. Famous Landscape painters have created a great number of famous landscape paintings. Famous Landscape art has greatly been admired in all the periods of times. Famous contemporary landscape painters have successfully attained the mastery in the landscape art.



Still life fruit paintings and fruit bowl paintings make the famous fruit paintings. The highly skilled artists have also created the most famous paintings of rotting fruit. The modern famous artists are successful creating the masterpieces of still fruit oil paintings and oil pastel fruit paintings.



Famous still Life art depicts drinking glasses, foodstuffs, pipes, books and so on. Famous Still life paintings are indeed the master pieces of fine art. Woman portrait paintings make the famous portrait paintings. There are also famous portrait paintings of men. Famous portrait paintings of Oscar dela hova have been greatly appreciated. Japanese women portrait paintings are very popular in Japanese culture. In addition to women portrait paintings and portrait paintings of men, there are many famous pet portrait paintings and famous portrait paintings of houses and famous paintings of sports cars.



Famous Islamic paintings of holy places and the famous islamic calligraphy of the holy verses have been truly represent the muslim art. Famous muslim artists have developed mastery of Islamic art calligraphy. The famous Islamic paintings include the paintings of the Holy places such as Khana kaaba, Masjid-e-Nabvi and other famous mosques and shrines. Famous Islamic art is fascinating and has always been appreciated. The famous Islamic art galleries have produced a great number of famous muslim painters and famous muslim calligraphist.



Famous modern galleries have produced the famous contemporary artists who have created many famous contemporary paintings. Famous oil paintings reproduction are also created in these famous galleries.



In addition to above styles, there are many famous paintings of other subjects. These include famous war paintings, famous paintings of jesus, famous figure paintings, religious famous paintings, famous paintings romantic, famous battle paintings, famous military paintings, famous sunset paintings, famous paintings of women, famous paintings of love, famous water paintings, famous acrylic paintings, famous paintings of buildings, famous dance paintings, famous dragon paintings, famous black paintings, famous paintings in the fall, famous paintings of cats, famous paintings of children, famous paintings of friends, famous paintings of christinaity, famous paintings of jesus and famous paintings of humanity. There are also famous native American paintings and famous Spanish paintings.



',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Art'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 5///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img5.jpg" ;

$post_meta = array(

				   "templ_seo_page_title" =>'Art Theft: Most Famous Cases in History',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Art Theft: Most Famous Cases in History',

					"post_content" =>	'Art theft is an ancient and complicated crime. When you look at the some of the most famous cases of art thefts in history, you see thoroughly planned operations that involve art dealers, art fakers, mobsters, ransoms, and millions of dollars. Here you can read about some of the most famous cases of art theft in the history.



<h3>The First Theft:</h3>

The first documented case of art theft was in 1473, when two panels of altarpiece of the Last Judgment by the Dutch painter Hans Memling were stolen. While the triptych was being transported by ship from the Netherlands to Florence, the ship was attacked by pirates who took it to the Gdansk cathedral in Poland. Nowadays, the piece is shown at the National Museum in Gdansk where it was recently moved from the Basilica of the Assumption. The Most Famous Theft:

The most famous story of art theft involves one of the most famous paintings in the world and one of the most famous artists in history as a suspect. In the night of August 21, 1911, the Mona Lisa was stolen out of the Louver. Soon after, Pablo Picasso was arrested and questioned by the police, but was released quickly.



It took about two years until the mystery was solved by the Parisian police. It turned out that the 30x21 inch painting was taken by one of the museum employees by the name of Vincenzo Peruggia, who simply carried it hidden under his coat. Nevertheless, Peruggia did not work alone. The crime was carefully conducted by a notorious con man, Eduardo de Valfierno, who was sent by an art faker who intended to make copies and sell them as if they were the original painting.



While Yves Chaudron, the art faker, was busy creating copies for the famous masterpiece, Mona Lisa was still hidden at Peruggias apartment. After two years in which Peruggia did not hear from Chaudron, he tried to make the best out of his stolen good. Eventually, Peruggia was caught by the police while trying to sell the painting to an art dealer from Florence, Italy. The Mona Lisa was returned to the Louver in 1913.



<h3>The Biggest Theft in the USA:</h3>

The biggest art theft in United States took place at the Isabella Stewart Gardner Museum. On the night of March 18, 1990, a group of thieves wearing police uniforms broke into the museum and took thirteen paintings whose collective value was estimated at around 300 million dollars. The thieves took two paintings and one print by Rembrandt, and works of Vermeer, Manet, Degas, Govaert Flinck, as well as a French and a Chinese artifact.



As of yet, none of the paintings have been found and the case is still unsolved. According to recent rumors, the FBI are investigating the possibility that the Boston Mob along with French art dealers are connected to the crime.



<h3>The Scream:</h3>

The painting by Edvard Munchs, The Scream, is probably the most sought after painting by art thieves in history. It has been stolen twice and was only recently recovered. In 1994, during the Winter Olympics in Lillehammer, Norway, The Scream was stolen from an Oslo gallery by two thieves who broke through an open window, set off the alarm and left a note saying: thanks for the poor security.



Three months later, the holders of the painting approached the Norwegian Government with an offer: 1 million dollars ransom for Edvard Munchs The Scream. The Government turned down the offer, but the Norwegian police collaborated with the British Police and the Getty Museum to organize a sting operation that brought back the painting to where it belongs.



Ten years later, The Scream was stolen again from the Munch Museum. This time, the robbers used a gun and took another of Munchs painting with them. While Museum officials waiting for the thieves to request ransom money, rumors claimed that both paintings were burned to conceal evidence. Eventually, the Norwegian police discovered the two paintings on August 31, 2006 but the facts on how they were recovered are not known yet.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Art'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 6///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img6.jpg" ;

$post_meta = array(

				   

				   "templ_seo_page_title" =>'How to Select Art for Your Home',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'How to Select Art for Your Home',

					"post_content" =>	'Selecting art for your home can be an exciting adventure and a source of enjoyment for years to come. Keys to success are figuring out what kind of art you like, how it will fit in with the rest of your interior design plans, and how to exhibit the art to the best effect in your home.

					

<h3>What kind of art do you like?</h3>

There are many opportunities to browse art within your community at local exhibitions, art fairs and galleries. Even small towns usually have a not-for-profit gallery space, or cafes and restaurant that exhibit local artists. In larger cities, galleries often get together for monthly or periodic "gallery nights" where all the galleries hold open house receptions on the same evening. Its a great way to see a lot of art in a short time.



Today the internet provides the largest variety and depth of fine art available worldwide. You can visit museum websites and see master works from ages past, check out online galleries for group shows, and visit hundreds of individual artists websites. One advantage of using the internet is that you can search for the specific kind of art you are interested in, whether its photography, impressionism, bronze sculpture, or abstract painting. And when you find one art site, youll usually find links to many, many more.



<h3>Should the art fit the room or the room fit the art?</h3>

If you feel strongly about a particular work of art, you should buy the art you love and then find a place to put it. But you may find that when you get the art home and place it on a wall or pedestal, it doesnt work with its surroundings. By not "working," I mean the art looks out of place in the room. Placing art in the wrong surroundings takes away from its beauty and impact.



What should you do if you bring a painting home and it clashes with its environment? First, hang the painting in various places in your home, trying it out on different walls. It may look great in a place you hadnt planned on hanging it. If you cant find a place where the art looks its best, you may need to make some changes in the room, such as moving furniture or taking down patterned wallpaper and repainting in a neutral color. The changes will be worth making in order to enjoy the art you love.



Sometimes the right lighting is the key to showing art at its best. You may find that placing a picture light above a painting or directing track lighting on it is all the art needs to exhibit its brilliance. If you place a work of art in direct sunlight, however, be sure it wont be affected by the ultraviolet light. Pigments such as watercolor, pencil and pastel are especially prone to fading. Be sure to frame delicate art under UV protected glass or acrylic.



<h3>How to pick art to fit the room.</h3>

Size and color are the two major criteria for selecting art to fit its surroundings. For any particular space, art that is too large will overwhelm, and art that is too small will be lost and look out of proportion. The bolder the art, the more room it needs to breathe.



As a rule, paintings should be hung so that the center of the painting is at eye level. Sculpture may sit on the floor, a table, or pedestal, depending on the design. Rules should be considered guidelines only, however, so feel free to experiment.



When selecting a painting to match color, select one or two of the boldest colors in your room and look for art that has those colors in it. Youre not looking for an exact match here. Picking up one or two of the same colors will send a message that the painting belongs in this environment.



Another possibility for dealing with color is to choose art with muted colors, black-and-white art, or art that is framed in a way that mutes its color impact in the room. A wide light-colored mat and neutral frame create a protected environment for the art within.



Style is another consideration when selecting art to fit a room. If your house is filled with antiques, for example, youll want to use antique-style frames on the paintings you hang there. If you have contemporary furniture in large rooms with high ceilings, youll want to hang large contemporary paintings.



<h3>How to create an art-friendly room.</h3>

Think about it. When you walk into a gallery or museum, what do they all have in common? White walls and lots of light. If a wall is wall-papered or painted a color other than white, it limits the choices for hanging art that will look good on it. If a room is dark, the art will not show to its best advantage.



If you want to make art the center of attraction, play down the other elements of the room like window coverings, carpeting, wall coverings, and even furniture. A room crowded with other colors, textures and objects will take the spotlight away from the art. Follow the principle that less is more. Keep it spare and let the art star. Then relax and enjoy it.



Selecting and displaying art is an art in itself. Experiment to learn what pleases you and what doesnt. Youll be well-rewarded for the time you invest by finding more satisfaction both in the art and in your home.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Art'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 7///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img7.jpg" ;

$post_meta = array(

				   

				   "templ_seo_page_title" =>'Contemporary Paintings',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Contemporary Paintings',

					"post_content" =>	'Contemporary paintings are an exquisite style of paintings. Contemporary art paintings are the true representatives of the modern art. Contemporary artists are creating the contemporary oil paintings of the high quality. A great number of contemporary oil paintings are available in the contemporary art gallery. Contemporary art is of great artistic importance. Contemporary abstract paintings make the most of contemporary art. Still life Contemporary paintings are also very much appreciated.

					

There are many museums of modern paintings all over the world. The modern paintings of the modern artists are exhibited in these museums. These museums of modern art have been successful in flourishing the contemporary art. Modern artists exhibit their modern paintings creations in the museum of contemporary art. Museum of modern art New york, Contemporary art museum Houston, museum of modern art paris, art museum of Fort worth are the famous museums of contemporary art. Contemporary art work can be seen in these modern art museums.These museums exhibit the popular contemporary paintings of the famous modern artists.



<h3>Modern Abstract Art</h3>

<ol>

	<li>There are great number of painters of modern life. </li>

	<li>They have created the modern abstract art on modern themes. </li>

	<li>Modern artists paint colours in an artistic way. </li>

	<li>Their contemporary oil paintings are pure form of fine arts. </li>

	<li>History of modern art is full of great contemporary paintings from famous modern artists. </li>

	<li>19th century paintings and 20th century paintings are worth seeing. </li>

	<li>Modern art movements have been in progress in recent times. </li>

	<li>There are many contemporary art centers. </li>

	<li>Contemporary art center Cincinnati and Contemporary art center of Virginia are the famous modern art center. </li>

	<li>St.Louis contemporary art has been very much appreciated. Contemporary Christian artists</li>

<ol>



Modern art is also available for sale. Modern and contemporary art can be purchased from the modern art gallery. These contemporary art galleries offer the Original modern paintings of the famous contemporary artist. The reproductions of the famous contemporary paintings can also be purchased from these modern art galleries. These galleries also offer cheap price modern oil paintings.



Good News for lovers of modern art ! You can get Contemporary and Modern Oil Paintings of your own choice just by selecting the Model number of the Landscape Oil Painting or by sending the Photo of your required image. Our highly skilled modern artists can reproduce the contemporary paintings as per your given photo. Just click the Link of Contemporary paintings on our website (www.paintingsgifts4u.com) . For more details, Please contact us at : info@paintingsgifts4u.com.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Art'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 8///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img8.jpg" ;

$post_meta = array(

				   

				   "templ_seo_page_title" =>'The Great Story About Rembrandts Life and History',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'The Great Story About Rembrandts Life and History',

					"post_content" =>	'While the world pays respectful tribute to Rembrandt Van Ryn the artist, it has been compelled to wait until comparatively recent years for some small measure of reliable information concerning Rembrandt Van Ryn the man. Rembrandt Van Ryn was born in the pleasant city of Leyden, but it is not easy to name the precise year. Somewhere between 1604 and 1607 he started his troubled journey through life, and of his childhood the records are scanty. Doubtless, his youthful imagination was stirred by the sights of the city, the barges moving slowly along the canals, the windmills that were never at rest, the changing chiaroscuro of the flooded, dyke-seamed land. Perhaps he saw these things with the large eye of the artist, for he could not have turned to any point of the compass without finding a picture lying ready for treatment.

	

His family soon knew that he had the makings of an artist and, in 1620, when he could hardly have been more than sixteen, and may have been considerably less, he left Leyden University for the studio of a second-rate painter called Jan van Swanenburch. We have no authentic record of his progress in the studio, but it must have been rapid. He must have made friends, painted pictures, and attracted attention. At the end of three years he went to Lastmans studio in Amsterdam, returning thence to Leyden, where he took Gerard Dou as a pupil. A several years later, it is not easy to settle these dates on a satisfactory basis, he went to Amsterdam, and established himself there, because the Dutch capital was very wealthy and held many patrons of the arts, in spite of the seemingly endless war that Holland was waging with Spain.



His art remained true and sincere, he declined to make the smallest concession to what silly sitters called their taste, but he did not really know what to do with the money and commissions that flowed in upon him so freely. The best use he made of changing circumstances was to become engaged to Saskia van Uylenborch, the cousin of his great friend Hendrick van Uylenborch, the art dealer of Amsterdam. Saskia, who was destined to live for centuries, through the genius of her husband, seems to have been born in 1612, and to have become engaged to Rembrandt Van Ryn when she was twenty. The engagement followed very closely upon the patronage of Rembrandt Van Ryn by Prince Frederic Henry, the Stadtholder, who instructed the artist to paint three pictures.



<ol>

	<li>Saskia is enshrined in many pictures. </li>

	<li>She is seen first as a young girl, then as a woman. </li>

	<li>As a bride, in the picture now at Dresden, she sits upon her husbands knee, while he raises a big glass with his outstretched arm. </li>

	<li>Her expression here is rather shy, as if she deprecated the situation and realised that it might be misconstrued. </li>

	<li>This picture gave offence to Rembrandt Van Ryns critics, but some portraits of Saskia remained to be painted. </li>

	<li>She would seem to have aged rapidly, for after marriage her days were not long in the land. </li>

	<li>She was only thirty when she died, and looked much older.</li>

</ol>



In 1638 we find Rembrandt Van Ryn taking an action against one Albert van Loo, who had dared to call Saskia extravagant. It was, of course, still more extravagant of Rembrandt Van Ryn to waste his money on lawyers on account of a case he could not hope to win, but this thought does not seem to have troubled him. He did not reflect that it would set the gossips talking more cruelly than ever. Still full of enthusiasm for life and art, he was equally full of affection for Saskia, whose hope of raising children seemed doomed to disappointment, for in addition to losing the little Rombertus, two daughters, each named Cornelia, had died soon after birth. In 1640 Rembrandt Van Ryns mother died. Her picture remains on record with that of her husband, painted ten years before, and even the biographers of the artist do not suggest that Rembrandt Van Ryn was anything but a good son. A year later the well-beloved Saskia gave birth to the one child who survived the early years, the boy Titus. Then her health failed, and in 1642 she died, after eight years of married life that would seem to have been happy. In this year Rembrandt Van Ryn painted the famous "Night Watch," a picture representing the company of Francis Banning Cocq, and incidentally a day scene in spite of its popular name. The work succeeded in arousing a storm of indignation, for every sitter wanted to have equal prominence in the canvas.



It may be said that after Saskias death, and the exhibition of this fine work, Rembrandt Van Ryns pleasant years came to an end. He was then somewhere between thirty-six and thirty-eight years old, he had made his mark, and enjoyed a very large measure of recognition, but henceforward, his career was destined to be a very troubled one, full of disappointment, pain, and care. Perhaps it would have been no bad thing for him if he could have gone with Saskia into the outer darkness. The world would have been poorer, but the man himself would have been spared many years that may be even the devoted labours of his studio could not redeem.



Between 1642, when Saskia died, and 1649, it is not easy to follow the progress of his life; we can only state with certainty that his difficulties increased almost as quickly as his work ripened. His connection with Hendrickje Stoffels would seem to have started about 1649, and this woman with whom he lived until her death some thirteen years later, has been abused by many biographers because she was the painters mistress.



He has left to the world some 500 or 600 pictures that are admitted to be genuine, together with the etchings and drawings to which reference has been made. He is to be seen in many galleries in the Old World and the New, for he painted his own portrait more than a score of times. So Rembrandt Van Ryn has been raised in our days to the pinnacle of fame which is his by right; the festival of his tercentenary was acknowledged by the whole civilised world as the natural utterance of joy and pride of our small country in being able to count among its children the great Rembrandt Van Ryn.

					

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Art'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 9///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img9.jpg" ;

$post_meta = array(

				   

				   "templ_seo_page_title" =>'Tomma Abts - Abstract Art is OK but not KO.',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Tomma Abts - Abstract Art is OK but not KO.',

					"post_content" =>	'In 2006 the Turner Prize gained its first ever female winner. The artist who achieved this feat hails from Germany and is called is Tomma Abts. In order to carry off the Turner Prize - in the final, Tomma had to overcome three notable artists .



In no particular order of importance these were - sculptress Rebecca Warren who was the fancied hot favourite with many bookies, "billboard artist" Mark Titchner - and finally film maker Phil Collins...(No not him of Genesis fame!).



When the judges cast their votes however it was Tomma Abts who came out on top. She won twenty five thousand british pounds and of course the Turner Prize itself. I am sure the money will come in handy - however its the exposure that Tomma will get from winning thats the really important thing here.



What does Tomma Abts do? Well she actually paints abstract art; usually in oils or acrylics. - something of a novelty for the Turner Prize - some would say! Tomma Abts was originally selected for her solo art exhibitions at Kunsthalle Basel, Switzerland, and Greengrassi, London.



<ol>

	<li>Tomma Abts has been praised by no less than the Tate Gallery who describes her canvases as "intimate" and "compelling" . </li>

	<li>They also comment on Tommas "consistent" and even "rigorous" method of painting. </li>

	<li>In addition the Tate states that Tomma Abts "enriches the language of abstract art" .</li>

	<li>With such praise heaped upon her head its no surprise to me that she won the prize. </li>

	<li>However I actually feel that Tommas abstract artwork isnt "knock out" but it definitely is OK.</li>

</ol>



The images or paintings of Tomma Abts are created by the repetiton of various geometrical shapes on a base of rich colour. Personally - I dont think that Tommas approach to painting is particularly original. However I have to admit that while not being "knock out" I find some of Tommas images pretty compelling and touching. I have to say that this does surprise me.



48 x 38 cms - exactly. These are the dimensions of every Tomma Abts painting. Im not sure quite why Tomma selected these dimensions. Obviously she finds them appealing and I suppose they make for a very compact painting.



When creating titles for her paintings apparently Tomma simply plucks one from a dictionary of German first names! Titles like "Veeke" for example were created in this way. In my view this is surely only slightly more interesting than numbering each picture!



All in all I think that Tomma Abts creates abstract art that is pretty accessible to the public at large. This is something that perhaps could not be said about the artwork of previous Turner Prize winners! I base my opinion of course on Tommas prize winning paintings. I would go further and state that I cannot conceive of a Tomma Abts creation offending anyone - even slightly.



In the end its just my personal opinion but I do believe that its entirely posible that Tomma Abts will go on to become a household name - within her own lifetime...Of course she could also disappear without trace from the media - and our minds in the blink of an eye, for precisely the same reasons.				

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Art'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 10///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img10.jpg" ;

$post_meta = array(

				   "templ_seo_page_title" =>'Islamic calligraphy',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Islamic calligraphy',

					"post_content" =>	'Islamic Calligraphy has arguably become the most reverenced form of Islamic art. It provides a link between the languages of the Muslims with the religion of Islam. The Muslim calligraphists have great contributions in taking this Islamic art to this zenith. The holy book of Islam, Al-Quran, has played an important role in the development and evolution of the Arabic language, and by extension, calligraphy in the Arabic alphabet. The famous Islamic artists have created Arabic calligraphy of supreme quality. Till today, The chief sources for Islamic calligraphy are the proverbs and complete passages from the Holy Quran. In modern times, the supply of Islamic calligraphy has also become a flourishing Islamic art business.

					

Islamic calligraphy is a visible expression of the highest art of all for the muslim. It is the art of the spiritual world. Calligraphy literally means writing beautifully and ornamentally. Islamic calligraphy is the art of writing, and by extension, of bookmaking. This art has most often employed the Arabic script, throughout many languages. Since Arabic calligraphy was the primary means for the preservation of the Quran, Calligraphy is especially revered among Islamic arts. The work of the famous muslim calligraphers were collected and greatly appreciated throughout Islamic history. Consideration of figurative art as idolatrous led to calligraphy and abstract figures becoming the main methods of artistic expression in Islamic cultures. Contemporary muslim calligraphers are also producing the Islamic calligraphy of high artistic quality.



<h3>Calligraphic scripts</h3>

<ol>

	<li>The Kufic script is the first of those calligraphic scripts to gain popularit. </li>

	<li>It was angular, made of square and short horizontal strokes, long verticals, and bold, compact circles. </li>

	<li>For three centuries, this script had been mainly used to copy the Quran. </li>

	<li>The cursive Naskh script was more often used for casual writing. </li>

	<li>This script had rounder letters and thin lines. </li>

	<li>It would come to be preferred to Kufic for copying the Quran as techniques for writing in this style were refined. </li>

	<li>Almost all printed material in Arabic is in Naskh. </li>

	<li>The Thuluth would take on the ornamental role formerly associated with the Kufic script in the 13th century. </li>

	<li>Thuluth is usually written in ample curves as it has a strong cursive aspect. </li>

	<li>The Persians took to using Arabic script for their own language, Persian after their conversion to Islam. </li>

	<li>The Taliq and Nastaliq styles were contributed to Arabic calligraphy by the Persians. </li>

	<li>Nastaliq style is extremely cursive, with exaggeratedly long horizontal strokes. </li>

	<li>The Diwani script is a cursive style of Arabic calligraphy. </li>

	<li>It was developed during the reign of the early Ottoman Turks (16th and early 17th centuries). </li>

	<li>This outstanding Diwani script was both decorative and communicative. </li>

	<li>Finally, Riqa is the most commonly used script for everyday use. </li>

	<li>It is simple and easy to write. </li>

	<li>Its movements are small.</li>

	<li>In China, a calligraphic form called Sini has been developed. </li>

	<li>This form has evident influences from Chinese calligraphy. </li>

	<li>Hajji Noor Deen Mi Guangjiang is a famous modern calligrapher in this tradition.</li>

</ol>

 

<h3>Calligrams<h3>

The most Islamic of arts in the Muslim world, has also its figurative sides. The muslim calligraphers have produced wonderful anthropomorphic figures by interweaving written words, made from an "Allah" , a "Muhammad" , a "Bismillah" , etc., or using micrography. These include , (Ali, the Ideal Human of mystics, a praying man, a face), (Duldul, horse of Ali, horse (Alis Duldul), fish, stork or other bird (the quranic Hudhud) and unanimated representations (a sword (Dhu al-Fiqar) and a mosque. Calligrams are related to Muslim mysticism and popular with many leading calligraphers in Turkey, Persia and India from the 17th century onward.



<h3>Pakistani Islamic Calligraphy</h3>

Pakistan has produced Islamic calligraphist of international recognition. Sadeqain is on of these international fame Islamic calligraphist. He was an untraditional and self-made, self-taught painter and calligrapher. He did a lot of work on Quranic calligraphy. Many other contemporary Pakistani calligraphists like Gul Gee have created great contemporary Islamic calligraphy. These days, Islamic calligraphies of Tufail and Uzma Tufail are getting very much popular both in Pakistan and all over the world.



<h3>Islamic Calligrahpy as an Islamic Gift</h3>

The Muslims love to adore their homes, offices and places of their work with the Islamic calligraphy. The Islamic calligraphies especially the verses from the Holy Quran and the verses from the sayings of the Holy Prophet are considered to be very sacred to muslims. Islamic calligraphy indeed make the perfect gift for a muslim for any special occasion. A muslim can send an Islamic gift of Islamic calligraphy to congratulate his relative or friend on his new home or new office or on his birthday or wedding ceremony or on Eid Festival.



It is great news for the muslims living all over the world to get the Islamic paintings and Islamic calligraphy of their own choice. Please visit our website at www.paintingsgifts4u.com and click the section of the Islamic paintings. You can get Islamic Calligraphy of your choice just by selecting the Item number of the Islamic Painting or by sending the Holy verse of your choice. We also supply Islamic paintings and Islamic Calligraphy from Pakistan on wholesale basis at very best prices. We are supplying cheap Islamic paintings and cheap Islamic calligraphies with high quality. 

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Art'),

					"post_tags" =>	array('Tags','Sample Tags')



					);

////post end///

//====================================================================================//

////post start 1///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img1.jpg" ;

$post_meta = array( 

				   "templ_seo_page_title" =>'Hollywoods Fling with the Mob',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Hollywoods Fling with the Mob',

					"post_content" =>	'Hollywood is home to some of the biggest movie production companies, directors, actors and actresses. Today Hollywood is the word used for the glamorous multibillion dollar US film industry. It is also home to some of the world biggest names in the entertainment industry and a place that most up and comers aspire to be on day. How could Hollywood ever be linked with the Mob? On the surface Hollywood would seem to be worlds apart from the murderers, extortionist, and gangsters in the Mob. But on closer inspection you can see that the film industry and the mob are very similar indeed.

					

Many of the Hollywood stars and moguls often originated from the same place as the gangsters, in that they were immigrants from Europe or sons of immigrants. For instance, the Warner brothers were sons of a Polish cobbler while the Cohn brothers were sons of a German tailor. And Frank Sinatras grandfather lived in the same village as Lucky Luciano.



With the film industry being so successful in Hollywood, of course the mafia would be attracted to it and the huge potential for financial gain. The need for huge amounts of cash to create a movie meant that this was perfect for laundering money unlike other forms of "fronting" such as a manufacturing business which take a bit of time to set up before they can start washing money. So the mafia would be naturally attracted to such an opportunity. It would be simple enough for the mafia to move into the film industry.



<ol>

	<li>Bankers were always reluctant to lend the huge sums required to make a film</li>

	<li>Because they saw the film industry a volatile and unable to produce a consistent return on investment, but the gangsters who already controlled the film industry unions were prepared to take a greater risk for bigger reward.</li>

	<li>Control of the unions gave the mob greater leverage over the film industry.</li>

	<li>Although the big movie producers were all too happy to jump into bed with the mob because it afforded them more financial freedom.</li>

</ol>   



Film historian David Thomson once said that the Hollywood moguls in the Golden Age (1920s to late 1950s) often behaved like gangsters, which was probably largely down to their very close relationship with the mob. MGM boss Louis B. Mayer was good friends with gangster �turned-agent Frank Orsatti, while Chicago mobster Johnny Rosselli was so close to Columbia studios boss Harry Cohn that they wore identical rings.



Writer Raymond Chandler who also wrote many screen plays for Hollywood producers once wrote to a friend after noticing the similiarities between the Hollywood executives and the Mafiosi. He wrote:

"Once looking out of Joe Sistroms window on the (Universal) lot, I happened to see the big boys strolling back from lunch in the exec dining room in a loose group. I was transfixed with a sinister delight. They looked exactly like a bunch of topflight Chicago gangsters moving in to read the death sentence on a beaten competitor. It brought home to me in a flash the strange psychological and spiritual kinship between the operations of big money business and the rackets. Same faces, same expressions, same manners. Same way of dressing and same exaggerated leisure of movement." The mafia has intimidated actors and producers with threats and violence since the 1930s, extorting the studios for up to $1.5 million a year, which would be the equivalent of $14 million in todays times. The mafia is reportedly still at it these days although there are now huge barriers to get over to gain entry into the movie business. Most of their business can only be done at lower levels now and on a smaller scale. It was reported that as recently as 7 years ago members of the Gambino crime family were imprisoned for threatening and trying to extort the actor Steve Seagal.



I am sure that the relationship between Hollywood and the Mob was/is not just for financial reason. The moguls of Hollywood loved to rub shoulders with the high flying gangsters because it added that certain power that they craved, and for the gangsters, having a friend or friends who was successful in the movie business would bring a lot of prestige and street cred.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Movies - TV'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 2///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img2.jpg" ;

$post_meta = array( 

				   "templ_seo_page_title" =>'Tips on Writing a Movie Review',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Tips on Writing a Movie Review',

					"post_content" =>	'Writing a movie review is simple and fun. We all love to watch a good film and most of us would like to know what other peoples opinions are on a film before we waste a couple of hours of or lives watching something that we just dont enjoy. So writing a review on that film you just watched will help another person to make a decision. I will show you some tips for writing a good film review.

					

We all have different perspectives on a film after watching it, and everyone will have an opinion on the movie they have just watched. Writing a review so that other people can see your opinion could be beneficial and also helps you get your feelings about the film off your chest.





If youre interested in writing movie reviews for profit or just for fun you will find that it isnt as difficult as you think. There are just a few steps to follow to share your opinions on the latest film.

You can catch up on the latest films in all manner of ways these days; you could easily purchase cheap DVDs online. The Amazon market place has a huge selection of movies to choose from. You could even stream movies online.



<ol>

	<li>Once you have selected your movie, get familiar with its context. </li>

	<li>So before you have even seen the movies you should get yourself familiar with it. </li>

	<li>Have some idea about the actors in the film like what films they have done in the past?</li>

	<li>Have they won any awards for past performances, are they known for a certain style? Etc. </li>

	<li>Is the movie based on any historical event or book? </li>

	<li>Other things that would be useful to note is, is the film a sequel or a remake? </li>

	<li>By learning this information about the film means you will be able to make some comparisons in your review, like the actors performance in this film compared to pass performances, or how the remake compares to the original.</li>

	<li>Once you have seen the movie you will most likely have a lot to say about the film. </li>

	<li>Formulate your opinion of the film into one sentence to give your overall rating of the film. </li>

	<li>This will give your readers an instant idea of what you thought of the film. </li>

	<li>This will also form the foundation of your movie review. </li>

	<li>Starting your review with things such as "I thought this was an excellent movie because..." or "I didnt like this comedy because..." would be a good idea.</li>

</ol>



In writing a review one important tip is grab your reader immediately. This tip applies to most forms of writing. You will want to have the reader interested in what you have to say in the first few lines of your review. One idea is to start with a good quote from the movie; you could explain how this quote reflects the movie. You could also compare this film to other well-known films in the same category, or talk about the actor/actors performance in this film compared to other films they have been in, then end the paragraph with your opinion on the movie.





Now talk about the movie briefly, but dont give away any key things about the movie. Most professional reviews always include a recap of the film because most readers will want to know a little bit about the film and get the general idea of what the film is about. You can talk about the basics of the film and give a brief outline of how the film builds but dont give away key moments and definitely dont give away the ending. Keep the synopsis brief as your readers will be more interested in what your opinion of the film is.



You should back up you opinion of the film with specifics. Explain exactly why you didnt think the film stood up alongside other films in its category, or why you thought the film dragged on too long. Mention scenes that you thought were not necessary, or didnt make sense; you could also mention what you thought of the script backed up with quotes from the film.





Keep your review interesting, whether you are writing about a film that you didnt enjoy or a film that you thought was the best film ever the idea is to keep your reader interested. The reader will want to know exactly why you thought this film was so great or why its not worth watching. From start to finish your review should be engaging, but also be concise.



Give an honest review of the movie. Writing a movie review should not be used as a tool to turn everyone against a film or vent anger about your wasted hours watching it. If you write an honest in depth review of a film then it should be left up to the reader as to whether the still wish to watch the film or not.



So go on, write that review. The internet could do with more well written and honest movie reviews.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Movies - TV'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 3///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img3.jpg" ;

$post_meta = array(

				    

				   "templ_seo_page_title" =>'Large TVs Or Going to the Cinema',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Large TVs Or Going to the Cinema',

					"post_content" =>	'Years ago, when cinema first became popular, for a lot of people it was the only way for them to see movies, because most of them didnt have their own televisions. The thing is though, cinema has always had a much better quality viewing experience than home televisions, so it has remained the ultimate way to experience a movie.

					

<h3>The Creation of Video Tapes</h3>

For both TV and cinema, the problem for a long time was that you needed to watch a film at a certain time. When home video cassettes like Betamax and VHS first came about, suddenly there was a way to watch films at whatever time you wanted. However, there was still the problem of quality, as cinema was still a far superior experience than watching a video at home.



<h3>The Rise of DVDs</h3>

Part of the quality issue was dramatically improved with the invention of the DVD. DVD meant that anyone could watch very high quality digital video at home. As long as you didnt scratch the discs, DVDs remained at the same quality, as opposed to gradually wearing out like VHS cassettes would. Throughout the 90s and 00s, the DVD was the king of the entertainment world. The only problem was, unless you had an extremely large TV screen and a very expensive sound system, you still wouldnt get the same experience as the cinema.



<h3>The Home Cinema Experience</h3>

Nowadays, the true home cinema experience is becoming much more of a reality for many people, as they buy large widescreen TVs and high quality speakers. For example, with a plasma TV screen of 50 inches or more, and being sat closer to the screen than you would be in a cinema, youre going to get a very cinematic feel. And you wont miss having someone sat behind you who wont stop talking through every scene.



<h3>Why You Should Still Go to the Cinema</h3>

However, even with home cinema quality jumping forwards in leaps and bounds, dont you think theres still something missing? Going out of the cinema is just something special. It gives you a reason to spend time with your friends and experience something together. And if were really honest with ourselves, we know that no home cinema equipment is going to fully replicate the full-on movie experience you get when you go to the cinema



<h3>Reasons to Stay Home To Watch Your Movies</h3>

The problem with going out to the cinema is that it does cost more each time than just renting a DVD or watching a film on a TV channel. But also, when youre at home, you can fit your movie watching around the other things you want to do. You can also eat your own food. Just relax and watch your favourite movie while eating your dinner.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Movies - TV'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 4///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img4.jpg" ;

$post_meta = array(

				    

				   "templ_seo_page_title" =>'Ensiferum Lyrics',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Ensiferum Lyrics',

					"post_content" =>	'The principal stretch to I saying Ensiferum in concert was the Milwaukee be over on the Summer Slaughter Tour 2010. It was individual of the most excellent concerts of my life, and Ive been to a pretty safe amount. Here is my tally of Finnish metal stretch, Ensiferum:

					

The stretch comes outmoded wearing Finnish flags as kilts and with faces painted, glad designed for battle. Petri Lindroos introduces the stretch by maxim "We are Ensiferum. We are from Finland." participating in individual fluid gesture the stretch starts with their opening song "Hero in a Dream" . Truly Epic.



Along with the bands amazing stage presence and crowd involvement, Ensiferum (which channel "sword bearer" in Finnish) has something to many metal bands lack. The capacity to note down amazing lyrics.

Ensiferum lyrics are about of the mainly creative and poetic lyrics in the full metal genre. Perhaps it is the bands data of Finnish mythology to drives this. The poetic themes of many Ensiferum songs relate to fantastical, archaic, or historic stories, by and large with heroic sentiment in connection to Finland.



For pattern, in the song "Slayer of Light," Petri screams, "Through the dreadful storms, across the frozen oceans... The firewind rages in the sky..." Ensiferum lyrics are accurately epic and after sitting in a undisturbed span listening to an Ensiferum recording, present is nothing better than getting lost in Finnish mythology while enjoying about safe quality metal. The mix of history and heaviness is at all times individual to mixes well and the artistic and poetic visualization of Ensiferums lyricists come up with stayed consistently amazing during all Ensiferum record.



The Austrian clarinetist Anton Stadler, who was a clarinetist in the Vienna Court Orchestra (late 1700s), became associates with Mozart. This friendship, along with the beauty of Stadlers tone, inspired Mozart to note down his Clarinet Quintet in 1789 and his Clarinet Concerto in 1791. Through the centuries these two moving parts come up with happen to about of Mozarts mainly beloved harmony. The poetic melodies in both of these moving parts capture the beautiful singing qualities of the clarinet.



Mozarts waste of the clarinet as an orchestral and solo instrument influenced anon composers to note down designed for the instrument. The clarinet became a standard instrument used in orchestras. Beethoven and Brahms, following Mozarts pattern, made extensive waste of the clarinet in their symphonies.



Other composers of clarinet solo moving parts in the basic 1800s were Carl Stamitz and Louis Spohr. Also well famous designed for his many clarinet moving parts is Carl Maria von Weber. Weber wrote many operatic and choral moving parts, and his solo moving parts designed for clarinet include many poetic melodies evoking an operatic, singing fashion of live.



<h3>Clarinet Music Today</h3>

Today the clarinet is predominantly used in symphony orchestras, chamber harmony, opera orchestras, broadway orchestras, concert bands, martial bands, jazz, cumbersome stretch harmony, New Orleans jazz and dixieland. It is besides used in folk harmony in European and Latin countries, live a prominent role in klezmer harmony, Hungarian gypsy harmony, Bulgarian folk harmony, and Greek traditional harmony, Latin America sambas and choros.



The principal stretch to I saying Ensiferum in concert was the Milwaukee be over on the Summer Slaughter Tour 2010. It was individual of the most excellent concerts of my life, and Ive been to a pretty safe amount. Here is my tally of Finnish metal stretch, Ensiferum:



The stretch comes outmoded wearing Finnish flags as kilts and with faces painted, glad designed for battle. Petri Lindroos introduces the stretch by maxim "We are Ensiferum. We are from Finland." participating in individual fluid gesture the stretch starts with their opening song "Hero in a Dream" . Truly Epic.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Movies - TV'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 5///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img5.jpg" ;

$post_meta = array(

				    

				   "templ_seo_page_title" =>'Dj Lights - For A Colorful Dj Night',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Dj Lights - For A Colorful Dj Night',

					"post_content" =>	'When you be off to a DJ night apart from the composition, the largely focal entity to facilitate seeks your attention are the light. There are a variety of DJ light to facilitate are free in the advertise. When you proposal to befit a DJ, it can be very tough in the foundation. One of the companies to facilitate will help you move the most excellent performance is the American DJ. There are American DJ light to facilitate are very impressive and light the dance floor immensely well. The American DJ parts are moreover very impressive.

					

Lights are the largely knotty things to conventional up on a DJ event. They are moreover the biggest equipment you bear. Since the venues are not every time the same, at hand will be cosmos crunches and occasionally, at hand will be more cosmos. You need to conventional up your equipment accordingly.



When you indicate your DJ light, indicate individual which is without doubt portable. Choose it according to the vehicle you bear. Take concentration so to facilitate the equipment does not stick off which will be a cause pro accidents. Also, you will need to consider the achievable size of the venues in your area. Get the light according to how it will fit the area. You need to be trimming vigilant after you indicate the stands pro the light since it will bear to take the consequence of the light and it must be without doubt portable.



Chauvet Lighting is a type of lighting which is very unique from the other lighting. It is very suited pro finish DJ nights. They are in unique insignia and moreover very upbeat, right apt pro such occasions. Chauvet Lights be as long as in unique models. There is a explicit exemplar called the Elan LED light and it is finish pro DJ parties.



When the theme of the get-together is exciting, the light moreover bear to be off well with it so to facilitate it elevates the quality of the get-together. If the dance floor is intelligently lit, at hand is a special feeling after you dance on it. Pro pattern, if the theme of the get-together is "white" , if you bear individual white painted light the get-together will befit very dull. Instead, if you bear very upbeat light, like red or blue or verdant, it can be very upbeat.



American DJ light like Laser Widow, The Trident, Quad Phase and others are comparatively cheaper. It is individual of the largely used light in DJ nights and can lit up the get-together.



Glitter within The Air by Pink - (This song puts Pink on a entire just starting out level. It is a bluesy, emotional, earnest ballad and therefore it was immensely requested. She performed this song on the 52nd Grammy Awards in a Cirque du Soleil grace performance) Bad Romance by Lady Gaga - (Another secure from the on no account predictable Lady Gaga. Features of this song bear been compared to her earlier secure Poker Face.)



Today Was A Fairytale by Taylor Swift - (A trivial little ballad featured on the soundtrack of "Valentines Day" . Although on period I realize myself wincing on nearly of Taylor Swifts off-key live performances, I welcome largely of all her ballads, as see to many karaoke singers. Add your own vocals to the instrumental arrangements and it doesnt count could you repeat that? Her "live" performance sounded like.)



Only Girl (In the World) by Rihanna - (Rihanna continues her row of star, with this uptempo dance jingle. This song became her 9th numeral individual single, more than some other artiste since 2000)



Just The Way You Are by Bruno Mars - (This song is not a re-erect of the song with the same title by Billy Joel. It is an innovative structure to facilitate is right so sentimental to facilitate it can do you cry. Most all girlfriend, fianc�e, or wife would blush to bear this song sung to them, much like the authoritative tape of this song depicts. This unlimited tape and convincing vocals from Bruno Mars has made this individual of the largely requested Karaoke Songs pro 2010)

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Movies - TV'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 6///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img6.jpg" ;

$post_meta = array(

				    

				   "templ_seo_page_title" =>'Electric Guitar Works',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Electric Guitar Works',

					"post_content" =>	'Hello fellow guitar players. Recently, Ive noticed with the aim of many of you dont in point of fact know how an thrilling guitar machinery. Can you answer the following questions?

					

"What exactly does a pick-up perform?" "What exactly happens you loose change the pick-up selector switch?" "How perform they all be at variance from lone an extra?" It would be fairly uncomfortable if you couldnt. But dont discomfort, Ive been in your position sooner than. Since subsequently, Ive ended my investigation, and this is I beg your pardon? Ive learned:



How a Guitar Pick-Up Works: Here is a very basic definition: A guitar pick-up converts the vibration of a line into electrical signals. These signals can be transmitted through an amplifier, which interprets these signals/produces sound, or recorded speedily.



But on behalf of all you knowledge-lovers, at this time is a more in-depth definition:



All thrilling guitar pickups basically consist of a draw with a wire wrapped around it. When a instance of metal, such as a line non-discriminatory on top of it, moves, it changes the magnetic flux of the draw, which causes a voltage in the corkscrew wire around the draw.



The intact guitar pickup, with the aim of visible event under the guitar strings, is in point of fact a casing containing an array of magnetic poles - generally lone apiece line - which are connected to a master draw with the aim of has the coil wrapped around it. Sometimes the poles are visible as circular bumps under both guitar line. Most thrilling guitars hold either two or three pickups. Indoors the largest part personal belongings, the pick-up will give off a heavier sound the closer its mounted to the fuss board.



How a Pick-Up Selector Works:

The pick-up selector gives the player a gamble to normalize the degree of which both pick-up is recorded. For case in point, on a guitar with two, a emblematic pick-up selector switch would hold three positions. One place would give off solitary sound captured from the pick-up adjoining to the shaft; an extra adjoining to the connection; and subsequently relating, a mix of both.



<h3>How Guitar Pick-Ups vary:</h3>

The three highest types are single-coil, humbuckers and acoustic.



Single-Coil: Usually seen on, but not imperfect to, Fender Stratocasters. The highest difference relating a Fender Strat and an extra guitar using single-coil pickups is the manufacturer. It is probably greatest to try available dissimilar guitars on the same amplifier to make certain I beg your pardon? Sounds greatest. The single-coils lean to hold a vintage tone, with more noticeable advice. If you dont like the advice, Fender has others obtainable. They are besides very delicate to in the least loose change in the flux of the draw



Humbuckers: They were key patented by Seth Lover and the Gibson company. Humbuckers hold elevated output than single-coils. A humbuckers is effectively comprised of two single-coil pickups, with the north and south poles oriented in relation to the strings. They are called humbuckers for the reason that they cancel available the interference (they "buck the hum" ) induced by alternating current, which is normally skilled with single coil pickups. For a more powerful tone, good buy humbuckers. Humbuckers can create whatever thing from a blues sound to a deep crunch sound. The manufacturers will hold descriptions on whether the pick-ups give off a peak pitch tone, or a amiable bass sound. To loose change the sounds, the pickups are loaded with dissimilar magnets, screws and wires.



Acoustic: Acoustic guitars require solitary lone small pick-up. There arent as many types mostly due to the actuality with the aim of the largest part acoustic players honorable require their sound bigger, not misused. Three major types are soundhole pickups, soundboard transducers and undersaddle transducers. The soundhole pickups attempt to loose change your acoustic guitar into an thrilling guitar, both aesthetically and noticeably. Soundboard transducers are the the largest part natural, but lean to hold advice problems. Undersaddle transducers are a smaller amount visible than the other types and are used on behalf of finger-picking/light-moderate strumming.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Movies - TV'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 7///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img7.jpg" ;

$post_meta = array(

				    

				   "templ_seo_page_title" =>'A Somewhat Gentle Man',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'A Somewhat Gentle Man',

					"post_content" =>	'It takes a while for this upcoming movie to really get moving, not unlike its depressed antihero. For a while the audience is not going to care about Ulrick, played by Stellan Skarsgard, a middle-aged guy who happens to be a murderer who just got out of jail. Hes thick, steady, steady, quiet and sports a ponytail. In this new movie release Ulricks boss expects him to kill the guy who was responsible for his jail time. Ulrick says that there wont be any more violence in his life, or at least thats what he thinks.



<ol>

	<li>This Norwegian offering to this years group of new movies is actually a very deadpan gangster comedy.</li>

	<li>Its about a couple of old guys who are working in a young mans world. </li>

	<li>All of Ulricks old friends seem to have succumbed to diabetes, stroke and colostomy.</li>

	<li>Patsy Clines music adds to the sad feeling of this new movie.</li>

	<li>Skarsgard walks around with a pained expression. </li>

	<li>Hes surrounded by brutal women and silly men, all with stringy hair, dead skin and style that rivals that of people living in a homeless shelter.</li>

</ol>  



Ulrik takes a job as an auto mechanic and loves steamed cod and sex with his landlady, played by Jorunn Kjellsby. There isnt much conversation between them. Instead they watch the Polish "Dancing with the Star" on TV.



Something about Ulriks attempt to get his life back slowly grows on you. Director Hans Petter Moland has Ulrik reaching out to his son, played by Jan Gunnar Roise, and a fragile colleague, played by Jannike Kruse, and he seems to warm up and come back to life as we watch. At the movies finale, Ulrik finally lights up with an enormous smile and the audience will realize that this is the moment theyve been hoping for.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Movies - TV'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 8///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img8.jpg" ;

$post_meta = array(

				    

				   "templ_seo_page_title" =>'Get Album Artwork On Itunes',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Get Album Artwork On Itunes',

					"post_content" =>	'Music lovers in the present day are iTunes lover. Known to be the the majority fashionable digital media player used used for singing and organizing digital tune, iTunes show business a major role in the tune industry in the present day. With iTunes, you can download tune, videos, tube shows, games, ebooks, audiobooks and other applications. However, even a fashionable appliance is not exclusive of flaws. Music lovers often complain of missing CD artwork on iTunes. There are still a number of flaws somewhere CD artworks are missing from songs and albums you downloaded. Fortunately, in attendance are ways to acquire CD artwork on iTunes.

					

The firstly article you can try to acquire CD artwork on iTunes is to make it manually. You can right-click on the song, take acquire CD artwork and hope with the purpose of iTunes partake of updated their file since the stay fresh instant you scanned your files. If this fails, afterward you would need an appliance with the purpose of can acquire CD artwork on iTunes and next to the same instant, make everything from fixing misspellings, removing duplicates, organizing genres to fixing song details. There are several applications with the purpose of you can take from to make all this. There are unbound ones with the purpose of you can download, unbound trial versions and individuals with the purpose of need to be asset facing you can download. Before you download the firstly appliance you mull it over on your search engine, examine firstly come again? It can offer to your tune files. There are many sites with the purpose of offer this kind of appliance but can no more than make partially of the handiwork. So, make your examination well. Ask links and other users. Check elsewhere which appliance supplier is the unsurpassed used for you.



<ol>

	<li>One of the the majority fashionable and talked regarding appliance to acquire CD artwork on iTunes is TidySongs.</li>

	<li>TidySongs is a powerful plan with the purpose of will be able to fraud your tune files the way you need it. </li>

	<li>It can fraud misspelled songs and details. </li>

	<li>It is irritating to mull it over misspelled title and musician names on your tune files and TidySongs will fraud all of these.</li>

	<li>Duplicate songs can and be unconcerned using this appliance.</li>

	<li>Even if they partake of unique spellings, they can be searched and fixed. While fixing your tune files, TidySongs can unthinkingly fill in missing musician renown, CD released day and song genre.</li>

	<li>All of these are complete exclusive of you needing to type something.</li>

</ol>    



Aside from all the things mentioned regarding TidySongs, in attendance is solitary more terrific plus in using this plan. That is making your tune look high-quality by using CD artwork. TidySongs can unthinkingly download high-resolution CD artwork used for all song in your tune files. Even if you still partake of misspellings, missing details and duplicate songs, CD artworks can be downloaded and displayed on your workstation screen to give somebody no option but to your tune files fun to utilization and arranged the way it is alleged to be.



The workstation has distorted the way we give somebody no option but to tune forever. One article with the purpose of it has distorted is allowing practically everyone to utilization their workstation to give somebody no option but to studio quality tune from their bedroom. Since everything is digital, everything can be preset and using digital sounds you can compose tune in a way with the purpose of was previously unbearable. Electronic keyboards in the 1980s did a terrific job next to frustrating to incorporate unique instruments into a single "machine" but workstation software in the present day allows you to take it to a unbroken brand new level.



Making beats and background tune is super down-to-earth with the best software. You can give somebody no option but to these beats in a total of unique ways depending on the software you utilization. Using built-in libraries, online libraries or even your own sounds you can round beats and display them to create your background tune or beats.



There are a total of inexpensive options with the purpose of allows you to display your sounds and beats in a very down-to-earth interface. You can round sounds, add property and adjust the timing and pitch of apiece sound. By changing the cadence of unique sounds you can control some part of the beat.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Movies - TV'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 9///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img9.jpg" ;

$post_meta = array(

				    

				   "templ_seo_page_title" =>'Caribbean Music',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Caribbean Music',

					"post_content" =>	'Caribbean persons are acknowledged all done the humanity in favor of their tune and cricket. The Caribbean islands get produced a batch of legendary singers who get missing their mark on humanity tune and can by no means be ancient history. Jog Marley is the first name so as to occurs to anybody, exclusive of fail, as persons chitchat just about this type of tune. After his heartbreaking demise, Ziggy Marley, his son took done the task of producing Reggae from him. Reggae, is a genre so as to is liked by all. This type can be not speaking into various genres primarily African, European, Indian and native influences. It is a synthesis of all of the higher than.

					

Primarily the this form of tune was urban by African Slaves. The famous styles so as to get been liked and enjoyed by persons humanity done are reggae, zouk, bop, calypso, reggaeton and punta. Besides the enlisted styles a merge of south and Central American tune too forms part of its chic. It is normally not very fast and is very soothing. However the most important form so as to enabled it to reward popularity was reggae and the artiste who made reggae widespread was the legendary jog Marley.



Most of its styles were grouped into folk, classical, and the rest. But as a rule of the styles reflected the European influence on the tune in favor of model the Puerto Rican and the Cuban tune had strong European influence. From 1948 onwards shifting of a obese figures of Caribbean ongoing and the swing was to England. Along with them came the Caribbean form and thereafter its popularity got international give enthusiastic approval to. It can be listened to anytime and anywhere. It is a genre so as to can be played all seasons. There is nix item instant or nix item mood obligatory to eavesdrop to this genre.



<ol>

	<li>The tune originating in the Caribbean islands is peppy and jovial.</li>

	<li>It is primarily intended to boost you up and makes you certainly tap your feet to dance.</li>

	<li>Caribbean tune was by no means a uncorrupted form of tune but an combination of various cultures as explained higher than. </li>

	<li>Over the time of instant the tune was selected up by artists humanity done and merged with other forms of tune to develop fusion. </li>

	<li>Besides the merging of Caribbean tune with other forms artists plus began to remix the tune. </li>

	<li>Remixed versions of Caribbean tune were bulky secure is discotheques and pubs.</li>

</ol>  



The tune is unfussy exclusive of a few complications and tranquil to sing along with. A crew called UB 40 too popularized Caribbean tune in the west. Their remixed versions of jog Marley figures became split second hits with tune lovers. You can purchase CDs, DVDs, and MP3s to eavesdrop to Caribbean tune or simply enthusiasm online and download in favor of unbound all the tune accessible on the unbound downloading sites. The preeminent acknowledged forms of Caribbean tune are chandracha, listera and the mambo. Caribbean tune is evergreen and will reside in the hearts of tune lovers forever. You can plus eavesdrop to the FM which is streaming tune all done the humanity.



Guitars get been acknowledged to put in greatly in the humanity of tune. It is a acknowledged statement so as to thrilling guitar has made such an crash in how tune has evolved since the initiation of the keep going century so as to nix other musical instrument possibly will happen close. Back in the 1900s, it became a necessary in favor of jazz musicians to amplify their sounds. It has evolved into a treasured musical instrument so as to is proved proficient of various sounds and styles, which possibly will suit the something else needs of various musicians. It has plus served as a most important constituent in the development of rock and roll which was widespread in the behind schedule 1940s and first 1950s.



They are guitars so as to get through the standard of electromagnetic induction to convert atmosphere of metal strings attached to its body into thrilling signals. Electromagnetic induction describes the production of voltage across a conductor while pathetic through a magnetic sphere.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Movies - TV'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 10///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img10.jpg" ;

$post_meta = array(

				    

				   "templ_seo_page_title" =>'How Professional Video Production Is Done?',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'How Professional Video Production Is Done?',

					"post_content" =>	'Video production is a broad domain that includes videotaping, editing, and distributing a finished video product. Professional video production can help your business create a visual appeal. By means of video production, you not only grow your business, promote new products, but also communicate a variety of messages to the target audience. There are professional video production houses that are into television production, commercial video production, and corporate and event videos.

					

<ol>

	<li>Professional video production houses take care of different aspects of video production, from script writing to final editing.</li>

	<li>As far as video production is concerned, there are several processes involved, such as original music scores, script development, graphics design, post-production editing, on-location filming, corporate video production to mention a few.</li>

	<li>From project initiation to finished video production, professional video production houses leave no stone unturned to come up with nothing but the best.</li>

	<li>A specialized video production process includes several stages such as pre-production, production, and post production. The pre-production stage includes creating storyboards, scouting locations, and budget planning, followed by the production stage that includes cinematography, audio, lights, in addition to directing, art and effects.</li>

	<li>The final stage that is the post production stage begins when your camera stops rolling. After the footage is logged and captured, organized, and then edited, effects and transitions are designed, music is added, and color compositions are made.</li>

	<li>A professional video production is done considering four important aspects - Quality Video by using video compression technology to provide the sharpest image, creative design to produce a unique finished product, clear audio, and cutting edge video technology.</li>

	<li>These aspects are considered while offering services such as promotional video production, corporate video production, web video production, commercial, to name a few.</li>

</ol>			   



Professional video production houses hire professional who have expertise, knowledge and years of experience in this domain. The key idea is to deliver superior quality services to ensure business growth of the client.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Movies - TV'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 1///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img1.jpg" ;

$post_meta = array( 

				   "templ_seo_page_title" =>'The Most Popular Christmas Songs of All Time',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'The Most Popular Christmas Songs of All Time',

					"post_content" =>	'The most popular Christmas songs are much loved timeless classics which have become part of tradition. They have sold millions of copies worldwide with their messages of celebration, happiness and romance. Performed by many of musics most iconic stars their popularity transcends time and generations.

					

Band Aid was the super group formed by Bob Geldof in 1984 to raise awareness and money for the famine in Ethiopia. Their Christmas number 1 "Do They Know Its Christmas" sold over 3.5 million records in the UK alone and involved artists such as George Michael, Boy George and Paul Young. It was an impromptu affair with the studio only giving Bob Geldof 24 hours to record most of the song.



On the 25th of November many of the biggest recording artists in the UK visited SARM studios, Notting Hill to record their performances. The single later went on to cause controversy when Bob Geldof promised every penny made by sales would go to charity. The government responded by refusing to donate the VAT, Mr Geldof lambasted the act and made a public appeal which gathered support across the country. This led to the government backing down and donating the tax to the appeal.



<ul>

	<li>One of the best selling Christmas singles is called "Candle in the Wind" and was written and performed by Elton John in 1997 as a tribute to Princess Diana who died earlier in the year, the song sold almost 5 million units in the UK and over 33 million copies worldwide.</li>

	<li>It was originally written for Marilyn Monroe and released in 1973 by Elton John.</li>

	<li>but did not even nearly enjoy the same amount of success.</li>

	<li>As a sincere gesture Elton John later stated that he would only ever perform the song live at the request of Prince William and Harry of Wales.</li>

</ul>   



According to the Guinness Book of records and selling in excess of 50 million copies worldwide, Bing Crosbys "White Christmas" is considered the best selling single of all time. The song was originally written by Irving Berlin and was performed and released by Bing Crosby. The song initially spent 11 weeks at number in the US Billboard charts in 1942, but was re-released reaching the top of the charts again in 1945 and 1946. Bing Crosby went on to release two other well known Christmas anthems "Silent Night" and "Jingle Bells" with both exceeding sales of over 30 million copies worldwide. They are to this day thought to be two of the most popular Christmas songs in history.



Another golden oldie which has sold millions of copies is "Rudolph the Red Nose Reindeer" written in 1939 by Robert L. May, a copywriter for the Chicago-based Montgomery Ward department stores, it was originally created as a promotional gift for the stores customers. Gene Autry later recorded and released it in 1949, since that time it has sold over 25 million copies worldwide and continues to be a staple of Christmas tradition.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Music'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 2///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img2.jpg" ;

$post_meta = array( 

				   "templ_seo_page_title" =>'Join My Band, How To Skyrocket Your Bands Popularity',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Join My Band, How To Skyrocket Your Bands Popularity',

					"post_content" =>	'Join my band, thats what youve got to be asking your fans to do, not just people you know, but the people that dont know you yet, and its not as hard as it sounds. Chances are, you are asking people to watch you, buy your merchandise and a few other routes that many bands take, and fail. This is because you are looking at the same methods that countless other bands use to generate publicity. Well, I can tell you now, the secret to making it in music is to do something different to the herd. Read on and let me explain.

					

Many bands out there are looking to increase their popularity, get more gigs, draw larger crowds and make money from their music. Its natural to find something that you like doing and try to get paid, or gain recognition from doing it. Theyve tried Myspace, Facebook, Flyers etc, etc, etc and the results are still the same, little or no gain in popularity and miles away from making real money from their music.



The problem with the band promotion ideas that many bands come up with, is that they are listening generally to their peer group. How many times have you played a gig to a handful of people, sold a couple of tee-shirts or cds and been told to "keep plugging away, youll get there�?



Truth of it is, if you keep plugging away doing the same thing without doing something different, you are generally going to be looking back at the old days wondering if you could have made it as a paid musician.



Ok, so theres the negative spin, AKA the truth - what can you do about it? You can spend some time looking at ways of doing that different thing, it will take less time than trying to design and shift that t-shirt and cd that you are desperate to get out there to the few people that you can reach using the tired old methods.



The key word you are looking for is MARKETING. Many unsigned bands are more talented than many who have made it, the only difference is marketing. If you want to be a raging success, you need to be looking at alternative ways of promoting your band, with the mind-set of an internet marketer.



You need to learn, amongst other things:



<ul>

	<li>How to bring in fans from all over the world.</li>

	<li>How to determine who your fans are, theyre not who you think they are!</li>

	<li>The real way to give away "free music" </li>

	<li>Why 100 fans on an email list are worth more than a million fans on myspace</li>

	<li>How to set up a "Squeeze Page" that drags in targeted fans.</li>

	<li>How to make the numbers game work for your band</li>

</ul>



When you have the mind-set of a marketer and can achieve the above, you dont need to rely on that one in a million chance of being found to make it in music, beg for gigs and hope for the best, because you have a laser-targeted plan to exploit the tools already out there and the avenues that other bands dont even think about.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Music'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 3///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img3.jpg" ;

$post_meta = array( 

				   "templ_seo_page_title" =>'Classic Rock Performers Who Have Had A Lasting Influence On Music',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Classic Rock Performers Who Have Had A Lasting Influence On Music',

					"post_content" =>	'Classic rock is a fundamental part of American history. Many of todays leading bands can trace their styles back to the influence of certain musicians. While every song made available to the world has had an impact on the music industry, there are certain performers who will eternally stand at the forefront of music.

					

From folk rock to psychedelic rock, there have been many groundbreaking sounds and voices. Here are the top ten most influential classic rock bands in history.



<h3>Elvis Presley</h3>

While Elvis is not traditionally viewed in the classic rock genre, it is impossible to ignore his influence on the world of Rock-n-Roll. As the first to expose mainstream America to something other than traditional family music, he faced a tremendous amount of opposition from the mainstream.



Despite the extreme racism exhibited during the 1950s, Elvis never hesitated to give appropriate credit to his inspirations. Mainly African-American performers influenced Elvis sound and style. Southern radio disc jockeys originally refused to play Elvis singles, because they sounded "too Negro" for white stations to air.



It was not just Elvis sound, but also his performance, that drew controversy. The movement of his hips in a suggestive manner sparked an entire decade of debate.



Despite the firestorm of criticism that surrounded Elvis reign, his continuing popularity has ensured that Elvis crown as the King of Rock and Roll would remain valid for decades, even decades after his death.



<h3>The Beatles</h3>

As the best selling musical act of all-time, it is hard to deny the influence of the Beatles, not only on the musical culture of America, but also on every aspect of human life. The Beatles included John Lennon, Paul McCartney, Ringo Star, and George Harrison.



Their innovative style defined the music of the 1960s - - twice. They began their career in England, and when they came to America, they were already a huge success in the United States. In their early years, they had defined pop music for a new generation.



As the hippy days of the late 1960s began to take hold of Americas young people, the Beatles redefined their music again, with another new style of music lauded by the masses. Their very loud stance on drug use and war made them a controversial group, but their popularity never wavered. Although the Beatles retained the loyalty and admiration of their late 1960s audiences until the group broke up, the touring days of the Beatles ended in 1966 when John Lennon proclaimed, "The Beatles were more popular than Jesus Christ." <h3>Bob Dylan</h3>

Dylan has one of the most easily recognizable voices in the world. Raspy and full of passion, Bob Dylans sound is distinctive. His songs are amazing and defined a generation obsessed with the themes of social unrest, an anti-war stance, and encouragement for the civil rights movement.



A traditional folk singer, Dylans works transcended all genres and appealed to countless young Americans. His sincere lyrics spoke to many and made it possible to empathize with his many causes.



<h3>Jimi Hendrix</h3>

As the undisputed master of the electric guitar, Jimi Hendrix is a classic rock foundation. The self-taught guitar player refused to be limited by many of the conventional views of guitar players.



Prior to Jimi Hendrixs development as a guitar player, the electric guitar was considered to merely be a louder version of the acoustic guitar. Hendrix embraced the uniqueness of the electric guitar and showed his appreciation for it to the rest of the world.



<h3>Pink Floyd</h3>

Easily considered the greatest band of all time, Pink Floyds unique style and showmanship defined psychedelic rock. Their concept albums were thematic masterpieces that appealed to countless audiences. The Dark Side Of The Moon, Animals, and The Wall each still stand out today as great Rock masterpieces.



<h3>The Who</h3>

Also known for their thematic records, The Who pioneered the idea of rock opera. Most famous for their collaborative efforts with every major musical figure of their time, Tommy The Rock Opera ensured the longevity of the band into the future.



Their success and fame were not limited to their unique approach to concept albums. Their musical skills are still highly regarded in both mainstream circles and in the entertainment industry. Their music is currently being used as the theme song for at least three of the most popular show on TV on the air today.



<h3>The Rolling Stones</h3>

The Rolling Stones have easily maintained their position as one of the longest lasting bands in recording history. Like most popular rock bands of the age, they were an England-based band that was more than happy to take on America.



Their grungy unkempt image became so popular; many artists are still attempting to master it. Their unique sound and high quality lyrics have kept them at the top of the charts for almost 40 years.



<h3>Cream</h3>

Cream, featuring guitarist Eric Clapton, was one of the most technically advanced music groups of their time. Their instrumental techniques became legendary and paved the way for other bands to focus on developing their instrument techniques, in addition to their lyrics.



<h3>The Doors</h3>

The Doors have always been one of the most controversial bands that had ever existed. Jim Morrisons wild behavior set the tone for the countless musical bad boys that would follow in his footsteps.



The poetic lyrics of The Doors, as well as their outrageous behavior, made them a crowd favorite.



<h3>Led Zeppelin</h3>

The road to heavy metal was paved by Led Zeppelin. Their first album was pivotal in its inclusion of distorted amplification techniques. Over the years, their experimentation included mixing acoustic and electric sounds, with the addition of synthesized melodies. The success of Led Zeppelin helped establish a strong base for the development of metal music.



Few people of their generation or the current generation realize that like Elvis, Led Zeppelin took most of their inspiration from African-American performers. As a lifelong fan of Led Zeppelin, it is was oddly fascinating to listen to some of the not-so-famous African-American rhythm-and-blues performers of the 1930s, and to be able to hear the Led Zeppelin songs we have loved for years in a whole new way.



<h3>Final Thoughts</h3>

Clearly, these ten bands had a significant impact on the evolution of Rock-n-Roll music through the generations, but it is more difficult to put them into an ordered list of important groups. Lets just agree that most of us love all ten bands on this list.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Music'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 4///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img4.jpg" ;

$post_meta = array(

				    

				   "templ_seo_page_title" =>'BBC Banned Music: Top Singles Banned',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'BBC Banned Music: Top Singles Banned',

					"post_content" =>	'The British Broadcasting Corporation also known as the BBC is a public broadcasting corporation. Therefore, it allows itself to ban materials that deviate from certain standards of civility. During the years, many singles that were seen as too explicit, distasteful or bear the potential for offending the British public were banned from BBC airplay. Here you can read about some of them.

					

In 1977, when England was celebrating the Queens Jubilee, the Sex Pistols had released their second single titled God Save the Queen. The single includes controversial lyrics that rhyme the national anthem title with fascist regime. Moreover, the record cover displayed a picture of the Queen with a safety pin stuck in her nose.



The single was found to offensive to be air played by the BBC, but it did not stop it from reaching number two on the BBC official singles chart. According to the myth, God Save the Queen was the top selling single in the UK at the time, but it was held back of number one to avoid controversies.



<ol>

	<li>Serge Gainsbourg and Jane Birkin scandalous duet Je TAime ... </li>

	<li>Moi Non Plus, translated: I love you... me neither, was the first ever number one hit to be banned by the BBC.</li>

	<li>Although at the time of its release, in 1969, the sexual revolution was celebrated, the British radio still was not able to cope with such explicit lyrics, not to mention Birkins moans and groans.</li>

	<li>The BBC ban and The Vatican denounce, did not stop Je TAime ... Moi Non Plus from being a top selling single in the UK and worldwide.</li>

	<li>In October 7, 1969, the single reached number one in the BBC official singles chart.</li>

	<li>At the same time, it had reached number 69 at the US singles chart.</li>

</ol>

  

Je TAime ... Moi Non Plus was a major influence on another BBC banned single, Donna Summers disco pioneer from 1976 titled Love to Love You Baby. After counting 23 faked orgasms performed by Summer in Love to Love You Baby, the British Broadcasting Corporation banned the song. However, it did not stop it from becoming a massive hit. Love to Love You Baby reached number four on the UK single charts but peaked to number two on the Billboard pop chart.



Relax by Frankie Goes to Hollywood is one of the most controversial singles as well as commercially successful singles in history. The BBC did not only ban the song it also did not stop BBC Radio 1 DJ Mike Read to publicly express his feelings of disgust from the singles explicit lyrics. In 1984, Relax stayed in the UK singles charts for 42 weeks. In five of them, it stayed in number one. By the end of 1984, embarrassed Auntie Beeb removed the ban. Relax is still very popular worldwide and it is one of the most recognized symbols of the era. The arguments on whether it gained such a huge success despite the BBC ban or the BBC ban helped promoting it have not been settled yet.



Paul McCartney and the Wings response to the 1972 Bloody Sunday events titled Give Ireland Back to the Irish, was banned by every media resource in the UK. It was forbidden from being broadcast by the BBC, Radio Luxembourg and the Independent Television Authority. In addition, the song title was not allowed to be pronounced on the air, so when it arrived to the BBC Radio 1 chart show it was presented as a record by the group Wings. However, Give Ireland Back to the Irish hit the top of the Irish singles charts.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Music'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 5///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img5.jpg" ;

$post_meta = array(

				    

				   "templ_seo_page_title" =>'Band Name Origins: Stories Behind Band Names',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Band Name Origins: Stories Behind Band Names',

					"post_content" =>	'Did you know that the Bee Gees were named after the initials of a DJ called Bill Gates? Did you know that the real story behind the origin of the name of the rock band 10cc is much more trivial and boring than the urban legend that surrounds it? Did you ever wonder why the hell would someone choose to name his band Chumbawamba? Here you can widen your knowledge by learning about the origins or rock bands names and pop artists pseudonyms.

					

10cc: an urban legend claims that the band who wrote the hit Im Not in Love has chosen her name as a gesture to the average male ejaculation, which is estimated as 9cc of sperm. but, the bands name really originated in a dream the band manager, Jonathan King, had in which he was managing a band by the name of 10cc



Alice in Chains: Lane Stanley and Jerry Cantrell had intended to form a heavy metal band that will perform covers of Slayer while wearing dresses. Although there plan did not come out, the name of the band remained. Alice in Chains is a take off on Alice in Wonderland with an S and M twist. Bee Gees: The Gibb brothers first had in mind the name The Rattlesnakes as a name of their band. Later they have come up with the idea of honoring the initials of both Brothers Gibb and their close friend and one of their first supports, DJ Bill Gates, who has nothing to do with the founder of Microsoft. Chumbawamba: apparently, one of the band members had a strange dream, in which he could not decide which public toilet door he should enter since the Men and Women signs were replaced with Chumba and Wamba signs. The Doors: formerly named Psychedelic Ranger, inspired by a William Blake quote: If the doors of perception were to be cleansed every thing would appear to man as it is, infinite. Elvis Costello: was born as Declan Patrick McManus. When he had started his musical career, he adopted an alias created by a combination of Elvis Presley and Lou Costello, mainly because he represents the exact opposite of the other Elvis.



The Fall: taken from the title of a novel authored by Albert Camus.



Grateful Dead: originally named The Warlocks. The origin of the cult band final name was inspired by an old English folk tale, which themed around a traveler who is saved by the spirit of a dead person who is grateful for the travelers generosity and his willingness to pay the deads man debts in order for him to be buried.



The Happy Mondays: Shaun Rider was inspired by the happy Mondays he and the other members of the band were having as unemployed who were spending the day that follows the weekend in sleeping while the other people were off to work.



Ice T: the controversial gangsta rapper has chosen to name himself after Iceberg Slim, a famous pimp who later became an author of books that describe gangsta living. Johnny Rotten: the Sex Pistols leader was born as John Lydon. He received a stage name that was found more suitable for an anarchist punk with a set of rotten teeth.



Kraftwerk: the pioneer electronic band adopted the German translation of the term Power Station.



L. LL Cool J: James Todd Smith pseudonym is an Acronym for Ladies Love Cool James.



Marilyn Manson: the bandleader pseudonym mixes two of Americas favorite celebrities: Marilyn Monroe and Charles Manson. Other members of the band are using the pseudonyms Ginger Fish, Twiggy Ramirez and Madonna Wayne Gacy.



Nine Inch Nails: inspired by the nails that attached Jesus to the cross



The Orb: in Woody Allens Sleeper, there is a silver ball that causes people who touches it to react in strange ways. This device was called The Orb.



The Pogues: originally named Pogue Mahone, which is Kiss my Ass in Gaelic, the band shortened the name to avoid airplay censorship.



Queen: one word that catches both transvestite and royalty connotation was the perfect band name in the eyes of Freddie Mercury.



The Replacements: according to the myth, the punk rock band adapted the name after replacing a missing band in a gig, an incident that made them introduced themselves as The Replacements.



Sex Pistols: Malcolm Mclaren is responsible for the choice of the name, partly to help promote the clothes shop called Sex owned by Vivien Westwood who used to be his girlfriend at the time.



TLC: the initials of the band members nicknames T Boz, Left Eye and Chilli. It also suggests the acronym for Tender Loving Care.



UB40: the politically oriented band was named after a type of British unemployment form.



Velvet Underground: named after the title of an unknown sex book that one of the band members has found lying on the sidewalk Weezer: the band front man was nicknamed Weezer in high school since he was a geek who suffered from asthma that caused him to make wheezing sounds.



XTC: this punk band was formed in 1976 long before the usage of the drug was popular. The band had changed its original name Star Park after watching a Jimmy Durante clip in which he states: Im in ecstasy!



Yeah Yeah Yeah: according to Karen O, the inspiration to the hip band name came from the New Yorker phrase, which means something like whatever. ZZ Top: there are two versions related to the origin of the band name. According to the first one, the name of the band is a spoof on the name of the blues musician ZZ Hill. According to the second version, the name relates to a combination of two popular brands of cigarette rolling papers: Zig Zag and Tops Rolling papers.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Music'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 6///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img6.jpg" ;

$post_meta = array(

				    

				   "templ_seo_page_title" =>'Fm Radios',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Fm Radios',

					"post_content" =>	'FM broadcasting is a broadcast technology that uses frequency modulation (FM) to provide very favorable sound over broadcast radio. In India there are various FM channels which operate 24X7 to provide news, information and entertainment. 

					

There are specific channels for specific purpose, one has to tune in and adjust with the frequencies which you want to listen. There are FM channels like Radio City, Big FM, Red FM, Radio One, Radio Mirchi, Fever FM, AIR (All India Radio) and much more which operates in English, Hindi and several other local & regional languages.

					

One needs to adjust the tuning and set frequency to listen to your favorite FM music station. You need a Radio to tune in with the desired frequency, as radio acts as an intermediary for matching with the frequencies. In market we have two best FM Radio products from world renowned brands 



<ol>

	<li>The Sony ICF-C218 is a space saving radio with appealing design and has ability to choose your own snooze time instead of being held captive by the short time intervals of other snooze times.</li>

	<li>This is an alarm cum FM with two bands reception, analogue tuner, and a single alarm.</li>

	<li>This device will help you wake on time and plan your day ahead, thanks to its excellent alarm clock functions and built-in calendar; this will surely keep you updated with everything.</li>



	<li>This Sony dream machine features easy visible 0.9 inch green LCD screen, it has good battery backup and clear FM frequency.</li>

	<li>One will also appreciate other convenient functions of this Sonys dream machine, like automatic daylight savings & automatic time setting.</li>

</ol>

    

The other is the Mitashi AF004 which is also an alarm cum FM radio. It has a lighted digital display, unique contemporary design and a high sensitivity FM scanner. You get good quality & clarity sound to listen The FM Radio also has earphones; this mesmerizing piece is also very unique and compact so very easy to carry. All I can say is, its a genuine partner for entertainment while travelling.



From entertainment point of view both of these FM Radios can tune in with several FM channels for maximum entertainment at good quality & clarified sound.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Music'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 7///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img7.jpg" ;

$post_meta = array(



				    

				   "templ_seo_page_title" =>'Easy Guitar Lesson - The True Secrets',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Easy Guitar Lesson - The True Secrets',

					"post_content" =>	'Everybody who has continually heard of song earlier has dreamt of someday performing an instrument on their own. The guitar is perhaps the largely all the rage instrument which folks wish to be taught. The guitar is used to participate in a broad variety of song for the reason that of its wonderful sound and its amazing tunes versatility. It can moreover remain single of the majority sought after musical instruments. All it will take to ascertain are a small number of resources of easy guitar lessons and the passion to practice thoroughly.

					

Not everybody has the occasion or else money to exhaust on the traditional way to discover this instrument by departing to a music tutor and undergoing normal lessons. You can uncover a batch of resources for easy guitar lesson obtainable on the internet. They might be alive read within the convenience of your residence and theyre a lot cheaper than standard instruction. Getting the appropriate one can remain a little tricky since youll uncover hundreds and perhaps thousands of this instruction accessible.



<ul>

	<li>There are exactly hundreds of informations on the internet which will help to teach you.</li>

	<li>On a quantity of the greatest ways of practicing, and places to get a hold easy guitar lesson.</li>

	<li>The internet society is a tremendous source intended for dig up a great amount of complimentary lesson.</li>

	<li>So why not take benefit and get a hold on your own various lessons on learning how to use the guitar.</li>

</ul>   



What is so overwhelming on the subject of learning to use the guitar is that you merely truly to need to fully understand three or four chords at the start to set out to perform a quantity of your favorite songs. A percentage of the songs which I have printed were formed using no more than three to four chords.



The hardest part of studying how to perform the guitar is most likely at the start. You might learn the chords to be alive little difficult to control and your fingers will be in pain from holding down the strings. You be supposed to be able to learn your harmonize and render the chords much more controllable if you provide it a tiny bit of moment and exercise. Your fingers will as well acquire the basic robustness and dexterity necessary concerning guitar performing.



I do strongly suggest with the purpose of you obtain a first-rate quality instruction to start your easy guitar lesson. If you possess associates that cooperate you can exercise with them and hone your abilities. Once you cooperate with your friends, it is a much more enjoyable moment.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Music'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 8///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img8.jpg" ;

$post_meta = array(

				    

				   "templ_seo_page_title" =>'Flamenco Style',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Flamenco Style',

					"post_content" =>	'Originating in the Spanish region of Andalucia Flamenco dancing has been traced back to the 15th Century but the word Flamenco did not become associated with this art form until the 18th Century. The origins of the word &lsquo;Flamenco&lsquo; are unclear but many have associated it with Romany Gypsies who settled in Andalucia and mixed with the original Moor inhabitants of the region.

					

The music of Southern Spain has had alot of influence from various cultures within Europe going onto form what we know we know as &lsquo;Flamenco&lsquo;. Flamenco dancing began to emerge as a cultural and artisitc focal point of Spain in the late 19th and early 20th Centuries.



Flamenco is typical of southern Spanish culture and there are a surprising number of elements such as a mixture of the toque, baile and cante, (guitar, dancer and song) thato together to form Flamenco this seemingly simple dance. From dresses to shoes, guitar, to singers to the type of dance many different factors need to work together to make the dance the powerful artistic masterpiece that it so often can be.



<ul>

	<li>For many the costumes and whole outfit of the dancer will be what goes towards symbolising alot of the dance.</li>

	<li>With the internet and popularity of this dance it is now possible that people can obtain their very own piece of spanish culture whether it be throught a guitar dress or shoes. </li>

	<li>Added to this is the fact that these unique dresses and costumes have proved to be extremely popular items at fancy dress parties or indeed exhibitions on Spanish culture.</li>

	<li>Shoes and dresses are particularly popular and these can be made to suit any individual preference or taste but they come at a price so be prepared to pay well over $100 to achieve the look that you want.</li>

</ul>



Costumes and apparel that are worn are extremely varied and interesting with many types of pattern material and sequin available. Dresses like the shoes can be purchased ready made or tailored for that special touch. In recent times though the dance has been stripped back down to its roots as &lsquo;Flamenco nueva&lsquo; has begun to take hold. Flamenco nuevo is a much more traditional dance with songs and music being alot more simple but passionate. Outfits and costumes used by dancers have also been simplified with shoes and dresses worn by female dancers being alot more simple and plain whilst a male accompaniment may only wear a vest top.



Despite the development spoken about within the last paragraph there is a still much of Spain and the world that embraces Flamenco with its extravagance as it has become a part of the dance that grew out of informal city &lsquo;pena flamencas&lsquo; into a dance witnessed on the world stage by millions. It is this growth in Flamenco that has triggered the demand for all items associated with the dance and art. Websites and online shops offer items such as clothes, shoes. guitars and music so that the individual can create their very own Flamenco experience.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Music'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 9///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img9.jpg" ;

$post_meta = array(

				    

				   "templ_seo_page_title" =>'Criticism In Music',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Criticism In Music',

					"post_content" =>	'A criticism, or "critique" as it is also called, refers to any kind of oral or written opinion, whether negative or positive, communicated to a perfomer by an instructor, judge, mentor, other musician or even non-musician. It is an evaluation of a performance that is shared to the performer by the evaluator. It is sometimes also shared with the public, such as in media, where, in this case, it is more commonly known as a "review" . You, as a musician, can become adversely affected in your morale and possibly even discouraged if you do not know how to properly deal with it. Any art, including music, is so close to the persons very essence that any criticism about it can hit home like a ton of bricks, even devastating an individual, believe it or not.



But criticism for the musician is inevitable. It comes with the territory of learning and performing music, from instructors, other musicians, admirers, fans, from all sorts of sectors. It is an inherent aspect of conservatories and music competetitions.



Technically speaking, every person has the right to express his/her opinion on anything. Oftentimes, people feel the need to express their feelings regarding anything in the arts. You hear it a lot with film and music. These can come off as either complimentary or critical.



If one receives a praiseful comment, such as how wonderful or moving their performance was, they should accept it, thank the originator and be genuinely proud that they could capture anothers heart with their aesthetic power. It is encouraging to hear such words, and rightfully so.



<ol>

	<li>However, ANY criticism or advice, either negative or even positive, from a non-professional (non-musician) should be entirely and utterly ignored.</li>

	<li>Regardless of whatever personal impact you created upon the listener, they are not the correct source for technical advice.</li>

	<li>Example: A pianist is performing a Bach piece and gets carried away with the dynamics (loudness and softness of various notes).</li>

	<li>After the performance, his friend, a non-musician whos dabbled in studying some music theory, praises him and advises him on how great the intensity on the dynamics was during the performance.</li>

	<li>The pianist makes the mistake of taking this as technical advice (instead of just differentiating between that and praise).</li>

	<li>He then enters a music competition where he performs the piece by getting carried away again on the dynamics.</li>

	<li>He promptly gets flunked and loses the competition because this piece he was performing, of the Baroque era, does not feature any sort of extremity in dynamics.</li>

</ol>      



When a musician receives professional criticism, however, it can oftentimes be contradictory. For instance, one authority may say how excellent ones pedaling is while another comments on how muddy it sounds. This can leave a musician with uncertainty and unnecessary confusion. A thing to realize is that profesional technical critiquing can sometimes be opinion-oriented. But, it can also very well be corrective. There is a way to deal with this.



A musician always truly knows his or her own areas of weakness. These become more prominent and the individual becomes more tuned and aware of them as time and progress goes on. One should always be able to take such criticism without becoming introverted or feeling harmed. When one gets any such critiquing, the first thing to do is take it into consideration and evaluate it for themselves. If one feels that criticism was incorrect, then they have a right to evaluate that accordingly. A musician should always maintain his/her integrity. Though, at the same time, they should be open-minded and willing to learn more and become better and better. There is a fine line between not going the effect of poor criticism and being stubborn and never learning anything.



Lastly, there are always those individuals in society who seek to squash and put down creative minds, whether out of jealousy, insanity or their own failures. This occurs in any of the arts. As a musician, NEVER allow anyone to do this to you, for their "criticism" is merely an effort to overtly and openly put you down, or to slowly and insidiously suppress you by sounding "helpful" . Disregard it and continue being creative and making music!

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Music'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 10///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img10.jpg" ;

$post_meta = array(

				    

				   "templ_seo_page_title" =>'Beat Maker Software - 3 Great Ways To Use It',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Beat Maker Software - 3 Great Ways To Use It',

					"post_content" =>	'Have you seen any of the latest beat maker software online? Its really cool and the stuff you can do with it is quite incredible. With very little music knowledge or background you can make some pretty interesting beats and even songs by simply using the software. You also dont need too much in terms of a computer and a basic PC or Mac will do just fine.

Beat maker software can be used for a variety of things. Many people spend a fortune on buying beats and sounds that they could have made themselves - for free. Here are 3 cool ideas for how you can use the software.



<h3>1. Background music</h3>

Are you into making your own games? Computer games require a lot different sounds and music and if you have to buy it all you can quickly blow your budget. With the software you can make your own beats and really customize it to get what you really want - even if you are not very musical.



<h3>2. Rap beats</h3>

Are you into rapping and hip hop? Are you thinking of making your own songs? Most of the time the lack of a studio or the inability to play instruments tend to keep many of us from fulfilling our musical talents. With beat software you can make your own music and rap over it by using some basic recording and mixing software. Who knows, you could make the next smash hit on your own PC using some basic beats software.



<h3>3. Video production</h3>

Do you do a lot of video production? You probably need a lot of background music to animate your videos. You could buy sound clips but how much better would it be to make your own. One thing you dont have to worry about when making your own music is that all the copyrights belong to you and you dont have to pay for using sound clips in clients videos. This will help you spice up all the video clips you produce and it can set you apart from your competition.



The real secret to making great beats using software is not so much the software itself but the libraries that come with it. Beats are made up from sampled sounds and unless you record your own samples you need to use predefined ones. Most music software packages link to huge online databases with a great variety and this is something that you need to keep in mind when looking for the ideal software package.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Music'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 1///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img1.jpg" ;

$post_meta = array( 

				   "templ_seo_page_title" =>'Dance Class: Making it Safe for Children',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Dance Class: Making it Safe for Children',

					"post_content" =>	'A dance class should be safe for students particularly young children. Parents should ensure that the place their children go to a class that provides adequate training and amenities for them.



Some parents may consider the location, time and price of the class but the most important factor to look into is the safety of the kid. They should make sure that the child is getting the right training without overexertion.



Safety to children does not only mean safety in the studios physical features. It also means proper training methods which is suitable for the age of the child. This will help prevent unwanted injuries while dancing.



The parent must see to it that the child gets proper supervision and adequate training that do not strain his or her young body. The teacher has to consider that the childs age pose some developmental limitations when it comes to physical exertion. He is, for instance, not capable of lifting his partner.



<ol>

	<li>To be able to determine if the class is safe, the parents should be able to watch the class. </li>

	<li>The students must be able to follow the teachers direction.</li>

	<li>If most students are struggling with the instruction, the dance classes might be too advanced for their skill level.</li>

	<li>This is an indication that the training might be too strenuous for the child.</li>

	<li>Another factor parents should look into is the number of accidents or injuries in the class.</li>

	<li>If the teacher fails to provide a comprehensive warm-up for the kids before the start of the lessons, this can result in injuries.</li>

	<li>If the child just experience temporary aches at the early stages of the lessons then that is understandable.</li>

	<li></li>

</ol> 



But if the muscle pain does not go away then the routine could be too advanced for the child or they are not doing enough warm-up exercises. It is best if the parent asks the child if he or she experiences physical problems after the dance. This can prevent injuries from occurring or worsening them.



The childrens bodies may be flexible but plunging into their routine immediately right after they get into class will not be beneficial to them in the long run. This practice can have harmful effects on the joint, tendon and muscles. Dance education should forego preliminary procedures.



If there are acrobatic exercises to be executed in dance classes, it will best that the floor have cushions or mats. The cushion will be great for any tumbling, twisting or flipping moves in a dance. This can prevent the child from getting injured or strained.



There are some lessons that require several years of training before a child can take part in it. If the school does not allow your child to join in some lessons then that means it is not age-appropriate for her or him. You should not insist on enrolling because forcing a child to study dance techniques beyond her age and experience can lead to physical problems later.



Children below 6 years old should be allowed to experience several dancing classes. Older children who have enrolled in dancing classes and wish to quit should be allowed to do so. A child who is not interested in the class will most likely not learn anything. Forcing your child will not produce positive results. A <a href="http://www.DanceSF.com" >dance class</a> for children should be a fun, exciting and safe experience for the child.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Performing Arts'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 2///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img2.jpg" ;

$post_meta = array( 

				   "templ_seo_page_title" =>'Dance Classes for Adults',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Dance Classes for Adults',

					"post_content" =>	'People who have not started dancing at an early age may want to try dancing when they reach their 30s or even the golden years. The method of teaching an adult dance class may differ from other age groups. Adults do not have the same physical make-up with younger dancers. They are not as flexible as children. This is one consideration that teachers look into when teaching adults.

					

It would be best for adults to enroll in dance classes whose teachers understand this unique requirement. Adults will have certain concerns and limitations that do not bother other age groups. For instance, they may find it awkward wearing revealing clothes, they are worried about getting injured or they might feel out of place in a group comprised mostly of young dance students.



Dance instruction should not be for the different age groups. The reason for this is largely due to physiological differences. An adult beginner dancer enrolled in dance class filled with teenagers may find themselves pushing too hard to keep up with the young ones. These could pose risks to their health rather than help them.



<ol>

	<li>Adults must look for a studio where they can have a good warm-up before doing the dance routines.</li>

	<li>A good warm-up consists of exercises that move the joints from neck down and all muscles.</li>

	<li>It should enhance flexibility, balance and speed.</li>

	<li>The exercise should last 30 minutes for a one-hour class.</li>

	<li>If the class runs for 90 minutes then a 45 minute warm-up would be enough.</li>

	<li>Warm-up exercises usually become routine.</li>

	<li>This will enable adult students to memorize the steps and make the most of the exercises.</li>

</ol> 



The dance warm-ups must make use of aerobic motion. This will develop flexibility of body. It will also help prepare the body for the physical demands of the class.



Exercises that are non-weight bearing enable adults to utilize their energy for lifting and holding without using balance. Progressive exercises will prepare the adult step-by-step on a level they are comfortable with.



Warm-ups that only use basic stretches, kicks or bending are not sufficient. The requirement should be moving all muscles and joints of the body. Basic moves cannot accomplish that. Insufficient warm-up can pose risks of injury and strain to an adult dancer.



A great teacher should inquire from the adult dancers if they have existing injuries or if they have physical conditions that pose limitations on their movements that day. An instructor must be able to communicate to students not just issue directions. This will make the class more interactive and fun for the student.



After a good warm-up, dancers will proceed to the center of the studio. The teacher demonstrates to the student how certain moves are made. If there are limitations in an adult dancers movements due to a physical condition then the teacher must not force her or him to execute some steps. A teacher is there to guide not to force instruction.



Adult students do not attend classes to be able to compete professionally. This is a very rare occurrence although not an impossible situation. Adult students usually enroll for the love of salsa dancing. If an adult student has the passion for the dance then letting him or her help choreograph will enable the dancer to feel fulfilled.



An adult dancer who learns to be flexible can perform as well as the young dancers. It might take time to perfect a performance but the dancer can learn various moves that will help in the dance. Jumping, twisting, turning, balancing and partnering are all part of the rigorous demands of dancing which an adult should prepare for. Teachers can make a difference in the adult dancing experience in a dance class by helping him or her adjust.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Performing Arts'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 3///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img3.jpg" ;

$post_meta = array( 

				   "templ_seo_page_title" =>'Should You Get Your Mastering Done by a Professional?',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Should You Get Your Mastering Done by a Professional?',

					"post_content" =>	'If you are reading this then hopefully the question of "Should I get my Sound Mastered" has been answered. If not, then this article will briefly discuss this issue. If you are asking this question to begin with, then your answer is more than likely "yes" . Mastering is just as important as your recording and mixing process. Here is a question? Your music is recorded, did you mix it yet? If yes, why? Is it because you wanted it to sound better? Well, what if I told you that the improvement you made from the recording to the mixing is the same type of improvement you will hear from the mixing to the mastering process. Yes, you heard it correct. Your sound will be so much harder and crisper you and your buddies will all be amazed.



<ol>

	<li>Now, you are convinced to get your music mastered, but the professional part has not been talked about.</li>

	<li>Well, let us discuss that issue right now. </li>

	<li>Let me paint a picture for you. You are 55 years old and worked on a great job all your life.</li>

	<li>You have 2 beautiful grown kids and 4 grandkids.</li>

	<li>You and your spouse are making a huge decision today about the rest of your lives.</li>

	<li>You are deciding to retire after 30 years service from your company.</li>

	<li>Now, your goal is to live off your 1 Million dollar nest egg you have built up over the past 30 years.</li>

	<li>That may seem like a lot of money, but consider the fact that you are used to living off of $60,000 per year.</li>

	<li>Being as smart as you are, you calculate the math and realize if you put that money in your bank or try to play the stock market, your savings may only last for 16 years. </li>

	<li>That means when you are 55 years young, you are out of money. Not to mention, inflation. </li>

	<li>So, is this picture clear enough for you? My question to you is, would you rather gamble with your life savings and be a do it yourself member in the market, or would you rather give this problem to a professional and have them fix it?</li>

	<li>Do you know anything about beta, dollar cost averaging, rebalancing?</li>

	<li>Can you see the importance of getting a professional?</li>

	<li>If you answered yes for a professional, then you are on the right track. </li>

	<li>If not, then best of luck in your musical journey.</li>

</ol>          



Think about your music in the same way. If you do not get it mastered by a professional and you are as serious about it as you think you are, then you are potentially flushing your money down the toilet. You are an artist and are probably good at what you do or you would not be reading this. Mastering engineers are just like you, good at what they do. They would not pick up an instrument and try to show you how to play your song. Their expertise is in the studio making your music sound even more hard and crispclear. Use them, that is what they do and that is what makes them so valuable. Have I made my point yet?



Not many people are fortunate enough to have an audio engineer that can mix and master at the same time, but if you are, then a straight transfer might do fine. If not, you need to consider getting your audio mastered by a professional. Some facilities do their mastering in house and some studios have to send it off.



Usually a lot can be done to improve the mixes. There is a huge demand in this market. Now, if youre reading this, then you are probably wanting your disc to be competitive in-store play, homes of consumers, and in radio markets, it has to be perfect sonically. Think of it like a brand new car -without a good wash and wax, few people will appreciate how great it looks. Also, since the mixes were recorded at different times of day over a week or more, you end up with differences in level and tone. Mastering creates a seamless whole out of a collection of individual tracks.



The mastering studio has ultra-clean processors that are made to handle stereo signals. Obvious as this may be - it is one thing to run a guitar through a limiter and equalizer, and another thing to run your whole mix through it. A finished mix is an intense balance that can be made worse as easily as it can be improved. Its worth using the best equipment available.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Performing Arts'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 4///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img4.jpg" ;

$post_meta = array(

				    

				   "templ_seo_page_title" =>'The weissenborn guitar build',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'The weissenborn guitar build',

					"post_content" =>	'Before I had even begun to build my first Weissenborn guitar I was assailed by many doubts such as" Am I going to screw this up?" or " suppose I get this wrong? and similar kinds of horrible thoughts!I would actually lie awake at nights thinking about it, half scared ,half excited, about doing this for the first time.

					

However, I came to the conclusion rapidly that it was only wood, only cost money and if I did screw up, well, I could always buy some more and start again! I realised that I had to curb my impatience and start to be a little more thorough in my approach to this project.



I had scoured the net looking for all kinds of information regarding the building of a Weissenborn and realised that there was very little to find. There were no books on how to do it, and I could only find one set of plans available from a company in America. It seemed to me that it must be the best kept secret on the Planet. There were a few hardy individuals that had bitten the bullet and had built a Weissenborn but it seemed that mostly it was the secretive domain of Luthiers, the gods of all gods! All of this intrigued me more and more and gradually I built up an arsenal of facts and fiction about the construction of these here Weissenborn guitars They were definitely popular and there was no doubts about that. The likes of Ben Harper, Jeff Lang and Johnny Depp had seen to that, for certain. When I finally came across a plan of a Weissenborn I was amazed at what little detail that there actually was on the plan itself! I had expected there to be all kinds of tips and hints and secret little tricks the help the unwary innocent ( me) to find his way through the maze.



<ol>

	<li>It seemed to me that the thing to do was to buy a conventional guitar building book and take some ( if not most!) of the techniques and use them to build my guitar.</li>

	<li>In fact, that is really what I did in the end, more or less.</li>

	<li>As I gathered together more info and ordered the timber from my pal Kim Hancock, a luthier of note from Tamborine Mountain in Queensland, I made a definite promise to myself that I would, if this project was successful I would not only write a book about the building of a Weissenborn but would also draw a plan for my very own guitar before I started!</li>

	<li>This is also exactly what I did.</li>

	<li>I had seen Jeff Langs beautiful Weissenborn style guitar made for him by South Australian luthier, David Churchill and had seen how deep the body and neck were.</li>

	<li>I wanted one something like that! I realised the beautiful ringing overtones and sweet sounds came from a combination of the workmanship, the timber and certainly the depth of this great slide guitar</li>

</ol>

  



  



I went off to the local print and copy shop and bought about two metres of virginal white paper, the sort of stuff architects draw houses on. I burned midnight oil drawing, re-drawing, cursing, muttering and checking dimensions from books, drawings and photos. Id had the good fortune to get an old plan of a Weissenborn style one from a friend and checked it out against the dimensions of my own . So far, so good!



Soon the day came around. The plans was born. I was really glad that the Weissenborn style was the one I had chosen for my first build and I was secretly pleased that I had no tricky truss rods to deal with and the great fact I had realised about halfway through the design was that because the strings are never pressed down onto the frets it wouldnt matter if they were slightly inaccurate. A conventional guitar would be ruined if you got that wrong!!!



I was really pleased with the plan as I studied it. There was heaps of information on there, Id seen to that. Type of wood, exact thickness in millimetres and inches, no horrible decimals of inches, what are they? Yuk! Little warning notes about things that had nearly caught me with my trousers down. What kind of glue to use and loads of stuff like that. It was looking good. I also decided that I would get it turned into PDF files and TIFF files eeventually for putting onto CD-Rom when the time came to put them up on my site. Now all I had to do was build my guitar!



I actually live on a forty foot yacht so the challenge of building this guitar was more than a little interesting, to say the least. It required careful planning and a little forethought. I had thought the whole project through and because I didnt have a workshop as such I would improvise a little. The engine block housing would be my workplace, four feet by two foot six inches, plenty! I had a piece of solid three quarter inch piece of MDF board to work on and I had decided to use the �mould �method of building the guitar.



The deck outside would be used for sawing, cutting and all the messy stuff and I had an ample sheet of ply to protect that. With a little trepidation I began. I soon realised things were going well and really got into the swing of things. Well, folks, the rest is history! I actually made me a Mississipi Delta mud slidinwhiny,shiny weissinbyorn folks and it shure do sound purty! Even I ah do say so mahself! It has turned out better than I could have ever dreamed and I play it every damn day! The good thing is too that its getting sweeter as time goes by and I dont even play it the wrong way up no more! I sit it on my lap now! I did write a book about the build and if you like you can visit my site www.buildaweissenborn.com that I built in honour of these wonderful instruments and you can see the results of my efforts and even hear a soundclip of the guitar itself if you are so inclined!

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Performing Arts'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 5///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img5.jpg" ;

$post_meta = array(

				    

				   "templ_seo_page_title" =>'what are exams and the different examination boards',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'what are exams and the different examination boards',

					"post_content" =>	'Music examinations are a method of formally assessing the accomplishments of pupils learning musical instruments. Although there are music examinations available to school and university students alongside other regular qualifications and assessments, there are also a number of independent, examination bodies who solely provide assessment in musical ability which are open to all.



Music exams are set in both theory and practical aspects. The theory examinations are taken by pupils of all instruments and typically cover areas such as musical notation, construction of scales and composition. The practical exams concentrate on the particular instrument favoured by the pupil, for example piano, guitar or flute. They cover elements such as playing set pieces; scales; sight reading and aural.



Most students who enter these exams have taken a course of music lessons with a private teacher. Often this is a way for children to receive music training over and above what is provided at their usual place of learning.



<h3>Examination Boards:</h3>

<h3>ABRSM: Associated Board of the Royal Schools of Music </h3>

http://www.abrsm.org

The Associated Board is the worlds leading examination body for music, with a system of examinations and assessments in over 80 countries around the world. The Associated Board is linked to some of Europes leading Conservatoires - the Royal College of Music and the Royal Academy of Music in London; the Royal Northern College of Music in Manchester and the Royal Scottish Academy of Music & Drama.



Established in 1889, the Associated Board provides schools, private teachers of music and the general public with a scheme of music examinations of recognised authority. Examinations are offered in 35 instruments, singing, theory and practical musicianship and are open to students of all ages. The Associated Board examines over half a million candidates each year making it the largest examining body for music in the world.



In 1991, the Associated Board was delighted to be asked to return to examine in Australia after an absence of more than 30 years. Associated Board examinations are conducted at St.Andrews Cathedral School, with the Boards examiners making regular visits to Sydney.



<h3>AMEB: Australian Music Examinations Board</h3>

http://www.ameb.edu.au/

The Australian Music Examinations Board (AMEB) provides a full range of music and speech and drama education, from the first steps through to Diploma level performance and scholarship. The AMEB exists to provide a graded system of examinations in music, speech and drama, by offering high quality syllabuses, educative services to our teachers, examiners and candidates, and quality publications to the highest editorial standard. The AMEB has a long record of providing quality music examinations for students, with over 100,000 students nationally taking its examinations each year. AMEB standards are well respected internationally, and it is the only examining body with formal links to the major Australian universities and Ministers of Education.



<h3>AGMS: Australian Guild of Music Education</h3>

www.guildmusic.edu.au

The AGMS was founded in 1969 as a continuation of the London Guild of Music and Speech (Australia). It is non-profit, Public Education Institution, constituted to provide professional and private Teachers and Students of Music and Speech (including Drama) with a responsive organization through a comprehensive set of syllabi throughout Australia, New Zealand, Malaysia and Singapore with examinations which recognize excellence in the selected study, as well as providing supportive encouragement for teachers and all music and speech students and candidates.



The Guild education system provides an avenue for music & speech teachers to offer a methodical teaching and assessment system for their students via the Guilds public examinations and opens the way for further education at Tertiary level, for both themselves and their students, by distance education in the Creative Skills program from Certificate to Advanced Diploma and the Higher Education program with the Bachelor of Music degree.



<h3>ANZCA: Australian and New Zealand Cultural Arts</h3>

www.anzca.com.au

Australian and New Zealand Cultural Arts Limited (ANZCA) offer syllabuses and both practical and written examinations in modern and classical streams, which stimulate students of all ages. For over twenty-three years, examinations have been conducted throughout Australia, New Zealand, Thailand, Malaysia and Indonesia.



<h3>Trinity Guildhall Examinations (Australia)</h3>

www.trinitycollege.co.uk

Trinity College London, the international examinations board incorporating Trinity Guildhall, offers accredited qualifications in English language and the performing arts. Trinity has been assessing students since 1872 and is considered a leader in performance assessment. Trinity is supported by the leading performing arts organizations, teacher associations, colleges and universities in Australia and worldwide. 500,000 assessments are conducted each year worldwide, from graded examinations and certificates to diplomas and higher level vocational qualifications. Trinity offers a flexible range of syllabuses, across a variety of teaching and learning styles, to encourage and motivate students to achieve their personal, vocational and professional goals.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Performing Arts'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 6///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img6.jpg" ;

$post_meta = array(

				    

				   "templ_seo_page_title" =>'Easy Guitar Playing Lessons',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Easy Guitar Playing Lessons',

					"post_content" =>	'If you have a six-string, a pick and a solid but comfortable armless chair, you are ready for some easy guitar lessons. Here are some of the basic things you should learn.

		

<h3>Know your instrument.</h3>

The topmost portion of your guitar is called the head or the headstock. This is where you well find the tuners, which are used to adjust the pitch of the six strings. The long part attached to the head is the neck.



Down the neck is the body of the guitar. If you are using a classical or acoustic guitar, you will find a sound hole in the middle. This serves to project and amplify the sound. Electric guitars, on the other hand, do not have holes. Instead, they have pickups, which intensify the sounds coming from your instrument. Of course, you have the strings that are attached to the tuners, run down over the neck, over the hole and attached to the bridge.



<h3>Hold your guitar properly.</h3>

The thickest guitar string should be the topmost when you hold the guitar and the neck should be parallel to the ground. The body should rest comfortably on one of your thighs. Tune your guitar.

Before you can learn how to play the guitar, you will have to learn this skill first. You can refer to a book, an online source or a friend to learn how to tune. You can tune your guitar three ways: by ear, with a piano or a tuning flute.



Next, decide on your fret hand. This is the one that will be spending a lot of time on the neck of your guitar, pressing on the chord. If you are right handed, it is your left. If you are left handed, its your right hand. Your pick hand is the other hand. This is the one that will hold the pick and strum the guitar.



When using your pick to strike the strings, make sure not to strike too hard or too soft. You are a beginner and need to hear how you sound like. Use only your wrist when you play and not your whole arm. Practice three different strokes on each string: downward, upward and alternate down and up. Once you get the hang of it, you will learn the best pressure to put on the string to produce the proper sound.



<h3>Learn the chords.</h3>

Get a chord book and begin practicing the chords. You can practice doing them one by one as shown on the book until your mind and fingers memorize them. Only problem is that this can get a little boring. There is just no sense playing a bunch of chords that do not sound like a real melody.



The better alternative would be to learn the most common chords first. These are: C major, D major and G major. Play one chord first until you memorize it and then move to the other. You can then practice moving from one chord to the next, keeping both the sound and the movement as fluid as possible. Practice on songs that play these chords until you have mastered them. When you do, move on to other songs using other chords.



<h3>Where to find your lessons online</h3>

There are plenty of resources you can turn to for easy guitar lessons books, magazines and online resources. If you want free lessons, here are some websites you can check out for help.



If you know the basics of playing the guitar, this site is a great resource for learning easy songs. Do not worry, because lessons are designed for beginners. A few sessions online and you should learn enough songs to surprise anyone in no time.



Not only does this site feature easy step by step lessons on guitar playing, there is also a link to a page featuring songs made popular in the 1960s. Bring back the groovy years with easy to follow instructions.



All the easy guitar playing secrets you have always wanted to learn are here, plus you get to learn how to play lead guitar. You can also order their instructional CD-ROM to learn easy guitar lessons at your own pace.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Performing Arts'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 7///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img7.jpg" ;

$post_meta = array(

				    

				   "templ_seo_page_title" =>'Tips on Playing Blues Guitar Like The Pros',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Tips on Playing Blues Guitar Like The Pros',

					"post_content" =>	'Normally in pop and rock songs, eighth notes divide each beat into two equal pieces. The eighth notes create the familiar "one & two & three & four &" feel that were used to in rock songs. On the other hand, blues guitar uses a swing feel, where each beat is divided into three pieces. Instead of "one & two &," we get "one & a two & a three & a four & a." Breaking the beats into three pieces creates what are called eighth note triplets. Since there are usually four beats per measure in the blues, you are usually playing four groups of three.



When you are learning how to play blues guitar, you want to practice strumming a chord like an E7, which is a shorthand way to write E dominant 7, with a swing feel. You should practice strumming down on the strong beats, those that fall on the one, two, three, or four, skip the �&, and strum up again on the "a." With that rhythm you get the do DAH do DAH do DAH do DAH sound made famous by artists such as Buddy Guy, Robert Cray, and BB King.



<ol>

	<li>Another big part of learning how to play blues guitar is learning how to play a dominant seventh type of chord.</li>

	<li>All chords have 2 pieces, and blues guitar chords are no exception.</li>

	<li>If you have an A7 chord, you know two pieces of information from that name, you know that the chord is built on an A note, and you know it has a dominant seventh chord quality, or sound.</li>

	<li>Dominant seventh chords use the root, third, fifth, and flatted seventh of the major scale.</li>

	<li>It is that blending together of the major third and minor seventh notes that give dominant seventh chords their unique appeal.</li>

	<li>In most forms of music, only the chord built from the fifth tone is permitted to be a dominant seventh chord.</li>

	<li>Not so in blues, every chord is a dominant seventh chord often.</li>

</ol>

      

The last thing about blues guitar is the use of the blues scale. From a major scale, take the root, flatted third, fourth, flatted fifth, fifth, and flatted seventh degree and you have a minor blues scale. To get the major blues scale, you take the root, second, flatted third, third, fifth, and sixth tones from a major scale. What really makes these scales sound �bluesy is the way they contain a flatted third, but are played against dominant seventh chords which have a major third. This usage is one of the more prevalent characteristics of blues music. It is also a major component of a lot of blues-based rock and popular music.



If you are learning how to play blues guitar, never forget the words of the great BB King, "The blues is the easiest music to learn, and the hardest to master." As in many facets of life, the blues is taking small ideas and constructing them together in such a way that they make something great.

					

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Performing Arts'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 8///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img8.jpg" ;

$post_meta = array(

				    

				   "templ_seo_page_title" =>'Dutty Wine Dance',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Dutty Wine Dance',

					"post_content" =>	'Curious minds may ask what the Dutty Wine is. The dutty wine originated in Kingston, Jamaica and its popularity grew at such an amazing rate that the world had to catch on. It was done mainly by women during at various dancehalls and venues. The dance was made more popular when a song called "dutty wine" was released. The combination of song and dance pushed the dance to dizzying heights, making it the popular dance for 2006.



<ol>

	<li>The Dutty Wine dance can be done in many different variations.</li>

	<li>This is due to the fact that each dancer adds their own distinctive style to the dance.</li>

	<li>To start, the main dance is rather simple. </li>

	<li>The main move is the swinging of the neck round and round in a circular motion.</li>

	<li>This is done in a repetitive fashion and enhanced if the dancer has long hair.</li>

	<li>This completes the upper section of the dance.</li>

	<li>Many people incorporate their legs into the dance. </li>

	<li>This is done in a butterfly motion (butterfly: a popular urban dance from the earl 1990s). </li>

	<li>The combination of leg movements and neck spinning results in the dance the dutty wine.</li>

	<li>As mentioned earlier personal style is an essential in the dutty wine dance.</li>

	<li>Dancers have been know to countless different styles from incorporating gyrating hip movements, spinning around and even going on their hands and other such acrobatics, All while doing the basic dance.</li>

</ol>       



The "Dutty Wine" song by Tony Matterhorn is also a popular aspect of the dance. Once the song is played all hell lets loose, the women dance according to the descriptive lyrics. The popularity of the song has boosted the spotlight on the dutty wine dance itself.



The Dutty Wine dance however is not free from controversy. There are many people who feel that the song and dance is inappropriate and the overly sexual suggestiveness and popularity is picked up by innocent children. The children mimic what they see without realizing what they are doing. The second controversy is a result of the injuries and death that have occurred from women doing the dance. The rapid movement of the neck has the potential to cause bodily harm. This occurred in late 2006 when a woman apparently died from injuries sustained from dutty wining.



The dutty wine has the potential to be bigger in 2007. With the popularity increasing month by month it could become the next big thing in American pop culture. The suburbs have caught on and once the spark is there, it could become a blazing wildfire. Only time can tell if your soccer mom is caught doing the dutty wine.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Performing Arts'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 9///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img9.jpg" ;

$post_meta = array(

				    

				   "templ_seo_page_title" =>'6 Tips For Better Guitar Playing',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'6 Tips For Better Guitar Playing',

					"post_content" =>	'In this article I hope to demonstrate a few tips that will, with any luck, put you on the correct approach to developing into a proficient guitar player. If you can take into account that to play well involves a lot of practice and dedication then these tips will give you a head start. It takes arduous work and perseverance to the learn guitar and there is no fast and easy way, but some procedures are much more adept than others, resulting in quicker advancement. The main chief tip, though, is no matter what you do dont admit defeat

					

<h3>Set Aside Your Own Space</h3>

Distractions can play havoc with your concentration and focus, making any practise session worthless. Learning to play the guitar is hard enough so make it easier by finding a space where you can be alone without any outside noise or interruptions. 



<h3>Equipment</h3>

Ensuring that your guitar is tuned correctly is paramount at the beginning of any practise session. Preparation is essential to good guitar playing and it is imperative to make certain that your instrument is in good condition 



<h3>Understand Your Instrument</h3>

Surprising, as it might seem, not all guitars are the same, every one has a different tone and sound. Learn to know and understand your guitar, what every part is called and its different function. Appreciate your instrument and, although its an inanimate object, learn to respect and care for it. Even though you might not appreciate it now it will make you a better and more experienced guitar player. 



<h3>Recognise Your Level Of Expertise</h3>

Frustration can soon set in when, after a few weeks of practising and learning, you cant play the same tunes as Eric Clapton or Jimmy Page or any of your other guitar heroes. Realism has to kick in somewhere and the sooner the better. Learning to play the guitar is not an overnight thing. It takes time. Start with sensible goals, leave the advanced playing until later and progression will come with a growth in confidence. Show persistence at this point and you will reap the benefits later and it will be even more rewarding. 



<h3>Pick Your Style</h3>

Being able to play a piece of music made famous by one of your favorite guitarists is an unbeatable sensation. When, and only when, you have completed the fundamentals and you are set to move on to something harder its time pick a style of music you like and can identify with. Most songs are generally accessible as sheet music from a variety of sources and its another level in your education. This is an exhilarating stage in your progress. 



<h3>Set Goals</h3>

One of the best ways to focus you concentration on you progress is to set mini targets. Pick a time period for when you are going to play your first song in front of family and friends and let them know about it. This helps give a reason for your practise sessions and certainly grabs your attention the closer to the date of your debut performance. Once you have performed and enjoyed being in the spotlight it will give you a boost in confidence. Its no surprise, but your playing will improve after.



Keep in mind, learning to play the guitar is a continual progression, but should always be fun, and if you continue to advance consistently there is no knowing how talented you can grow to be. With any luck, these tips will prove useful and you will have many years of playing satisfaction.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Performing Arts'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 10///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img10.jpg" ;

$post_meta = array(

				    

				   "templ_seo_page_title" =>'Major Pentatonic Scale',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Major Pentatonic Scale',

					"post_content" =>	'<h3>Major Pentatonic</h3> 

The major pentatonic is similar to the minor pentatonic: The intervals for a major pentatonic are 1 2 3 5 6 1. The C major scale includes C D E G A C. The difference between the major and minor scale is the minor scale has a flatten 3rd interval. The following is the most common generic box shape for the pentatonic major scale: The major pentatonic sounds happier and are not used as extensively in rock and blues as the minor version of the scale. They sound good over major chords, and power chords. Sometimes the minor and major scales are used in the same song, with the major scale used for the chorus, and the minor for the verse. There are no hard and fast rules when in comes to scales and soloing. It s a matter of style and personal choice, as long as it sounds good, go for it. But you will find that if you use these simple scale forms in conjunction with an appropriate chord progression this will sound good more often. A chord progression based on the A minor chord will sound good with A minor pentatonic and a C major chord will sound good with C major scale. For information on chord progressions please go to the section at our web site on chord progressions.

					

<h3>Minor Pentatonic</h3>

Minor pentatonic scales are used extensively in modern and classic rock. A strong understanding of how pentatonic scales work, and can be used for soloing and creating riffs, is extremely important. They are also the easiest and generally the first scales most people learn.



I assume you know how to read basic TAB format for this lesson. If you have not been exposed to TAB then you should review our lesson on reading guitar TAB before moving on.



The Minor Pentatonic scale consists of the following intervals: 1 b3 4 5 b7 1. In the key of A the intervals would be the notes of A C D E G A. There are 5 scale shapes in box patterns for the pentatonic scales.



The 5 is the fifth fret and is the root note, thus the name of the key and scale is A, the intervals determines the type Minor or Major. This scale shape above is the most scale and is used in rock, blues and most styles of music. If you move this entire shape up to positions on the guitar and play the same shape you will have a B minor pentatonic. Likewise if you slide the entire shape down two potions you have a G minor pentatonic.



Practice this scale shape several times a day, moving it into different positions or keys, for variety. Many of rocks most famous licks are derived form this shape. If you are going to play guitar learning this one basic shape is mandatory.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Performing Arts'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 1///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img1.jpg" ;

$post_meta = array( 

				   "templ_seo_page_title" =>'Famous Quotations On Various Topics',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Famous Quotations On Various Topics',

					"post_content" =>	'Quotes in short can be described as a smarter way to describe ones opinion on certain topic and feelings. Though quotes is more like a poem but quotes is more fun to read as well as to understand. Many great individuals from different fields such as science, history, movie stars, musicians and politicians have shared famous quotes on their view on various aspects. Marilyn Monroe, Bob Marley, Abraham Lincoln, Albert Einstein, Winston Churchill, Confucius, John Lennon, William Shakespeare, Mark Twain, Jim Morrison, Martin Luther King, Mother Teresa and Nelson Mandela are some of the most famous authors. Thought they too quote on their related fields yet they also have quoted on various topics and topic related to general life such as love, relationship, fame and so on.

					

<ul>

	<li>Marilyn Monroe one of the most famous Hollywood actresses is also known for her smart quotes on various topics ranging from women freedom to her personal life.</li>

	<li>Some of her most famous quotes includes, If you can make a girl laugh - you can make her do anything, Hollywood is a place where theyll pay you a thousand dollars for a kiss and fifty cents for your soul, Husbands are chiefly good lovers when they are betraying their wives, Some people have been unkind.</li>

	<li>If I say I want to grow as an actress, they look at my figure.</li>

	<li>If I say I want to develop, to learn my craft, they laugh. Somehow they dont expect me to be serious about my work. Bob Marley, one of the most famous musicians and singer in the world is also famous for his quotes. His quotes ranges everything from music to world affairs.</li>

</ul>   



Some of his most popular quotes are,  Dont worry about a thing, every little thing is gonna be alright,  Until the philosophy which holds one race superior and another inferior is finally and permanently discredited and abandoned, everywhere is war and until there are no longer first-class and second-class citizens of any nation, until the colour of a mans skin is of no more significance than the colon of his eyes. And until the basic human rights are equally guaranteed to all without regard to race, there is war. And until that day, the dream of lasting peace, world citizenship, rule of international morality, will remain but a fleeting illusion to be pursued, but never attained... now everywhere is war.



William Shakespeare, one of the worlds most renowned poets and writer is also famous for his quotes such as Love is a smoke made with the fume of sighs. Being purged, a fire sparkling in lovers eyes. Being vexed, a sea nourished with lovers tears. What is it else? A madness most discreet, a choking gall and a preserving sweet Had I but served my God with half the zeal I served my King, He would not in mine age have left me naked to mine enemies.



There are myriads of famous quotes from famous celebrities as well as from normal individuals, but no matter what reading a smart and snappy quote is always fun.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Poetry'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 2///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img2.jpg" ;

$post_meta = array( 

				   "templ_seo_page_title" =>'Love Is',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Love Is',

					"post_content" =>	'

Love is the union of two people,

Who strive to attain many mutual goals.

Love is accepting ones good and the bad,

Of sharing the jolly times and also the bad.



Love is taking one another just as they are,

And making them feel like a bright shining star.

Love is knowing what the other one needs,

Showing you care with kind words and deeds.



Love is supporting the other without gain,

Of sharing the grace to forgive a wrong,

To heel a slight and not carry it long.



Love is the security and earned trust,

The feeling of safe and that is a must.

love is the gentle,warm, kind embrace,

Of two hearts wanting to share common space...

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Poetry'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 3///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img3.jpg" ;

$post_meta = array( 

				   "templ_seo_page_title" =>'Free Online Poetry Competitions',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Free Online Poetry Competitions',

					"post_content" =>	'A lot of people are always looking to enter poetry contests. Poetry competitions can be free to enter or charge you a fee to enter. Poets usually search for the free ones. Poem contests can be set up as a general competition which would allow writers to submit any form of poetry or set up as an inspirational, motivational, love, urban or Christian poem contest. 

					

In inspirational poem competition writers are usually told to enter a poem that is in some kind of way inspiring. Poetry about overcoming a difficult challenge, hope or self-esteem could be entered into an inspirational poetry competition. Writers who like writing inspiring poems are probably the most likely ones to enter.



Motivation poetry contests usually require people to enter a poem that is motivational. A poem about achieving a goal, gaining something or on self-esteem can be entered into a motivation poetry contest. Motivation poetry is written a lot by people. Just hearing about a motivation poetry contest could motivate a person to write a motivation poem.



<ul>

	<li>When it comes to love poetry love poem contests requires poets to enter a poem in the area of love.</li>

	<li>A love poem can be about romance, family or friendship.</li>

	<li>Because a lot of poets write love poetry lots of poets look for love poetry contests to enter.</li>

	<li>Most times when people write love poems its about the love that they have for another person that they are in a relationship with.</li>

</ul>   



Urban poetry is a very popular form of poetry. African American poets are most known for writing urban poetry because of urban culture. For a writer to enter an urban poem contest their poem would have to relate to urban culture in some kind of way. Urban poetry is generally written with urban style words.



A short story poetry contest is a competition that usually requires a writer to enter a short poem that is written in a story style. People who write fantasy or fiction poetry are most likely the ones to be interested in a competition like this. Short story poetry can be written about any thing as long as its in the style of a story.



Christian poetry competitions are competitions based on Christians faith in God. These contests most likely would require that the enter poem be about God in some kind of way. Poets who often write pure poems or go to church are usually the ones who enter this kind of poem competition. At the same time poets who do not believe in God or have faith in God may enter a Christian poetry competition with a poem that explains their disbelief in God.



Before entering a poem contest it may be wise to know a little about the host of the competition. Some people set up poetry competition scams in order to gain something most of the time money. Poem contests may be found on the internet, in a magazine and hosted by local community business or organizations. Poems entered into poetry contests are usually very creative so in order to win the contest a person should try to write a great poem.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Poetry'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 4///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img4.jpg" ;

$post_meta = array(

				    

				   "templ_seo_page_title" =>'Good Poetry',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Good Poetry',

					"post_content" =>	'

<h3>Going to Heaven! by Emily Dickinson</h3>

Going to Heaven!

I dont know when - -

Pray do not ask me how!

Indeed Im too astonished

To think of answering you!

Going to Heaven!

How dim it sounds!

And yet it will be done

As sure as flocks go home at night

Unto the Shepherds arm!



Perhaps youre going too!

Who knows?

If you should get there first

Save just a little space for me

Close to the two I lost - -

The smallest "Robe" will fit me

And just a bit of "Crown" - -

For you know we do not mind our dress

When we are going home - -



Im glad I dont believe it

For it would stop my breath - -

And Id like to look a little more

At such a curious Earth!

Im glad they did believe it

Whom I have never found

Since the might Autumn afternoon

I left them in the ground.



<h3>Loves Philosophy by Percy Bysshe Shelley</h3>

The fountains mingle with the river

And the rivers with the ocean,

The winds of Heaven mix for ever

With a sweet emotion;

Nothing in the world is single,

All things by a law divine

In one spirit meet and mingle - Why not I with thine?



See the mountains kiss high Heaven

And the waves clasp one another;

No sister-flower would be forgiven

If it disdained its brother;

And the sunlight clasps the earth,

And the moonbeams kiss the sea - What are all these kissings worth

If thou kiss not me?



<h3>Elizabeth Barrett Browning</h3>

Beloved, thou hast brought me many flowers

Plucked in the garden, all the summer through

And winter, and it seemed as if they grew

In this close room, nor missed the sun and showers.

So, in the like name of that love of ours,

Take back these thoughts which here unfolded too,

And which on warm and cold days I withdrew

From my hearts ground. Indeed, those beds and bowers

Be overgrown with bitter weeds and rue,

And wait thy weeding; yet heres eglantine,

Here s ivy!-take them, as I used to do

Thy fowers, and keep them where they shall not pine.

Instruct thine eyes to keep their colors true,

And tell thy soul their roots are left in mine.



<h3>Young and Old by Charles Kingsley</h3>

When all the world is young, lad,

And all the trees are green,

And every goose a swan, lad,

And every lass a queen;

Then hey for boot and horse, lad,

And round the world away,

Young blood must hanve its course, lad,

And every dog his day

When all the world is old, lad,

And the trees are brown;

And all the sport is stale, lad,

And all the wheels run down,

Creep home, and take your place here,

The speen and maimed among:

God grant you find one face there,

You loved when all was young



Famous poems are in places all over the world. They can be found in books, on the internet and in many different other places.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Poetry'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 5///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img5.jpg" ;

$post_meta = array(

				    

				   "templ_seo_page_title" =>'Dark Poetry From The Heart',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Dark Poetry From The Heart',

					"post_content" =>	'Many poets write dark poems. Dark poetry can be written based on various reasons. The reasons can be caused by confidence issues, relationships, friendships, health, belief, views and other things. Some poets may write dark poems without the intent to.

					

Writers often have low self-esteem issues. Writers can have confident issues when it comes to approaching the opposite sex, learning about new things, speaking in front of a group of people and standing up to other people. A lot of times when a man is interested in a girl that hes attractive to he will not approach the woman because of low confidence. This can cause him to write dark poems about girls. When it comes to learning new things school can be tough for some students which can cause them to have low confidence. Because of this the student may write dark poetry about how they feel about school. Public speaking can also be based off an individuals confidence of an individual. If an individual is afraid of public speaking it can cause them to reveal those deep emotions through dark poems.



<ul>

	<li>Not all writers have faith in God.</li>

	<li>Sometimes non believers of God will challenge a believers faith which can come in the form of a dark poem.</li>

	<li>Non believers may also attack God directly through their poetry.</li>

	<li>In many cases this can be because of the lost of a loved one.</li>

	<li>Most families that grow up together know just about everything about each other from spending so much time together.</li>

	<li>But the one thing that they might not know about each other is the feelings that they have deep inside of them that they might never reveal.</li>

	<li>When these emotions are negative they can cause extreme dark poetry to be created.</li>

</ul>  



An individuals friend can be a major influence on the person and the friend may not even know it. Things said, actions and expressions from a persons friend can cause them to write dark poems. The poem could even include the name of the individuals friend.



When a person has an issue with their health it can create bad emotions. The health issues could be life threatening, a disability or other health issue. When emotions from these areas of health become negative the writer may write a poem from those feelings.



All people do not have the same view on things of the world. An individual that believes in the word of God from the Holy Bible most likely does not support same sex marriage while an individual who does not believe in the word of God may support same sex marriage. When writers dislike the views of other people it can often cause them to write dark poems.



Dark poetry without a doubt is a negative type of poetry. It can be created behind fear, jealousy, hate, envy and many other emotions. Not all people write dark poems. This style of poetry can often be quickly identified from the start of a poem. A lot of poems of this type may never be read by another person besides the individual who wrote the poem. In this case most likely it may be written in a diary or notebook. Writers often write dark poems online at poetry websites and social websites.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Poetry'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 6///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img6.jpg" ;

$post_meta = array(

				    

				   "templ_seo_page_title" =>'Inspirational Writings',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Inspirational Writings',

					"post_content" =>	'When poets want or need to be inspired a lot times they turn to inspirational poetry. Poetry writing has helped inspired people in many different ways. Poetry about a poets life, about faith, about confidence, and views on life can be very inspiring.

					

Poets often write inspirational poems about their life. Poems such as these can be based on how they overcame some sort of situation. Drug addictions, poverty, relationship issues and school are some of the many things poets write about things to inspire others. Many times people may write a poem about their life not with the intention to inspire but still inspire the readers that read it. An example is a poem that describes how the person got over a bad relationship or divorce. When poets describe a drug addiction through a poem can inspire people not to try it or help them overcome the same addiction. Teenagers often go through many things while in school so a lot of times they write about those things which can be inspiring to the read. These teenagers are often in middle school or high school.



<ul>

	<li>Poems about faith can be very inspirational which are often written about God.</li>

	<li>These poems can about the things that God has done for that person or the greatness of God.</li>

	<li>Other faith inspirational poetry can be about how a person believes that something will happen for them even when it seems impossible.</li>

	<li>Because many people go to church inspirational poems on faith is a form of poetry that is often written.</li>

	<li>When poets are feeling confident they often write poems based on their confidence which can make for a very good inspiring poem.</li>

	<li>These kinds of poems can be based off material things or feelings that they feel inside.</li>

	<li>A confident person can also inspire their readers to write.</li>

	<li>Many times readers will want to read more than one poem from a writer who writes with confidence.</li>

</ul>    



Poems written based on a writers views are often inspirational. Inspirational poems such as this can be written about society, family, government and other subject areas. If a person was to write a poem based on infants who need food and water in Africa it can be inspirational to people that read the poem. A poem written on how much a poet loves their mom or dad and a poem written about how society needs to change for the better can also be very inspiring poems as well.



Inspirational poems can be tough to write depending on the poet. A lot times when writers are feeling depressed or stressed they may not be able to write inspirational poems. Some poets may have to read an inspirational poem first before they can be able to write one themselves. Because of the many problems around the world people are always seeking to find something that inspires. Because of this reason many people write inspirational poetry. Inspirational poems can be found in books, on the internet and on cards. Inspiration has always been a great mood changer when it comes to feelings such as depression so inspirational poetry is a very popular form of poetry.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Poetry'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 7///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img7.jpg" ;

$post_meta = array(

				    

				   "templ_seo_page_title" =>'Creeper',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Creeper',

					"post_content" =>	'

The oak was tall and strong,

With green leaves and branches so long...

He had grown in a beautiful garden,

With few other oaks and a handsome warden...



As time flowed and the future rolled...

A cute little sapling entered the garden...

The oak took care and nurtured the sapling,

The bond grew strong under the oak&rsquo;s wing, 

The sapling grew up and turned to be a creeper,

Entwining a few trees into it deeper...



As time flowed and the future rolled...

The greenery was good and creeper was happy,

And one fine day the oak was crappy,

Untwine from the teak was the order,

Teak is not oak and is one step shorter...

Creeper had grown so thick in lush greenery,

And teak was a part of its beautiful scenery,



As time flowed and the future rolled...

Teak tried to hold on to the creeper,

For the entwining was so much deeper.

Oak signaled the creeper about the warden,

Creeper wondered, wasn&rsquo;t Oak her warden...

Oak loved warden, Oak loved the creeper,

Creeper loved the Oak, Creeper loved the teak,



In a attempt to entwine both oak and teak,

The creeper lost its creeping streak....

It fell down limply between the greenery,

Never to creep again, never to build a scenery,

Having lost its creeping streak, it became a bundle of limp fernery,



The green started fading away and the creeper started withering away.....

As was the norm the time flowed, but this time there was no future to roll...



',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Poetry'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 8///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img8.jpg" ;

$post_meta = array(

				    

				   "templ_seo_page_title" =>'Enjoy Poems - 3 Short Steps To Romantic Like',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Enjoy Poems - 3 Short Steps To Romantic Like',

					"post_content" =>	'These 3 appreciate poems illustrate the progressive steps while in the progress of the days of christmas poem love relationship. The primary action is realization. Theres commonly a time period by which we move from not figuring out we are in love to gradually realizing and accepting that were.

<h3>Dream</h3>

I dreamed a dream

I am aware not why

I dreamed a dream of you.

I dreamed a dream

I now know why

I dreamed a dream of you.



It took just a little time for me to understand that she was interested in me. I am referring to a woman at college that is now my wife. Id stroll by her just after wind ensemble practice as we were putting our horns away, and she would smile at me...just smile. I returned the smile but didnt consider considerably of it.

Immediately after some time it all of a sudden dawned on me. Was she interested in me?

Appreciate appears to be to occur in a different way for everyone. For some it christian poems in the beginning sight. I can honestly say I tend not to know personally of anyone which has met their husband or spouse this way, but if I am to feel what I see and listen to in movies, it happens.

But I assume this poem depicts the far more typical encounter of the gradual revelation.

Once we realize that were in love, the second action starts...talking and spending time with each other.



<h3>Affections</h3>

The far more I commit

My time with you

And talk and listen to your voice,

My hopes, my goals

Get focused in

And make my coronary heart rejoice.



Its organic for people today to fall in love whilst spending time christmas acrostic poem . Interacting with folks by voice and eye speak to too as sharing of their get the job done or routines results in robust emotions of attachment. Feelings commence flowing which will cause matrimony. Years of struggle shared with each other as we expand old cement our romantic relationship. And, if we allow it to be into our golden a long time, our like graduates on the closing degree of romantic adore; wordless expression

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Poetry'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 9///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img9.jpg" ;

$post_meta = array(

				    

				   "templ_seo_page_title" =>'Black Rose Of My Mar Vaglia',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Black Rose Of My Mar Vaglia',

					"post_content" =>	'

Black Rose of my Mar Vaglia,

exquisite as color of night in all the passion

to be captured in flower of thine sexuality

to adorn garden of womanhood enchanted

by fragrance of our desire

as honey lends sweetness to palate 



Black Rose of my Mar Vaglia,

to be savored by taste of mine

for thee as lust of my desires

feasts upon juices of paradise

to quench thirst whilst passions

spray flower of woman with perfume

of lust to elevate senses

for tempestuous storms to rage



Black Rose of my Mar Vaglia,

it be with fiery kiss that black rose

welcome root of mine to her paradise

as rich lips with tenderness

encounter desire of mine

in strong embrace whilst root of mine

makes way ever emergent in our wishes

whilst desires flood her garden of wild beauty



Black Rose of my Mar Vaglia,

ever sensuous decoration of thine femininity

as we make journey through out lands a far

in romantic escapades of wild carnality

nay aware of boundaries as world be ours

to indulge flights of fantasy

in scandalous spectacles

of incendiary acts of flesh



Black Rose of my Mar Vaglia,

it be in rituals of those seeking treasure

in the dark that root of mine

discovers exotic rose in garden

fertile in moisture as burst arrives

to time with enraptures of thine struggle

in act momentous as our worship



Black Rose of my Mar Vaglia,

ever tender flower of thine affections

for our adorations as rose of desire

joins our ways in to one life of bliss

for us to spend days of joy

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Poetry'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 10///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img10.jpg" ;

$post_meta = array(

				    

				   "templ_seo_page_title" =>'Angel Of Fall',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Angel Of Fall',

					"post_content" =>	'

The fall is upon me with shades on to colors

fading from bright on to pallid flavors

ever of this crisp season to refresh air of nature

whilst bringing new energy on to my desires

as does my angel who likewise does take

on the form of the change



My angel in mane of gold does capture the leaves

of the time of year which turn to lovely tones of color

as winds of cool bring about end to summer&rsquo;s green

to transform all to riches of multihued plenty



My angel taking on warmth from spirit ever bountiful in emotions as does autumn

to range from russet of foliage to crimson dark in passions of my Joannuszka

encountered in flowers dried by arrival of new summer to be dubbed Indian



My angel in lady&rsquo;s summer encompasses fashion

of alteration as surroundings colorful

adorning my Joannuszka in wears of elegance

decorating her from cascade of yellow curls

as she descends to vision of loveliness

of the season of dormant environment



My angel cometh as candle of ardent fervor

in season of falling leaves and chestnuts

to hurl on ground from trees



my angel in eyes of tenderness

nay to expire as roses of summer

be as lantern on to evenings come early

as affections of my Joannuszka

be not quiescent for her Slisznuszek

as flora and fauna wishing season&rsquo;s slumber



My angel&rsquo;s paradise be shelter on to my affections

as nippy winds of October journey over land

My Joannuszka as cider of apples to warm

whilst cold rains of November cause nay refrain

in adoration of us captured in the other

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Arts - Entertainment','Poetry'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

//////////// Business - Career /////////////



////post start 1///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img1.jpg" ;

$post_meta = array(

				   "tl_dummy_content" => '1',

				   "templ_seo_page_title" =>'Software Jobs',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Software Jobs',

					"post_content" =>	'Fear is part of the fundamental core of human existence, as connected to the basic functions of survival and the psyche as the survival instinct or the need to mate. Fear and anxiety, therefore, are among the staples of any genre that deems itself fit to entertain the masses, an art form to be mastered in the hands of a true artiste. Fear, dread, and anxiety are all integral components of any successful horror story, for example, but not everyone who writes horror manages to get the mix of the important elements - -- pacing, plot, and characterization - -- all of which must be just right to create a classic that will frighten generations long after the first copy was printed. There are a few that manage to accomplish the difficult feat of being eternal in their horror and long-lasting in their ability to turn anxiety into outright terror.

					

Edgar Allan Poe, author of "Annabel Lee" and "The Fall of the House of Usher" , is easily recognized as one of the foremost masters of horror and the macabre. His works have inspired terror and anxiety in many individuals, primarily through the use of heavy psychological tones, as opposed to the gore and blood themes used and abused by writers of his time. Poes collected works easily counts as some of the most frightening material ever written, especially now, in an age where horror movies are relegated to two hours of bloodshed and senseless violence, lacking any true horror and relying solely on shock value to appear "scary." Poe also stands out as being among the few who can make even the most mundane things seem utterly terrifying, a feat emulated by Stephen King and several Japanese horror authors, but never truly duplicated.



In a completely different vein of horror from his predecessors, and arguably creating a sub-genre of horror through his works, H. P. Lovecraft also stands out. His works, while lacking in humanity, are difficult to see as anything but terrifying, particularly because of the apparent lack of humanity in them. In contrast to writers of previous generations, Lovecraft focused more on the truly monstrous, ignoring the human element that most horror writers tended to insert into their works since the days of the Gothic era. His stories were littered with monsters that knew neither morality nor mercy, seeing humanity as insignificant insects and, in Lovecrafts malignant world of ancient races and Elder Gods, humanity was insignificant. He also brought back something from the Gothic horror era, showing his readers that knowledge, even just a little knowledge, can lead to the most terrifying of discoveries. This is perhaps best exemplified by the so-called "Cthulhu Mythos," a collection of stories that centered around Lovecrafts anti-mythological beings.



<h3>Frankenstein</h3>

<ol>

	<li>Among the most enduring horror classics in the world is that of Shelleys "Frankenstein," which combines the elements of horror with the intrinsic questions that plagued morality and philosophy at the time. </li>

	<li>In some ways, the story is one that puts a new spin on the old ghost story, in that the "ghost" is inevitably caused by the actions of mortal men who meddled in things they were not meant to. </li>

	<li>The story, aside from being a genuine tale of terror, also took on the role of a lesson in morality and the limits to just how far medical science could go.</li>

	<li>Prolonging life is one thing, but bringing back the dead is another thing entirely, which is one of the subtle messages of the novel.</li>

	<li>The underlying question of whether or not Frankensteins creature is the monster, or if it is Frankenstein himself, also contributes to making the story a memorable, chilling tale.</li>

</ol> 



However, very few stories can truly stand up against the pure terror and the subtle anxiety and dread caused by Bram Stokers infamous novel, "Dracula." The novel is a hallmark of the Gothic horror era, presenting a villain of potentially epic scope in the guise of a remarkable gentleman and nobleman. It deviated from other vampire stories of the time in that the vampire, Dracula, was not monstrous in appearance. He looked every inch a master and nobleman, establishing the "lord of the night" archetype that would be a stock image of vampire characters in literature for centuries to come. It also had all the elements necessary to both frighten readers and keep them coming back for more, marking it as the most enduring horror novel in history.



',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Business - Career','Career'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 2///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img2.jpg" ;

$post_meta = array(

				   "tl_dummy_content" => '1',

				   "templ_seo_page_title" =>'Civil Engineering Resume: How it will help you to land your Dream Job',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Civil Engineering Resume: How it will help you to land your Dream Job',

					"post_content" =>	'There are great deals of important factors that go into getting a tattoo, including where your tattoo belongs on your body. Different tattoos have different story and importance behind it. Eagle tattoos are one of them that reflect strength and are the common choices for men and women who serve as police officers, firefighters, soldiers, or other service members. Emphasizing articulates such as freedom, strength, and liberty are popular choices added to banners or underneath a tattoo of an eagle particularly if the tattoo is done as a memorial or tribute to someone to make the whole image impressive.

					

Eagles are counted among the birds of strength with strong talon that soars high in the sky and possess keen eyesight. The images of eagles hold an important position in history also. They appeared in various emblems of the past history in many different lands and their importance have been mentioned in different historical events of the past. For instance in Native American cultures, the free-spirited eagle are deeply profoundly honored and their feathers were also given importance. They were often given as a sign of pride, security or friendship. Even in ancient Greece eagle was worshiped as it was thought to have some association with the god Sun. You can also find the name of the eagle has been mentioned in the Norse mythology. It had some association with the god Odin, who represented wisdom.



<h3>Feature</h3>

<ol>

	<li>Eagle tattoos are unique in themselves and it can be also done in many different creative ways and just about anywhere on the body but still the most common area for this type of tattoo is the upper arm, followed by the shoulders, and the upper and lower back areas.</li>

	<li>Eagle tattoos whether it is with spread wings or roosting position are really eye-catching.</li>

	<li>The most important feature of eagle tattoo is its feather. </li>

	<li>So if the tattoo is done on a large area with spread wings where every details of the wing are clearly visible provides the eagle tattoo with a realistic appearance. </li>

	<li>The back is a great location for eagle tattoo with their wings fully spread as if in flight. </li>

	<li>You can also ink your back with another popular swooping pose of an eagle. </li>

	<li>This swooping poses of the eagle targeting its prey with sharp talons is really mind blowing, and of course the internet and many tattoo shops are full of images of the majestic eagle in varying poses.</li>

</ol> 



Small eagle tattoos featuring only the head of the bird can be inked on the leg or armbands, or can be incorporated into another design. There are many tattoo shops and websites that will provide you with varying poses of eagle.



',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Business - Career','Career'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 3///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img3.jpg" ;

$post_meta = array(

				   

				   "templ_seo_page_title" =>'The Life And Times Of An X-Ray Technicians.',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'The Life And Times Of An X-Ray Technicians.',

					"post_content" =>	'Calligraphy and painting were two of the most prized art forms in antediluvian China. Calligraphy was thought to be the highest and purest form of painting. The annals of painting in China dates back to the 2nd century BCE. In the earliest era, painting and writing were made out on silk, until paper was subsequently developed during the 1st century CE.

					

Chinese art, and in particular, Chinese painting is greatly treasured around the globe. Chinese painting can be retraced to as far back as six thousand years ago in the Neolithic Age when the Chinese have started using brushes in their paintings. Chinese art dates back even sooner than that.



According to subject matter, Chinese paintings can be classified as landscapes, character paintings and flower-and-bird paintings. In traditional Chinese painting, Chinese landscape painting embodies a major category, depicting nature, especially mountains and bodies of water. Landscapes have customarily been the choice of the Chinese because they manifest the poetry characteristic in nature. Accordingly, many esteemed paintings are landscapes.



The most popularly known form of Chinese painting is "Water-ink" painting, where water-ink is the medium. Some of the basic things required for the Chinese painting include: paper, brush, ink or ink stick, ink stone, and color.



<ol>

	<li>Brush: The Chinese brush is a mandatory tool for Chinese painting. The brush should be sturdy and pliable. Two types of brushes are used. The more delicate brush is created from white sheep hair. This brush should be soaked first, and then dried to prevent curling. The second one is made from fox or deer sable fibers, which are very durable, and is inclined to paint better. The procedure the brush is used depends on the varied features of brush strokes one wants to obtain, such as weight, lightness, gracefulness, ruggedness, firmness, and fullness. Various forms of shades are applied to impart space, texture, or depth.</li>

	<li>Ink Stick: There are three types of Ink Stick: resin soot, lacquer soot, and tung-oil soot. Of the three, tung-oil soot is the most commonly used. Otherwise, Chinese ink is best if ink stick or ink stone are ineffectual.</li>

	<li>Paper: The most generally used paper is Xuan paper, which is fabricated of sandalwood bark. This is exceptionally water retentive, so the color or ink disperses the moment the brush stroke is put down. The second most well-known is Mian paper.</li>

	<li>Color: The most former Chinese paintings used Mo, a type of natural ink, to produce monochromatic representations of nature or day-to-day life. Made of pine soot, mo is combined with water to get unique shades for conveying appropriate layers or color in a painting.</li>

</ol> 



Chinese painting is called shui-mo-hua. Shui-mo is the combination of shui (water) and mo. There are two styles of Chinese painting. They are gong-bi or detailed style, and xie-yi or freehand style. The second is the most common, not only since the objects are depicted with just a few strokes, but likewise because shapes and sprites are drawn by uncomplicated curves and natural ink. Many ancient poets and students used xie-yi paintings to give tongue to their religious anguish.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Business - Career','Career'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 4///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img4.jpg" ;

$post_meta = array(

				   

				   "templ_seo_page_title" =>'How to keep yourself in demand to employers',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'How to keep yourself in demand to employers',

					"post_content" =>	'Famous Paintings have been greatly admired in art history. Famous art paintings are invaluable and of great historic importance. Famous artists have been successful in creating famous artwork paintings. Canvas oil paintings make the most the popular form of the most famous Oil paintings. Famous Oil Paintings are of various styles. These include famous landscape paintings, famous still life paintings, famous fruit paintings, famous seascape paintings, famous contemporary paintings.

					

Famous artists paintings have earned world wide recognition in different periods of times. Famous painters paintings truly an asset for fine arts. There have been a great number of famous painters in different parts of the world in different periods of times. These include Marc Chagall, Salvador Dali, Leonardo Da Vinci, Paul Klee, Henri Matisse,Claude Monet, Pablo Picasso,Pierre Auguste Renoir,Henri Rousseau,Henri de Toulouse-Lautrec,Vincent Van Gogh,Andy Warhol.



<h3>Yo Picasso</h3>

<ol>

	<li>Famous abstract paintings present the fine art at the highest level. </li>

	<li>Famous abstract artists have been gratly greatly appreciated for their famous abstract oil paintings. </li>

	<li>Picasso is one of the most famous abstract painter. Picasso became very famous because he work in multiple styles.</li>

	<li>Famous paintings of Picasso are Guernica ,Three Musicians,The Three Dancers and Self Portrait: Yo Picasso.</li>

	<li>Picasso famous paintings have earned him worldwide recognition.</li>

</ol> 



Many famous flower paintings have been created by the outstanding flower painters. Famous Floral Oil Paintings are in wide range of styles. Famous floral fine art paintings are exquisite. Famous landscape paintings are the master pieces of fine art. Famous Landscape painters have created a great number of famous landscape paintings. Famous Landscape art has greatly been admired in all the periods of times. Famous contemporary landscape painters have successfully attained the mastery in the landscape art.



Still life fruit paintings and fruit bowl paintings make the famous fruit paintings. The highly skilled artists have also created the most famous paintings of rotting fruit. The modern famous artists are successful creating the masterpieces of still fruit oil paintings and oil pastel fruit paintings.



Famous still Life art depicts drinking glasses, foodstuffs, pipes, books and so on. Famous Still life paintings are indeed the master pieces of fine art. Woman portrait paintings make the famous portrait paintings. There are also famous portrait paintings of men. Famous portrait paintings of Oscar dela hova have been greatly appreciated. Japanese women portrait paintings are very popular in Japanese culture. In addition to women portrait paintings and portrait paintings of men, there are many famous pet portrait paintings and famous portrait paintings of houses and famous paintings of sports cars.



Famous Islamic paintings of holy places and the famous islamic calligraphy of the holy verses have been truly represent the muslim art. Famous muslim artists have developed mastery of Islamic art calligraphy. The famous Islamic paintings include the paintings of the Holy places such as Khana kaaba, Masjid-e-Nabvi and other famous mosques and shrines. Famous Islamic art is fascinating and has always been appreciated. The famous Islamic art galleries have produced a great number of famous muslim painters and famous muslim calligraphist.



Famous modern galleries have produced the famous contemporary artists who have created many famous contemporary paintings. Famous oil paintings reproduction are also created in these famous galleries.



In addition to above styles, there are many famous paintings of other subjects. These include famous war paintings, famous paintings of jesus, famous figure paintings, religious famous paintings, famous paintings romantic, famous battle paintings, famous military paintings, famous sunset paintings, famous paintings of women, famous paintings of love, famous water paintings, famous acrylic paintings, famous paintings of buildings, famous dance paintings, famous dragon paintings, famous black paintings, famous paintings in the fall, famous paintings of cats, famous paintings of children, famous paintings of friends, famous paintings of christinaity, famous paintings of jesus and famous paintings of humanity. There are also famous native American paintings and famous Spanish paintings.



',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Business - Career','Career'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 5///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img5.jpg" ;

$post_meta = array(

				   

				   "templ_seo_page_title" =>'How to get better at your job',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'How to get better at your job',

					"post_content" =>	'Art theft is an ancient and complicated crime. When you look at the some of the most famous cases of art thefts in history, you see thoroughly planned operations that involve art dealers, art fakers, mobsters, ransoms, and millions of dollars. Here you can read about some of the most famous cases of art theft in the history.



<h3>The First Theft:</h3>

The first documented case of art theft was in 1473, when two panels of altarpiece of the Last Judgment by the Dutch painter Hans Memling were stolen. While the triptych was being transported by ship from the Netherlands to Florence, the ship was attacked by pirates who took it to the Gdansk cathedral in Poland. Nowadays, the piece is shown at the National Museum in Gdansk where it was recently moved from the Basilica of the Assumption. The Most Famous Theft:

The most famous story of art theft involves one of the most famous paintings in the world and one of the most famous artists in history as a suspect. In the night of August 21, 1911, the Mona Lisa was stolen out of the Louver. Soon after, Pablo Picasso was arrested and questioned by the police, but was released quickly.



It took about two years until the mystery was solved by the Parisian police. It turned out that the 30x21 inch painting was taken by one of the museum employees by the name of Vincenzo Peruggia, who simply carried it hidden under his coat. Nevertheless, Peruggia did not work alone. The crime was carefully conducted by a notorious con man, Eduardo de Valfierno, who was sent by an art faker who intended to make copies and sell them as if they were the original painting.



While Yves Chaudron, the art faker, was busy creating copies for the famous masterpiece, Mona Lisa was still hidden at Peruggias apartment. After two years in which Peruggia did not hear from Chaudron, he tried to make the best out of his stolen good. Eventually, Peruggia was caught by the police while trying to sell the painting to an art dealer from Florence, Italy. The Mona Lisa was returned to the Louver in 1913.



<h3>The Biggest Theft in the USA:</h3>

The biggest art theft in United States took place at the Isabella Stewart Gardner Museum. On the night of March 18, 1990, a group of thieves wearing police uniforms broke into the museum and took thirteen paintings whose collective value was estimated at around 300 million dollars. The thieves took two paintings and one print by Rembrandt, and works of Vermeer, Manet, Degas, Govaert Flinck, as well as a French and a Chinese artifact.



As of yet, none of the paintings have been found and the case is still unsolved. According to recent rumors, the FBI are investigating the possibility that the Boston Mob along with French art dealers are connected to the crime.



<h3>The Scream:</h3>

The painting by Edvard Munchs, The Scream, is probably the most sought after painting by art thieves in history. It has been stolen twice and was only recently recovered. In 1994, during the Winter Olympics in Lillehammer, Norway, The Scream was stolen from an Oslo gallery by two thieves who broke through an open window, set off the alarm and left a note saying: thanks for the poor security.



Three months later, the holders of the painting approached the Norwegian Government with an offer: 1 million dollars ransom for Edvard Munchs The Scream. The Government turned down the offer, but the Norwegian police collaborated with the British Police and the Getty Museum to organize a sting operation that brought back the painting to where it belongs.



Ten years later, The Scream was stolen again from the Munch Museum. This time, the robbers used a gun and took another of Munchs painting with them. While Museum officials waiting for the thieves to request ransom money, rumors claimed that both paintings were burned to conceal evidence. Eventually, the Norwegian police discovered the two paintings on August 31, 2006 but the facts on how they were recovered are not known yet.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Business - Career','Career'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 6///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img6.jpg" ;

$post_meta = array(

				   

				   "templ_seo_page_title" =>'Christmas Revision Tips',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Christmas Revision Tips',

					"post_content" =>	'Selecting art for your home can be an exciting adventure and a source of enjoyment for years to come. Keys to success are figuring out what kind of art you like, how it will fit in with the rest of your interior design plans, and how to exhibit the art to the best effect in your home.

					

<h3>What kind of art do you like?</h3>

There are many opportunities to browse art within your community at local exhibitions, art fairs and galleries. Even small towns usually have a not-for-profit gallery space, or cafes and restaurant that exhibit local artists. In larger cities, galleries often get together for monthly or periodic "gallery nights" where all the galleries hold open house receptions on the same evening. Its a great way to see a lot of art in a short time.



Today the internet provides the largest variety and depth of fine art available worldwide. You can visit museum websites and see master works from ages past, check out online galleries for group shows, and visit hundreds of individual artists websites. One advantage of using the internet is that you can search for the specific kind of art you are interested in, whether its photography, impressionism, bronze sculpture, or abstract painting. And when you find one art site, youll usually find links to many, many more.



<h3>Should the art fit the room or the room fit the art?</h3>

If you feel strongly about a particular work of art, you should buy the art you love and then find a place to put it. But you may find that when you get the art home and place it on a wall or pedestal, it doesnt work with its surroundings. By not "working," I mean the art looks out of place in the room. Placing art in the wrong surroundings takes away from its beauty and impact.



What should you do if you bring a painting home and it clashes with its environment? First, hang the painting in various places in your home, trying it out on different walls. It may look great in a place you hadnt planned on hanging it. If you cant find a place where the art looks its best, you may need to make some changes in the room, such as moving furniture or taking down patterned wallpaper and repainting in a neutral color. The changes will be worth making in order to enjoy the art you love.



Sometimes the right lighting is the key to showing art at its best. You may find that placing a picture light above a painting or directing track lighting on it is all the art needs to exhibit its brilliance. If you place a work of art in direct sunlight, however, be sure it wont be affected by the ultraviolet light. Pigments such as watercolor, pencil and pastel are especially prone to fading. Be sure to frame delicate art under UV protected glass or acrylic.



<h3>How to pick art to fit the room.</h3>

Size and color are the two major criteria for selecting art to fit its surroundings. For any particular space, art that is too large will overwhelm, and art that is too small will be lost and look out of proportion. The bolder the art, the more room it needs to breathe.





As a rule, paintings should be hung so that the center of the painting is at eye level. Sculpture may sit on the floor, a table, or pedestal, depending on the design. Rules should be considered guidelines only, however, so feel free to experiment.



When selecting a painting to match color, select one or two of the boldest colors in your room and look for art that has those colors in it. Youre not looking for an exact match here. Picking up one or two of the same colors will send a message that the painting belongs in this environment.



Another possibility for dealing with color is to choose art with muted colors, black-and-white art, or art that is framed in a way that mutes its color impact in the room. A wide light-colored mat and neutral frame create a protected environment for the art within.



Style is another consideration when selecting art to fit a room. If your house is filled with antiques, for example, youll want to use antique-style frames on the paintings you hang there. If you have contemporary furniture in large rooms with high ceilings, youll want to hang large contemporary paintings.



<h3>How to create an art-friendly room.</h3>

Think about it. When you walk into a gallery or museum, what do they all have in common? White walls and lots of light. If a wall is wall-papered or painted a color other than white, it limits the choices for hanging art that will look good on it. If a room is dark, the art will not show to its best advantage.



If you want to make art the center of attraction, play down the other elements of the room like window coverings, carpeting, wall coverings, and even furniture. A room crowded with other colors, textures and objects will take the spotlight away from the art. Follow the principle that less is more. Keep it spare and let the art star. Then relax and enjoy it.



Selecting and displaying art is an art in itself. Experiment to learn what pleases you and what doesnt. Youll be well-rewarded for the time you invest by finding more satisfaction both in the art and in your home.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Business - Career','Career'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 7///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img7.jpg" ;

$post_meta = array(

				   

				   "templ_seo_page_title" =>'Online MBA and Online BBA Information',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Online MBA and Online BBA Information',

					"post_content" =>	'Contemporary paintings are an exquisite style of paintings. Contemporary art paintings are the true representatives of the modern art. Contemporary artists are creating the contemporary oil paintings of the high quality. A great number of contemporary oil paintings are available in the contemporary art gallery. Contemporary art is of great artistic importance. Contemporary abstract paintings make the most of contemporary art. Still life Contemporary paintings are also very much appreciated.

					

There are many museums of modern paintings all over the world. The modern paintings of the modern artists are exhibited in these museums. These museums of modern art have been successful in flourishing the contemporary art. Modern artists exhibit their modern paintings creations in the museum of contemporary art. Museum of modern art New york, Contemporary art museum Houston, museum of modern art paris, art museum of Fort worth are the famous museums of contemporary art. Contemporary art work can be seen in these modern art museums.These museums exhibit the popular contemporary paintings of the famous modern artists.



<h3>Modern Abstract Art</h3>

<ol>

	<li>There are great number of painters of modern life. </li>

	<li>They have created the modern abstract art on modern themes. </li>

	<li>Modern artists paint colours in an artistic way. </li>

	<li>Their contemporary oil paintings are pure form of fine arts. </li>

	<li>History of modern art is full of great contemporary paintings from famous modern artists. </li>

	<li>19th century paintings and 20th century paintings are worth seeing. </li>

	<li>Modern art movements have been in progress in recent times. </li>

	<li>There are many contemporary art centers. </li>

	<li>Contemporary art center Cincinnati and Contemporary art center of Virginia are the famous modern art center. </li>

	<li>St.Louis contemporary art has been very much appreciated. Contemporary Christian artists</li>

<ol>



Modern art is also available for sale. Modern and contemporary art can be purchased from the modern art gallery. These contemporary art galleries offer the Original modern paintings of the famous contemporary artist. The reproductions of the famous contemporary paintings can also be purchased from these modern art galleries. These galleries also offer cheap price modern oil paintings.



Good News for lovers of modern art ! You can get Contemporary and Modern Oil Paintings of your own choice just by selecting the Model number of the Landscape Oil Painting or by sending the Photo of your required image. Our highly skilled modern artists can reproduce the contemporary paintings as per your given photo. Just click the Link of Contemporary paintings on our website (www.paintingsgifts4u.com) . For more details, Please contact us at : info@paintingsgifts4u.com.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Business - Career','Career'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 8///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img8.jpg" ;

$post_meta = array(

				   

				   "templ_seo_page_title" =>'The Resume is a Door Opener',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'The Resume is a Door Opener',

					"post_content" =>	'While the world pays respectful tribute to Rembrandt Van Ryn the artist, it has been compelled to wait until comparatively recent years for some small measure of reliable information concerning Rembrandt Van Ryn the man. Rembrandt Van Ryn was born in the pleasant city of Leyden, but it is not easy to name the precise year. Somewhere between 1604 and 1607 he started his troubled journey through life, and of his childhood the records are scanty. Doubtless, his youthful imagination was stirred by the sights of the city, the barges moving slowly along the canals, the windmills that were never at rest, the changing chiaroscuro of the flooded, dyke-seamed land. Perhaps he saw these things with the large eye of the artist, for he could not have turned to any point of the compass without finding a picture lying ready for treatment.

	

His family soon knew that he had the makings of an artist and, in 1620, when he could hardly have been more than sixteen, and may have been considerably less, he left Leyden University for the studio of a second-rate painter called Jan van Swanenburch. We have no authentic record of his progress in the studio, but it must have been rapid. He must have made friends, painted pictures, and attracted attention. At the end of three years he went to Lastmans studio in Amsterdam, returning thence to Leyden, where he took Gerard Dou as a pupil. A several years later, it is not easy to settle these dates on a satisfactory basis, he went to Amsterdam, and established himself there, because the Dutch capital was very wealthy and held many patrons of the arts, in spite of the seemingly endless war that Holland was waging with Spain.



His art remained true and sincere, he declined to make the smallest concession to what silly sitters called their taste, but he did not really know what to do with the money and commissions that flowed in upon him so freely. The best use he made of changing circumstances was to become engaged to Saskia van Uylenborch, the cousin of his great friend Hendrick van Uylenborch, the art dealer of Amsterdam. Saskia, who was destined to live for centuries, through the genius of her husband, seems to have been born in 1612, and to have become engaged to Rembrandt Van Ryn when she was twenty. The engagement followed very closely upon the patronage of Rembrandt Van Ryn by Prince Frederic Henry, the Stadtholder, who instructed the artist to paint three pictures.



<ol>

	<li>Saskia is enshrined in many pictures. </li>

	<li>She is seen first as a young girl, then as a woman. </li>

	<li>As a bride, in the picture now at Dresden, she sits upon her husbands knee, while he raises a big glass with his outstretched arm. </li>

	<li>Her expression here is rather shy, as if she deprecated the situation and realised that it might be misconstrued. </li>

	<li>This picture gave offence to Rembrandt Van Ryns critics, but some portraits of Saskia remained to be painted. </li>

	<li>She would seem to have aged rapidly, for after marriage her days were not long in the land. </li>

	<li>She was only thirty when she died, and looked much older.</li>

</ol>



In 1638 we find Rembrandt Van Ryn taking an action against one Albert van Loo, who had dared to call Saskia extravagant. It was, of course, still more extravagant of Rembrandt Van Ryn to waste his money on lawyers on account of a case he could not hope to win, but this thought does not seem to have troubled him. He did not reflect that it would set the gossips talking more cruelly than ever. Still full of enthusiasm for life and art, he was equally full of affection for Saskia, whose hope of raising children seemed doomed to disappointment, for in addition to losing the little Rombertus, two daughters, each named Cornelia, had died soon after birth. In 1640 Rembrandt Van Ryns mother died. Her picture remains on record with that of her husband, painted ten years before, and even the biographers of the artist do not suggest that Rembrandt Van Ryn was anything but a good son. A year later the well-beloved Saskia gave birth to the one child who survived the early years, the boy Titus. Then her health failed, and in 1642 she died, after eight years of married life that would seem to have been happy. In this year Rembrandt Van Ryn painted the famous "Night Watch," a picture representing the company of Francis Banning Cocq, and incidentally a day scene in spite of its popular name. The work succeeded in arousing a storm of indignation, for every sitter wanted to have equal prominence in the canvas.



It may be said that after Saskias death, and the exhibition of this fine work, Rembrandt Van Ryns pleasant years came to an end. He was then somewhere between thirty-six and thirty-eight years old, he had made his mark, and enjoyed a very large measure of recognition, but henceforward, his career was destined to be a very troubled one, full of disappointment, pain, and care. Perhaps it would have been no bad thing for him if he could have gone with Saskia into the outer darkness. The world would have been poorer, but the man himself would have been spared many years that may be even the devoted labours of his studio could not redeem.



Between 1642, when Saskia died, and 1649, it is not easy to follow the progress of his life; we can only state with certainty that his difficulties increased almost as quickly as his work ripened. His connection with Hendrickje Stoffels would seem to have started about 1649, and this woman with whom he lived until her death some thirteen years later, has been abused by many biographers because she was the painters mistress.



He has left to the world some 500 or 600 pictures that are admitted to be genuine, together with the etchings and drawings to which reference has been made. He is to be seen in many galleries in the Old World and the New, for he painted his own portrait more than a score of times. So Rembrandt Van Ryn has been raised in our days to the pinnacle of fame which is his by right; the festival of his tercentenary was acknowledged by the whole civilised world as the natural utterance of joy and pride of our small country in being able to count among its children the great Rembrandt Van Ryn.

					

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Business - Career','Career'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 9///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img9.jpg" ;

$post_meta = array(

				   

				   "templ_seo_page_title" =>'How to Resign to Your Job Gracefully',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'How to Resign to Your Job Gracefully',

					"post_content" =>	'In 2006 the Turner Prize gained its first ever female winner. The artist who achieved this feat hails from Germany and is called is Tomma Abts. In order to carry off the Turner Prize - in the final, Tomma had to overcome three notable artists .



In no particular order of importance these were - sculptress Rebecca Warren who was the fancied hot favourite with many bookies, "billboard artist" Mark Titchner - and finally film maker Phil Collins...(No not him of Genesis fame!).



When the judges cast their votes however it was Tomma Abts who came out on top. She won twenty five thousand british pounds and of course the Turner Prize itself. I am sure the money will come in handy - however its the exposure that Tomma will get from winning thats the really important thing here.



What does Tomma Abts do? Well she actually paints abstract art; usually in oils or acrylics. - something of a novelty for the Turner Prize - some would say! Tomma Abts was originally selected for her solo art exhibitions at Kunsthalle Basel, Switzerland, and Greengrassi, London.



<ol>

	<li>Tomma Abts has been praised by no less than the Tate Gallery who describes her canvases as "intimate" and "compelling" . </li>

	<li>They also comment on Tommas "consistent" and even "rigorous" method of painting. </li>

	<li>In addition the Tate states that Tomma Abts "enriches the language of abstract art" .</li>

	<li>With such praise heaped upon her head its no surprise to me that she won the prize. </li>

	<li>However I actually feel that Tommas abstract artwork isnt "knock out" but it definitely is OK.</li>

</ol>



The images or paintings of Tomma Abts are created by the repetiton of various geometrical shapes on a base of rich colour. Personally - I dont think that Tommas approach to painting is particularly original. However I have to admit that while not being "knock out" I find some of Tommas images pretty compelling and touching. I have to say that this does surprise me.



48 x 38 cms - exactly. These are the dimensions of every Tomma Abts painting. Im not sure quite why Tomma selected these dimensions. Obviously she finds them appealing and I suppose they make for a very compact painting.



When creating titles for her paintings apparently Tomma simply plucks one from a dictionary of German first names! Titles like "Veeke" for example were created in this way. In my view this is surely only slightly more interesting than numbering each picture!



All in all I think that Tomma Abts creates abstract art that is pretty accessible to the public at large. This is something that perhaps could not be said about the artwork of previous Turner Prize winners! I base my opinion of course on Tommas prize winning paintings. I would go further and state that I cannot conceive of a Tomma Abts creation offending anyone - even slightly.



In the end its just my personal opinion but I do believe that its entirely posible that Tomma Abts will go on to become a household name - within her own lifetime...Of course she could also disappear without trace from the media - and our minds in the blink of an eye, for precisely the same reasons.				

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Business - Career','Career'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 10///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img10.jpg" ;

$post_meta = array(

				   "templ_seo_page_title" =>'International Standards Overview',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'International Standards Overview',

					"post_content" =>	'Islamic Calligraphy has arguably become the most reverenced form of Islamic art. It provides a link between the languages of the Muslims with the religion of Islam. The Muslim calligraphists have great contributions in taking this Islamic art to this zenith. The holy book of Islam, Al-Quran, has played an important role in the development and evolution of the Arabic language, and by extension, calligraphy in the Arabic alphabet. The famous Islamic artists have created Arabic calligraphy of supreme quality. Till today, The chief sources for Islamic calligraphy are the proverbs and complete passages from the Holy Quran. In modern times, the supply of Islamic calligraphy has also become a flourishing Islamic art business.

					

Islamic calligraphy is a visible expression of the highest art of all for the muslim. It is the art of the spiritual world. Calligraphy literally means writing beautifully and ornamentally. Islamic calligraphy is the art of writing, and by extension, of bookmaking. This art has most often employed the Arabic script, throughout many languages. Since Arabic calligraphy was the primary means for the preservation of the Quran, Calligraphy is especially revered among Islamic arts. The work of the famous muslim calligraphers were collected and greatly appreciated throughout Islamic history. Consideration of figurative art as idolatrous led to calligraphy and abstract figures becoming the main methods of artistic expression in Islamic cultures. Contemporary muslim calligraphers are also producing the Islamic calligraphy of high artistic quality.



<h3>Calligraphic scripts</h3>

<ol>

	<li>The Kufic script is the first of those calligraphic scripts to gain popularit. </li>

	<li>It was angular, made of square and short horizontal strokes, long verticals, and bold, compact circles. </li>

	<li>For three centuries, this script had been mainly used to copy the Quran. </li>

	<li>The cursive Naskh script was more often used for casual writing. </li>

	<li>This script had rounder letters and thin lines. </li>

	<li>It would come to be preferred to Kufic for copying the Quran as techniques for writing in this style were refined. </li>

	<li>Almost all printed material in Arabic is in Naskh. </li>

	<li>The Thuluth would take on the ornamental role formerly associated with the Kufic script in the 13th century. </li>

	<li>Thuluth is usually written in ample curves as it has a strong cursive aspect. </li>

	<li>The Persians took to using Arabic script for their own language, Persian after their conversion to Islam. </li>

	<li>The Taliq and Nastaliq styles were contributed to Arabic calligraphy by the Persians. </li>

	<li>Nastaliq style is extremely cursive, with exaggeratedly long horizontal strokes. </li>

	<li>The Diwani script is a cursive style of Arabic calligraphy. </li>

	<li>It was developed during the reign of the early Ottoman Turks (16th and early 17th centuries). </li>

	<li>This outstanding Diwani script was both decorative and communicative. </li>

	<li>Finally, Riqa is the most commonly used script for everyday use. </li>

	<li>It is simple and easy to write. </li>

	<li>Its movements are small.</li>

	<li>In China, a calligraphic form called Sini has been developed. </li>

	<li>This form has evident influences from Chinese calligraphy. </li>

	<li>Hajji Noor Deen Mi Guangjiang is a famous modern calligrapher in this tradition.</li>

</ol>

 

<h3>Calligrams<h3>

The most Islamic of arts in the Muslim world, has also its figurative sides. The muslim calligraphers have produced wonderful anthropomorphic figures by interweaving written words, made from an "Allah" , a "Muhammad" , a "Bismillah" , etc., or using micrography. These include , (Ali, the Ideal Human of mystics, a praying man, a face), (Duldul, horse of Ali, horse (Alis Duldul), fish, stork or other bird (the quranic Hudhud) and unanimated representations (a sword (Dhu al-Fiqar) and a mosque. Calligrams are related to Muslim mysticism and popular with many leading calligraphers in Turkey, Persia and India from the 17th century onward.



<h3>Pakistani Islamic Calligraphy</h3>

Pakistan has produced Islamic calligraphist of international recognition. Sadeqain is on of these international fame Islamic calligraphist. He was an untraditional and self-made, self-taught painter and calligrapher. He did a lot of work on Quranic calligraphy. Many other contemporary Pakistani calligraphists like Gul Gee have created great contemporary Islamic calligraphy. These days, Islamic calligraphies of Tufail and Uzma Tufail are getting very much popular both in Pakistan and all over the world.



<h3>Islamic Calligrahpy as an Islamic Gift</h3>

The Muslims love to adore their homes, offices and places of their work with the Islamic calligraphy. The Islamic calligraphies especially the verses from the Holy Quran and the verses from the sayings of the Holy Prophet are considered to be very sacred to muslims. Islamic calligraphy indeed make the perfect gift for a muslim for any special occasion. A muslim can send an Islamic gift of Islamic calligraphy to congratulate his relative or friend on his new home or new office or on his birthday or wedding ceremony or on Eid Festival.



It is great news for the muslims living all over the world to get the Islamic paintings and Islamic calligraphy of their own choice. Please visit our website at www.paintingsgifts4u.com and click the section of the Islamic paintings. You can get Islamic Calligraphy of your choice just by selecting the Item number of the Islamic Painting or by sending the Holy verse of your choice. We also supply Islamic paintings and Islamic Calligraphy from Pakistan on wholesale basis at very best prices. We are supplying cheap Islamic paintings and cheap Islamic calligraphies with high quality. 

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Business - Career','Career'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 1///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img1.jpg" ;

$post_meta = array(

				   "tl_dummy_content" => '1',

				   "templ_seo_page_title" =>'Market Feasibility',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Market Feasibility',

					"post_content" =>	'Fear is part of the fundamental core of human existence, as connected to the basic functions of survival and the psyche as the survival instinct or the need to mate. Fear and anxiety, therefore, are among the staples of any genre that deems itself fit to entertain the masses, an art form to be mastered in the hands of a true artiste. Fear, dread, and anxiety are all integral components of any successful horror story, for example, but not everyone who writes horror manages to get the mix of the important elements - -- pacing, plot, and characterization - -- all of which must be just right to create a classic that will frighten generations long after the first copy was printed. There are a few that manage to accomplish the difficult feat of being eternal in their horror and long-lasting in their ability to turn anxiety into outright terror.

					

Edgar Allan Poe, author of "Annabel Lee" and "The Fall of the House of Usher" , is easily recognized as one of the foremost masters of horror and the macabre. His works have inspired terror and anxiety in many individuals, primarily through the use of heavy psychological tones, as opposed to the gore and blood themes used and abused by writers of his time. Poes collected works easily counts as some of the most frightening material ever written, especially now, in an age where horror movies are relegated to two hours of bloodshed and senseless violence, lacking any true horror and relying solely on shock value to appear "scary." Poe also stands out as being among the few who can make even the most mundane things seem utterly terrifying, a feat emulated by Stephen King and several Japanese horror authors, but never truly duplicated.



In a completely different vein of horror from his predecessors, and arguably creating a sub-genre of horror through his works, H. P. Lovecraft also stands out. His works, while lacking in humanity, are difficult to see as anything but terrifying, particularly because of the apparent lack of humanity in them. In contrast to writers of previous generations, Lovecraft focused more on the truly monstrous, ignoring the human element that most horror writers tended to insert into their works since the days of the Gothic era. His stories were littered with monsters that knew neither morality nor mercy, seeing humanity as insignificant insects and, in Lovecrafts malignant world of ancient races and Elder Gods, humanity was insignificant. He also brought back something from the Gothic horror era, showing his readers that knowledge, even just a little knowledge, can lead to the most terrifying of discoveries. This is perhaps best exemplified by the so-called "Cthulhu Mythos," a collection of stories that centered around Lovecrafts anti-mythological beings.



<h3>Frankenstein</h3>

<ol>

	<li>Among the most enduring horror classics in the world is that of Shelleys "Frankenstein," which combines the elements of horror with the intrinsic questions that plagued morality and philosophy at the time. </li>

	<li>In some ways, the story is one that puts a new spin on the old ghost story, in that the "ghost" is inevitably caused by the actions of mortal men who meddled in things they were not meant to. </li>

	<li>The story, aside from being a genuine tale of terror, also took on the role of a lesson in morality and the limits to just how far medical science could go.</li>

	<li>Prolonging life is one thing, but bringing back the dead is another thing entirely, which is one of the subtle messages of the novel.</li>

	<li>The underlying question of whether or not Frankensteins creature is the monster, or if it is Frankenstein himself, also contributes to making the story a memorable, chilling tale.</li>

</ol> 



However, very few stories can truly stand up against the pure terror and the subtle anxiety and dread caused by Bram Stokers infamous novel, "Dracula." The novel is a hallmark of the Gothic horror era, presenting a villain of potentially epic scope in the guise of a remarkable gentleman and nobleman. It deviated from other vampire stories of the time in that the vampire, Dracula, was not monstrous in appearance. He looked every inch a master and nobleman, establishing the "lord of the night" archetype that would be a stock image of vampire characters in literature for centuries to come. It also had all the elements necessary to both frighten readers and keep them coming back for more, marking it as the most enduring horror novel in history.



',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Business - Career','Management'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 2///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img2.jpg" ;

$post_meta = array(

				   "tl_dummy_content" => '1',

				   "templ_seo_page_title" =>'The Advantages and Disadvantages of Ecommerce',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'The Advantages and Disadvantages of Ecommerce',

					"post_content" =>	'There are great deals of important factors that go into getting a tattoo, including where your tattoo belongs on your body. Different tattoos have different story and importance behind it. Eagle tattoos are one of them that reflect strength and are the common choices for men and women who serve as police officers, firefighters, soldiers, or other service members. Emphasizing articulates such as freedom, strength, and liberty are popular choices added to banners or underneath a tattoo of an eagle particularly if the tattoo is done as a memorial or tribute to someone to make the whole image impressive.

					

Eagles are counted among the birds of strength with strong talon that soars high in the sky and possess keen eyesight. The images of eagles hold an important position in history also. They appeared in various emblems of the past history in many different lands and their importance have been mentioned in different historical events of the past. For instance in Native American cultures, the free-spirited eagle are deeply profoundly honored and their feathers were also given importance. They were often given as a sign of pride, security or friendship. Even in ancient Greece eagle was worshiped as it was thought to have some association with the god Sun. You can also find the name of the eagle has been mentioned in the Norse mythology. It had some association with the god Odin, who represented wisdom.



<h3>Feature</h3>

<ol>

	<li>Eagle tattoos are unique in themselves and it can be also done in many different creative ways and just about anywhere on the body but still the most common area for this type of tattoo is the upper arm, followed by the shoulders, and the upper and lower back areas.</li>

	<li>Eagle tattoos whether it is with spread wings or roosting position are really eye-catching.</li>

	<li>The most important feature of eagle tattoo is its feather. </li>

	<li>So if the tattoo is done on a large area with spread wings where every details of the wing are clearly visible provides the eagle tattoo with a realistic appearance. </li>

	<li>The back is a great location for eagle tattoo with their wings fully spread as if in flight. </li>

	<li>You can also ink your back with another popular swooping pose of an eagle. </li>

	<li>This swooping poses of the eagle targeting its prey with sharp talons is really mind blowing, and of course the internet and many tattoo shops are full of images of the majestic eagle in varying poses.</li>

</ol> 



Small eagle tattoos featuring only the head of the bird can be inked on the leg or armbands, or can be incorporated into another design. There are many tattoo shops and websites that will provide you with varying poses of eagle.



',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Business - Career','Management'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 3///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img3.jpg" ;

$post_meta = array(

				   

				   "templ_seo_page_title" =>'Considerations when Selling A Business',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Considerations when Selling A Business',

					"post_content" =>	'Calligraphy and painting were two of the most prized art forms in antediluvian China. Calligraphy was thought to be the highest and purest form of painting. The annals of painting in China dates back to the 2nd century BCE. In the earliest era, painting and writing were made out on silk, until paper was subsequently developed during the 1st century CE.

					

Chinese art, and in particular, Chinese painting is greatly treasured around the globe. Chinese painting can be retraced to as far back as six thousand years ago in the Neolithic Age when the Chinese have started using brushes in their paintings. Chinese art dates back even sooner than that.



According to subject matter, Chinese paintings can be classified as landscapes, character paintings and flower-and-bird paintings. In traditional Chinese painting, Chinese landscape painting embodies a major category, depicting nature, especially mountains and bodies of water. Landscapes have customarily been the choice of the Chinese because they manifest the poetry characteristic in nature. Accordingly, many esteemed paintings are landscapes.



The most popularly known form of Chinese painting is "Water-ink" painting, where water-ink is the medium. Some of the basic things required for the Chinese painting include: paper, brush, ink or ink stick, ink stone, and color.



<ol>

	<li>Brush: The Chinese brush is a mandatory tool for Chinese painting. The brush should be sturdy and pliable. Two types of brushes are used. The more delicate brush is created from white sheep hair. This brush should be soaked first, and then dried to prevent curling. The second one is made from fox or deer sable fibers, which are very durable, and is inclined to paint better. The procedure the brush is used depends on the varied features of brush strokes one wants to obtain, such as weight, lightness, gracefulness, ruggedness, firmness, and fullness. Various forms of shades are applied to impart space, texture, or depth.</li>

	<li>Ink Stick: There are three types of Ink Stick: resin soot, lacquer soot, and tung-oil soot. Of the three, tung-oil soot is the most commonly used. Otherwise, Chinese ink is best if ink stick or ink stone are ineffectual.</li>

	<li>Paper: The most generally used paper is Xuan paper, which is fabricated of sandalwood bark. This is exceptionally water retentive, so the color or ink disperses the moment the brush stroke is put down. The second most well-known is Mian paper.</li>

	<li>Color: The most former Chinese paintings used Mo, a type of natural ink, to produce monochromatic representations of nature or day-to-day life. Made of pine soot, mo is combined with water to get unique shades for conveying appropriate layers or color in a painting.</li>

</ol> 



Chinese painting is called shui-mo-hua. Shui-mo is the combination of shui (water) and mo. There are two styles of Chinese painting. They are gong-bi or detailed style, and xie-yi or freehand style. The second is the most common, not only since the objects are depicted with just a few strokes, but likewise because shapes and sprites are drawn by uncomplicated curves and natural ink. Many ancient poets and students used xie-yi paintings to give tongue to their religious anguish.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Business - Career','Management'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 4///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img4.jpg" ;

$post_meta = array(

				   

				   "templ_seo_page_title" =>'Business Voice over IP Phone Service',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Business Voice over IP Phone Service',

					"post_content" =>	'Business VoIP systems employ session control protocols to control the set-up and tear-down of calls as well as audio codes which encode speech allowing transmission over an IP network as digital audio via an audio stream.

					

Famous artists paintings have earned world wide recognition in different periods of times. Famous painters paintings truly an asset for fine arts. There have been a great number of famous painters in different parts of the world in different periods of times. These include Marc Chagall, Salvador Dali, Leonardo Da Vinci, Paul Klee, Henri Matisse,Claude Monet, Pablo Picasso,Pierre Auguste Renoir,Henri Rousseau,Henri de Toulouse-Lautrec,Vincent Van Gogh,Andy Warhol.



<h3>Yo Picasso</h3>

<ol>

	<li>Famous abstract paintings present the fine art at the highest level. </li>

	<li>Famous abstract artists have been gratly greatly appreciated for their famous abstract oil paintings. </li>

	<li>Picasso is one of the most famous abstract painter. Picasso became very famous because he work in multiple styles.</li>

	<li>Famous paintings of Picasso are Guernica ,Three Musicians,The Three Dancers and Self Portrait: Yo Picasso.</li>

	<li>Picasso famous paintings have earned him worldwide recognition.</li>

</ol> 



Many famous flower paintings have been created by the outstanding flower painters. Famous Floral Oil Paintings are in wide range of styles. Famous floral fine art paintings are exquisite. Famous landscape paintings are the master pieces of fine art. Famous Landscape painters have created a great number of famous landscape paintings. Famous Landscape art has greatly been admired in all the periods of times. Famous contemporary landscape painters have successfully attained the mastery in the landscape art.



Still life fruit paintings and fruit bowl paintings make the famous fruit paintings. The highly skilled artists have also created the most famous paintings of rotting fruit. The modern famous artists are successful creating the masterpieces of still fruit oil paintings and oil pastel fruit paintings.



Famous still Life art depicts drinking glasses, foodstuffs, pipes, books and so on. Famous Still life paintings are indeed the master pieces of fine art. Woman portrait paintings make the famous portrait paintings. There are also famous portrait paintings of men. Famous portrait paintings of Oscar dela hova have been greatly appreciated. Japanese women portrait paintings are very popular in Japanese culture. In addition to women portrait paintings and portrait paintings of men, there are many famous pet portrait paintings and famous portrait paintings of houses and famous paintings of sports cars.



Famous Islamic paintings of holy places and the famous islamic calligraphy of the holy verses have been truly represent the muslim art. Famous muslim artists have developed mastery of Islamic art calligraphy. The famous Islamic paintings include the paintings of the Holy places such as Khana kaaba, Masjid-e-Nabvi and other famous mosques and shrines. Famous Islamic art is fascinating and has always been appreciated. The famous Islamic art galleries have produced a great number of famous muslim painters and famous muslim calligraphist.



Famous modern galleries have produced the famous contemporary artists who have created many famous contemporary paintings. Famous oil paintings reproduction are also created in these famous galleries.



In addition to above styles, there are many famous paintings of other subjects. These include famous war paintings, famous paintings of jesus, famous figure paintings, religious famous paintings, famous paintings romantic, famous battle paintings, famous military paintings, famous sunset paintings, famous paintings of women, famous paintings of love, famous water paintings, famous acrylic paintings, famous paintings of buildings, famous dance paintings, famous dragon paintings, famous black paintings, famous paintings in the fall, famous paintings of cats, famous paintings of children, famous paintings of friends, famous paintings of christinaity, famous paintings of jesus and famous paintings of humanity. There are also famous native American paintings and famous Spanish paintings.



',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Business - Career','Management'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 5///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img5.jpg" ;

$post_meta = array(

				   

				   "templ_seo_page_title" =>'Tips To Select A CEO Peer Group',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Tips To Select A CEO Peer Group',

					"post_content" =>	'A good CEO peer group can work wonders and take your business to a new level whereas a bad choice can be a waste of time. Read the article to know about some tips which can help you find the right CEO group for yourself of the most famous cases of art theft in the history.



<h3>The First Theft:</h3>

The first documented case of art theft was in 1473, when two panels of altarpiece of the Last Judgment by the Dutch painter Hans Memling were stolen. While the triptych was being transported by ship from the Netherlands to Florence, the ship was attacked by pirates who took it to the Gdansk cathedral in Poland. Nowadays, the piece is shown at the National Museum in Gdansk where it was recently moved from the Basilica of the Assumption. The Most Famous Theft:

The most famous story of art theft involves one of the most famous paintings in the world and one of the most famous artists in history as a suspect. In the night of August 21, 1911, the Mona Lisa was stolen out of the Louver. Soon after, Pablo Picasso was arrested and questioned by the police, but was released quickly.



It took about two years until the mystery was solved by the Parisian police. It turned out that the 30x21 inch painting was taken by one of the museum employees by the name of Vincenzo Peruggia, who simply carried it hidden under his coat. Nevertheless, Peruggia did not work alone. The crime was carefully conducted by a notorious con man, Eduardo de Valfierno, who was sent by an art faker who intended to make copies and sell them as if they were the original painting.



While Yves Chaudron, the art faker, was busy creating copies for the famous masterpiece, Mona Lisa was still hidden at Peruggias apartment. After two years in which Peruggia did not hear from Chaudron, he tried to make the best out of his stolen good. Eventually, Peruggia was caught by the police while trying to sell the painting to an art dealer from Florence, Italy. The Mona Lisa was returned to the Louver in 1913.



<h3>The Biggest Theft in the USA:</h3>

The biggest art theft in United States took place at the Isabella Stewart Gardner Museum. On the night of March 18, 1990, a group of thieves wearing police uniforms broke into the museum and took thirteen paintings whose collective value was estimated at around 300 million dollars. The thieves took two paintings and one print by Rembrandt, and works of Vermeer, Manet, Degas, Govaert Flinck, as well as a French and a Chinese artifact.



As of yet, none of the paintings have been found and the case is still unsolved. According to recent rumors, the FBI are investigating the possibility that the Boston Mob along with French art dealers are connected to the crime.



<h3>The Scream:</h3>

The painting by Edvard Munchs, The Scream, is probably the most sought after painting by art thieves in history. It has been stolen twice and was only recently recovered. In 1994, during the Winter Olympics in Lillehammer, Norway, The Scream was stolen from an Oslo gallery by two thieves who broke through an open window, set off the alarm and left a note saying: thanks for the poor security.



Three months later, the holders of the painting approached the Norwegian Government with an offer: 1 million dollars ransom for Edvard Munchs The Scream. The Government turned down the offer, but the Norwegian police collaborated with the British Police and the Getty Museum to organize a sting operation that brought back the painting to where it belongs.



Ten years later, The Scream was stolen again from the Munch Museum. This time, the robbers used a gun and took another of Munchs painting with them. While Museum officials waiting for the thieves to request ransom money, rumors claimed that both paintings were burned to conceal evidence. Eventually, the Norwegian police discovered the two paintings on August 31, 2006 but the facts on how they were recovered are not known yet.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Business - Career','Management'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 6///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img6.jpg" ;

$post_meta = array(

				   

				   "templ_seo_page_title" =>'Find more about CRM training and CRM comparison',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Find more about CRM training and CRM comparison',

					"post_content" =>	'A perfect Customer Relationship Management software package will work for every company in every condition.

					

<h3>What kind of art do you like?</h3>

There are many opportunities to browse art within your community at local exhibitions, art fairs and galleries. Even small towns usually have a not-for-profit gallery space, or cafes and restaurant that exhibit local artists. In larger cities, galleries often get together for monthly or periodic "gallery nights" where all the galleries hold open house receptions on the same evening. Its a great way to see a lot of art in a short time.



Today the internet provides the largest variety and depth of fine art available worldwide. You can visit museum websites and see master works from ages past, check out online galleries for group shows, and visit hundreds of individual artists websites. One advantage of using the internet is that you can search for the specific kind of art you are interested in, whether its photography, impressionism, bronze sculpture, or abstract painting. And when you find one art site, youll usually find links to many, many more.



<h3>Should the art fit the room or the room fit the art?</h3>

If you feel strongly about a particular work of art, you should buy the art you love and then find a place to put it. But you may find that when you get the art home and place it on a wall or pedestal, it doesnt work with its surroundings. By not "working," I mean the art looks out of place in the room. Placing art in the wrong surroundings takes away from its beauty and impact.



What should you do if you bring a painting home and it clashes with its environment? First, hang the painting in various places in your home, trying it out on different walls. It may look great in a place you hadnt planned on hanging it. If you cant find a place where the art looks its best, you may need to make some changes in the room, such as moving furniture or taking down patterned wallpaper and repainting in a neutral color. The changes will be worth making in order to enjoy the art you love.



Sometimes the right lighting is the key to showing art at its best. You may find that placing a picture light above a painting or directing track lighting on it is all the art needs to exhibit its brilliance. If you place a work of art in direct sunlight, however, be sure it wont be affected by the ultraviolet light. Pigments such as watercolor, pencil and pastel are especially prone to fading. Be sure to frame delicate art under UV protected glass or acrylic.



<h3>How to pick art to fit the room.</h3>

Size and color are the two major criteria for selecting art to fit its surroundings. For any particular space, art that is too large will overwhelm, and art that is too small will be lost and look out of proportion. The bolder the art, the more room it needs to breathe.



As a rule, paintings should be hung so that the center of the painting is at eye level. Sculpture may sit on the floor, a table, or pedestal, depending on the design. Rules should be considered guidelines only, however, so feel free to experiment.



When selecting a painting to match color, select one or two of the boldest colors in your room and look for art that has those colors in it. Youre not looking for an exact match here. Picking up one or two of the same colors will send a message that the painting belongs in this environment.



Another possibility for dealing with color is to choose art with muted colors, black-and-white art, or art that is framed in a way that mutes its color impact in the room. A wide light-colored mat and neutral frame create a protected environment for the art within.



Style is another consideration when selecting art to fit a room. If your house is filled with antiques, for example, youll want to use antique-style frames on the paintings you hang there. If you have contemporary furniture in large rooms with high ceilings, youll want to hang large contemporary paintings.



<h3>How to create an art-friendly room.</h3>

Think about it. When you walk into a gallery or museum, what do they all have in common? White walls and lots of light. If a wall is wall-papered or painted a color other than white, it limits the choices for hanging art that will look good on it. If a room is dark, the art will not show to its best advantage.



If you want to make art the center of attraction, play down the other elements of the room like window coverings, carpeting, wall coverings, and even furniture. A room crowded with other colors, textures and objects will take the spotlight away from the art. Follow the principle that less is more. Keep it spare and let the art star. Then relax and enjoy it.



Selecting and displaying art is an art in itself. Experiment to learn what pleases you and what doesnt. Youll be well-rewarded for the time you invest by finding more satisfaction both in the art and in your home.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Business - Career','Management'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 7///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img7.jpg" ;

$post_meta = array(

				   

				   "templ_seo_page_title" =>'How to Keep Your Clients Happy',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'How to Keep Your Clients Happy',

					"post_content" =>	'Contemporary paintings are an exquisite style of paintings. Contemporary art paintings are the true representatives of the modern art. Contemporary artists are creating the contemporary oil paintings of the high quality. A great number of contemporary oil paintings are available in the contemporary art gallery. Contemporary art is of great artistic importance. Contemporary abstract paintings make the most of contemporary art. Still life Contemporary paintings are also very much appreciated.

					

There are many museums of modern paintings all over the world. The modern paintings of the modern artists are exhibited in these museums. These museums of modern art have been successful in flourishing the contemporary art. Modern artists exhibit their modern paintings creations in the museum of contemporary art. Museum of modern art New york, Contemporary art museum Houston, museum of modern art paris, art museum of Fort worth are the famous museums of contemporary art. Contemporary art work can be seen in these modern art museums.These museums exhibit the popular contemporary paintings of the famous modern artists.



<h3>Modern Abstract Art</h3>

<ol>

	<li>There are great number of painters of modern life. </li>

	<li>They have created the modern abstract art on modern themes. </li>

	<li>Modern artists paint colours in an artistic way. </li>

	<li>Their contemporary oil paintings are pure form of fine arts. </li>

	<li>History of modern art is full of great contemporary paintings from famous modern artists. </li>

	<li>19th century paintings and 20th century paintings are worth seeing. </li>

	<li>Modern art movements have been in progress in recent times. </li>

	<li>There are many contemporary art centers. </li>

	<li>Contemporary art center Cincinnati and Contemporary art center of Virginia are the famous modern art center. </li>

	<li>St.Louis contemporary art has been very much appreciated. Contemporary Christian artists</li>

<ol>



Modern art is also available for sale. Modern and contemporary art can be purchased from the modern art gallery. These contemporary art galleries offer the Original modern paintings of the famous contemporary artist. The reproductions of the famous contemporary paintings can also be purchased from these modern art galleries. These galleries also offer cheap price modern oil paintings.



Good News for lovers of modern art ! You can get Contemporary and Modern Oil Paintings of your own choice just by selecting the Model number of the Landscape Oil Painting or by sending the Photo of your required image. Our highly skilled modern artists can reproduce the contemporary paintings as per your given photo. Just click the Link of Contemporary paintings on our website (www.paintingsgifts4u.com) . For more details, Please contact us at : info@paintingsgifts4u.com.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Business - Career','Management'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 8///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img8.jpg" ;

$post_meta = array(

				   

				   "templ_seo_page_title" =>'Ethics in the Workplace',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Ethics in the Workplace',

					"post_content" =>	'While the world pays respectful tribute to Rembrandt Van Ryn the artist, it has been compelled to wait until comparatively recent years for some small measure of reliable information concerning Rembrandt Van Ryn the man. Rembrandt Van Ryn was born in the pleasant city of Leyden, but it is not easy to name the precise year. Somewhere between 1604 and 1607 he started his troubled journey through life, and of his childhood the records are scanty. Doubtless, his youthful imagination was stirred by the sights of the city, the barges moving slowly along the canals, the windmills that were never at rest, the changing chiaroscuro of the flooded, dyke-seamed land. Perhaps he saw these things with the large eye of the artist, for he could not have turned to any point of the compass without finding a picture lying ready for treatment.

	

His family soon knew that he had the makings of an artist and, in 1620, when he could hardly have been more than sixteen, and may have been considerably less, he left Leyden University for the studio of a second-rate painter called Jan van Swanenburch. We have no authentic record of his progress in the studio, but it must have been rapid. He must have made friends, painted pictures, and attracted attention. At the end of three years he went to Lastmans studio in Amsterdam, returning thence to Leyden, where he took Gerard Dou as a pupil. A several years later, it is not easy to settle these dates on a satisfactory basis, he went to Amsterdam, and established himself there, because the Dutch capital was very wealthy and held many patrons of the arts, in spite of the seemingly endless war that Holland was waging with Spain.



His art remained true and sincere, he declined to make the smallest concession to what silly sitters called their taste, but he did not really know what to do with the money and commissions that flowed in upon him so freely. The best use he made of changing circumstances was to become engaged to Saskia van Uylenborch, the cousin of his great friend Hendrick van Uylenborch, the art dealer of Amsterdam. Saskia, who was destined to live for centuries, through the genius of her husband, seems to have been born in 1612, and to have become engaged to Rembrandt Van Ryn when she was twenty. The engagement followed very closely upon the patronage of Rembrandt Van Ryn by Prince Frederic Henry, the Stadtholder, who instructed the artist to paint three pictures.



<ol>

	<li>Saskia is enshrined in many pictures. </li>

	<li>She is seen first as a young girl, then as a woman. </li>

	<li>As a bride, in the picture now at Dresden, she sits upon her husbands knee, while he raises a big glass with his outstretched arm. </li>

	<li>Her expression here is rather shy, as if she deprecated the situation and realised that it might be misconstrued. </li>

	<li>This picture gave offence to Rembrandt Van Ryns critics, but some portraits of Saskia remained to be painted. </li>

	<li>She would seem to have aged rapidly, for after marriage her days were not long in the land. </li>

	<li>She was only thirty when she died, and looked much older.</li>

</ol>



In 1638 we find Rembrandt Van Ryn taking an action against one Albert van Loo, who had dared to call Saskia extravagant. It was, of course, still more extravagant of Rembrandt Van Ryn to waste his money on lawyers on account of a case he could not hope to win, but this thought does not seem to have troubled him. He did not reflect that it would set the gossips talking more cruelly than ever. Still full of enthusiasm for life and art, he was equally full of affection for Saskia, whose hope of raising children seemed doomed to disappointment, for in addition to losing the little Rombertus, two daughters, each named Cornelia, had died soon after birth. In 1640 Rembrandt Van Ryns mother died. Her picture remains on record with that of her husband, painted ten years before, and even the biographers of the artist do not suggest that Rembrandt Van Ryn was anything but a good son. A year later the well-beloved Saskia gave birth to the one child who survived the early years, the boy Titus. Then her health failed, and in 1642 she died, after eight years of married life that would seem to have been happy. In this year Rembrandt Van Ryn painted the famous "Night Watch," a picture representing the company of Francis Banning Cocq, and incidentally a day scene in spite of its popular name. The work succeeded in arousing a storm of indignation, for every sitter wanted to have equal prominence in the canvas.



It may be said that after Saskias death, and the exhibition of this fine work, Rembrandt Van Ryns pleasant years came to an end. He was then somewhere between thirty-six and thirty-eight years old, he had made his mark, and enjoyed a very large measure of recognition, but henceforward, his career was destined to be a very troubled one, full of disappointment, pain, and care. Perhaps it would have been no bad thing for him if he could have gone with Saskia into the outer darkness. The world would have been poorer, but the man himself would have been spared many years that may be even the devoted labours of his studio could not redeem.



Between 1642, when Saskia died, and 1649, it is not easy to follow the progress of his life; we can only state with certainty that his difficulties increased almost as quickly as his work ripened. His connection with Hendrickje Stoffels would seem to have started about 1649, and this woman with whom he lived until her death some thirteen years later, has been abused by many biographers because she was the painters mistress.



He has left to the world some 500 or 600 pictures that are admitted to be genuine, together with the etchings and drawings to which reference has been made. He is to be seen in many galleries in the Old World and the New, for he painted his own portrait more than a score of times. So Rembrandt Van Ryn has been raised in our days to the pinnacle of fame which is his by right; the festival of his tercentenary was acknowledged by the whole civilised world as the natural utterance of joy and pride of our small country in being able to count among its children the great Rembrandt Van Ryn.

					

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Business - Career','Management'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 9///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img9.jpg" ;

$post_meta = array(

				   

				   "templ_seo_page_title" =>'About ITIL service management',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'About ITIL service management',

					"post_content" =>	'In 2006 the Turner Prize gained its first ever female winner. The artist who achieved this feat hails from Germany and is called is Tomma Abts. In order to carry off the Turner Prize - in the final, Tomma had to overcome three notable artists .



In no particular order of importance these were - sculptress Rebecca Warren who was the fancied hot favourite with many bookies, "billboard artist" Mark Titchner - and finally film maker Phil Collins...(No not him of Genesis fame!).



When the judges cast their votes however it was Tomma Abts who came out on top. She won twenty five thousand british pounds and of course the Turner Prize itself. I am sure the money will come in handy - however its the exposure that Tomma will get from winning thats the really important thing here.



What does Tomma Abts do? Well she actually paints abstract art; usually in oils or acrylics. - something of a novelty for the Turner Prize - some would say! Tomma Abts was originally selected for her solo art exhibitions at Kunsthalle Basel, Switzerland, and Greengrassi, London.



<ol>

	<li>Tomma Abts has been praised by no less than the Tate Gallery who describes her canvases as "intimate" and "compelling" . </li>

	<li>They also comment on Tommas "consistent" and even "rigorous" method of painting. </li>

	<li>In addition the Tate states that Tomma Abts "enriches the language of abstract art" .</li>

	<li>With such praise heaped upon her head its no surprise to me that she won the prize. </li>

	<li>However I actually feel that Tommas abstract artwork isnt "knock out" but it definitely is OK.</li>

</ol>



The images or paintings of Tomma Abts are created by the repetiton of various geometrical shapes on a base of rich colour. Personally - I dont think that Tommas approach to painting is particularly original. However I have to admit that while not being "knock out" I find some of Tommas images pretty compelling and touching. I have to say that this does surprise me.



48 x 38 cms - exactly. These are the dimensions of every Tomma Abts painting. Im not sure quite why Tomma selected these dimensions. Obviously she finds them appealing and I suppose they make for a very compact painting.



When creating titles for her paintings apparently Tomma simply plucks one from a dictionary of German first names! Titles like "Veeke" for example were created in this way. In my view this is surely only slightly more interesting than numbering each picture!



All in all I think that Tomma Abts creates abstract art that is pretty accessible to the public at large. This is something that perhaps could not be said about the artwork of previous Turner Prize winners! I base my opinion of course on Tommas prize winning paintings. I would go further and state that I cannot conceive of a Tomma Abts creation offending anyone - even slightly.



In the end its just my personal opinion but I do believe that its entirely posible that Tomma Abts will go on to become a household name - within her own lifetime...Of course she could also disappear without trace from the media - and our minds in the blink of an eye, for precisely the same reasons.				

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Business - Career','Management'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 10///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img10.jpg" ;

$post_meta = array(

				   "templ_seo_page_title" =>'Buying Mortgage Leads Guide',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Buying Mortgage Leads Guide',

					"post_content" =>	'Islamic Calligraphy has arguably become the most reverenced form of Islamic art. It provides a link between the languages of the Muslims with the religion of Islam. The Muslim calligraphists have great contributions in taking this Islamic art to this zenith. The holy book of Islam, Al-Quran, has played an important role in the development and evolution of the Arabic language, and by extension, calligraphy in the Arabic alphabet. The famous Islamic artists have created Arabic calligraphy of supreme quality. Till today, The chief sources for Islamic calligraphy are the proverbs and complete passages from the Holy Quran. In modern times, the supply of Islamic calligraphy has also become a flourishing Islamic art business.

					

Islamic calligraphy is a visible expression of the highest art of all for the muslim. It is the art of the spiritual world. Calligraphy literally means writing beautifully and ornamentally. Islamic calligraphy is the art of writing, and by extension, of bookmaking. This art has most often employed the Arabic script, throughout many languages. Since Arabic calligraphy was the primary means for the preservation of the Quran, Calligraphy is especially revered among Islamic arts. The work of the famous muslim calligraphers were collected and greatly appreciated throughout Islamic history. Consideration of figurative art as idolatrous led to calligraphy and abstract figures becoming the main methods of artistic expression in Islamic cultures. Contemporary muslim calligraphers are also producing the Islamic calligraphy of high artistic quality.



<h3>Calligraphic scripts</h3>

<ol>

	<li>The Kufic script is the first of those calligraphic scripts to gain popularit. </li>

	<li>It was angular, made of square and short horizontal strokes, long verticals, and bold, compact circles. </li>

	<li>For three centuries, this script had been mainly used to copy the Quran. </li>

	<li>The cursive Naskh script was more often used for casual writing. </li>

	<li>This script had rounder letters and thin lines. </li>

	<li>It would come to be preferred to Kufic for copying the Quran as techniques for writing in this style were refined. </li>

	<li>Almost all printed material in Arabic is in Naskh. </li>

	<li>The Thuluth would take on the ornamental role formerly associated with the Kufic script in the 13th century. </li>

	<li>Thuluth is usually written in ample curves as it has a strong cursive aspect. </li>

	<li>The Persians took to using Arabic script for their own language, Persian after their conversion to Islam. </li>

	<li>The Taliq and Nastaliq styles were contributed to Arabic calligraphy by the Persians. </li>

	<li>Nastaliq style is extremely cursive, with exaggeratedly long horizontal strokes. </li>

	<li>The Diwani script is a cursive style of Arabic calligraphy. </li>

	<li>It was developed during the reign of the early Ottoman Turks (16th and early 17th centuries). </li>

	<li>This outstanding Diwani script was both decorative and communicative. </li>

	<li>Finally, Riqa is the most commonly used script for everyday use. </li>

	<li>It is simple and easy to write. </li>

	<li>Its movements are small.</li>

	<li>In China, a calligraphic form called Sini has been developed. </li>

	<li>This form has evident influences from Chinese calligraphy. </li>

	<li>Hajji Noor Deen Mi Guangjiang is a famous modern calligrapher in this tradition.</li>

</ol>

 

<h3>Calligrams<h3>

The most Islamic of arts in the Muslim world, has also its figurative sides. The muslim calligraphers have produced wonderful anthropomorphic figures by interweaving written words, made from an "Allah" , a "Muhammad" , a "Bismillah" , etc., or using micrography. These include , (Ali, the Ideal Human of mystics, a praying man, a face), (Duldul, horse of Ali, horse (Alis Duldul), fish, stork or other bird (the quranic Hudhud) and unanimated representations (a sword (Dhu al-Fiqar) and a mosque. Calligrams are related to Muslim mysticism and popular with many leading calligraphers in Turkey, Persia and India from the 17th century onward.



<h3>Pakistani Islamic Calligraphy</h3>

Pakistan has produced Islamic calligraphist of international recognition. Sadeqain is on of these international fame Islamic calligraphist. He was an untraditional and self-made, self-taught painter and calligrapher. He did a lot of work on Quranic calligraphy. Many other contemporary Pakistani calligraphists like Gul Gee have created great contemporary Islamic calligraphy. These days, Islamic calligraphies of Tufail and Uzma Tufail are getting very much popular both in Pakistan and all over the world.



<h3>Islamic Calligrahpy as an Islamic Gift</h3>

The Muslims love to adore their homes, offices and places of their work with the Islamic calligraphy. The Islamic calligraphies especially the verses from the Holy Quran and the verses from the sayings of the Holy Prophet are considered to be very sacred to muslims. Islamic calligraphy indeed make the perfect gift for a muslim for any special occasion. A muslim can send an Islamic gift of Islamic calligraphy to congratulate his relative or friend on his new home or new office or on his birthday or wedding ceremony or on Eid Festival.



It is great news for the muslims living all over the world to get the Islamic paintings and Islamic calligraphy of their own choice. Please visit our website at www.paintingsgifts4u.com and click the section of the Islamic paintings. You can get Islamic Calligraphy of your choice just by selecting the Item number of the Islamic Painting or by sending the Holy verse of your choice. We also supply Islamic paintings and Islamic Calligraphy from Pakistan on wholesale basis at very best prices. We are supplying cheap Islamic paintings and cheap Islamic calligraphies with high quality. 

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Business - Career','Management'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 1///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img1.jpg" ;

$post_meta = array(

				   "tl_dummy_content" => '1',

				   "templ_seo_page_title" =>'Building an Effective Email Marketing List',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Building an Effective Email Marketing List',

					"post_content" =>	'Going into business? Then you should consider email marketing campaign. Check this article on how to build and grow an effective email marketing list. 

					

Edgar Allan Poe, author of "Annabel Lee" and "The Fall of the House of Usher" , is easily recognized as one of the foremost masters of horror and the macabre. His works have inspired terror and anxiety in many individuals, primarily through the use of heavy psychological tones, as opposed to the gore and blood themes used and abused by writers of his time. Poes collected works easily counts as some of the most frightening material ever written, especially now, in an age where horror movies are relegated to two hours of bloodshed and senseless violence, lacking any true horror and relying solely on shock value to appear "scary." Poe also stands out as being among the few who can make even the most mundane things seem utterly terrifying, a feat emulated by Stephen King and several Japanese horror authors, but never truly duplicated.



In a completely different vein of horror from his predecessors, and arguably creating a sub-genre of horror through his works, H. P. Lovecraft also stands out. His works, while lacking in humanity, are difficult to see as anything but terrifying, particularly because of the apparent lack of humanity in them. In contrast to writers of previous generations, Lovecraft focused more on the truly monstrous, ignoring the human element that most horror writers tended to insert into their works since the days of the Gothic era. His stories were littered with monsters that knew neither morality nor mercy, seeing humanity as insignificant insects and, in Lovecrafts malignant world of ancient races and Elder Gods, humanity was insignificant. He also brought back something from the Gothic horror era, showing his readers that knowledge, even just a little knowledge, can lead to the most terrifying of discoveries. This is perhaps best exemplified by the so-called "Cthulhu Mythos," a collection of stories that centered around Lovecrafts anti-mythological beings.



<h3>Frankenstein</h3>

<ol>

	<li>Among the most enduring horror classics in the world is that of Shelleys "Frankenstein," which combines the elements of horror with the intrinsic questions that plagued morality and philosophy at the time. </li>

	<li>In some ways, the story is one that puts a new spin on the old ghost story, in that the "ghost" is inevitably caused by the actions of mortal men who meddled in things they were not meant to. </li>

	<li>The story, aside from being a genuine tale of terror, also took on the role of a lesson in morality and the limits to just how far medical science could go.</li>

	<li>Prolonging life is one thing, but bringing back the dead is another thing entirely, which is one of the subtle messages of the novel.</li>

	<li>The underlying question of whether or not Frankensteins creature is the monster, or if it is Frankenstein himself, also contributes to making the story a memorable, chilling tale.</li>

</ol> 



However, very few stories can truly stand up against the pure terror and the subtle anxiety and dread caused by Bram Stokers infamous novel, "Dracula." The novel is a hallmark of the Gothic horror era, presenting a villain of potentially epic scope in the guise of a remarkable gentleman and nobleman. It deviated from other vampire stories of the time in that the vampire, Dracula, was not monstrous in appearance. He looked every inch a master and nobleman, establishing the "lord of the night" archetype that would be a stock image of vampire characters in literature for centuries to come. It also had all the elements necessary to both frighten readers and keep them coming back for more, marking it as the most enduring horror novel in history.



',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Business - Career','Sales - Marketing'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 2///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img2.jpg" ;

$post_meta = array(

				   "tl_dummy_content" => '1',

				   "templ_seo_page_title" =>'Outdoor Vinyl Banners for Promotional Campaign',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Outdoor Vinyl Banners for Promotional Campaign',

					"post_content" =>	'Outdoor Banners for Outdoor Promotional Campaign, Why would the outdoor banners come as the first choice for you when you opt for inexpensive means to advertise your product?

					

Eagles are counted among the birds of strength with strong talon that soars high in the sky and possess keen eyesight. The images of eagles hold an important position in history also. They appeared in various emblems of the past history in many different lands and their importance have been mentioned in different historical events of the past. For instance in Native American cultures, the free-spirited eagle are deeply profoundly honored and their feathers were also given importance. They were often given as a sign of pride, security or friendship. Even in ancient Greece eagle was worshiped as it was thought to have some association with the god Sun. You can also find the name of the eagle has been mentioned in the Norse mythology. It had some association with the god Odin, who represented wisdom.



<h3>Feature</h3>

<ol>

	<li>Eagle tattoos are unique in themselves and it can be also done in many different creative ways and just about anywhere on the body but still the most common area for this type of tattoo is the upper arm, followed by the shoulders, and the upper and lower back areas.</li>

	<li>Eagle tattoos whether it is with spread wings or roosting position are really eye-catching.</li>

	<li>The most important feature of eagle tattoo is its feather. </li>

	<li>So if the tattoo is done on a large area with spread wings where every details of the wing are clearly visible provides the eagle tattoo with a realistic appearance. </li>

	<li>The back is a great location for eagle tattoo with their wings fully spread as if in flight. </li>

	<li>You can also ink your back with another popular swooping pose of an eagle. </li>

	<li>This swooping poses of the eagle targeting its prey with sharp talons is really mind blowing, and of course the internet and many tattoo shops are full of images of the majestic eagle in varying poses.</li>

</ol> 



Small eagle tattoos featuring only the head of the bird can be inked on the leg or armbands, or can be incorporated into another design. There are many tattoo shops and websites that will provide you with varying poses of eagle.



',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Business - Career','Sales - Marketing'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 3///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img3.jpg" ;

$post_meta = array(

				   

				   "templ_seo_page_title" =>'Effective Sales Strategy - Trump Any Competitor Any Time.',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Effective Sales Strategy - Trump Any Competitor Any Time.',

					"post_content" =>	'How would you like to attract your buyers before they&rsquo;re even thinking about buying? Then, once you have their attention, lead them through a logical flow that motivates them to buy,

					

Chinese art, and in particular, Chinese painting is greatly treasured around the globe. Chinese painting can be retraced to as far back as six thousand years ago in the Neolithic Age when the Chinese have started using brushes in their paintings. Chinese art dates back even sooner than that.



According to subject matter, Chinese paintings can be classified as landscapes, character paintings and flower-and-bird paintings. In traditional Chinese painting, Chinese landscape painting embodies a major category, depicting nature, especially mountains and bodies of water. Landscapes have customarily been the choice of the Chinese because they manifest the poetry characteristic in nature. Accordingly, many esteemed paintings are landscapes.



The most popularly known form of Chinese painting is "Water-ink" painting, where water-ink is the medium. Some of the basic things required for the Chinese painting include: paper, brush, ink or ink stick, ink stone, and color.



<ol>

	<li>Brush: The Chinese brush is a mandatory tool for Chinese painting. The brush should be sturdy and pliable. Two types of brushes are used. The more delicate brush is created from white sheep hair. This brush should be soaked first, and then dried to prevent curling. The second one is made from fox or deer sable fibers, which are very durable, and is inclined to paint better. The procedure the brush is used depends on the varied features of brush strokes one wants to obtain, such as weight, lightness, gracefulness, ruggedness, firmness, and fullness. Various forms of shades are applied to impart space, texture, or depth.</li>

	<li>Ink Stick: There are three types of Ink Stick: resin soot, lacquer soot, and tung-oil soot. Of the three, tung-oil soot is the most commonly used. Otherwise, Chinese ink is best if ink stick or ink stone are ineffectual.</li>

	<li>Paper: The most generally used paper is Xuan paper, which is fabricated of sandalwood bark. This is exceptionally water retentive, so the color or ink disperses the moment the brush stroke is put down. The second most well-known is Mian paper.</li>

	<li>Color: The most former Chinese paintings used Mo, a type of natural ink, to produce monochromatic representations of nature or day-to-day life. Made of pine soot, mo is combined with water to get unique shades for conveying appropriate layers or color in a painting.</li>

</ol> 



Chinese painting is called shui-mo-hua. Shui-mo is the combination of shui (water) and mo. There are two styles of Chinese painting. They are gong-bi or detailed style, and xie-yi or freehand style. The second is the most common, not only since the objects are depicted with just a few strokes, but likewise because shapes and sprites are drawn by uncomplicated curves and natural ink. Many ancient poets and students used xie-yi paintings to give tongue to their religious anguish.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Business - Career','Sales - Marketing'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 4///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img4.jpg" ;

$post_meta = array(

				   

				   "templ_seo_page_title" =>'Email Marketing Strategies that Works for Small Business',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Email Marketing Strategies that Works for Small Business',

					"post_content" =>	'Considering email marketing for you small business? Then youre on the right path, here are some list of the best direct marketing strategies for businesses.Business VoIP systems employ session control protocols to control the set-up and tear-down of calls as well as audio codes which encode speech allowing transmission over an IP network as digital audio via an audio stream.

					

Famous artists paintings have earned world wide recognition in different periods of times. Famous painters paintings truly an asset for fine arts. There have been a great number of famous painters in different parts of the world in different periods of times. These include Marc Chagall, Salvador Dali, Leonardo Da Vinci, Paul Klee, Henri Matisse,Claude Monet, Pablo Picasso,Pierre Auguste Renoir,Henri Rousseau,Henri de Toulouse-Lautrec,Vincent Van Gogh,Andy Warhol.



<h3>Yo Picasso</h3>

<ol>

	<li>Famous abstract paintings present the fine art at the highest level. </li>

	<li>Famous abstract artists have been gratly greatly appreciated for their famous abstract oil paintings. </li>

	<li>Picasso is one of the most famous abstract painter. Picasso became very famous because he work in multiple styles.</li>

	<li>Famous paintings of Picasso are Guernica ,Three Musicians,The Three Dancers and Self Portrait: Yo Picasso.</li>

	<li>Picasso famous paintings have earned him worldwide recognition.</li>

</ol> 



Many famous flower paintings have been created by the outstanding flower painters. Famous Floral Oil Paintings are in wide range of styles. Famous floral fine art paintings are exquisite. Famous landscape paintings are the master pieces of fine art. Famous Landscape painters have created a great number of famous landscape paintings. Famous Landscape art has greatly been admired in all the periods of times. Famous contemporary landscape painters have successfully attained the mastery in the landscape art.



Still life fruit paintings and fruit bowl paintings make the famous fruit paintings. The highly skilled artists have also created the most famous paintings of rotting fruit. The modern famous artists are successful creating the masterpieces of still fruit oil paintings and oil pastel fruit paintings.



Famous still Life art depicts drinking glasses, foodstuffs, pipes, books and so on. Famous Still life paintings are indeed the master pieces of fine art. Woman portrait paintings make the famous portrait paintings. There are also famous portrait paintings of men. Famous portrait paintings of Oscar dela hova have been greatly appreciated. Japanese women portrait paintings are very popular in Japanese culture. In addition to women portrait paintings and portrait paintings of men, there are many famous pet portrait paintings and famous portrait paintings of houses and famous paintings of sports cars.



Famous Islamic paintings of holy places and the famous islamic calligraphy of the holy verses have been truly represent the muslim art. Famous muslim artists have developed mastery of Islamic art calligraphy. The famous Islamic paintings include the paintings of the Holy places such as Khana kaaba, Masjid-e-Nabvi and other famous mosques and shrines. Famous Islamic art is fascinating and has always been appreciated. The famous Islamic art galleries have produced a great number of famous muslim painters and famous muslim calligraphist.



Famous modern galleries have produced the famous contemporary artists who have created many famous contemporary paintings. Famous oil paintings reproduction are also created in these famous galleries.



In addition to above styles, there are many famous paintings of other subjects. These include famous war paintings, famous paintings of jesus, famous figure paintings, religious famous paintings, famous paintings romantic, famous battle paintings, famous military paintings, famous sunset paintings, famous paintings of women, famous paintings of love, famous water paintings, famous acrylic paintings, famous paintings of buildings, famous dance paintings, famous dragon paintings, famous black paintings, famous paintings in the fall, famous paintings of cats, famous paintings of children, famous paintings of friends, famous paintings of christinaity, famous paintings of jesus and famous paintings of humanity. There are also famous native American paintings and famous Spanish paintings.



',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Business - Career','Sales - Marketing'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 5///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img5.jpg" ;

$post_meta = array(

				   

				   "templ_seo_page_title" =>'Marketing Company - How can I find a local Marketing Company',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Marketing Company - How can I find a local Marketing Company',

					"post_content" =>	'Many businesses that are considering taking on a marketing agency, are then faced with the problem of which marketing company to use. Do you use someone local, someone cheap, someone that is recommended? By comparing quotes from marketing companies you can get a feel for what is on offer, how much you should be paying and an idea of how long results will take to show.



<h3>The First Theft:</h3>

The first documented case of art theft was in 1473, when two panels of altarpiece of the Last Judgment by the Dutch painter Hans Memling were stolen. While the triptych was being transported by ship from the Netherlands to Florence, the ship was attacked by pirates who took it to the Gdansk cathedral in Poland. Nowadays, the piece is shown at the National Museum in Gdansk where it was recently moved from the Basilica of the Assumption. The Most Famous Theft:

The most famous story of art theft involves one of the most famous paintings in the world and one of the most famous artists in history as a suspect. In the night of August 21, 1911, the Mona Lisa was stolen out of the Louver. Soon after, Pablo Picasso was arrested and questioned by the police, but was released quickly.



It took about two years until the mystery was solved by the Parisian police. It turned out that the 30x21 inch painting was taken by one of the museum employees by the name of Vincenzo Peruggia, who simply carried it hidden under his coat. Nevertheless, Peruggia did not work alone. The crime was carefully conducted by a notorious con man, Eduardo de Valfierno, who was sent by an art faker who intended to make copies and sell them as if they were the original painting.



While Yves Chaudron, the art faker, was busy creating copies for the famous masterpiece, Mona Lisa was still hidden at Peruggias apartment. After two years in which Peruggia did not hear from Chaudron, he tried to make the best out of his stolen good. Eventually, Peruggia was caught by the police while trying to sell the painting to an art dealer from Florence, Italy. The Mona Lisa was returned to the Louver in 1913.



<h3>The Biggest Theft in the USA:</h3>

The biggest art theft in United States took place at the Isabella Stewart Gardner Museum. On the night of March 18, 1990, a group of thieves wearing police uniforms broke into the museum and took thirteen paintings whose collective value was estimated at around 300 million dollars. The thieves took two paintings and one print by Rembrandt, and works of Vermeer, Manet, Degas, Govaert Flinck, as well as a French and a Chinese artifact.



As of yet, none of the paintings have been found and the case is still unsolved. According to recent rumors, the FBI are investigating the possibility that the Boston Mob along with French art dealers are connected to the crime.



<h3>The Scream:</h3>

The painting by Edvard Munchs, The Scream, is probably the most sought after painting by art thieves in history. It has been stolen twice and was only recently recovered. In 1994, during the Winter Olympics in Lillehammer, Norway, The Scream was stolen from an Oslo gallery by two thieves who broke through an open window, set off the alarm and left a note saying: thanks for the poor security.



Three months later, the holders of the painting approached the Norwegian Government with an offer: 1 million dollars ransom for Edvard Munchs The Scream. The Government turned down the offer, but the Norwegian police collaborated with the British Police and the Getty Museum to organize a sting operation that brought back the painting to where it belongs.



Ten years later, The Scream was stolen again from the Munch Museum. This time, the robbers used a gun and took another of Munchs painting with them. While Museum officials waiting for the thieves to request ransom money, rumors claimed that both paintings were burned to conceal evidence. Eventually, the Norwegian police discovered the two paintings on August 31, 2006 but the facts on how they were recovered are not known yet.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Business - Career','Sales - Marketing'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 6///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img6.jpg" ;

$post_meta = array(

				   

				   "templ_seo_page_title" =>'Why its important to have an Integrated Marketing Plan for your business.',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Why its important to have an Integrated Marketing Plan for your business.',

					"post_content" =>	'An integrated marketing plan is the foundation of a great business plan. It allows for deeper understanding of your company surroundings, it prospect customers, and it industry current market trends. Companies are better able to grasp its businesss position in the market, and enter the market by pinpointing the areas of potential growth. 

					

<h3>What kind of art do you like?</h3>

There are many opportunities to browse art within your community at local exhibitions, art fairs and galleries. Even small towns usually have a not-for-profit gallery space, or cafes and restaurant that exhibit local artists. In larger cities, galleries often get together for monthly or periodic "gallery nights" where all the galleries hold open house receptions on the same evening. Its a great way to see a lot of art in a short time.



Today the internet provides the largest variety and depth of fine art available worldwide. You can visit museum websites and see master works from ages past, check out online galleries for group shows, and visit hundreds of individual artists websites. One advantage of using the internet is that you can search for the specific kind of art you are interested in, whether its photography, impressionism, bronze sculpture, or abstract painting. And when you find one art site, youll usually find links to many, many more.



<h3>Should the art fit the room or the room fit the art?</h3>

If you feel strongly about a particular work of art, you should buy the art you love and then find a place to put it. But you may find that when you get the art home and place it on a wall or pedestal, it doesnt work with its surroundings. By not "working," I mean the art looks out of place in the room. Placing art in the wrong surroundings takes away from its beauty and impact.



What should you do if you bring a painting home and it clashes with its environment? First, hang the painting in various places in your home, trying it out on different walls. It may look great in a place you hadnt planned on hanging it. If you cant find a place where the art looks its best, you may need to make some changes in the room, such as moving furniture or taking down patterned wallpaper and repainting in a neutral color. The changes will be worth making in order to enjoy the art you love.



Sometimes the right lighting is the key to showing art at its best. You may find that placing a picture light above a painting or directing track lighting on it is all the art needs to exhibit its brilliance. If you place a work of art in direct sunlight, however, be sure it wont be affected by the ultraviolet light. Pigments such as watercolor, pencil and pastel are especially prone to fading. Be sure to frame delicate art under UV protected glass or acrylic.



<h3>How to pick art to fit the room.</h3>

Size and color are the two major criteria for selecting art to fit its surroundings. For any particular space, art that is too large will overwhelm, and art that is too small will be lost and look out of proportion. The bolder the art, the more room it needs to breathe.



As a rule, paintings should be hung so that the center of the painting is at eye level. Sculpture may sit on the floor, a table, or pedestal, depending on the design. Rules should be considered guidelines only, however, so feel free to experiment.



When selecting a painting to match color, select one or two of the boldest colors in your room and look for art that has those colors in it. Youre not looking for an exact match here. Picking up one or two of the same colors will send a message that the painting belongs in this environment.



Another possibility for dealing with color is to choose art with muted colors, black-and-white art, or art that is framed in a way that mutes its color impact in the room. A wide light-colored mat and neutral frame create a protected environment for the art within.



Style is another consideration when selecting art to fit a room. If your house is filled with antiques, for example, youll want to use antique-style frames on the paintings you hang there. If you have contemporary furniture in large rooms with high ceilings, youll want to hang large contemporary paintings.



<h3>How to create an art-friendly room.</h3>

Think about it. When you walk into a gallery or museum, what do they all have in common? White walls and lots of light. If a wall is wall-papered or painted a color other than white, it limits the choices for hanging art that will look good on it. If a room is dark, the art will not show to its best advantage.



If you want to make art the center of attraction, play down the other elements of the room like window coverings, carpeting, wall coverings, and even furniture. A room crowded with other colors, textures and objects will take the spotlight away from the art. Follow the principle that less is more. Keep it spare and let the art star. Then relax and enjoy it.



Selecting and displaying art is an art in itself. Experiment to learn what pleases you and what doesnt. Youll be well-rewarded for the time you invest by finding more satisfaction both in the art and in your home.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Business - Career','Sales - Marketing'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 7///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img7.jpg" ;

$post_meta = array(

				   

				   "templ_seo_page_title" =>'Market your small business cost efficiently',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Market your small business cost efficiently',

					"post_content" =>	'For a small business, marketing expenses would seem to be something unnecessary. But actually investing in marketing develops for a business can raise sales and help the companys revenues rolling. The key is to learn where these investments should be going into, and learn how to spend money cost-efficiently.

					

There are many museums of modern paintings all over the world. The modern paintings of the modern artists are exhibited in these museums. These museums of modern art have been successful in flourishing the contemporary art. Modern artists exhibit their modern paintings creations in the museum of contemporary art. Museum of modern art New york, Contemporary art museum Houston, museum of modern art paris, art museum of Fort worth are the famous museums of contemporary art. Contemporary art work can be seen in these modern art museums.These museums exhibit the popular contemporary paintings of the famous modern artists.



<h3>Modern Abstract Art</h3>

<ol>

	<li>There are great number of painters of modern life. </li>

	<li>They have created the modern abstract art on modern themes. </li>

	<li>Modern artists paint colours in an artistic way. </li>

	<li>Their contemporary oil paintings are pure form of fine arts. </li>

	<li>History of modern art is full of great contemporary paintings from famous modern artists. </li>

	<li>19th century paintings and 20th century paintings are worth seeing. </li>

	<li>Modern art movements have been in progress in recent times. </li>

	<li>There are many contemporary art centers. </li>

	<li>Contemporary art center Cincinnati and Contemporary art center of Virginia are the famous modern art center. </li>

	<li>St.Louis contemporary art has been very much appreciated. Contemporary Christian artists</li>

<ol>



Modern art is also available for sale. Modern and contemporary art can be purchased from the modern art gallery. These contemporary art galleries offer the Original modern paintings of the famous contemporary artist. The reproductions of the famous contemporary paintings can also be purchased from these modern art galleries. These galleries also offer cheap price modern oil paintings.



Good News for lovers of modern art ! You can get Contemporary and Modern Oil Paintings of your own choice just by selecting the Model number of the Landscape Oil Painting or by sending the Photo of your required image. Our highly skilled modern artists can reproduce the contemporary paintings as per your given photo. Just click the Link of Contemporary paintings on our website (www.paintingsgifts4u.com) . For more details, Please contact us at : info@paintingsgifts4u.com.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Business - Career','Sales - Marketing'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 8///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img8.jpg" ;

$post_meta = array(

				   

				   "templ_seo_page_title" =>'Advertise your Business through Dimensional Mailers',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Advertise your Business through Dimensional Mailers',

					"post_content" =>	'Are you looking for an effective tactics in advertising your business? Get to know dimensional mailers and how it can help generate consumer response. While the world pays respectful tribute to Rembrandt Van Ryn the artist, it has been compelled to wait until comparatively recent years for some small measure of reliable information concerning Rembrandt Van Ryn the man. Rembrandt Van Ryn was born in the pleasant city of Leyden, but it is not easy to name the precise year. Somewhere between 1604 and 1607 he started his troubled journey through life, and of his childhood the records are scanty. Doubtless, his youthful imagination was stirred by the sights of the city, the barges moving slowly along the canals, the windmills that were never at rest, the changing chiaroscuro of the flooded, dyke-seamed land. Perhaps he saw these things with the large eye of the artist, for he could not have turned to any point of the compass without finding a picture lying ready for treatment.

	

His family soon knew that he had the makings of an artist and, in 1620, when he could hardly have been more than sixteen, and may have been considerably less, he left Leyden University for the studio of a second-rate painter called Jan van Swanenburch. We have no authentic record of his progress in the studio, but it must have been rapid. He must have made friends, painted pictures, and attracted attention. At the end of three years he went to Lastmans studio in Amsterdam, returning thence to Leyden, where he took Gerard Dou as a pupil. A several years later, it is not easy to settle these dates on a satisfactory basis, he went to Amsterdam, and established himself there, because the Dutch capital was very wealthy and held many patrons of the arts, in spite of the seemingly endless war that Holland was waging with Spain.



His art remained true and sincere, he declined to make the smallest concession to what silly sitters called their taste, but he did not really know what to do with the money and commissions that flowed in upon him so freely. The best use he made of changing circumstances was to become engaged to Saskia van Uylenborch, the cousin of his great friend Hendrick van Uylenborch, the art dealer of Amsterdam. Saskia, who was destined to live for centuries, through the genius of her husband, seems to have been born in 1612, and to have become engaged to Rembrandt Van Ryn when she was twenty. The engagement followed very closely upon the patronage of Rembrandt Van Ryn by Prince Frederic Henry, the Stadtholder, who instructed the artist to paint three pictures.



<ol>

	<li>Saskia is enshrined in many pictures. </li>

	<li>She is seen first as a young girl, then as a woman. </li>

	<li>As a bride, in the picture now at Dresden, she sits upon her husbands knee, while he raises a big glass with his outstretched arm. </li>

	<li>Her expression here is rather shy, as if she deprecated the situation and realised that it might be misconstrued. </li>

	<li>This picture gave offence to Rembrandt Van Ryns critics, but some portraits of Saskia remained to be painted. </li>

	<li>She would seem to have aged rapidly, for after marriage her days were not long in the land. </li>

	<li>She was only thirty when she died, and looked much older.</li>

</ol>



In 1638 we find Rembrandt Van Ryn taking an action against one Albert van Loo, who had dared to call Saskia extravagant. It was, of course, still more extravagant of Rembrandt Van Ryn to waste his money on lawyers on account of a case he could not hope to win, but this thought does not seem to have troubled him. He did not reflect that it would set the gossips talking more cruelly than ever. Still full of enthusiasm for life and art, he was equally full of affection for Saskia, whose hope of raising children seemed doomed to disappointment, for in addition to losing the little Rombertus, two daughters, each named Cornelia, had died soon after birth. In 1640 Rembrandt Van Ryns mother died. Her picture remains on record with that of her husband, painted ten years before, and even the biographers of the artist do not suggest that Rembrandt Van Ryn was anything but a good son. A year later the well-beloved Saskia gave birth to the one child who survived the early years, the boy Titus. Then her health failed, and in 1642 she died, after eight years of married life that would seem to have been happy. In this year Rembrandt Van Ryn painted the famous "Night Watch," a picture representing the company of Francis Banning Cocq, and incidentally a day scene in spite of its popular name. The work succeeded in arousing a storm of indignation, for every sitter wanted to have equal prominence in the canvas.



It may be said that after Saskias death, and the exhibition of this fine work, Rembrandt Van Ryns pleasant years came to an end. He was then somewhere between thirty-six and thirty-eight years old, he had made his mark, and enjoyed a very large measure of recognition, but henceforward, his career was destined to be a very troubled one, full of disappointment, pain, and care. Perhaps it would have been no bad thing for him if he could have gone with Saskia into the outer darkness. The world would have been poorer, but the man himself would have been spared many years that may be even the devoted labours of his studio could not redeem.



Between 1642, when Saskia died, and 1649, it is not easy to follow the progress of his life; we can only state with certainty that his difficulties increased almost as quickly as his work ripened. His connection with Hendrickje Stoffels would seem to have started about 1649, and this woman with whom he lived until her death some thirteen years later, has been abused by many biographers because she was the painters mistress.



He has left to the world some 500 or 600 pictures that are admitted to be genuine, together with the etchings and drawings to which reference has been made. He is to be seen in many galleries in the Old World and the New, for he painted his own portrait more than a score of times. So Rembrandt Van Ryn has been raised in our days to the pinnacle of fame which is his by right; the festival of his tercentenary was acknowledged by the whole civilised world as the natural utterance of joy and pride of our small country in being able to count among its children the great Rembrandt Van Ryn.

					

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Business - Career','Sales - Marketing'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 9///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img9.jpg" ;

$post_meta = array(

				   

				   "templ_seo_page_title" =>'The Benefits of Marketing with Postcards',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'The Benefits of Marketing with Postcards',

					"post_content" =>	'Using postcards for your marketing advertising doesnt not only demand big budget but proven to be effective. Check out its benefits through this article. 



In no particular order of importance these were - sculptress Rebecca Warren who was the fancied hot favourite with many bookies, "billboard artist" Mark Titchner - and finally film maker Phil Collins...(No not him of Genesis fame!).



When the judges cast their votes however it was Tomma Abts who came out on top. She won twenty five thousand british pounds and of course the Turner Prize itself. I am sure the money will come in handy - however its the exposure that Tomma will get from winning thats the really important thing here.



What does Tomma Abts do? Well she actually paints abstract art; usually in oils or acrylics. - something of a novelty for the Turner Prize - some would say! Tomma Abts was originally selected for her solo art exhibitions at Kunsthalle Basel, Switzerland, and Greengrassi, London.



<ol>

	<li>Tomma Abts has been praised by no less than the Tate Gallery who describes her canvases as "intimate" and "compelling" . </li>

	<li>They also comment on Tommas "consistent" and even "rigorous" method of painting. </li>

	<li>In addition the Tate states that Tomma Abts "enriches the language of abstract art" .</li>

	<li>With such praise heaped upon her head its no surprise to me that she won the prize. </li>

	<li>However I actually feel that Tommas abstract artwork isnt "knock out" but it definitely is OK.</li>

</ol>



The images or paintings of Tomma Abts are created by the repetiton of various geometrical shapes on a base of rich colour. Personally - I dont think that Tommas approach to painting is particularly original. However I have to admit that while not being "knock out" I find some of Tommas images pretty compelling and touching. I have to say that this does surprise me.



48 x 38 cms - exactly. These are the dimensions of every Tomma Abts painting. Im not sure quite why Tomma selected these dimensions. Obviously she finds them appealing and I suppose they make for a very compact painting.



When creating titles for her paintings apparently Tomma simply plucks one from a dictionary of German first names! Titles like "Veeke" for example were created in this way. In my view this is surely only slightly more interesting than numbering each picture!



All in all I think that Tomma Abts creates abstract art that is pretty accessible to the public at large. This is something that perhaps could not be said about the artwork of previous Turner Prize winners! I base my opinion of course on Tommas prize winning paintings. I would go further and state that I cannot conceive of a Tomma Abts creation offending anyone - even slightly.



In the end its just my personal opinion but I do believe that its entirely posible that Tomma Abts will go on to become a household name - within her own lifetime...Of course she could also disappear without trace from the media - and our minds in the blink of an eye, for precisely the same reasons.				

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Business - Career','Sales - Marketing'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 10///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img10.jpg" ;

$post_meta = array(

				   "templ_seo_page_title" =>'The Basics Of Business Card Design',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'The Basics Of Business Card Design',

					"post_content" =>	'Whether you&rsquo;re on a Sales Call, Company Networking Event or even a Party, the practice of swapping business cards is the most common way to make an introduction. Why is it then that so many of us arrive at meetings and trade shows without our Business Cards?

					

Islamic calligraphy is a visible expression of the highest art of all for the muslim. It is the art of the spiritual world. Calligraphy literally means writing beautifully and ornamentally. Islamic calligraphy is the art of writing, and by extension, of bookmaking. This art has most often employed the Arabic script, throughout many languages. Since Arabic calligraphy was the primary means for the preservation of the Quran, Calligraphy is especially revered among Islamic arts. The work of the famous muslim calligraphers were collected and greatly appreciated throughout Islamic history. Consideration of figurative art as idolatrous led to calligraphy and abstract figures becoming the main methods of artistic expression in Islamic cultures. Contemporary muslim calligraphers are also producing the Islamic calligraphy of high artistic quality.



<h3>Calligraphic scripts</h3>

<ol>

	<li>The Kufic script is the first of those calligraphic scripts to gain popularit. </li>

	<li>It was angular, made of square and short horizontal strokes, long verticals, and bold, compact circles. </li>

	<li>For three centuries, this script had been mainly used to copy the Quran. </li>

	<li>The cursive Naskh script was more often used for casual writing. </li>

	<li>This script had rounder letters and thin lines. </li>

	<li>It would come to be preferred to Kufic for copying the Quran as techniques for writing in this style were refined. </li>

	<li>Almost all printed material in Arabic is in Naskh. </li>

	<li>The Thuluth would take on the ornamental role formerly associated with the Kufic script in the 13th century. </li>

	<li>Thuluth is usually written in ample curves as it has a strong cursive aspect. </li>

	<li>The Persians took to using Arabic script for their own language, Persian after their conversion to Islam. </li>

	<li>The Taliq and Nastaliq styles were contributed to Arabic calligraphy by the Persians. </li>

	<li>Nastaliq style is extremely cursive, with exaggeratedly long horizontal strokes. </li>

	<li>The Diwani script is a cursive style of Arabic calligraphy. </li>

	<li>It was developed during the reign of the early Ottoman Turks (16th and early 17th centuries). </li>

	<li>This outstanding Diwani script was both decorative and communicative. </li>

	<li>Finally, Riqa is the most commonly used script for everyday use. </li>

	<li>It is simple and easy to write. </li>

	<li>Its movements are small.</li>

	<li>In China, a calligraphic form called Sini has been developed. </li>

	<li>This form has evident influences from Chinese calligraphy. </li>

	<li>Hajji Noor Deen Mi Guangjiang is a famous modern calligrapher in this tradition.</li>

</ol>

 

<h3>Calligrams<h3>

The most Islamic of arts in the Muslim world, has also its figurative sides. The muslim calligraphers have produced wonderful anthropomorphic figures by interweaving written words, made from an "Allah" , a "Muhammad" , a "Bismillah" , etc., or using micrography. These include , (Ali, the Ideal Human of mystics, a praying man, a face), (Duldul, horse of Ali, horse (Alis Duldul), fish, stork or other bird (the quranic Hudhud) and unanimated representations (a sword (Dhu al-Fiqar) and a mosque. Calligrams are related to Muslim mysticism and popular with many leading calligraphers in Turkey, Persia and India from the 17th century onward.



<h3>Pakistani Islamic Calligraphy</h3>

Pakistan has produced Islamic calligraphist of international recognition. Sadeqain is on of these international fame Islamic calligraphist. He was an untraditional and self-made, self-taught painter and calligrapher. He did a lot of work on Quranic calligraphy. Many other contemporary Pakistani calligraphists like Gul Gee have created great contemporary Islamic calligraphy. These days, Islamic calligraphies of Tufail and Uzma Tufail are getting very much popular both in Pakistan and all over the world.



<h3>Islamic Calligrahpy as an Islamic Gift</h3>

The Muslims love to adore their homes, offices and places of their work with the Islamic calligraphy. The Islamic calligraphies especially the verses from the Holy Quran and the verses from the sayings of the Holy Prophet are considered to be very sacred to muslims. Islamic calligraphy indeed make the perfect gift for a muslim for any special occasion. A muslim can send an Islamic gift of Islamic calligraphy to congratulate his relative or friend on his new home or new office or on his birthday or wedding ceremony or on Eid Festival.



It is great news for the muslims living all over the world to get the Islamic paintings and Islamic calligraphy of their own choice. Please visit our website at www.paintingsgifts4u.com and click the section of the Islamic paintings. You can get Islamic Calligraphy of your choice just by selecting the Item number of the Islamic Painting or by sending the Holy verse of your choice. We also supply Islamic paintings and Islamic Calligraphy from Pakistan on wholesale basis at very best prices. We are supplying cheap Islamic paintings and cheap Islamic calligraphies with high quality. 

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Business - Career','Sales - Marketing'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 1///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img1.jpg" ;

$post_meta = array(

				   "tl_dummy_content" => '1',

				   "templ_seo_page_title" =>'Partnership Agreement',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Partnership Agreement',

					"post_content" =>	'A partnership will be implied by the law when two or more people are in a business relationship together with the view to making a profit. Where there is no express agreement, the Partnership Act 1890 will imply certain terms into a partnership. It is, however, advisable to have a written Partnership Agreement.

					

Edgar Allan Poe, author of "Annabel Lee" and "The Fall of the House of Usher" , is easily recognized as one of the foremost masters of horror and the macabre. His works have inspired terror and anxiety in many individuals, primarily through the use of heavy psychological tones, as opposed to the gore and blood themes used and abused by writers of his time. Poes collected works easily counts as some of the most frightening material ever written, especially now, in an age where horror movies are relegated to two hours of bloodshed and senseless violence, lacking any true horror and relying solely on shock value to appear "scary." Poe also stands out as being among the few who can make even the most mundane things seem utterly terrifying, a feat emulated by Stephen King and several Japanese horror authors, but never truly duplicated.



In a completely different vein of horror from his predecessors, and arguably creating a sub-genre of horror through his works, H. P. Lovecraft also stands out. His works, while lacking in humanity, are difficult to see as anything but terrifying, particularly because of the apparent lack of humanity in them. In contrast to writers of previous generations, Lovecraft focused more on the truly monstrous, ignoring the human element that most horror writers tended to insert into their works since the days of the Gothic era. His stories were littered with monsters that knew neither morality nor mercy, seeing humanity as insignificant insects and, in Lovecrafts malignant world of ancient races and Elder Gods, humanity was insignificant. He also brought back something from the Gothic horror era, showing his readers that knowledge, even just a little knowledge, can lead to the most terrifying of discoveries. This is perhaps best exemplified by the so-called "Cthulhu Mythos," a collection of stories that centered around Lovecrafts anti-mythological beings.



<h3>Frankenstein</h3>

<ol>

	<li>Among the most enduring horror classics in the world is that of Shelleys "Frankenstein," which combines the elements of horror with the intrinsic questions that plagued morality and philosophy at the time. </li>

	<li>In some ways, the story is one that puts a new spin on the old ghost story, in that the "ghost" is inevitably caused by the actions of mortal men who meddled in things they were not meant to. </li>

	<li>The story, aside from being a genuine tale of terror, also took on the role of a lesson in morality and the limits to just how far medical science could go.</li>

	<li>Prolonging life is one thing, but bringing back the dead is another thing entirely, which is one of the subtle messages of the novel.</li>

	<li>The underlying question of whether or not Frankensteins creature is the monster, or if it is Frankenstein himself, also contributes to making the story a memorable, chilling tale.</li>

</ol> 



However, very few stories can truly stand up against the pure terror and the subtle anxiety and dread caused by Bram Stokers infamous novel, "Dracula." The novel is a hallmark of the Gothic horror era, presenting a villain of potentially epic scope in the guise of a remarkable gentleman and nobleman. It deviated from other vampire stories of the time in that the vampire, Dracula, was not monstrous in appearance. He looked every inch a master and nobleman, establishing the "lord of the night" archetype that would be a stock image of vampire characters in literature for centuries to come. It also had all the elements necessary to both frighten readers and keep them coming back for more, marking it as the most enduring horror novel in history.



',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Business - Career','Starting a Business'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 2///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img2.jpg" ;

$post_meta = array(

				   "tl_dummy_content" => '1',

				   "templ_seo_page_title" =>'Become a Millionare Selling Custom T Shirts',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Become a Millionare Selling Custom T Shirts',

					"post_content" =>	'The American dream is to strike it rich as a self made millionaire. While in theory this is a fantastic idea, the truth is that there are few industries left where people can start from scratch and make themselves a millionaire through nothing but their own perseverance and skills selling custom printed t-shirts

					

Eagles are counted among the birds of strength with strong talon that soars high in the sky and possess keen eyesight. The images of eagles hold an important position in history also. They appeared in various emblems of the past history in many different lands and their importance have been mentioned in different historical events of the past. For instance in Native American cultures, the free-spirited eagle are deeply profoundly honored and their feathers were also given importance. They were often given as a sign of pride, security or friendship. Even in ancient Greece eagle was worshiped as it was thought to have some association with the god Sun. You can also find the name of the eagle has been mentioned in the Norse mythology. It had some association with the god Odin, who represented wisdom.



<h3>Feature</h3>

<ol>

	<li>Eagle tattoos are unique in themselves and it can be also done in many different creative ways and just about anywhere on the body but still the most common area for this type of tattoo is the upper arm, followed by the shoulders, and the upper and lower back areas.</li>

	<li>Eagle tattoos whether it is with spread wings or roosting position are really eye-catching.</li>

	<li>The most important feature of eagle tattoo is its feather. </li>

	<li>So if the tattoo is done on a large area with spread wings where every details of the wing are clearly visible provides the eagle tattoo with a realistic appearance. </li>

	<li>The back is a great location for eagle tattoo with their wings fully spread as if in flight. </li>

	<li>You can also ink your back with another popular swooping pose of an eagle. </li>

	<li>This swooping poses of the eagle targeting its prey with sharp talons is really mind blowing, and of course the internet and many tattoo shops are full of images of the majestic eagle in varying poses.</li>

</ol> 



Small eagle tattoos featuring only the head of the bird can be inked on the leg or armbands, or can be incorporated into another design. There are many tattoo shops and websites that will provide you with varying poses of eagle.



',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Business - Career','Starting a Business'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 3///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img3.jpg" ;

$post_meta = array(

				   

				   "templ_seo_page_title" =>'Wholesale Silver Jewelry',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Wholesale Silver Jewelry',

					"post_content" =>	'If you have. Your sales will be directly related to your quantity of inventory. Winter bazaars, church sales, holiday festivals - - Oct-December. Check the local paper. Many churches have these annual events and tables are pretty inexpensive. These events are nice because people come to spend $ on gifts.

					

Chinese art, and in particular, Chinese painting is greatly treasured around the globe. Chinese painting can be retraced to as far back as six thousand years ago in the Neolithic Age when the Chinese have started using brushes in their paintings. Chinese art dates back even sooner than that.



According to subject matter, Chinese paintings can be classified as landscapes, character paintings and flower-and-bird paintings. In traditional Chinese painting, Chinese landscape painting embodies a major category, depicting nature, especially mountains and bodies of water. Landscapes have customarily been the choice of the Chinese because they manifest the poetry characteristic in nature. Accordingly, many esteemed paintings are landscapes.



The most popularly known form of Chinese painting is "Water-ink" painting, where water-ink is the medium. Some of the basic things required for the Chinese painting include: paper, brush, ink or ink stick, ink stone, and color.



<ol>

	<li>Brush: The Chinese brush is a mandatory tool for Chinese painting. The brush should be sturdy and pliable. Two types of brushes are used. The more delicate brush is created from white sheep hair. This brush should be soaked first, and then dried to prevent curling. The second one is made from fox or deer sable fibers, which are very durable, and is inclined to paint better. The procedure the brush is used depends on the varied features of brush strokes one wants to obtain, such as weight, lightness, gracefulness, ruggedness, firmness, and fullness. Various forms of shades are applied to impart space, texture, or depth.</li>

	<li>Ink Stick: There are three types of Ink Stick: resin soot, lacquer soot, and tung-oil soot. Of the three, tung-oil soot is the most commonly used. Otherwise, Chinese ink is best if ink stick or ink stone are ineffectual.</li>

	<li>Paper: The most generally used paper is Xuan paper, which is fabricated of sandalwood bark. This is exceptionally water retentive, so the color or ink disperses the moment the brush stroke is put down. The second most well-known is Mian paper.</li>

	<li>Color: The most former Chinese paintings used Mo, a type of natural ink, to produce monochromatic representations of nature or day-to-day life. Made of pine soot, mo is combined with water to get unique shades for conveying appropriate layers or color in a painting.</li>

</ol> 



Chinese painting is called shui-mo-hua. Shui-mo is the combination of shui (water) and mo. There are two styles of Chinese painting. They are gong-bi or detailed style, and xie-yi or freehand style. The second is the most common, not only since the objects are depicted with just a few strokes, but likewise because shapes and sprites are drawn by uncomplicated curves and natural ink. Many ancient poets and students used xie-yi paintings to give tongue to their religious anguish.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Business - Career','Starting a Business'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 4///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img4.jpg" ;

$post_meta = array(

				   

				   "templ_seo_page_title" =>'Three Tips on How to Set Up a Business in Thailand',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Three Tips on How to Set Up a Business in Thailand',

					"post_content" =>	'There are many great places in the world to setup businesses today. With the internet boom and the subsequent online riches that people have found, as well as audio codes which encode speech allowing transmission over an IP network as digital audio via an audio stream.

					

Famous artists paintings have earned world wide recognition in different periods of times. Famous painters paintings truly an asset for fine arts. There have been a great number of famous painters in different parts of the world in different periods of times. These include Marc Chagall, Salvador Dali, Leonardo Da Vinci, Paul Klee, Henri Matisse,Claude Monet, Pablo Picasso,Pierre Auguste Renoir,Henri Rousseau,Henri de Toulouse-Lautrec,Vincent Van Gogh,Andy Warhol.



<h3>Yo Picasso</h3>

<ol>

	<li>Famous abstract paintings present the fine art at the highest level. </li>

	<li>Famous abstract artists have been gratly greatly appreciated for their famous abstract oil paintings. </li>

	<li>Picasso is one of the most famous abstract painter. Picasso became very famous because he work in multiple styles.</li>

	<li>Famous paintings of Picasso are Guernica ,Three Musicians,The Three Dancers and Self Portrait: Yo Picasso.</li>

	<li>Picasso famous paintings have earned him worldwide recognition.</li>

</ol> 



Many famous flower paintings have been created by the outstanding flower painters. Famous Floral Oil Paintings are in wide range of styles. Famous floral fine art paintings are exquisite. Famous landscape paintings are the master pieces of fine art. Famous Landscape painters have created a great number of famous landscape paintings. Famous Landscape art has greatly been admired in all the periods of times. Famous contemporary landscape painters have successfully attained the mastery in the landscape art.



Still life fruit paintings and fruit bowl paintings make the famous fruit paintings. The highly skilled artists have also created the most famous paintings of rotting fruit. The modern famous artists are successful creating the masterpieces of still fruit oil paintings and oil pastel fruit paintings.



Famous still Life art depicts drinking glasses, foodstuffs, pipes, books and so on. Famous Still life paintings are indeed the master pieces of fine art. Woman portrait paintings make the famous portrait paintings. There are also famous portrait paintings of men. Famous portrait paintings of Oscar dela hova have been greatly appreciated. Japanese women portrait paintings are very popular in Japanese culture. In addition to women portrait paintings and portrait paintings of men, there are many famous pet portrait paintings and famous portrait paintings of houses and famous paintings of sports cars.



Famous Islamic paintings of holy places and the famous islamic calligraphy of the holy verses have been truly represent the muslim art. Famous muslim artists have developed mastery of Islamic art calligraphy. The famous Islamic paintings include the paintings of the Holy places such as Khana kaaba, Masjid-e-Nabvi and other famous mosques and shrines. Famous Islamic art is fascinating and has always been appreciated. The famous Islamic art galleries have produced a great number of famous muslim painters and famous muslim calligraphist.



Famous modern galleries have produced the famous contemporary artists who have created many famous contemporary paintings. Famous oil paintings reproduction are also created in these famous galleries.



In addition to above styles, there are many famous paintings of other subjects. These include famous war paintings, famous paintings of jesus, famous figure paintings, religious famous paintings, famous paintings romantic, famous battle paintings, famous military paintings, famous sunset paintings, famous paintings of women, famous paintings of love, famous water paintings, famous acrylic paintings, famous paintings of buildings, famous dance paintings, famous dragon paintings, famous black paintings, famous paintings in the fall, famous paintings of cats, famous paintings of children, famous paintings of friends, famous paintings of christinaity, famous paintings of jesus and famous paintings of humanity. There are also famous native American paintings and famous Spanish paintings.



',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Business - Career','Starting a Business'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 5///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img5.jpg" ;

$post_meta = array(

				   

				   "templ_seo_page_title" =>'Toys Market Environment In China',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Toys Market Environment In China',

					"post_content" =>	'The number of young kids under the age of 14 and infant, toddler and preschool in China is over 300,000,000, accounting for 25% of the whole population. Among them 80,000,000 live in the city, which form a large numbers of toy consumption.



<h3>The First Theft:</h3>

The first documented case of art theft was in 1473, when two panels of altarpiece of the Last Judgment by the Dutch painter Hans Memling were stolen. While the triptych was being transported by ship from the Netherlands to Florence, the ship was attacked by pirates who took it to the Gdansk cathedral in Poland. Nowadays, the piece is shown at the National Museum in Gdansk where it was recently moved from the Basilica of the Assumption. The Most Famous Theft:

The most famous story of art theft involves one of the most famous paintings in the world and one of the most famous artists in history as a suspect. In the night of August 21, 1911, the Mona Lisa was stolen out of the Louver. Soon after, Pablo Picasso was arrested and questioned by the police, but was released quickly.



It took about two years until the mystery was solved by the Parisian police. It turned out that the 30x21 inch painting was taken by one of the museum employees by the name of Vincenzo Peruggia, who simply carried it hidden under his coat. Nevertheless, Peruggia did not work alone. The crime was carefully conducted by a notorious con man, Eduardo de Valfierno, who was sent by an art faker who intended to make copies and sell them as if they were the original painting.



While Yves Chaudron, the art faker, was busy creating copies for the famous masterpiece, Mona Lisa was still hidden at Peruggias apartment. After two years in which Peruggia did not hear from Chaudron, he tried to make the best out of his stolen good. Eventually, Peruggia was caught by the police while trying to sell the painting to an art dealer from Florence, Italy. The Mona Lisa was returned to the Louver in 1913.



<h3>The Biggest Theft in the USA:</h3>

The biggest art theft in United States took place at the Isabella Stewart Gardner Museum. On the night of March 18, 1990, a group of thieves wearing police uniforms broke into the museum and took thirteen paintings whose collective value was estimated at around 300 million dollars. The thieves took two paintings and one print by Rembrandt, and works of Vermeer, Manet, Degas, Govaert Flinck, as well as a French and a Chinese artifact.



As of yet, none of the paintings have been found and the case is still unsolved. According to recent rumors, the FBI are investigating the possibility that the Boston Mob along with French art dealers are connected to the crime.



<h3>The Scream:</h3>

The painting by Edvard Munchs, The Scream, is probably the most sought after painting by art thieves in history. It has been stolen twice and was only recently recovered. In 1994, during the Winter Olympics in Lillehammer, Norway, The Scream was stolen from an Oslo gallery by two thieves who broke through an open window, set off the alarm and left a note saying: thanks for the poor security.



Three months later, the holders of the painting approached the Norwegian Government with an offer: 1 million dollars ransom for Edvard Munchs The Scream. The Government turned down the offer, but the Norwegian police collaborated with the British Police and the Getty Museum to organize a sting operation that brought back the painting to where it belongs.



Ten years later, The Scream was stolen again from the Munch Museum. This time, the robbers used a gun and took another of Munchs painting with them. While Museum officials waiting for the thieves to request ransom money, rumors claimed that both paintings were burned to conceal evidence. Eventually, the Norwegian police discovered the two paintings on August 31, 2006 but the facts on how they were recovered are not known yet.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Business - Career','Starting a Business'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 6///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img6.jpg" ;

$post_meta = array(

				   

				   "templ_seo_page_title" =>'People are Vain - Opening Your Own Tanning Salon Business',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'People are Vain - Opening Your Own Tanning Salon Business',

					"post_content" =>	'The use of tanning beds came to the United Stated from Europe in 1979. The rise in popularity was swift and over the years tanning bed bulbs have become brighter and faster with even better tanning results. The tanning industry has been growing since it was introduced, and is expected to keep on growing. This is largely because people in general are concerned with beauty and body image and strive for the �perfect&rsquo; look.

					

<h3>What kind of art do you like?</h3>

There are many opportunities to browse art within your community at local exhibitions, art fairs and galleries. Even small towns usually have a not-for-profit gallery space, or cafes and restaurant that exhibit local artists. In larger cities, galleries often get together for monthly or periodic "gallery nights" where all the galleries hold open house receptions on the same evening. Its a great way to see a lot of art in a short time.



Today the internet provides the largest variety and depth of fine art available worldwide. You can visit museum websites and see master works from ages past, check out online galleries for group shows, and visit hundreds of individual artists websites. One advantage of using the internet is that you can search for the specific kind of art you are interested in, whether its photography, impressionism, bronze sculpture, or abstract painting. And when you find one art site, youll usually find links to many, many more.



<h3>Should the art fit the room or the room fit the art?</h3>

If you feel strongly about a particular work of art, you should buy the art you love and then find a place to put it. But you may find that when you get the art home and place it on a wall or pedestal, it doesnt work with its surroundings. By not "working," I mean the art looks out of place in the room. Placing art in the wrong surroundings takes away from its beauty and impact.



What should you do if you bring a painting home and it clashes with its environment? First, hang the painting in various places in your home, trying it out on different walls. It may look great in a place you hadnt planned on hanging it. If you cant find a place where the art looks its best, you may need to make some changes in the room, such as moving furniture or taking down patterned wallpaper and repainting in a neutral color. The changes will be worth making in order to enjoy the art you love.



Sometimes the right lighting is the key to showing art at its best. You may find that placing a picture light above a painting or directing track lighting on it is all the art needs to exhibit its brilliance. If you place a work of art in direct sunlight, however, be sure it wont be affected by the ultraviolet light. Pigments such as watercolor, pencil and pastel are especially prone to fading. Be sure to frame delicate art under UV protected glass or acrylic.



<h3>How to pick art to fit the room.</h3>

Size and color are the two major criteria for selecting art to fit its surroundings. For any particular space, art that is too large will overwhelm, and art that is too small will be lost and look out of proportion. The bolder the art, the more room it needs to breathe.



As a rule, paintings should be hung so that the center of the painting is at eye level. Sculpture may sit on the floor, a table, or pedestal, depending on the design. Rules should be considered guidelines only, however, so feel free to experiment.



When selecting a painting to match color, select one or two of the boldest colors in your room and look for art that has those colors in it. Youre not looking for an exact match here. Picking up one or two of the same colors will send a message that the painting belongs in this environment.



Another possibility for dealing with color is to choose art with muted colors, black-and-white art, or art that is framed in a way that mutes its color impact in the room. A wide light-colored mat and neutral frame create a protected environment for the art within.



Style is another consideration when selecting art to fit a room. If your house is filled with antiques, for example, youll want to use antique-style frames on the paintings you hang there. If you have contemporary furniture in large rooms with high ceilings, youll want to hang large contemporary paintings.



<h3>How to create an art-friendly room.</h3>

Think about it. When you walk into a gallery or museum, what do they all have in common? White walls and lots of light. If a wall is wall-papered or painted a color other than white, it limits the choices for hanging art that will look good on it. If a room is dark, the art will not show to its best advantage.



If you want to make art the center of attraction, play down the other elements of the room like window coverings, carpeting, wall coverings, and even furniture. A room crowded with other colors, textures and objects will take the spotlight away from the art. Follow the principle that less is more. Keep it spare and let the art star. Then relax and enjoy it.



Selecting and displaying art is an art in itself. Experiment to learn what pleases you and what doesnt. Youll be well-rewarded for the time you invest by finding more satisfaction both in the art and in your home.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Business - Career','Starting a Business'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 7///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img7.jpg" ;

$post_meta = array(

				   

				   "templ_seo_page_title" =>'An Easy Accounting Software',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'An Easy Accounting Software',

					"post_content" =>	'For a small business, marketing expenses would seem to be something unnecessary. But actually investing in marketing develops for a business can raise sales and help the companys revenues rolling. The key is to learn where these investments should be going into, and learn how to spend money cost-efficiently.

					

There are many museums of modern paintings all over the world. The modern paintings of the modern artists are exhibited in these museums. These museums of modern art have been successful in flourishing the contemporary art. Modern artists exhibit their modern paintings creations in the museum of contemporary art. Museum of modern art New york, Contemporary art museum Houston, museum of modern art paris, art museum of Fort worth are the famous museums of contemporary art. Contemporary art work can be seen in these modern art museums.These museums exhibit the popular contemporary paintings of the famous modern artists.



<h3>Modern Abstract Art</h3>

<ol>

	<li>There are great number of painters of modern life. </li>

	<li>They have created the modern abstract art on modern themes. </li>

	<li>Modern artists paint colours in an artistic way. </li>

	<li>Their contemporary oil paintings are pure form of fine arts. </li>

	<li>History of modern art is full of great contemporary paintings from famous modern artists. </li>

	<li>19th century paintings and 20th century paintings are worth seeing. </li>

	<li>Modern art movements have been in progress in recent times. </li>

	<li>There are many contemporary art centers. </li>

	<li>Contemporary art center Cincinnati and Contemporary art center of Virginia are the famous modern art center. </li>

	<li>St.Louis contemporary art has been very much appreciated. Contemporary Christian artists</li>

<ol>



Modern art is also available for sale. Modern and contemporary art can be purchased from the modern art gallery. These contemporary art galleries offer the Original modern paintings of the famous contemporary artist. The reproductions of the famous contemporary paintings can also be purchased from these modern art galleries. These galleries also offer cheap price modern oil paintings.



Good News for lovers of modern art ! You can get Contemporary and Modern Oil Paintings of your own choice just by selecting the Model number of the Landscape Oil Painting or by sending the Photo of your required image. Our highly skilled modern artists can reproduce the contemporary paintings as per your given photo. Just click the Link of Contemporary paintings on our website (www.paintingsgifts4u.com) . For more details, Please contact us at : info@paintingsgifts4u.com.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Business - Career','Starting a Business'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 8///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img8.jpg" ;

$post_meta = array(

				   

				   "templ_seo_page_title" =>'Energy efficient outdoor lighting',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Energy efficient outdoor lighting',

					"post_content" =>	'Are you looking for an effective tactics in advertising your business? Get to know dimensional mailers and how it can help generate consumer response. While the world pays respectful tribute to Rembrandt Van Ryn the artist, it has been compelled to wait until comparatively recent years for some small measure of reliable information concerning Rembrandt Van Ryn the man. Rembrandt Van Ryn was born in the pleasant city of Leyden, but it is not easy to name the precise year. Somewhere between 1604 and 1607 he started his troubled journey through life, and of his childhood the records are scanty. Doubtless, his youthful imagination was stirred by the sights of the city, the barges moving slowly along the canals, the windmills that were never at rest, the changing chiaroscuro of the flooded, dyke-seamed land. Perhaps he saw these things with the large eye of the artist, for he could not have turned to any point of the compass without finding a picture lying ready for treatment.

	

His family soon knew that he had the makings of an artist and, in 1620, when he could hardly have been more than sixteen, and may have been considerably less, he left Leyden University for the studio of a second-rate painter called Jan van Swanenburch. We have no authentic record of his progress in the studio, but it must have been rapid. He must have made friends, painted pictures, and attracted attention. At the end of three years he went to Lastmans studio in Amsterdam, returning thence to Leyden, where he took Gerard Dou as a pupil. A several years later, it is not easy to settle these dates on a satisfactory basis, he went to Amsterdam, and established himself there, because the Dutch capital was very wealthy and held many patrons of the arts, in spite of the seemingly endless war that Holland was waging with Spain.



His art remained true and sincere, he declined to make the smallest concession to what silly sitters called their taste, but he did not really know what to do with the money and commissions that flowed in upon him so freely. The best use he made of changing circumstances was to become engaged to Saskia van Uylenborch, the cousin of his great friend Hendrick van Uylenborch, the art dealer of Amsterdam. Saskia, who was destined to live for centuries, through the genius of her husband, seems to have been born in 1612, and to have become engaged to Rembrandt Van Ryn when she was twenty. The engagement followed very closely upon the patronage of Rembrandt Van Ryn by Prince Frederic Henry, the Stadtholder, who instructed the artist to paint three pictures.



<ol>

	<li>Saskia is enshrined in many pictures. </li>

	<li>She is seen first as a young girl, then as a woman. </li>

	<li>As a bride, in the picture now at Dresden, she sits upon her husbands knee, while he raises a big glass with his outstretched arm. </li>

	<li>Her expression here is rather shy, as if she deprecated the situation and realised that it might be misconstrued. </li>

	<li>This picture gave offence to Rembrandt Van Ryns critics, but some portraits of Saskia remained to be painted. </li>

	<li>She would seem to have aged rapidly, for after marriage her days were not long in the land. </li>

	<li>She was only thirty when she died, and looked much older.</li>

</ol>



In 1638 we find Rembrandt Van Ryn taking an action against one Albert van Loo, who had dared to call Saskia extravagant. It was, of course, still more extravagant of Rembrandt Van Ryn to waste his money on lawyers on account of a case he could not hope to win, but this thought does not seem to have troubled him. He did not reflect that it would set the gossips talking more cruelly than ever. Still full of enthusiasm for life and art, he was equally full of affection for Saskia, whose hope of raising children seemed doomed to disappointment, for in addition to losing the little Rombertus, two daughters, each named Cornelia, had died soon after birth. In 1640 Rembrandt Van Ryns mother died. Her picture remains on record with that of her husband, painted ten years before, and even the biographers of the artist do not suggest that Rembrandt Van Ryn was anything but a good son. A year later the well-beloved Saskia gave birth to the one child who survived the early years, the boy Titus. Then her health failed, and in 1642 she died, after eight years of married life that would seem to have been happy. In this year Rembrandt Van Ryn painted the famous "Night Watch," a picture representing the company of Francis Banning Cocq, and incidentally a day scene in spite of its popular name. The work succeeded in arousing a storm of indignation, for every sitter wanted to have equal prominence in the canvas.



It may be said that after Saskias death, and the exhibition of this fine work, Rembrandt Van Ryns pleasant years came to an end. He was then somewhere between thirty-six and thirty-eight years old, he had made his mark, and enjoyed a very large measure of recognition, but henceforward, his career was destined to be a very troubled one, full of disappointment, pain, and care. Perhaps it would have been no bad thing for him if he could have gone with Saskia into the outer darkness. The world would have been poorer, but the man himself would have been spared many years that may be even the devoted labours of his studio could not redeem.



Between 1642, when Saskia died, and 1649, it is not easy to follow the progress of his life; we can only state with certainty that his difficulties increased almost as quickly as his work ripened. His connection with Hendrickje Stoffels would seem to have started about 1649, and this woman with whom he lived until her death some thirteen years later, has been abused by many biographers because she was the painters mistress.



He has left to the world some 500 or 600 pictures that are admitted to be genuine, together with the etchings and drawings to which reference has been made. He is to be seen in many galleries in the Old World and the New, for he painted his own portrait more than a score of times. So Rembrandt Van Ryn has been raised in our days to the pinnacle of fame which is his by right; the festival of his tercentenary was acknowledged by the whole civilised world as the natural utterance of joy and pride of our small country in being able to count among its children the great Rembrandt Van Ryn.

					

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Business - Career','Starting a Business'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 9///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img9.jpg" ;

$post_meta = array(

				   

				   "templ_seo_page_title" =>'Dwarf Juniper Bonsai Tree Care',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Dwarf Juniper Bonsai Tree Care',

					"post_content" =>	'Using postcards for your marketing advertising doesnt not only demand big budget but proven to be effective. Check out its benefits through this article. 



In no particular order of importance these were - sculptress Rebecca Warren who was the fancied hot favourite with many bookies, "billboard artist" Mark Titchner - and finally film maker Phil Collins...(No not him of Genesis fame!).



When the judges cast their votes however it was Tomma Abts who came out on top. She won twenty five thousand british pounds and of course the Turner Prize itself. I am sure the money will come in handy - however its the exposure that Tomma will get from winning thats the really important thing here.



What does Tomma Abts do? Well she actually paints abstract art; usually in oils or acrylics. - something of a novelty for the Turner Prize - some would say! Tomma Abts was originally selected for her solo art exhibitions at Kunsthalle Basel, Switzerland, and Greengrassi, London.



<ol>

	<li>Tomma Abts has been praised by no less than the Tate Gallery who describes her canvases as "intimate" and "compelling" . </li>

	<li>They also comment on Tommas "consistent" and even "rigorous" method of painting. </li>

	<li>In addition the Tate states that Tomma Abts "enriches the language of abstract art" .</li>

	<li>With such praise heaped upon her head its no surprise to me that she won the prize. </li>

	<li>However I actually feel that Tommas abstract artwork isnt "knock out" but it definitely is OK.</li>

</ol>



The images or paintings of Tomma Abts are created by the repetiton of various geometrical shapes on a base of rich colour. Personally - I dont think that Tommas approach to painting is particularly original. However I have to admit that while not being "knock out" I find some of Tommas images pretty compelling and touching. I have to say that this does surprise me.



48 x 38 cms - exactly. These are the dimensions of every Tomma Abts painting. Im not sure quite why Tomma selected these dimensions. Obviously she finds them appealing and I suppose they make for a very compact painting.



When creating titles for her paintings apparently Tomma simply plucks one from a dictionary of German first names! Titles like "Veeke" for example were created in this way. In my view this is surely only slightly more interesting than numbering each picture!



All in all I think that Tomma Abts creates abstract art that is pretty accessible to the public at large. This is something that perhaps could not be said about the artwork of previous Turner Prize winners! I base my opinion of course on Tommas prize winning paintings. I would go further and state that I cannot conceive of a Tomma Abts creation offending anyone - even slightly.



In the end its just my personal opinion but I do believe that its entirely posible that Tomma Abts will go on to become a household name - within her own lifetime...Of course she could also disappear without trace from the media - and our minds in the blink of an eye, for precisely the same reasons.				

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Business - Career','Starting a Business'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 10///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img10.jpg" ;

$post_meta = array(

				   "templ_seo_page_title" =>'Is Trevo The Real Deal?',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'Is Trevo The Real Deal?',

					"post_content" =>	'Whether you&rsquo;re on a Sales Call, Company Networking Event or even a Party, the practice of swapping business cards is the most common way to make an introduction. Why is it then that so many of us arrive at meetings and trade shows without our Business Cards?

					

Islamic calligraphy is a visible expression of the highest art of all for the muslim. It is the art of the spiritual world. Calligraphy literally means writing beautifully and ornamentally. Islamic calligraphy is the art of writing, and by extension, of bookmaking. This art has most often employed the Arabic script, throughout many languages. Since Arabic calligraphy was the primary means for the preservation of the Quran, Calligraphy is especially revered among Islamic arts. The work of the famous muslim calligraphers were collected and greatly appreciated throughout Islamic history. Consideration of figurative art as idolatrous led to calligraphy and abstract figures becoming the main methods of artistic expression in Islamic cultures. Contemporary muslim calligraphers are also producing the Islamic calligraphy of high artistic quality.



<h3>Calligraphic scripts</h3>

<ol>

	<li>The Kufic script is the first of those calligraphic scripts to gain popularit. </li>

	<li>It was angular, made of square and short horizontal strokes, long verticals, and bold, compact circles. </li>

	<li>For three centuries, this script had been mainly used to copy the Quran. </li>

	<li>The cursive Naskh script was more often used for casual writing. </li>

	<li>This script had rounder letters and thin lines. </li>

	<li>It would come to be preferred to Kufic for copying the Quran as techniques for writing in this style were refined. </li>

	<li>Almost all printed material in Arabic is in Naskh. </li>

	<li>The Thuluth would take on the ornamental role formerly associated with the Kufic script in the 13th century. </li>

	<li>Thuluth is usually written in ample curves as it has a strong cursive aspect. </li>

	<li>The Persians took to using Arabic script for their own language, Persian after their conversion to Islam. </li>

	<li>The Taliq and Nastaliq styles were contributed to Arabic calligraphy by the Persians. </li>

	<li>Nastaliq style is extremely cursive, with exaggeratedly long horizontal strokes. </li>

	<li>The Diwani script is a cursive style of Arabic calligraphy. </li>

	<li>It was developed during the reign of the early Ottoman Turks (16th and early 17th centuries). </li>

	<li>This outstanding Diwani script was both decorative and communicative. </li>

	<li>Finally, Riqa is the most commonly used script for everyday use. </li>

	<li>It is simple and easy to write. </li>

	<li>Its movements are small.</li>

	<li>In China, a calligraphic form called Sini has been developed. </li>

	<li>This form has evident influences from Chinese calligraphy. </li>

	<li>Hajji Noor Deen Mi Guangjiang is a famous modern calligrapher in this tradition.</li>

</ol>

 

<h3>Calligrams<h3>

The most Islamic of arts in the Muslim world, has also its figurative sides. The muslim calligraphers have produced wonderful anthropomorphic figures by interweaving written words, made from an "Allah" , a "Muhammad" , a "Bismillah" , etc., or using micrography. These include , (Ali, the Ideal Human of mystics, a praying man, a face), (Duldul, horse of Ali, horse (Alis Duldul), fish, stork or other bird (the quranic Hudhud) and unanimated representations (a sword (Dhu al-Fiqar) and a mosque. Calligrams are related to Muslim mysticism and popular with many leading calligraphers in Turkey, Persia and India from the 17th century onward.



<h3>Pakistani Islamic Calligraphy</h3>

Pakistan has produced Islamic calligraphist of international recognition. Sadeqain is on of these international fame Islamic calligraphist. He was an untraditional and self-made, self-taught painter and calligrapher. He did a lot of work on Quranic calligraphy. Many other contemporary Pakistani calligraphists like Gul Gee have created great contemporary Islamic calligraphy. These days, Islamic calligraphies of Tufail and Uzma Tufail are getting very much popular both in Pakistan and all over the world.



<h3>Islamic Calligrahpy as an Islamic Gift</h3>

The Muslims love to adore their homes, offices and places of their work with the Islamic calligraphy. The Islamic calligraphies especially the verses from the Holy Quran and the verses from the sayings of the Holy Prophet are considered to be very sacred to muslims. Islamic calligraphy indeed make the perfect gift for a muslim for any special occasion. A muslim can send an Islamic gift of Islamic calligraphy to congratulate his relative or friend on his new home or new office or on his birthday or wedding ceremony or on Eid Festival.



It is great news for the muslims living all over the world to get the Islamic paintings and Islamic calligraphy of their own choice. Please visit our website at www.paintingsgifts4u.com and click the section of the Islamic paintings. You can get Islamic Calligraphy of your choice just by selecting the Item number of the Islamic Painting or by sending the Holy verse of your choice. We also supply Islamic paintings and Islamic Calligraphy from Pakistan on wholesale basis at very best prices. We are supplying cheap Islamic paintings and cheap Islamic calligraphies with high quality. 

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Business - Career','Starting a Business'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 1///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img1.jpg" ;

$post_meta = array(

				   "tl_dummy_content" => '1',

				   "templ_seo_page_title" =>'How To Prospect For More Clients',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'How To Prospect For More Clients',

					"post_content" =>	'A partnership will be implied by the law when two or more people are in a business relationship together with the view to making a profit. Where there is no express agreement, the Partnership Act 1890 will imply certain terms into a partnership. It is, however, advisable to have a written Partnership Agreement.

					

Edgar Allan Poe, author of "Annabel Lee" and "The Fall of the House of Usher" , is easily recognized as one of the foremost masters of horror and the macabre. His works have inspired terror and anxiety in many individuals, primarily through the use of heavy psychological tones, as opposed to the gore and blood themes used and abused by writers of his time. Poes collected works easily counts as some of the most frightening material ever written, especially now, in an age where horror movies are relegated to two hours of bloodshed and senseless violence, lacking any true horror and relying solely on shock value to appear "scary." Poe also stands out as being among the few who can make even the most mundane things seem utterly terrifying, a feat emulated by Stephen King and several Japanese horror authors, but never truly duplicated.



In a completely different vein of horror from his predecessors, and arguably creating a sub-genre of horror through his works, H. P. Lovecraft also stands out. His works, while lacking in humanity, are difficult to see as anything but terrifying, particularly because of the apparent lack of humanity in them. In contrast to writers of previous generations, Lovecraft focused more on the truly monstrous, ignoring the human element that most horror writers tended to insert into their works since the days of the Gothic era. His stories were littered with monsters that knew neither morality nor mercy, seeing humanity as insignificant insects and, in Lovecrafts malignant world of ancient races and Elder Gods, humanity was insignificant. He also brought back something from the Gothic horror era, showing his readers that knowledge, even just a little knowledge, can lead to the most terrifying of discoveries. This is perhaps best exemplified by the so-called "Cthulhu Mythos," a collection of stories that centered around Lovecrafts anti-mythological beings.



<h3>Frankenstein</h3>

<ol>

	<li>Among the most enduring horror classics in the world is that of Shelleys "Frankenstein," which combines the elements of horror with the intrinsic questions that plagued morality and philosophy at the time. </li>

	<li>In some ways, the story is one that puts a new spin on the old ghost story, in that the "ghost" is inevitably caused by the actions of mortal men who meddled in things they were not meant to. </li>

	<li>The story, aside from being a genuine tale of terror, also took on the role of a lesson in morality and the limits to just how far medical science could go.</li>

	<li>Prolonging life is one thing, but bringing back the dead is another thing entirely, which is one of the subtle messages of the novel.</li>

	<li>The underlying question of whether or not Frankensteins creature is the monster, or if it is Frankenstein himself, also contributes to making the story a memorable, chilling tale.</li>

</ol> 



However, very few stories can truly stand up against the pure terror and the subtle anxiety and dread caused by Bram Stokers infamous novel, "Dracula." The novel is a hallmark of the Gothic horror era, presenting a villain of potentially epic scope in the guise of a remarkable gentleman and nobleman. It deviated from other vampire stories of the time in that the vampire, Dracula, was not monstrous in appearance. He looked every inch a master and nobleman, establishing the "lord of the night" archetype that would be a stock image of vampire characters in literature for centuries to come. It also had all the elements necessary to both frighten readers and keep them coming back for more, marking it as the most enduring horror novel in history.



',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Business - Career','Sales'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 2///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img2.jpg" ;

$post_meta = array(

				   "tl_dummy_content" => '1',

				   "templ_seo_page_title" =>'A Bowling Machine at ICC Global Cricket Academy',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'A Bowling Machine at ICC Global Cricket Academy',

					"post_content" =>	'The American dream is to strike it rich as a self made millionaire. While in theory this is a fantastic idea, the truth is that there are few industries left where people can start from scratch and make themselves a millionaire through nothing but their own perseverance and skills selling custom printed t-shirts

					

Eagles are counted among the birds of strength with strong talon that soars high in the sky and possess keen eyesight. The images of eagles hold an important position in history also. They appeared in various emblems of the past history in many different lands and their importance have been mentioned in different historical events of the past. For instance in Native American cultures, the free-spirited eagle are deeply profoundly honored and their feathers were also given importance. They were often given as a sign of pride, security or friendship. Even in ancient Greece eagle was worshiped as it was thought to have some association with the god Sun. You can also find the name of the eagle has been mentioned in the Norse mythology. It had some association with the god Odin, who represented wisdom.



<h3>Feature</h3>

<ol>

	<li>Eagle tattoos are unique in themselves and it can be also done in many different creative ways and just about anywhere on the body but still the most common area for this type of tattoo is the upper arm, followed by the shoulders, and the upper and lower back areas.</li>

	<li>Eagle tattoos whether it is with spread wings or roosting position are really eye-catching.</li>

	<li>The most important feature of eagle tattoo is its feather. </li>

	<li>So if the tattoo is done on a large area with spread wings where every details of the wing are clearly visible provides the eagle tattoo with a realistic appearance. </li>

	<li>The back is a great location for eagle tattoo with their wings fully spread as if in flight. </li>

	<li>You can also ink your back with another popular swooping pose of an eagle. </li>

	<li>This swooping poses of the eagle targeting its prey with sharp talons is really mind blowing, and of course the internet and many tattoo shops are full of images of the majestic eagle in varying poses.</li>

</ol> 



Small eagle tattoos featuring only the head of the bird can be inked on the leg or armbands, or can be incorporated into another design. There are many tattoo shops and websites that will provide you with varying poses of eagle.



',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Business - Career','Sales'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 3///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img3.jpg" ;



$post_meta = array(

				   

				   "templ_seo_page_title" =>'A Straightforward Sales Procedure',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',

				);

$post_info[] = array(

					"post_title" =>	'A Straightforward Sales Procedure',

					"post_content" =>	'If you have. Your sales will be directly related to your quantity of inventory. Winter bazaars, church sales, holiday festivals - - Oct-December. Check the local paper. Many churches have these annual events and tables are pretty inexpensive. These events are nice because people come to spend $ on gifts.

					

Chinese art, and in particular, Chinese painting is greatly treasured around the globe. Chinese painting can be retraced to as far back as six thousand years ago in the Neolithic Age when the Chinese have started using brushes in their paintings. Chinese art dates back even sooner than that.



According to subject matter, Chinese paintings can be classified as landscapes, character paintings and flower-and-bird paintings. In traditional Chinese painting, Chinese landscape painting embodies a major category, depicting nature, especially mountains and bodies of water. Landscapes have customarily been the choice of the Chinese because they manifest the poetry characteristic in nature. Accordingly, many esteemed paintings are landscapes.



The most popularly known form of Chinese painting is "Water-ink" painting, where water-ink is the medium. Some of the basic things required for the Chinese painting include: paper, brush, ink or ink stick, ink stone, and color.



<ol>

	<li>Brush: The Chinese brush is a mandatory tool for Chinese painting. The brush should be sturdy and pliable. Two types of brushes are used. The more delicate brush is created from white sheep hair. This brush should be soaked first, and then dried to prevent curling. The second one is made from fox or deer sable fibers, which are very durable, and is inclined to paint better. The procedure the brush is used depends on the varied features of brush strokes one wants to obtain, such as weight, lightness, gracefulness, ruggedness, firmness, and fullness. Various forms of shades are applied to impart space, texture, or depth.</li>

	<li>Ink Stick: There are three types of Ink Stick: resin soot, lacquer soot, and tung-oil soot. Of the three, tung-oil soot is the most commonly used. Otherwise, Chinese ink is best if ink stick or ink stone are ineffectual.</li>

	<li>Paper: The most generally used paper is Xuan paper, which is fabricated of sandalwood bark. This is exceptionally water retentive, so the color or ink disperses the moment the brush stroke is put down. The second most well-known is Mian paper.</li>

	<li>Color: The most former Chinese paintings used Mo, a type of natural ink, to produce monochromatic representations of nature or day-to-day life. Made of pine soot, mo is combined with water to get unique shades for conveying appropriate layers or color in a painting.</li>

</ol> 



Chinese painting is called shui-mo-hua. Shui-mo is the combination of shui (water) and mo. There are two styles of Chinese painting. They are gong-bi or detailed style, and xie-yi or freehand style. The second is the most common, not only since the objects are depicted with just a few strokes, but likewise because shapes and sprites are drawn by uncomplicated curves and natural ink. Many ancient poets and students used xie-yi paintings to give tongue to their religious anguish.

',

					"post_meta" =>	$post_meta,

					"post_image" =>	$image_array,

					"post_category" =>	array('Business - Career','Sales'),

					"post_tags" =>	array('Tags','Sample Tags')

					);

////post end///

//====================================================================================//

////post start 4///

$image_array = array();

$post_meta = array();

$image_array[] = "dummy/img4.jpg" ;

$post_meta = array(

				   

				   "templ_seo_page_title" =>'Buy Fortune Cookies Online',

				   "templ_seo_page_kw" => '',

"tl_dummy_content"	=> '1',

				   "templ_seo_page_desc" => '',



				);

$post_info[] = array(

					"post_title" =>	'Buy Fortune Cookies Online',

					"post_content" =>	'There are many great places in the world to setup businesses today. With the internet boom and the subsequent online riches that people have found, as well as audio codes which encode speech allowing transmission over an IP network as digital audio via an audio stream.

					

Famous artists paintings have earned world wide recognition in different periods of times. Famous painters paintings truly an asset for fine arts. There have been a great number of famous painters in different parts of the world in different periods of times. These include Marc Chagall, Salvador Dali, Leonardo Da Vinci, Paul Klee, Henri Matisse,Claude Monet, Pablo Picasso,Pierre Auguste Renoir,Henri Rousseau,Henri de Toulouse-Lautrec,Vincent Van Gogh,Andy Warhol.



<h3>Yo Picasso</h3>

<ol>

	<li>Famous abstract paintings present the fine art at the highest level. </li>

	<li>Famous abstract artists have been gratly greatly appreciated for their famous abstract oil paintings. </li>

	<li>Picasso is one of the most famous abstract painter. Picasso became very famous because he work in multiple styles.</li>

	<li>Famous paintings of Picasso are Guernica ,Three Musicians,The Three Dancers and Self Portrait: Yo Picasso.</li>

	<li>Picasso famous paintings have earned him worldwide recognition.</li>

</ol> 



Many famous flower paintings have been created by the outstanding flower painters. Famous Floral Oil Paintings are in wide range of styles. Famous floral fine art paintings are exquisite. Famous landscape paintings are the master pieces of fine art. Famous Landscape painters have created a great number of famous landscape paintings. Famous Landscape art has greatly been admired in all the periods of times. Famous contemporary landscape painters have successfully attained the mastery in the landscape art.



Still life fruit paintings and fruit bowl paintings make the famous fruit paintings. The highly skilled artists have also created the most famous paintings of rotting fruit. The modern famous artists are successful creating the masterpieces of still fruit oil paintings and oil pastel fruit paintings.



Famous still Life art depicts drinking glasses, foodstuffs, pipes, books and so on. Famous Still life paintings are indeed the master pieces of fine art. Woman portrait paintings make the famous portrait paintings. There are also famous portrait paintings of men. Famous portrait paintings of Oscar dela hova have been greatly appreciated. Japanese women portrait paintings are very popular in Japanese culture. In addition to women portrait paintings and portrait paintings of men, there are many famous pet portrait paintings and famous portrait paintings of houses and famous paintings of sports cars.



Famous Islamic paintings of holy places and the famous islamic calligraphy of the holy verses have been truly represent the muslim art. Famous muslim artists have developed mastery of Islamic art calligraphy. The famous Islamic paintings include the paintings of the Holy places such as Khana kaaba, Masjid-e-Nabvi and other famous mosques and shrines. Famous Islamic art is fascinating and has always been appreciated. The famous Islamic art galleries have produced a great number of famous muslim painters and famous muslim calligraphist.



Famous modern galleries have produced the famous contemporary artists who have created many famous contemporary paintings. Famous