# Good Icons

Good Icons is a blend of [Material Design Icons](http://fontawesome.io/icons/) and [Font Awesome](http://fontawesome.io/icons/) icons. 


## Getting Started

You can include the library using CSS: 

	<link href="css/goodicons.css" rel="stylesheet">

Or via SASS import:

	@include 'scss/goodicons'; 


## Usage

Due to the fundamental differences of Font Awesome and Material Icons it's tricky to use both in a project. We've developed a PHP helper to output the appropriate markup for either library. This helper would be easy to convert for other languages as required. 

The output style follows Font Awesome's conventions in favour of Material Icons. 


- All Font Awesome icons should be prefixed with `fa-` (`fa-` will be assumed if omitted)
- All Material icons *must* be prefixed with `md-` 
- Material icons can be named with a hyphen instead of an underscore (Font Awesome style), if preferred. 


## Examples


### The normal way
Use Font Awesome or Material Icons just how they intended to be used. 

	<html>
		<head>
			<link href="css/goodicons.css" rel="stylesheet">
		</head>
		<body>

			<i class="fa fa-download"></i> Download (Font Awesome icon)
			<i class="material-icons">file_download</i>Download (Material Icon)

		</body>
	</html>



### Using the PHP helper
	
	
	<?php include 'helpers/goodicons.php'; ?>
	<html>
		<head>
			<link href="css/goodicons.css" rel="stylesheet">
		</head>
		<body>

			<h1> <?=icon('world')?> Hello World</h1>
		
			<?=icon('download')?> Download (Font Awesome icon)
			<?=icon('fa-download')?> Download (Font Awesome icon)
			<?=icon('md-file-download')?> Download (Material Icon)
			<?=icon('md-file_download')?> Download (Material Icon)

		</body>
	</html>



	
## To do
- Helpers for languages other than PHP...

### License

We have made these icons available for you to incorporate them into your products under the Creative Common Attribution 4.0 International License (CC-BY 4.0). Feel free to remix and re-share these icons and documentation in your products. We'd love attribution in your app's about screen, but it's not required. The only thing we ask is that you not re-sell the icons themselves.