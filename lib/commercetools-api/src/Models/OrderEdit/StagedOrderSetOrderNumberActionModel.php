<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Base\JsonObjectModel;

final class StagedOrderSetOrderNumberActionModel extends JsonObjectModel implements StagedOrderSetOrderNumberAction
{
    const DISCRIMINATOR_VALUE = 'setOrderNumber';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $orderNumber;

    public function __construct(
        string $action = null,
        string $orderNumber = null
    ) {
        $this->action = $action;
        $this->orderNumber = $orderNumber;
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
    public function getOrderNumber()
    {
        if (is_null($this->orderNumber)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(StagedOrderSetOrderNumberAction::FIELD_ORDER_NUMBER);
            if (is_null($data)) {
                return null;
            }
            $this->orderNumber = (string) $data;
        }

        return $this->orderNumber;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setOrderNumber(?string $orderNumber): void
    {
        $this->orderNumber = $orderNumber;
    }
}
