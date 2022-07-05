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
 * @implements Builder<StagedQuoteValidToSetMessagePayload>
 */
final class StagedQuoteValidToSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?DateTimeImmutable
     */
    private $validTo;

    /**

     * @return null|DateTimeImmutable
     */
    public function getValidTo()
    {
        return $this->validTo;
    }

    /**
     * @param ?DateTimeImmutable $validTo
     * @return $this
     */
    public function withValidTo(?DateTimeImmutable $validTo)
    {
        $this->validTo = $validTo;

        return $this;
    }


    public function build(): StagedQuoteValidToSetMessagePayload
    {
        return new StagedQuoteValidToSetMessagePayloadModel(
            $this->validTo
        );
    }

    public static function of(): StagedQuoteValidToSetMessagePayloadBuilder
    {
        return new self();
    }
}
