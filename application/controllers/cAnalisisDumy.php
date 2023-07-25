<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cAnalisisDumy extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mAnalisisDumy');
    }


    public function index()
    {
        $data_dumy = $this->mAnalisisDumy->data_dumy();

        $recency = array();
        $frequency = array();
        $monetary = array();

        $norm_r = array();
        $norm_f = array();
        $norm_m = array();

        echo '<table border="1">';
        foreach ($data_dumy as $key => $value) {
            $recency[] = $value->recency;
            $frequency[] = $value->frequency;
            $monetary[] = $value->monetary;
            echo '<tr>';
            echo '<td>' . $value->id_pelanggan . '</td>';
            echo '<td>' . $value->recency . '</td>';
            echo '<td>' . $value->frequency . '</td>';
            echo '<td>' . $value->monetary . '</td>';
            echo '</tr>';
        }
        echo '</table>';
        $min_r = min($recency);
        $max_r = max($recency);

        for ($a = 0; $a < sizeof($recency); $a++) {
            $norm_r[] = round(($recency[$a] - $min_r) / ($max_r - $min_r), 2);
        }

        $min_f = min($frequency);
        $max_f = max($frequency);
        for ($b = 0; $b < sizeof($frequency); $b++) {
            $norm_f[] = round(($frequency[$b] - $min_f) / ($max_f - $min_f), 2);
        }

        $min_m = min($monetary);
        $max_m = max($monetary);
        for ($c = 0; $c < sizeof($monetary); $c++) {
            $norm_m[] = round(($monetary[$c] - $min_m) / ($max_m - $min_m), 2);
        }

        //menentukan nilai centroid 1
        $c1_r = $norm_r[0];
        $c1_f = $norm_f[0];
        $c1_m = $norm_m[0];

        //menentukan nilai centroid 2
        $c2_r = $norm_r[1];
        $c2_f = $norm_f[1];
        $c2_m = $norm_m[1];


        //menentukan keseluruhan c1 untuk semua pelanggan
        for ($d = 0; $d < sizeof($norm_r); $d++) {
            $centroid1 = sqrt((pow(($norm_r[$d] - $c1_r), 2)) + (pow(($norm_f[$d] - $c1_f), 2)) + (pow(($norm_m[$d] - $c1_m), 2)));
            $centroid2 = sqrt((pow(($norm_r[$d] - $c2_r), 2)) + (pow(($norm_f[$d] - $c2_f), 2)) + (pow(($norm_m[$d] - $c2_m), 2)));

            echo $centroid1 . ' | ' . $centroid2 . ' Min: ' . min($centroid1, $centroid2);
            $data_min = min($centroid1, $centroid2);
            if ($data_min == $centroid1) {
                echo 'Klaster 1';
            } else if ($data_min == $centroid2) {
                echo 'Klaster 2';
            }
            echo '<br>';
        }
    }
}

/* End of file cAnalisisDumy.php */
