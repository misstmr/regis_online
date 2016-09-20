<section id="services">
    <div class="container">
        <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="row">
                <div class="text-center col-sm-8 col-sm-offset-2">
                    <h2>หัวข้อการประชุมวิชาการ</h2>
                    <p>หัวข้อการประชุมวิชาการ งานพัฒนาคุณภาพโรงพยาบาลมหาราชนครเชียงใหม่ คณะแพทยศาสตร์ มหาวิทยาลัยเชียงใหม่</p>
                </div>
            </div> 
        </div>
        <div class="text-center our-services">
            <div class="row">
                <?php $time = 300;
                foreach ($topic as $value) {
                    ?>
                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="<?php echo $time; ?>ms">
                        <div class="service-icon">
                            <i class="fa fa-file-picture-o"></i>
                        </div>
                        <div class="service-info">
                            <h3><?php echo $value->topic; ?></h3>
                            <p><?php echo $value->detail; ?></p>
                            <p><?php echo DateThai($value->start_date) . ' - ' . DateThai($value->end_date); ?></p>
                            <p> <?php echo anchor('regis_online/regis_from/'.$value->id,' ลงทะเบียน','class="btn btn-info btn-xs fa fa-pencil"');?> </p>
                            <?php if(!empty($value->nummember)){ ?>
                            <p> <?php echo anchor('regis_online/member_list/'.$value->id,' ลงทะเบียนแล้ว '.$value->nummember.' คน','class="btn btn-success btn-xs fa fa-users"');?> </p>
                            <?php } ?>
                            </div>
                    </div>
                <?php $time+=100;
                }
                ?>
            </div>
        </div>
    </div>
</section>
<!--/#about-us-->

