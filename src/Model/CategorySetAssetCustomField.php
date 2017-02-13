<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class CategorySetAssetCustomField extends CategoryUpdateAction {
    protected $assetId;
    protected $name;
    protected $value;
    const DISCRIMINATOR_VALUE = 'setAssetCustomField';

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
     * @return string
     */
    public function getName(): string
    {
        if (is_null($this->name)) {
            $value = $this->raw('name');
            if (!is_null($value)) {
                $this->name = (string)$value;
            } else {
                return '';
            }
        }
        return $this->name;
    }
                

    /**
     * @return array
     */
    public function getValue(): array
    {
        if (is_null($this->value)) {
            $value = $this->raw('value');
            if (!is_null($value)) {
                $this->value = $value;
            } else {
                return [];
            }
        }
        return $this->value;
    }
                
}
