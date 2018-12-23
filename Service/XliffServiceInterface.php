<?php
/*
 * (c) 2018: 975L <contact@975l.com>
 * (c) 2018: Laurent Marquet <laurent.marquet@laposte.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace c975L\XliffBundle\Service;

interface XliffServiceInterface
{
    /**
     * Exports files in xlf format
     * @return array
     */
    public function exportFiles();
}
