<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<PaymentUpdate>
 */
final class PaymentUpdateBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $version;

    /**
     * @var ?PaymentUpdateActionCollection
     */
    private $actions;

    /**
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return null|PaymentUpdateActionCollection
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * @param ?int $version
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @param ?PaymentUpdateActionCollection $actions
     * @return $this
     */
    public function withActions(?PaymentUpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }


    public function build(): PaymentUpdate
    {
        return new PaymentUpdateModel(
            $this->version,
            $this->actions
        );
    }

    public static function of(): PaymentUpdateBuilder
    {
        return new self();
    }
}
