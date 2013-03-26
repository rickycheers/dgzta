<h1>User details</h1>
<table class="table table-striped table-hover">
  <tbody>
    <tr>
      <th>First Name:</th>
      <td><?php echo $User->getFirstName() ?></td>
    </tr>
    <tr>
      <th>Last Name:</th>
      <td><?php echo $User->getLastName() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $User->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $User->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>
<hr />

<h2>Cars of: <?php  echo sprintf("%s %s", $User->getFirstName(), $User->getLastName()); ?> </h2>

<?php if($User->getCars()->count() > 0 ) : ?>
    <table  class="table table-striped table-hover">
      <thead>
        <tr>
          <th>Brand</th>
          <th>Model</th>
          <th>Color</th>
          <th>Status</th>
          <th>Mileage</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($User->getCars() as $car): ?>
        <tr>
          <td><?php echo $car->getBrand() ?></td>
          <td><?php echo $car->getModel() ?></td>
          <td><?php echo $car->getColor() ?></td>
          <td><?php echo $car->getStatus() ?></td>
          <td><?php echo $car->getMileage() ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
<?php else : ?>
    <h3 >
        <?php  echo sprintf("%s %s", $User->getFirstName(), $User->getLastName()); ?> still has no cars
    </h3>
<?php endif ?>


<hr />

<a class="btn btn-primary" href="<?php echo url_for('user/edit?id='.$User->getId()) ?>">Edit</a>
&nbsp;
<a class="btn btn-primary" href="<?php echo url_for('user/index') ?>">List</a>
<hr />

