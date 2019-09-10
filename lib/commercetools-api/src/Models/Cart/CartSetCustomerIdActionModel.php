<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObjectModel;

final class CartSetCustomerIdActionModel extends JsonObjectModel implements CartSetCustomerIdAction
{
    const DISCRIMINATOR_VALUE = 'setCustomerId';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $customerId;

    public function __construct(
        string $action = null,
        string $customerId = null
    ) {
        $this->action = $action;
        $this->customerId = $customerId;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartUpdateAction::FIELD_ACTION);
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
    public function getCustomerId()
    {
        if (is_null($this->customerId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartSetCustomerIdAction::FIELD_CUSTOMER_ID);
            if (is_null($data)) {
                return null;
            }
            $this->customerId = (string) $data;
        }

        return $this->customerId;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setCustomerId(?string $customerId): void
    {
        $this->customerId = $customerId;
    }
}
