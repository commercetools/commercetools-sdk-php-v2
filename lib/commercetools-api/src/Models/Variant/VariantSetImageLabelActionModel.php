<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class VariantSetImageLabelActionModel extends JsonObjectModel implements VariantSetImageLabelAction
{
    public const DISCRIMINATOR_VALUE = 'setImageLabel';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $imageUrl;

    /**
     *
     * @var ?string
     */
    protected $label;

    /**
     *
     * @var ?bool
     */
    protected $staged;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $imageUrl = null,
        ?string $label = null,
        ?bool $staged = null,
        ?string $action = null
    ) {
        $this->imageUrl = $imageUrl;
        $this->label = $label;
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
     * <p>The URL of the image to set the label.</p>
     *
     *
     * @return null|string
     */
    public function getImageUrl()
    {
        if (is_null($this->imageUrl)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_IMAGE_URL);
            if (is_null($data)) {
                return null;
            }
            $this->imageUrl = (string) $data;
        }

        return $this->imageUrl;
    }

    /**
     * <p>Value to set. If empty, any existing value will be removed.</p>
     *
     *
     * @return null|string
     */
    public function getLabel()
    {
        if (is_null($this->label)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LABEL);
            if (is_null($data)) {
                return null;
            }
            $this->label = (string) $data;
        }

        return $this->label;
    }

    /**
     * <p>If <code>true</code>, only the staged image is updated. If <code>false</code>, both the current and staged image is updated.</p>
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
     * @param ?string $imageUrl
     */
    public function setImageUrl(?string $imageUrl): void
    {
        $this->imageUrl = $imageUrl;
    }

    /**
     * @param ?string $label
     */
    public function setLabel(?string $label): void
    {
        $this->label = $label;
    }

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }
}
