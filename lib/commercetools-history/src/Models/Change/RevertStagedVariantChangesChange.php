<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface RevertStagedVariantChangesChange extends Change
{


    /**

     * @return null|string
     */
    public function getChange();

    /**

     * @return null|string
     */
    public function getType();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;
}
