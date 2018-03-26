<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\JsonCollection;
use Commercetools\Base\DiscriminatorResolver;


class CartUpdateActionCollectionModel extends JsonCollection implements CartUpdateActionCollection {

    /**
     * @param CartUpdateAction $value
     * @return CartUpdateActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartUpdateAction) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartUpdateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartUpdateAction) {
            $resolvedClass = $this->resolveDiscriminator(CartUpdateAction::class, $data);
            $data = $this->mapData($resolvedClass, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
