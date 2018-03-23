<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionModel;

class ProductPublishActionModel extends ProductUpdateActionModel implements ProductPublishAction {
    const DISCRIMINATOR_VALUE = 'publish';

    /**
     * @var string
     */
    protected $scope;

    /**
     * @return string
     */
    public function getScope()
    {
        if (is_null($this->scope)) {
            $value = $this->raw(ProductPublishAction::FIELD_SCOPE);
            $value = (string)$value;
            $this->scope = $value;
        }
        return $this->scope;
    }

    /**
     * @param string $scope
     * @return $this
     */
    public function setScope(string $scope)
    {
        $this->scope = (string)$scope;

        return $this;
    }

}
