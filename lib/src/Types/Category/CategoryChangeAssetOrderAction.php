<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

interface CategoryChangeAssetOrderAction extends CategoryUpdateAction
{
    const FIELD_ASSET_ORDER = 'assetOrder';

    /**
     * @return array
     */
    public function getAssetOrder();

    /**
     * @param array $assetOrder
     * @return $this
     */
    public function setAssetOrder($assetOrder);

}
