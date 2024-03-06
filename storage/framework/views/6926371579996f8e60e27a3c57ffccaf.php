<?php $__env->startSection('main'); ?>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Book Your Ticket</h3>
                        <a href="<?php echo e(route('showMovie')); ?>" class="btn btn-warning float-end">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <input type="submit" value="11.00 A.M" class="btn btn-primary mb-2 mt-4" style="margin-left: 300px;" name="11.00 A.M">
                            <input type="submit" value="2.30 P.M" class="btn btn-primary mb-2 mt-4" style="margin-left: 300px;" name="2.30 P.M">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\movie-ticket\resources\views/viewshows.blade.php ENDPATH**/ ?>