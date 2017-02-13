<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class CategoryRemoveAsset extends CategoryUpdateAction {
    protected $assetId;
    const DISCRIMINATOR_VALUE = 'removeAsset';

    /**
     * @return string
     */
    public function getAssetId(): string
    {
        if (is_null($this->assetId)) {
            $value = $this->raw('assetId');
            if (!is_null($value)) {
                $this->assetId = (string)$value;
            } else {
                return '';
            }
        }
        return $this->assetId;
    }
                
}
