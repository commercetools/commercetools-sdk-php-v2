<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Base\MapperAware;
use Commercetools\Types\Payment\Payment;
use Commercetools\Builder\PaymentUpdateBuilder;

use Commercetools\Types\Payment\PaymentDraft;


class Resource38 extends Resource
{
    /**
     * @return Resource39
     */
    public function keyWithKeyValue($key = null): Resource39 {
        $args = array_merge($this->getArgs(), array_filter(['key' => $key], function($value) { return !is_null($value); }));
        return new Resource39($this->getUri() . '/key={key}', $args, $this->getMapper());
    }
    /**
     * @return Resource40
     */
    public function withIDValue($ID = null): Resource40 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource40($this->getUri() . '/{ID}', $args, $this->getMapper());
    }


    /**
     * @return ByProjectKeyPaymentsGet
     */
    public function get(): ByProjectKeyPaymentsGet {
        $args = $this->getArgs();
        return new ByProjectKeyPaymentsGet($args['projectKey']);
    }
    /**
     * @param PaymentDraft $body
     * @return ByProjectKeyPaymentsPost
     */
    public function post(PaymentDraft $body = null): ByProjectKeyPaymentsPost {
        $args = $this->getArgs();
        return new ByProjectKeyPaymentsPost($args['projectKey'], $body);
    }


    public function update(Payment $payment)
    {
        $builder = new PaymentUpdateBuilder(function (PaymentUpdateBuilder $builder) { return $this->withIDValue($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($payment);
        if ($payment instanceof MapperAware) {
            $builder->setMapper($payment->getMapper());
        }
        return $builder;
    }

    public function delete(Payment $payment)
    {
        return $this->withIDValue($payment->getId())->delete()->withVersion($payment->getVersion());
    }

    /**
     * @param PaymentDraft|callable $paymentDraftDraft builder function <code>
     *   function (PaymentDraft $paymentDraft): PaymentDraft {
     *     // modify $draft as needed
     *     return $paymentDraft;
     *   }
     *   </code>
     */
    public function create($paymentDraft)
    {
        if (is_callable($paymentDraft)) {
            $callback = $paymentDraft;
            $emptyDraft = $this->mapData(PaymentDraft::class, null);
            $paymentDraft = $callback($emptyDraft);
        }
        if (!$paymentDraft instanceof PaymentDraft) {
            throw new \InvalidArgumentException();
        }
        return $this->post($paymentDraft);
    }
}
