<?php
include(ROOT_PATH . '/views/partials/header.php');
?>

	<h1>Welcome to Bank!</h1>

	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Name</th>
			<th>Account Number</th>
			<th>Actions</th>
		</thead>
		<tbody>
			<?php foreach($users as $user): ?>
				<tr>
					<td>
						<?php echo $user->id; ?>
					</td>
					<td>
						<?php echo $user->getFullName(); ?>
					</td>
					<td>
						<?php
							if(count($user->accounts) > 0){
								foreach ($user->accounts as $acc) {
									echo $acc->accountnumber . "<br>";
								}
								
							}else{
								echo "-";
							}
						?>
					</td>
					<td>
						<a href="user.php?id=<?php echo $user->id; ?>" class="btn btn-primary">View &raquo;</a>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

	<h1>Accounts</h1>

<table class="table table-striped">
	<thead>
		<th>ID</th>
		<th>Account</th>
		<th>Balance</th>
		<th>Name</th>
	</thead>
	<tbody>
		<?php foreach($accs as $acc): ?>
			<tr>
				<td>
					<?php echo $acc->id; ?>
				</td>
				<td>
					<?php echo $acc->accountnumber; ?>
				</td>
				<td>
					<?php echo $acc->balance; ?>
				</td>
				<td>
					<?php
						if($acc->user){
							echo $acc->user->getFullName();
						}else{
							echo "-";
						}
					?>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<?php
include(ROOT_PATH . '/views/partials/footer.php');