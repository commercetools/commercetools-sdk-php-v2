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
use Commercetools\History\Models\Common\LocalizedString;
use Commercetools\History\Models\Common\LocalizedStringModel;

/**
 * @internal
 */
final class ChangeLocalizedEnumValueLabelChangeModel extends JsonObjectModel implements ChangeLocalizedEnumValueLabelChange
{

    public const DISCRIMINATOR_VALUE = 'ChangeLocalizedEnumValueLabelChange';
    /**

     * @var ?string
     */
    protected $type;

    /**

     * @var ?string
     */
    protected $change;

    /**

     * @var ?string
     */
    protected $fieldName;

    /**

     * @var ?string
     */
    protected $attributeName;

    /**

     * @var ?string
     */
    protected $valueKey;

    /**

     * @var ?LocalizedString
     */
    protected $previousValue;

    /**

     * @var ?LocalizedString
     */
    protected $nextValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?string $fieldName = null,
        ?string $attributeName = null,
        ?string $valueKey = null,
        ?LocalizedString $previousValue = null,
        ?LocalizedString $nextValue = null
    ) {
        $this->change = $change;
        $this->fieldName = $fieldName;
        $this->attributeName = $attributeName;
        $this->valueKey = $valueKey;
        $this->previousValue = $previousValue;
        $this->nextValue = $nextValue;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**

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
            $this->type =  (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>Update action for <code>changeLocalizedEnumValueLabel</code> on types</p>
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
            $this->change =  (string) $data;
        }

        return $this->change;
    }

    /**
     * <p>The name of the field definition updated.</p>
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
            $this->fieldName =  (string) $data;
        }

        return $this->fieldName;
    }

    /**
     * <p>The name of the attribute updated.</p>
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
            $this->attributeName =  (string) $data;
        }

        return $this->attributeName;
    }

    /**
     * <p>Key of the values that was updated</p>
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
            $this->valueKey =  (string) $data;
        }

        return $this->valueKey;
    }

    /**

     * @return null|LocalizedString
     */
    public function getPreviousValue()
    {
        if (is_null($this->previousValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->previousValue =  LocalizedStringModel::of($data);
        }

        return $this->previousValue;
    }

    /**

     * @return null|LocalizedString
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->nextValue =  LocalizedStringModel::of($data);
        }

        return $this->nextValue;
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
     * @param ?string $valueKey
     */
    public function setValueKey(?string $valueKey): void
    {
        $this->valueKey = $valueKey;
    }

    /**
     * @param ?LocalizedString $previousValue
     */
    public function setPreviousValue(?LocalizedString $previousValue): void
    {
        $this->previousValue = $previousValue;
    }

    /**
     * @param ?LocalizedString $nextValue
     */
    public function setNextValue(?LocalizedString $nextValue): void
    {
        $this->nextValue = $nextValue;
    }



}
