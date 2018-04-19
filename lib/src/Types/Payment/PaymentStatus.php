<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Base\JsonObject;

use Commercetools\Types\State\StateReference;

interface PaymentStatus extends JsonObject
{
    const FIELD_INTERFACE_CODE = 'interfaceCode';
    const FIELD_INTERFACE_TEXT = 'interfaceText';
    const FIELD_STATE = 'state';

    /**
     * @return string
     */
    public function getInterfaceCode();

    /**
     * @return string
     */
    public function getInterfaceText();

    /**
     * @return StateReference
     */
    public function getState();

    /**
     * @param string $interfaceCode
     * @return $this
     */
    public function setInterfaceCode(string $interfaceCode);

    /**
     * @param string $interfaceText
     * @return $this
     */
    public function setInterfaceText(string $interfaceText);

    /**
     * @param StateReference $state
     * @return $this
     */
    public function setState(StateReference $state);

}
