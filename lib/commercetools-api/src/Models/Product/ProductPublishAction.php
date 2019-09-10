<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;

interface ProductPublishAction extends ProductUpdateAction
{
    
    const FIELD_SCOPE = 'scope';

    /**
     *
     * @return string|null
     */
    public function getScope();
    public function setScope(?string $scope): void;
}