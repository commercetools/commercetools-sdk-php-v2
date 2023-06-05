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
use Commercetools\History\Models\ChangeValue\EnumValue;
use Commercetools\History\Models\ChangeValue\EnumValueModel;

/**
 * @internal
 */
final class AddEnumValueChangeModel extends JsonObjectModel implements AddEnumValueChange
{

    public const DISCRIMINATOR_VALUE = 'AddEnumValueChange';
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
     * @var ?EnumValue
     */
    protected $nextValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?string $fieldName = null,
        ?EnumValue $nextValue = null,
        ?string $type = null
    ) {
        $this->change = $change;
        $this->fieldName = $fieldName;
        $this->nextValue = $nextValue;
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
     * <p>Update action for <code>addEnumValue</code> on types</p>
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
     * <p>The name of the field/attribute definition updated.</p>
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
     *
     * @return null|EnumValue
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->nextValue = EnumValueModel::of($data);
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
     * @param ?EnumValue $nextValue
     */
    public function setNextValue(?EnumValue $nextValue): void
    {
        $this->nextValue = $nextValue;
    }



}
