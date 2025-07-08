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
 * @implements Builder<BooleanAttribute>
 */
final class BooleanAttributeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $name;

    /**

     * @var ?bool
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
     * <p><code>true</code> or <code>false</code></p>
     *

     * @return null|bool
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
     * @param ?bool $value
     * @return $this
     */
    public function withValue(?bool $value)
    {
        $this->value = $value;

        return $this;
    }


    public function build(): BooleanAttribute
    {
        return new BooleanAttributeModel(
            $this->name,
            $this->value
        );
    }

    public static function of(): BooleanAttributeBuilder
    {
        return new self();
    }
}
