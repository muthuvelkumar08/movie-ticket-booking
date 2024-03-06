<?php $__env->startSection('main'); ?>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Book Your Ticket</h3>
                        <a href="<?php echo e(route('viewTiming')); ?>"class="btn btn-success float-end">View Ticket</a>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="row justify-content-center">
                                <img src="<?php echo e(asset('movie.jpg')); ?>" alt="">
                            </div>
                            <a href="<?php echo e(route('ticketBooking')); ?>" class="btn btn-primary mb-2 mt-4" style="margin-left: 300px;" name="book">Book</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\movie-ticket\resources\views/movie.blade.php ENDPATH**/ ?>