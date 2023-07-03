<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<StandalonePriceValidUntilSetMessagePayload>
 */
final class StandalonePriceValidUntilSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?DateTimeImmutable
     */
    private $validUntil;

    /**

     * @var ?DateTimeImmutable
     */
    private $previousValidUntil;

    /**
     * <p>Value of <a href="ctp:api:type:StandalonePrice">StandalonePrice</a> <code>validUntil</code> after the <a href="ctp:api:type:StandalonePriceSetValidUntilAction">Set Valid Until</a> update action.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
     * <p>Value of <a href="ctp:api:type:StandalonePrice">StandalonePrice</a> <code>validUntil</code> before the <a href="ctp:api:type:StandalonePriceSetValidUntilAction">Set Valid Until</a> update action.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getPreviousValidUntil()
    {
        return $this->previousValidUntil;
    }

    /**
     * @param ?DateTimeImmutable $validUntil
     * @return $this
     */
    public function withValidUntil(?DateTimeImmutable $validUntil)
    {
        $this->validUntil = $validUntil;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $previousValidUntil
     * @return $this
     */
    public function withPreviousValidUntil(?DateTimeImmutable $previousValidUntil)
    {
        $this->previousValidUntil = $previousValidUntil;

        return $this;
    }


    public function build(): StandalonePriceValidUntilSetMessagePayload
    {
        return new StandalonePriceValidUntilSetMessagePayloadModel(
            $this->validUntil,
            $this->previousValidUntil
        );
    }

    public static function of(): StandalonePriceValidUntilSetMessagePayloadBuilder
    {
        return new self();
    }
}
