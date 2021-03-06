<!DOCTYPE html>
<html>
    <head>
        <title>Triangle Urban Debate League</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="css/pure.min.css" rel='stylesheet' type='text/css' />
        <link href="css/grids-responsive.min.css" rel='stylesheet' type='text/css' />
        <link href="css/base.css" rel='stylesheet' type='text/css' />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel='stylesheet' type='text/css' />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel='stylesheet' type='text/css' />
        <link href="/static/favicon.ico" rel='shortcut icon' />
    </head>
    <body>
        <div id="header">
           <?php include 'header.php';?>
        </div>
        
		<div id="huge-header" style="background-image: url(images/backgrounds/memorial.jpg)">
			<h1>Sample Page</h1>
		</div>
		
        <div id="content">
			<h1>The content div</h1>
			<p>Here's a place to put all of your funky text.</p>
			<h1>primary heading</h1>
			<h2>secondary heading</h2>
			<h3>tertiary heading</h3>
			<p>Paragraph. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			<p>Another paragraph. <strong>Strong.</strong> <em>Emphatic.</em> <a href="TODO">Link.</a></p>
			
			<p>Horizontal rule:</p>
			<hr>

			<ol>
			  <li>Ordered list.</li>
			  <li>foo</li>
			  <li>bar</li>
			  <li>baz</li>
			</ol>

			<ul>
			  <li>Unordered list.</li>
			  <li>foo</li>
			  <li>bar</li>
			  <li>baz</li>
			</ul>
			
			<p>
				<label>Form elements</label> <br>
				<button class="primary-button">Important Button</button> <button>Regular Button</button> <br>
				<input type="text" value="Input field"></input>
			</p>
        </div>

        <div id="footer">
            <?php include 'footer.php';?>
        </div>
        
        <script type="text/javascript">
            $(function() {
                if ($(document).width() <=  1200)
                    $(".header-nav").toggle();
                $("#toggleButton").click(function() {
                    $(".header-nav").slideToggle("slow");
                });
            });
            $(window).resize(function() {
                if (window.innerWidth >  1200)
                    $(".header-nav").show();
                else
                    $(".header-nav").hide();
            });
        </script>
    </body>
</html>
