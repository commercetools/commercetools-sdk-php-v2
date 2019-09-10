<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Payment\PaymentReferenceCollection;

final class PaymentInfoModel extends JsonObjectModel implements PaymentInfo
{
    
    public function __construct(
        PaymentReferenceCollection $payments = null
    ) {
        $this->payments = $payments;
        
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
       if (is_null($this->payments)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(PaymentInfo::FIELD_PAYMENTS);
           if (is_null($data)) {
               return null;
           }
           $this->payments = PaymentReferenceCollection::fromArray($data);
       }
       return $this->payments;
    }
    final public function setPayments(?PaymentReferenceCollection $payments): void
    {
        $this->payments = $payments;
    }
    
}