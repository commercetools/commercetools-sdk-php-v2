<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\PagedQueryResponseModel;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

class PaymentPagedQueryResponseModel extends PagedQueryResponseModel implements PaymentPagedQueryResponse {
    /**
     * @var PaymentCollection
     */
    protected $results;

    /**
     * @return PaymentCollection
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            $value = $this->raw(PaymentPagedQueryResponse::FIELD_RESULTS);
            if (is_null($value)) {
                return $this->mapData(PaymentCollection::class, null);
            }
            $value = $this->mapData(PaymentCollection::class, $value);
            $this->results = $value;
        }
        return $this->results;
    }

    /**
     * @param PaymentCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results)
    {
        if (!$results instanceof PaymentCollection) {
            throw new InvalidArgumentException();
        }
        $this->results = $results;

        return $this;
    }

}
