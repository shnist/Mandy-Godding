<?php get_header(); ?>

<?php include ('blocks/slideshow.php') ?>

<!-- content -->
<div id="cont">
<!-- 	<table class="timetable">
		<caption>MGTA Timetable September 2014</caption>
		<thead>
			<tr>
				<th>Monday</th>
				<th>Tuesday</th>
				<th>Wednesday</th>
				<th>Thursday</th>
				<th>Friday</th>
				<th>Saturday</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th>Studio 1</th>
				<th>Studio 1</th>
				<th>Studio 1</th>
				<th>Studio 1</th>
				<th>Studio 1</th>
				<th>Studio 1</th>
			</tr>
			<tr>
				<td>4.30 Senior Ballet</td> 
				<td>4.15 Junior Street</td> 
				<td>4.15 Inter F Ballet</td> 
				<td>4.45 Boys Ballet Group</td> 
				<td>4.15 Inter Tap</td>
				<td>9.20 Pri Ballet</td>
			</tr>
			<tr>
				<td>5.30 Pointe</td> 
				<td>5.00 Junior Festival</td> 
				<td>5.00 Inter Ballet</td> 
				<td>5.30 Grade 2/3 Technique</td> 
				<td>4.45 Inter Ballet</td> 
				<td>9.50 Pri Tap</td>
			</tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr>
				<th>Studio 2</th>
				<th>Studio 2</th>
				<th>Studio 2</th>
				<th>Studio 2</th>
				<th>Studio 2</th>
				<th>Studio 2</th>
			</tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr>
				<th>Longlevens</th>
				<th>Studio 3</th>
				<th>Studio 3</th>
				<th>Studio 3</th>
				<th>Studio 3</th>
				<th>Studio 3</th>
			</tr>
		</tbody>
	</table> -->
	<?php
		$my_id = 101;
		$post_id_101 = get_post($my_id);
		$content = $post_id_101->post_content;
		$content = apply_filters('the_content', $content);
		$content = str_replace(']]>', ']]>', $content);
		echo $content;
	?>
	<?php include('blocks/qualifications.php'); ?>
</div>

<?php get_footer(); ?>