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

interface StandalonePriceValidFromSetMessagePayload extends MessagePayload
{
    public const FIELD_VALID_FROM = 'validFrom';
    public const FIELD_PREVIOUS_VALID_FROM = 'previousValidFrom';

    /**
     * <p>Value of <a href="ctp:api:type:StandalonePrice">StandalonePrice</a> <code>validFrom</code> after the <a href="ctp:api:type:StandalonePriceSetValidFromAction">Set Valid From</a> update action.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidFrom();

    /**
     * <p>Value of <a href="ctp:api:type:StandalonePrice">StandalonePrice</a> <code>validFrom</code> before the <a href="ctp:api:type:StandalonePriceSetValidFromAction">Set Valid From</a> update action.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getPreviousValidFrom();

    /**
     * @param ?DateTimeImmutable $validFrom
     */
    public function setValidFrom(?DateTimeImmutable $validFrom): void;

    /**
     * @param ?DateTimeImmutable $previousValidFrom
     */
    public function setPreviousValidFrom(?DateTimeImmutable $previousValidFrom): void;
}
