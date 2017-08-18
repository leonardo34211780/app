<?php
   $this->widget(
        'booster.widgets.TbNavbar',
        array(
            'fixed' => false,
            'fluid' => true,
            'items' => array(
                array(
                    'class' => 'booster.widgets.TbMenu',
                    'type' => 'navbar',
                    'items' => array(
                        array('label' => 'Sindicatos', 'url' => '#'),
                        array('label' => 'Atividades Econômicas', 'url' => '#'),
                        array('label' => 'Tabela de Cáculo', 'url' => '#'),
                        array('label' => 'Legislação', 
                            'items' => array(
                                array('label' => 'Contribuição Sindical', 'url' => '#'),
                                array('label' => 'Atividade', 'url' => '#'),
                                array('label' => 'Base de Cálculo', 'url' => '#'),
                                array('label' => 'Cadastro', 'url' => '#'),
                                array('label' => 'Cobrança', 'url' => '#'),
                                array('label' => 'Contribuição', 'url' => '#'),
                                array('label' => 'Enquandramento Sindical', 'url' => '#'),
                                array('label' => 'Exigência Legal', 'url' => '#'),
                                array('label' => 'Guia de Recolhimento', 'url' => '#'),
                                array('label' => 'Atraso de Pagamento da Contribuição', 'url' => '#'),
                                array('label' => 'Opções dos Liberais', 'url' => '#'),
                                array('label' => 'Prazo', 'url' => '#'),
                                array('label' => 'Tabela', 'url' => '#')
                            )),
                        
                    )
                )
            )
        )
    );