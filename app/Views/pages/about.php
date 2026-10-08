<?= $this->include('templates/header') ?>

<div class="card shadow-sm">
    <div class="card-body">
        <h2 class="card-title">About Technical Formative Assessment 2</h2>
        <p class="card-text">This application extends TFA1 by migrating static arrays to a real MySQL database.</p>
        
        <h5>TFA2 Implementation Details:</h5>
        <ul>
            <li>Database Connection configured via <code>.env</code></li>
            <li>CodeIgniter Models: <code>CustomerModel</code> and <code>UserModel</code></li>
            <li>Data Retrieval using Query Builder methods (<code>findAll()</code>)</li>
        </ul>
    </div>
</div>

<?= $this->include('templates/footer') ?>