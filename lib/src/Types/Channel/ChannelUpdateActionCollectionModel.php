<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Base\JsonCollection;
use Commercetools\Base\DiscriminatorResolver;


class ChannelUpdateActionCollectionModel extends JsonCollection implements ChannelUpdateActionCollection {

    /**
     * @param ChannelUpdateAction $value
     * @return ChannelUpdateActionCollection
     */
    public function add($value) {
        if (!$value instanceof ChannelUpdateAction) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ChannelUpdateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ChannelUpdateAction) {
            $resolvedClass = $this->resolveDiscriminator(ChannelUpdateAction::class, $data);
            $data = $this->mapData($resolvedClass, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
