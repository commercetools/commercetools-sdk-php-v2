<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\Common\AttributePlainEnumValueCollection;

/**
 * @internal
 */
final class ChangePlainEnumValueOrderChangeModel extends JsonObjectModel implements ChangePlainEnumValueOrderChange
{

    public const DISCRIMINATOR_VALUE = 'ChangePlainEnumValueOrderChange';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $change;

    /**
     *
     * @var ?AttributePlainEnumValueCollection
     */
    protected $previousValue;

    /**
     *
     * @var ?AttributePlainEnumValueCollection
     */
    protected $nextValue;

    /**
     *
     * @var ?string
     */
    protected $attributeName;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?AttributePlainEnumValueCollection $previousValue = null,
        ?AttributePlainEnumValueCollection $nextValue = null,
        ?string $attributeName = null,
        ?string $type = null
    ) {
        $this->change = $change;
        $this->previousValue = $previousValue;
        $this->nextValue = $nextValue;
        $this->attributeName = $attributeName;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
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
     *
     * @return null|string
     */
    public function getChange()
    {
        if (is_null($this->change)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CHANGE);
            if (is_null($data)) {
                return null;
            }
            $this->change = (string) $data;
        }

        return $this->change;
    }

    /**
     * <p>Value before the change.</p>
     *
     *
     * @return null|AttributePlainEnumValueCollection
     */
    public function getPreviousValue()
    {
        if (is_null($this->previousValue)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->previousValue = AttributePlainEnumValueCollection::fromArray($data);
        }

        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *
     *
     * @return null|AttributePlainEnumValueCollection
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->nextValue = AttributePlainEnumValueCollection::fromArray($data);
        }

        return $this->nextValue;
    }

    /**
     * <p>Name of the updated <a href="ctp:api:type:AttributeDefinition">AttributeDefinition</a>.</p>
     *
     *
     * @return null|string
     */
    public function getAttributeName()
    {
        if (is_null($this->attributeName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ATTRIBUTE_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->attributeName = (string) $data;
        }

        return $this->attributeName;
    }


    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void
    {
        $this->change = $change;
    }

    /**
     * @param ?AttributePlainEnumValueCollection $previousValue
     */
    public function setPreviousValue(?AttributePlainEnumValueCollection $previousValue): void
    {
        $this->previousValue = $previousValue;
    }

    /**
     * @param ?AttributePlainEnumValueCollection $nextValue
     */
    public function setNextValue(?AttributePlainEnumValueCollection $nextValue): void
    {
        $this->nextValue = $nextValue;
    }

    /**
     * @param ?string $attributeName
     */
    public function setAttributeName(?string $attributeName): void
    {
        $this->attributeName = $attributeName;
    }



}
