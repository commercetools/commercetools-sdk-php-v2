<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\JsonObjectModel;

use Commercetools\Types;

class ShippingRateInputModel extends JsonObjectModel implements ShippingRateInput {
    const DISCRIMINATOR_VALUE = '';

    /**
     * @param array $data
     */
    public function __construct(array $data = []) {
        parent::__construct($data);
        $this->setType(static::DISCRIMINATOR_VALUE);
    }

    /**
     * @var string
     */
    protected $type;

    /**
     * @return string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            $value = $this->raw(ShippingRateInput::FIELD_TYPE);
            $value = (string)$value;
            $this->type = $value;
        }
        return $this->type;
    }

    /**
     * @param string $type
     * @return $this
     */
    public function setType(string $type)
    {
        $this->type = (string)$type;

        return $this;
    }

}
