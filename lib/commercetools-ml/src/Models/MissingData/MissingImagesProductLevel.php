<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MissingImagesProductLevel extends MissingImagesCount
{
    /**
     * <p>Number of products missing images.</p>
     *

     * @return null|int
     */
    public function getMissingImages();

    /**
     * <p>Number of products scanned.</p>
     *

     * @return null|int
     */
    public function getTotal();

    /**
     * @param ?int $missingImages
     */
    public function setMissingImages(?int $missingImages): void;

    /**
     * @param ?int $total
     */
    public function setTotal(?int $total): void;
}
