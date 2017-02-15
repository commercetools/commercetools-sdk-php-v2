<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class CategorySetAssetTagsAction extends CategoryUpdateAction {
    protected $assetId;
    protected $tags;
    const DISCRIMINATOR_VALUE = 'setAssetTags';

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
     * @return array
     */
    public function getTags(): array
    {
        if (is_null($this->tags)) {
            $value = $this->raw('tags');
            if (!is_null($value)) {
                $this->tags = $value;
            } else {
                return [];
            }
        }
        return $this->tags;
    }
                
}
