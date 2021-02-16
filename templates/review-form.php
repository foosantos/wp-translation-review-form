<?php

	$issues = get_post_meta( get_the_ID(), 'wptrf_review_issues_group', true );
?>

<?php if( empty($_GET)) { ?>

	<form>
	<label for="fullname">Translator name:</label> <input type="text" id="fullname" name="fullname"><br>
	<?php foreach( $issues as $key => $value ) { ?>
		<input type="checkbox" id="i<?php echo $key; ?>" name="i[]" value="<?php echo $key; ?>">
		<label for="i<?php echo $key; ?>"><?php echo $value['title']; ?></label><br>
	<?php } ?>
	<input type="submit" value="Submit">
  </form>

<?php } else { ?>

	<?php echo $_GET['fullname'] ?>

<?php } ?>
