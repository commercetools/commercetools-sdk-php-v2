<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSetDescriptionAction extends ProductUpdateAction
{
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_STAGED = 'staged';

    /**
     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * @return null|bool
     */
    public function getStaged();

    public function setDescription(?LocalizedString $description): void;

    public function setStaged(?bool $staged): void;
}
