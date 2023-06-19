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
final class SetCustomLineItemCustomFieldChangeModel extends JsonObjectModel implements SetCustomLineItemCustomFieldChange
{

    public const DISCRIMINATOR_VALUE = 'SetCustomLineItemCustomFieldChange';
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
     * @var ?mixed
     */
    protected $previousValue;

    /**
     *
     * @var ?mixed
     */
    protected $nextValue;

    /**
     *
     * @var ?string
     */
    protected $name;

    /**
     *
     * @var ?LocalizedString
     */
    protected $customLineItem;

    /**
     *
     * @var ?string
     */
    protected $customLineItemId;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
         $previousValue = null,
         $nextValue = null,
        ?string $name = null,
        ?LocalizedString $customLineItem = null,
        ?string $customLineItemId = null,
        ?string $type = null
    ) {
        $this->change = $change;
        $this->previousValue = $previousValue;
        $this->nextValue = $nextValue;
        $this->name = $name;
        $this->customLineItem = $customLineItem;
        $this->customLineItemId = $customLineItemId;
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
     * @return null|mixed
     */
    public function getPreviousValue()
    {
        if (is_null($this->previousValue)) {
            /** @psalm-var mixed $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->previousValue = $data;
        }

        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *
     *
     * @return null|mixed
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var mixed $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->nextValue = $data;
        }

        return $this->nextValue;
    }

    /**
     * <p>Name of the <a href="/../api/projects/custom-fields">Custom Field</a>.</p>
     *
     *
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * <p>Name of the updated <a href="ctp:api:type:CustomLineItem">CustomLineItem</a>.</p>
     *
     *
     * @return null|LocalizedString
     */
    public function getCustomLineItem()
    {
        if (is_null($this->customLineItem)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOM_LINE_ITEM);
            if (is_null($data)) {
                return null;
            }

            $this->customLineItem = LocalizedStringModel::of($data);
        }

        return $this->customLineItem;
    }

    /**
     * <p><code>id</code> of the updated <a href="ctp:api:type:CustomLineItem">CustomLineItem</a>.</p>
     *
     *
     * @return null|string
     */
    public function getCustomLineItemId()
    {
        if (is_null($this->customLineItemId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CUSTOM_LINE_ITEM_ID);
            if (is_null($data)) {
                return null;
            }
            $this->customLineItemId = (string) $data;
        }

        return $this->customLineItemId;
    }


    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void
    {
        $this->change = $change;
    }

    /**
     * @param mixed $previousValue
     */
    public function setPreviousValue( $previousValue): void
    {
        $this->previousValue = $previousValue;
    }

    /**
     * @param mixed $nextValue
     */
    public function setNextValue( $nextValue): void
    {
        $this->nextValue = $nextValue;
    }

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?LocalizedString $customLineItem
     */
    public function setCustomLineItem(?LocalizedString $customLineItem): void
    {
        $this->customLineItem = $customLineItem;
    }

    /**
     * @param ?string $customLineItemId
     */
    public function setCustomLineItemId(?string $customLineItemId): void
    {
        $this->customLineItemId = $customLineItemId;
    }



}
