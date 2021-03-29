<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\LocalizedString;

interface ShoppingListLineItemValue extends JsonObject
{

    public const FIELD_ID = 'id';
    public const FIELD_NAME = 'name';
    public const FIELD_VARIANT_ID = 'variantId';

    /**
     * @return null|string
     */
    public function getId();

    /**
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * @return null|int
     */
    public function getVariantId();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?int $variantId
     */
    public function setVariantId(?int $variantId): void;
}
