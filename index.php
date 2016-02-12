<?
require_once 'social/Social_Buttons.class.php';

define ('FB_APP_ID', '');

$networks = array('facebook','twitter','google-plus','pinterest','linkedin','youtube','vimeo','whatsapp','tumblr','instagram','flickr','soundcloud');

?>

<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/Article">
    <head>
        <meta charset="utf-8">

        <title>Caliber Social Sharing icons</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/main.css">




	    <? // Make sure all of the below meta and the link to font awesome fontawesome is included on every page that needs unique sharing or the sharing links ?>


	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	    <? // ---> ?>


    </head>
    <body>

	<? Social_Buttons::facebook_sdk(FB_APP_ID) ?>


	<main class="container">

		<h1>Social Sharing Template</h1>

		<h2>Contents</h2>
		<ol class="contents">
			<li><a href="#usage">Using in your app</a></li>
			<li><a href="#colours">Colours</a></li>
			<li><a href="#options">Options</a>
				<ol>
					<li><a href="#networks">Networks</a></li>
					<li><a href="#button-styles">Button Styles</a></li>
					<li><a href="#facebook-variations">Facebook Variations</a></li>
					<li><a href="#twitter-variations">Twitter Variations</a></li>
					<li><a href="#pinterest-variations">Pinterest Variations</a></li>
					<li><a href="#pinterest-variations">LinkedIn Variations</a></li>
					<li><a href="#new-window">Open in New Window</a></li>
					<li><a href="#data-attributes">Data Attributes</a></li>
				</ol>
			</li>
			<li><a href="#version-control">Version Control</a></li>

		</ol>

		<section class="usage">
		<h2>Usage in your app</h2><a name="usage"></a>

			<p>Firstly this requires you to be using SASS in your apps. The SCSS files are to be added as partials to your main scss file</p>

			<p>Secondly, make sure you include FontAwesome in your project. <a href="https://fortawesome.github.io/Font-Awesome/get-started/">Install here</a></p>

			<h3>Required files from this projects source </h3>
			<p><span class="code">/social/Social_Buttons.class.php</span> - Add that to your project and link it in.</p>
			<p><span class="code">/social/scss/_social-colours.scss</span> - Add this to your SASS partials folder and <span class="code">@import</span> the link to the file</p>
			<p><span class="code">/social/scss/_social-icons.scss</span> - Add this to your SASS partials folder and <span class="code">@import</span> the link to the file</p>
			<p><span class="code">/social/social-icons.js</span> - Add this to your JavaScript folder and include on any pages that the buttons are being included on</p>
		</section>


		<a name="notes"></a>
		<section class="notes">
			<h2>Notes</h2>
			<p class="warning">All examples below show what the icons will look like on white, light and dark backgrounds. The code <strong>will not</strong> add the grey boxes.</p>

			<p class="warning">Only Facebook, Twitter, Google Plus, Pinterest and LinkedIn have a native share as well as the option to link to the site. </p>
		</section>


		<a name="colours"></a>
		<section class="colours">
			<h2>Social Media Colours</h2>
			<p>The template has popular networks default colouring colouring built in. Just include the colour variables below in your SCSS to use it.</p>
			<p class="cols">
				<span class="code facebook"><i class="fa fa-square"></i>$facebook</span><br>
				<span class="code twitter"><i class="fa fa-square"></i>$twitter</span><br>
				<span class="code google-plus"><i class="fa fa-square"></i>$google-plus</span><br>
				<span class="code pinterest"><i class="fa fa-square"></i>$pinterest</span><br>
				<span class="code linkedin"><i class="fa fa-square"></i>$linkedin</span><br>
				<span class="code youtube"><i class="fa fa-square"></i>$youtube</span><br>
				<span class="code vimeo"><i class="fa fa-square"></i>$vimeo</span><br>
				<span class="code whatsapp"><i class="fa fa-square"></i>$whatsapp</span><br>
				<span class="code tumblr"><i class="fa fa-square"></i>$tumblr</span><br>
				<span class="code instagram"><i class="fa fa-square"></i>$instagram</span><br>
				<span class="code flickr"><i class="fa fa-square"></i>$flickr</span><br>
				<span class="code soundcloud"><i class="fa fa-square"></i>$soundcloud</span>
			</p>
		</section>


		<a name="options"></a>
		<section class="options">
			
			<h2>Options</h2><a name="options"></a>


			<a name="networks"></a>
			<article class="network">


				<h3>Supported Networks</h3>
				<p>Use the network key to output which network you require a button form. Below is a list of everything supported</p>

				<? foreach($networks as $network): ?>

					<div class="example">

						<div class="white-bg">

							<?
							$args = array('network' => $network);

							Social_Buttons::build($args); ?>

						</div>

						<div class="light-bg">

							<?
							$args = array('network' => $network);

							Social_Buttons::build($args); ?>

						</div>

						<div class="dark-bg">

							<?
							$args = array('network' => $network);

							Social_Buttons::build($args); ?>

						</div>

						<div class="code-snippet">

