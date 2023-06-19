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
use Commercetools\History\Models\ChangeValue\TextLineItemValue;
use Commercetools\History\Models\ChangeValue\TextLineItemValueModel;
use Commercetools\History\Models\Common\LocalizedString;
use Commercetools\History\Models\Common\LocalizedStringModel;

/**
 * @internal
 */
final class ChangeTextLineItemNameChangeModel extends JsonObjectModel implements ChangeTextLineItemNameChange
{

    public const DISCRIMINATOR_VALUE = 'ChangeTextLineItemNameChange';
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
     * @var ?LocalizedString
     */
    protected $previousValue;

    /**
     *
     * @var ?LocalizedString
     */
    protected $nextValue;

    /**
     *
     * @var ?TextLineItemValue
     */
    protected $textLineItem;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?LocalizedString $previousValue = null,
        ?LocalizedString $nextValue = null,
        ?TextLineItemValue $textLineItem = null,
        ?string $type = null
    ) {
        $this->change = $change;
        $this->previousValue = $previousValue;
        $this->nextValue = $nextValue;
        $this->textLineItem = $textLineItem;
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

            $this->previousValue = LocalizedStringModel::of($data);
        }

        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *
     *
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

            $this->nextValue = LocalizedStringModel::of($data);
        }

        return $this->nextValue;
    }

    /**
     * <p>Holds information about the updated Text Line Item.</p>
     *
     *
     * @return null|TextLineItemValue
     */
    public function getTextLineItem()
    {
        if (is_null($this->textLineItem)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TEXT_LINE_ITEM);
            if (is_null($data)) {
                return null;
            }

            $this->textLineItem = TextLineItemValueModel::of($data);
        }

        return $this->textLineItem;
    }


    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void
    {
        $this->change = $change;
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

    /**
     * @param ?TextLineItemValue $textLineItem
     */
    public function setTextLineItem(?TextLineItemValue $textLineItem): void
    {
        $this->textLineItem = $textLineItem;
    }



}
