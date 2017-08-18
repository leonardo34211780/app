<?php

$form = $this->beginWidget(
    'booster.widgets.TbActiveForm',
    array(
        'id' => 'verticalForm',
    	'type' => 'horizontal',
    )
);

$model = new ContribuinteForm();

echo $form->textFieldGroup($model, 'cnpj', array(
    'wrapperHtmlOptions'=>array(
        'class'=>'col-sm-4'
    )
));
echo $form->textFieldGroup($model, 'cpf', array(
    'wrapperHtmlOptions'=>array(
        'class'=>'col-sm-4',
    ),
    'hint'=>'Observação: Somente números'
));
echo $form->radioButtonListGroup($model, 'acao', array(
    'label'=>'',
    'widgetOptions'=>array(
        'data'=>array('Cadastrar',
                      'Consultar dados',
                      'Alterar dados cadastrais'),
    )
));

$this->widget(
    'booster.widgets.TbButton',
    array('label'=>'Enviar',
          'buttonType'=>'submit',
          'context'=>'primary')
);

$this->endWidget();