<pre><code>$args = array('network' => '<?=$network?>');

Social_Buttons::build($args);</code></pre>

						</div>

						<div class="clearfix"></div>

					</div>

				<? endforeach; ?>

			</article>


			<a name="button-styles"></a>
			<article class="button-styles">

				<h3>Button styles</h3>

				<div class="example">
				<p>Default styling of the button is square.</p>

					<div class="white-bg">

						<?
						$args = array('network' => 'facebook');

						Social_Buttons::build($args); ?>

					</div>

					<div class="light-bg">

						<?
						$args = array('network' => 'facebook');

						Social_Buttons::build($args); ?>

					</div>

					<div class="dark-bg">

						<?
						$args = array('network' => 'facebook');

						Social_Buttons::build($args); ?>

					</div>

					<div class="code-snippet">

						<pre><code>$args = array(
	'network' => 'facebook'
);

Social_Buttons::build();</code></pre>

					</div>

					<div class="clearfix"></div>

				</div>

				<div class="example">
				<p>Rounded buttons</p>

					<div class="white-bg">

						<?
						$args = array('network' => 'pinterest',
						              'style' => 'rounded');

						Social_Buttons::build($args);
						?>

					</div>

					<div class="light-bg">

						<?
						$args = array('network' => 'pinterest',
						              'style' => 'rounded');

						Social_Buttons::build($args);
						?>

					</div>

					<div class="dark-bg">

						<?
						$args = array('network' => 'pinterest',
						              'style' => 'rounded');

						Social_Buttons::build($args);
						?>

					</div>

					<div class="code-snippet">

<pre><code>$args = array(
	'network' => 'pinterest',
	'style' => 'rounded'
);
Social_Buttons::build($args);</code></pre>

					</div>

					<div class="clearfix"></div>

				</div>

				<div class="example">
				<p>Round buttons.</p>

					<div class="white-bg">

						<?
						$args = array('network' => 'whatsapp',
						              'style' => 'round');

						Social_Buttons::build($args);
						?>

					</div>

					<div class="light-bg">

						<?
						$args = array('network' => 'whatsapp',
						              'style' => 'round');

						Social_Buttons::build($args);
						?>

					</div>

					<div class="dark-bg">

						<?
						$args = array('network' => 'whatsapp',
						              'style' => 'round');

						Social_Buttons::build($args);
						?>

					</div>

					<div class="code-snippet">

<pre><code>$args = array(
	'network' => 'whatsapp',
	'style' => 'round'
);
Social_Buttons::build($args);</code></pre>

					</div>

					<div class="clearfix"></div>

				</div>

				<div class="example">
				<p>Inverted square.</p>

					<div class="white-bg">

						<?
						$args = array('network' => 'linkedin',
						              'invert' => true);

						Social_Buttons::build($args);
						?>

					</div>

					<div class="light-bg">

						<?
						$args = array('network' => 'linkedin',
						              'invert' => true);

						Social_Buttons::build($args);
						?>

					</div>

					<div class="dark-bg">

						<?
						$args = array('network' => 'linkedin',
						              'invert' => true);

						Social_Buttons::build($args);
						?>

					</div>

					<div class="code-snippet">

