<div class="l-footers-main">
    <div class="l-footers-main--shell">
        <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds.
            <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
        </p>
    </div>
</div>
</main>
<script
src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
crossorigin="anonymous"></script>
<script defer src="<?php echo base_url('assets/js/script.js');?>"></script>
<script defer src="<?php echo base_url('assets/js/trial.js');?>"></script>
<script defer src="<?php echo base_url('assets/js/compass.js');?>"></script>

</body>

</html>