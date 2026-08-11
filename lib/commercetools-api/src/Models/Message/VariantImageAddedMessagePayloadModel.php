<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\Image;
use Commercetools\Api\Models\Common\ImageModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class VariantImageAddedMessagePayloadModel extends JsonObjectModel implements VariantImageAddedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'VariantImageAdded';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?Image
     */
    protected $image;

    /**
     *
     * @var ?bool
     */
    protected $staged;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?Image $image = null,
        ?bool $staged = null,
        ?string $type = null
    ) {
        $this->image = $image;
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
     * <p><a href="ctp:api:type:Image">Image</a> that was added.</p>
     *
     *
     * @return null|Image
     */
    public function getImage()
    {
        if (is_null($this->image)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_IMAGE);
            if (is_null($data)) {
                return null;
            }

            $this->image = ImageModel::of($data);
        }

        return $this->image;
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
     * @param ?Image $image
     */
    public function setImage(?Image $image): void
    {
        $this->image = $image;
    }

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }
}
