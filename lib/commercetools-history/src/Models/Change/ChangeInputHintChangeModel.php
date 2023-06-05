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

/**
 * @internal
 */
final class ChangeInputHintChangeModel extends JsonObjectModel implements ChangeInputHintChange
{

    public const DISCRIMINATOR_VALUE = 'ChangeInputHintChange';
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
     * @var ?string
     */
    protected $fieldName;

    /**
     *
     * @var ?string
     */
    protected $attributeName;

    /**
     *
     * @var ?string
     */
    protected $nextValue;

    /**
     *
     * @var ?string
     */
    protected $previousValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?string $fieldName = null,
        ?string $attributeName = null,
        ?string $nextValue = null,
        ?string $previousValue = null,
        ?string $type = null
    ) {
        $this->change = $change;
        $this->fieldName = $fieldName;
        $this->attributeName = $attributeName;
        $this->nextValue = $nextValue;
        $this->previousValue = $previousValue;
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
     * <p>Update action for <code>changeInputHint</code> on product types and types</p>
     *
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
     * <p>The name of the field definition updated.</p>
     *
     *
     * @return null|string
     */
    public function getFieldName()
    {
        if (is_null($this->fieldName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->fieldName = (string) $data;
        }

        return $this->fieldName;
    }

    /**
     * <p>The name of the attribute updated.</p>
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
     *
     * @return null|string
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->nextValue = (string) $data;
        }

        return $this->nextValue;
    }

    /**
     *
     * @return null|string
     */
    public function getPreviousValue()
    {
        if (is_null($this->previousValue)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->previousValue = (string) $data;
        }

        return $this->previousValue;
    }


    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void
    {
        $this->change = $change;
    }

    /**
     * @param ?string $fieldName
     */
    public function setFieldName(?string $fieldName): void
    {
        $this->fieldName = $fieldName;
    }

    /**
     * @param ?string $attributeName
     */
    public function setAttributeName(?string $attributeName): void
    {
        $this->attributeName = $attributeName;
    }

    /**
     * @param ?string $nextValue
     */
    public function setNextValue(?string $nextValue): void
    {
        $this->nextValue = $nextValue;
    }

    /**
     * @param ?string $previousValue
     */
    public function setPreviousValue(?string $previousValue): void
    {
        $this->previousValue = $previousValue;
    }



}
