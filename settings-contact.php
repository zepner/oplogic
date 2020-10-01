<?php
$sections = [
	'settings' => [
	],
	'lead' => [
		'settings' => [
			'class' => 'brown'
		],
		'h1' => [
			'attrs' => [
				'rel' => 'contact:lead:h1'
			],
			'value' => 'Get in Touch.'
		],
		'h4' => [
			'attrs' => [
				'rel' => 'contact:lead:h4'
			],
			'value' => 'Barbara Jaynes'
		],
		'p' => [
			'attrs' => [
				'rel' => 'contact:lead:h4'
			],
			'value' => 'Business Development<br>
				<a href="mailto:business@operationallogic.com">business@operationallogic.com</a><br>
				<a href="tel:3039937124">303-993-7124</a>'
		]
	],
	'lead-follow' => [
		'settings' => [
			'class' => 'white center'
		],
		'h4' => [
			'attrs' => [
				'rel' => 'contact:lead-follow:h4'
			],
			'value' => '"Started making improvements from day one. Getting more complete visibility from backend through delivery has been a game-changer. OpLogic save us from the constant headaches and saved us cash."'
		],
		'h5' => [
			'attrs' => [
				'rel' => 'contact:lead-follow:h5'
			],
			'value' => 'Bryan, Operations, FTDI West'
		]
	],
	'split-img' => [
		'settings' => [
			'class' => 'white-gray-split nopad'
		],
		'div' => [
			'attrs' => [
				'rel' => 'contact:split-img:div',
				'class' => 'nopad nomargin splitter'
			],
			'value' => '<span class="splitter"></span><img src="img/blur.jpg" data-src="img/black-dots-lg.png" class="lazy" width="308" height="197" />'
		]
	],
	'stories' => [
		'settings' => [
			'class' => 'gray'
		],
		'h2' => [
			'attrs' => [
				'rel' => 'contact:stories:h2'
			],
			'value' => 'Client Stories'
		],
		'div' => [
			'attrs' => [
				'rel' => 'home:stories:list',
				'id' => 'stories'
			],
			'value' => "\n" . '<div class="story">
							<p class="client bold500">FTDI</p>
							<p class="task">Working with operations teams & floor managers to map every process to develop efficiencies through automation.</p>
							<p class="action red lpad">&rarr;</p>
						</div>
						<div class="story">
							<p class="client bold500">Colorado.gov</p>
							<p class="task">Instructed the site engineering team on platform migration of all sites after indexing all content and site operations.</p>
							<p class="action red lpad">&rarr;</p>
						</div>
						<div class="story">
							<p class="client bold500">Time Inc</p>
							<p class="task">Helped develop shortcuts and toolsets for the People.com team to make it easier to publish and distribute content packages.</p>
							<p class="action red lpad">&rarr;</p>
						</div>' . "\n"
		]
	]
];
