
<?php global $base_url ?>
<a href="<?php echo $base_url ?>/admin/config/list_menu/add">Ajouter un menu à la barre d'administration</a>

<div>
    <?php foreach ($variables['menu_configuration'] as $menu_key => $menu_value) { ?>
        <a href="<?php echo $base_url ?>/admin/config/list_menu/<?php echo $menu_value['mmid']?>" ><?php echo $menu_value['name']?></a> <hr>
    <?php } ?>
</div>
