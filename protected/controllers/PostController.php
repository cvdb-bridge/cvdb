<?php

class PostController extends Controller
{

public function accessRules()
{
return array(
array('deny',
'actions'=>array('create', 'edit'),
'users'=>array('?'),
),
array('allow',
'actions'=>array('delete'),
'roles'=>array('admin'),
),
array('deny',
'actions'=>array('delete'),
'users'=>array('*'),
),
);

}
}