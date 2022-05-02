<?php

class FichierJSON
{
     public $file_name;
     public $data;

    function ConvertirEnJSON()
    {
        if (file_exists($this->file_name)) {
            $current_data = file_get_contents($this->file_name);
            $array_data = json_decode($current_data, true);

            //Permet de ne pas écraser les dernière valeurs dans le fichier JSON
            $array_data[] = $this->data;

            return json_encode($array_data);
        } else {

            return json_encode($this->data);
        }

    }
}
