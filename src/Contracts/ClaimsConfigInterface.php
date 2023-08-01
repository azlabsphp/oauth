<?php

declare(strict_types=1);

/*
 * This file is part of the drewlabs namespace.
 *
 * (c) Sidoine Azandrew <azandrewdevelopper@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Drewlabs\Auth\Jwt\Contracts;

interface ClaimsConfigInterface
{
    /**
     * Returns claim issuer.
     *
     * @return string
     */
    public function getIssuer();

    /**
     * Returns claims time to live.
     *
     * @return int
     */
    public function getTTl();
}
