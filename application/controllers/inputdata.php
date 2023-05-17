<?php

class inputdata extends CI_Controller

public function inputdata()
    {
        $nama = 'tata';
        $nim = 'G111220020';
        $umur = '0';
        $status ='Dewasa';
        $blade = new Blade(VIEWPATH, APPPATH . 'cache');
        echo $blade->make('tampil', ['nama' => $nama]['nim' => $nim ] ['umur' => $umur] ['status' => $status] )->render();
    }
    ?> 


    