<pre><code>$args = array(
	'network' => 'facebook',
	'invert' => true
);
Social_Buttons::build($args);</code></pre>

					</div>

					<div class="clearfix"></div>

				</div>

				<div class="example">
				<p>Inverted rounded.</p>

					<div class="white-bg">

						<?
						$args = array('network' => 'youtube',
						              'style' => 'rounded',
						              'invert' => true);

						Social_Buttons::build($args);
						?>

					</div>

					<div class="light-bg">

						<?
						$args = array('network' => 'youtube',
						              'style' => 'rounded',
						              'invert' => true);

						Social_Buttons::build($args);
						?>

					</div>

					<div class="dark-bg">

						<?
						$args = array('network' => 'youtube',
						              'style' => 'rounded',
						              'invert' => true);

						Social_Buttons::build($args);
						?>

					</div>

					<div class="code-snippet">

<pre><code>$args = array(
	'network' => 'youtube',
	'style' => 'rounded',
	'invert' => true
);
Social_Buttons::build($args);</code></pre>

					</div>

					<div class="clearfix"></div>

				</div>


				<div class="example">
				<p>Inverted round.</p>

				<div class="white-bg">

					<?
					$args = array('network' => 'google-plus',
					              'style' => 'round',
					              'invert' => true);

					Social_Buttons::build($args);
					?>

				</div>

				<div class="light-bg">

					<?
					$args = array('network' => 'google-plus',
					              'style' => 'round',
					              'invert' => true);

					Social_Buttons::build($args);
					?>

				</div>

				<div class="dark-bg">

					<?
					$args = array('network' => 'google-plus',
					              'style' => 'round',
					              'invert' => true);

					Social_Buttons::build($args);
					?>

				</div>

				<div class="code-snippet">

<pre><code>$args = array(
	'network' => 'google-plus',
	'style' => 'round',
	'invert' => true
);
Social_Buttons::build($args);</pre>

				</div>

				<div class="clearfix"></div>

			</div>

			</article>


			<a name="facebook-variations"></a>
			<article class="facebook-variations">


				<h3>Facebook Variations</h3>

				<p>There are a few of options for Facebook. The first option is a standard link to out to a Facebook page</p>

				<div class="example">

					<div class="light-bg">

						<?
						$args = array('network' => 'facebook',
						              'link' => 'http://www.facebook.com/caliberi');

						Social_Buttons::build($args); ?>

					</div>

					<div class="code-snippet longer">

<pre><code>$args = array(
	'network' => 'facebook',
	'link' => 'http://www.facebook.com/caliberi'
);
Social_Buttons::build($args);</code></pre>

					</div>

					<div class="clearfix"></div>

				</div>
				<br>

				<p>If you are using the 'link' item, you can force it to open in a new window by adding the add the below</p>
				<a name="new-window"></a>

				<div class="example">

					<div class="light-bg">

						<?
						$args = array('network' => 'facebook',
						              'link' => 'http://www.facebook.com/caliberi',
						              'new-window' => true);

						Social_Buttons::build($args); ?>

					</div>

					<div class="code-snippet longer">

<pre><code>$args = array(
	'network' => 'facebook',
	'link' => 'http://www.facebook.com/caliberi',
	'new-window' => true
);
Social_Buttons::build($args);</code></pre>

					</div>

					<div class="clearfix"></div>

				</div>
				<br>

				<p>If you want a user to share a page and it use that pages Open Graph meta data to populate the share dialog add the below</p>

				<div class="example">

					<div class="light-bg">

						<?
						$args = array(	'network' => 'facebook',
						                'link' => 'share',
										'url' => 'http://www.caliberi.com');

						Social_Buttons::build($args); ?>

					</div>

					<div class="code-snippet longer">

