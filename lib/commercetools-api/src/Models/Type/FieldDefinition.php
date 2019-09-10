<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Type;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\LocalizedString;

interface FieldDefinition extends JsonObject
{
    
    const FIELD_TYPE = 'type';
    const FIELD_NAME = 'name';
    const FIELD_LABEL = 'label';
    const FIELD_REQUIRED = 'required';
    const FIELD_INPUT_HINT = 'inputHint';

    /**
     *
     * @return JsonObject|null
     */
    public function getType();
    
    /**
     *
     * @return string|null
     */
    public function getName();
    
    /**
     *
     * @return LocalizedString|null
     */
    public function getLabel();
    
    /**
     *
     * @return bool|null
     */
    public function getRequired();
    
    /**
     *
     * @return string|null
     */
    public function getInputHint();
    public function setType(?JsonObject $type): void;
    
    public function setName(?string $name): void;
    
    public function setLabel(?LocalizedString $label): void;
    
    public function setRequired(?bool $required): void;
    
    public function setInputHint(?string $inputHint): void;
}