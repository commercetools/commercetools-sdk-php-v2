<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ProductPublishAction extends ProductUpdateAction
{

    public const FIELD_SCOPE = 'scope';

    /**
     * @return null|string
     */
    public function getScope();

    public function setScope(?string $scope): void;
}
