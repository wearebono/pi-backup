<?php
/**
 * Pi User Account Model
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       Copyright (c) Pi Engine http://www.xoopsengine.org
 * @license         http://www.xoopsengine.org/license New BSD License
 * @author          Taiwen Jiang <taiwenjiang@tsinghua.org.cn>
 * @package         Pi\Application
 * @subpackage      Model
 * @since           3.0
 * @version         $Id$
 */

namespace Pi\Application\Model\User;
use Pi;
use Pi\Application\Model\Model;

class Account extends Model
{
    protected $table = "user_account";

    /**
     * Row gateway class
     *
     * @var string
     */
    protected $rowClass = 'Pi\Application\Model\User\\RowGateway\\Account';

    public function getIdentityColumn()
    {
        return 'identity';
    }
}
