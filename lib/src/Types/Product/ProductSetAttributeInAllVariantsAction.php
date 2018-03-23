<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

interface ProductSetAttributeInAllVariantsAction extends ProductUpdateAction {
    const FIELD_NAME = 'name';
    const FIELD_VALUE = 'value';
    const FIELD_STAGED = 'staged';

    /**
     * @return string
     */
    public function getName();

    /**
     * @return mixed
     */
    public function getValue();

    /**
     * @return mixed
     */
    public function getStaged();

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name);

    /**
     * @param mixed $value
     * @return $this
     */
    public function setValue($value);

    /**
     * @param mixed $staged
     * @return $this
     */
    public function setStaged($staged);

}
