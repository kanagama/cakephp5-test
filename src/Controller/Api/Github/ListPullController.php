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
use App\Utility\Github\ListPull\ListPull;
use App\Utility\Github\ListPull\ListPullInterface;
use App\Utility\Github\ListPull\Request\ListPullRequest;

/**
 * @author k-nagama <k.nagama0632@gmail.com>
 */
class ListPullController extends AppController
{
    /**
     * @param  ListPull  $listPull
     */
    public function index(
        ListPullInterface $listPull
    ) {
        $request = new ListPullRequest(
            $this->request->getQuery()
        );

        $response = $listPull->get($request);
        dd($response);
    }
}
