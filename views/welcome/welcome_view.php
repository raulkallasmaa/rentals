<h1><?= __("Welcome") ?> '<?= $welcome['welcome_name'] ?>'</h1>
<table class="table table-bordered">

    <tr>
        <th><?= __("Welcome") ?> ID</th>
        <td><?= $welcome['welcome_id'] ?></td>
    </tr>

    <tr>
        <th><?= __("Welcome") ?><?= __("name") ?></th>
        <td><?= $welcome['welcome_name'] ?></td>
    </tr>

</table>

<!-- EDIT BUTTON -->
<?php if ($auth->is_admin): ?>
    <form action="welcome/edit/<?= $welcome['welcome_id'] ?>">
        <div class="pull-right">
            <button class="btn btn-primary">
                <?= __("Edit") ?>
            </button>
        </div>
    </form>
<?php endif; ?>