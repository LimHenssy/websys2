<?= $this->include('templates/header') ?>

<div class="p-5 mb-4 bg-light rounded-3 shadow-sm">
    <div class="container-fluid py-3">
        <h1 class="display-5 fw-bold">POS System (Database-Driven)</h1>
        <p class="col-md-8 fs-4">Welcome to the Anime POS Management system powered by MySQL database models.</p>
        <a class="btn btn-primary btn-lg" href="<?= base_url('customers') ?>" role="button">View Customers</a>
        <a class="btn btn-outline-secondary btn-lg" href="<?= base_url('users') ?>" role="button">View Users</a>
    </div>
</div>

<?= $this->include('templates/footer') ?>