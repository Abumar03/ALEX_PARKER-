<div class="container">
        <div class="row">
          <!-- About Me (Left Sidebar) Start -->
          <?php include_once '../app/views/templates/partials/_left_sidebar.php'; ?>
          <!-- About Me (Left Sidebar) End -->

          <!-- Blog Post (Right Sidebar) Start -->
          <div class="col-md-9">
            <div class="col-md-12 page-body">
              <div class="row">
                <?php echo $content; ?>
              </div>
            </div>

            <!-- Footer Start -->
            <div class="col-md-12 page-body margin-top-50 footer">
              <footer>
                <?php include_once '../app/views/templates/partials/_footer.php'; ?>
              </footer>
            </div>
            <!-- Footer End -->
          </div>
          <!-- Blog Post (Right Sidebar) End -->
        </div>
</div>