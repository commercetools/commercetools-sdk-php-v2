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
 * @implements Builder<LocalizableEnumAttribute>
 */
final class LocalizableEnumAttributeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $name;

    /**

     * @var ?string
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
     * <p>The key of the localized enum value.
     * Must match the key of an <a href="ctp:api:type:AttributeLocalizedEnumValue">AttributeLocalizedEnumValue</a> in the Product Type.</p>
     *

     * @return null|string
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
     * @param ?string $value
     * @return $this
     */
    public function withValue(?string $value)
    {
        $this->value = $value;

        return $this;
    }


    public function build(): LocalizableEnumAttribute
    {
        return new LocalizableEnumAttributeModel(
            $this->name,
            $this->value
        );
    }

    public static function of(): LocalizableEnumAttributeBuilder
    {
        return new self();
    }
}
