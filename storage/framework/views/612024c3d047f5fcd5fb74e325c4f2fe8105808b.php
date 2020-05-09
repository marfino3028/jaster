<?php $__env->startSection('title', 'Add Notes'); ?>

<?php $__env->startSection('csslibraries'); ?>
##parent-placeholder-7b1b790aaa0be695520f3372cd9a85443b6faa1f##

<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
<div class="section-header">
    <h1>Add Notes</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="#">Notes</a></div>
        <div class="breadcrumb-item active"><a href="#">Add Notes</a></div>
    </div>
</div>
<div class="section-body">
    <h2 class="section-title">Add Notes to User</h2>
    <p class="section-lead">This page is just an example for you to create your own page.</p>
    <form method="post" action="<?php echo e(route('storeUserNotes')); ?>" class="needs-validation" novalidate="">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <?php echo csrf_field(); ?>
                    <div class="col-12">
                        <div class="form-group">
                            <label>Kirim ke</label>
                            <select id="nerima" class="form-control" name="penerima">
                                <option value="">None</option>
                                <?php $__currentLoopData = $listUser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($key->id); ?>"><?php echo e($key->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Catatan</label>
                            <textarea name="catatan" id="notes"></textarea>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('jslibraries'); ?>
##parent-placeholder-ffd66c5dac17be6451cca4afe8a4549aa7aad85f##
<script src="https://cdn.tiny.cloud/1/ubaylt88d66o8ewdhmw9upizv7g1fbhcunbyhvdfoc5hcnek/tinymce/5/tinymce.min.js"></script>
<script src="<?php echo e(asset('js/tinyce.js')); ?>"></script>
<script>
    
    // console.log(lihatNote)
    $('document').ready(function () {
    
    $('#nerima').on('change', function () {
        var selectedUserSend = $(this).children("option:selected").val();
        var lihatNote = [<?php for($i = 0; $i < count($listNotes); $i++) { echo $listNotes[$i]->toJson(); if ($i + 1 < count($listNotes)) { echo ','; } } ?>]
        var editor = tinymce.get('notes');
        var content = editor.getContent();
        editor.setContent("");
        
        lihatNote.forEach(function (item, index) {
            if (selectedUserSend == item.receiver_id && <?php echo e(Auth::user()->id); ?> == item.user_id ) {
                editor.setContent(item.catatan)
            }
        })
    })
    
    })
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jaster\resources\views/backend/pages/add-notes.blade.php ENDPATH**/ ?>