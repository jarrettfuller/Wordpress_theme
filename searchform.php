<form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
<div>
<label for="s"></label> <input class="text" type="text" value="<?php if(trim(wp_specialchars($s,1))!='') echo trim(wp_specialchars($s,1));else echo ' ';?>" name="s" id="s" />
<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
</div>
</form>
