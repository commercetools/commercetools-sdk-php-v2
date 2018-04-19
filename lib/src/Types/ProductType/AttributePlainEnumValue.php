<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Base\JsonObject;

interface AttributePlainEnumValue extends JsonObject
{
    const FIELD_KEY = 'key';
    const FIELD_LABEL = 'label';

    /**
     * @return string
     */
    public function getKey();

    /**
     * @return string
     */
    public function getLabel();

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key);

    /**
     * @param string $label
     * @return $this
     */
    public function setLabel(string $label);

}
