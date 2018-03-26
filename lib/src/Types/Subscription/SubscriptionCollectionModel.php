<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Base\JsonCollection;

class SubscriptionCollectionModel extends JsonCollection implements SubscriptionCollection {

    /**
     * @param Subscription $value
     * @return SubscriptionCollection
     */
    public function add($value) {
        if (!$value instanceof Subscription) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return Subscription
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof Subscription) {
            $data = $this->mapData(Subscription::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }

    protected function index($data)
    {
        foreach ($data as $key => $value) {
            if (isset($value['id'])) {
                $this->addToIndex('id', $value['id'], $key);
            }
        }
    }

    /**
     * @param string $id
     * @return Subscription
     */
    public function byId($id)
    {
        return $this->valueByKey('id', $id);
    }
}
