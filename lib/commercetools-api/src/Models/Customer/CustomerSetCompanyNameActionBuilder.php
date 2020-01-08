<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CustomerSetCompanyNameAction>
 */
final class CustomerSetCompanyNameActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $companyName;

    /**
     * <p>If not defined, the company name is unset.</p>.
     *
     * @return null|string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @return $this
     */
    public function withCompanyName(?string $companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    public function build(): CustomerSetCompanyNameAction
    {
        return new CustomerSetCompanyNameActionModel(
            $this->companyName
        );
    }

    public static function of(): CustomerSetCompanyNameActionBuilder
    {
        return new self();
    }
}
