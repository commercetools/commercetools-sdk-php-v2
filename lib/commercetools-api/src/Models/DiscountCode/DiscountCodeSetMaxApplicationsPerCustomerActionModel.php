<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\JsonObjectModel;

final class DiscountCodeSetMaxApplicationsPerCustomerActionModel extends JsonObjectModel implements DiscountCodeSetMaxApplicationsPerCustomerAction
{
    const DISCRIMINATOR_VALUE = 'setMaxApplicationsPerCustomer';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?int
     */
    protected $maxApplicationsPerCustomer;

    public function __construct(
        string $action = null,
        int $maxApplicationsPerCustomer = null
    ) {
        $this->action = $action;
        $this->maxApplicationsPerCustomer = $maxApplicationsPerCustomer;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(DiscountCodeUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|int
     */
    public function getMaxApplicationsPerCustomer()
    {
        if (is_null($this->maxApplicationsPerCustomer)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(DiscountCodeSetMaxApplicationsPerCustomerAction::FIELD_MAX_APPLICATIONS_PER_CUSTOMER);
            if (is_null($data)) {
                return null;
            }
            $this->maxApplicationsPerCustomer = (int) $data;
        }

        return $this->maxApplicationsPerCustomer;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setMaxApplicationsPerCustomer(?int $maxApplicationsPerCustomer): void
    {
        $this->maxApplicationsPerCustomer = $maxApplicationsPerCustomer;
    }
}
