<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class CategoryChangeAssetOrder extends CategoryUpdateAction {
    protected $assetOrder;
    const DISCRIMINATOR_VALUE = 'changeAssetOrder';

    /**
     * @return array
     */
    public function getAssetOrder(): array
    {
        if (is_null($this->assetOrder)) {
            $value = $this->raw('assetOrder');
            if (!is_null($value)) {
                $this->assetOrder = $value;
            } else {
                return [];
            }
        }
        return $this->assetOrder;
    }
                
}
