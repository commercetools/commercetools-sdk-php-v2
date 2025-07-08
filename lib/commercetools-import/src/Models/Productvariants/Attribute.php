<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface Attribute extends JsonObject
{
    public const DISCRIMINATOR_FIELD = 'type';
    public const FIELD_NAME = 'name';
    public const FIELD_TYPE = 'type';

    /**
     * <p>Required if used for <a href="ctp:import:type:ProductVariantImport">ProductVariantImport</a>.
     * Must not be set if used for <a href="ctp:import:type:ProductVariantPatch">ProductVariantPatch</a>.</p>
     * <p>Must match <code>name</code> of an <a href="ctp:api:type:AttributeDefinition">AttributeDefinition</a> of the Product Type.</p>
     *

     * @return null|string
     */
    public function getName();

    /**
     * <p>Must match <code>type</code> of an <a href="ctp:api:type:AttributeDefinition">AttributeDefinition</a> of the Product Type.
     * The type is required if this type is used in a product variant and must not be set when
     * used in a product variant patch.</p>
     *

     * @return null|string
     */
    public function getType();

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;
}
