<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\PaymentMethod;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class PaymentMethodTokenModel extends JsonObjectModel implements PaymentMethodToken
{
    /**
     *
     * @var ?string
     */
    protected $value;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $value = null
    ) {
        $this->value = $value;
    }

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
     *
     * @return null|string
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->value = (string) $data;
        }

        return $this->value;
    }


    /**
     * @param ?string $value
     */
    public function setValue(?string $value): void
    {
        $this->value = $value;
    }
}
