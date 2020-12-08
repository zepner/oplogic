<?php
    $slides = [];
    $slides['intro'] = [
        'title' => 'What do <em>you</em> want for your company?',
        'content' => '<ul><li>Efficiency</li><li>Happy employees</li><li>A better workflow</li></ul>',
        'color' => '#a2bc3f',
        'image' => 'apple'
    ];
    $slides['intro_1'] = [
        'title' => 'You can enjoy the process of building from the ground up',
        'content' => '<ul><li>Avoid quick solutions</li><li>Tailored to your needs</li><li>Save you money</li></ul>',
        'color' => '#a2bc3f',
        'image' => 'apple'
    ];
    $slides['intro_2'] = [
        'title' => 'Who am I and Why am I here?',
        'color' => '#a2bc3f',
        'image' => 'apple'
    ];
    $slides['happy'] = [
        'title' => 'Does your current software make you happy?',
        'content' => '<ul><li>Outdated</li><li>Rigid</li><li>Efficient</li></ul>',
        'color' => '#efc74f',
        'image' => 'banana'
    ];
    $slides['happy_2'] = [
        'title' => 'Do you know how data is moving in and out of your system?',
        'content' => '<ul><li>EDI</li><li>Tailored to your needs</li><li>Save you money</li></ul>',
        'color' => '#efc74f',
        'image' => 'banana'
    ];
?>

<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>OpLogic Deck</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"/>
        <link rel="stylesheet" href="deck/style.css"/>
    </head>
    <body>
    
    <!-- Slider Wrapper -->
    <div class="card">
        <div class="products">
        
        <?php
            $i = 0;
            foreach ($slides as $key => $slide) {
                $i++;
                $active_class = ($i == 1) ? ' active' : '';
                print "\n\n" . '<div class="product' . $active_class . '" product-id="' . $i . '" product-color="' . $slide['color'] . '">';
                print "\n" . '<div class="slider-content">';
                print '<h1 class="title">' . $slide['title'] . '</h1>';
                print (isset($slide['content'])) ? '<div class="description">' . $slide['content'] . '</div>' : '';
                print '</div>';
                print "\n" . '<div class="thumbnail"><img src="deck/images/' . $slide['image'] . '.png" alt=""/></div>';
                print "\n" . '</div>';
            }
        ?>
        </div>
        
    </div>
    <div class="footer"><a class="btn" id="prev" href="#" ripple="" ripple-color="#666666">Prev</a><a class="btn" id="next" href="#" ripple="" ripple-color="#666666">Next</a></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
    <script src="deck/app.js" charset="utf-8"></script>
    <body>
</html>