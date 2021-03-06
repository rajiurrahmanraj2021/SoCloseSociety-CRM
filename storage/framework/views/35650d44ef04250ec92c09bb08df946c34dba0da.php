

<?php $__env->startSection('content'); ?>

<section class="banner-main-section py-5 all-pages-input" id="main">

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">User </h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="table-responsive">
                                            <table  class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <th class="table_header_show">
                                                             Name
                                                        </th>
                                                        <td>
                                                            <?php echo e($all_user_data->name); ?>

                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th class="table_header_show">
                                                            Role
                                                        </th>
                                                        <td>
                                                            <?php echo e($all_user_data->getRole->role); ?>


                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th class="table_header_show">
                                                            Permission
                                                        </th>
                                                        <td>
                                                            <?php
                                                                $all_data = json_decode($all_user_data->permission);
                                                            ?>
                                                            <?php $__currentLoopData = $all_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                                <?php echo e(App\Models\Navigation::find($item)->name); ?> |
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th class="table_header_show">
                                                            Phone
                                                        </th>
                                                        <td>
                                                            <?php echo e($all_user_data->phone); ?>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="table_header_show">
                                                            Email
                                                        </th>
                                                        <td>
                                                            <?php echo e($all_user_data->email); ?>

                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                            <a class="btn mt-1 btn-success" href="<?php echo e(route('users.index')); ?>">Return Back</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app_backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Desktop\SoCloseSociety-CRM\resources\views/admin/user/show.blade.php ENDPATH**/ ?>