<?php
/**
 * Synchronizer Library
 * Copyright (C) 2015 IceFlame.net
 *
 * Permission to use, copy, modify, and/or distribute this software for
 * any purpose with or without fee is hereby granted, provided that the
 * above copyright notice and this permission notice appear in all copies.
 *
 * @package  FlameCore\Synchronizer
 * @version  0.1-dev
 * @link     http://www.flamecore.org
 * @license  http://opensource.org/licenses/ISC ISC License
 */

namespace FlameCore\Synchronizer\Database\Location;

use FlameCore\Synchronizer\SynchronizerTargetInterface;

/**
 * The DatabaseTarget interface
 *
 * @author   Christian Neff <christian.neff@gmail.com>
 */
interface DatabaseTargetInterface extends SynchronizerTargetInterface, DatabaseLocationInterface
{
    /**
     * @param array|string $sql
     * @return bool
     */
    public function execute($sql);
}
