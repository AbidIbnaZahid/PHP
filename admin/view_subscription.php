<?php
$subscription = true;
require_once "inc/header.php";
require_once "../inc/db.php";
?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.php"><?= ucfirst($_SESSION['login_success']); ?></a>
        <span class="breadcrumb-item active">Subscription</span>
    </nav>
    <div class="sl-pagebody text-center">
        <div class="card col-md-6 pd-20 pd-sm-40 form-layout form-layout-4 m-auto">
            <h3 class="card-body-title text-center mb-5">View Your All Subscription List</h3>
            <table class="table table-bordered table-primary">
                <thead class="thead-inverse">
                    <tr>
                        <th class="text-center">serial no</th>
                        <th class="text-center">Email Address</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach (read_all_query('subscriptions') as $key => $value) : ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $value['email']; ?></td>
                            <td> <button value="delete_subscription.php?id=<?= $value['id']; ?>" class="btn btn-sm btn-danger delete_btn" style="margin-top: -8px;">Delete</button></td>
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