<pre><code>$args = array(
	'network' => 'facebook',
	'link' => 'share',
	'url' => 'http://www.caliberi.com'
);
Social_Buttons::build($args);</code></pre>

					</div>

					<div class="clearfix"></div>

				</div>
				<br>

				<p>If you want a user create a customised share widget that overrides the Open Graph data to populate the share dialog add the below. You'll need to make sure that the Facebook SDK is loaded in with this one as well as teh correct APP ID for this application</p>

				<div class="example">

					<div class="light-bg">

						<?
						$args = array(	'network' => 'facebook',
						                'link' => 'custom-share',
										'title' => 'This is the Title',
										'caption' => 'The Caption',
										'description' => 'This is the description.',
										'url' => 'http://www.caliberi.com',
										'image_url' => 'http://www.caliberi.com/wp-content/uploads/2014/04/separator2saving2.jpg ');

						Social_Buttons::build($args); ?>

					</div>

					<div class="code-snippet longer">

<pre><code>$args = array(
	'network' => 'facebook',
	'link' => 'custom-share',
	'title' => 'This is the Title',
	'caption' => 'The Caption',
	'description' => 'This is the description.',
	'url' => 'http://www.caliberi.com',
	'image_url' => 'http://www.caliberi.com/wp-content/uploads/2014/04/separator2saving2.jpg '
);
Social_Buttons::build($args);</code></pre>

					</div>

					<div class="clearfix"></div>

				</div>

			</article>


			<a name="twitter-variations"></a>
			<article class="twitter-variations">


				<h3>Twitter Variations</h3>

				<p>There are a couple of options for Twitter. The first option is a standard link to out and the second option will pre-populate a tweet.</p>

				<div class="example">

					<div class="light-bg">

						<?
						$args = array('network' => 'twitter',
						              'link' => 'http://www.twitter.com/caliberi');

						Social_Buttons::build($args); ?>

					</div>

					<div class="code-snippet longer">

<pre><code>$args = array(
	'network' => 'twitter',
	'link' => 'http://www.twitter.com/caliberi'
);
Social_Buttons::build($args);</code></pre>

					</div>

					<div class="clearfix"></div>

				</div>
				<br>


				<p>To fully populate the Twitter share and functionality you can use one or all of the additional elements shown on the next example. As a minimum you should populate the tweet and the url.</p>

				<div class="example">

					<div class="light-bg">

						<?
						$args = array('network' => 'twitter',
						              'link' => 'custom-share',
							          'tweet' => 'This is some tweet content',
						              'url' => 'http://www.caliberi.com',
						              'hashtag' => 'tweets',
									  'via' => 'caliberi',
									  'related' => 'shanejones');

						Social_Buttons::build($args); ?>

					</div>

					<div class="code-snippet longer">

<pre><code>$args = array(
	'network' => 'twitter',
	'link' => 'custom-share',
	'tweet' => 'This is some tweet content',
	'url' => 'http://www.caliberi.com',
	'hashtag' => 'tweets',
	'via' => 'caliberi',
	'related' => 'shanejones'
);
Social_Buttons::build($args);</code></pre>

					</div>

					<div class="clearfix"></div>

				</div>

			</article>





			<a name="pinterest-variations"></a>
			<article class="pinterest-variations">


				<h3>Pinterest Variations</h3>

				<p>We can also create an Pinterest button to pin an image to pinterest. </p>

				<div class="example">

					<div class="light-bg">

						<?
						$args = array('network' => 'pinterest',
						              'link' => 'custom-share',
							          'title' => 'Caliber homepage image',
						              'url' => 'http://www.caliberi.com',
						              'media' => 'http://www.northwoodregional.co.uk/uploaded-files/property/46/images/459/front-back-large.jpg');

						Social_Buttons::build($args); ?>

					</div>

					<div class="code-snippet longer">

