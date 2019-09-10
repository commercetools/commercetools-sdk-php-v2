<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Payment\PaymentReferenceCollection;

/**
 * @implements Builder<PaymentInfo>
 */
final class PaymentInfoBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?PaymentReferenceCollection
     */
    protected $payments;

    /**
     *
     * @return PaymentReferenceCollection|null
     */
    final public function getPayments()
    {
       return $this->payments;
    }
    /**
     * @return $this
     */
    final public function withPayments(?PaymentReferenceCollection $payments)
    {
        $this->payments = $payments;
        
        return $this;
    }
    
    public function build(): PaymentInfo {
        return new PaymentInfoModel(
            $this->payments
        );
    }
    
    public static function of(): PaymentInfoBuilder
    {
        return new self();
    }
}