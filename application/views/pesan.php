<?php if ($this->session->has_userdata('messages')) { ?> 
<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i>oke!</h4><?=strip_tags(str_replace('</p>','',$this->session->flashdata('messages')));?>
</div>
<?php } ?>


<?php if ($this->session->has_userdata('error')) { ?> 
<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i>Perhatian!</h4><?=strip_tags(str_replace('</p>','',$this->session->flashdata('error')));?>
</div>
<?php } ?>



<?php if ($this->session->has_userdata('nonvalid')) { ?> 
<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i>!</h4><?=strip_tags(str_replace('</p>','',$this->session->flashdata('nonvalid')));?>
</div>
<?php } ?>