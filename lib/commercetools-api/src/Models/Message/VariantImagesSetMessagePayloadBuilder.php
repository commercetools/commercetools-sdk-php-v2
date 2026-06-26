<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\ImageCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<VariantImagesSetMessagePayload>
 */
final class VariantImagesSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?ImageCollection
     */
    private $images;

    /**

     * @var ?ImageCollection
     */
    private $oldImages;

    /**

     * @var ?bool
     */
    private $staged;

    /**
     * <p>The images that were set on the Variant.</p>
     *

     * @return null|ImageCollection
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * <p>The previous images of the Variant.</p>
     *

     * @return null|ImageCollection
     */
    public function getOldImages()
    {
        return $this->oldImages;
    }

    /**
     * <p>Whether the update was only applied to the staged Variant.</p>
     *

     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * @param ?ImageCollection $images
     * @return $this
     */
    public function withImages(?ImageCollection $images)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * @param ?ImageCollection $oldImages
     * @return $this
     */
    public function withOldImages(?ImageCollection $oldImages)
    {
        $this->oldImages = $oldImages;

        return $this;
    }

    /**
     * @param ?bool $staged
     * @return $this
     */
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

        return $this;
    }


    public function build(): VariantImagesSetMessagePayload
    {
        return new VariantImagesSetMessagePayloadModel(
            $this->images,
            $this->oldImages,
            $this->staged
        );
    }

    public static function of(): VariantImagesSetMessagePayloadBuilder
    {
        return new self();
    }
}
