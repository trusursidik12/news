<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3 class="card-title">
              <a href="<?= site_url('backoffice/'.$controllers.'/list') ?>" ><button type="button" class="btn btn-block btn-primary"><i class="fas fa-list"></i> <?= $title_menu; ?></button></a>
            </h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">General Form</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="container">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title"><?= $title_header; ?></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="post">
              <div class="card-body">
                <div class="form-group">
                  <input type="Hidden" name="faq_id" value="<?= $faqs['faq_id'] ?>">
                  <textarea name="faq_question" class="form-control <?= form_error('faq_question') == TRUE ? 'is-invalid' : ''; ?>" placeholder="Input Question .. *"><?= $faqs['faq_question'] ?></textarea>
                  <a style="color: red;"><?= form_error('faq_question') ?></a>
                </div>
                <div class="form-group">
                  <textarea name="faq_answer" class="form-control <?= form_error('faq_answer') == TRUE ? 'is-invalid' : ''; ?>" placeholder="Input Answer .. *"><?= $faqs['faq_answer'] ?></textarea>
                </div>
                <div class="form-group">
                  <input type="Text" name="faq_tags[]" value="<?= $faqs['faq_tags'] ?>" class="form-control <?= form_error('faq_tags[]') == TRUE ? 'is-invalid' : ''; ?>" data-role="tagsinput" placeholder="Tags (separated with ' , ') *">
                  <a style="color: red;"><?= form_error('faq_tags[]') ?></a>
                </div>
                <div class="form-group">
                  <button type="Submit" class="btn btn-primary"><i class="fas fa-save"></i> Update</button>
                  <button type="Reset" class="btn btn-default"><i class="fas fa-sync-alt"></i> Reset</button>
                </div>
              </div>
              <!-- /.card-body -->
            </form>
          </div>
          <!-- /.card -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->