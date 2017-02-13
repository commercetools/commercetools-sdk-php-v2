<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class CategoryAddAsset extends CategoryUpdateAction {
    protected $asset;
    const DISCRIMINATOR_VALUE = 'addAsset';

    /**
     * @return AssetDraft
     */
    public function getAsset(): AssetDraft
    {
        if (is_null($this->asset)) {
            $value = $this->raw('asset');
            if (!is_null($value)) {
                $this->asset = Mapper::map($value, AssetDraft::class);
            } else {
                return Mapper::map([], AssetDraft::class);
            }
        }
        return $this->asset;
    }
                
}
