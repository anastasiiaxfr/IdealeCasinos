<table class="">
    <tbody>
    <?php foreach ($table as $i => $item) { ?>
        <tr>
            <?php foreach ($item as $col => $value) { ?>
                <td><?php echo $value; ?></td>
            <?php } ?>
        </tr>
    <?php } ?>
    </tbody>
</table>