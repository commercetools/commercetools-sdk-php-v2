<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\UpdateActionModel;

use Commercetools\Types\UpdateAction;
use Commercetools\Types;

class TypeUpdateActionModel extends UpdateActionModel implements TypeUpdateAction
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
