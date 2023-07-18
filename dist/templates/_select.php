<div class="select-wrap">
<button class="select">
        <?php
        $firstTitle = isset($select[0]['title']) ? $select[0]['title'] : '';
        echo '<span class="select-val">' . $firstTitle . '</span>';
        ?> 
    <svg class="select-icon" width="8" height="8">
        <use xlink:href="#arr-btm"></use>
    </svg>
</button>

<ul class="select-list">
<?php foreach ($select as $i => $item) {  if ($i !== 0) {  ?>
    <li value="<?php echo $item['value']; ?>"><?php echo $item['title']; ?></li>
<?php } } ?>
</ul>
</div>

