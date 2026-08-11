<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\ImageCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class VariantImagesSetMessagePayloadModel extends JsonObjectModel implements VariantImagesSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'VariantImagesSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?ImageCollection
     */
    protected $images;

    /**
     *
     * @var ?ImageCollection
     */
    protected $oldImages;

    /**
     *
     * @var ?bool
     */
    protected $staged;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ImageCollection $images = null,
        ?ImageCollection $oldImages = null,
        ?bool $staged = null,
        ?string $type = null
    ) {
        $this->images = $images;
        $this->oldImages = $oldImages;
        $this->staged = $staged;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>The images that were set on the Variant.</p>
     *
     *
     * @return null|ImageCollection
     */
    public function getImages()
    {
        if (is_null($this->images)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_IMAGES);
            if (is_null($data)) {
                return null;
            }
            $this->images = ImageCollection::fromArray($data);
        }

        return $this->images;
    }

    /**
     * <p>The previous images of the Variant.</p>
     *
     *
     * @return null|ImageCollection
     */
    public function getOldImages()
    {
        if (is_null($this->oldImages)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_OLD_IMAGES);
            if (is_null($data)) {
                return null;
            }
            $this->oldImages = ImageCollection::fromArray($data);
        }

        return $this->oldImages;
    }

    /**
     * <p>Whether the update was only applied to the staged Variant.</p>
     *
     *
     * @return null|bool
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_STAGED);
            if (is_null($data)) {
                return null;
            }
            $this->staged = (bool) $data;
        }

        return $this->staged;
    }


    /**
     * @param ?ImageCollection $images
     */
    public function setImages(?ImageCollection $images): void
    {
        $this->images = $images;
    }

    /**
     * @param ?ImageCollection $oldImages
     */
    public function setOldImages(?ImageCollection $oldImages): void
    {
        $this->oldImages = $oldImages;
    }

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }
}
