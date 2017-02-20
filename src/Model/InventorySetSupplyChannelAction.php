<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class InventorySetSupplyChannelAction extends InventoryUpdateAction {
    protected $supplyChannel;
    const DISCRIMINATOR_VALUE = 'setSupplyChannel';

    /**
     * @return ChannelReference
     */
    public function getSupplyChannel(): ChannelReference
    {
        if (is_null($this->supplyChannel)) {
            $value = $this->raw('supplyChannel');
            if (!is_null($value)) {
                $this->supplyChannel = Mapper::map($value, ChannelReference::class);
            } else {
                return Mapper::map([], ChannelReference::class);
            }
        }
        return $this->supplyChannel;
    }
                
}
