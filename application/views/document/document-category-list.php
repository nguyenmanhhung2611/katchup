<?PHP

  foreach ($list_document_category as $field => $value) {
    echo '
      <div class="item">
        <a class="link"><h4>'.$value[DANH_MUC_COL_TEN_DANH_MUC].' | </h4></a>
        <p class="text"><h4>'.$value[DANH_MUC_COL_TEN_DANH_MUC_TIENG_NHAT].'</h4></p>
      </div>
    ';

    

  }
?>