<?php

$uri = $_SERVER['REQUEST_URI'];
$page = get_page_by_path($uri);

$pageName = $page->post_name;
$pageTitle = $page->post_title;
$pageContent = $page->post_content;

get_header();

switch ($pageName) {
    case 'articles': {
            get_view('articles');
            break;
        }
    case 'events': {
            get_view('events');
            break;
        }
    case 'about-us': {
            get_view('static');
            break;
        }
    case 'join-resg': {
            get_view('static');
            break;
        }
    case 're-sources': {
            get_view('static');
            break;
        }
    case 'researchers': {
            get_view('static');
            break;
        }
    default: {
            get_view('index');
            break;
        }
}

get_footer();
?>