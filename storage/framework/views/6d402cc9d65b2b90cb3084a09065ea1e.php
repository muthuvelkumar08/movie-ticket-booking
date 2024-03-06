<?php $__env->startSection('main'); ?>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">View Ticket</h3>
                        <a href="<?php echo e(route('viewTiming')); ?>"class="btn btn-warning float-end">Back</a>
                    </div>
                    <?php if(session('status')): ?>
                    <div class="alert alert-success alert-dimissible fade show">
                        <strong>Hey Buddy!.</strong><?php echo e(session('status')); ?>

                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php endif; ?>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <th>SI.No</th>
                                <th>Movie Name</th>
                                <th>Username</th>
                                <th>Phone Number</th>
                                <th>Show Timings</th>
                                <th class="text-center">Action</th>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $viewticket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $viewtickets): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <tr>
                                    <td><?php echo e($viewtickets->id); ?></td>
                                    <td><?php echo e($viewtickets->moviename); ?></td>
                                    <td><?php echo e($viewtickets->username); ?></td>
                                    <td><?php echo e($viewtickets->phone); ?></td>
                                    <td><?php echo e($viewtickets->prefered_show_timings); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('editTicket',["id"=>$viewtickets->id])); ?>" class="btn btn-info">Edit</a>
                                        <a href="<?php echo e(route('deleteTicket',["id"=>$viewtickets->id])); ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\movie-ticket\resources\views/viewticket.blade.php ENDPATH**/ ?>