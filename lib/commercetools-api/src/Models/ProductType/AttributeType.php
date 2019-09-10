<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\JsonObject;

interface AttributeType extends JsonObject
{
    const DISCRIMINATOR_FIELD = 'name';
    const FIELD_NAME = 'name';

    /**
     *
     * @return string|null
     */
    public function getName();
    public function setName(?string $name): void;
}