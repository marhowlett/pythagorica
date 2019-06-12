<?php
    /* Template Name: AmeRuiz */ 
    get_header();
?>

    <section id="banneruiz" class="template-section">
       <h1>Ame Ruíz </h1>
       <div class="dra">
           <p>La Dra. María Amelia Ruíz es Argentina, abogada, escritora, fundadora de la Academia de Filosofía Pythagorica (AC), Argentina-México, con un vasto material escrito en libros (12 volúmenes con varias ediciones, y otros solo en reproducciones internas; alrededor de 80), impartidos en talleres, retiros, seminarios, conferencias; desde hace treinta años en Argentina y veintiuno en las diversas sedes de México, ininterrumpidamente.</p>
       </div>
    </section >
 
     <section id="organizacion" class="template-section">
     <div class="contenedor">
           <div class="grid">

                <div class="col">
                <p>Esta organización se gestó como tal hace 30 años en Argentina y sus integrantes se dedican al estudio, Investigación y difusión del Conocimiento de la Filosofía Pythagorica. Participan activamente personas comprometidas con el saber, a lo largo de Argentina y México, que sistemáticamente acuden a grupos de estudio y reciben seminarios por parte de la Dra. Amelia Ruiz en 14 sedes, las cuales son coordinadas por Instructores autorizados de esta filosofía.</p>
                 </div>
                 <div class="col">
                 <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/argentina.png" alt="Logo">
                 </div>
         </div>
         <div class="grid">

                <div class="col">
                 <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gente.png" alt="Logo">
             
                 </div>
                 <div class="col">
                   <p class="permanece">La gente permanece cautivada estudiando este conocimiento por años, pues cuando se abre una ventana, se accede al saber que ofrece, y cuando luego se logra la voluntad para aplicarlo en la propia vida, se abre otra ventana hacia el Misterio del propio camino que siempre ofrece: un Plan de Vida Feliz…</p>
                 </div>
         </div>
         </div>
</section>
 <section id="invitar" class="template-section">
     <div class="contenedor">
     <p>En el año 2004 esta organización de aprendices de Filosofía Pythagorica se institucionalizó como una asociación civil, y recientemente la formación en filosofía Pythagorica ha llegado a Estados Unidos y España.</p>
     <p><strong>¡Cientos de personas de diferentes naciones, edades, profesiones, religiones, estratos sociales y culturales, unidas en la búsqueda y estudio de un Conocimiento filosófico milenario, nos hace presentir hasta la certeza, que este conocimiento puede iluminar, guiar y transformar el Camino de la vida de todo ser humano!</strong></p>
     <h2>Los invitamos a descubrirlo</h2>
</div>
</section>

<section id="videos" class="template-section">
<h2><span>Videos de</span> <br>Ame Ruíz</h2>
<?php echo do_shortcode('[elfsight_youtube_gallery id="1"]');?>


</section>

<div class="contactoruiz">
    <?php include 'contacto.php'; ?>
</div>

<?php 
    get_footer();
?>
