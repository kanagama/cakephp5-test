<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         3.3.4
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller\Api\Github;

use App\Controller\AppController;
use App\Utility\Github\User\User;
use App\Utility\Github\User\UserInterface;

/**
 * @author k-nagama <k.nagama0632@gmail.com>
 */
class UserController extends AppController
{
    /**
     * @param  User  $user
     */
    public function index(
        UserInterface $user
    ) {
        $response = $user->get();
        dd($response);
    }
}
