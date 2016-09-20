

<section id="services">
    <div class="container">
        <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="row">
                <div class="text-center col-sm-8 col-sm-offset-2">
                    <h2>รายการคนลงทะเบียน</h2>
                    <p>รายการคนลงทะเบียน</p>
                </div>
            </div> 
        </div>
        <div class="text-center our-services">
            <div class="row">
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>ชื่อ-สกุล</th>
                                    <th>โรงพยาบาล</th>
                                    

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                foreach ($member as $value) {
                                    $i++;
                                    ?>

                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $value->prename.$value->name.' '.$value->lname; ?></td>
                                        <td><?php echo $value->hotname; ?></td>
                                        
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
            </div>
        </div>

    </div>
</section>



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