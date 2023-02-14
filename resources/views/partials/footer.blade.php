
<footer>
      <!-- Main block - menus, subscribe form-->
      <div class="bg-gray-200 text-muted style_footer">
        <div class="container main-section">
          <div class="row">
            <div class="col-lg-3 mb-5 mb-lg-0">

            <div class="logo_footer text-dark mb-3">
             <img id="gr_logo" src="{{asset('img/logo.png')}}">

            </div>

     </div>
            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">



            <h6 class="text-dark mb-3"><?php $query3 = DB::select("SELECT * FROM gr_texts WHERE variable='title3_footer'"); foreach ($query3 as $result_query3) { echo $result_query3->lang_es; }?></h6>
              <ul class="list-inline">
              <li><a class="text-muted" href="#"><?php $query4 = DB::select("SELECT * FROM gr_texts WHERE variable='title2_footer_value1'"); foreach ($query4 as $result_query4) { echo $result_query4->lang_es; }?></a></li>
                <li><a class="text-muted" href="#"><?php $query5 = DB::select("SELECT * FROM gr_texts WHERE variable='title2_footer_value2'"); foreach ($query5 as $result_query5) { echo $result_query5->lang_es; }?></a></li>

                <li><a class="text-muted" href="#"><?php $query7 = DB::select("SELECT * FROM gr_texts WHERE variable='title2_footer_value4'"); foreach ($query7 as $result_query7) { echo $result_query7->lang_es; }?></a></li>
                <li><a class="text-muted" href="#"><?php $query6 = DB::select("SELECT * FROM gr_texts WHERE variable='title2_footer_value3'"); foreach ($query6 as $result_query6) { echo $result_query6->lang_es; }?></a></li>
</ul>



            </div>
            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
              <h6 class="text-dark mb-3"><?php $query2 = DB::select("SELECT * FROM gr_texts WHERE variable='title2_footer'"); foreach ($query2 as $result_query2) { echo $result_query2->lang_es; }?></h6>
              <ul class="list-unstyled">

                <li><a class="text-muted" href="#"><?php $query8 = DB::select("SELECT * FROM gr_texts WHERE variable='title2_footer_value5'"); foreach ($query8 as $result_query8) { echo $result_query8->lang_es; }?></a></li>
                <li><a class="text-muted" href="#"><?php $query9 = DB::select("SELECT * FROM gr_texts WHERE variable='title3_footer_value1'"); foreach ($query9 as $result_query9) { echo $result_query9->lang_es; }?></a></li>
              </ul>
            </div>

            <div class="col-lg-2">

            <h6 class="text-dark mb-3"><?php $query1 = DB::select("SELECT * FROM gr_texts WHERE variable='title1_footer'"); foreach ($query1 as $result_query1) { echo $result_query1->lang_es; }?></h6>
              <ul class="list-inline">
              <li class="list-inline-item"><a class="text-muted text-primary-hover style_social_media_icons" href="https://www.linkedin.com/company/garer/" target="_blank" title="linkedin"><i class="fab fa-linkedin"></i></a></li>
                <li class="list-inline-item"><a class="text-muted text-primary-hover style_social_media_icons" href="/" target="_blank" title="facebook"><i class="fab fa-facebook"></i></a></li>
                <li class="list-inline-item"><a class="text-muted text-primary-hover style_social_media_icons" href="https://www.instagram.com/garerapp/" target="_blank" title="instagram"><i class="fab fa-instagram"></i></a></li>
              </ul>


            </div>

          </div>
        </div>
      </div>
      <!-- Copyright section of the footer-->
      <div class="py-4 fw-light bg-gray-800 text-gray-300 style_subfooter">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start style_subfooter_text">
              <p class="footer_text mb-md-0 style_text_subfooter">&copy; <?php echo date("Y"); ?>, GarerApp, S.L.  <?php $query10 = DB::select("SELECT * FROM gr_texts WHERE variable='title_subfooter1'"); foreach ($query10 as $result_query10) { echo $result_query10->lang_es; }?>
              <a class="class_a_subfooter_text" href="https://policies.google.com/privacy" target="_blank"><?php $query11 = DB::select("SELECT * FROM gr_texts WHERE variable='title_subfooter1_link1'"); foreach ($query11 as $result_query11) { echo $result_query11->lang_es; }?></a>
              <?php $query12 = DB::select("SELECT * FROM gr_texts WHERE variable='title_subfooter2'"); foreach ($query12 as $result_query12) { echo $result_query12->lang_es; }?>
              <a class="class_a_subfooter_text" href="https://policies.google.com/terms" target="_blank"><?php $query13 = DB::select("SELECT * FROM gr_texts WHERE variable='title_subfooter1_link2'"); foreach ($query13 as $result_query13) { echo $result_query13->lang_es; }?></a>
              <?php $query14 = DB::select("SELECT * FROM gr_texts WHERE variable='title_subfooter3'"); foreach ($query14 as $result_query14) { echo $result_query14->lang_es; }?>
            </div>

          </div>
        </div>
      </div>
    </footer>
