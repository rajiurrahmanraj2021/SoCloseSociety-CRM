<?php $__env->startSection('content'); ?>
<div class="container-fluid px-4">
    <!--==========Team Header==========-->
    <div class="current_ticket mt-3 d-flex justify-content-between flex-wrap">
        <div class="current_ticket__left">
            <div class="current_ticket__left__btn">
                <button class="btn item active">Current Ticket</button>
                <button class="btn item">Open Ticket</button>
                <button class="btn item">Closed Ticket</button>
                <button class="btn item">Solved Ticket</button>
                <button class="btn item">All</button>
            </div>
        </div>

        <div class="current_ticket__right">
            <div class="current_ticket__right__btn d-flex">
                <div class="current_ticket__right__btn__div me-2">
                    <button class="btn" data-bs-toggle="modal" data-bs-target="#createTicket" data-bs-whatever="@mdo">
                        <span><i class="fa-solid fa-circle-plus me-2"></i></span>
                        Create Ticket
                    </button>
                </div>

                <!--=====Create Tickets=====-->
                <div class="modal fade" id="createTicket" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header border-bottom-0">
                                <h5 style="color: #6C7BFF;" class="modal-title" id="exampleModalLabel">Create Ticket</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="<?php echo e(route('ticket.store')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <div class="offcanvas-body">
                                        <label for="#">Roles</label>
                                        <select name="role" id="role_dropdown" class="form-select mt-1">
                                            <option selected disabled>Select Role</option>
                                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($item->id); ?>"><?php echo e($item->role); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>

                                        <label class="mt-3" for="#">Customers</label>
                                        
                                        <select name="customer" id="user_dropdown" class="form-select mt-1" aria-label="Default select example">
                                            <?php
                                                $show_users = [];
                                            ?>
                                            <?php echo $__env->make('includes.user_dropdown', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        </select>

                                        <label class="mt-3" for="#">Subject</label>
                                        <input type="text" name="subject" class="form-control mt-2" value="<?php echo e(old('subject')); ?>">

                                        <label class="mt-3" for="#">Department</label>
                                        <select name="department" class="form-select mt-1" aria-label="Default select example">
                                            <option selected disabled>Select Department</option>
                                            <?php $__currentLoopData = $department; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        </select>

                                        <label class="mt-3" for="#">Status</label>
                                        <select name="status" class="form-select mt-1" aria-label="Default select example">
                                            <option selected disabled>Select Ticket Status</option>
                                            <?php $__currentLoopData = $status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>

                                        <label class="mt-3" for="#">Priority</label>
                                        <select name="priority" class="form-select mt-1" aria-label="Default select example">
                                            <option selected disabled>Select Ticket Priority</option>
                                            <?php $__currentLoopData = $priority; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>

                                        <label class="mt-3" for="#">Ticket Body</label>
                                        <input type="hidden" name="ticket_body" id="ticket_body" class="form-control mt-2">
                                        <trix-editor input="ticket_body"><?php echo e(old('ticket_body')); ?></trix-editor>

                                        <button class="btn w-100 create_ticket_btn mt-3">Create Ticket</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <!--======End Create Tickets=====-->

                <div class="dropdown">
                    <button class="btn dropdown-toggle filter" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        filter
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end p-3 dropdown_list" aria-labelledby="dropdownMenuButton1">
                        <h5>Filters</h5>
                        <label class="mb-2" for="#">Customers</label>
                        <input type="text" name="" id="" placeholder="Lara" class="form-control">
                        <label class="mb-2 mt-2" for="#">Agents</label>
                        <input type="text" class="form-control" placeholder="Select Options">
                        <label class="mb-2 mt-2" for="#">Departments</label>
                        <input type="text" class="form-control" placeholder="Select an Options">
                        <label class="mb-2 mt-2" for="#">Labels</label>
                        <input type="text" class="form-control" placeholder="Select an Options">
                        <label class="mb-2 mt-2" for="#">Status</label>
                        <input type="text" class="form-control" placeholder="Select an Options">
                        <label class="mb-2 mt-2" for="#">Priorities</label>
                        <input type="text" class="form-control" placeholder="Select an Options">
                        <label class="mb-2 mt-2" for="#">Sort</label>
                        <div class="input-group mb-3">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">
                                <i class="fa-solid fa-arrow-up-short-wide"></i>
                                <span>Sort</span>
                            </button>
                            <input type="text" class="form-control" placeholder="Closed at" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        </div>
                        <div class="filter_btn d-flex justify-content-evenly">
                            <button class="btn">close</button>
                            <button class="btn">save</button>
                        </div>
                        <!-- <li><a class="dropdown-item" href="#">Action</a></li> -->
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <div class="current_tickets_heading d-flex justify-content-between mt-5 mb-0">
        <div class="current_tickets_heading__left">
            <h3>Current Tickets</h3>
        </div>
        <div class="current_tickets_heading__right">
            <div class="input-group mb-3">
                <button class="btn bg-white type=" button " id="button-addon1 ">
                    <i class="fa-solid fa-magnifying-glass "></i>
                </button>
                <input type="text " class="form-control border-0 " placeholder="Search Tickets.. "
                    aria-label="Example text with button addon " aria-describedby="button-addon1 ">
            </div>
        </div>
    </div>
    <!--==========Current Ticket Table===========-->
    <div class="current_tickets_table ">
        <div class="support_ticket ">
            <div class="col-lg-12 ">
                <div class="support ">
                    <!-- <div class="support_heading ">
                        <h3>All Support Tickets</h3>
                        <p>List of ticket open by customers</p>
                    </div> -->
                    <div class="support_table table-responsive" style="overflow: unset">
                        <table id="myTable " class="table table-hover b-t " class="display nowrap "
                            style="width:100% ">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Request Name</th>
                                    <th>Department</th>
                                    <th>Subjects</th>
                                    <th>Status</th>
                                    <th>Priority</th>
                                    <th>Created Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr id="tr1 ">
                                    <td>#<?php echo e($item->id); ?></td>
                                    <td><?php echo e($item->get_customer->name); ?></td>
                                    <td><?php echo e($item->get_department->name); ?></td>
                                    <td><?php echo e($item->subject); ?></td>
                                    <td><?php echo e($item->get_status->name); ?></td>
                                    <td><?php echo e($item->get_priority->name); ?></td>
                                    <td><?php echo e($item->created_at->format('d-M-Y')); ?></td>
                                    <td class="text-center ">
                                        <div class="dropdown">

                                            <a class="btn bg-transparent dropdown-toggle" href="#"
                                                role="button" id="dropdownMenuLink"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </a>

                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <li class="m-2">
                                                    <a style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#editTicket_<?php echo e($item->id); ?>" data-bs-whatever="@mdo">
                                                        <span><i class="fa-solid fa-edit me-2"></i></span>
                                                        Edit
                                                    </a>
                                                </li>
                                                <li class="m-2">
                                                    <a style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#deleteTicket_<?php echo e($item->id); ?>" data-bs-whatever="@mdo">
                                                        <span><i class="fa-solid fa-trash me-2"></i></span>
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                
                                <div class="modal fade" id="editTicket_<?php echo e($item->id); ?>" tabindex="-1" aria-labelledby="editModalLabel"
                                aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header border-bottom-0">
                                                <h5 style="color: #6C7BFF;" class="modal-title" id="editModalLabel">Update Ticket</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?php echo e(route('ticket.update', $item->id)); ?>" method="post">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field("PUT"); ?>
                                                    <div class="offcanvas-body">
                                                        <label for="#">Roles</label>
                                                        <select name="role" id="role_drop" class="form-select mt-1">
                                                            <option selected disabled>Select Role</option>
                                                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($role->id); ?>" <?php echo e($role->id == $item->id ? 'selected' : ''); ?>><?php echo e($role->role); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>

                                                        <label class="mt-3" for="#">Customers</label>
                                                        
                                                        <select name="customer" id="user_drop" class="form-select mt-1" aria-label="Default select example">
                                                            <?php
                                                                $show_users = [];
                                                            ?>
                                                            <?php echo $__env->make('includes.user_dropdown', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                        </select>

                                                        <label class="mt-3" for="#">Subject</label>
                                                        <input type="text" name="subject" class="form-control mt-2" value="<?php echo e($item->subject); ?>">

                                                        <label class="mt-3" for="#">Department</label>
                                                        <select name="department" class="form-select mt-1" aria-label="Default select example">
                                                            <option selected disabled>Select Department</option>
                                                            <?php $__currentLoopData = $department; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dept): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($dept->id); ?>" <?php echo e($dept->id == $item->id ? 'selected' : ''); ?>><?php echo e($dept->name); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                        </select>

                                                        <label class="mt-3" for="#">Status</label>
                                                        <select name="status" class="form-select mt-1" aria-label="Default select example">
                                                            <option selected disabled>Select Ticket Status</option>
                                                            <?php $__currentLoopData = $status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($stat->id); ?>" <?php echo e($stat->id == $item->id ? 'selected' : ''); ?>><?php echo e($stat->name); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>

                                                        <label class="mt-3" for="#">Priority</label>
                                                        <select name="priority" class="form-select mt-1" aria-label="Default select example">
                                                            <option selected disabled>Select Ticket Priority</option>
                                                            <?php $__currentLoopData = $priority; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($prio->id); ?>" <?php echo e($prio->id == $item->id ? 'selected' : ''); ?>><?php echo e($prio->name); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>

                                                        <label class="mt-3" for="#">Ticket Body</label>
                                                        <input type="hidden"  name="ticket_body">
                                                        <trix-editor input="ticket_body"><?php echo e($item->ticket_body); ?></trix-editor>

                                                        <button class="btn w-100 create_ticket_btn mt-3">Update Ticket</button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                
                                <div class="modal fade" id="deleteTicket_<?php echo e($item->id); ?>" tabindex="-1" aria-labelledby="daleteModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="daleteModalLabel">Delete Ticket</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h6>Are You Sure?</h6>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                                    <form action="<?php echo e(route('ticket.destroy', $item->id)); ?>" method="POST">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field("DELETE"); ?>
                                                        <button type="submit" class="btn btn-danger">Delete
                                                    </form>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







<?php $__env->stopSection(); ?>



<?php $__env->startSection('js'); ?>
<script>
    $(document).ready(function() {
        $('#role_dropdown').change(function() {

            var role_id = $(this).val();
            // alert(role_id)
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'POST',
                url: "<?php echo e(route('get.users')); ?>",
                data: {
                    role_id: role_id
                },
                success: function(data) {
                    $('#user_dropdown').html(data.data)
                    // console.log(data);
                }
            })
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#role_drop').change(function() {

            var role_id = $(this).val();
            // alert(role_id)
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'POST',
                url: "<?php echo e(route('edit.users')); ?>",
                data: {
                    role_id: role_id
                },
                success: function(data) {
                    $('#user_drop').html(data.data)
                    // console.log(data);
                }
            })
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app_backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Desktop\CRM\SoCloseSociety-CRM\resources\views/admin/ticket/index.blade.php ENDPATH**/ ?>