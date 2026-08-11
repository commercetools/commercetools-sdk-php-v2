<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<VariantRemoveImageAction>
 */
final class VariantRemoveImageActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $imageUrl;

    /**

     * @var ?bool
     */
    private $staged;

    /**
     * <p>The URL of the image to remove.</p>
     *

     * @return null|string
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * <p>Whether only the staged image is removed. If <code>false</code>, both the current and staged image is removed.</p>
     *

     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * @param ?string $imageUrl
     * @return $this
     */
    public function withImageUrl(?string $imageUrl)
    {
        $this->imageUrl = $imageUrl;

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


    public function build(): VariantRemoveImageAction
    {
        return new VariantRemoveImageActionModel(
            $this->imageUrl,
            $this->staged
        );
    }

    public static function of(): VariantRemoveImageActionBuilder
    {
        return new self();
    }
}
