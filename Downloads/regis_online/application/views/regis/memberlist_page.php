
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
                        <h2>รายชื่อคนเข้าประชุม <small></small></h2>

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
                                    <th>จำนวนคน</th>
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
                                        <td><?php echo $value->nummember; ?>
                                        </td>
                                        <td><?php echo anchor('regis_online/view_memberlist/' . $value->id, '<i class="fa fa-users" ></i> View ', 'class="btn btn-info btn-xs"'); ?></td>

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