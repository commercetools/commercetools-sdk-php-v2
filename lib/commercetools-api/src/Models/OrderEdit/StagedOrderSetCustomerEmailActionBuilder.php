<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\Builder;

/**
 * @implements Builder<StagedOrderSetCustomerEmailAction>
 */
final class StagedOrderSetCustomerEmailActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $email;

    /**
     * @return null|string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return $this
     */
    public function withEmail(?string $email)
    {
        $this->email = $email;

        return $this;
    }

    public function build(): StagedOrderSetCustomerEmailAction
    {
        return new StagedOrderSetCustomerEmailActionModel(
            $this->email
        );
    }

    public static function of(): StagedOrderSetCustomerEmailActionBuilder
    {
        return new self();
    }
}
