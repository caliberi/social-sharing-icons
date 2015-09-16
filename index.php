<? include 'init.php'; ?>

<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/Article">
    <head>
        <meta charset="utf-8">




        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/main.css">




	    <? // Make sure all of the below meta and the link to font awesome fontawesome is included on every page that needs unique sharing or the sharing links ?>


	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	    <meta property="fb:app_id" content="" />

	    <meta property="og:title" content="" />
	    <meta property="og:type" content="website" />
	    <meta property="og:url" content="" />
	    <meta property="og:image" content="" />
	    <meta property="og:description" content="" />


	    <meta name="twitter:card" content="summary_large_image">
	    <meta name="twitter:site" content="">
	    <meta name="twitter:creator" content="">
	    <meta name="twitter:title" content="" />
	    <meta name="twitter:description" content="">
	    <meta name="twitter:image:src" content="">

	    <meta itemprop="name" content="" />
	    <meta itemprop="description" content="">
	    <meta itemprop="image" content="">

	    <? // ---> ?>


    </head>
    <body>


	<main class="container">

		<h1>Social Sharing Template</h1>


		<h2>Contents</h2>
		<ol>
			<li><a href="#usage">Using in your app</a></li>
			<li>
				<a href="#buttons">Buttons</a>
				<ol>
					<li><a href="#facebook">Facebook</a></li>
					<li><a href="#twitter">Twitter</a></li>
				</ol>
			</li>
		</ol>

		<section class="facebook">

			<h2>Usage in your app</h2><a name="usage"></a>
			<p>Usage to do</p>

		</section>



		<section class="facebook">
			<h2>Buttons</h2><a name="buttons"></a>
			<p class="warning">All examples below show what the icons will look like on white, light and dark backgrounds. The code <strong>will not</strong> add the grey boxes.</p>
		</section>


		
		<section class="facebook">
			
			<h3>Facebook</h3><a name="facebook"></a>
			<p>The template has Facebook colouring built in. Just include the colour <span class="code facebook"><i class="fa fa-square"></i>$facebook</span> in your SCSS to use it.</p>

			<h4>Facebook styles</h4>


			<div class="example">

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

<p>$args = array('network' => 'facebook');

Social_Buttons::build();</p>

				</div>

				<div class="clearfix"></div>

			</div>

			<div class="example">

				<div class="white-bg">

					<?
					$args = array('network' => 'facebook',
					              'rounded' => true);

					Social_Buttons::build($args);
					?>

				</div>

				<div class="light-bg">

					<?
					$args = array('network' => 'facebook',
					              'rounded' => true);

					Social_Buttons::build($args);
					?>

				</div>

				<div class="dark-bg">

					<?
					$args = array('network' => 'facebook',
					              'rounded' => true);

					Social_Buttons::build($args);
					?>

				</div>

				<div class="code-snippet">

<p>$args = array('network' => 'facebook',
              'rounded' => true);
Social_Buttons::build($args);</p>

				</div>

				<div class="clearfix"></div>

			</div>

			<div class="example">

				<div class="white-bg">

					<?
					$args = array('network' => 'facebook',
					              'round' => true);

					Social_Buttons::build($args);
					?>

				</div>

				<div class="light-bg">

					<?
					$args = array('network' => 'facebook',
					              'round' => true);

					Social_Buttons::build($args);
					?>

				</div>

				<div class="dark-bg">

					<?
					$args = array('network' => 'facebook',
					              'round' => true);

					Social_Buttons::build($args);
					?>

				</div>

				<div class="code-snippet">

<p>$args = array('network' => 'facebook',
              'round' => true);
Social_Buttons::build($args);</p>

				</div>

				<div class="clearfix"></div>

			</div>

			<div class="example">

				<div class="white-bg">

					<?
					$args = array('network' => 'facebook',
					              'invert' => true);

					Social_Buttons::build($args);
					?>

				</div>

				<div class="light-bg">

					<?
					$args = array('network' => 'facebook',
					              'invert' => true);

					Social_Buttons::build($args);
					?>

				</div>

				<div class="dark-bg">

					<?
					$args = array('network' => 'facebook',
					              'invert' => true);

					Social_Buttons::build($args);
					?>

				</div>

				<div class="code-snippet">

<p>$args = array('network' => 'facebook',
              'invert' => true);
Social_Buttons::build($args);</p>

				</div>

				<div class="clearfix"></div>

			</div>

			<div class="example">

				<div class="white-bg">

					<?
					$args = array('network' => 'facebook',
					              'rounded' => true, 
					              'invert' => true);

					Social_Buttons::build($args);
					?>

				</div>

				<div class="light-bg">

					<?
					$args = array('network' => 'facebook',
					              'rounded' => true, 
					              'invert' => true);

					Social_Buttons::build($args);
					?>

				</div>

				<div class="dark-bg">

					<?
					$args = array('network' => 'facebook',
					              'rounded' => true, 
					              'invert' => true);

					Social_Buttons::build($args);
					?>

				</div>

				<div class="code-snippet">

<p>$args = array('network' => 'facebook',
              'rounded' => true,
              'invert' => true);
Social_Buttons::build($args);</p>

				</div>

				<div class="clearfix"></div>

			</div>


			<div class="example">

				<div class="white-bg">

					<?
					$args = array('network' => 'facebook',
					              'round' => true,
					              'invert' => true);

					Social_Buttons::build($args);
					?>

				</div>

				<div class="light-bg">

					<?
					$args = array('network' => 'facebook',
					              'round' => true,
					              'invert' => true);

					Social_Buttons::build($args);
					?>

				</div>

				<div class="dark-bg">

					<?
					$args = array('network' => 'facebook',
					              'round' => true,
					              'invert' => true);

					Social_Buttons::build($args);
					?>

				</div>

				<div class="code-snippet">

<p>$args = array('network' => 'facebook',
              'round' => true,
              'invert' => true);
Social_Buttons::build($args);</p>

				</div>

				<div class="clearfix"></div>

			</div>


			<h4 >Facebook Link types</h4>

			<p>If you don't add in the link to the array the button will automatically share the page using social meta data.</p>
			<p>The top demo will be a normal share and the bottom share will be a link.</p>


			<div class="example">

				<div class="light-bg">

					<?
					$args = array('network' => 'facebook',
					              'link' => 'http://www.facebook.com/caliberi');

					Social_Buttons::build($args); ?>

				</div>

				<div class="code-snippet longer">

<p>$args(array('network' => 'facebook');

Social_Buttons::build($args);</p>

				</div>

				<div class="clearfix"></div>

			</div>

			<div class="example">

				<div class="light-bg">

					<?
					$args = array('network' => 'facebook',
					              'link' => 'http://www.facebook.com/caliberi');

					Social_Buttons::build($args); ?>

				</div>

				<div class="code-snippet longer">

<p>$args(array('network' => 'facebook',
            'link' => 'http://www.facebook.com/caliberi'));

Social_Buttons::build($args);</p>

				</div>

				<div class="clearfix"></div>

			</div>

		</section>


		
		
		

	</main>



    <script src="scripts/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="scripts/main.js"></script>
    </body>
</html>