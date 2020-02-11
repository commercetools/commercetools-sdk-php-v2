<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Type\FieldContainer;
use Commercetools\Api\Models\Type\TypeResourceIdentifier;

interface ProductSetProductPriceCustomTypeAction extends ProductUpdateAction
{

    public const FIELD_PRICE_ID = 'priceId';
    public const FIELD_STAGED = 'staged';
    public const FIELD_TYPE = 'type';
    public const FIELD_FIELDS = 'fields';

    /**
     * @return null|string
     */
    public function getPriceId();

    /**
     * @return null|bool
     */
    public function getStaged();

    /**
     * @return null|TypeResourceIdentifier
     */
    public function getType();

    /**
     * @return null|FieldContainer
     */
    public function getFields();

    public function setPriceId(?string $priceId): void;

    public function setStaged(?bool $staged): void;

    public function setType(?TypeResourceIdentifier $type): void;

    public function setFields(?FieldContainer $fields): void;
}
