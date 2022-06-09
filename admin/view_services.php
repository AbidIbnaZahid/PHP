<?php
$service = true;
require_once "inc/header.php";
require_once "../inc/db.php";
?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.php"><?= ucfirst($_SESSION['login_success']); ?></a>
        <span class="breadcrumb-item active">Services</span>
    </nav>
    <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
            <h3 class="card-body-title text-center mb-5">View Your All Services List</h3>
            <table class="table table-bordered table-primary">
                <thead class="thead-inverse">
                    <tr>
                        <th>serial no</th>
                        <th>Service Name</th>
                        <th>Services Description</th>
                        <th>Service Icon</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach (read_all_query('services') as $key => $value) : ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $value['service_name']; ?></td>
                            <td><?= $value['service_desc']; ?></td>
                            <td><?= $value['service_icon']; ?></td>
                            <td>
                                <button value="delete_services.php?id=<?= $value['id']; ?>" class="btn btn-sm btn-danger delete_btn">Delete</button>
                            </td>
                        </tr>
                    <?php
                    endforeach;
                    ?>
                </tbody>
            </table>

        </div>
    </div>


</div><!-- sl-pagebody -->
<?php
require_once "inc/footer.php";
?>
<script>
    $('.delete_btn').click(function() {
        var link = $(this).val();
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link;

            }
        })
    });
</script>