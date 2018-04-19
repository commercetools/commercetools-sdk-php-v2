<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Subscription\SubscriptionUpdateActionModel;

class SubscriptionSetKeyActionModel extends SubscriptionUpdateActionModel implements SubscriptionSetKeyAction
{
    const DISCRIMINATOR_VALUE = 'setKey';

    /**
     * @var string
     */
    protected $key;

    /**
     * @return string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            $value = $this->raw(SubscriptionSetKeyAction::FIELD_KEY);
            $value = (string)$value;
            $this->key = $value;
        }
        return $this->key;
    }

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key)
    {
        $this->key = (string)$key;

        return $this;
    }

}
