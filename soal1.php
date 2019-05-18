<?php
  function getBiodata()
  {
    //membuat class anonim
    $biodata = new stdClass();
    $biodata->name = "Candra Aditya";
    $biodata->address = "Jakarta Timur";
    $biodata->hobbies = array('coding','Doodling');
    $biodata->is_maried = false;
    $biodata->school =  array('HighSchool' => 'SMAN 51 Jakarta', 'Universitas' => 'None');
    $biodata->skills =  array(
                              array('name' => 'PHP', 'score' => 55 ),
                              array('name' => 'PYTHON', 'score' => 75 )
                        );
    //mengembalikan data dalam bentuk json
    return json_encode($biodata);
  }
  //jalankan fungsi di bawah
  echo getBiodata();
?>