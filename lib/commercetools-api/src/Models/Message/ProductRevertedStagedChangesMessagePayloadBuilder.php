<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductRevertedStagedChangesMessagePayload>
 */
final class ProductRevertedStagedChangesMessagePayloadBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $type;

    /**
     * @var ?array
     */
    private $removedImageUrls;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

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
    public function withType(?string $type)
    {
        $this->type = $type;

        return $this;
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
            $this->type,
            $this->removedImageUrls
        );
    }

    public static function of(): ProductRevertedStagedChangesMessagePayloadBuilder
    {
        return new self();
    }
}
