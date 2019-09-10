<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;

interface ProductSetProductPriceCustomFieldAction extends ProductUpdateAction
{
    const FIELD_PRICE_ID = 'priceId';
    const FIELD_STAGED = 'staged';
    const FIELD_NAME = 'name';
    const FIELD_VALUE = 'value';

    /**
     * @return null|string
     */
    public function getPriceId();

    /**
     * @return null|bool
     */
    public function getStaged();

    /**
     * @return null|string
     */
    public function getName();

    /**
     * @return null|JsonObject
     */
    public function getValue();

    public function setPriceId(?string $priceId): void;

    public function setStaged(?bool $staged): void;

    public function setName(?string $name): void;

    public function setValue(?JsonObject $value): void;
}
