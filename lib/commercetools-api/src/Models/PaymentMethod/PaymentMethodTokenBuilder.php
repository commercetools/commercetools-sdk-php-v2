<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\PaymentMethod;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<PaymentMethodToken>
 */
final class PaymentMethodTokenBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $value;

    /**
     * <p>Tokenized representation of the Payment Method.</p>
     * <p>It is <em>displayed</em> in the following instances:</p>
     * <ul>
     * <li>in the payload of an API Extension for Payments and PaymentMethods</li>
     * <li>when querying Payments and PaymentMethods</li>
     * </ul>
     * <p>It is <em>masked</em> in the following instances:</p>
     * <ul>
     * <li>in the payload of Payment and PaymentMethod messages</li>
     * <li>when querying MyPayments</li>
     * <li>in referenced Payments and PaymentMethods embedded through <a href="/general-concepts#reference-expansion">Reference Expansion</a></li>
     * </ul>
     *

     * @return null|string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param ?string $value
     * @return $this
     */
    public function withValue(?string $value)
    {
        $this->value = $value;

        return $this;
    }


    public function build(): PaymentMethodToken
    {
        return new PaymentMethodTokenModel(
            $this->value
        );
    }

    public static function of(): PaymentMethodTokenBuilder
    {
        return new self();
    }
}
