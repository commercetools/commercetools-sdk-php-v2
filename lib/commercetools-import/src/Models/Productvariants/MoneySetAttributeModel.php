<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\TypedMoneyCollection;
use stdClass;

/**
 * @internal
 */
final class MoneySetAttributeModel extends JsonObjectModel implements MoneySetAttribute
{
    public const DISCRIMINATOR_VALUE = 'money-set';
    /**
     *
     * @var ?string
     */
    protected $name;

    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?TypedMoneyCollection
     */
    protected $value;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $name = null,
        ?TypedMoneyCollection $value = null,
        ?string $type = null
    ) {
        $this->name = $name;
        $this->value = $value;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     * <p>Required if used for <a href="ctp:import:type:ProductVariantImport">ProductVariantImport</a>.
     * Must not be set if used for <a href="ctp:import:type:ProductVariantPatch">ProductVariantPatch</a>.</p>
     * <p>Must match <code>name</code> of an <a href="ctp:api:type:AttributeDefinition">AttributeDefinition</a> of the Product Type.</p>
     *
     *
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * <p>Must match <code>type</code> of an <a href="ctp:api:type:AttributeDefinition">AttributeDefinition</a> of the Product Type.
     * The type is required if this type is used in a product variant and must not be set when
     * used in a product variant patch.</p>
     *
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>A set of money values in cent precision format.</p>
     *
     *
     * @return null|TypedMoneyCollection
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->value = TypedMoneyCollection::fromArray($data);
        }

        return $this->value;
    }


    /**
     * @param ?string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?TypedMoneyCollection $value
     */
    public function setValue(?TypedMoneyCollection $value): void
    {
        $this->value = $value;
    }
}
