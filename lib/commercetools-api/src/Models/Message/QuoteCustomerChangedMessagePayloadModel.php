<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Customer\CustomerReferenceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class QuoteCustomerChangedMessagePayloadModel extends JsonObjectModel implements QuoteCustomerChangedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'QuoteCustomerChanged';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?CustomerReference
     */
    protected $customer;

    /**
     *
     * @var ?CustomerReference
     */
    protected $previousCustomer;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?CustomerReference $customer = null,
        ?CustomerReference $previousCustomer = null,
        ?string $type = null
    ) {
        $this->customer = $customer;
        $this->previousCustomer = $previousCustomer;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>The <a href="/../api/quotes-overview#buyer">Buyer</a> who now owns the Quote.</p>
     *
     *
     * @return null|CustomerReference
     */
    public function getCustomer()
    {
        if (is_null($this->customer)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOMER);
            if (is_null($data)) {
                return null;
            }

            $this->customer = CustomerReferenceModel::of($data);
        }

        return $this->customer;
    }

    /**
     * <p>The previous <a href="/../api/quotes-overview#buyer">Buyer</a>.</p>
     *
     *
     * @return null|CustomerReference
     */
    public function getPreviousCustomer()
    {
        if (is_null($this->previousCustomer)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PREVIOUS_CUSTOMER);
            if (is_null($data)) {
                return null;
            }

            $this->previousCustomer = CustomerReferenceModel::of($data);
        }

        return $this->previousCustomer;
    }


    /**
     * @param ?CustomerReference $customer
     */
    public function setCustomer(?CustomerReference $customer): void
    {
        $this->customer = $customer;
    }

    /**
     * @param ?CustomerReference $previousCustomer
     */
    public function setPreviousCustomer(?CustomerReference $previousCustomer): void
    {
        $this->previousCustomer = $previousCustomer;
    }
}
