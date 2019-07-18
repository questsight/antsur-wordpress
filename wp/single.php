<?php get_header();

  while ( have_posts() ) : the_post();
    
    if(in_category('memories') || in_category('vospominaniya')) {
        get_template_part( 'template-parts/single/content-memories', get_post_type() ); 
    }
    else if (in_category('new-books') || in_category('novyie-knigi') || in_category('books-annotation') || in_category('knigi-annotatsii')) {
        get_template_part( 'template-parts/single/content-new-books', get_post_type() );
    }
    else if (in_category('upcoming-seminars') || in_category('predstoyaschie-seminaryi')) {
        get_template_part( 'template-parts/single/content-upcoming-seminars', get_post_type() );
    }
    else if (in_category('past-seminars') || in_category('proshedshie-seminaryi')) {
        get_template_part( 'template-parts/single/content-past-seminars', get_post_type() );
    }
    else if (in_category('upcoming-media') || in_category('predstoyaschie-smi') || in_category('past-media') || in_category('proshedshie-smi')) {
        get_template_part( 'template-parts/single/content-media', get_post_type() );
    }
    else if (in_category('upcoming-presentations')  || in_category('predstoyaschie-prezentatsii') || in_category('past-presentations') || in_category('prezentatsii-proshedshie')) {
        get_template_part( 'template-parts/single/content-presentations', get_post_type() );
    }
    else if (in_category('texts') || in_category('tekstyi') || in_category('encounters') || in_category('vstrechi') || in_category('tekstyi-ru') || in_category('texts-en')) {
        get_template_part( 'template-parts/single/content-texts', get_post_type() );
    }
    else if (in_category('audiozapisi') || in_category('audio') || in_category('audiozapisi-ru') || in_category('audio-en')) {
        get_template_part( 'template-parts/single/content-audio', get_post_type() );
    }
    else if (in_category('video') || in_category('videozapisi') || in_category('videozapisi-o') || in_category('video-about')) {
        get_template_part( 'template-parts/single/content-video', get_post_type() );
    }
    else if(in_category('fotografii') || in_category('foto')){
        get_template_part( 'template-parts/single/content-foto');
    }
    else if(in_category('past-conferences') || in_category('upcoming-conferences') || in_category('predstoyaschie-konferentsii') || in_category('proshedshie-konferentsii')){
        get_template_part( 'template-parts/single/content-conference');
    }
    else if(in_category('novosti') || in_category('news') || in_category('arhiv-novostey') || in_category('news-archive')){
        get_template_part( 'template-parts/single/content-facts');
    }
    else if(in_category('knigi-online')){
        get_template_part( 'template-parts/single/content-online');
    }//добавить англ.версию
    else if(is_single('dengami')){
        get_template_part( 'template-parts/single/content-campaign');
    }
    else {
        get_template_part( 'template-parts/single/content-single', get_post_type() );
    }


  endwhile;

get_footer(); ?>