<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductRevertedStagedChangesMessagePayloadModel extends JsonObjectModel implements ProductRevertedStagedChangesMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'ProductRevertedStagedChanges';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?array
     */
    protected $removedImageUrls;


    public function __construct(
        array $removedImageUrls = null
    ) {
        $this->removedImageUrls = $removedImageUrls;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
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
     * @return null|array
     */
    public function getRemovedImageUrls()
    {
        if (is_null($this->removedImageUrls)) {
            /** @psalm-var ?array<int, mixed> $data */
            $data = $this->raw(self::FIELD_REMOVED_IMAGE_URLS);
            if (is_null($data)) {
                return null;
            }
            $this->removedImageUrls = $data;
        }

        return $this->removedImageUrls;
    }


    public function setRemovedImageUrls(?array $removedImageUrls): void
    {
        $this->removedImageUrls = $removedImageUrls;
    }
}
