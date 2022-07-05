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
use Commercetools\History\Models\ChangeValue\ValidFromAndUntilValue;
use Commercetools\History\Models\ChangeValue\ValidFromAndUntilValueModel;

/**
 * @internal
 */
final class SetValidFromAndUntilChangeModel extends JsonObjectModel implements SetValidFromAndUntilChange
{

    public const DISCRIMINATOR_VALUE = 'SetValidFromAndUntilChange';
    /**

     * @var ?string
     */
    protected $type;

    /**

     * @var ?string
     */
    protected $change;

    /**

     * @var ?ValidFromAndUntilValue
     */
    protected $previousValue;

    /**

     * @var ?ValidFromAndUntilValue
     */
    protected $nextValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?ValidFromAndUntilValue $previousValue = null,
        ?ValidFromAndUntilValue $nextValue = null
    ) {
        $this->change = $change;
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
     * <p>Shape of the value for <code>setValidFromAndUntil</code> action</p>
     *

     * @return null|ValidFromAndUntilValue
     */
    public function getPreviousValue()
    {
        if (is_null($this->previousValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->previousValue =  ValidFromAndUntilValueModel::of($data);
        }

        return $this->previousValue;
    }

    /**
     * <p>Shape of the value for <code>setValidFromAndUntil</code> action</p>
     *

     * @return null|ValidFromAndUntilValue
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->nextValue =  ValidFromAndUntilValueModel::of($data);
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
     * @param ?ValidFromAndUntilValue $previousValue
     */
    public function setPreviousValue(?ValidFromAndUntilValue $previousValue): void
    {
        $this->previousValue = $previousValue;
    }

    /**
     * @param ?ValidFromAndUntilValue $nextValue
     */
    public function setNextValue(?ValidFromAndUntilValue $nextValue): void
    {
        $this->nextValue = $nextValue;
    }



}
