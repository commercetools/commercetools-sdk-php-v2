<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\Builder;

/**
 * @implements Builder<MyCustomerSetCompanyNameAction>
 */
final class MyCustomerSetCompanyNameActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $companyName;

    /**
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

    public function build(): MyCustomerSetCompanyNameAction
    {
        return new MyCustomerSetCompanyNameActionModel(
            $this->companyName
        );
    }

    public static function of(): MyCustomerSetCompanyNameActionBuilder
    {
        return new self();
    }
}
