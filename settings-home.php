<?php
$sections = [
	'lead' => [
		'h1' => [
			'attrs' => [
				'rel' => 'home:lead:h1'
			],
			'value' => 'Business processes, documented and automated.'
		],
		'h4' => [
			'attrs' => [
				'rel' => 'home:lead:p'
			],
			'value' => 'We help trim the time spent on daily tasks by automating steps that humans shouldn\'t be doing anyway.'
		],
		'div' => [
			'attrs' => [
				'rel' => 'home:lead:cta',
				'class' => 'cta'
			],
			'value' => '<a href="/methodology">Our methodology</a> <span class="action">&rarr;</span>'
		]
	],
	'lead-follow' => [
		'h2' => [
			'attrs' => [
				'rel' => 'home:lead_follow:h2'
			],
			'value' => 'Turn <u>tribal knowledge</u> into active workflows'
		],
		'h4' => [
			'attrs' => [
				'rel' => 'home:lead_follow:h5'
			],
			'value' => '..and save your staff from needlessly repetitive procedures.'
		],
		'h5' => [
			'attrs' => [
				'rel' => 'home:lead_follow:h4'
			],
			'value' => 'Add task-level tracking, and you\'ll know just how much time and money are being spent on floor operations.'
		],
		'div' => [
			'attrs' => [
				'rel' => 'home:lead_follow:cta',
				'class' => 'cta'
			],
			'value' => '<a href="/clients">Here\'s how we helped FTDI West</a> <span class="action">&rarr;</span>'
		]
	],
	'methodology' => [
		'h2' => [
			'attrs' => [
				'rel' => 'home:methodology:h2',
				'class' => 'red'
			],
			'value' => 'Software development in plain-english'
		],
		'h4' => [
			'attrs' => [
				'rel' => 'home:methodology:h5'
			],
			'value' => 'We\'ll integrate your company\'s existing terminology so no one has to learn a whole new language.'
		],
		'h5' => [
			'attrs' => [
				'rel' => 'home:methodology:h5'
			],
			'value' => 'A system truly built around existing people and processes.'
		],
		'div' => [
			'attrs' => [
				'rel' => 'home:methodology:p',
				'class' => 'cta'
			],
			'value' => '<a href="/methodology">Read more about How That Works</a> <span class="action">&rarr;</span>'
		]
	],
	'mapping' => [
		'h2' => [
			'attrs' => [
				'rel' => 'home:mapping:h2'
			],
			'value' => 'Business Logic Mapping'
		],
		'p' => [
			'attrs' => [
				'rel' => 'home:mapping:p',
				'class' => 'white'
			],
			'value' => 'You\'ll work with a systems architect to map out all of the entities that make up your operation as well as how each part is connected to the whole. <br><br>Then we set up a series of business rules that govern roles and permissions.'
		],
		'div' => [
			'attrs' => [
				'rel' => 'home:mapping:cta',
				'class' => 'cta'
			],
			'value' => '<a class="red" href="/methodology">Learn more about this process</a> <span class="action">&rarr;</span>'
		]
	],
	'partner' => [
		'h2-0' => [
			'attrs' => [
				'rel' => 'home:partner:h2'
			],
			'value' => 'Don’t make blind tech investments'
		],
		'div' => [
			'attrs' => [
				'rel' => 'home:partner:img',
				'id' => 'partner_img'
			],
			'value' => '<img src="img/partner_photo.png" />'
		],
		'h2-1' => [
			'attrs' => [
				'rel' => 'home:partner:p'
			],
			'value' => 'Your software & Integrations partner.'
		],
		'p' => [
			'attrs' => [
				'rel' => 'home:partner:p'					],
				'value' => 'A custom system built to support business operations and the people who comprise it. Better data, better reporting, better decisions.'
		]
	],
	'stories' => [
		'h1' => [
			'attrs' => [
				'rel' => 'home:stories:h1',
				'class' => 'red'
			],
			'value' => 'Client Stories'
		],
		'p' => [
			'attrs' => [
				'rel' => 'home:stories:p'					],
			'value' => 'Automation that directly trims workers\' average task time, leading to increased reliability and job satisfaction.'
		],
		'hr' => [
			'attrs' => [
				'rel' => 'home:stories:hr'
			],
			'value' => ''
		],
		'div-0' => [
			'attrs' => [
				'rel' => 'home:stories:list',
				'id' => 'stories'
			],
			'value' => "\n" . '<div class="story">
							<p class="client">FTDI</p>
							<p class="task">Working with operations teams...</p>
							<p class="action">&rarr;</p>
						</div>
						<div class="story">
							<p class="client">Colorado.gov</p>
							<p class="task">Helping engineering team migrate...</p>
							<p class="action">&rarr;</p>
						</div>
						<div class="story">
							<p class="client">Time Inc</p>
							<p class="task">Trimming minutes off of the editing process...</p>
							<p class="action">&rarr;</p>
						</div>' . "\n"
		],
		'div-1' => [
			'attrs' => [
				'rel' => 'home:stories:cta',
				'class' => 'cta'
			],
			'value' => '<a href="/clients">See More Happy Clients</a> <span class="action">&rarr;</span>'
		]
	],
	'recommendations' => [
		'h2' => [
			'attrs' => [
				'rel' => 'home:recommendations:h2'
			],
			'value' => 'Highly Recommended'
		],
		'p' => [
			'attrs' => [
				'rel' => 'home:recommendations:p'
			],
			'value' => 'Custom automation software built from the ground up to increase efficiency at every level.'
		]
	]
];
