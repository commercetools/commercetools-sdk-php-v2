<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

interface ProductPublishAction extends ProductUpdateAction {
    const FIELD_SCOPE = 'scope';

    /**
     * @return string
     */
    public function getScope();

    /**
     * @param string $scope
     * @return $this
     */
    public function setScope(string $scope);

}
