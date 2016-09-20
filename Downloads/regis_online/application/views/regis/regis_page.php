
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>หัวข้อประชุม</h3>
            </div>


        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>เพิ่มหัวข้อการประชุม <small>รายละเอียด</small></h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <?php
                        if ($status == 'edit') {
                            echo form_open('Regis_online/updateTopic/' . $edit->id, 'd="demo-form2" data-parsley-validate class="form-horizontal form-label-left"');
                        } else {
                            echo form_open('Regis_online/insertTopic', 'd="demo-form2" data-parsley-validate class="form-horizontal form-label-left"');
                        }
                        ?>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="หัวข้อการประชุม">หัวข้อการประชุม <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input value="<?php
                                if ($status == 'edit') {
                                    echo $edit->topic;
                                }
                                ?>" type="text" name="topic" required class="form-control col-md-7 col-xs-12" data-parsley-message="vvvvv" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="รายละเอียด">รายละเอียด<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea  name="detail" required class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                                           data-parsley-validation-threshold="10"><?php
                                               if ($status == 'edit') {
                                                   echo $edit->detail;
                                               }
                                               ?></textarea>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">วันเริ่มประกาศ <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input value="<?php
                                if ($status == 'edit') {
                                    echo $edit->start_date;
                                }
                                ?>" id="start_date" name="start_date" class="date-picker form-control col-md-7 col-xs-12" required type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">วันปิดประกาศ <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input value="<?php
                                if ($status == 'edit') {
                                    echo $edit->end_date;
                                }
                                ?>" id="end_date" name="end_date" class="date-picker form-control col-md-7 col-xs-12" required type="text">
                            </div>
                        </div>
                        <div class="ranges" style="display: none;">
                            <div class="range_inputs">
                                <div class="daterangepicker_start_input">
                                    <label for="daterangepicker_start">From</label>
                                    <input id="daterangepicker_start" class="input-mini" type="text" name="daterangepicker_start" value="">
                                </div>
                                <div class="daterangepicker_end_input">
                                    <label for="daterangepicker_end">To</label>
                                    <input id="daterangepicker_end" class="input-mini" type="text" name="daterangepicker_end" value="">
                                </div>
                                <button class="applyBtn btn btn-small btn-sm btn-success">Apply</button>&nbsp;
                                <button class="cancelBtn btn btn-small btn-sm btn-default">Cancel</button>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <?php echo anchor('Regis_online/topic', '<i class="fa fa-times" ></i> Cancel ', 'class="btn-sm btn-primary"'); ?>
                                <?php if ($status == 'edit') { ?>
                                    <button type="submit" class="fa fa-edit btn btn-danger">Update</button>
                                <?php } else { ?>

                                    <button type="submit" class="fa fa-check btn-sm btn-success">Submit</button>
                                <?php } ?>

                            </div>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>รายการหัวขอประชุม <small></small></h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>หัวข้อประชุม</th>
                                    <th>รายละเอียด</th>
                                    <th>วันเริ่มลงทะเบียน</th>
                                    <th>วันสิ้นสุดลงทะเบียน</th>
                                    <th>status</th>
                                    <th>action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                foreach ($topic as $value) {
                                    $i++;
                                    ?>

                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $value->topic; ?></td>
                                        <td><?php echo $value->detail; ?></td>
                                        <td><?php echo $value->start_date; ?></td>
                                        <td><?php echo $value->end_date; ?></td>
                                        <td>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <div class="">
                                                    <label>
                                                        <input type="checkbox" class="js-switch" checked /> Open
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td><?php echo anchor('regis_online/editTopic/' . $value->id, '<i class="fa fa-pencil" ></i> Edit ', 'class="btn btn-info btn-xs"'); ?></td>

                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>







    </div>







</div>

<script>
    $(document).ready(function () {
        $('#start_date').daterangepicker({
            format: "YYYY-MM-DD",
            singleDatePicker: true,
            calender_style: "picker_3"
        }, function (start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });

        $('#end_date').daterangepicker({
            format: "YYYY-MM-DD",
            singleDatePicker: true,
            calender_style: "picker_3"
        }, function (start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#datatable-responsive').DataTable();
    });
</script>
<!-- /bootstrap-daterangepicker -->

<!-- /page content -->