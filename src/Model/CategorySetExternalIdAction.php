<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class CategorySetExternalIdAction extends CategoryUpdateAction {
    protected $externalId;
    const DISCRIMINATOR_VALUE = 'setExternalId';

    /**
     * @return string
     */
    public function getExternalId(): string
    {
        if (is_null($this->externalId)) {
            $value = $this->raw('externalId');
            if (!is_null($value)) {
                $this->externalId = (string)$value;
            } else {
                return '';
            }
        }
        return $this->externalId;
    }
                
}
