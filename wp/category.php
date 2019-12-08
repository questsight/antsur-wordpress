<?php get_header();

if(is_category('events') || is_category('sobyitiya') || is_category('seminars') || is_category('seminaryi') 
|| is_category('media') || is_category('smi') || is_category('presentations') || is_category('prezentatsii') || is_category('poezdki') || is_category('outings')){
  get_template_part( 'template-parts/category/content-events' );
}
else if(is_category('novosti') || is_category('news')){
  get_template_part( 'template-parts/category/content-news');
}
else if(is_category('upcoming-seminars') || is_category('predstoyaschie-seminaryi') || is_category('new-books') || is_category('novyie-knigi') || is_category('upcoming-media') || is_category('predstoyaschie-smi') || is_category('upcoming-presentations') || is_category('predstoyaschie-prezentatsii') || is_category('upcoming-outings') || is_category('predstoyaschie-poezdki')){
  get_template_part( 'template-parts/category/content-future');
}
else if(is_category('past-seminars') || is_category('proshedshie-seminaryi') || is_category('past-media') || is_category('proshedshie-smi') || is_category('past-presentations') || is_category('prezentatsii-proshedshie') || is_category('past-outings') || is_category('proshedshie-poezdki')){
  get_template_part( 'template-parts/category/content-past');
}
else if(is_category('memories') || is_category('vospominaniya')){
  get_template_part( 'template-parts/category/content-memories');
}
else if(is_category('audiozapisi') || is_category('tekstyi') || is_category('videozapisi') || is_category('nasledie')){
  get_template_part( 'template-parts/category/content-legacy');
}
else if(is_category('audio') || is_category('texts') || is_category('video') || is_category('legacy')){
  get_template_part( 'template-parts/category/content-legacy-eng');
}
else if(is_category('video-about') || is_category('videozapisi-o')){
  get_template_part( 'template-parts/category/content-video-about');
}
else if(is_category('books-annotation') || is_category('knigi-annotatsii')){
  get_template_part( 'template-parts/category/content-annotation');
}
else if(is_category('vstrechi') || is_category('encounters')){
  get_template_part( 'template-parts/category/content-encounters');
}
else if(is_category('konferentsii') || is_category('predstoyaschie-konferentsii') || is_category('proshedshie-konferentsii') || is_category('conferences') || is_category('past-conferences') || is_category('upcoming-conferences')){
  get_template_part( 'template-parts/category/content-conferences');
}
else if(is_category('texts-en') || is_category('tekstyi-ru')){
  get_template_part( 'template-parts/category/content-texts');
}
else if(is_category('knigi-dlya-skachivaniya') || is_category('read-on-line-and-download')){
  get_template_part( 'template-parts/category/content-books-download');
}
else if(cat_is_ancestor_of( '271', get_query_var('cat') ) || cat_is_ancestor_of( '273', get_query_var('cat') )){
  get_template_part( 'template-parts/category/content-encounters-one');
}
else if(cat_is_ancestor_of( '414', get_query_var('cat') ) || cat_is_ancestor_of( '427', get_query_var('cat') )){
  get_template_part( 'template-parts/category/content-books-download-one');
}
else{
  get_template_part( 'template-parts/category/content-category');
}

get_footer(); ?>