<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<LocalizableEnumSetAttribute>
 */
final class LocalizableEnumSetAttributeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $name;

    /**

     * @var ?array
     */
    private $value;

    /**
     * <p>Required if used for <a href="ctp:import:type:ProductVariantImport">ProductVariantImport</a>.
     * Must not be set if used for <a href="ctp:import:type:ProductVariantPatch">ProductVariantPatch</a>.</p>
     * <p>Must match <code>name</code> of an <a href="ctp:api:type:AttributeDefinition">AttributeDefinition</a> of the Product Type.</p>
     *

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p>A set of localized enum values, each represented by its key.
     * Each key must match the key of an <a href="ctp:api:type:AttributeLocalizedEnumValue">AttributeLocalizedEnumValue</a> in the Product Type.</p>
     *

     * @return null|array
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param ?string $name
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param ?array $value
     * @return $this
     */
    public function withValue(?array $value)
    {
        $this->value = $value;

        return $this;
    }


    public function build(): LocalizableEnumSetAttribute
    {
        return new LocalizableEnumSetAttributeModel(
            $this->name,
            $this->value
        );
    }

    public static function of(): LocalizableEnumSetAttributeBuilder
    {
        return new self();
    }
}
