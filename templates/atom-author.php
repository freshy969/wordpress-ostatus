<author>
	<activity:object-type>http://activitystrea.ms/schema/1.0/person</activity:object-type>
	<name><?php the_author() ?></name>
	<uri><?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ) ); ?></uri>
	<link rel="alternate" type="text/html" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ) ); ?>" />
	<link rel="avatar" media:width="120" media:height="120" href="<?php echo esc_url( get_avatar_url( get_the_author_meta( 'ID' ), array( 'size' => 120 ) ) ); ?>" />
	<?php if ( has_header_image() ) { ?>
		<link rel="header" href="<?php echo get_header_image(); ?>" />
	<?php } ?>
	<poco:preferredUsername><?php the_author_meta( 'login' ); ?></poco:preferredUsername>
	<poco:displayName><?php the_author() ?></poco:displayName>
	<poco:note><?php echo esc_html( get_the_author_meta( 'description' ) ); ?></poco:note>
</author>
