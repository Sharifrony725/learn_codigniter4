<?= $this->extend('static/base'); ?>
<?= $this->Section('content'); ?>
<style>
    tr.border_bottom td {
        border-bottom: 0.03125rem solid black;
        border-top: 0.03125rem solid black;
    }

    .duplicate-td {
        border: 1px solid #000;
        /* margin: 5px; */
        text-align: center;
        font-weight: 500;
    }

    .normal_text {
        font-size: 9px;
    }

    @page {
        size: auto;
        margin: 0mm;
        /* margin-bottom: 0mm; */
    }
</style>
<div class="col-12 col-lg-12 col-xl-12">
    <!-- <div class="header p-0 ml-0 mr-0 shadow-none">
        <div class="header-body d-flex justify-content-end">

        </div>
    </div> -->
    <!--/.End of header-->
    <div class="card card-body p-0 mb-0" id="printArea">
        <table align="center" border="0">
            <tbody>
                <tr>
                    <td>
                        <table border="0" width="100%">
                            <tbody>
                                <tr>
                                    <td align="center" colspan="3" class="text-center">
                                        <h2 style="margin: 0px!important; padding: 0px !important;">
                                            <?php //echo $company->title; 
                                            ?>
                                            <?php echo 'Taj Tech Ltd'; ?>
                                        </h2>
                                        <h5 class="text-center m-0" style="margin: 0px !important; padding: 0px !important; ">
                                            Rajshahi branch <br />
                                            159/A Kadirgonj, Rajshahi-6100 <br />
                                            <!-- Mobile: <?php //echo $company->phone; 
                                                            ?> -->
                                            Mobile: <?php echo '01236547896'; ?>

                                        </h5>
                                    </td>
                                </tr>
                                <tr class="margin-top10">
                                    <td colspan="6" class="minpos-bordertop" style="border-top: #333 1px solid;"></td>
                                </tr>

                                <tr class="normal_text">
                                    <!-- <td>Bill No : <?php //echo $main->invoice; 
                                                        ?></td> -->
                                    <td>Bill No : <?php echo '0123654789'; ?></td>
                                    <!-- <td colspan="2">
                                        Posted By: <?php //echo $main->firstname . ' ' . $main->lastname; 
                                                    ?>
                                    </td> -->
                                    <td colspan="2">
                                        Posted By: <?php echo 'Demo Name'; ?>
                                    </td>
                                </tr>

                                <tr class="normal_text">
                                    <td>
                                        <!-- <time datetime="2008-02-14 20:00">Date: <?php //echo $main->inserted_time; 
                                                                                        ?></time> -->
                                        <!-- <time datetime="2008-02-14 20:00">Date: <?php //echo date("Y/m/d H:i", strtotime($main->inserted_time)); 
                                                                                        ?></time> -->
                                        <time datetime="2008-02-14 20:00">Date: <?php echo '2022-06-26' ?></time>
                                    </td>
                                    <td colspan="2">
                                        <!-- Pay Mode: <?php //echo $main->payment_type == 2 ? 'Bank' : 'Cash'; 
                                                        ?> -->
                                        <!-- Pay Mode: <?php //echo $main->payment_type == 2 ? $main->bank_name : 'Cash'; 
                                                        ?> -->
                                        Pay Mode: <?php echo 'Demo : Cash'; ?>
                                    </td>

                                </tr>
                                <tr>
                                    <td class="duplicate-td" colspan="6"> Duplicate copy</td>
                                </tr>
                            </tbody>
                        </table>
                        <?php
                        // $total_dis = 0;
                        // foreach ($details as $dis_per) {
                        //     $total_dis += $dis_per['discount'];
                        // }
                        // $colspan = 0;
                        //                    if ($total_dis > 0) {
                        //                        $colspan = 1;
                        //                    }
                        ?>
                        <table width="100%">
                            <tbody>
                                <tr class="border_bottom normal_text">
                                    <td align="left">-Qty</td>
                                    <td align="left">Item Name</td>
                                    <td align="right"></td>
                                    <td align="right">Rate</td>
                                    <td align="center"></td>
                                    <td align="center">Qty</td>
                                    <td align="right">Amount</td>
                                </tr>
                                <?php

                                // $sl = 1;
                                // $total = 0;
                                // foreach ($details as $details) {
                                ?>
                                <tr class="normal_text">
                                    <!-- <td align="left">1
                                            <?php //echo $details['product_name'] . '(' . $details['strength'] . ')'; 
                                            ?>
                                        </td> -->
                                    <td align="left">
                                        <?php echo '1' ?>
                                    </td>
                                    <td align="left">1</td>
                                    <td align="right">
                                        <!-- <nobr>
                                                <?php //echo number_format((float)$details['rate'], 2, '.', '') 
                                                ?></nobr>
                                            <nobr>
                                                <?php //echo 'number_format'; 
                                                ?></nobr> -->
                                    </td>
                                    <td align="right">200</td>

                                    <td align="center">
                                        <!-- <nobr><?php //echo $details['quantity'] 
                                                    ?></nobr>
                                            <nobr><?php //echo 'quantity' 
                                                    ?></nobr> -->
                                    </td>
                                    <td align="right">100
                                        <nobr>
                                            <?php //echo number_format((float)($details['rate'] * $details['quantity']), 2, '.', '');
                                            // $total += $details['rate'] * $details['quantity'];
                                            ?></nobr>
                                    </td>
                                    <td align="right">
                                        500
                                    </td>
                                </tr>
                                <?php //} 
                                ?>
                                <tr>
                                    <td colspan="<?php echo '6 + $colspan' ?>" class="minpos-bordertop" style="border-top: #333 1px solid;"></td>
                                    <td colspan="<?php echo ' 6 + colspan ' ?>" class="minpos-bordertop" style="border-top: #333 1px solid;"></td>
                                </tr>
                                <tr>
                                    <td colspan="<?php echo '6 + $colspan' ?>" class="minpos-bordertop"></td>
                                    <td colspan="<?php echo ' 6 + $colspan' ?>" class="minpos-bordertop"></td>
                                </tr>
                                <tr class="normal_text">
                                    <!-- <td colspan="2"></td> -->
                                    <!-- <td align="right" colspan="<?php //echo 3 + $colspan 
                                                                    ?>">Total :</td> -->
                                    <td align="left" style="font-weight: bold;" >Gross Total :</td>
                                    <td align="right">
                                        <nobr> <?php //echo number_format((float)$total, 2, '.', '') 
                                                ?></nobr>
                                        <nobr> <?php //echo 'number_format' 
                                                ?>10000</nobr>
                                    </td>
                                </tr>
                                <?php //if ($main->total_discount > 0) { 
                                ?>
                                <tr class="normal_text">

                                    <!-- <td align="right" colspan="<?php // echo 5 + $colspan 
                                                                    ?>">Total Discount :</td> -->

                                    <td align="right" colspan="<?php //echo '5 + colspan' 
                                                                ?>">Total Discount :</td>
                                    <td align="right">
                                        <!-- <nobr><?php //echo number_format((float)$main->total_discount, 2, '.', '') 
                                                    ?></nobr> -->
                                        <nobr><?php echo '15%' ?></nobr>
                                    </td>
                                </tr>
                                <?php //} 
                                ?>
                                <?php //if ($main->total_tax > 0) { 
                                ?>
                                <tr class="normal_text">
                                    <td align="right" colspan="<?php //echo 5 + $colspan 
                                                                ?>"><?php //echo 'total_vat' 
                                                                                                ?>Total Vat :
                                    </td>
                                    <!-- <td align="right" colspan="<?php //echo 5 + $colspan 
                                                                    ?>"><?php //echo lan('total_vat') 
                                                                                                    ?>
                                            :
                                        </td> -->
                                    <!-- <td align="right">
                                            <nobr><?php // echo number_format((float)$main->total_tax, 2, '.', '') 
                                                    ?></nobr> 
                                        </td> -->
                                    <td align="right">
                                        <nobr><?php echo '1025' ?></nobr>
                                    </td>
                                </tr>
                                <?php //} 
                                ?>
                                <?php // if ($main->prevous_due > 0) { 
                                ?>
                                <tr class="normal_text">

                                    <!-- <td align="right" colspan="<?php // echo 5 + $colspan 
                                                                    ?>">Previous :</td> -->
                                    <!-- <td align="right" colspan="<?php echo '5 + colspan' ?>">Previous :</td> -->
                                    <!-- <td align="right">
                                            <nobr><?php //echo number_format((float)$main->prevous_due, 2, '.', '') 
                                                    ?></nobr>
                                        </td> -->
                                    <!-- <td align="right">
                                        <nobr><?php echo 'number_format' ?></nobr>
                                    </td> -->
                                </tr>
                                <?php // } 
                                ?>
                                <tr>
                                    <td colspan="<?php //echo 5 + $colspan 
                                                    ?>" class="minpos-bordertop"></td>
                                </tr>

                                <?php //if ($main->return_amount > 0) { 
                                ?>
                                <tr class="normal_text">
                                    <!-- <td align="right" colspan="<?php //echo 5 + $colspan 
                                                                    ?>">Product Return Amount :</td> -->
                                    <td align="right" colspan="<?php //echo 5 + $colspan 
                                                                ?>">Product Return Amount :</td>
                                    <td align="right">
                                        <!-- <nobr><?php //echo number_format((float)$main->return_amount, 2, '.', '') 
                                                    ?></nobr> -->
                                        <nobr><?php echo '012252' ?></nobr>
                                    </td>
                                </tr>
                                <?php //} 
                                ?>

                                <?php // if ($main->redeem_point > 0) { 
                                ?>
                                <tr class="normal_text">
                                    <!-- <td align="right" colspan="<?php //echo 5 + $colspan 
                                                                    ?>">Redeem Point Amount :</td> -->
                                    <td align="right" colspan="<?php  ?>">Redeem Point Amount :</td>
                                    <td align="right">
                                        <nobr><?php echo ' 124554' ?></nobr>
                                    </td>
                                </tr>
                                <?php //} 
                                ?>

                                <tr class="normal_text">

                                    <!-- <td align="right" colspan="<?php //echo 5 + $colspan 
                                                                    ?>"><strong>Grand Total :</strong></td> -->
                                    <td align="right" colspan="<?php //echo' 5 + $colspan' 
                                                                ?>"><strong>Gross Total :</strong></td>
                                    <td align="right">
                                        <!-- <strong>
                                            <nobr><?php //echo number_format((float)$main->total_amount, 2, '.', '') 
                                                    ?></nobr>
                                        </strong> -->
                                        <strong>
                                            <nobr><?php echo '9500' ?></nobr>
                                        </strong>
                                    </td>
                                </tr>

                                <tr>
                                    <!-- <td colspan="<?php //echo 5 + $colspan 
                                                        ?>" class="minpos-bordertop"></td> -->
                                    <td colspan="<?php echo '5 + $colspan' ?>" class="minpos-bordertop"></td>
                                </tr>
                                <tr class="normal_text">

                                    <td align="right" colspan="<?php 'echo 5 + $colspan' ?>">
                                        Paid Amount :
                                    </td>
                                    <td align="right">
                                        <nobr> <?php echo 'number_format' ?></nobr>
                                        <!-- <nobr> <?php //echo number_format((float)$main->paid_amount, 2, '.', '') 
                                                    ?></nobr> -->
                                    </td>
                                </tr>
                                <?php //if ($main->due_amount > 0) { 
                                ?>
                                <tr class="normal_text">

                                    <td align="right" colspan="<?php //echo 5 + $colspan 
                                                                ?>">Due :</td>
                                    <!-- <td align="right">
                                            <nobr> <?php //echo number_format((float)$main->due_amount, 2, '.', '') 
                                                    ?></nobr>
                                        </td> -->
                                    <td align="right">
                                        <!-- <nobr> <?php //echo number_format((float)$main->due_amount, 2, '.', '') 
                                                    ?></nobr> -->
                                        <nobr> <?php echo 'number_format' ?></nobr>
                                    </td>
                                </tr>
                                <?php //} 
                                ?>

                                <?php //$change = $main->paid_amount - $main->total_amount; 
                                ?>
                                <?php //if ($change > 0) { 
                                ?>
                                <tr class="normal_text">
                                    <td align="right" colspan="<?php //echo 5 + $colspan' 
                                                                ?>">Change :</td>
                                    <td align="right">
                                        <nobr> <?php //echo number_format((float)$change, 2, '.', '') 
                                                ?></nobr>
                                    </td>
                                </tr>
                                <?php //} 
                                ?>
                                <tr>
                                    <td colspan="<?php echo '6 + $colspan' 
                                                    ?>" class="minpos-bordertop" style="border-top: #333 1px solid;margin-bottom: 10px;" align="center"></td>
                                </tr>
                                <tr class="normal_text">
                                    <td>Customer Name:</td>
                                    <td align="center" colspan="4"><b><?php // echo $main->customer_name; 
                                                                        ?>Demo Name</b><br /></td>
                                </tr>
                                <?php
                                // $earnedPoint = floor($main->total_amount / 100);
                                // $prev_rewardpoint = ($main->reward_point - $earnedPoint);
                                ?>
                                <tr class="normal_text">
                                    <td>Your previous points:</td>
                                    <td align="center" colspan="4"><b><?php //echo ($main->customer_id != 1) ? $prev_rewardpoint : 0.0; 
                                                                        ?></b>1111</td>
                                </tr>
                                <tr class="normal_text">
                                    <td>Your todays points:</td>
                                    <td align="center" colspan="4"><b><?php //echo ($main->customer_id != 1) ? $earnedPoint : 0.0; 
                                                                        ?></b>0222</td>
                                </tr>
                                <tr class="normal_text">

                                    <td>Total points:</td>
                                    <td align="center" colspan="4"><b><?php //echo ($main->customer_id != 1) ? $main->reward_point : 0.0; 
                                                                        ?></b>012</td>
                                </tr>

                                <!-- <tr class="d-none">
                                    <td colspan="<?php //echo 6 + $colspan 
                                                    ?>" class="text-center minpos-bordertop" align="center">
                                        <? php // $invoice_no = $main->invoice; 
                                        ?>
                                        <img height="30" class="img-responsive center-block barcode-image" alt="" src="">
                                        <!-- <img height="30" class="img-responsive center-block barcode-image" alt="" src="//base_url('vendor/barcode.php?size=30&text=' . $invoice_no . '&print=true') ">

                                    </td>
                                </tr> -->
                            </tbody>
                        </table>
                    </td>
                </tr>
                <!-- <tr class="text-center" style="font-size: 11;">
                    <td align="center">Have a nice day!</td>
                </tr> -->
                <tr colspan="6">
                    <td align="center">
                        Powered By: <a href="javascript:void(0)"><strong><?php //echo 'tajtechltd.com'; 
                                                                            ?></strong>TajTechltd</a>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>

    <!-- <div class="row align-items-center">

        <div class="col-auto">
            <a src="javascript:void(0)" onclick="printDiv('printArea')" class="btn btn-success ml-2"><i class="typcn typcn-printer mr-1"></i>Print Invoice </a>
        </div>
    </div> -->

</div>

<script type="text/javascript">
    // window.print();
</script>
<?= $this->endSection(); ?>