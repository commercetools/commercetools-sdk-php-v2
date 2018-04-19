<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\UpdateActionModel;

use Commercetools\Types\UpdateAction;
use Commercetools\Types;

class OrderUpdateActionModel extends UpdateActionModel implements OrderUpdateAction
{
    const DISCRIMINATOR_VALUE = '';

    /**
     * @param array $data
     */
    public function __construct(array $data = []) {
        parent::__construct($data);
        $this->setAction(static::DISCRIMINATOR_VALUE);
    }

}
