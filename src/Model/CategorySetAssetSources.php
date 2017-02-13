<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class CategorySetAssetSources extends CategoryUpdateAction {
    protected $assetId;
    protected $sources;
    const DISCRIMINATOR_VALUE = 'setAssetSources';

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
                

    /**
     * @return AssetSourceCollection
     */
    public function getSources(): AssetSourceCollection
    {
        if (is_null($this->sources)) {
            $value = $this->raw('sources');
            if (!is_null($value)) {
                $this->sources = Mapper::map($value, AssetSourceCollection::class);
            } else {
                return Mapper::map([], AssetSourceCollection::class);
            }
        }
        return $this->sources;
    }
                
}
