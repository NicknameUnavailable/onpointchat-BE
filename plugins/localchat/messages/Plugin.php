<?php namespace Localchat\Messages;

use Backend;
use System\Classes\PluginBase;

/**
 * messages Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'messages',
            'description' => 'No description provided yet...',
            'author'      => 'localchat',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Localchat\Messages\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'localchat.messages.some_permission' => [
                'tab' => 'messages',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'messages' => [
                'label'       => 'Messages',
                'url'         => Backend::url('localchat/messages/messages'),
                'icon'        => 'icon-comments',
                'permissions' => ['localchat.messages.*'],
                'order'       => 500,

                'sideMenu'    => [
                    'messages' => [
                        'label'       => 'Messages',
                        'url'         => Backend::url('localchat/messages/messages'),
                        'icon'        => 'icon-comments',
                        'permissions' => ['localchat.messages.*'],
                        'order'       => 500,
                    ],
                    'users' => [
                        'label'       => 'Users',
                        'url'         => Backend::url('localchat/messages/users'),
                        'icon'        => 'icon-user',
                        'permissions' => ['localchat.messages.*'],
                        'order'       => 501,
                    ],
                    'groups' => [
                        'label'       => 'Groups',
                        'url'         => Backend::url('localchat/messages/groups'),
                        'icon'        => 'icon-users',
                        'permissions' => ['localchat.messages.*'],
                        'order'       => 502,
                    ]
                ],
            ],
        ];
    }
}
