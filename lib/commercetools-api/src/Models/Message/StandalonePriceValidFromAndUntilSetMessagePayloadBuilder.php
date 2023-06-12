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
 * @implements Builder<StandalonePriceValidFromAndUntilSetMessagePayload>
 */
final class StandalonePriceValidFromAndUntilSetMessagePayloadBuilder implements Builder
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

     * @var ?DateTimeImmutable
     */
    private $validUntil;

    /**

     * @var ?DateTimeImmutable
     */
    private $previousValidUntil;

    /**
     * <p>Value of <a href="ctp:api:type:StandalonePrice">StandalonePrice</a> <code>validFrom</code> after the <a href="ctp:api:type:StandalonePriceSetValidFromAndUntilAction">Set Valid From and Until</a> update action.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * <p>Value of <a href="ctp:api:type:StandalonePrice">StandalonePrice</a> <code>validFrom</code> before the <a href="ctp:api:type:StandalonePriceSetValidFromAndUntilAction">Set Valid From and Until</a> update action.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getPreviousValidFrom()
    {
        return $this->previousValidFrom;
    }

    /**
     * <p>Value of <a href="ctp:api:type:StandalonePrice">StandalonePrice</a> <code>validUntil</code> after the <a href="ctp:api:type:StandalonePriceSetValidFromAndUntilAction">Set Valid From and Until</a> update action.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
     * <p>Value of <a href="ctp:api:type:StandalonePrice">StandalonePrice</a> <code>validUntil</code> before the <a href="ctp:api:type:StandalonePriceSetValidFromAndUntilAction">Set Valid From and Until</a> update action.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getPreviousValidUntil()
    {
        return $this->previousValidUntil;
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


    public function build(): StandalonePriceValidFromAndUntilSetMessagePayload
    {
        return new StandalonePriceValidFromAndUntilSetMessagePayloadModel(
            $this->validFrom,
            $this->previousValidFrom,
            $this->validUntil,
            $this->previousValidUntil
        );
    }

    public static function of(): StandalonePriceValidFromAndUntilSetMessagePayloadBuilder
    {
        return new self();
    }
}
