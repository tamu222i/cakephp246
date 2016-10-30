<?php
class Post extends AppModel {
    public $validate = array(
        'title' => array(
//            'rule' => 'notBlank'
            'rule' => 'notEmpty'
        ),
        'body' => array(
//            'rule' => 'notBlank'
            'rule' => 'notEmpty'
        )
    );
}
