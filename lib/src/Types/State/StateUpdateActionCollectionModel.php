<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Base\JsonCollection;
use Commercetools\Base\DiscriminatorResolver;


class StateUpdateActionCollectionModel extends JsonCollection implements StateUpdateActionCollection {

    /**
     * @param StateUpdateAction $value
     * @return StateUpdateActionCollection
     */
    public function add($value) {
        if (!$value instanceof StateUpdateAction) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return StateUpdateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof StateUpdateAction) {
            $resolvedClass = $this->resolveDiscriminator(StateUpdateAction::class, $data);
            $data = $this->mapData($resolvedClass, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
