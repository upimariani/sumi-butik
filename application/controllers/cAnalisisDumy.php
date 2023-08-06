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


        echo '<table border="1">';
        echo '<tr>';
        echo '<td>R</td>';
        echo '<td>F</td>';
        echo '<td>M</td>';
        echo '<td>Centroid 1</td>';
        echo '<td>Centroid 2</td>';
        echo '<td>Status Klaster</td>';
        echo '</tr>';
        //menentukan keseluruhan c1 untuk semua pelanggan
        $klaster = array();
        $centroid1 = array();
        $centroid2 = array();
        for ($d = 0; $d < sizeof($norm_r); $d++) {
            $centroid1[] = sqrt((pow(($norm_r[$d] - $c1_r), 2)) + (pow(($norm_f[$d] - $c1_f), 2)) + (pow(($norm_m[$d] - $c1_m), 2)));
            $centroid2[] = sqrt((pow(($norm_r[$d] - $c2_r), 2)) + (pow(($norm_f[$d] - $c2_f), 2)) + (pow(($norm_m[$d] - $c2_m), 2)));
            echo '<tr>';
            echo '<td>' . $norm_r[$d] . '</td>';
            echo '<td>' . $norm_f[$d] . '</td>';
            echo '<td>' . $norm_m[$d] . '</td>';
            echo '<td>' . $centroid1[$d] . '</td>';
            echo '<td>' . $centroid2[$d] . '</td>';

            $data_min = min($centroid1[$d], $centroid2[$d]);
            if ($data_min == $centroid1[$d]) {
                $klaster[] = '1';
                echo '<td>Klaster 1</td>';
            } else if ($data_min == $centroid2[$d]) {
                $klaster[] = '2';
                echo '<td>Klaster 2</td>';
            }
            echo '</tr>';
        }
        echo '</table>';

        // ------------------------------------melakukan iterasi kedua

        for ($e = 0; $e < sizeof($norm_r); $e++) {
            $iterasi_pertama[] = ([$norm_r[$e], $norm_f[$e], $norm_m[$e], $centroid1[$e], $centroid2[$e], $klaster[$e]]);
        }

        $c1_r2 = 0;
        $c1_f2 = 0;
        $c1_m2 = 0;
        $jml_c1 = 0;

        $c2_r2 = 0;
        $c2_f2 = 0;
        $c2_m2 = 0;
        $jml_c2 = 0;

        for ($iterasi = 0; $iterasi < sizeof($iterasi_pertama); $iterasi++) {
            if ($iterasi_pertama[$iterasi][5] == '1') {
                // echo $iterasi_pertama[$iterasi][0] . ' | ' . $iterasi_pertama[$iterasi][5];
                // echo '<br>';
                $jml_c1 += 1;
                $c1_r2 += $iterasi_pertama[$iterasi][0];
                $c1_f2 += $iterasi_pertama[$iterasi][1];
                $c1_m2 += $iterasi_pertama[$iterasi][2];
            } else if ($iterasi_pertama[$iterasi][5] == '2') {
                $jml_c2 += 1;
                $c2_r2 += $iterasi_pertama[$iterasi][0];
                $c2_f2 += $iterasi_pertama[$iterasi][1];
                $c2_m2 += $iterasi_pertama[$iterasi][2];
            }
        }
        $k_c1_r = $c1_r2 / $jml_c1;
        $k_c1_f = $c1_f2 / $jml_c1;
        $k_c1_m = $c1_f2 / $jml_c1;

        $k_c2_r = $c2_r2 / $jml_c2;
        $k_c2_f = $c2_f2 / $jml_c2;
        $k_c2_m = $c2_f2 / $jml_c2;

        for ($f = 0; $f < sizeof($iterasi_pertama); $f++) {
            $centroid12[] = sqrt((pow(($iterasi_pertama[$f][0] - $k_c1_r), 2)) + (pow(($iterasi_pertama[$f][1] - $k_c1_f), 2)) + (pow(($iterasi_pertama[$f][2] - $k_c1_m), 2)));
            $centroid22[] = sqrt((pow(($iterasi_pertama[$f][0] - $k_c2_r), 2)) + (pow(($iterasi_pertama[$f][1] - $k_c2_f), 2)) + (pow(($iterasi_pertama[$f][2] - $k_c2_m), 2)));

            echo $iterasi_pertama[$f][0] . ' | ' . $iterasi_pertama[$f][1] . ' | ' . $iterasi_pertama[$f][2] . ' | ' . $centroid12[$f] . ' | ' . $centroid22[$f];
            $data_min2 = min($centroid12[$f], $centroid22[$f]);
            if ($data_min2 == $centroid12[$f]) {
                // $klaster[] = '1';
                echo 'Klaster 1';
            } else if ($data_min2 == $centroid22[$f]) {
                // $klaster[] = '2';
                echo 'Klaster 2';
            }
            echo '<br>';
        }
    }
}

/* End of file cAnalisisDumy.php */
