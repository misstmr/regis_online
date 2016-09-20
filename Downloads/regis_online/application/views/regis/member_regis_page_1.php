<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ลงทะเบียน online </title>

        <!-- Bootstrap -->
        <link href="<?php echo base_url() . 'asset/'; ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="<?php echo base_url() . 'asset/'; ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- Animate.css -->
        <link href="https://colorlib.com/polygon/gentelella/css/animate.min.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="<?php echo base_url() . 'asset/'; ?>build/css/custom.min.css" rel="stylesheet">
    </head>
    <body class="login">
        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>หัวข้อประชุม</h3>
                    </div>


                </div>
                <div class="clearfix"></div>



                <div class="row" >
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>กรอกข้อมูลสำหรับเข้าร่วมประชุม  <?php echo $topic->topic; ?><small><?php echo $topic->detail; ?></small></h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">



                                <span class="section">Registration Form</span>

                                <!-- start form for validation -->
                                <?php echo form_open('regis_online/insertRegistration', 'id="demo-form" data-parsley-validate'); ?>

                                <label for="fullname">คำนำหน้า * :</label>
                                <input type="text" id="prename" class="form-control" name="prename" required />
                                <label for="fullname">ชื่อตัว * :</label>
                                <input type="text" id="name" class="form-control" name="name" required />

                                <label for="email">ชื่อสกุล * :</label>
                                <input type="text" id="lname" class="form-control" name="lname" required />

                                <label for="email">งาน/ภาควิชา * :</label>
                                <input type="text" id="work" class="form-control" name="work" required />

                                <label for="email">ฝ่าย/หน่วยงาน * :</label>
                                <input type="text" id="department" class="form-control" name="department" required />

                                <label for="profession">วิชาชีพ *:</label>
                                <select id="profession" name="profession" class="form-control" required>
                                    <option value="">Choose..</option>  
                                    <?php foreach ($p as $value) { ?>
                                        <option value="<?php echo $value->id; ?>"><?php echo $value->profession; ?></option>
                                    <?php } ?>
                                </select>


                                <label for="idx">เลขประชาชน:</label>
                                <input type="text" id="idx" class="form-control" name="idx" required />

                                <label for="licenses">เลขที่ใบอนุญาตประกอบวิชาชีพ:</label>
                                <input type="text" id="licenses" class="form-control" name="licenses" required />

                                <label for="hotname">ชื่อโรงพยาบาล:</label>
                                <input type="text" id="hotname" class="form-control" name="hotname" required />


                                <label for="attendance">สถานะการเข้าร่วมประชุม *:</label>
                                <select id="attendance" name="attendance" class="form-control" required>
                                    <option value="">Choose..</option>
                                    <?php foreach ($a as $value) { ?>
                                        <option value="<?php echo $value->id; ?>"><?php echo $value->attendance; ?></option>
                                    <?php } ?>
                                </select>


                                <label for="payment">สถานะการชำระเงิน *:</label>
                                <select id="payment" name="payment" class="form-control" required>
                                    <option value="">Choose..</option>   
                                    <option value="yes">ชำระเงินแล้ว</option>
                                    <option value="no">ค้างชำระเงิน</option>
                                </select>
                                <br/>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <?php echo anchor('Regis_online', '<i class="fa fa-times" ></i> Cancel ', 'class="btn-sm btn-primary"'); ?>     
                                        <button type="submit" class="fa fa-check btn-sm btn-success">Submit</button>
                                    </div>
                                </div>



                                </form>
                                <!-- end form for validations -->
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
        </div>
    </body>
</html>