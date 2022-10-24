<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

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
     * <p>Value to set.
     * If empty, any existing value is removed.</p>
     *

     * @return null|string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param ?string $companyName
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
