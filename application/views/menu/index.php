<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <?= validation_errors('menu', '<div class= "alert alert-succcess" role="alert">', '</div>');
    ?>

    <?= $this->session->flashdata('message'); ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Menu</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addnewmenumodal">Add Menu</a>
            <?php $i = 1 ?>
            <?php foreach ($menu as $m) : ?>
                <tr>

                    <th scope=" row"><?= $i; ?></th>
                    <td><?= $m['menu']; ?></td>
                    <td>
                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php $i++ ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<!-- /.container-fluid -->



</div>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="addnewmenumodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addnewmenumodalLabel">Add Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('menu'); ?> " method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="menu" name="menu" placeholder="menu name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End of Main Content -->