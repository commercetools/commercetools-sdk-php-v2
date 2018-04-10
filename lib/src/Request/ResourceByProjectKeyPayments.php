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
use Commercetools\Types\Payment\Payment;
use Commercetools\Builder\PaymentUpdateBuilder;

use Commercetools\Types\Payment\PaymentDraft;


class ResourceByProjectKeyPayments extends Resource
{
    /**
     * @return ResourceByProjectKeyPaymentsKeyByKey
     */
    public function withKey($key = null): ResourceByProjectKeyPaymentsKeyByKey {
        $args = array_merge($this->getArgs(), array_filter(['key' => $key], function($value) { return !is_null($value); }));
        return new ResourceByProjectKeyPaymentsKeyByKey($this->getUri() . '/key={key}', $args, $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyPaymentsByID
     */
    public function withId($ID = null): ResourceByProjectKeyPaymentsByID {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new ResourceByProjectKeyPaymentsByID($this->getUri() . '/{ID}', $args, $this->getMapper());
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


    /**
     * @param Payment $payment
     * @return PaymentUpdateBuilder
     */
    public function update(Payment $payment): PaymentUpdateBuilder
    {
        $builder = new PaymentUpdateBuilder(function(PaymentUpdateBuilder $builder) { return $this->withId($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($payment);
        if ($payment instanceof MapperAware) {
            $builder->setMapper($payment->getMapper());
        }
        return $builder;
    }

    /**
     * @param Payment $payment
     * @return ByProjectKeyPaymentsByIDDelete
     */
    public function delete(Payment $payment): ByProjectKeyPaymentsByIDDelete
    {
        return $this->withId($payment->getId())->delete()->withVersion($payment->getVersion());
    }

    /**
     * @param PaymentDraft|callable $paymentDraft builder function <code>
     *   function(PaymentDraft $paymentDraft): PaymentDraft {
     *     // modify $draft as needed
     *     return $paymentDraft;
     *   }
     *   </code>
     * @throws InvalidArgumentException
     * @return ByProjectKeyPaymentsPost
     */
    public function create($paymentDraft): ByProjectKeyPaymentsPost
    {
        if (is_callable($paymentDraft)) {
            $callback = $paymentDraft;
            $emptyDraft = $this->mapData(PaymentDraft::class, null);
            $paymentDraft = $callback($emptyDraft);
        }
        if (!$paymentDraft instanceof PaymentDraft) {
            throw new InvalidArgumentException();
        }
        return $this->post($paymentDraft);
    }
}
