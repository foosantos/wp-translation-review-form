<?php

	$feedback_message = get_post_meta( get_the_ID(), 'wptrf_message', true );
	$issues = get_post_meta( get_the_ID(), 'wptrf_review_issues_group', true );
	$selected_issues = $_GET['i'];
?>

<?php if( empty($_GET)) { ?>

	<form>

	<!-- <label for="fullname">Translator name:</label> <input type="text" id="fullname" name="fullname"><br> -->

	<?php foreach( $issues as $key => $value ) { ?>
		<input type="checkbox" id="i<?php echo $key; ?>" name="i[]" value="<?php echo $key; ?>">
		<label for="i<?php echo $key; ?>"><?php echo $value['title']; ?></label><br>
	<?php } ?>
	<input type="submit" value="Submit">
  </form>

<?php } else { ?>

	<div class="feedback-message">

		<?php echo wpautop( $feedback_message ); ?>

	</div>

	<?php $selected_issues = $_GET['i']; ?>

	<ul class="issues-results">
		<?php foreach( $selected_issues as $value ) { ?>
				<li> <?php echo $issues[$value]['title']; ?>: <?php echo $issues[$value]['description']; ?> </li>
		<?php } ?>
	</ul>

<?php } ?>
