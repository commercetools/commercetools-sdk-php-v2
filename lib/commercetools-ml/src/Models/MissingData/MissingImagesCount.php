<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface MissingImagesCount extends JsonObject
{

    public const FIELD_MISSING_IMAGES = 'missingImages';
    public const FIELD_TOTAL = 'total';

    /**
     * @return null|int
     */
    public function getMissingImages();

    /**
     * <p>Number of products scanned.</p>
     *
     * @return null|int
     */
    public function getTotal();

    public function setMissingImages(?int $missingImages): void;

    public function setTotal(?int $total): void;
}
