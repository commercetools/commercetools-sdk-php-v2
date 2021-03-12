<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ChangeValueActionModel extends JsonObjectModel implements ChangeValueAction
{
    public const DISCRIMINATOR_VALUE = 'ChangeValueAction';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $change;

    /**
     * @var ?ChangeValueActionValue
     */
    protected $nextValue;

    /**
     * @var ?ChangeValueActionValue
     */
    protected $previousValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?ChangeValueActionValue $nextValue = null,
        ?ChangeValueActionValue $previousValue = null
    ) {
        $this->change = $change;
        $this->nextValue = $nextValue;
        $this->previousValue = $previousValue;
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
     * <p>Update action for <code>changeValue</code> on cart discounts and product discounts</p>
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
     * @return null|ChangeValueActionValue
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }
            $className = ChangeValueActionValueModel::resolveDiscriminatorClass($data);
            $this->nextValue =  $className::of($data);
        }

        return $this->nextValue;
    }

    /**
     * @return null|ChangeValueActionValue
     */
    public function getPreviousValue()
    {
        if (is_null($this->previousValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VALUE);
            if (is_null($data)) {
                return null;
            }
            $className = ChangeValueActionValueModel::resolveDiscriminatorClass($data);
            $this->previousValue =  $className::of($data);
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
     * @param ?ChangeValueActionValue $nextValue
     */
    public function setNextValue(?ChangeValueActionValue $nextValue): void
    {
        $this->nextValue = $nextValue;
    }

    /**
     * @param ?ChangeValueActionValue $previousValue
     */
    public function setPreviousValue(?ChangeValueActionValue $previousValue): void
    {
        $this->previousValue = $previousValue;
    }



}
