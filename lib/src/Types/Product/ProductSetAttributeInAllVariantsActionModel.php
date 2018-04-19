<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Product\ProductUpdateActionModel;

class ProductSetAttributeInAllVariantsActionModel extends ProductUpdateActionModel implements ProductSetAttributeInAllVariantsAction
{
    const DISCRIMINATOR_VALUE = 'setAttributeInAllVariants';

    /**
     * @var string
     */
    protected $name;
    /**
     * @var mixed
     */
    protected $value;
    /**
     * @var mixed
     */
    protected $staged;

    /**
     * @return string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            $value = $this->raw(ProductSetAttributeInAllVariantsAction::FIELD_NAME);
            $value = (string)$value;
            $this->name = $value;
        }
        return $this->name;
    }
    /**
     * @return mixed
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            $value = $this->raw(ProductSetAttributeInAllVariantsAction::FIELD_VALUE);
            $this->value = $value;
        }
        return $this->value;
    }
    /**
     * @return mixed
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            $value = $this->raw(ProductSetAttributeInAllVariantsAction::FIELD_STAGED);
            $this->staged = $value;
        }
        return $this->staged;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name)
    {
        $this->name = (string)$name;

        return $this;
    }
    /**
     * @param $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }
    /**
     * @param $staged
     * @return $this
     */
    public function setStaged($staged)
    {
        $this->staged = $staged;

        return $this;
    }

}
