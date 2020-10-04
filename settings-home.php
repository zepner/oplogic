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
				'rel' => 'home:lead:h1'
			],
			'value' => 'Business process automation.'
		],
		'h4' => [
			'attrs' => [
				'rel' => 'home:lead:h4'
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
	'split-1' => [
		'settings' => [
			'class' => 'brown-white-split nopad split-img center'
		],
		'div' => [
			'attrs' => [
				'rel' => 'home:split-img:div',
				'class' => 'nopad nomargin splitter'
			],
			'value' => '<img src="img/blur.jpg" data-src="img/warehouse-view.jpg" class="lazy" width="732" hright="286" style="margin:auto" /><span class="splitter"></span>'
		]
	],
	'lead-follow' => [
		'settings' => [
			'class' => 'white'
		],
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
				'class' => 'cta hide'
			],
			'value' => '<a href="/clients">Here\'s how we helped FTDI West</a> <span class="action">&rarr;</span>'
		]
	],
	'split-img' => [
		'settings' => [
			'class' => 'white-gray-split nopad height200'
		],
		'div' => [
			'attrs' => [
				'rel' => 'home:split-img:div',
				'class' => 'nopad nomargin splitter'
			],
			'value' => '<span class="splitter"></span><img src="img/blur.jpg" data-src="img/black-dots-lg.png" class="lazy" width="308" height="197" />'
		]
	],
	'methodology' => [
		'settings' => [
			'class' => 'gray'
		],
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
			'value' => '<a href="/methodology">How That Works</a> <span class="action">&rarr;</span>'
		]
	],
	'mapping' => [
		'settings' => [
			'class' => 'brown'
		],
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
		'settings' => [
			'class' => 'white center'
		],
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
			'value' => '<img src="img/ops-tech-venn-img.png" /><br>&nbsp;'
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
		'settings' => [
			'class' => 'gray'
		],
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
				'rel' => 'home:stories:hr',
				'class' => 'thick'
			],
			'value' => ''
		],
		'div-0' => [
			'attrs' => [
				'rel' => 'home:stories:list',
				'id' => 'stories'
			],
			'value' => "\n" . '<div class="story">
							<p class="client bold500">FTDI</p>
							<p class="task">Working with operations teams & floor managers to map every process to develop efficiencies through automation.</p>
							<p class="action red lpad hide">&rarr;</p>
						</div>
						<div class="story">
							<p class="client bold500">Colorado.gov</p>
							<p class="task">Instructed the site engineering team on platform migration of all sites after indexing all content and site operations.</p>
							<p class="action red lpad hide">&rarr;</p>
						</div>
						<div class="story">
							<p class="client bold500">Time Inc</p>
							<p class="task">Helped develop shortcuts and toolsets for the People.com team to make it easier to publish and distribute content packages.</p>
							<p class="action red lpad hide">&rarr;</p>
						</div>' . "\n"
		],
		'div-1' => [
			'attrs' => [
				'rel' => 'home:stories:cta',
				'class' => 'cta hide'
			],
			'value' => '<a href="/methodology">See More Happy Clients</a> <span class="action">&rarr;</span>'
		]
	],
	'recommendations' => [
		'settings' => [
			'class' => 'white center'
		],
		'h2' => [
			'attrs' => [
				'rel' => 'home:recommendations:h2'
			],
			'value' => 'Highly recommended'
		],
		'p' => [
			'attrs' => [
				'rel' => 'home:recommendations:p',
				'class' => 'xl nomargin'
			],
			'value' => '&darr;'
		],
		'div' => [
			'attrs' => [
				'rel' => 'home:recommendations:div',
				'class' => ''
			],
			'value' => '<div class="reco">
							<h4 class="statement red bold500">"Always looking for a better solution and excels with out of the box thinking. I cannot recommend highly enough."</h4>
							<p class="name">Ian Jones</p>
							<p class="position">Marketing Tech</p>
						</div>'
		]
	],
	'who' => [
		'settings' => [
			'class' => 'white center nopad'
		],
		'p' => [
			'attrs' => [
				'rel' => 'home:who:p',
				'class' => ''
			],
			'value' => '<a href="/principals">Who Are We?</a>'
		]
	]
];
