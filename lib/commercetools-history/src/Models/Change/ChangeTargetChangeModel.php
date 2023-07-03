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
use Commercetools\History\Models\ChangeValue\ChangeTargetChangeValue;
use Commercetools\History\Models\ChangeValue\ChangeTargetChangeValueModel;

/**
 * @internal
 */
final class ChangeTargetChangeModel extends JsonObjectModel implements ChangeTargetChange
{

    public const DISCRIMINATOR_VALUE = 'ChangeTargetChange';
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
     * @var ?ChangeTargetChangeValue
     */
    protected $previousValue;

    /**
     *
     * @var ?ChangeTargetChangeValue
     */
    protected $nextValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?ChangeTargetChangeValue $previousValue = null,
        ?ChangeTargetChangeValue $nextValue = null,
        ?string $type = null
    ) {
        $this->change = $change;
        $this->previousValue = $previousValue;
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
     * @return null|ChangeTargetChangeValue
     */
    public function getPreviousValue()
    {
        if (is_null($this->previousValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VALUE);
            if (is_null($data)) {
                return null;
            }
            $className = ChangeTargetChangeValueModel::resolveDiscriminatorClass($data);
            $this->previousValue = $className::of($data);
        }

        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *
     *
     * @return null|ChangeTargetChangeValue
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }
            $className = ChangeTargetChangeValueModel::resolveDiscriminatorClass($data);
            $this->nextValue = $className::of($data);
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
     * @param ?ChangeTargetChangeValue $previousValue
     */
    public function setPreviousValue(?ChangeTargetChangeValue $previousValue): void
    {
        $this->previousValue = $previousValue;
    }

    /**
     * @param ?ChangeTargetChangeValue $nextValue
     */
    public function setNextValue(?ChangeTargetChangeValue $nextValue): void
    {
        $this->nextValue = $nextValue;
    }



}
