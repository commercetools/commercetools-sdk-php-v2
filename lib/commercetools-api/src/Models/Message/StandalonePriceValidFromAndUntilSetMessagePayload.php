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

interface StandalonePriceValidFromAndUntilSetMessagePayload extends MessagePayload
{
    public const FIELD_VALID_FROM = 'validFrom';
    public const FIELD_PREVIOUS_VALID_FROM = 'previousValidFrom';
    public const FIELD_VALID_UNTIL = 'validUntil';
    public const FIELD_PREVIOUS_VALID_UNTIL = 'previousValidUntil';

    /**
     * <p>Value of <a href="ctp:api:type:StandalonePrice">StandalonePrice</a> <code>validFrom</code> after the <a href="ctp:api:type:StandalonePriceSetValidFromAndUntilAction">Set Valid From and Until</a> update action.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidFrom();

    /**
     * <p>Value of <a href="ctp:api:type:StandalonePrice">StandalonePrice</a> <code>validFrom</code> before the <a href="ctp:api:type:StandalonePriceSetValidFromAndUntilAction">Set Valid From and Until</a> update action.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getPreviousValidFrom();

    /**
     * <p>Value of <a href="ctp:api:type:StandalonePrice">StandalonePrice</a> <code>validUntil</code> after the <a href="ctp:api:type:StandalonePriceSetValidFromAndUntilAction">Set Valid From and Until</a> update action.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidUntil();

    /**
     * <p>Value of <a href="ctp:api:type:StandalonePrice">StandalonePrice</a> <code>validUntil</code> before the <a href="ctp:api:type:StandalonePriceSetValidFromAndUntilAction">Set Valid From and Until</a> update action.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getPreviousValidUntil();

    /**
     * @param ?DateTimeImmutable $validFrom
     */
    public function setValidFrom(?DateTimeImmutable $validFrom): void;

    /**
     * @param ?DateTimeImmutable $previousValidFrom
     */
    public function setPreviousValidFrom(?DateTimeImmutable $previousValidFrom): void;

    /**
     * @param ?DateTimeImmutable $validUntil
     */
    public function setValidUntil(?DateTimeImmutable $validUntil): void;

    /**
     * @param ?DateTimeImmutable $previousValidUntil
     */
    public function setPreviousValidUntil(?DateTimeImmutable $previousValidUntil): void;
}
