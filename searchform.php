<form action="<?php echo home_url(); ?>" id="search-form" method="get">
						 
    <input type="text" name="s" id="s" value="search" onblur="if(this.value=='')this.value='search'" onfocus="if(this.value=='search')this.value=''" />
    <input type="hidden" value="submit" />
						 
</form>