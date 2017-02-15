<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class CategorySetAssetDescriptionAction extends CategoryUpdateAction {
    protected $assetId;
    protected $description;
    const DISCRIMINATOR_VALUE = 'setAssetDescription';

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
     * @return LocalizedString
     */
    public function getDescription(): LocalizedString
    {
        if (is_null($this->description)) {
            $value = $this->raw('description');
            if (!is_null($value)) {
                $this->description = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->description;
    }
                
}
