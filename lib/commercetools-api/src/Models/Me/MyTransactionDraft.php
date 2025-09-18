<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface MyTransactionDraft extends JsonObject
{
    public const FIELD_TIMESTAMP = 'timestamp';
    public const FIELD_TYPE = 'type';
    public const FIELD_AMOUNT = 'amount';
    public const FIELD_INTERACTION_ID = 'interactionId';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_INTERFACE_ID = 'interfaceId';

    /**
     * <p>Date and time (UTC) the Transaction took place.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getTimestamp();

    /**
     * <p>Type of the Transaction.
     * Only <code>Authorization</code> or <code>Charge</code> is allowed.</p>
     *

     * @return null|string
     */
    public function getType();

    /**
     * <p>Money value for the Transaction.</p>
     *

     * @return null|Money
     */
    public function getAmount();

    /**
     * <p>Identifier used by the payment service that manages the Transaction.
     * Can be used to correlate the Transaction to an interface interaction.</p>
     *

     * @return null|string
     */
    public function getInteractionId();

    /**
     * <p>Custom Fields of the Transaction.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * <p>Identifier used by the payment service that processes the Payment (for example, a PSP) in the current transaction.</p>
     *

     * @return null|string
     */
    public function getInterfaceId();

    /**
     * @param ?DateTimeImmutable $timestamp
     */
    public function setTimestamp(?DateTimeImmutable $timestamp): void;

    /**
     * @param ?string $type
     */
    public function setType(?string $type): void;

    /**
     * @param ?Money $amount
     */
    public function setAmount(?Money $amount): void;

    /**
     * @param ?string $interactionId
     */
    public function setInteractionId(?string $interactionId): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;

    /**
     * @param ?string $interfaceId
     */
    public function setInterfaceId(?string $interfaceId): void;
}
