<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Api\Models\Customer\CustomerResourceIdentifier;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifierModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ReviewSetCustomerActionModel extends JsonObjectModel implements ReviewSetCustomerAction
{
    const DISCRIMINATOR_VALUE = 'setCustomer';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?CustomerResourceIdentifier
     */
    protected $customer;

    public function __construct(
        string $action = null,
        CustomerResourceIdentifier $customer = null
    ) {
        $this->action = $action;
        $this->customer = $customer;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ReviewUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|CustomerResourceIdentifier
     */
    public function getCustomer()
    {
        if (is_null($this->customer)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ReviewSetCustomerAction::FIELD_CUSTOMER);
            if (is_null($data)) {
                return null;
            }

            $this->customer = CustomerResourceIdentifierModel::of($data);
        }

        return $this->customer;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setCustomer(?CustomerResourceIdentifier $customer): void
    {
        $this->customer = $customer;
    }
}
