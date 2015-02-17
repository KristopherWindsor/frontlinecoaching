<?php

// this adds <p> tags to post content, makes it hard to write exact html
remove_filter( 'the_content', 'wpautop' );
