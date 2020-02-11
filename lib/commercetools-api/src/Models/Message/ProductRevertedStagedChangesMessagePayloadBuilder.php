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
 * @implements Builder<ProductRevertedStagedChangesMessagePayload>
 */
final class ProductRevertedStagedChangesMessagePayloadBuilder implements Builder
{
    /**
     * @var ?array
     */
    private $removedImageUrls;

    /**
     * @return null|array
     */
    public function getRemovedImageUrls()
    {
        return $this->removedImageUrls;
    }

    /**
     * @return $this
     */
    public function withRemovedImageUrls(?array $removedImageUrls)
    {
        $this->removedImageUrls = $removedImageUrls;

        return $this;
    }


    public function build(): ProductRevertedStagedChangesMessagePayload
    {
        return new ProductRevertedStagedChangesMessagePayloadModel(
            $this->removedImageUrls
        );
    }

    public static function of(): ProductRevertedStagedChangesMessagePayloadBuilder
    {
        return new self();
    }
}
