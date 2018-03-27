<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionModel;

class CategoryChangeAssetOrderActionModel extends CategoryUpdateActionModel implements CategoryChangeAssetOrderAction {
    const DISCRIMINATOR_VALUE = 'changeAssetOrder';

    /**
     * @var array
     */
    protected $assetOrder;

    /**
     * @return array
     */
    public function getAssetOrder()
    {
        if (is_null($this->assetOrder)) {
            $value = $this->raw(CategoryChangeAssetOrderAction::FIELD_ASSET_ORDER);
            $value = (array)$value;
            $this->assetOrder = $value;
        }
        return $this->assetOrder;
    }

    /**
     * @param $assetOrder
     * @return $this
     */
    public function setAssetOrder($assetOrder)
    {
        $this->assetOrder = $assetOrder;

        return $this;
    }

}
