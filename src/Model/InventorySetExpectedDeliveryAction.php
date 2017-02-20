<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class InventorySetExpectedDeliveryAction extends InventoryUpdateAction {
    protected $expectedDelivery;
    const DISCRIMINATOR_VALUE = 'setExpectedDelivery';

    /**
     * @return \DateTimeImmutable
     */
    public function getExpectedDelivery(): \DateTimeImmutable
    {
        if (is_null($this->expectedDelivery)) {
            $value = $this->raw('expectedDelivery');
            if (!is_null($value)) {
                $this->expectedDelivery = new \DateTimeImmutable($value);
            } else {
                return new \DateTimeImmutable();
            }
        }
        return $this->expectedDelivery;
    }
                
}
