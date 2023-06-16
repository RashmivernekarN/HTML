vijay@ampwork.com
9731251461
<?php include "admin_header.php"; ?>
<section>
	<h1>View Users</h1>
	<table style="border:1px solid #223c4a;width:100%;padding:20px;margin:10px 0;">
		<thead>
			<tr>
				<th>Sl.No</th>
				<th>Name</th>
				<th>Email</th>
				<th>Username</th>
				<th>Password</th>
				<th>Reg Date</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$selectQuery="SELECT * FROM user ";
				$stmt=$con->query($selectQuery);
				$no=1;
				while($row=mysqli_fetch_assoc($stmt)){
				?>
					<tr>
						<td><?=$no?></td>
						<td><?=$row['name']?></td>
						<td><?=$row['email']?></td>
						<td><?=$row['username']?></td>
						<td><?=$row['password']?></td>
						<td><?=$row['reg_date']?></td>
						<td>
							<form method="POST" action="delete.php">
								<input type="hidden" name="recordId" value="<?=$row['id']?>">
								<button type="submit" name="submit">Delete</button>
							</form>
						</td>
					</tr>
				<?php
				$no++;
				}

			?>
		</tbody>
	</table>
</section>
<?php include "footer.php";?>

