<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Api\Models\Common\ImageCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<VariantSetImagesAction>
 */
final class VariantSetImagesActionBuilder implements Builder
{
    /**

     * @var ?ImageCollection
     */
    private $images;

    /**

     * @var ?bool
     */
    private $staged;

    /**
     * <p>Images to set for the Variant.</p>
     *

     * @return null|ImageCollection
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * <p>Whether only the staged images are updated. If <code>false</code>, both the current and staged images are updated.</p>
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
     * @param ?bool $staged
     * @return $this
     */
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

        return $this;
    }


    public function build(): VariantSetImagesAction
    {
        return new VariantSetImagesActionModel(
            $this->images,
            $this->staged
        );
    }

    public static function of(): VariantSetImagesActionBuilder
    {
        return new self();
    }
}
