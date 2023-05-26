<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface QuoteCustomerChangedMessage extends Message
{
    public const FIELD_CUSTOMER = 'customer';
    public const FIELD_PREVIOUS_CUSTOMER = 'previousCustomer';

    /**
     * <p>The <a href="/../api/quotes-overview#buyer">Buyer</a> who now owns the Quote.</p>
     *

     * @return null|CustomerReference
     */
    public function getCustomer();

    /**
     * <p>The previous <a href="/../api/quotes-overview#buyer">Buyer</a>.</p>
     *

     * @return null|CustomerReference
     */
    public function getPreviousCustomer();

    /**
     * @param ?CustomerReference $customer
     */
    public function setCustomer(?CustomerReference $customer): void;

    /**
     * @param ?CustomerReference $previousCustomer
     */
    public function setPreviousCustomer(?CustomerReference $previousCustomer): void;
}
