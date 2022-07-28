<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductPublishAction extends ProductUpdateAction
{
    public const FIELD_SCOPE = 'scope';

    /**
     * <p><code>All</code> or <code>Prices</code></p>
     *

     * @return null|string
     */
    public function getScope();

    /**
     * @param ?string $scope
     */
    public function setScope(?string $scope): void;
}
