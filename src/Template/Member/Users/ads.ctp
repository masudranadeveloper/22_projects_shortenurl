<?php
$this->assign('title', 'Ads Controll');
$this->assign('description', '');
$this->assign('content_title', 'Ads Controll');
?>

<div class="box box-primary">
    <div class="box-body">
        <h4 class="text-center">1st Page Ads</h4>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="<?php echo $data['st1_page_top_ads']?>" <?php if($data['st1_page_top_ads'] == '1'){ echo "checked"; }?> id="st1page_top">

            <label class="form-check-label" for="st1page_top">
                Top Ads
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="<?php echo $data['st1_page_1st_img_ads']?>" <?php if($data['st1_page_1st_img_ads'] == '1'){ echo "checked"; }?> id="st1img_1">
            <label class="form-check-label" for="st1img_1">
                1st images bottom ads
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="<?php echo $data['st1_page_2nd_img_ads']?>" <?php if($data['st1_page_2nd_img_ads'] == '1'){ echo "checked"; }?> id="st1img_2">
            <label class="form-check-label" for="st1img_2">
                2nd images bottom ads
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="<?php echo $data['st1_page_3rd_img_ads']?>" <?php if($data['st1_page_3rd_img_ads'] == '1'){ echo "checked"; }?> id="st1img_3">
            <label class="form-check-label" for="st1img_3">
                3rd images bottom ads
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="<?php echo $data['st1_page_bottom_ads']?>" <?php if($data['st1_page_bottom_ads'] == '1'){ echo "checked"; }?> id="st1ads_bottom">
            <label class="form-check-label" for="st1ads_bottom">
                Bottom Ads
            </label>
        </div>

    </div>
</div>

<div class="box box-primary">
    <div class="box-body">
        <h4 class="text-center">2nd Page Ads</h4>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="<?php echo $data['nd2_page_top_ads']?>" <?php if($data['nd2_page_top_ads'] == '1'){ echo "checked"; }?> id="nd2page_top">

            <label class="form-check-label" for="nd2page_top">
                Top Ads
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="<?php echo $data['nd2_page_1st_img_ads']?>" <?php if($data['nd2_page_1st_img_ads'] == '1'){ echo "checked"; }?> id="nd2pageimg_1">
            <label class="form-check-label" for="nd2pageimg_1">
                1st images bottom ads
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="<?php echo $data['nd2_page_2nd_img_ads']?>" <?php if($data['nd2_page_2nd_img_ads'] == '1'){ echo "checked"; }?> id="nd2pageimg_2">
            <label class="form-check-label" for="nd2pageimg_2">
                2nd images bottom ads
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="<?php echo $data['nd2_page_3rd_img_ads']?>" <?php if($data['nd2_page_3rd_img_ads'] == '1'){ echo "checked"; }?> id="nd2pageimg_3">
            <label class="form-check-label" for="nd2pageimg_3">
                3rd images bottom ads
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="<?php echo $data['nd2_page_bottom_ads']?>" <?php if($data['nd2_page_bottom_ads'] == '1'){ echo "checked"; }?> id="nd2ads_bottom">
            <label class="form-check-label" for="nd2ads_bottom">
                Bottom Ads
            </label>
        </div>
    </div>
</div>

<div class="box box-primary">
    <div class="box-body">
        <h4 class="text-center">3rd Page Ads</h4>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="<?php echo $data['rd3_page_top_ads']?>" <?php if($data['rd3_page_top_ads'] == '1'){ echo "checked"; }?> id="rd3page_top">

            <label class="form-check-label" for="rd3page_top">
                Top Ads
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="<?php echo $data['rd3_page_1st_img_ads']?>" <?php if($data['rd3_page_1st_img_ads'] == '1'){ echo "checked"; }?> id="rd3pageimg_1">
            <label class="form-check-label" for="rd3pageimg_1">
                1st images bottom ads
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="<?php echo $data['rd3_page_2nd_img_ads']?>" <?php if($data['rd3_page_2nd_img_ads'] == '1'){ echo "checked"; }?> id="rd3pageimg_2">
            <label class="form-check-label" for="rd3pageimg_2">
                2nd images bottom ads
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="<?php echo $data['rd3_page_3rd_img_ads']?>" <?php if($data['rd3_page_3rd_img_ads'] == '1'){ echo "checked"; }?> id="rd3pageimg_3">
            <label class="form-check-label" for="rd3pageimg_3">
                3rd images bottom ads
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="<?php echo $data['rd3_page_bottom_ads']?>" <?php if($data['rd3_page_bottom_ads'] == '1'){ echo "checked"; }?> id="rd3ads_bottom">
            <label class="form-check-label" for="rd3ads_bottom">
                Bottom Ads
            </label>
        </div>
    </div>
</div>

