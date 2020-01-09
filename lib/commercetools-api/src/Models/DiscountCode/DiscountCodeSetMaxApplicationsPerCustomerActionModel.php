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
        int $maxApplicationsPerCustomer = null
    ) {
        $this->maxApplicationsPerCustomer = $maxApplicationsPerCustomer;
        $this->action = static::DISCRIMINATOR_VALUE;
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
     * <p>If the <code>maxApplicationsPerCustomer</code> parameter is not included, the field will be emptied.</p>
     *
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

    public function setMaxApplicationsPerCustomer(?int $maxApplicationsPerCustomer): void
    {
        $this->maxApplicationsPerCustomer = $maxApplicationsPerCustomer;
    }
}
