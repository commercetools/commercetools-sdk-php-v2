<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Type;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\LocalizedString;

interface CustomFieldLocalizedEnumValue extends JsonObject
{
    
    const FIELD_KEY = 'key';
    const FIELD_LABEL = 'label';

    /**
     *
     * @return string|null
     */
    public function getKey();
    
    /**
     *
     * @return LocalizedString|null
     */
    public function getLabel();
    public function setKey(?string $key): void;
    
    public function setLabel(?LocalizedString $label): void;
}