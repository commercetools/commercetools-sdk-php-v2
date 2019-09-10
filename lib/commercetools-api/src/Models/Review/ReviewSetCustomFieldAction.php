<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Review;

use Commercetools\Base\JsonObject;

interface ReviewSetCustomFieldAction extends ReviewUpdateAction
{
    
    const FIELD_NAME = 'name';
    const FIELD_VALUE = 'value';

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
    public function setName(?string $name): void;
    
    public function setValue(?JsonObject $value): void;
}