<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <?= validation_errors('submenu', '<div class= "alert alert-succcess" role="alert">', '</div>');
    ?>

    <?= $this->session->flashdata('message'); ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Title</th>
                <th scope="col">MEnu</th>
                <th scope="col">Url</th>
                <th scope="col">Icon</th>
                <th scope="col">Is_active</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addnewsubmenumodal">Add subMenu</a>
            <?php $i = 1 ?>
            <?php foreach ($submenu as $sm) : ?>
                <tr>

                    <th scope=" row"><?= $i; ?></th>
                    <td><?= $sm['title']; ?></td>
                    <td><?= $sm['menu_id']; ?></td>
                    <td><?= $sm['url']; ?></td>
                    <td><?= $sm['icon']; ?></td>
                    <td><?= $sm['is_active']; ?></td>
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
<div class="modal fade" id="addnewsubmenumodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addnewsubmenumodalLabel">Add Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('submenu'); ?> " method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="menu" name="menu" placeholder="menu name">
                        <select class="form-control">
                            <option>Default select</option>
                        </select>
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