<?php include 'dataset.php'; ?>
<div class="container-fluid  dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">News List</h2>
                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo $url; ?>" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">News List</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- ============================================================== -->
        <!-- basic table  -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered first">
                            <thead>
                                <tr>
                                    <th>News Title</th>
                                    <th>Category</th>
                                    <th>Publish Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($newsList as $value) { ?>
                                    <?php if ($value['status'] == 0) {
                                        $stsClass = 'dark';
                                        $stsText = 'Draft';
                                    } elseif ($value['status'] == 1) {
                                        $stsClass = 'success';
                                        $stsText = 'Published';
                                    } elseif ($value['status'] == 2) {
                                        $stsClass = 'warning';
                                        $stsText = 'Pending';
                                    } ?>

                                    <tr>
                                        <td><a href=""><?php echo $value['title']; ?></a></td>
                                        <td><?php echo $category[$value['category']]; ?></td>
                                        <td><?php echo $value['publish_date']; ?></td>
                                        <td class="alert alert-<?php echo $stsClass ?>">
                                            <span class="badge-dot badge-<?php echo $stsClass ?>"></span><?php echo $stsText ?>
                                        </td>
                <td class="text-center">
                   <div class="btn-group ">
                        <a href="<?php echo $url; ?>?page=view&id=<?php echo $value['id']; ?>" class="btn btn-sm btn-outline-primary">
                            <i class="far fa-edit text-primary"></i>
                        </a>
                        <a href="" class="btn btn-sm btn-outline-success">
                            <i class="fas fa-eye text-success"></i>
                        </a>
                        <a href="" class="btn btn-sm btn-outline-danger">
                            <i class="far fa-trash-alt text-danger"></i>
                        </a>
                   </div>
                </td>
                                    </tr>
                                <?php } ?>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end basic table  -->
        <!-- ============================================================== -->
    </div>
</div>
