<!DOCTYPE html>
<!--

 Author Rizki Mufrizal <mufrizalrizki@gmail.com>
 Since Mar 27, 2016
 Time 8:02:04 PM
 Encoding UTF-8
 Project BMKG-Server
 Package Expression package is undefined on line 9, column 12 in Templates/Scripting/EmptyPHPWebPage.php.
  
-->
<html>

    <head>
        <title>Aplikasi BMKG</title>
        <?php $this->load->view('layout/css') ?>
    </head>

    <body>
        <?php $this->load->view('layout/header') ?>

        <div class="container">

            <table id="tabelDetail" class="table table-bordered table-hover table-responsive table-striped">
                <thead>
                    <tr>
                        <th class="text-center">ID Cuaca Detail</th>
                        <th class="text-center">Kota</th>
                        <th class="text-center">Cuaca</th>
                        <th class="text-center">Suhu Min</th>
                        <th class="text-center">Suhu Max</th>
                        <th class="text-center">Kelembapan Min</th>
                        <th class="text-center">Kelembapan Max</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cuacaDetail as $c) { ?>
                        <tr>
                            <td class="text-center"><?php echo $c->id_cuaca_detail; ?></td>
                            <td class="text-center"><?php echo $c->kota; ?></td>
                            <td class="text-center">
                                <img src="<?php echo base_url(); ?>/assets/img/<?php echo $c->cuaca ?>.gif" />
                            </td>
                            <td class="text-center"><?php echo $c->suhu_min; ?></td>
                            <td class="text-center"><?php echo $c->suhu_max; ?></td>
                            <td class="text-center"><?php echo $c->kelembapan_min; ?></td>
                            <td class="text-center"><?php echo $c->kelembapan_max; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <?php $this->load->view('layout/js') ?>
    </body>

</html>