<div class="box box-primary">
    <div class="box-body">
        <h4 class="text-center">4th Page Ads</h4>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="<?php echo $data['th4_page_top_ads']?>" <?php if($data['th4_page_top_ads'] == '1'){ echo "checked"; }?> id="th4page_top">

            <label class="form-check-label" for="th4page_top">
                Top Ads
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="<?php echo $data['th4_page_1st_img_ads']?>" <?php if($data['th4_page_1st_img_ads'] == '1'){ echo "checked"; }?> id="th4page_1">
            <label class="form-check-label" for="th4page_1">
                1st images bottom ads
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="<?php echo $data['th4_page_2nd_img_ads']?>" <?php if($data['th4_page_2nd_img_ads'] == '1'){ echo "checked"; }?> id="th4page_2">
            <label class="form-check-label" for="th4page_2">
                2nd images bottom ads
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="<?php echo $data['th4_page_3rd_img_ads']?>" <?php if($data['th4_page_3rd_img_ads'] == '1'){ echo "checked"; }?> id="th4page_3">
            <label class="form-check-label" for="th4page_3">
                3rd images bottom ads
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="<?php echo $data['th4_page_bottom_ads']?>" <?php if($data['th4_page_bottom_ads'] == '1'){ echo "checked"; }?> id="th4ads_bottom">
            <label class="form-check-label" for="th4ads_bottom">
                Bottom Ads
            </label>
        </div>
    </div>
</div>

<div class="box box-primary">
    <div class="box-body">
        <h4 class="text-center">5th Page Ads</h4>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="<?php echo $data['th5_page_top_ads']?>" <?php if($data['th5_page_top_ads'] == '1'){ echo "checked"; }?> id="th5page_top">

            <label class="form-check-label" for="th5page_top">
                Top Ads
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="<?php echo $data['th5_page_1st_img_ads']?>" <?php if($data['th5_page_1st_img_ads'] == '1'){ echo "checked"; }?> id="th5page_1">
            <label class="form-check-label" for="th5page_1">
                1st images bottom ads
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="<?php echo $data['th5_page_2nd_img_ads']?>" <?php if($data['th5_page_2nd_img_ads'] == '1'){ echo "checked"; }?> id="th5page_2">
            <label class="form-check-label" for="th5page_2">
                2nd images bottom ads
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="<?php echo $data['th5_page_3rd_img_ads']?>" <?php if($data['th5_page_3rd_img_ads'] == '1'){ echo "checked"; }?> id="th5page_3">
            <label class="form-check-label" for="th5page_3">
                3rd images bottom ads
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="<?php echo $data['th5_page_bottom_ads']?>" <?php if($data['th5_page_bottom_ads'] == '1'){ echo "checked"; }?> id="th5ads_bottom">
            <label class="form-check-label" for="th5ads_bottom">
                Bottom Ads
            </label>
        </div>
    </div>
</div>

<div class="box box-primary">
    <div class="box-body">
        <h4 class="text-center">Ads Type</h4>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="<?php echo $data['pop_alert']?>" <?php if($data['pop_alert'] == '1'){ echo "checked"; }?> id="pop_alert">

            <label class="form-check-label" for="pop_alert">
                POP & Alert
            </label>
        </div>

    </div>
</div>

<div class="box box-primary">
    <div class="box-body">
        <button id='submit' style="width: 100%;" class="btn btn-success">Submit</button>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('#submit').click(function(){
        $('#submit').html('Loadding...');
        // ajax
        $.ajax({
            'url' : 'http://localhost/data/laravel/22_client_site_20/01_shrotcut/api/ads_update',
            'method' : 'GET',
            'data' : {
                'st1_page_top_ads' : $('#st1page_top').val(),
                'st1_page_1st_img_ads' : $('#st1img_1').val(),
                'st1_page_2nd_img_ads' : $('#st1img_2').val(),
                'st1_page_3rd_img_ads' : $('#st1img_3').val(),
                'st1_page_bottom_ads' : $('#st1ads_bottom').val(),

                'nd2_page_top_ads' : $('#nd2page_top').val(),
                'nd2_page_1st_img_ads' : $('#nd2pageimg_1').val(),
                'nd2_page_2nd_img_ads' : $('#nd2pageimg_2').val(),
                'nd2_page_3rd_img_ads' : $('#nd2pageimg_3').val(),
                'nd2_page_bottom_ads' : $('#nd2ads_bottom').val(),

                'rd3_page_top_ads' : $('#rd3page_top').val(),
                'rd3_page_1st_img_ads' : $('#rd3pageimg_1').val(),
                'rd3_page_2nd_img_ads' : $('#rd3pageimg_2').val(),
                'rd3_page_3rd_img_ads' : $('#rd3pageimg_3').val(),
                'rd3_page_bottom_ads' : $('#rd3ads_bottom').val(),

                'th4_page_top_ads' : $('#th4page_top').val(),
                'th4_page_1st_img_ads' : $('#th4page_1').val(),
                'th4_page_2nd_img_ads' : $('#th4page_2').val(),
                'th4_page_3rd_img_ads' : $('#th4page_3').val(),
                'th4_page_bottom_ads' : $('#th4ads_bottom').val(),

                'th5_page_top_ads' : $('#th5page_top').val(),
                'th5_page_1st_img_ads' : $('#th5page_1').val(),
                'th5_page_2nd_img_ads' : $('#th5page_2').val(),
                'th5_page_3rd_img_ads' : $('#th5page_3').val(),
                'th5_page_bottom_ads' : $('#th5ads_bottom').val(),

                'pop_alert' : $('#pop_alert').val(),
            },
            success:function(data){
                $('#submit').html('SUCCESS');
            }
        })
    })

    // input click 
    $('input').click(function(){
        if($(this).val() == 1){
            $(this).val('0');
        }else{
            $(this).val('1');
        }
    });
</script>