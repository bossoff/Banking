<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="row">
  <?php

    $alertclass = "";

    if($this->session->flashdata('message-success')){

      $alertclass = "bg-theme-9";

    } else if ($this->session->flashdata('message-warning')){

      $alertclass = "bg-theme-12";

    } else if ($this->session->flashdata('message-info')){

      $alertclass = "info";

    } else if ($this->session->flashdata('message-danger')){

      $alertclass = "bg-theme-6";
    }

  if($this->session->flashdata('message-'.$alertclass)){ ?>

    <div class="col-lg-12" id="alerts">
      <div class="rounded-md flex items-center px-5 py-4 mb-2 <?php echo $alertclass; ?> text-white?>">
      <!-- <div class="text-center alert alert-<?php echo $alertclass; ?>"> -->
        <?php
        echo $this->session->flashdata('message-'.$alertclass);
        ?>
      </div>
    </div>
    
  <?php } ?>
</div>

 
 <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-9 text-white">  </div>

 <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-12 text-white"> </div>

 <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-6 text-white"> </div>
 
