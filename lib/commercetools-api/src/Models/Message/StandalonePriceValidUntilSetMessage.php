<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface StandalonePriceValidUntilSetMessage extends Message
{
    public const FIELD_VALID_UNTIL = 'validUntil';
    public const FIELD_PREVIOUS_VALID_UNTIL = 'previousValidUntil';

    /**
     * <p>Value of <a href="ctp:api:type:StandalonePrice">StandalonePrice</a> <code>validUntil</code> after the <a href="ctp:api:type:StandalonePriceSetValidUntilAction">Set Valid Until</a> update action.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidUntil();

    /**
     * <p>Value of <a href="ctp:api:type:StandalonePrice">StandalonePrice</a> <code>validUntil</code> before the <a href="ctp:api:type:StandalonePriceSetValidUntilAction">Set Valid Until</a> update action.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getPreviousValidUntil();

    /**
     * @param ?DateTimeImmutable $validUntil
     */
    public function setValidUntil(?DateTimeImmutable $validUntil): void;

    /**
     * @param ?DateTimeImmutable $previousValidUntil
     */
    public function setPreviousValidUntil(?DateTimeImmutable $previousValidUntil): void;
}
