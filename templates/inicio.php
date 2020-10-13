<?php
    /* Template Name: Inicio */ 
    get_header();
?>
     <?php echo do_shortcode('[rev_slider alias="pytha"]');
    ?>
 <section id="filosofia" class="template-section">
     <div class="contenedor">
     <h2>La Filosofía Pythagorica</h2>
     <p>Pythagoras decía que: “el Propósito de la Escuela Pythagorica de 5 siglos A.C. era elevar a la raza humana y sus cerebros a que entiendan y busquen los valores más sublimes del Espíritu, por que tal búsqueda será para el encarnado, la única fuente de su felicidad". Cada discípulo de la Vida, captará el conocimiento de acuerdo a su nivel evolutivo. Además, <strong>la antigua Escuela de Filosofia Pythagorica y la actual buscan que los seres humanos perciban la vibración de sus Almas y con ello el inconmensurable Poder que pueden manejar para transformar sus psiquis y como consecuencia el mundo en el que viven.  Este “Poder” es el que hace evolucionar, no el poder humano… el Poder trascendental, el Poder Espiritual….</strong></p>
     </div>
</section>
        <section id="ame" class="template-section">

        <div class="contenedor">
            <div class="grid invertido">
               <div class="col">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ame.png" alt="Acerca">
                </div>
                <div class="col">
                   <h2>Ame Ruiz</h2>
                    <p >
                    La Dra. María Amelia Ruiz es Argentina, abogada, escritora, fundadora de la Academia de Filosofía Pythagorica (AC), Argentina-México, con un vasto material escrito en libros (12 volúmenes con varias ediciones, y otros solo en reproducciones internas; alrededor de 80), impartidos en talleres, retiros, seminarios, conferencias; desde hace treinta años en Argentina y veintiuno en las diversas sedes de México, ininterrumpidamente.
                    </p>
                  
                    
                </div>
                 
            </div>
        </div>

    </section>
     <section id="videoame" class="template-section">
     <div class="contenedor">
     <h2> <span>Videos de</span> <br>
Ame Ruiz</h2>
     <?php echo do_shortcode('[elfsight_youtube_gallery id="1"]');?>
     </div>
</section>
<section id="nuestraacademia" class="template-section">
     <div class="contenedor">
     <h2> Conoce Nuestra Academia <br>
     <span>y encuentra todos los Centros Pythagoricos que <br>
esperan por ti en México y Argentina</span></h2>
    <div class="centro">
     <a href="http://escuelapythagorica.org/filosofia/" class="btn">Saber más</a>
     </div>
     
     </div>
</section>

<section id="conoce" class="template-section">
         <div class="pytha">
         <h2>Pythagoras </h2>
         
         <p>Conoce más acerca de el Maestro Pythagoras, de quien se decía era…filósofo, matemático, músico, médico, astrólogo, biólogo, físico, metafísico, y Maestro de Sabiduría Divina…. <strong>El creador de  Escuela Pythagorica de Divina Sabiduría de cinco siglos A. C.</strong></p>
         </div>
</section>
<section id="renacimiento" class="template-section">
        <div class="centro">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/renacimiento_logo.png" alt="Acerca">
        
        <?php echo do_shortcode('[vc_row][vc_column][woodmart_blog items_per_page="3" blog_design="masonry" img_size="200x100" parts_title="1" parts_meta="1" parts_text="1" parts_btn="1" lazy_loading="no" blog_columns="3"][/vc_column][/vc_row]');?>
        <div class="centro">
        <a href="https://escuelapythagorica.org/blog" class="btn">Leer más   </a><br>
        </div>
    </div>
</section>
   <section id="galeria" class="template-section">
   <h2>Frases del día</h2>
    <?php echo do_shortcode ('[elfsight_instagram_feed id="7"]'); ?>
    </section>
<section id="contacto_inicio" class="template-section">

        <div class="contenedor">
            <div class="grid">
               <div class="col">
                   <h2>Contáctanos</h2>
                   <p>La FILOSOFIA PYTHAGORICA quiere ofrecerte una ventana por dónde entre LUZ para tu Yo y tu vida y una PUERTA para atravesar, donde puedas encontrar las respuestas y las salidas a todos tus problemas, hasta las situaciones más engorrosas de tu vida…</p>
                   <?php echo do_shortcode('[caldera_form id="CF5cf965e5a3c39"]');?>
                </div>
                <div class="col">
                   <h2 class="interes">Enlaces de Interés</h2>
                    <a href="https://escuelapythagorica.org/centros/" class="enlace">Centros Pythagoricos en Argentina</a> <br>
                    <a href="https://escuelapythagorica.org/centros/" class="enlace">Centros Pythagoricos en México</a><br>
                    <a href="http://escuelapythagorica.org/seminario-espanol/" class="enlace">Seminarios Europa 2019 </a><br>
                    <a href="http://escuelapythagorica.org/ejemplo-seminario-2019/" class="enlace">Seminarios México 2019 </a><br>
                    <a href="http://escuelapythagorica.org/argentina/" class="enlace">Actividades  Argentina 2019 </a><br>
                    <a href="" class="enlace">Seminarios USA 2019 (PRÓXIMAMENTE) </a><br>
                 <p class="siguenos"> <span>Síguenos en</span> <a href="https://www.facebook.com/Academia-de-Filosof%C3%ADa-Pythagorica-AC-105947297754067/?ref=bookmarks" class="sigue"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/face.png" alt="Facebook"> </a> <a href="https://www.instagram.com/academiapythagoricadefilosofia/" class="sigue"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/INSTAGRAM.png" alt="IG"> </a> <a href="https://www.youtube.com/channel/UCuJSRIqvKpKO46vQ-Yy6HQg" class="sigue"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/youtube.png" alt="IG"> </a>  </p>
                    
                </div>
                 
            </div>
        </div>

    </section>
    
    

    
<?php 
    get_footer();
?>
