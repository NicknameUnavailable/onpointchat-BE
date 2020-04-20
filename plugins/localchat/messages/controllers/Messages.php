<?php namespace Localchat\Messages\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Messages Back-end Controller
 */
class Messages extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Localchat.Messages', 'messages', 'messages');
    }
}
