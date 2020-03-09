<div class="uk-width-expand uk-flex uk-flex-column">
  <div class="uk-card uk-card-default uk-card-body uk-margin-bottom">
    <!-- 
      書籍一覧エリア
        先頭のみ左側にマージンを置いてスペースを作る
        Mサイズで6冊、sサイズは3冊まで表示
    -->
    <div class="uk-flex uk-flex-center uk-grid-small" uk-grid>
      <div>
        <div class="uk-card uk-card-default uk-card-body uk-padding-remove ">
          <a class="uk-button uk-button-default uk-height-small uk-flex uk-flex-middle" href="#book-1" uk-toggle>本1</a>
        </div>  
      </div>
      <div>
        <div class="uk-card uk-card-default uk-card-body">本2</div>  
      </div>
      <div>
        <div class="uk-card uk-card-default uk-card-body">本3</div>  
      </div>
      <div>
        <div class="uk-card uk-card-default uk-card-body">本4</div>  
      </div>
      <div>
        <div class="uk-card uk-card-default uk-card-body">本5</div>  
      </div>
      <div>
        <div class="uk-card uk-card-default uk-card-body">本6</div>  
      </div>
    </div>
  </div>
  <div class="uk-card uk-card-default uk-card-body uk-margin-bottom">書籍エリア2</div>
</div>



<div id="book-1" class="uk-flex-top" uk-modal>
  <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
    <button class="uk-modal-close-default" type="button" uk-close></button>
    <p>Modal Test</p>
  </div>
</div>