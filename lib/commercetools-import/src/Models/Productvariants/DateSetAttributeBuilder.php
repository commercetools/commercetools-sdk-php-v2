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
 * @implements Builder<DateSetAttribute>
 */
final class DateSetAttributeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $name;

    /**

     * @var ?DateTimeImmutableCollection
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
     * <p>A set of dates in the format <code>YYYY-MM-DD</code>.</p>
     *

     * @return null|DateTimeImmutableCollection
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
     * @param ?DateTimeImmutableCollection $value
     * @return $this
     */
    public function withValue(?DateTimeImmutableCollection $value)
    {
        $this->value = $value;

        return $this;
    }


    public function build(): DateSetAttribute
    {
        return new DateSetAttributeModel(
            $this->name,
            $this->value
        );
    }

    public static function of(): DateSetAttributeBuilder
    {
        return new self();
    }
}
