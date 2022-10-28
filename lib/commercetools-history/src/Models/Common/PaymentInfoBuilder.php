<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<PaymentInfo>
 */
final class PaymentInfoBuilder implements Builder
{
    /**

     * @var ?ReferenceCollection
     */
    private $payments;

    /**

     * @return null|ReferenceCollection
     */
    public function getPayments()
    {
        return $this->payments;
    }

    /**
     * @param ?ReferenceCollection $payments
     * @return $this
     */
    public function withPayments(?ReferenceCollection $payments)
    {
        $this->payments = $payments;

        return $this;
    }


    public function build(): PaymentInfo
    {
        return new PaymentInfoModel(
            $this->payments
        );
    }

    public static function of(): PaymentInfoBuilder
    {
        return new self();
    }
}
