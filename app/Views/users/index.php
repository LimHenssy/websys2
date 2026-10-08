<?= $this->include('templates/header') ?>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>User Accounts</h2>
    <span class="badge bg-success">MySQL Database Source</span>
</div>

<div class="table-responsive shadow-sm rounded">
    <table class="table table-striped table-hover align-middle mb-0">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Full Name</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($users) && is_array($users)): ?>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= esc($user['id']) ?></td>
                        <td><code><?= esc($user['username']) ?></code></td>
                        <td><strong><?= esc($user['full_name']) ?></strong></td>
                        <td><small class="text-muted"><?= esc($user['created_at']) ?></small></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4" class="text-center text-muted">No user records found in database.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?= $this->include('templates/footer') ?>