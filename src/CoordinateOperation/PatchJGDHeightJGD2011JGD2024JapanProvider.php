<?php

/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class PatchJGDHeightJGD2011JGD2024JapanProvider implements GridProvider
{
    public function provideGrid(): PatchJGDHeightGrid
    {
        return new PatchJGDHeightGrid(__DIR__ . '/../../resources/hyokorevBM_jgd2024_h.par');
    }
}
