<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;

interface ProductSetAttributeInAllVariantsAction extends ProductUpdateAction
{
    
    const FIELD_NAME = 'name';
    const FIELD_VALUE = 'value';
    const FIELD_STAGED = 'staged';

    /**
     *
     * @return string|null
     */
    public function getName();
    
    /**
     *
     * @return JsonObject|null
     */
    public function getValue();
    
    /**
     *
     * @return bool|null
     */
    public function getStaged();
    public function setName(?string $name): void;
    
    public function setValue(?JsonObject $value): void;
    
    public function setStaged(?bool $staged): void;
}