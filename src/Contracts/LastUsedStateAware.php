<?php

declare(strict_types=1);

/*
 * This file is part of the Drewlabs package.
 *
 * (c) Sidoine Azandrew <azandrewdevelopper@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Drewlabs\Auth\Jwt\Contracts;

interface LastUsedStateAware
{
    /**
     * Set the last used state of the implementing class.
     *
     * @param mixed $value
     *
     * @return mixed
     */
    public function lastUsedAt($value = null);
}
