<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

interface ProductPublishAction extends ProductUpdateAction
{
    const FIELD_SCOPE = 'scope';

    /**
     * @return null|string
     */
    public function getScope();

    public function setScope(?string $scope): void;
}
