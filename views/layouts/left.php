<aside class="main-sidebar">

    <section class="sidebar">
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Ferramentas', 'options' => ['class' => 'header']],
                    ['label' => 'Usuários', 'icon' => 'users', 'url' => ['user/index']],
                ],
            ]
        ) ?>

    </section>

</aside>
