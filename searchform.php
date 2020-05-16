<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
  <label>
    <span class="screen-reader-text">Search for:</span>
    <input type="search" value="" name="s" id="s" class="search-field" size="20"
      placeholder=" &nbsp; <?php the_search_query();?>" />
  </label>
  <input type="submit" class="search-submit" value="Search" />
</form>