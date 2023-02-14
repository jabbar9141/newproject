

@include('partials.scripts')
      @include('partials.modals.filter');
      <!-- Navbar-->
      <nav id="id_nav_filters_bar" class="class_nav_filters_bar div_header_head navbar navbar-expand-lg fixed-top navbar-light bg-white">
        <div class="container-fluid">
          <div class="d-flex align-items-center"><a class="navbar-brand py-1">


<!--DEFINO LA NAVBAR DE LOS FILTROS PARA RESPONSIVE-->
    <div class="class_filters_responsive">
        <img data-bs-toggle="modal" data-bs-target="#modal_filter" class="class_icon_filter_responsive" src="icons/filter_grey.png" data-bs-toggle="modal" data-bs-target="#modal_filter">
        <a data-bs-toggle="modal" data-bs-target="#modal_filter"><?php
            $query1 = DB::select("SELECT * FROM gr_texts WHERE variable='text3_sub_header_filters'");
            foreach ($query1 as $result_query1){
            echo $result_query1->lang_es;
            };
        ?></a>
    </div>
<!--FIN DE DEFINO LA NAVBAR DE LOS FILTROS PARA RESPONSIVE-->



<div class="class_filters_desktop">
<!--FILTRO DE BÚSQUEDA DE LA UBICACIÓN-->
<form action="{{ route('apply.filter') }}" method="post">
    @csrf
    @method('post')
          <input id="id_input_location"
               name="location"
               class="class_button_filter_ubi class_input_box form-control"
               type="text"
               placeholder="<?php $query1 = DB::select("SELECT * FROM gr_texts WHERE variable='text1_sub_header_filters'");
                                foreach ($query1 as $result_query1){
                                echo $result_query1->lang_es;
                                };
                                ?>"
                required>
          <span class="class_icon_search_ubi_filter class_input_box label-absolute nav_search_icon class_icon_location class_icon_location_filter_results"><i class="fa fa-map-marker-alt"></i></span>
          <!--FIN DEL FILTRO DE BÚSQUEDA DE LA UBICACIÓN-->
<!--FILTRO DE BÚSQUEDA DE LA MATRÍCULA-->
<input id="id_input_matricula" class="class_button_filter_matricula class_input_box form-control" type="text" placeholder="<?php
$query2 = DB::select("SELECT * FROM gr_texts WHERE variable='text2_sub_header_filters'");
foreach ($query2 as $result_query2){
  echo $result_query2->lang_es;
};
?>" onkeyup="this.value=ParametroMatricula(this.value)">
<!--FIN DEL FILTRO DE BÚSQUEDA DE LA MATRÍCULA-->




<!--SCRIPT PARA CAMBIAR PLACEHOLDER EN EL INPUT DE LA MATRICULA-->
<script>
    $('#id_input_matricula').focus(function() {
        $(this).attr('placeholder', '0000-AAA')
    }).blur(function() {
        $(this).attr('placeholder', '<?php
        $query2 = DB::select("SELECT * FROM gr_texts WHERE variable='text2_sub_header_filters'");
        foreach ($query2 as $result_query2){
        echo $result_query2->lang_es;
        };
    ?>')
    })
    document.getElementById("id_input_matricula").maxLength = "8";
    //DEFINO LA ESTRUCURA DEL CAMPO
    var idco = document.getElementById('id_input_matricula')
    idco.addEventListener('keydown', function(event) {
    const key = event.key;
    if (key !== "Backspace") {
        if (idco.value.length == 4) {
        idco.value = idco.value + '-';
        }
    }
    }, false)
    //BLOQUEO LOS ESPACIOS
    function ParametroMatricula(string){
        return string.split(" ").join("");
    }
</script>
<!--FIN DEL SCRIPT PARA CAMBIAR PLACEHOLDER EN EL INPUT DE LA MATRICULA-->












<!--FILTRO DE BÚSQUEDA DE LOS FILTROS-->
    <input class="class_button_filter_filtros class_input_box form-control"
      type="button" data-bs-toggle="modal" data-bs-target="#modal_filter" value="<?php
                $query3 = DB::select("SELECT * FROM gr_texts WHERE variable='text3_sub_header_filters'");
                foreach ($query3 as $result_query3){
                echo $result_query3->lang_es;
                };
            ?>"
     >
<img data-bs-toggle="modal" data-bs-target="#modal_filter" class="class_icon_filter" src="icons/filter_grey.png">
<!--FIN DEL FILTRO DE BÚSQUEDA DE LOS FILTROS-->
<!--BOTÓN DE BÚSQUEDA-->
    <button class="class_button_buscar_filtros class_input_box form-control" type="submit" value="">
        <?php
        $query4 = DB::select("SELECT * FROM gr_texts WHERE variable='search_button_sub_header_filters'");
        foreach ($query4 as $result_query4){
        echo $result_query4->lang_es;
        };
        ?>
    </button>
</form>
 </a>
 </div>
<!--FIN DEL BOTÓN DE BÚSQUEDA-->
<!--LLAMO A LAS DEPENDECIAS-->
<script src="js/display_map.js"></script>
<!--FIN DE LLAMO A LAS DEPENDECIAS-->
        <div class="class_switch_selector_enable_map form-check form-switch">
            <input class="form-check-input class_input_box" id="myCheckbox" onchange="toggleCheck()" type="checkbox" checked>
            <label class="form-check-label" for="formSwitch"><?php
$query5 = DB::select("SELECT * FROM gr_texts WHERE variable='map_button_sub_header_filters'");
foreach ($query5 as $result_query5){
  echo $result_query5->lang_es;
};
?></label>
                        </div>

      </nav>

