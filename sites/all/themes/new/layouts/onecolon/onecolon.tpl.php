<?php
/**
 * @file
 * Template for a 3 column panel layout.
 *
 * This template provides a very simple "one column" panel display layout.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   $content['middle']: The only panel in the layout.
 */
?>
<div class="panel-display panel-1col clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
    
    <div class="top-wrapper">
     <div class="panel-panel panel-col-top-left">
     	  <div class="inside"><?php print $content['top_left']; ?></div>
     </div>

       <div class="panel-panel panel-col-top-right">
          <div class="inside"><?php print $content['top_right']; ?></div>
       </div>
    </div>

    <div class="center-wrapper">
     <div class="panel-panel panel-col-first">
         <div class="inside"><?php print $content['middle_left']; ?></div>
     </div>

      <div class="panel-panel panel-col-second">
          <div class="inside"><?php print $content['middle_center']; ?></div>
      </div>

      <div class="panel-panel panel-col-third">
          <div class="inside"><?php print $content['middle_right']; ?></div>
      </div>
    </div>

    <div class="bottom-wrapper">
        <div class="panel-panel panel-col-bottom">
          <div class="inside"><?php print $content['bottom']; ?></div>
        </div>
    </div>
</div>
