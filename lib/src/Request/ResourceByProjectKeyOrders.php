<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Base\MapperAware;
use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Order\Order;
use Commercetools\Builder\OrderUpdateBuilder;

use Commercetools\Types\Order\OrderFromCartDraft;


class ResourceByProjectKeyOrders extends Resource
{
    /**
     * @return ResourceByProjectKeyOrdersImport
     */
    public function import(): ResourceByProjectKeyOrdersImport {
        return new ResourceByProjectKeyOrdersImport($this->getUri() . '/import', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyOrdersOrderNumberByOrderNumber
     */
    public function withOrderNumber($orderNumber = null): ResourceByProjectKeyOrdersOrderNumberByOrderNumber {
        $args = array_merge($this->getArgs(), array_filter(['orderNumber' => $orderNumber], function($value) { return !is_null($value); }));
        return new ResourceByProjectKeyOrdersOrderNumberByOrderNumber($this->getUri() . '/order-number={orderNumber}', $args, $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyOrdersByID
     */
    public function withId($ID = null): ResourceByProjectKeyOrdersByID {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new ResourceByProjectKeyOrdersByID($this->getUri() . '/{ID}', $args, $this->getMapper());
    }


    /**
     * @return ByProjectKeyOrdersGet
     */
    public function get(): ByProjectKeyOrdersGet {
        $args = $this->getArgs();
        return new ByProjectKeyOrdersGet($args['projectKey']);
    }
    /**
     * @param OrderFromCartDraft $body
     * @return ByProjectKeyOrdersPost
     */
    public function post(OrderFromCartDraft $body = null): ByProjectKeyOrdersPost {
        $args = $this->getArgs();
        return new ByProjectKeyOrdersPost($args['projectKey'], $body);
    }


    /**
     * @param Order $order
     * @return OrderUpdateBuilder
     */
    public function update(Order $order): OrderUpdateBuilder
    {
        $builder = new OrderUpdateBuilder(function(OrderUpdateBuilder $builder) { return $this->withId($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($order);
        if ($order instanceof MapperAware) {
            $builder->setMapper($order->getMapper());
        }
        return $builder;
    }

    /**
     * @param Order $order
     * @return ByProjectKeyOrdersByIDDelete
     */
    public function delete(Order $order): ByProjectKeyOrdersByIDDelete
    {
        return $this->withId($order->getId())->delete()->withVersion($order->getVersion());
    }

    /**
     * @param OrderFromCartDraft|callable $orderFromCartDraft builder function <code>
     *   function(OrderFromCartDraft $orderFromCartDraft): OrderFromCartDraft {
     *     // modify $draft as needed
     *     return $orderFromCartDraft;
     *   }
     *   </code>
     * @throws InvalidArgumentException
     * @return ByProjectKeyOrdersPost
     */
    public function create($orderFromCartDraft): ByProjectKeyOrdersPost
    {
        if (is_callable($orderFromCartDraft)) {
            $callback = $orderFromCartDraft;
            $emptyDraft = $this->mapData(OrderFromCartDraft::class, null);
            $orderFromCartDraft = $callback($emptyDraft);
        }
        if (!$orderFromCartDraft instanceof OrderFromCartDraft) {
            throw new InvalidArgumentException();
        }
        return $this->post($orderFromCartDraft);
    }
}
