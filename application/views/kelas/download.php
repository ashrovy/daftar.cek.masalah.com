<html>
  <head>
    
  </head>

  <body>

    <? foreach($queri as $ket): ?>
    <div class="panel-body">
        
        <div class="panel panel-default">
        <div class="panel-heading">
        <h3 class="panel-title">Analisis Kelompok Daftar Cek Masalah</h3>
        </div>
        <div class="panel-body">
            <ul class="list-group"> <!-- list group -->
            <li class="list-group-item">                
                Kelas: <? echo $ket->kelas;?></li>
            <li class="list-group-item">                
                ID Kelas: <? echo $ket->id; ?></li>      
            <li class="list-group-item">                
                Jumlah Siswa: <? echo $ket->jmlSiswa;?></li>     
        </ul>
        </div>
        </div>

      </div>
    <? endforeach; ?>

  <?php if($query): foreach($query as $post): ?>   
            
     <div class="panel-body">       
                <div class="tab-content">
                  <div class="tab-pane fade in active" id="b1">
                    <table class="table table-hover table-bordered">
                      <tr class="tooltips">
                        <th rowspan="2"><a data-toggle="tooltip" data-original-title="Nomor Item Soal"><font size="" align="center">No</font></a></th>
                        <th colspan="4">Masalah Kesehatan
                            <a href="<?  echo base_url('index.php/kelas/chartBag1/'. $post->kelas); ?>" class="pull-right" data-placement="left" data-toggle="tooltip" data-original-title="Lihat  ">
                            <span class="glyphicon glyphicon-stats"></span>
                             </a> <!-- -->                         
                        </th>
                      </tr>                   
                      <tr class="tooltips">
                        <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang bermasalah untuk item tertentu">Mm</a></th>
                        <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang mengerjakan Daftar Cek Masalah">m</a></th>
                        <th><a data-toggle="tooltip" data-original-title="Hasil analisis per-item soal">%</a></th>
                        <th><a data-toggle="tooltip" data-original-title="Keterangan hasil analisis">KET</a></th>
                      </tr>
                        <tr>    
                        <td>1</td>    
                        <td><? echo $post->soal1; ?></td>
                        <td><? echo $post->jmlKelas; ?></td>
                        <td><? echo $post->h1; ?></td>
                        <td><? echo $post->score1;?></td>
                      </tr>
                      <tr>    
                        <td>2</td>    
                        <td><? echo $post->soal2; ?></td>
                        <td><? echo $post->jmlKelas; ?></td>
                        <td><? echo $post->h2; ?></td>
                        <td><? echo $post->score2;?></td>
                      </tr>
                      <tr>    
                        <td>3</td>    
                        <td><? echo $post->soal3; ?></td>
                        <td><? echo $post->jmlKelas; ?></td>
                        <td><? echo $post->h3; ?></td>
                        <td><? echo $post->score3;?></td>
                      </tr>
                      <tr>    
                        <td>4</td>    
                        <td><? echo $post->soal4; ?></td>
                        <td><? echo $post->jmlKelas; ?></td>
                        <td><? echo $post->h4; ?></td>
                        <td><? echo $post->score4;?></td>
                      </tr>
                      <tr>    
                        <td>5</td>    
                        <td><? echo $post->soal5; ?></td>
                        <td><? echo $post->jmlKelas; ?></td>
                        <td><? echo $post->h5; ?></td>
                        <td><? echo $post->score5;?></td>
                      </tr>
                      <tr>    
                        <td>6</td>    
                        <td><? echo $post->soal6; ?></td>
                        <td><? echo $post->jmlKelas; ?></td>
                        <td><? echo $post->h6; ?></td>
                        <td><? echo $post->score6;?></td>
                      </tr>
                      <tr>    
                        <td>7</td>    
                        <td><? echo $post->soal7; ?></td>
                        <td><? echo $post->jmlKelas; ?></td>
                        <td><? echo $post->h7; ?></td>
                        <td><? echo $post->score7;?></td>
                      </tr>
                      <tr>    
                        <td>8</td>    
                        <td><? echo $post->soal8; ?></td>
                        <td><? echo $post->jmlKelas; ?></td>
                        <td><? echo $post->h8; ?></td>
                        <td><? echo $post->score8;?></td>
                      </tr>
                      <tr>    
                        <td>9</td>    
                        <td><? echo $post->soal9; ?></td>
                        <td><? echo $post->jmlKelas; ?></td>
                        <td><? echo $post->h9; ?></td>
                        <td><? echo $post->score9;?></td>
                      </tr>
                      <tr>    
                        <td>10</td>    
                        <td><? echo $post->soal10; ?></td>
                        <td><? echo $post->jmlKelas; ?></td>
                        <td><? echo $post->h10; ?></td>
                        <td><? echo $post->score10;?></td>
                      </tr>
                      <tr>    
                        <td>11</td>    
                        <td><? echo $post->soal11; ?></td>
                        <td><? echo $post->jmlKelas; ?></td>
                        <td><? echo $post->h11; ?></td>
                        <td><? echo $post->score11;?></td>
                      </tr>
                      <tr>    
                        <td>12</td>    
                        <td><? echo $post->soal12; ?></td>
                        <td><? echo $post->jmlKelas; ?></td>
                        <td><? echo $post->h12; ?></td>
                        <td><? echo $post->score12;?></td>
                      </tr>
                      <tr>    
                        <td>13</td>    
                        <td><? echo $post->soal13; ?></td>
                        <td><? echo $post->jmlKelas; ?></td>
                        <td><? echo $post->h13; ?></td>
                        <td><? echo $post->score13;?></td>
                      </tr>
                      <tr>    
                        <td>14</td>    
                        <td><? echo $post->soal14; ?></td>
                        <td><? echo $post->jmlKelas; ?></td>
                        <td><? echo $post->h14; ?></td>
                        <td><? echo $post->score14;?></td>
                      </tr>
                      <tr>    
                        <td>15</td>    
                        <td><? echo $post->soal15; ?></td>
                        <td><? echo $post->jmlKelas; ?></td>
                        <td><? echo $post->h15; ?></td>
                        <td><? echo $post->score15;?></td>
                      </tr>
                      <tr>    
                        <td>16</td>    
                        <td><? echo $post->soal16; ?></td>
                        <td><? echo $post->jmlKelas; ?></td>
                        <td><? echo $post->h16; ?></td>
                        <td><? echo $post->score16;?></td>
                      </tr>
                      <tr>    
                        <td>17</td>    
                        <td><? echo $post->soal17; ?></td>
                        <td><? echo $post->jmlKelas; ?></td>
                        <td><? echo $post->h17; ?></td>
                        <td><? echo $post->score17;?></td>
                      </tr>
                      <tr>    
                        <td>18</td>    
                        <td><? echo $post->soal18; ?></td>
                        <td><? echo $post->jmlKelas; ?></td>
                        <td><? echo $post->h18; ?></td>
                        <td><? echo $post->score18;?></td>
                      </tr>
                      <tr>    
                        <td>19</td>    
                        <td><? echo $post->soal19; ?></td>
                        <td><? echo $post->jmlKelas; ?></td>
                        <td><? echo $post->h19; ?></td>
                        <td><? echo $post->score19;?></td>
                      </tr>
                      <tr>    
                        <td>20</td>    
                        <td><? echo $post->soal20; ?></td>
                        <td><? echo $post->jmlKelas; ?></td>
                        <td><? echo $post->h20; ?></td>
                        <td><? echo $post->score20;?></td>
                      </tr>
                      <tr>    
                        <td>21</td>    
                        <td><? echo $post->soal21; ?></td>
                        <td><? echo $post->jmlKelas; ?></td>
                        <td><? echo $post->h21; ?></td>
                        <td><? echo $post->score21;?></td>
                      </tr>
                      <tr>    
                        <td>22</td>    
                        <td><? echo $post->soal22; ?></td>
                        <td><? echo $post->jmlKelas; ?></td>
                        <td><? echo $post->h22; ?></td>
                        <td><? echo $post->score22;?></td>
                      </tr>
                      <tr>    
                        <td>23</td>    
                        <td><? echo $post->soal23; ?></td>
                        <td><? echo $post->jmlKelas; ?></td>
                        <td><? echo $post->h23; ?></td>
                        <td><? echo $post->score23;?></td>
                      </tr>
                      <tr>    
                        <td>24</td>    
                        <td><? echo $post->soal24; ?></td>
                        <td><? echo $post->jmlKelas; ?></td>
                        <td><? echo $post->h24; ?></td>
                        <td><? echo $post->score24;?></td>
                      </tr>
                      <tr>    
                        <td>25</td>    
                        <td><? echo $post->soal25; ?></td>
                        <td><? echo $post->jmlKelas; ?></td>
                        <td><? echo $post->h25; ?></td>
                        <td><? echo $post->score25;?></td>
                      </tr>
                      <tr>    
                        <td>26</td>    
                        <td><? echo $post->soal26; ?></td>
                        <td><? echo $post->jmlKelas; ?></td>
                        <td><? echo $post->h26; ?></td>
                        <td><? echo $post->score26;?></td>
                      </tr>
                    </table>
                  </div>
                  <div class="tab-pane fade" id="b2">
                    <table class="table table-hover table-bordered">
                      <tr class="tooltips">
                        <th rowspan="2"><a data-toggle="tooltip" data-original-title="Nomor Item Soal"><font size="" align="center">No</font></a></th>
                        <th colspan="4">Masalah Keadaan Kehidupan Ekonomi
                            <a href="<?  echo base_url('index.php/kelas/chartBag2/'. $post->kelas); ?>" class="pull-right" data-placement="left" data-toggle="tooltip" data-original-title="Lihat  ">
                            <span class="glyphicon glyphicon-stats"></span>
                             </a>
                        </th>
                      </tr>                   
                      <tr class="tooltips">
                        <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang bermasalah untuk item tertentu">Mm</a></th>
                        <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang mengerjakan Daftar Cek Masalah">m</a></th>
                        <th><a data-toggle="tooltip" data-original-title="Hasil analisis per-item soal">%</a></th>
                        <th><a data-toggle="tooltip" data-original-title="Keterangan hasil analisis">KET</a></th>
                      </tr>
                      <tr>    
    <td>27</td>    
    <td><? echo $post->soal27; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h27; ?></td>
    <td><? echo $post->score27;?></td>
  </tr>
  <tr>    
    <td>28</td>    
    <td><? echo $post->soal28; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h28; ?></td>
    <td><? echo $post->score28;?></td>
  </tr>
  <tr>    
    <td>29</td>    
    <td><? echo $post->soal29; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h29; ?></td>
    <td><? echo $post->score29;?></td>
  </tr>
  <tr>    
    <td>30</td>    
    <td><? echo $post->soal30; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h30; ?></td>
    <td><? echo $post->score30;?></td>
  </tr>
  <tr>    
    <td>31</td>    
    <td><? echo $post->soal31; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h31; ?></td>
    <td><? echo $post->score31;?></td>
  </tr>
  <tr>    
    <td>32</td>    
    <td><? echo $post->soal32; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h32; ?></td>
    <td><? echo $post->score32;?></td>
  </tr>
  <tr>    
    <td>33</td>    
    <td><? echo $post->soal33; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h33; ?></td>
    <td><? echo $post->score33;?></td>
  </tr>
  <tr>    
    <td>34</td>    
    <td><? echo $post->soal34; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h34; ?></td>
    <td><? echo $post->score34;?></td>
  </tr>
  <tr>    
    <td>35</td>    
    <td><? echo $post->soal35; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h35; ?></td>
    <td><? echo $post->score35;?></td>
  </tr>
  <tr>    
    <td>36</td>    
    <td><? echo $post->soal36; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h36; ?></td>
    <td><? echo $post->score36;?></td>
  </tr>
  <tr>    
    <td>37</td>    
    <td><? echo $post->soal37; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h37; ?></td>
    <td><? echo $post->score37;?></td>
  </tr>
  <tr>    
    <td>38</td>    
    <td><? echo $post->soal38; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h38; ?></td>
    <td><? echo $post->score38;?></td>
  </tr>
  <tr>    
    <td>39</td>    
    <td><? echo $post->soal39; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h39; ?></td>
    <td><? echo $post->score39;?></td>
  </tr>
  <tr>    
    <td>40</td>    
    <td><? echo $post->soal40; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h40; ?></td>
    <td><? echo $post->score40;?></td>
  </tr>
  <tr>    
    <td>41</td>    
    <td><? echo $post->soal41; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h41; ?></td>
    <td><? echo $post->score41;?></td>
  </tr>
  <tr>    
    <td>42</td>    
    <td><? echo $post->soal42; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h42; ?></td>
    <td><? echo $post->score42;?></td>
  </tr>
  <tr>    
    <td>43</td>    
    <td><? echo $post->soal43; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h43; ?></td>
    <td><? echo $post->score43;?></td>
  </tr>
  <tr>    
    <td>44</td>    
    <td><? echo $post->soal44; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h44; ?></td>
    <td><? echo $post->score44;?></td>
  </tr>
  <tr>    
    <td>45</td>    
    <td><? echo $post->soal45; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h45; ?></td>
    <td><? echo $post->score45;?></td>
  </tr>
  <tr>    
    <td>46</td>    
    <td><? echo $post->soal46; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h46; ?></td>
    <td><? echo $post->score46;?></td>
  </tr>
                    </table>
                  </div>
                  <div class="tab-pane fade" id="b3">
                    <table class="table table-hover table-bordered">
                      <tr>
                        <th rowspan="2"><a data-toggle="tooltip" data-original-title="Nomor Item Soal"><font size="" align="center">No</font></a></th>
                        <th colspan="4">Masalah Keluarga
                        <a href="<?  echo base_url('index.php/kelas/chartBag3/'. $post->kelas); ?>" class="pull-right" data-placement="left" data-toggle="tooltip" data-original-title="Lihat  ">
                            <span class="glyphicon glyphicon-stats"></span>
                             </a>
                        </th>
                      </tr>                     
                      <tr class="tooltips">
                        <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang bermasalah untuk item tertentu">Mm</a></th>
                        <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang mengerjakan Daftar Cek Masalah">m</a></th>
                        <th><a data-toggle="tooltip" data-original-title="Hasil analisis per-item soal">%</a></th>
                        <th><a data-toggle="tooltip" data-original-title="Keterangan hasil analisis">KET</a></th>
                      </tr>
                        <tr>    
    <td>47</td>    
    <td><? echo $post->soal47; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h47; ?></td>
    <td><? echo $post->score47;?></td>
  </tr>
  <tr>    
    <td>48</td>    
    <td><? echo $post->soal48; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h48; ?></td>
    <td><? echo $post->score48;?></td>
  </tr>
  <tr>    
    <td>49</td>    
    <td><? echo $post->soal49; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h49; ?></td>
    <td><? echo $post->score49;?></td>
  </tr>
  <tr>    
    <td>50</td>    
    <td><? echo $post->soal50; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h50; ?></td>
    <td><? echo $post->score50;?></td>
  </tr>
  <tr>    
    <td>51</td>    
    <td><? echo $post->soal51; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h51; ?></td>
    <td><? echo $post->score51;?></td>
  </tr>
  <tr>    
    <td>52</td>    
    <td><? echo $post->soal52; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h52; ?></td>
    <td><? echo $post->score52;?></td>
  </tr>
  <tr>    
    <td>53</td>    
    <td><? echo $post->soal53; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h53; ?></td>
    <td><? echo $post->score53;?></td>
  </tr>
  <tr>    
    <td>54</td>    
    <td><? echo $post->soal54; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h54; ?></td>
    <td><? echo $post->score54;?></td>
  </tr>
  <tr>    
    <td>55</td>    
    <td><? echo $post->soal55; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h55; ?></td>
    <td><? echo $post->score55;?></td>
  </tr>
  <tr>    
    <td>56</td>    
    <td><? echo $post->soal56; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h56; ?></td>
    <td><? echo $post->score56;?></td>
  </tr>
  <tr>    
    <td>57</td>    
    <td><? echo $post->soal57; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h57; ?></td>
    <td><? echo $post->score57;?></td>
  </tr>
  <tr>    
    <td>58</td>    
    <td><? echo $post->soal58; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h58; ?></td>
    <td><? echo $post->score58;?></td>
  </tr>
  <tr>    
    <td>59</td>    
    <td><? echo $post->soal59; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h59; ?></td>
    <td><? echo $post->score59;?></td>
  </tr>
  <tr>    
    <td>60</td>    
    <td><? echo $post->soal60; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h60; ?></td>
    <td><? echo $post->score60;?></td>
  </tr>
  <tr>    
    <td>61</td>    
    <td><? echo $post->soal61; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h61; ?></td>
    <td><? echo $post->score61;?></td>
  </tr>
  <tr>    
    <td>62</td>    
    <td><? echo $post->soal62; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h62; ?></td>
    <td><? echo $post->score62;?></td>
  </tr>
  <tr>    
    <td>63</td>    
    <td><? echo $post->soal63; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h63; ?></td>
    <td><? echo $post->score63;?></td>
  </tr>
  <tr>    
    <td>64</td>    
    <td><? echo $post->soal64; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h64; ?></td>
    <td><? echo $post->score64;?></td>
  </tr>
  <tr>    
    <td>65</td>    
    <td><? echo $post->soal65; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h65; ?></td>
    <td><? echo $post->score65;?></td>
  </tr>
  <tr>    
    <td>66</td>    
    <td><? echo $post->soal66; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h66; ?></td>
    <td><? echo $post->score66;?></td>
  </tr>
                    </table>
                  </div>
                  <div class="tab-pane fade" id="b4">
                    <table class="table table-hover table-bordered">
                      <tr>
                        <th rowspan="2"><a data-toggle="tooltip" data-original-title="Nomor Item Soal"><font size="" align="center">No</font></a></th>
                        <th colspan="4">Masalah Agama dan Moral
                        <a href="<?  echo base_url('index.php/kelas/chartBag4/'. $post->kelas); ?>" class="pull-right" data-placement="left" data-toggle="tooltip" data-original-title="Lihat  ">
                            <span class="glyphicon glyphicon-stats"></span>
                             </a>
                        </th>
                      </tr>                   
                      <tr class="tooltips">
                        <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang bermasalah untuk item tertentu">Mm</a></th>
                        <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang mengerjakan Daftar Cek Masalah">m</a></th>
                        <th><a data-toggle="tooltip" data-original-title="Hasil analisis per-item soal">%</a></th>
                        <th><a data-toggle="tooltip" data-original-title="Keterangan hasil analisis">KET</a></th>
                      </tr>
                        <tr>    
    <td>67</td>    
    <td><? echo $post->soal67; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h67; ?></td>
    <td><? echo $post->score67;?></td>
  </tr>
  <tr>    
    <td>68</td>    
    <td><? echo $post->soal68; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h68; ?></td>
    <td><? echo $post->score68;?></td>
  </tr>
  <tr>    
    <td>69</td>    
    <td><? echo $post->soal69; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h69; ?></td>
    <td><? echo $post->score69;?></td>
  </tr>
  <tr>    
    <td>70</td>    
    <td><? echo $post->soal70; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h70; ?></td>
    <td><? echo $post->score70;?></td>
  </tr>
  <tr>    
    <td>71</td>    
    <td><? echo $post->soal71; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h71; ?></td>
    <td><? echo $post->score71;?></td>
  </tr>
  <tr>    
    <td>72</td>    
    <td><? echo $post->soal72; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h72; ?></td>
    <td><? echo $post->score72;?></td>
  </tr>
  <tr>    
    <td>73</td>    
    <td><? echo $post->soal73; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h73; ?></td>
    <td><? echo $post->score73;?></td>
  </tr>
  <tr>    
    <td>74</td>    
    <td><? echo $post->soal74; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h74; ?></td>
    <td><? echo $post->score74;?></td>
  </tr>
  <tr>    
    <td>75</td>    
    <td><? echo $post->soal75; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h75; ?></td>
    <td><? echo $post->score75;?></td>
  </tr>
  <tr>    
    <td>76</td>    
    <td><? echo $post->soal76; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h76; ?></td>
    <td><? echo $post->score76;?></td>
  </tr>
  <tr>    
    <td>77</td>    
    <td><? echo $post->soal77; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h77; ?></td>
    <td><? echo $post->score77;?></td>
  </tr>
  <tr>    
    <td>78</td>    
    <td><? echo $post->soal78; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h78; ?></td>
    <td><? echo $post->score78;?></td>
  </tr>
  <tr>    
    <td>79</td>    
    <td><? echo $post->soal79; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h79; ?></td>
    <td><? echo $post->score79;?></td>
  </tr>
  <tr>    
    <td>80</td>    
    <td><? echo $post->soal80; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h80; ?></td>
    <td><? echo $post->score80;?></td>
  </tr>
  <tr>    
    <td>81</td>    
    <td><? echo $post->soal81; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h81; ?></td>
    <td><? echo $post->score81;?></td>
  </tr>
  <tr>    
    <td>82</td>    
    <td><? echo $post->soal82; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h82; ?></td>
    <td><? echo $post->score82;?></td>
  </tr>
  <tr>    
    <td>83</td>    
    <td><? echo $post->soal83; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h83; ?></td>
    <td><? echo $post->score83;?></td>
  </tr>
  <tr>    
    <td>84</td>    
    <td><? echo $post->soal84; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h84; ?></td>
    <td><? echo $post->score84;?></td>
  </tr>
  <tr>    
    <td>85</td>    
    <td><? echo $post->soal85; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h85; ?></td>
    <td><? echo $post->score85;?></td>
  </tr>
  <tr>    
    <td>86</td>    
    <td><? echo $post->soal86; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h86; ?></td>
    <td><? echo $post->score86;?></td>
  </tr>
  <tr>    
    <td>87</td>    
    <td><? echo $post->soal87; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h87; ?></td>
    <td><? echo $post->score87;?></td>
  </tr>
  <tr>    
    <td>88</td>    
    <td><? echo $post->soal88; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h88; ?></td>
    <td><? echo $post->score88;?></td>
  </tr>
  <tr>    
    <td>89</td>    
    <td><? echo $post->soal89; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h89; ?></td>
    <td><? echo $post->score89;?></td>
  </tr>
  <tr>    
    <td>90</td>    
    <td><? echo $post->soal90; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h90; ?></td>
    <td><? echo $post->score90;?></td>
  </tr>
                    </table>
                  </div>
                  <div class="tab-pane fade" id="b5">
                    <table class="table table-hover table-bordered">
                      <tr>
                        <th rowspan="2"><a data-toggle="tooltip" data-original-title="Nomor Item Soal"><font size="" align="center">No</font></a></th>
                        <th colspan="4">Masalah Pribadi
                        <a href="<?  echo base_url('index.php/kelas/chartBag5/'. $post->kelas); ?>" class="pull-right" data-placement="left" data-toggle="tooltip" data-original-title="Lihat  ">
                            <span class="glyphicon glyphicon-stats"></span>
                             </a>
                        </th>
                      </tr>                   
                      <tr class="tooltips">
                        <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang bermasalah untuk item tertentu">Mm</a></th>
                        <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang mengerjakan Daftar Cek Masalah">m</a></th>
                        <th><a data-toggle="tooltip" data-original-title="Hasil analisis per-item soal">%</a></th>
                        <th><a data-toggle="tooltip" data-original-title="Keterangan hasil analisis">KET</a></th>
                      </tr>
                        <tr>    
    <td>91</td>    
    <td><? echo $post->soal91; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h91; ?></td>
    <td><? echo $post->score91;?></td>
  </tr>
  <tr>    
    <td>92</td>    
    <td><? echo $post->soal92; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h92; ?></td>
    <td><? echo $post->score92;?></td>
  </tr>
  <tr>    
    <td>93</td>    
    <td><? echo $post->soal93; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h93; ?></td>
    <td><? echo $post->score93;?></td>
  </tr>
  <tr>    
    <td>94</td>    
    <td><? echo $post->soal94; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h94; ?></td>
    <td><? echo $post->score94;?></td>
  </tr>
  <tr>    
    <td>95</td>    
    <td><? echo $post->soal95; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h95; ?></td>
    <td><? echo $post->score95;?></td>
  </tr>
  <tr>    
    <td>96</td>    
    <td><? echo $post->soal96; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h96; ?></td>
    <td><? echo $post->score96;?></td>
  </tr>
  <tr>    
    <td>97</td>    
    <td><? echo $post->soal97; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h97; ?></td>
    <td><? echo $post->score97;?></td>
  </tr>
  <tr>    
    <td>98</td>    
    <td><? echo $post->soal98; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h98; ?></td>
    <td><? echo $post->score98;?></td>
  </tr>
  <tr>    
    <td>99</td>    
    <td><? echo $post->soal99; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h99; ?></td>
    <td><? echo $post->score99;?></td>
  </tr>
  <tr>    
    <td>100</td>    
    <td><? echo $post->soal100; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h100; ?></td>
    <td><? echo $post->score100;?></td>
  </tr>
  <tr>    
    <td>101</td>    
    <td><? echo $post->soal101; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h101; ?></td>
    <td><? echo $post->score101;?></td>
  </tr>
  <tr>    
    <td>102</td>    
    <td><? echo $post->soal102; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h102; ?></td>
    <td><? echo $post->score102;?></td>
  </tr>
  <tr>    
    <td>103</td>    
    <td><? echo $post->soal103; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h103; ?></td>
    <td><? echo $post->score103;?></td>
  </tr>
  <tr>    
    <td>104</td>    
    <td><? echo $post->soal104; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h104; ?></td>
    <td><? echo $post->score104;?></td>
  </tr>
                    </table>
                  </div>
                  <div class="tab-pane fade" id="b6">
                    <table class="table table-hover table-bordered">
                      <tr>
                        <th rowspan="2"><a data-toggle="tooltip" data-original-title="Nomor Item Soal"><font size="" align="center">No</font></a></th>
                        <th colspan="4">Masalah Hubungan Sosial dan Berorganisasi
                        <a href="<?  echo base_url('index.php/kelas/chartBag6/'. $post->kelas); ?>" class="pull-right" data-placement="left" data-toggle="tooltip" data-original-title="Lihat  ">
                            <span class="glyphicon glyphicon-stats"></span>
                             </a>
                        </th>
                      </tr>                   
                      <tr class="tooltips">
                        <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang bermasalah untuk item tertentu">Mm</a></th>
                        <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang mengerjakan Daftar Cek Masalah">m</a></th>
                        <th><a data-toggle="tooltip" data-original-title="Hasil analisis per-item soal">%</a></th>
                        <th><a data-toggle="tooltip" data-original-title="Keterangan hasil analisis">KET</a></th>
                      </tr>
                        <tr>    
    <td>105</td>    
    <td><? echo $post->soal105; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h105; ?></td>
    <td><? echo $post->score105;?></td>
  </tr>
  <tr>    
    <td>106</td>    
    <td><? echo $post->soal106; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h106; ?></td>
    <td><? echo $post->score106;?></td>
  </tr>
  <tr>    
    <td>107</td>    
    <td><? echo $post->soal107; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h107; ?></td>
    <td><? echo $post->score107;?></td>
  </tr>
  <tr>    
    <td>108</td>    
    <td><? echo $post->soal108; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h108; ?></td>
    <td><? echo $post->score108;?></td>
  </tr>
  <tr>    
    <td>109</td>    
    <td><? echo $post->soal109; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h109; ?></td>
    <td><? echo $post->score109;?></td>
  </tr>
  <tr>    
    <td>110</td>    
    <td><? echo $post->soal110; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h110; ?></td>
    <td><? echo $post->score110;?></td>
  </tr>
  <tr>    
    <td>111</td>    
    <td><? echo $post->soal111; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h111; ?></td>
    <td><? echo $post->score111;?></td>
  </tr>
  <tr>    
    <td>112</td>    
    <td><? echo $post->soal112; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h112; ?></td>
    <td><? echo $post->score112;?></td>
  </tr>
  <tr>    
    <td>113</td>    
    <td><? echo $post->soal113; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h113; ?></td>
    <td><? echo $post->score113;?></td>
  </tr>
  <tr>    
    <td>114</td>    
    <td><? echo $post->soal114; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h114; ?></td>
    <td><? echo $post->score114;?></td>
  </tr>
  <tr>    
    <td>115</td>    
    <td><? echo $post->soal115; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h115; ?></td>
    <td><? echo $post->score115;?></td>
  </tr>
  <tr>    
    <td>108</td>    
    <td><? echo $post->soal108; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h108; ?></td>
    <td><? echo $post->score108;?></td>
  </tr>
  <tr>    
    <td>116</td>    
    <td><? echo $post->soal116; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h116; ?></td>
    <td><? echo $post->score116;?></td>
  </tr>
  <tr>    
    <td>117</td>    
    <td><? echo $post->soal117; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h117; ?></td>
    <td><? echo $post->score117;?></td>
  </tr>  
  <tr>    
    <td>118</td>    
    <td><? echo $post->soal118; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h118; ?></td>
    <td><? echo $post->score118;?></td>
  </tr>
  <tr>    
    <td>119</td>    
    <td><? echo $post->soal119; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h119; ?></td>
    <td><? echo $post->score119;?></td>
  </tr>
  <tr>    
    <td>120</td>    
    <td><? echo $post->soal120; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h120; ?></td>
    <td><? echo $post->score120;?></td>
  </tr>
  <tr>    
    <td>121</td>    
    <td><? echo $post->soal121; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h121; ?></td>
    <td><? echo $post->score121;?></td>
  </tr>
  <tr>    
    <td>122</td>    
    <td><? echo $post->soal122; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h122; ?></td>
    <td><? echo $post->score122;?></td>
  </tr>
  <tr>    
    <td>123</td>    
    <td><? echo $post->soal123; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h123; ?></td>
    <td><? echo $post->score123;?></td>
  </tr>
  <tr>    
    <td>124</td>    
    <td><? echo $post->soal124; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h124; ?></td>
    <td><? echo $post->score124;?></td>
  </tr>  
  <tr>    
    <td>125</td>    
    <td><? echo $post->soal125; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h125; ?></td>
    <td><? echo $post->score125;?></td>
  </tr>
  <tr>    
    <td>126</td>    
    <td><? echo $post->soal126; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h126; ?></td>
    <td><? echo $post->score126;?></td>
  </tr>
  <tr>    
    <td>127</td>    
    <td><? echo $post->soal127; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h127; ?></td>
    <td><? echo $post->score127;?></td>
  </tr>
  <tr>    
    <td>128</td>    
    <td><? echo $post->soal128; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h128; ?></td>
    <td><? echo $post->score128;?></td>
  </tr>
  <tr>    
    <td>129</td>    
    <td><? echo $post->soal129; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h129; ?></td>
    <td><? echo $post->score129;?></td>
  </tr>
  <tr>    
    <td>130</td>    
    <td><? echo $post->soal130; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h130; ?></td>
    <td><? echo $post->score130;?></td>
  </tr>
                    </table>
                  </div>
                  <div class="tab-pane fade" id="b7">
                    <table class="table table-hover table-bordered">
                      <tr>
                        <th rowspan="2"><a data-toggle="tooltip" data-original-title="Nomor Item Soal"><font size="" align="center">No</font></a></th>
                        <th colspan="4">Masalah Rekreasi/Hobi dan Waktu Luang
                        <a href="<?  echo base_url('index.php/kelas/chartBag7/'. $post->kelas); ?>" class="pull-right" data-placement="left" data-toggle="tooltip" data-original-title="Lihat  ">
                            <span class="glyphicon glyphicon-stats"></span>
                             </a>
                        </th>
                      </tr>                   
                      <tr class="tooltips">
                        <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang bermasalah untuk item tertentu">Mm</a></th>
                        <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang mengerjakan Daftar Cek Masalah">m</a></th>
                        <th><a data-toggle="tooltip" data-original-title="Hasil analisis per-item soal">%</a></th>
                        <th><a data-toggle="tooltip" data-original-title="Keterangan hasil analisis">KET</a></th>
                      </tr>
                    <tr>    
    <td>131</td>    
    <td><? echo $post->soal131; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h131; ?></td>
    <td><? echo $post->score131;?></td>
  </tr>
  <tr>    
    <td>132</td>    
    <td><? echo $post->soal132; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h132; ?></td>
    <td><? echo $post->score132;?></td>
  </tr>
  <tr>    
    <td>133</td>    
    <td><? echo $post->soal133; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h133; ?></td>
    <td><? echo $post->score133;?></td>
  </tr>
  <tr>    
    <td>134</td>    
    <td><? echo $post->soal134; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h134; ?></td>
    <td><? echo $post->score134;?></td>
  </tr>  
  <tr>    
    <td>135</td>    
    <td><? echo $post->soal135; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h135; ?></td>
    <td><? echo $post->score135;?></td>
  </tr>
  <tr>    
    <td>136</td>    
    <td><? echo $post->soal136; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h136; ?></td>
    <td><? echo $post->score136;?></td>
  </tr>
  <tr>    
    <td>137</td>    
    <td><? echo $post->soal137; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h137; ?></td>
    <td><? echo $post->score137;?></td>
  </tr>
  <tr>    
    <td>138</td>    
    <td><? echo $post->soal138; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h138; ?></td>
    <td><? echo $post->score138;?></td>
  </tr>
  <tr>    
    <td>139</td>    
    <td><? echo $post->soal139; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h139; ?></td>
    <td><? echo $post->score139;?></td>
  </tr>
  <tr>    
    <td>140</td>    
    <td><? echo $post->soal140; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h140; ?></td>
    <td><? echo $post->score140;?></td>
  </tr>
  <tr>    
    <td>141</td>    
    <td><? echo $post->soal141; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h141; ?></td>
    <td><? echo $post->score141;?></td>
  </tr>
  <tr>    
    <td>142</td>    
    <td><? echo $post->soal142; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h142; ?></td>
    <td><? echo $post->score142;?></td>
  </tr>  
  <tr>    
    <td>143</td>    
    <td><? echo $post->soal143; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h143; ?></td>
    <td><? echo $post->score143;?></td>
  </tr>
  <tr>    
    <td>144</td>    
    <td><? echo $post->soal144; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h144; ?></td>
    <td><? echo $post->score144;?></td>
  </tr>
  <tr>    
    <td>145</td>    
    <td><? echo $post->soal145; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h145; ?></td>
    <td><? echo $post->score145;?></td>
  </tr>
  <tr>    
    <td>146</td>    
    <td><? echo $post->soal146; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h146; ?></td>
    <td><? echo $post->score146;?></td>
  </tr>
  <tr>    
    <td>147</td>    
    <td><? echo $post->soal147; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h147; ?></td>
    <td><? echo $post->score147;?></td>
  </tr>
  <tr>    
    <td>148</td>    
    <td><? echo $post->soal148; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h148; ?></td>
    <td><? echo $post->score148;?></td>
  </tr>
  <tr>    
    <td>149</td>    
    <td><? echo $post->soal149; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h149; ?></td>
    <td><? echo $post->score149;?></td>
  </tr>
                    </table>
                  </div>
                </div>
            </div>
        </div>

    <div class="panel-body">        
                <div class="tab-content">
                  <div class="tab-pane fade in active" id="b8">
                    <table class="table table-hover table-bordered">
                      <tr>
                        <th rowspan="2"><a data-toggle="tooltip" data-original-title="Nomor Item Soal"><font size="" align="center">No</font></a></th>
                        <th colspan="4">Masalah Penyesuaian Terhadap Lingkungan Sekolah
                        <a href="<?  echo base_url('index.php/kelas/chartBag8/'. $post->kelas); ?>" class="pull-right" data-placement="left" data-toggle="tooltip" data-original-title="Lihat  ">
                            <span class="glyphicon glyphicon-stats"></span>
                             </a>
                        </th>
                      </tr>                   
                      <tr class="tooltips">
                        <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang bermasalah untuk item tertentu">Mm</a></th>
                        <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang mengerjakan Daftar Cek Masalah">m</a></th>
                        <th><a data-toggle="tooltip" data-original-title="Hasil analisis per-item soal">%</a></th>
                        <th><a data-toggle="tooltip" data-original-title="Keterangan hasil analisis">KET</a></th>
                      </tr>
                    <tr>    
    <td>150</td>    
    <td><? echo $post->soal150; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h150; ?></td>
    <td><? echo $post->score150;?></td>
  </tr>
  <tr>    
    <td>151</td>    
    <td><? echo $post->soal151; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h151; ?></td>
    <td><? echo $post->score151;?></td>
  </tr>
  <tr>    
    <td>152</td>    
    <td><? echo $post->soal152; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h152; ?></td>
    <td><? echo $post->score152;?></td>
  </tr>
  <tr>    
    <td>153</td>    
    <td><? echo $post->soal153; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h153; ?></td>
    <td><? echo $post->score153;?></td>
  </tr>  
  <tr>    
    <td>154</td>    
    <td><? echo $post->soal154; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h154; ?></td>
    <td><? echo $post->score154;?></td>
  </tr>
  <tr>    
    <td>155</td>    
    <td><? echo $post->soal155; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h155; ?></td>
    <td><? echo $post->score155;?></td>
  </tr>
  <tr>    
    <td>156</td>    
    <td><? echo $post->soal156; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h156; ?></td>
    <td><? echo $post->score156;?></td>
  </tr>
  <tr>    
    <td>157</td>    
    <td><? echo $post->soal157; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h157; ?></td>
    <td><? echo $post->score157;?></td>
  </tr>
  <tr>    
    <td>158</td>    
    <td><? echo $post->soal158; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h158; ?></td>
    <td><? echo $post->score158;?></td>
  </tr>
  <tr>    
    <td>159</td>    
    <td><? echo $post->soal159; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h159; ?></td>
    <td><? echo $post->score159;?></td>
  </tr>
  <tr>    
    <td>160</td>    
    <td><? echo $post->soal160; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h160; ?></td>
    <td><? echo $post->score160;?></td>
  </tr>
  <tr>    
    <td>161</td>    
    <td><? echo $post->soal161; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h161; ?></td>
    <td><? echo $post->score161;?></td>
  </tr>  
  <tr>    
    <td>162</td>    
    <td><? echo $post->soal162; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h162; ?></td>
    <td><? echo $post->score162;?></td>
  </tr>
  <tr>    
    <td>163</td>    
    <td><? echo $post->soal163; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h163; ?></td>
    <td><? echo $post->score163;?></td>
  </tr>
  <tr>    
    <td>164</td>    
    <td><? echo $post->soal164; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h164; ?></td>
    <td><? echo $post->score164;?></td>
  </tr>
  <tr>    
    <td>165</td>    
    <td><? echo $post->soal165; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h165; ?></td>
    <td><? echo $post->score165;?></td>
  </tr>
  <tr>    
    <td>166</td>    
    <td><? echo $post->soal166; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h166; ?></td>
    <td><? echo $post->score166;?></td>
  </tr>
  <tr>    
    <td>167</td>    
    <td><? echo $post->soal167; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h167; ?></td>
    <td><? echo $post->score167;?></td>
  </tr>
  <tr>    
    <td>168</td>    
    <td><? echo $post->soal168; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h168; ?></td>
    <td><? echo $post->score168;?></td>
  </tr>
  <tr>    
    <td>169</td>    
    <td><? echo $post->soal169; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h169; ?></td>
    <td><? echo $post->score169;?></td>
  </tr>  
  <tr>    
    <td>170</td>    
    <td><? echo $post->soal170; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h170; ?></td>
    <td><? echo $post->score170;?></td>
  </tr>
                    </table>
                  </div>
                  <div class="tab-pane fade" id="b9">
                    <table class="table table-hover table-bordered">
                      <tr>
                        <th rowspan="2"><a data-toggle="tooltip" data-original-title="Nomor Item Soal"><font size="" align="center">No</font></a></th>
                        <th colspan="4">Masalah Penyesuaian Terhadap Kurikulum
                        <a href="<?  echo base_url('index.php/kelas/chartBag9/'. $post->kelas); ?>" class="pull-right" data-placement="left" data-toggle="tooltip" data-original-title="Lihat  ">
                            <span class="glyphicon glyphicon-stats"></span>
                             </a>
                        </th>
                      </tr>                   
                      <tr class="tooltips">
                        <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang bermasalah untuk item tertentu">Mm</a></th>
                        <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang mengerjakan Daftar Cek Masalah">m</a></th>
                        <th><a data-toggle="tooltip" data-original-title="Hasil analisis per-item soal">%</a></th>
                        <th><a data-toggle="tooltip" data-original-title="Keterangan hasil analisis">KET</a></th>
                      </tr>
                        <tr>    
    <td>171</td>    
    <td><? echo $post->soal171; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h171; ?></td>
    <td><? echo $post->score171;?></td>
  </tr>
  <tr>    
    <td>172</td>    
    <td><? echo $post->soal172; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h172; ?></td>
    <td><? echo $post->score172;?></td>
  </tr>
  <tr>    
    <td>173</td>    
    <td><? echo $post->soal173; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h173; ?></td>
    <td><? echo $post->score173;?></td>
  </tr>
  <tr>    
    <td>174</td>    
    <td><? echo $post->soal174; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h174; ?></td>
    <td><? echo $post->score174;?></td>
  </tr>  
  <tr>    
    <td>175</td>    
    <td><? echo $post->soal175; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h175; ?></td>
    <td><? echo $post->score175;?></td>
  </tr>
  <tr>    
    <td>176</td>    
    <td><? echo $post->soal176; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h176; ?></td>
    <td><? echo $post->score176;?></td>
  </tr>
  <tr>    
    <td>177</td>    
    <td><? echo $post->soal177; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h177; ?></td>
    <td><? echo $post->score177;?></td>
  </tr>
  <tr>    
    <td>178</td>    
    <td><? echo $post->soal178; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h178; ?></td>
    <td><? echo $post->score178;?></td>
  </tr>
  <tr>    
    <td>179</td>    
    <td><? echo $post->soal179; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h179; ?></td>
    <td><? echo $post->score179;?></td>
  </tr>
  <tr>    
    <td>180</td>    
    <td><? echo $post->soal180; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h180; ?></td>
    <td><? echo $post->score180;?></td>
  </tr>
  <tr>    
    <td>181</td>    
    <td><? echo $post->soal181; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h181; ?></td>
    <td><? echo $post->score181;?></td>
  </tr>
  <tr>    
    <td>182</td>    
    <td><? echo $post->soal182; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h182; ?></td>
    <td><? echo $post->score182;?></td>
  </tr>  
  <tr>    
    <td>183</td>    
    <td><? echo $post->soal183; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h183; ?></td>
    <td><? echo $post->score183;?></td>
  </tr>
  <tr>    
    <td>184</td>    
    <td><? echo $post->soal184; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h184; ?></td>
    <td><? echo $post->score184;?></td>
  </tr>
  <tr>    
    <td>185</td>    
    <td><? echo $post->soal185; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h185; ?></td>
    <td><? echo $post->score185;?></td>
  </tr>
                    </table>
                  </div>
                  <div class="tab-pane fade" id="b10">
                    <table class="table table-hover table-bordered">
                      <tr>
                        <th rowspan="2"><a data-toggle="tooltip" data-original-title="Nomor Item Soal"><font size="" align="center">No</font></a></th>
                        <th colspan="4">Masalah Masa Depan yang Berhubungan dengan Jabatan
                        <a href="<?  echo base_url('index.php/kelas/chartBag10/'. $post->kelas); ?>" class="pull-right" data-placement="left" data-toggle="tooltip" data-original-title="Lihat  ">
                            <span class="glyphicon glyphicon-stats"></span>
                             </a>
                        </th>
                      </tr>                   
                      <tr class="tooltips">
                        <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang bermasalah untuk item tertentu">Mm</a></th>
                        <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang mengerjakan Daftar Cek Masalah">m</a></th>
                        <th><a data-toggle="tooltip" data-original-title="Hasil analisis per-item soal">%</a></th>
                        <th><a data-toggle="tooltip" data-original-title="Keterangan hasil analisis">KET</a></th>
                      </tr>
                    <tr>    
    <td>186</td>    
    <td><? echo $post->soal186; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h186; ?></td>
    <td><? echo $post->score186;?></td>
  </tr>
  <tr>    
    <td>187</td>    
    <td><? echo $post->soal187; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h187; ?></td>
    <td><? echo $post->score187;?></td>
  </tr>
  <tr>    
    <td>188</td>    
    <td><? echo $post->soal188; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h188; ?></td>
    <td><? echo $post->score188;?></td>
  </tr>
  <tr>    
    <td>189</td>    
    <td><? echo $post->soal189; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h189; ?></td>
    <td><? echo $post->score189;?></td>
  </tr>
  <tr>    
    <td>190</td>    
    <td><? echo $post->soal190; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h190; ?></td>
    <td><? echo $post->score190;?></td>
  </tr>  
  <tr>    
    <td>191</td>    
    <td><? echo $post->soal191; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h191; ?></td>
    <td><? echo $post->score191;?></td>
  </tr>
  <tr>    
    <td>192</td>    
    <td><? echo $post->soal192; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h192; ?></td>
    <td><? echo $post->score192;?></td>
  </tr>
  <tr>    
    <td>193</td>    
    <td><? echo $post->soal193; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h193; ?></td>
    <td><? echo $post->score193;?></td>
  </tr>
  <tr>    
    <td>194</td>    
    <td><? echo $post->soal194; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h194; ?></td>
    <td><? echo $post->score194;?></td>
  </tr>
  <tr>    
    <td>195</td>    
    <td><? echo $post->soal195; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h195; ?></td>
    <td><? echo $post->score195;?></td>
  </tr>
  <tr>    
    <td>196</td>    
    <td><? echo $post->soal196; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h196; ?></td>
    <td><? echo $post->score196;?></td>
  </tr>
                    </table>
                  </div>
                  <div class="tab-pane fade" id="b11">
                    <table class="table table-hover table-bordered">
                      <tr>
                        <th rowspan="2"><a data-toggle="tooltip" data-original-title="Nomor Item Soal"><font size="" align="center">No</font></a></th>
                        <th colspan="4">Masalah Kebiasaan Belajar
                        <a href="<?  echo base_url('index.php/kelas/chartBag11/'. $post->kelas); ?>" class="pull-right" data-placement="left" data-toggle="tooltip" data-original-title="Lihat  ">
                            <span class="glyphicon glyphicon-stats"></span>
                             </a>
                        </th>
                      </tr>                   
                      <tr class="tooltips">
                        <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang bermasalah untuk item tertentu">Mm</a></th>
                        <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang mengerjakan Daftar Cek Masalah">m</a></th>
                        <th><a data-toggle="tooltip" data-original-title="Hasil analisis per-item soal">%</a></th>
                        <th><a data-toggle="tooltip" data-original-title="Keterangan hasil analisis">KET</a></th>
                      </tr>
                    <tr>    
    <td>197</td>    
    <td><? echo $post->soal197; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h197; ?></td>
    <td><? echo $post->score197;?></td>
  </tr>
  <tr>    
    <td>198</td>    
    <td><? echo $post->soal198; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h198; ?></td>
    <td><? echo $post->score198;?></td>
  </tr>
  <tr>    
    <td>199</td>    
    <td><? echo $post->soal199; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h199; ?></td>
    <td><? echo $post->score199;?></td>
  </tr>
  <tr>    
    <td>200</td>    
    <td><? echo $post->soal200; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h200; ?></td>
    <td><? echo $post->score200;?></td>
  </tr>  
  <tr>    
    <td>201</td>    
    <td><? echo $post->soal201; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h201; ?></td>
    <td><? echo $post->score201;?></td>
  </tr>
  <tr>    
    <td>202</td>    
    <td><? echo $post->soal202; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h202; ?></td>
    <td><? echo $post->score202;?></td>
  </tr>
  <tr>    
    <td>203</td>    
    <td><? echo $post->soal203; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h203; ?></td>
    <td><? echo $post->score203;?></td>
  </tr>
  <tr>    
    <td>204</td>    
    <td><? echo $post->soal204; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h204; ?></td>
    <td><? echo $post->score204;?></td>
  </tr>
  <tr>    
    <td>205</td>    
    <td><? echo $post->soal205; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h205; ?></td>
    <td><? echo $post->score205;?></td>
  </tr>
  <tr>    
    <td>206</td>    
    <td><? echo $post->soal206; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h206; ?></td>
    <td><? echo $post->score206;?></td>
  </tr>
  <tr>    
    <td>207</td>    
    <td><? echo $post->soal207; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h207; ?></td>
    <td><? echo $post->score207;?></td>
  </tr>
  <tr>    
    <td>208</td>    
    <td><? echo $post->soal208; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h208; ?></td>
    <td><? echo $post->score208;?></td>
  </tr>  
  <tr>    
    <td>209</td>    
    <td><? echo $post->soal209; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h209; ?></td>
    <td><? echo $post->score209;?></td>
  </tr>
  <tr>    
    <td>210</td>    
    <td><? echo $post->soal210; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h210; ?></td>
    <td><? echo $post->score210;?></td>
  </tr>
  <tr>    
    <td>211</td>    
    <td><? echo $post->soal211; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h211; ?></td>
    <td><? echo $post->score211;?></td>
  </tr>  
                    </table>
                  </div>
                  <div class="tab-pane fade" id="b12">
                    <table class="table table-hover table-bordered">
                      <tr>
                        <th rowspan="2"><a data-toggle="tooltip" data-original-title="Nomor Item Soal"><font size="" align="center">No</font></a></th>
                        <th colspan="4">Masalah Muda Mudi dan Asmara
                        <a href="<?  echo base_url('index.php/kelas/chartBag12/'. $post->kelas); ?>" class="pull-right" data-placement="left" data-toggle="tooltip" data-original-title="Lihat  ">
                            <span class="glyphicon glyphicon-stats"></span>
                             </a>
                        </th>
                      </tr>                   
                      <tr class="tooltips">
                        <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang bermasalah untuk item tertentu">Mm</a></th>
                        <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang mengerjakan Daftar Cek Masalah">m</a></th>
                        <th><a data-toggle="tooltip" data-original-title="Hasil analisis per-item soal">%</a></th>
                        <th><a data-toggle="tooltip" data-original-title="Keterangan hasil analisis">KET</a></th>
                      </tr>
                    <tr>    
    <td>212</td>    
    <td><? echo $post->soal212; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h212; ?></td>
    <td><? echo $post->score212;?></td>
  </tr>
  <tr>    
    <td>213</td>    
    <td><? echo $post->soal213; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h213; ?></td>
    <td><? echo $post->score213;?></td>
  </tr>
  <tr>    
    <td>214</td>    
    <td><? echo $post->soal214; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h214; ?></td>
    <td><? echo $post->score214;?></td>
  </tr>
  <tr>    
    <td>215</td>    
    <td><? echo $post->soal215; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h215; ?></td>
    <td><? echo $post->score215;?></td>
  </tr>
  <tr>    
    <td>216</td>    
    <td><? echo $post->soal216; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h216; ?></td>
    <td><? echo $post->score216;?></td>
  </tr>  
  <tr>    
    <td>217</td>    
    <td><? echo $post->soal217; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h217; ?></td>
    <td><? echo $post->score217;?></td>
  </tr>
  <tr>    
    <td>218</td>    
    <td><? echo $post->soal218; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h218; ?></td>
    <td><? echo $post->score218;?></td>
  </tr>
  <tr>    
    <td>219</td>    
    <td><? echo $post->soal219; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h219; ?></td>
    <td><? echo $post->score219;?></td>
  </tr>
  <tr>    
    <td>220</td>    
    <td><? echo $post->soal220; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h220; ?></td>
    <td><? echo $post->score220;?></td>
  </tr>
  <tr>    
    <td>221</td>    
    <td><? echo $post->soal221; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h221; ?></td>
    <td><? echo $post->score221;?></td>
  </tr>
  <tr>    
    <td>222</td>    
    <td><? echo $post->soal222; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h222; ?></td>
    <td><? echo $post->score222;?></td>
  </tr>
  <tr>    
    <td>223</td>    
    <td><? echo $post->soal223; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h223; ?></td>
    <td><? echo $post->score223;?></td>
  </tr>
  <tr>    
    <td>224</td>    
    <td><? echo $post->soal224; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h224; ?></td>
    <td><? echo $post->score224;?></td>
  </tr>  
  <tr>    
    <td>225</td>    
    <td><? echo $post->soal225; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h225; ?></td>
    <td><? echo $post->score225;?></td>
  </tr>
  <tr>    
    <td>226</td>    
    <td><? echo $post->soal226; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h226; ?></td>
    <td><? echo $post->score226;?></td>
  </tr>
  <tr>    
    <td>227</td>    
    <td><? echo $post->soal227; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h227; ?></td>
    <td><? echo $post->score227;?></td>
  </tr>
  <tr>    
    <td>228</td>    
    <td><? echo $post->soal228; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h228; ?></td>
    <td><? echo $post->score228;?></td>
  </tr>
  <tr>    
    <td>229</td>    
    <td><? echo $post->soal229; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h229; ?></td>
    <td><? echo $post->score229;?></td>
  </tr>
  <tr>    
    <td>230</td>    
    <td><? echo $post->soal230; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h230; ?></td>
    <td><? echo $post->score230;?></td>
  </tr>
  <tr>    
    <td>231</td>    
    <td><? echo $post->soal231; ?></td>
    <td><? echo $post->jmlKelas; ?></td>
    <td><? echo $post->h231; ?></td>
    <td><? echo $post->score231;?></td>
  </tr>
                    </table>
                  </div>                              
                </div>
            </div>
        </div>
      </div>
    </div>
