<div class="uk-visible@m sm-genre-area uk-margin-medium-right">
  <div class="uk-flex uk-flex-center uk-margin-large-top">
    <select name="sources" id="genre-selector" class="custom-select sources" placeholder="全ジャンル">
      <option genre-text="総合" value="genre-all">総合</option>
      <?php
      foreach($genreList as $genre){
        print "<option genre-text='${genre['genre_name']}' value='genre-${genre['genre_path']}'>${genre['genre_name']}</option>";
      }
      ?>
    </select>
  </div>
</div>
