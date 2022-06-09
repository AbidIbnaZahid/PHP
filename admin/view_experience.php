<?php
$experience = true;
require_once "inc/header.php";
require_once "../inc/db.php";
?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.php"><?= ucfirst($_SESSION['login_success']); ?></a>
        <span class="breadcrumb-item active">Expricence view</span>
    </nav>
    <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
            <h3 class="card-body-title text-center mb-5">View Your All Expreicence List</h3>
            <table class="table table-bordered table-primary">
                <thead class="thead-inverse">
                    <tr>
                        <th>serial no</th>
                        <th>Duration</th>
                        <th>Job Name</th>
                        <th>Job Title</th>
                        <th>Job Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach (read_all_query('experience') as $key => $value) : ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $value['job_duration']; ?></td>
                            <td><?= $value['job_name']; ?></td>
                            <td><?= $value['job_title']; ?></td>
                            <td><?= $value['job_desc']; ?></td>
                            <td>
                                <a href="edit_exprience.php?id=<?= $value['id']; ?>" class="btn btn-primary btn-sm mb-2">Edit</a>
                                <button value="delete_exprience.php?id=<?= $value['id']; ?>" class="btn btn-sm btn-danger delete_btn" style="margin-top: -8px;">Delete</button>
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