</div>

    <?php endforeach; endif; ?>
  </body>

  <style type="text/css">
table {
  background-color: transparent;
}
th {
  text-align: left;
}
.table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 20px;
}
.table > thead > tr > th,
.table > tbody > tr > th,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > tbody > tr > td,
.table > tfoot > tr > td {
  padding: 8px;
  line-height: 1.42857143;
  vertical-align: top;
  border-top: 1px solid #dddddd;
}
.table > thead > tr > th {
  vertical-align: bottom;
  border-bottom: 2px solid #dddddd;
}
.table > caption + thead > tr:first-child > th,
.table > colgroup + thead > tr:first-child > th,
.table > thead:first-child > tr:first-child > th,
.table > caption + thead > tr:first-child > td,
.table > colgroup + thead > tr:first-child > td,
.table > thead:first-child > tr:first-child > td {
  border-top: 0;
}
.table > tbody + tbody {
  border-top: 2px solid #dddddd;
}
.table .table {
  background-color: #ffffff;
}
.table-condensed > thead > tr > th,
.table-condensed > tbody > tr > th,
.table-condensed > tfoot > tr > th,
.table-condensed > thead > tr > td,
.table-condensed > tbody > tr > td,
.table-condensed > tfoot > tr > td {
  padding: 5px;
}
.table-bordered {
  border: 1px solid #dddddd;
}
.table-bordered > thead > tr > th,
.table-bordered > tbody > tr > th,
.table-bordered > tfoot > tr > th,
.table-bordered > thead > tr > td,
.table-bordered > tbody > tr > td,
.table-bordered > tfoot > tr > td {
  border: 1px solid #dddddd;
}
.table-bordered > thead > tr > th,
.table-bordered > thead > tr > td {
  border-bottom-width: 2px;
}
.table-striped > tbody > tr:nth-child(odd) > td,
.table-striped > tbody > tr:nth-child(odd) > th {
  background-color: #f9f9f9;
}
.table-hover > tbody > tr:hover > td,
.table-hover > tbody > tr:hover > th {
  background-color: #f5f5f5;
}
table col[class*="col-"] {
  position: static;
  float: none;
  display: table-column;
}
table td[class*="col-"],
table th[class*="col-"] {
  position: static;
  float: none;
  display: table-cell;
}
.table > thead > tr > td.active,
.table > tbody > tr > td.active,
.table > tfoot > tr > td.active,
.table > thead > tr > th.active,
.table > tbody > tr > th.active,
.table > tfoot > tr > th.active,
.table > thead > tr.active > td,
.table > tbody > tr.active > td,
.table > tfoot > tr.active > td,
.table > thead > tr.active > th,
.table > tbody > tr.active > th,
.table > tfoot > tr.active > th {
  background-color: #f5f5f5;
}
.table-hover > tbody > tr > td.active:hover,
.table-hover > tbody > tr > th.active:hover,
.table-hover > tbody > tr.active:hover > td,
.table-hover > tbody > tr:hover > .active,
.table-hover > tbody > tr.active:hover > th {
  background-color: #e8e8e8;
}
.table > thead > tr > td.success,
.table > tbody > tr > td.success,
.table > tfoot > tr > td.success,
.table > thead > tr > th.success,
.table > tbody > tr > th.success,
.table > tfoot > tr > th.success,
.table > thead > tr.success > td,
.table > tbody > tr.success > td,
.table > tfoot > tr.success > td,
.table > thead > tr.success > th,
.table > tbody > tr.success > th,
.table > tfoot > tr.success > th {
  background-color: #dff0d8;
}
.table-hover > tbody > tr > td.success:hover,
.table-hover > tbody > tr > th.success:hover,
.table-hover > tbody > tr.success:hover > td,
.table-hover > tbody > tr:hover > .success,
.table-hover > tbody > tr.success:hover > th {
  background-color: #d0e9c6;
}
.table > thead > tr > td.info,
.table > tbody > tr > td.info,
.table > tfoot > tr > td.info,
.table > thead > tr > th.info,
.table > tbody > tr > th.info,
.table > tfoot > tr > th.info,
.table > thead > tr.info > td,
.table > tbody > tr.info > td,
.table > tfoot > tr.info > td,
.table > thead > tr.info > th,
.table > tbody > tr.info > th,
.table > tfoot > tr.info > th {
  background-color: #d9edf7;
}
.table-hover > tbody > tr > td.info:hover,
.table-hover > tbody > tr > th.info:hover,
.table-hover > tbody > tr.info:hover > td,
.table-hover > tbody > tr:hover > .info,
.table-hover > tbody > tr.info:hover > th {
  background-color: #c4e3f3;
}
.table > thead > tr > td.warning,
.table > tbody > tr > td.warning,
.table > tfoot > tr > td.warning,
.table > thead > tr > th.warning,
.table > tbody > tr > th.warning,
.table > tfoot > tr > th.warning,
.table > thead > tr.warning > td,
.table > tbody > tr.warning > td,
.table > tfoot > tr.warning > td,
.table > thead > tr.warning > th,
.table > tbody > tr.warning > th,
.table > tfoot > tr.warning > th {
  background-color: #fcf8e3;
}
.table-hover > tbody > tr > td.warning:hover,
.table-hover > tbody > tr > th.warning:hover,
.table-hover > tbody > tr.warning:hover > td,
.table-hover > tbody > tr:hover > .warning,
.table-hover > tbody > tr.warning:hover > th {
  background-color: #faf2cc;
}
.table > thead > tr > td.danger,
.table > tbody > tr > td.danger,
.table > tfoot > tr > td.danger,
.table > thead > tr > th.danger,
.table > tbody > tr > th.danger,
.table > tfoot > tr > th.danger,
.table > thead > tr.danger > td,
.table > tbody > tr.danger > td,
.table > tfoot > tr.danger > td,
.table > thead > tr.danger > th,
.table > tbody > tr.danger > th,
.table > tfoot > tr.danger > th {
  background-color: #f2dede;
}
.table-hover > tbody > tr > td.danger:hover,
.table-hover > tbody > tr > th.danger:hover,
.table-hover > tbody > tr.danger:hover > td,
.table-hover > tbody > tr:hover > .danger,
.table-hover > tbody > tr.danger:hover > th {
  background-color: #ebcccc;
}
@media screen and (max-width: 767px) {
  .table-responsive {
    width: 100%;
    margin-bottom: 15px;
    overflow-y: hidden;
    overflow-x: auto;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    border: 1px solid #dddddd;
    -webkit-overflow-scrolling: touch;
  }
  .table-responsive > .table {
    margin-bottom: 0;
  }
  .table-responsive > .table > thead > tr > th,
  .table-responsive > .table > tbody > tr > th,
  .table-responsive > .table > tfoot > tr > th,
  .table-responsive > .table > thead > tr > td,
  .table-responsive > .table > tbody > tr > td,
  .table-responsive > .table > tfoot > tr > td {
    white-space: nowrap;
  }
  .table-responsive > .table-bordered {
    border: 0;
  }
  .table-responsive > .table-bordered > thead > tr > th:first-child,
  .table-responsive > .table-bordered > tbody > tr > th:first-child,
  .table-responsive > .table-bordered > tfoot > tr > th:first-child,
  .table-responsive > .table-bordered > thead > tr > td:first-child,
  .table-responsive > .table-bordered > tbody > tr > td:first-child,
  .table-responsive > .table-bordered > tfoot > tr > td:first-child {
    border-left: 0;
  }
  .table-responsive > .table-bordered > thead > tr > th:last-child,
  .table-responsive > .table-bordered > tbody > tr > th:last-child,
  .table-responsive > .table-bordered > tfoot > tr > th:last-child,
  .table-responsive > .table-bordered > thead > tr > td:last-child,
  .table-responsive > .table-bordered > tbody > tr > td:last-child,
  .table-responsive > .table-bordered > tfoot > tr > td:last-child {
    border-right: 0;
  }
  .table-responsive > .table-bordered > tbody > tr:last-child > th,
  .table-responsive > .table-bordered > tfoot > tr:last-child > th,
  .table-responsive > .table-bordered > tbody > tr:last-child > td,
  .table-responsive > .table-bordered > tfoot > tr:last-child > td {
    border-bottom: 0;
  }
}
    .badge {
  display: inline-block;
  min-width: 10px;
  padding: 3px 7px;
  font-size: 12px;
  font-weight: bold;
  color: #ffffff;
  line-height: 1;
  vertical-align: baseline;
  white-space: nowrap;
  text-align: center;
  background-color: #777777;
  border-radius: 10px;
}
.badge:empty {
  display: none;
}
.btn .badge {
  position: relative;
  top: -1px;
}
.btn-xs .badge {
  top: 0;
  padding: 1px 5px;
}
a.badge:hover,
a.badge:focus {
  color: #ffffff;
  text-decoration: none;
  cursor: pointer;
}
a.list-group-item.active > .badge,
.nav-pills > .active > a > .badge {
  color: #428bca;
  background-color: #ffffff;
}
.nav-pills > li > a > .badge {
  margin-left: 3px;
}
    .list-group {
  margin-bottom: 20px;
  padding-left: 0;
}
.list-group-item {
  position: relative;
  display: block;
  padding: 10px 15px;
  margin-bottom: -1px;
  background-color: #ffffff;
  border: 1px solid #dddddd;
}
.list-group-item:first-child {
  border-top-right-radius: 4px;
  border-top-left-radius: 4px;
}
.list-group-item:last-child {
  margin-bottom: 0;
  border-bottom-right-radius: 4px;
  border-bottom-left-radius: 4px;
}
.list-group-item > .badge {
  float: right;
}
.list-group-item > .badge + .badge {
  margin-right: 5px;
}
a.list-group-item {
  color: #555555;
}
a.list-group-item .list-group-item-heading {
  color: #333333;
}
a.list-group-item:hover,
a.list-group-item:focus {
  text-decoration: none;
  color: #555555;
  background-color: #f5f5f5;
}
.list-group-item.disabled,
.list-group-item.disabled:hover,
.list-group-item.disabled:focus {
  background-color: #eeeeee;
  color: #777777;
}
.list-group-item.disabled .list-group-item-heading,
.list-group-item.disabled:hover .list-group-item-heading,
.list-group-item.disabled:focus .list-group-item-heading {
  color: inherit;
}
.list-group-item.disabled .list-group-item-text,
.list-group-item.disabled:hover .list-group-item-text,
.list-group-item.disabled:focus .list-group-item-text {
  color: #777777;
}
.list-group-item.active,
.list-group-item.active:hover,
.list-group-item.active:focus {
  z-index: 2;
  color: #ffffff;
  background-color: #428bca;
  border-color: #428bca;
}
.list-group-item.active .list-group-item-heading,
.list-group-item.active:hover .list-group-item-heading,
.list-group-item.active:focus .list-group-item-heading,
.list-group-item.active .list-group-item-heading > small,
.list-group-item.active:hover .list-group-item-heading > small,
.list-group-item.active:focus .list-group-item-heading > small,
.list-group-item.active .list-group-item-heading > .small,
.list-group-item.active:hover .list-group-item-heading > .small,
.list-group-item.active:focus .list-group-item-heading > .small {
  color: inherit;
}
.list-group-item.active .list-group-item-text,
.list-group-item.active:hover .list-group-item-text,
.list-group-item.active:focus .list-group-item-text {
  color: #e1edf7;
}
.list-group-item-success {
  color: #3c763d;
  background-color: #dff0d8;
}
a.list-group-item-success {
  color: #3c763d;
}
a.list-group-item-success .list-group-item-heading {
  color: inherit;
}
a.list-group-item-success:hover,
a.list-group-item-success:focus {
  color: #3c763d;
  background-color: #d0e9c6;
}
a.list-group-item-success.active,
a.list-group-item-success.active:hover,
a.list-group-item-success.active:focus {
  color: #fff;
  background-color: #3c763d;
  border-color: #3c763d;
}
.list-group-item-info {
  color: #31708f;
  background-color: #d9edf7;
}
a.list-group-item-info {
  color: #31708f;
}
a.list-group-item-info .list-group-item-heading {
  color: inherit;
}
a.list-group-item-info:hover,
a.list-group-item-info:focus {
  color: #31708f;
  background-color: #c4e3f3;
}
a.list-group-item-info.active,
a.list-group-item-info.active:hover,
a.list-group-item-info.active:focus {
  color: #fff;
  background-color: #31708f;
  border-color: #31708f;
}
.list-group-item-warning {
  color: #8a6d3b;
  background-color: #fcf8e3;
}
a.list-group-item-warning {
  color: #8a6d3b;
}
a.list-group-item-warning .list-group-item-heading {
  color: inherit;
}
a.list-group-item-warning:hover,
a.list-group-item-warning:focus {
  color: #8a6d3b;
  background-color: #faf2cc;
}
a.list-group-item-warning.active,
a.list-group-item-warning.active:hover,
a.list-group-item-warning.active:focus {
  color: #fff;
  background-color: #8a6d3b;
  border-color: #8a6d3b;
}
.list-group-item-danger {
  color: #a94442;
  background-color: #f2dede;
}
a.list-group-item-danger {
  color: #a94442;
}
a.list-group-item-danger .list-group-item-heading {
  color: inherit;
}
a.list-group-item-danger:hover,
a.list-group-item-danger:focus {
  color: #a94442;
  background-color: #ebcccc;
}
a.list-group-item-danger.active,
a.list-group-item-danger.active:hover,
a.list-group-item-danger.active:focus {
  color: #fff;
  background-color: #a94442;
  border-color: #a94442;
}
.list-group-item-heading {
  margin-top: 0;
  margin-bottom: 5px;
}
.list-group-item-text {
  margin-bottom: 0;
  line-height: 1.3;
}
    .panel {
  margin-bottom: 20px;
  background-color: #ffffff;
  border: 1px solid transparent;
  border-radius: 4px;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
}
.panel-body {
  padding: 15px;
}
.panel-heading {
  padding: 10px 15px;
  border-bottom: 1px solid transparent;
  border-top-right-radius: 3px;
  border-top-left-radius: 3px;
}
.panel-heading > .dropdown .dropdown-toggle {
  color: inherit;
}
.panel-title {
  margin-top: 0;
  margin-bottom: 0;
  font-size: 16px;
  color: inherit;
}
.panel-title > a {
  color: inherit;
}
.panel-footer {
  padding: 10px 15px;
  background-color: #f5f5f5;
  border-top: 1px solid #dddddd;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}
.panel > .list-group {
  margin-bottom: 0;
}
.panel > .list-group .list-group-item {
  border-width: 1px 0;
  border-radius: 0;
}
.panel > .list-group:first-child .list-group-item:first-child {
  border-top: 0;
  border-top-right-radius: 3px;
  border-top-left-radius: 3px;
}
.panel > .list-group:last-child .list-group-item:last-child {
  border-bottom: 0;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}
.panel-heading + .list-group .list-group-item:first-child {
  border-top-width: 0;
}
.list-group + .panel-footer {
  border-top-width: 0;
}
.panel > .table,
.panel > .table-responsive > .table,
.panel > .panel-collapse > .table {
  margin-bottom: 0;
}
.panel > .table:first-child,
.panel > .table-responsive:first-child > .table:first-child {
  border-top-right-radius: 3px;
  border-top-left-radius: 3px;
}
.panel > .table:first-child > thead:first-child > tr:first-child td:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child td:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:first-child,
.panel > .table:first-child > thead:first-child > tr:first-child th:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child th:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:first-child {
  border-top-left-radius: 3px;
}
.panel > .table:first-child > thead:first-child > tr:first-child td:last-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:last-child,
.panel > .table:first-child > tbody:first-child > tr:first-child td:last-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:last-child,
.panel > .table:first-child > thead:first-child > tr:first-child th:last-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:last-child,
.panel > .table:first-child > tbody:first-child > tr:first-child th:last-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:last-child {
  border-top-right-radius: 3px;
}
.panel > .table:last-child,
.panel > .table-responsive:last-child > .table:last-child {
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}
.panel > .table:last-child > tbody:last-child > tr:last-child td:first-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:first-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
.panel > .table:last-child > tbody:last-child > tr:last-child th:first-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:first-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child th:first-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:first-child {
  border-bottom-left-radius: 3px;
}
.panel > .table:last-child > tbody:last-child > tr:last-child td:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
.panel > .table:last-child > tbody:last-child > tr:last-child th:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child th:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:last-child {
  border-bottom-right-radius: 3px;
}
.panel > .panel-body + .table,
.panel > .panel-body + .table-responsive {
  border-top: 1px solid #dddddd;
}
.panel > .table > tbody:first-child > tr:first-child th,
.panel > .table > tbody:first-child > tr:first-child td {
  border-top: 0;
}
.panel > .table-bordered,
.panel > .table-responsive > .table-bordered {
  border: 0;
}
.panel > .table-bordered > thead > tr > th:first-child,
.panel > .table-responsive > .table-bordered > thead > tr > th:first-child,
.panel > .table-bordered > tbody > tr > th:first-child,
.panel > .table-responsive > .table-bordered > tbody > tr > th:first-child,
.panel > .table-bordered > tfoot > tr > th:first-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > th:first-child,
.panel > .table-bordered > thead > tr > td:first-child,
.panel > .table-responsive > .table-bordered > thead > tr > td:first-child,
.panel > .table-bordered > tbody > tr > td:first-child,
.panel > .table-responsive > .table-bordered > tbody > tr > td:first-child,
.panel > .table-bordered > tfoot > tr > td:first-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > td:first-child {
  border-left: 0;
}
.panel > .table-bordered > thead > tr > th:last-child,
.panel > .table-responsive > .table-bordered > thead > tr > th:last-child,
.panel > .table-bordered > tbody > tr > th:last-child,
.panel > .table-responsive > .table-bordered > tbody > tr > th:last-child,
.panel > .table-bordered > tfoot > tr > th:last-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > th:last-child,
.panel > .table-bordered > thead > tr > td:last-child,
.panel > .table-responsive > .table-bordered > thead > tr > td:last-child,
.panel > .table-bordered > tbody > tr > td:last-child,
.panel > .table-responsive > .table-bordered > tbody > tr > td:last-child,
.panel > .table-bordered > tfoot > tr > td:last-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > td:last-child {
  border-right: 0;
}
.panel > .table-bordered > thead > tr:first-child > td,
.panel > .table-responsive > .table-bordered > thead > tr:first-child > td,
.panel > .table-bordered > tbody > tr:first-child > td,
.panel > .table-responsive > .table-bordered > tbody > tr:first-child > td,
.panel > .table-bordered > thead > tr:first-child > th,
.panel > .table-responsive > .table-bordered > thead > tr:first-child > th,
.panel > .table-bordered > tbody > tr:first-child > th,
.panel > .table-responsive > .table-bordered > tbody > tr:first-child > th {
  border-bottom: 0;
}
.panel > .table-bordered > tbody > tr:last-child > td,
.panel > .table-responsive > .table-bordered > tbody > tr:last-child > td,
.panel > .table-bordered > tfoot > tr:last-child > td,
.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > td,
.panel > .table-bordered > tbody > tr:last-child > th,
.panel > .table-responsive > .table-bordered > tbody > tr:last-child > th,
.panel > .table-bordered > tfoot > tr:last-child > th,
.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > th {
  border-bottom: 0;
}
.panel > .table-responsive {
  border: 0;
  margin-bottom: 0;
}
.panel-group {
  margin-bottom: 20px;
}
.panel-group .panel {
  margin-bottom: 0;
  border-radius: 4px;
}
.panel-group .panel + .panel {
  margin-top: 5px;
}
.panel-group .panel-heading {
  border-bottom: 0;
}
.panel-group .panel-heading + .panel-collapse > .panel-body {
  border-top: 1px solid #dddddd;
}
.panel-group .panel-footer {
  border-top: 0;
}
.panel-group .panel-footer + .panel-collapse .panel-body {
  border-bottom: 1px solid #dddddd;
}
.panel-default {
  border-color: #dddddd;
}
.panel-default > .panel-heading {
  color: #333333;
  background-color: #f5f5f5;
  border-color: #dddddd;
}
.panel-default > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #dddddd;
}
.panel-default > .panel-heading .badge {
  color: #f5f5f5;
  background-color: #333333;
}
.panel-default > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #dddddd;
}
.panel-primary {
  border-color: #428bca;
}
.panel-primary > .panel-heading {
  color: #ffffff;
  background-color: #428bca;
  border-color: #428bca;
}
.panel-primary > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #428bca;
}
.panel-primary > .panel-heading .badge {
  color: #428bca;
  background-color: #ffffff;
}
.panel-primary > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #428bca;
}
.panel-success {
  border-color: #d6e9c6;
}
.panel-success > .panel-heading {
  color: #3c763d;
  background-color: #dff0d8;
  border-color: #d6e9c6;
}
.panel-success > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #d6e9c6;
}
.panel-success > .panel-heading .badge {
  color: #dff0d8;
  background-color: #3c763d;
}
.panel-success > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #d6e9c6;
}
.panel-info {
  border-color: #bce8f1;
}
.panel-info > .panel-heading {
  color: #31708f;
  background-color: #d9edf7;
  border-color: #bce8f1;
}
.panel-info > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #bce8f1;
}
.panel-info > .panel-heading .badge {
  color: #d9edf7;
  background-color: #31708f;
}
.panel-info > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #bce8f1;
}
.panel-warning {
  border-color: #faebcc;
}
.panel-warning > .panel-heading {
  color: #8a6d3b;
  background-color: #fcf8e3;
  border-color: #faebcc;
}
.panel-warning > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #faebcc;
}
.panel-warning > .panel-heading .badge {
  color: #fcf8e3;
  background-color: #8a6d3b;
}
.panel-warning > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #faebcc;
}
.panel-danger {
  border-color: #ebccd1;
}
.panel-danger > .panel-heading {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebccd1;
}
.panel-danger > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #ebccd1;
}
.panel-danger > .panel-heading .badge {
  color: #f2dede;
  background-color: #a94442;
}
.panel-danger > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #ebccd1;
}
    .btn-default,.btn-primary,.btn-success,.btn-info,.btn-warning,.btn-danger{text-shadow:0 -1px 0 rgba(0,0,0,0.2);-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,0.15),0 1px 1px rgba(0,0,0,0.075);box-shadow:inset 0 1px 0 rgba(255,255,255,0.15),0 1px 1px rgba(0,0,0,0.075)}.btn-default:active,.btn-primary:active,.btn-success:active,.btn-info:active,.btn-warning:active,.btn-danger:active,.btn-default.active,.btn-primary.active,.btn-success.active,.btn-info.active,.btn-warning.active,.btn-danger.active{-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,0.125);box-shadow:inset 0 3px 5px rgba(0,0,0,0.125)}.btn:active,.btn.active{background-image:none}.btn-default{background-image:-webkit-linear-gradient(top, #fff 0, #e0e0e0 100%);background-image:-o-linear-gradient(top, #fff 0, #e0e0e0 100%);background-image:linear-gradient(to bottom, #fff 0, #e0e0e0 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffe0e0e0', GradientType=0);filter:progid:DXImageTransform.Microsoft.gradient(enabled = false);background-repeat:repeat-x;border-color:#dbdbdb;text-shadow:0 1px 0 #fff;border-color:#ccc}.btn-default:hover,.btn-default:focus{background-color:#e0e0e0;background-position:0 -15px}.btn-default:active,.btn-default.active{background-color:#e0e0e0;border-color:#dbdbdb}.btn-default:disabled,.btn-default[disabled]{background-color:#e0e0e0;background-image:none}.btn-primary{background-image:-webkit-linear-gradient(top, #428bca 0, #2d6ca2 100%);background-image:-o-linear-gradient(top, #428bca 0, #2d6ca2 100%);background-image:linear-gradient(to bottom, #428bca 0, #2d6ca2 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff428bca', endColorstr='#ff2d6ca2', GradientType=0);filter:progid:DXImageTransform.Microsoft.gradient(enabled = false);background-repeat:repeat-x;border-color:#2b669a}.btn-primary:hover,.btn-primary:focus{background-color:#2d6ca2;background-position:0 -15px}.btn-primary:active,.btn-primary.active{background-color:#2d6ca2;border-color:#2b669a}.btn-primary:disabled,.btn-primary[disabled]{background-color:#2d6ca2;background-image:none}.btn-success{background-image:-webkit-linear-gradient(top, #5cb85c 0, #419641 100%);background-image:-o-linear-gradient(top, #5cb85c 0, #419641 100%);background-image:linear-gradient(to bottom, #5cb85c 0, #419641 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5cb85c', endColorstr='#ff419641', GradientType=0);filter:progid:DXImageTransform.Microsoft.gradient(enabled = false);background-repeat:repeat-x;border-color:#3e8f3e}.btn-success:hover,.btn-success:focus{background-color:#419641;background-position:0 -15px}.btn-success:active,.btn-success.active{background-color:#419641;border-color:#3e8f3e}.btn-success:disabled,.btn-success[disabled]{background-color:#419641;background-image:none}.btn-info{background-image:-webkit-linear-gradient(top, #5bc0de 0, #2aabd2 100%);background-image:-o-linear-gradient(top, #5bc0de 0, #2aabd2 100%);background-image:linear-gradient(to bottom, #5bc0de 0, #2aabd2 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5bc0de', endColorstr='#ff2aabd2', GradientType=0);filter:progid:DXImageTransform.Microsoft.gradient(enabled = false);background-repeat:repeat-x;border-color:#28a4c9}.btn-info:hover,.btn-info:focus{background-color:#2aabd2;background-position:0 -15px}.btn-info:active,.btn-info.active{background-color:#2aabd2;border-color:#28a4c9}.btn-info:disabled,.btn-info[disabled]{background-color:#2aabd2;background-image:none}.btn-warning{background-image:-webkit-linear-gradient(top, #f0ad4e 0, #eb9316 100%);background-image:-o-linear-gradient(top, #f0ad4e 0, #eb9316 100%);background-image:linear-gradient(to bottom, #f0ad4e 0, #eb9316 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff0ad4e', endColorstr='#ffeb9316', GradientType=0);filter:progid:DXImageTransform.Microsoft.gradient(enabled = false);background-repeat:repeat-x;border-color:#e38d13}.btn-warning:hover,.btn-warning:focus{background-color:#eb9316;background-position:0 -15px}.btn-warning:active,.btn-warning.active{background-color:#eb9316;border-color:#e38d13}.btn-warning:disabled,.btn-warning[disabled]{background-color:#eb9316;background-image:none}.btn-danger{background-image:-webkit-linear-gradient(top, #d9534f 0, #c12e2a 100%);background-image:-o-linear-gradient(top, #d9534f 0, #c12e2a 100%);background-image:linear-gradient(to bottom, #d9534f 0, #c12e2a 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffd9534f', endColorstr='#ffc12e2a', GradientType=0);filter:progid:DXImageTransform.Microsoft.gradient(enabled = false);background-repeat:repeat-x;border-color:#b92c28}.btn-danger:hover,.btn-danger:focus{background-color:#c12e2a;background-position:0 -15px}.btn-danger:active,.btn-danger.active{background-color:#c12e2a;border-color:#b92c28}.btn-danger:disabled,.btn-danger[disabled]{background-color:#c12e2a;background-image:none}.thumbnail,.img-thumbnail{-webkit-box-shadow:0 1px 2px rgba(0,0,0,0.075);box-shadow:0 1px 2px rgba(0,0,0,0.075)}.dropdown-menu>li>a:hover,.dropdown-menu>li>a:focus{background-image:-webkit-linear-gradient(top, #f5f5f5 0, #e8e8e8 100%);background-image:-o-linear-gradient(top, #f5f5f5 0, #e8e8e8 100%);background-image:linear-gradient(to bottom, #f5f5f5 0, #e8e8e8 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff5f5f5', endColorstr='#ffe8e8e8', GradientType=0);background-color:#e8e8e8}.dropdown-menu>.active>a,.dropdown-menu>.active>a:hover,.dropdown-menu>.active>a:focus{background-image:-webkit-linear-gradient(top, #428bca 0, #357ebd 100%);background-image:-o-linear-gradient(top, #428bca 0, #357ebd 100%);background-image:linear-gradient(to bottom, #428bca 0, #357ebd 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff428bca', endColorstr='#ff357ebd', GradientType=0);background-color:#357ebd}.navbar-default{background-image:-webkit-linear-gradient(top, #fff 0, #f8f8f8 100%);background-image:-o-linear-gradient(top, #fff 0, #f8f8f8 100%);background-image:linear-gradient(to bottom, #fff 0, #f8f8f8 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#fff8f8f8', GradientType=0);filter:progid:DXImageTransform.Microsoft.gradient(enabled = false);border-radius:4px;-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,0.15),0 1px 5px rgba(0,0,0,0.075);box-shadow:inset 0 1px 0 rgba(255,255,255,0.15),0 1px 5px rgba(0,0,0,0.075)}.navbar-default .navbar-nav>.active>a{background-image:-webkit-linear-gradient(top, #ebebeb 0, #f3f3f3 100%);background-image:-o-linear-gradient(top, #ebebeb 0, #f3f3f3 100%);background-image:linear-gradient(to bottom, #ebebeb 0, #f3f3f3 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffebebeb', endColorstr='#fff3f3f3', GradientType=0);-webkit-box-shadow:inset 0 3px 9px rgba(0,0,0,0.075);box-shadow:inset 0 3px 9px rgba(0,0,0,0.075)}.navbar-brand,.navbar-nav>li>a{text-shadow:0 1px 0 rgba(255,255,255,0.25)}.navbar-inverse{background-image:-webkit-linear-gradient(top, #3c3c3c 0, #222 100%);background-image:-o-linear-gradient(top, #3c3c3c 0, #222 100%);background-image:linear-gradient(to bottom, #3c3c3c 0, #222 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff3c3c3c', endColorstr='#ff222222', GradientType=0);filter:progid:DXImageTransform.Microsoft.gradient(enabled = false)}.navbar-inverse .navbar-nav>.active>a{background-image:-webkit-linear-gradient(top, #222 0, #282828 100%);background-image:-o-linear-gradient(top, #222 0, #282828 100%);background-image:linear-gradient(to bottom, #222 0, #282828 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff222222', endColorstr='#ff282828', GradientType=0);-webkit-box-shadow:inset 0 3px 9px rgba(0,0,0,0.25);box-shadow:inset 0 3px 9px rgba(0,0,0,0.25)}.navbar-inverse .navbar-brand,.navbar-inverse .navbar-nav>li>a{text-shadow:0 -1px 0 rgba(0,0,0,0.25)}.navbar-static-top,.navbar-fixed-top,.navbar-fixed-bottom{border-radius:0}.alert{text-shadow:0 1px 0 rgba(255,255,255,0.2);-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,0.25),0 1px 2px rgba(0,0,0,0.05);box-shadow:inset 0 1px 0 rgba(255,255,255,0.25),0 1px 2px rgba(0,0,0,0.05)}.alert-success{background-image:-webkit-linear-gradient(top, #dff0d8 0, #c8e5bc 100%);background-image:-o-linear-gradient(top, #dff0d8 0, #c8e5bc 100%);background-image:linear-gradient(to bottom, #dff0d8 0, #c8e5bc 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffdff0d8', endColorstr='#ffc8e5bc', GradientType=0);border-color:#b2dba1}.alert-info{background-image:-webkit-linear-gradient(top, #d9edf7 0, #b9def0 100%);background-image:-o-linear-gradient(top, #d9edf7 0, #b9def0 100%);background-image:linear-gradient(to bottom, #d9edf7 0, #b9def0 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffd9edf7', endColorstr='#ffb9def0', GradientType=0);border-color:#9acfea}.alert-warning{background-image:-webkit-linear-gradient(top, #fcf8e3 0, #f8efc0 100%);background-image:-o-linear-gradient(top, #fcf8e3 0, #f8efc0 100%);background-image:linear-gradient(to bottom, #fcf8e3 0, #f8efc0 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fffcf8e3', endColorstr='#fff8efc0', GradientType=0);border-color:#f5e79e}.alert-danger{background-image:-webkit-linear-gradient(top, #f2dede 0, #e7c3c3 100%);background-image:-o-linear-gradient(top, #f2dede 0, #e7c3c3 100%);background-image:linear-gradient(to bottom, #f2dede 0, #e7c3c3 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff2dede', endColorstr='#ffe7c3c3', GradientType=0);border-color:#dca7a7}.progress{background-image:-webkit-linear-gradient(top, #ebebeb 0, #f5f5f5 100%);background-image:-o-linear-gradient(top, #ebebeb 0, #f5f5f5 100%);background-image:linear-gradient(to bottom, #ebebeb 0, #f5f5f5 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffebebeb', endColorstr='#fff5f5f5', GradientType=0)}.progress-bar{background-image:-webkit-linear-gradient(top, #428bca 0, #3071a9 100%);background-image:-o-linear-gradient(top, #428bca 0, #3071a9 100%);background-image:linear-gradient(to bottom, #428bca 0, #3071a9 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff428bca', endColorstr='#ff3071a9', GradientType=0)}.progress-bar-success{background-image:-webkit-linear-gradient(top, #5cb85c 0, #449d44 100%);background-image:-o-linear-gradient(top, #5cb85c 0, #449d44 100%);background-image:linear-gradient(to bottom, #5cb85c 0, #449d44 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5cb85c', endColorstr='#ff449d44', GradientType=0)}.progress-bar-info{background-image:-webkit-linear-gradient(top, #5bc0de 0, #31b0d5 100%);background-image:-o-linear-gradient(top, #5bc0de 0, #31b0d5 100%);background-image:linear-gradient(to bottom, #5bc0de 0, #31b0d5 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5bc0de', endColorstr='#ff31b0d5', GradientType=0)}.progress-bar-warning{background-image:-webkit-linear-gradient(top, #f0ad4e 0, #ec971f 100%);background-image:-o-linear-gradient(top, #f0ad4e 0, #ec971f 100%);background-image:linear-gradient(to bottom, #f0ad4e 0, #ec971f 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff0ad4e', endColorstr='#ffec971f', GradientType=0)}.progress-bar-danger{background-image:-webkit-linear-gradient(top, #d9534f 0, #c9302c 100%);background-image:-o-linear-gradient(top, #d9534f 0, #c9302c 100%);background-image:linear-gradient(to bottom, #d9534f 0, #c9302c 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffd9534f', endColorstr='#ffc9302c', GradientType=0)}.progress-bar-striped{background-image:-webkit-linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent);background-image:-o-linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent);background-image:linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent)}.list-group{border-radius:4px;-webkit-box-shadow:0 1px 2px rgba(0,0,0,0.075);box-shadow:0 1px 2px rgba(0,0,0,0.075)}.list-group-item.active,.list-group-item.active:hover,.list-group-item.active:focus{text-shadow:0 -1px 0 #3071a9;background-image:-webkit-linear-gradient(top, #428bca 0, #3278b3 100%);background-image:-o-linear-gradient(top, #428bca 0, #3278b3 100%);background-image:linear-gradient(to bottom, #428bca 0, #3278b3 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff428bca', endColorstr='#ff3278b3', GradientType=0);border-color:#3278b3}.panel{-webkit-box-shadow:0 1px 2px rgba(0,0,0,0.05);box-shadow:0 1px 2px rgba(0,0,0,0.05)}.panel-default>.panel-heading{background-image:-webkit-linear-gradient(top, #f5f5f5 0, #e8e8e8 100%);background-image:-o-linear-gradient(top, #f5f5f5 0, #e8e8e8 100%);background-image:linear-gradient(to bottom, #f5f5f5 0, #e8e8e8 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff5f5f5', endColorstr='#ffe8e8e8', GradientType=0)}.panel-primary>.panel-heading{background-image:-webkit-linear-gradient(top, #428bca 0, #357ebd 100%);background-image:-o-linear-gradient(top, #428bca 0, #357ebd 100%);background-image:linear-gradient(to bottom, #428bca 0, #357ebd 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff428bca', endColorstr='#ff357ebd', GradientType=0)}.panel-success>.panel-heading{background-image:-webkit-linear-gradient(top, #dff0d8 0, #d0e9c6 100%);background-image:-o-linear-gradient(top, #dff0d8 0, #d0e9c6 100%);background-image:linear-gradient(to bottom, #dff0d8 0, #d0e9c6 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffdff0d8', endColorstr='#ffd0e9c6', GradientType=0)}.panel-info>.panel-heading{background-image:-webkit-linear-gradient(top, #d9edf7 0, #c4e3f3 100%);background-image:-o-linear-gradient(top, #d9edf7 0, #c4e3f3 100%);background-image:linear-gradient(to bottom, #d9edf7 0, #c4e3f3 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffd9edf7', endColorstr='#ffc4e3f3', GradientType=0)}.panel-warning>.panel-heading{background-image:-webkit-linear-gradient(top, #fcf8e3 0, #faf2cc 100%);background-image:-o-linear-gradient(top, #fcf8e3 0, #faf2cc 100%);background-image:linear-gradient(to bottom, #fcf8e3 0, #faf2cc 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fffcf8e3', endColorstr='#fffaf2cc', GradientType=0)}.panel-danger>.panel-heading{background-image:-webkit-linear-gradient(top, #f2dede 0, #ebcccc 100%);background-image:-o-linear-gradient(top, #f2dede 0, #ebcccc 100%);background-image:linear-gradient(to bottom, #f2dede 0, #ebcccc 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff2dede', endColorstr='#ffebcccc', GradientType=0)}.well{background-image:-webkit-linear-gradient(top, #e8e8e8 0, #f5f5f5 100%);background-image:-o-linear-gradient(top, #e8e8e8 0, #f5f5f5 100%);background-image:linear-gradient(to bottom, #e8e8e8 0, #f5f5f5 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffe8e8e8', endColorstr='#fff5f5f5', GradientType=0);border-color:#dcdcdc;-webkit-box-shadow:inset 0 1px 3px rgba(0,0,0,0.05),0 1px 0 rgba(255,255,255,0.1);box-shadow:inset 0 1px 3px rgba(0,0,0,0.05),0 1px 0 rgba(255,255,255,0.1)}
    </style>
</html>