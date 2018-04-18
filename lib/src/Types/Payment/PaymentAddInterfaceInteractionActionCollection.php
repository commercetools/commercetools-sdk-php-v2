<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Payment\PaymentUpdateActionCollection;


interface PaymentAddInterfaceInteractionActionCollection extends PaymentUpdateActionCollection {
    /**
     * @param $index
     * @return PaymentAddInterfaceInteractionAction
     */
    public function at($index);

    /**
     * @return PaymentAddInterfaceInteractionAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return PaymentAddInterfaceInteractionAction
     */
    public function map($data, $index);
}