<pre><code>$args = array(
	'network' => 'pinterest',
	'link' => 'custom-share',
	'title' => 'Caliber homepage image',
	'url' => 'http://www.caliberi.com',
	'media' => 'http://www.northwoodregional.co.uk/uploaded-files/property/46/images/459/front-back-large.jpg'
);
Social_Buttons::build($args);</code></pre>

					</div>

					<div class="clearfix"></div>

				</div>

			</article>



			<a name="pinterest-variations"></a>
			<article class="pinterest-variations">


				<h3>LinkedIn Variations</h3>

				<p>We can also create an LinkedIn share widget. This uses an Open Graph image tag to populate the image. If the image does not populate you may need to add <strong>prefix="og: http://ogp.me/ns#"</strong> to the Facebook open graph tags in your header. </p>

				<div class="example">

					<div class="light-bg">

						<?
						$args = array('network' => 'linkedin',
						              'link' => 'custom-share',
						              'company' => 'Caliber Interactive',
						              'title' => 'Caliber Website',
						              'description' => 'This is the caliber homepage description',
						              'url' => 'http://www.caliberi.com');

						Social_Buttons::build($args); ?>

					</div>

					<div class="code-snippet longer">

<pre><code>$args = array(
	'network' => 'linkedin',
	'link' => 'custom-share',
	'company' => 'Caliber Interactive',
	'title' => 'Caliber Website',
	'description' => 'This is the caliber homepage description',
	'url' => 'http://www.caliberi.com'
);
Social_Buttons::build($args);</code></pre>

					</div>

					<div class="clearfix"></div>

				</div>

			</article>


			<a name="new-window"></a>
			<article class="new-window">

				<h3>Opening a link in a new window</h3>

				<p>If you are using the 'link' item, you can force it to open in a new window by adding the add the below</p>

				<div class="example">

				<div class="light-bg">

					<?
					$args = array('network' => 'facebook',
					              'link' => 'http://www.facebook.com/caliberi',
					              'new-window' => true);

					Social_Buttons::build($args); ?>

				</div>

				<div class="code-snippet longer">

<pre><code>$args = array(
	'network' => 'facebook',
	'link' => 'http://www.facebook.com/caliberi',
	'new-window' => true
);
Social_Buttons::build($args);</code></pre>

				</div>

				<div class="clearfix"></div>

			</div>

			</article>


			<a name="data-attributes"></a>
			<article class="data-attributes">

				<h3>HTML5 Data attritutes</h3>

				<p>If there is a requirement to pass a custom data attributes in the format data-* do so as shown below. To see these examples working view the source of the buttons below.</p>

				<div class="example">

					<div class="light-bg">

						<?
						$args = array('network' => 'google-plus',
						              'link' => 'https://plus.google.com/+Caliberi/posts',
						              'data-id' => '12345');

						Social_Buttons::build($args); ?>

					</div>

					<div class="code-snippet longer">

<pre><code>$args =array(
	'network' => 'google-plus',
	'link' => 'https://plus.google.com/+Caliberi/posts',
	'data-id' => '12345'
);
Social_Buttons::build($args);</code></pre>

					</div>

					<div class="clearfix"></div>

				</div>

				<p><br>Passing multiple data attributes? Just keep adding them to the <span class="code">$args</span></p>

				<div class="example">

					<div class="light-bg">

						<?
						$args = array('network' => 'pinterest',
						              'link' => 'http://www.pinterest.com/somepage',
						              'data-id' => '12345',
						              'data-somethingelse' => 'another value');

						Social_Buttons::build($args); ?>

					</div>

					<div class="code-snippet longer">

<pre><code>$args = array(
	'network' => 'pinterest',
	'link' => 'http://www.pinterest.com/somepage',
	'data-id' => '12345',
	'data-somethingelse' => 'another value'
);
Social_Buttons::build($args);</code></pre>

					</div>

					<div class="clearfix"></div>

				</div>


			</article>

		</section>

		<a name="version-control"></a>
		<section class="version-control">
			<h2>Version Control</h2>
			<p>Currently the app is located in bitbucket at <span class="code">https://bitbucket.org/caliberi/social-sharing-template</span></p>

			<p>Eventually we could open source this and push it out via the Caliber github account.</p>
		</section>


	</main>



    <script src="scripts/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.1.0/styles/default.min.css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.1.0/highlight.min.js"></script>
	<script>hljs.initHighlightingOnLoad();</script>
    <script src="scripts/main.js"></script>
    <script src="social/social-buttons.js"></script>
    </body>
</html>