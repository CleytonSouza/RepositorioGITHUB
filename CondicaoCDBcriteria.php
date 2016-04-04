 <?
 $criteria = new CDbCriteria();
    $criteria->addCondition("dt_inativacao = '0000-00-00'");
    $criteria->order = "ds_nome ASC";
    $empresa = CHtml::listData(Empresa::model()->findAll($criteria), 'cd_emp', 'ds_nome');





   