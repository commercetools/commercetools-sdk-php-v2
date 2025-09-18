<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class PaymentTransactionInterfaceIdSetMessagePayloadModel extends JsonObjectModel implements PaymentTransactionInterfaceIdSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'PaymentTransactionInterfaceIdSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $transactionId;

    /**
     *
     * @var ?string
     */
    protected $newInterfaceId;

    /**
     *
     * @var ?string
     */
    protected $oldInterfaceId;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $transactionId = null,
        ?string $newInterfaceId = null,
        ?string $oldInterfaceId = null,
        ?string $type = null
    ) {
        $this->transactionId = $transactionId;
        $this->newInterfaceId = $newInterfaceId;
        $this->oldInterfaceId = $oldInterfaceId;
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
     * <p>Unique identifier of the <a href="ctp:api:type:Transaction">Transaction</a>.</p>
     *
     *
     * @return null|string
     */
    public function getTransactionId()
    {
        if (is_null($this->transactionId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TRANSACTION_ID);
            if (is_null($data)) {
                return null;
            }
            $this->transactionId = (string) $data;
        }

        return $this->transactionId;
    }

    /**
     * <p>Identifier used by the payment service that processes the Payment (for example, a PSP) after <a href="ctp:api:type:PaymentSetTransactionInterfaceIdAction">Set Transaction InterfaceId</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getNewInterfaceId()
    {
        if (is_null($this->newInterfaceId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_NEW_INTERFACE_ID);
            if (is_null($data)) {
                return null;
            }
            $this->newInterfaceId = (string) $data;
        }

        return $this->newInterfaceId;
    }

    /**
     * <p>Identifier used by the payment service that processes the Payment (for example, a PSP) before the <a href="ctp:api:type:PaymentSetTransactionInterfaceIdAction">Set Transaction InterfaceId</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getOldInterfaceId()
    {
        if (is_null($this->oldInterfaceId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_OLD_INTERFACE_ID);
            if (is_null($data)) {
                return null;
            }
            $this->oldInterfaceId = (string) $data;
        }

        return $this->oldInterfaceId;
    }


    /**
     * @param ?string $transactionId
     */
    public function setTransactionId(?string $transactionId): void
    {
        $this->transactionId = $transactionId;
    }

    /**
     * @param ?string $newInterfaceId
     */
    public function setNewInterfaceId(?string $newInterfaceId): void
    {
        $this->newInterfaceId = $newInterfaceId;
    }

    /**
     * @param ?string $oldInterfaceId
     */
    public function setOldInterfaceId(?string $oldInterfaceId): void
    {
        $this->oldInterfaceId = $oldInterfaceId;
    }
}
