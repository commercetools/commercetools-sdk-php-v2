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
use stdClass;

/**
 * @implements Builder<VariantPublishedMessagePayload>
 */
final class VariantPublishedMessagePayloadBuilder implements Builder
{
    public function build(): VariantPublishedMessagePayload
    {
        return new VariantPublishedMessagePayloadModel(
        );
    }

    public static function of(): VariantPublishedMessagePayloadBuilder
    {
        return new self();
    }
}
