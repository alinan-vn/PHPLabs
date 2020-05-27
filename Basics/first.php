<?php
    echo "My first string";
    echo "\nHello, World!";

    echo "\n \n";
    echo "1. Learn PHP";
    echo  "\n2. Practice PHP";
    echo "\n3. Research \"PHP\" frameworks";

    echo "\n \n";
    echo "\nMy name is:"." Alej";
    echo "\n"."tur"."duck"."en";

    echo "\n \n";
    $today = "statement";
    $biography = "\nI enjoy puzzle type games.";
    $favorite_food = "\n"."tur"."duck"."en";
    echo $today.$biography.$favorite_food;

    echo "\n \n";
    $name = "Robert";
    $language = "PHP";
    echo "This guy's name is " . $name;
    echo "\nAlso I am learning " . $language;

    echo "\n \n";
    $noun = "House";
    $adjective = "funky";
    $verb = "fall";
    echo "The world's most beloved $noun was very $adjective and loved to $verb every single day.";
    echo "\nI have always been obsessed with ${noun}s. I'm ${adjective}ish. I'm always ${verb}ing.";

    echo "\n \n";
    $movie = "Mr Nobody";
    $old_favorite = $movie;
    echo "I'm a fickle person, my favorite movie used to be $movie.";
    $movie = "Free Solo";
    echo "\nBut now my favorite is $movie.";
    echo "\nIn order they are $old_favorite and $movie";
  
    echo "\n \n";
    echo "I'm going on a picnic!";
    $sentence = "\nI'm going on a picnic, and I'm taking apples";
    echo $sentence;
    $sentence .= ", berries";
    echo $sentence;
    $sentence .= ", candy";
    echo $sentence;  

    echo "\n \n";
    $very_bad_unclear_name = "15 chicken wings";
    $order =& $very_bad_unclear_name;
    $order .= ", 20 chicken beaks";
    echo "\nYour order is: $very_bad_unclear_name.";

    echo "\n \n";
    $first = 5;
    echo $first;
    echo "\n";
    $second = 3.2;
    echo $second;

    echo "\n \n";
    $last_month = 1187.23;
    $this_month = 1089.98;
    echo $last_month - $this_month;

    echo "\n \n";
    $num_languages = 4;
    $months = 11;
    $days = $months * 16;
    $days_per_language = $days / $num_languages;
    echo $days_per_language; 

    echo "\n \n";


    echo "\n \n";

    echo "\n \n";

    echo "\n \n";

    echo "\n \n";

    echo "\n \n";