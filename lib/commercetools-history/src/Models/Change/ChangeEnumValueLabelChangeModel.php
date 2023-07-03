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
final class ChangeEnumValueLabelChangeModel extends JsonObjectModel implements ChangeEnumValueLabelChange
{

    public const DISCRIMINATOR_VALUE = 'ChangeEnumValueLabelChange';
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
    protected $previousValue;

    /**
     *
     * @var ?string
     */
    protected $nextValue;

    /**
     *
     * @var ?string
     */
    protected $fieldName;

    /**
     *
     * @var ?string
     */
    protected $valueKey;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?string $previousValue = null,
        ?string $nextValue = null,
        ?string $fieldName = null,
        ?string $valueKey = null,
        ?string $type = null
    ) {
        $this->change = $change;
        $this->previousValue = $previousValue;
        $this->nextValue = $nextValue;
        $this->fieldName = $fieldName;
        $this->valueKey = $valueKey;
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
     * <p>Value after the change.</p>
     *
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
     * <p>Name of the updated <a href="ctp:api:type:FieldDefinition">FieldDefinition</a>.</p>
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
     * <p>Key of the updated values.</p>
     *
     *
     * @return null|string
     */
    public function getValueKey()
    {
        if (is_null($this->valueKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_VALUE_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->valueKey = (string) $data;
        }

        return $this->valueKey;
    }


    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void
    {
        $this->change = $change;
    }

    /**
     * @param ?string $previousValue
     */
    public function setPreviousValue(?string $previousValue): void
    {
        $this->previousValue = $previousValue;
    }

    /**
     * @param ?string $nextValue
     */
    public function setNextValue(?string $nextValue): void
    {
        $this->nextValue = $nextValue;
    }

    /**
     * @param ?string $fieldName
     */
    public function setFieldName(?string $fieldName): void
    {
        $this->fieldName = $fieldName;
    }

    /**
     * @param ?string $valueKey
     */
    public function setValueKey(?string $valueKey): void
    {
        $this->valueKey = $valueKey;
    }



}
