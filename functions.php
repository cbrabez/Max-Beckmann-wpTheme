<?php
register_sidebar(array(
  'name' => __( 'Right-Sidebar' ),
  'id' => 'sidebar-right',
  'description' => __( 'Widgets in this area will be shown on the right-hand side.' ),
  'before_title' => '<h1>',
  'after_title' => '</h1>'
));

if ( current_user_can('contributor') && !current_user_can('upload_files') )
	add_action('admin_init', 'allow_contributor_uploads');

function allow_contributor_uploads() {
	$contributor = get_role('contributor');
	$contributor->add_cap('upload_files');
}

?>

