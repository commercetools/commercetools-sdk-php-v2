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
final class AddInterfaceInteractionChangeModel extends JsonObjectModel implements AddInterfaceInteractionChange
{
    public const DISCRIMINATOR_VALUE = 'AddInterfaceInteractionChange';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $change;

    /**
     * @var ?CustomFieldExpandedValue
     */
    protected $nextValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?CustomFieldExpandedValue $nextValue = null
    ) {
        $this->change = $change;
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
     * <p>Update action for <code>addInterfaceInteraction</code> on payments</p>
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
     * <p>Only available if <code>expand</code> is set to true</p>
     *
     * @return null|CustomFieldExpandedValue
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->nextValue =  CustomFieldExpandedValueModel::of($data);
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
     * @param ?CustomFieldExpandedValue $nextValue
     */
    public function setNextValue(?CustomFieldExpandedValue $nextValue): void
    {
        $this->nextValue = $nextValue;
    }



}
