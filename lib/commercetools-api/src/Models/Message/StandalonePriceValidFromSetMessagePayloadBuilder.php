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
 * @implements Builder<StandalonePriceValidFromSetMessagePayload>
 */
final class StandalonePriceValidFromSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?DateTimeImmutable
     */
    private $validFrom;

    /**

     * @var ?DateTimeImmutable
     */
    private $previousValidFrom;

    /**
     * <p>Value of <a href="ctp:api:type:StandalonePrice">StandalonePrice</a> <code>validFrom</code> after the <a href="ctp:api:type:StandalonePriceSetValidFromAction">Set Valid From</a> update action.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * <p>Value of <a href="ctp:api:type:StandalonePrice">StandalonePrice</a> <code>validFrom</code> before the <a href="ctp:api:type:StandalonePriceSetValidFromAction">Set Valid From</a> update action.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getPreviousValidFrom()
    {
        return $this->previousValidFrom;
    }

    /**
     * @param ?DateTimeImmutable $validFrom
     * @return $this
     */
    public function withValidFrom(?DateTimeImmutable $validFrom)
    {
        $this->validFrom = $validFrom;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $previousValidFrom
     * @return $this
     */
    public function withPreviousValidFrom(?DateTimeImmutable $previousValidFrom)
    {
        $this->previousValidFrom = $previousValidFrom;

        return $this;
    }


    public function build(): StandalonePriceValidFromSetMessagePayload
    {
        return new StandalonePriceValidFromSetMessagePayloadModel(
            $this->validFrom,
            $this->previousValidFrom
        );
    }

    public static function of(): StandalonePriceValidFromSetMessagePayloadBuilder
    {
        return new self();
    }
}
