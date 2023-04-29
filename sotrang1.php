<ul class="pagination justify-content-end">
    <?php for ($i = 1; $i <= $total_pages; $i++) { ?>
        <li><a class="btntrang" href="/code/indexAndroid.php?page=<?php echo $i ?>"><?php echo $i ?></a></li>
    <?php } ?>
</ul>