<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('content'); ?>
<div class="section-header">
    <h1>Dashboard</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    </div>
</div>

<div class="section-body">
    <h2 class="section-title">Selamat Datang di Dashboard JasterMedia!</h2>
    <p class="section-lead">Halaman Utama </p>
    <div class="row">
        <div class="col-6">
        <div class="card">
                  <div class="card-header">
                    <h4>Catatan</h4>
                  </div>
                  <div class="card-body">
                    <div id="accordion">
                    <?php $__currentLoopData = $listNotes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="accordion">
                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-<?php echo e($catat->id); ?>" aria-expanded="false">
                          <span>Dari <b><?php echo e($catat->name); ?></b></span>
                        </div>
                        <div class="accordion-body collapse" id="panel-body-<?php echo e($catat->id); ?>" data-parent="#accordion">
                        <?php echo($catat->catatan) ?>
                        </div>
                      </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                  </div>

                </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
          <div class="card">
            <div class="card-header">
              <h4>Budget vs Sales</h4>
            </div>
            <div class="card-body">
                <canvas id="pieChart1" height="178px"></canvas>

            </div>
          </div>
        </div>

      </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('puter'); ?>
<script src="<?php echo e(asset('assets/modules/chart.min.js')); ?>"></script>
<script>
$(function () {

    var violet = '#DF99CA',
        red = '#F0404C',
        green = '#7CF29C',
        blue = '#4680ff';
        var ctx1 = $("canvas").get(0).getContext("2d");
    var gradient1 = ctx1.createLinearGradient(150, 0, 150, 300);
    gradient1.addColorStop(0, 'rgba(210, 114, 181, 0.91)');
    gradient1.addColorStop(1, 'rgba(177, 62, 162, 0)');

    var gradient2 = ctx1.createLinearGradient(10, 0, 150, 300);
    gradient2.addColorStop(0, 'rgba(252, 117, 176, 0.84)');
    gradient2.addColorStop(1, 'rgba(250, 199, 106, 0.92)');

    var PIECHART = $('#pieChart1');
   var myPieChart = new Chart(PIECHART, {
       type: 'doughnut',
       options: {
           cutoutPercentage: 90,
           legend: {
               display: false
           }
       },
       data: {
           labels: [
               "First",
               "Second",
               "Third"
           ],
           datasets: [
               {
                   data: [250, 200],
                   borderWidth: [0, 0],
                   backgroundColor: [
                       green,
                       "#eee",
                   ],
                   hoverBackgroundColor: [
                       green,
                       "#eee",
                   ]
               }]
       }
        });
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jaster\resources\views/backend/dashboard.blade.php ENDPATH**/ ?>