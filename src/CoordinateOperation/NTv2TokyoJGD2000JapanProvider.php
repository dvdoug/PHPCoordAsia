<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class NTv2TokyoJGD2000JapanProvider implements GridProvider
{
    private NTv2Grid $cache;

    public function provideGrid(): NTv2Grid
    {
        return $this->cache ??= new NTv2Grid(__DIR__ . '/../../resources/TKY2JGD.gsb');
    }
}
