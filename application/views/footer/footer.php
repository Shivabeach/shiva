<div class="l-footers-main">
    <div class="l-footers-main--shell">
        <p class="footer">Page load <strong>{elapsed_time}</strong> seconds.</p>
        <p><?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
        </p>
    </div>
</div>
</main>

<script src="<?php echo base_url('assets/js/script.js');?>" defer></script>
<script src="<?php echo base_url('assets/js/trial.js');?>" defer></script>


</body>

</html>
