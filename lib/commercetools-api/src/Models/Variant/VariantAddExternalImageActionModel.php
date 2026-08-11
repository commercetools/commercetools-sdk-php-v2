<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

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
final class VariantAddExternalImageActionModel extends JsonObjectModel implements VariantAddExternalImageAction
{
    public const DISCRIMINATOR_VALUE = 'addExternalImage';
    /**
     *
     * @var ?string
     */
    protected $action;

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
        ?string $action = null
    ) {
        $this->image = $image;
        $this->staged = $staged;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>Value to add to <code>images</code>.</p>
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
     * <p>Whether only the staged <code>images</code> is updated. If <code>false</code>, both the current and staged <code>images</code> are updated.</p>
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
