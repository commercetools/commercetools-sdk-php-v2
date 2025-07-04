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
use Commercetools\Import\Models\Common\KeyReferenceCollection;
use stdClass;

/**
 * @implements Builder<ReferenceSetAttribute>
 */
final class ReferenceSetAttributeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $name;

    /**

     * @var ?KeyReferenceCollection
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
     * <p>A set of references, each referencing a resource by key.
     * Each reference must match the key of an existing resource in the project.</p>
     *

     * @return null|KeyReferenceCollection
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
     * @param ?KeyReferenceCollection $value
     * @return $this
     */
    public function withValue(?KeyReferenceCollection $value)
    {
        $this->value = $value;

        return $this;
    }


    public function build(): ReferenceSetAttribute
    {
        return new ReferenceSetAttributeModel(
            $this->name,
            $this->value
        );
    }

    public static function of(): ReferenceSetAttributeBuilder
    {
        return new self();
    }
}
