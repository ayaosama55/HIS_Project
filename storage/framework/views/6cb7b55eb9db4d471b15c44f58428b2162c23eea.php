<!-- Badawy -->

<?php $__env->startSection('content'); ?>
    <div class="service-page">
        <div class="container text-center">
            <h2 class="head-cards h1 py-5">Welcome To Our Services</h2>
            <div class="row">
                
                <div class="col-md-4">
                    <div class="card px-2 py-2 mb-5">
                        <div class="card-img">
                            <img src="/images/service/Vaccine.png" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title mb-4">Corona Vaccine Reservation</h4>
                            <p class="card-text lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit
                                laboriosam deserunt dicta necessitatibus ullam. </p>
                        </div>
                        <div class="card-body">
                            <a href="/new_dose" class="card-btn btn btn-primary mb-3 py-2">Book Now</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card px-2 py-2 mb-5">
                        <div class="card-img">
                            <img src="/images/service/test.png" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title mb-4">Reserve PCR Analysis</h4>
                            <p class="card-text lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit
                                laboriosam deserunt dicta necessitatibus ullam. </p>
                        </div>
                        <div class="card-body">
                            <a href="/test_option" class="card-btn btn btn-primary mb-3 py-2">Book Now</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card px-2 py-2 mb-5">
                        <div class="card-img">
                            <img src="/images/service/contact-Doctor.png" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title mb-4">Contact With Doctor</h4>
                            <p class="card-text lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit
                                laboriosam deserunt dicta necessitatibus ullam. </p>
                        </div>
                        <div class="card-body">
                            <a href="/contact_doc" class="card-btn btn btn-primary mb-3 py-2">Contact Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main-template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH I:\projects\laravel\HIS_Project_Kovido\resources\views/service.blade.php ENDPATH**/ ?>