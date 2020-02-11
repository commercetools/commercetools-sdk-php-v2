<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Cart\ItemShippingDetailsDraft;
use Commercetools\Api\Models\Cart\ItemShippingDetailsDraftModel;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionModel;

final class StagedOrderSetCustomLineItemShippingDetailsActionModel extends JsonObjectModel implements StagedOrderSetCustomLineItemShippingDetailsAction
{
    public const DISCRIMINATOR_VALUE = 'setCustomLineItemShippingDetails';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $customLineItemId;

    /**
     * @var ?ItemShippingDetailsDraft
     */
    protected $shippingDetails;


    public function __construct(
        string $customLineItemId = null,
        ItemShippingDetailsDraft $shippingDetails = null
    ) {
        $this->customLineItemId = $customLineItemId;
        $this->shippingDetails = $shippingDetails;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(StagedOrderUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getCustomLineItemId()
    {
        if (is_null($this->customLineItemId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(StagedOrderSetCustomLineItemShippingDetailsAction::FIELD_CUSTOM_LINE_ITEM_ID);
            if (is_null($data)) {
                return null;
            }
            $this->customLineItemId = (string) $data;
        }

        return $this->customLineItemId;
    }

    /**
     * @return null|ItemShippingDetailsDraft
     */
    public function getShippingDetails()
    {
        if (is_null($this->shippingDetails)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(StagedOrderSetCustomLineItemShippingDetailsAction::FIELD_SHIPPING_DETAILS);
            if (is_null($data)) {
                return null;
            }

            $this->shippingDetails = ItemShippingDetailsDraftModel::of($data);
        }

        return $this->shippingDetails;
    }

    public function setCustomLineItemId(?string $customLineItemId): void
    {
        $this->customLineItemId = $customLineItemId;
    }

    public function setShippingDetails(?ItemShippingDetailsDraft $shippingDetails): void
    {
        $this->shippingDetails = $shippingDetails;
    }



}
