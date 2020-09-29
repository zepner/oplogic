<?php

$settings = [];

$settings['global'] = [
	'page_title' => 'Operational Efficiency',
	'meta_desc' => ''
];

$settings['pages'] = [
	'home' => [
		'sections' => [
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
					'value' => 'Transparency, then efficiency'
				],
				'p' => [
					'attrs' => [
						'rel' => 'home:lead_follow:p'
					],
					'value' => 'Make the most of your staff by letting them focus on improvements and not the repetitive procedures that can be automated. Task-level tracking is a great way to guage just how time and money are being spent on floor operations.'
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
				'h5' => [
					'attrs' => [
						'rel' => 'home:methodology:h5'
					],
					'value' => 'A system truly built around existing people and processes.'
				],
				'h4' => [
					'attrs' => [
						'rel' => 'home:methodology:h5'
					],
					'value' => 'We\'ll integrate your company\'s existing terminology so no one has to learn a whole new language.'
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
						'rel' => 'home:mapping:p'
					],
					'value' => 'You\'ll work with a systems architect to map out all of the entities that make up your operation as well as how each part is connected to the whole. <br><br>Then we set up a series of business rules to govern how employees engage with all the various screens.'
				],
				'div' => [
					'attrs' => [
						'rel' => 'home:mapping:p',
						'class' => 'cta'
					],
					'value' => '<a href="/methodology">Learn more about this process</a> <span class="action">&rarr;</span>'
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
						'value' => 'A custom system built to support business operations and the people who comprise it along with reporting that simplifies intelligence gathering.'
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
					'value' => 'Automation that directly trims the time it takes for employees to accomplish their tasks, providing increased reliability and job satisfaction.'
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
					'value' => 'Automation that directly trims the time it takes for employees to accomplish their tasks, providing increased reliability and job satisfaction.'
				]
			]
		]
	]
];