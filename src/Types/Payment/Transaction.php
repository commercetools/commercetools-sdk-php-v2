<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Common\TypedMoney;

interface Transaction extends JsonObject {
    const FIELD_ID = 'id';
    const FIELD_TIMESTAMP = 'timestamp';
    const FIELD_TYPE = 'type';
    const FIELD_AMOUNT = 'amount';
    const FIELD_INTERACTION_ID = 'interactionId';
    const FIELD_STATE = 'state';

    /**
     * @return string
     */
    public function getId();

    /**
     * @return \DateTimeImmutable
     */
    public function getTimestamp();

    /**
     * @return string
     */
    public function getType();

    /**
     * @return TypedMoney
     */
    public function getAmount();

    /**
     * @return string
     */
    public function getInteractionId();

    /**
     * @return string
     */
    public function getState();

    /**
     * @param string $id
     * @return $this
     */
    public function setId(string $id);

    /**
     * @param \DateTimeImmutable $timestamp
     * @return $this
     */
    public function setTimestamp($timestamp);

    /**
     * @param string $type
     * @return $this
     */
    public function setType(string $type);

    /**
     * @param TypedMoney $amount
     * @return $this
     */
    public function setAmount(TypedMoney $amount);

    /**
     * @param string $interactionId
     * @return $this
     */
    public function setInteractionId(string $interactionId);

    /**
     * @param string $state
     * @return $this
     */
    public function setState(string $state);

}
