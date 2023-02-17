<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class GoogleCloudFunctionDestinationModel extends JsonObjectModel implements GoogleCloudFunctionDestination
{
    public const DISCRIMINATOR_VALUE = 'GoogleCloudFunction';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $url;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $url = null,
        ?string $type = null
    ) {
        $this->url = $url;
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
     * <p>URL to the target function.</p>
     *
     *
     * @return null|string
     */
    public function getUrl()
    {
        if (is_null($this->url)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_URL);
            if (is_null($data)) {
                return null;
            }
            $this->url = (string) $data;
        }

        return $this->url;
    }


    /**
     * @param ?string $url
     */
    public function setUrl(?string $url): void
    {
        $this->url = $url;
    }
}
