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
use Commercetools\History\Models\Common\TextLineItem;
use Commercetools\History\Models\Common\TextLineItemModel;

/**
 * @internal
 */
final class AddTextLineItemChangeModel extends JsonObjectModel implements AddTextLineItemChange
{

    public const DISCRIMINATOR_VALUE = 'AddTextLineItemChange';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $change;

    /**
     * @var ?TextLineItem
     */
    protected $nextValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?TextLineItem $nextValue = null
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
     * @return null|TextLineItem
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->nextValue =  TextLineItemModel::of($data);
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
     * @param ?TextLineItem $nextValue
     */
    public function setNextValue(?TextLineItem $nextValue): void
    {
        $this->nextValue = $nextValue;
    }



}
