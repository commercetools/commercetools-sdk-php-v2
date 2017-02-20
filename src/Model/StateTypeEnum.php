<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class StateTypeEnum extends JsonObject {
    const ORDERSTATE = 'OrderState';
    const LINEITEMSTATE = 'LineItemState';
    const PRODUCTSTATE = 'ProductState';
    const REVIEWSTATE = 'ReviewState';
    const PAYMENTSTATE = 'PaymentState';
}
