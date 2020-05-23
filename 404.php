 <?php
/*
 * Template for displaying 404 pages (Not Found)
 */

get_header();?>

 <?php
if (function_exists('acf_add_options_page')) {?>

 <div class="block_container">
   <div class="container">
     <div class="row">
       <div class="col-md-8">
         <div class="nopage section_spacing_top_medium">

           <h3 class="nopage-heading"><?php the_field('404_heading', 'option');?></h3>
           <p class="nopage-content"> <?php the_field('404_content', 'option');?></p>
         </div>
       </div>
     </div>
   </div>
 </div>

 <?php
}
?>
 <?php get_footer();?>