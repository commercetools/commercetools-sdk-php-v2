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
     * <p>List of image URLs that were removed during the <a href="ctp:api:type:ProductRevertStagedChangesAction">Revert Staged Changes</a> update action.</p>
     *

     * @return null|array
     */
    public function getRemovedImageUrls()
    {
        return $this->removedImageUrls;
    }

    /**
     * @param ?array $removedImageUrls
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
