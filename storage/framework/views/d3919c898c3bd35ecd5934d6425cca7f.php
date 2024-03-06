<?php $__env->startSection('main'); ?>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Book Your Ticket</h3>
                        <a href="<?php echo e(route('showMovie')); ?>" class="btn btn-success float-end">Back</a>
                        <?php if(session('status')): ?>
                    <div class="alert alert-success alert-dimissible fade show" role="alert">
                        <strong>Hey Buddy!.</strong><?php echo e(session('status')); ?>

                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php endif; ?>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('updateTicket',["id" => $movie->id])); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="row justify-content-center">
                                <div class="col-md-6 mb-2">
                                    <label class="mb-2">UserName</label>
                                    <input type="text" name="username" class="form-control" value="<?php echo e(old('username',$movie->username)); ?>">
                                    <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-6 mb-2">
                                    <label class="mb-2">Phone Number</label>
                                    <input type="number" name="phone" class="form-control" value="<?php echo e(old('phone',$movie->phone)); ?>">
                                    <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-6 mb-2">
                                    <label class="mb-2">Show Timings</label>
                                    <select name="show" class="form-control">
                                        <option value="">-- Select The Timing --</option>
                                        <option value="11.00 A.M"<?php echo e($movie->prefered_show_timings === "11.00 A.M" ? 'selected' : ''); ?>>11.00 A.M</option>
                                        <option value="2.30 P.M"<?php echo e($movie->prefered_show_timings === "2.30 P.M" ? 'selected' : ''); ?>>2.30 P.M</option>
                                    </select>
                                </div>
                            </div>
                                <div class="col-md-6 mb-2">
                                    <input type="submit" name="book" value="Book" class="btn btn-primary float-end">
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\movie-ticket\resources\views/editticket.blade.php ENDPATH**/ ?>