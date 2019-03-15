 <?php
          $beer=['title' =>"guiness",
                  'img'   =>"guinessRsz.png",
                  'description'=>'blbaldpohddhfldskjldsldsg',
                  'bottlePrice'=>1.80];
          $beersOld=array($beer);
    $file="../asset/img/jm/beers.csv";
    $beers = array_map('str_getcsv', file($file));
    array_walk($beers, function(&$a) use ($beers) {
      $a = array_combine($beers[0], $a);
    });
    array_shift($beers); # remove column header
